<?php

namespace App\Http\Controllers\Dashboard;

use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Http\Controllers\Controller;
use App\Http\Requests\InvestmentRequest;
use App\Models\Investment;
use App\Models\Plan;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class InvestmentController extends Controller
{

    public function create()
    {
        try {
            $plans = Plan::where('is_active', true)->get();
            return view('dashboard.user.create-investment', compact('plans'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function closeAll()
    {
        try {
            $activeInvestments = Investment::where('user_id', Auth::id())
                ->where('status', 'active')
                ->get();

            foreach ($activeInvestments as $investment) {
                // Update investment status
                $investment->update([
                    'status' => 'completed'
                ]);

                // Create transaction for initial investment return
                Transaction::create([
                    'user_id' => Auth::id(),
                    'amount' => $investment->amount,
                    'transaction_id' => rand(1111111111, 999999999),
                    'status' => TransactionStatus::COMPLETED,
                    'type' => TransactionType::INVESTMENT_RETURN,
                    'note' => 'Investment capital return from ' . $investment->plan->title
                ]);

                // Return the initial investment to user's balance
                Auth::user()->increment('balance', $investment->amount);
            }

            Alert::success('Success', 'All investments have been closed and your capital has been returned');
            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An error occurred while closing investments');
            return redirect()->route('dashboard');
        }
    }

    public function store(InvestmentRequest $request)
    {
        try {
            $plan = Plan::findOrFail($request->plan_id);

            // Validate investment amount against plan limits
            if ($request->amount < $plan->min_investment || $request->amount > $plan->max_investment) {
                Alert::error('Error', 'Investment amount must be between ' . Auth::user()->currency . $plan->min_investment .' and ' . Auth::user()->currency . $plan->max_investment);
                return back();
            }

            // Check if user has sufficient balance
            if (Auth::user()->balance < $request->amount) {
                Alert::error('Error', 'Insufficient balance');
                return back();
            }

            // Create investment and deduct balance
            $investment = new Investment([
                'user_id' => Auth::id(),
                'plan_id' => $plan->id,
                'amount' => $request->amount,
                'daily_earning' => $request->amount * ($plan->daily_percentage / 100),
                'status' => 'active',
            ]);

            $investment->save();
            Auth::user()->decrement('balance', $request->amount);

            Alert::success('Success', 'Investment created successfully');
            return redirect()->route('dashboard');
          
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Error Occurred');
            return redirect()->route('dashboard');
        }
    }


    /**
     * Process daily earnings for active investments
     */
    public function processEarnings()
    {

        try {
            $activeInvestments = Investment::where('status', 'active')
                ->where(function ($query) {
                    $query->whereNull('last_earning_date')
                        ->orWhereDate('last_earning_date', '<', now()->toDateString());
                })
                ->get();

            foreach ($activeInvestments as $investment) {
                if ($investment->canEarnToday()) {
                    $earning = $investment->calculateDailyEarning();

                    $investment->update([
                        'total_earned' => $investment->total_earned + $earning,
                        'last_earning_date' => now(),
                    ]);

                    Transaction::create([
                        'user_id' => $investment->user_id,
                        'amount' => $earning,
                        'transaction_id' => rand(1111111111, 999999999),
                        'status' => TransactionStatus::COMPLETED,
                        'type' => TransactionType::ROI,
                    ]);

                    $investment->user->increment('balance', $earning);
                }
            }

            return response()->json(['message' => 'Earnings processed successfully']);
        } catch (\Throwable $th) {
            Log::error($th);
        }
    }
}
