<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class PlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        try {
            $plans = Plan::where('is_active', true)->get();
            return view('dashboard.user.plans', compact('plans'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Error Occurred');
            return redirect()->route('dashboard');
        }
    }
}
