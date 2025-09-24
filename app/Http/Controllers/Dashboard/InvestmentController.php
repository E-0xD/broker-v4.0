<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvestmentRequest;
use App\Models\Investment;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class InvestmentController extends Controller
{

    public function index()
    {
        $investments = Auth::user()->investments()
            ->with('plan')
            ->latest()
            ->paginate(10);

        // return view('dashboard.user.investment.index', compact('investments'));
    }


    public function create()
    {
        $plans = Plan::where('is_active', true)->get();
        // return view('dashboard.user.investment.create', compact('plans'));
    }


    public function store(InvestmentRequest $request)
    {

        $plan = Plan::findOrFail($request->plan_id);

        // Validate investment amount against plan limits
        if ($request->amount < $plan->min_investment || $request->amount > $plan->max_investment) {
            Alert::error('Error', 'Investment amount must be between $' . $plan->min_investment . ' and $' . $plan->max_investment);
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
        return redirect()->route('investment.index');
    }



    /**
     * Process daily earnings for active investments
     */
    public function processEarnings()
    {
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

                $investment->user->increment('balance', $earning);
            }
        }

        return response()->json(['message' => 'Earnings processed successfully']);
    }
}
