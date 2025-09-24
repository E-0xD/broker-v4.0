<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class TransactionHistoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {

            $transactions = Auth::user()->transactions;

            return view('dashboard.user.transaction-history', compact('transactions'));

        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Error Occurred');
            return redirect()->route('dashboard');
        }
    }
}
