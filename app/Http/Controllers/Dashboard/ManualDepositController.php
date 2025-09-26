<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Transaction;
use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Http\Requests\ManualDepositRequest;
use App\Mail\NewManualDeposit;
use App\Models\DepositSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class ManualDepositController extends Controller
{
    public function store(ManualDepositRequest $request)
    {
        try {
            // Store the proof file
            $path = $request->file('payment_proof')->store('payment-proofs', 'public');

            // Create transaction
            $transaction = Transaction::create([
                'user_id' => Auth::id(),
                'amount' => $request->amount,
                'type' => TransactionType::DEPOSIT,
                'status' => TransactionStatus::PENDING,
                'transaction_id' => $request->transaction_id,
                'proof' => $path,
            ]);

            // Send notification email to admin
            Mail::to(config('mail.from.address'))->send(new NewManualDeposit($transaction));

            Alert::success('success', 'Deposit request submitted successfully. Please wait for verification.');
            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::success('error', 'An Error Occurred');
            return redirect()->route('dashboard');
        }
    }
}
