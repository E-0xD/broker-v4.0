<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddRoiRequest;
use App\Http\Requests\CreateInvestmentForUserRequest;
use App\Models\Investment;
use App\Models\User;
use App\Models\Plan;
use App\Models\Transaction;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class AdminInvestmentController extends Controller
{
    public function index()
    {
        try {
            $investments = Investment::with(['user', 'plan'])->get();
            return view('dashboard.admin.investments.index', compact('investments'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function create()
    {
        try {
            $users = User::all();
            $plans = Plan::all();
            return view('dashboard.admin.investments.create', compact('users', 'plans'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function store(CreateInvestmentForUserRequest $request)
    {
        try {

            $user = User::find($request->user_id);
            $plan = Plan::find($request->plan_id);

            if ($request->deduct_balance && $user->balance < $request->amount) {
                Alert::error('Error', 'User does not have sufficient balance');
                return back();
            }

            if ($request->amount < $plan->min_investment || $request->amount > $plan->max_investment) {
                Alert::error('Error', 'Amount must be within plan limits');
                return back();
            }

            Investment::create([
                'user_id' => $request->user_id,
                'plan_id' => $request->plan_id,
                'amount' => $request->amount,
                'status' => 'active',
                'daily_earning' => ($request->amount * $plan->daily_percentage) / 100
            ]);

            if ($request->deduct_balance) {
                $user->decrement('balance', $request->amount);
            }

            Alert::success('Success', 'Investment created successfully');
            return redirect()->route('admin.investments.index');
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function addRoi(AddRoiRequest $request, Investment $investment)
    {
        try {

            $investment->increment('total_earned', $request->roi_amount);
            $investment->user->increment('balance', $request->roi_amount);

            Transaction::create([
                'user_id' => $investment->user_id,
                'amount' => $request->roi_amount,
                'transaction_id' => rand(1111111111, 999999999),
                'status' => TransactionStatus::COMPLETED,
                'type' => TransactionType::ROI,
            ]);

            Alert::success('Success', 'ROI added successfully');
            return redirect()->route('admin.investments.index');
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }
}
