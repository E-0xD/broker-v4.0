<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\Transaction;
use App\Enums\TransactionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   
    public function index(Request $request)
    {
        $user = Auth::user();

        $investments = Investment::where('user_id', $user->id)->get();

        $totalActiveInvestment = $investments->where('status', 'active')->sum('amount');
        $totalInvestment = $investments->sum('amount');
        $totalDailyRoi = $investments->where('status', 'active')->sum('daily_earning');
        $lifetimeProfit = $investments->sum('total_earned');

        $chartData = $this->chartData($user->id);

        return view('dashboard.user.dashboard', compact(
            'user',
            'totalActiveInvestment',
            'totalInvestment',
            'totalDailyRoi',
            'lifetimeProfit',
            'chartData'
        ));
    }

    public function chartData($userID){
        
        // Get monthly ROI data for the chart
        $monthlyData = Transaction::where('user_id', $userID)
            ->where('type', TransactionType::ROI)
            ->whereYear('created_at', now()->year)
            ->selectRaw('MONTH(created_at) as month, SUM(amount) as total_roi, SUM(CASE WHEN type = "deposit" THEN amount ELSE 0 END) as deposits, SUM(CASE WHEN type = "withdrawal" THEN amount ELSE 0 END) as withdrawals')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Prepare chart data
        $chartData = collect(range(1, 12))->map(function ($month) use ($monthlyData) {
            $monthData = $monthlyData->firstWhere('month', $month);
            return [
                'roi' => $monthData ? round($monthData->total_roi, 2) : 0,
                'deposits' => $monthData ? round($monthData->deposits, 2) : 0,
                'withdrawals' => $monthData ? round($monthData->withdrawals, 2) : 0
            ];
        });

        return $chartData;
    }
}
