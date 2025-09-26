<?php

namespace App\Http\Controllers\Payment;

use App\Enums\TransactionStatus;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

// use RealRashid\SweetAlert\Facades\Alert;

class PaymentProcessorController extends Controller
{

    protected $cryptoPaymentProcessor;


    public function __construct()
    {
        $this->cryptoPaymentProcessor = new CryptoPaymentProcessorController();
    }


    public function create(array $data)
    {
        try {
            ['amount' => $amount, 'details' => $details, 'success_url' => $success_url, 'cancel_url' => $cancel_url] = $data;

            $response = $this->cryptoPaymentProcessor->processPayment($amount, $success_url, $cancel_url);


            $responseData = json_decode($response->getContent(), true);


            if (!$responseData['success']) {
                Alert::error('Error', $responseData['message'] ?? 'Payment initialization failed');
                throw new Exception('An Error occurred while initiating your payment, try again later');
            }


            $transactionId = $responseData['data']['transaction_id'];
            $redirectUrl = $responseData['data']['invoice_url'];


            Transaction::create(array_merge(
                $details,
                [
                    'amount' => $amount,
                    'transaction_id' => $transactionId,
                ]
            ));

            return compact('transactionId', 'redirectUrl');
        } catch (\Throwable $th) {
            Alert::error('Error', $responseData['message'] ?? 'Failed To Return Payment URL');
            throw $th;
        }
    }


    public function validate(Request $request)
    {

        try {
            $response = $this->cryptoPaymentProcessor->validatePayment($request->NP_id);


            $responseData = is_string($response) ? json_decode($response, true) : (method_exists($response, 'getContent') ? json_decode($response->getContent(), true) : $response);

            if (!$responseData['success']) {
                Alert::error('Error', $responseData['message'] ?? 'Payment verification failed');
                throw new Exception('Payment verification failed');
            }


            $transactionId = trim($responseData['data']['invoice_id']);

            $transaction = Transaction::where('transaction_id', $transactionId)->first();

            $amount = $responseData['data']['price_amount'];

            $transaction->update(['status' => TransactionStatus::COMPLETED]);


            return compact('amount', 'transactionId');
        } catch (\Throwable $th) {
            Alert::error('Error', 'An error occurred while verifying payment');
            throw $th;
        }
    }
}
