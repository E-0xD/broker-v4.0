<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;

class CryptoPaymentProcessorController extends Controller
{
    public function processPayment($amount, $successUrl, $cancelUrl)
    {

        try {
            $response = Http::withHeaders([
                'x-api-key' => config('services.nowpayment.key'),
                'Content-Type' => 'application/json',
            ])->post(config('services.nowpayment.invoice_url'), [
                'price_amount' => $amount,
                'price_currency' => "USD",
                'order_id' => uniqid(),
                'order_description' => config('app.name'),
                'success_url' => route($successUrl),
                'cancel_url' => route($cancelUrl),
                'is_fee_paid_by_user' => true,
            ]);

            if (!$response->successful()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Payment service unavailable'
                ], 503);
            }

            $invoiceUrl = $response->json('invoice_url');
            if (!$invoiceUrl) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid payment response'
                ], 422);
            }

            return response()->json([
                'success' => true,
                'data' => [
                    'invoice_url' => $invoiceUrl,
                    'transaction_id' => $response->json('id'),
                    'amount' => $amount
                ]
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Payment initialization failed',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    public function validatePayment($paymentId)
    {

        try {
            $response = Http::withHeaders([
                'x-api-key' => config('services.nowpayment.key'),
                'Content-Type' => 'application/json',
            ])->get(config('services.nowpayment.payment_url')."/".$paymentId);

            if (!$response->successful()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to fetch payment details'
                ], 503);
            }

           
            $data = $response->json();
            $status = $data['payment_status'] ?? null;

            if (!$status) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid payment status received'
                ], 422);
            }

            return response()->json([
                'success' => true,
                'data' => $data,
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Payment validation failed',
                'error' => $th->getMessage()
            ], 500);
        }
    }
}