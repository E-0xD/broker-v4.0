<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class ManualDepositController extends Controller
{
    public function index()
    {
        $deposits = Transaction::with('user')
            ->where('type', TransactionType::DEPOSIT)
            ->latest()
            ->paginate(10);

        return view('dashboard.admin.deposits.index', compact('deposits'));
    }

    public function approve(Transaction $transaction)
    {

        try {

            $transaction->update([
                'status' => TransactionStatus::COMPLETED
            ]);

            // Increase user's balance
            $transaction->user->increment('balance', $transaction->amount);

            Alert::success('success', 'Deposit approved successfully');
            return back();
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::success('Error', 'An Error Occurred');
            return back();
        }
    }

    public function reject(Transaction $transaction)
    {
        try {

            $transaction->update([
                'status' => TransactionStatus::REJECTED
            ]);

            Alert::success('success', 'Deposit rejected successfully');
            return back();
            
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::success('Error', 'An Error Occurred');
            return back();
        }
    }
}
