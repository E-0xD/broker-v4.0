<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Transaction;

class TransactionHistoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {

            $transactions = Transaction::where('user_id', Auth::id())->orderBy('created_at', 'asc')->get();

            return view('dashboard.user.transaction-history', compact('transactions'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Error Occurred');
            return redirect()->route('dashboard');
        }
    }
}
