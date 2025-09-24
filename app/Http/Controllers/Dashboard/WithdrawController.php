<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Enums\WithdrawalOption;
use App\Http\Controllers\Controller;
use App\Http\Requests\WithdrawalRequest;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $withdrawalOptions = WithdrawalOption::cases();
        return view('dashboard.user.withdraw', compact('withdrawalOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WithdrawalRequest $request)
    {

        try {

            Transaction::create([
                'user_id' => Auth::id(),
                'amount' => $request->amount,
                'transaction_id' => rand(1111111111, 999999999),
                'status' => TransactionStatus::PENDING,
                'type' => TransactionType::WITHDRAWAL,
                'address' => $request->address,
                'withdrawal_method' => $request->crypto
            ]);


            Auth::user()->decrement('balance', $request->amount);

            Alert::info('Placed', 'Your withdrawal has been submitted successfully');

            return redirect()->route('dashboard');

        } catch (\Throwable $th) {
            Alert::error('Error', 'An Error Occurred While Processing Your withdrawal Request');
            return redirect()->route('withdraw.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
