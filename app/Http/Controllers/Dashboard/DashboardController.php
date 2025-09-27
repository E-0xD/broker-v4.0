<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\Transaction;
use App\Models\Trade;
use App\Enums\TransactionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        try {
            $user = Auth::user();

            $investments = Investment::where('user_id', $user->id)->get();

            $totalActiveInvestment = $investments->where('status', 'active')->sum('amount');
            $totalInvestment = $investments->sum('amount');
            $totalDailyRoi = $investments->where('status', 'active')->sum('daily_earning');
            $lifetimeProfit = $investments->sum('total_earned');

            $totalActiveTrades = $user->trades->sum('amount');

            $chartData = $this->chartData($user->id);

            return view('dashboard.user.dashboard', compact(
                'user',
                'totalActiveInvestment',
                'totalInvestment',
                'totalDailyRoi',
                'lifetimeProfit',
                'chartData',
                'totalActiveTrades'
            ));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Error Occurred');
            return redirect()->route('home');
        }
    }

    public function chartData($userID)
    {
        try {
            // Get monthly ROI data for the chart
            $monthlyData = Transaction::where('user_id', $userID)
                ->whereYear('created_at', now()->year)
                ->selectRaw('MONTH(created_at) as month, SUM(CASE WHEN type = "roi" THEN amount ELSE 0 END) as total_roi, SUM(CASE WHEN type = "deposit" THEN amount ELSE 0 END) as deposits, SUM(CASE WHEN type = "withdrawal" THEN amount ELSE 0 END) as withdrawals')
                ->groupBy('month')
                ->orderBy('month')
                ->get();

            // Prepare chart data
            $data = [
                'currency' => Auth::user()->currency,
                'monthly' => collect(range(1, 12))->map(function ($month) use ($monthlyData) {
                    $monthData = $monthlyData->firstWhere('month', $month);
                    return [
                        'roi' => $monthData ? round($monthData->total_roi, 2) : 0,
                        'deposits' => $monthData ? round($monthData->deposits, 2) : 0,
                        'withdrawals' => $monthData ? round($monthData->withdrawals, 2) : 0,
                    ];
                })
            ];

            return $data;
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Error Occurred');
            return redirect()->route('home');
        }
    }
}
