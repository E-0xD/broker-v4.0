<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SavePlanRequest;
use App\Models\Plan;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPlanController extends Controller
{
    public function index()
    {
        try {
            $plans = Plan::all();
            return view('dashboard.admin.plans.index', compact('plans'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function create()
    {
        try {
            return view('dashboard.admin.plans.create');
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function store(SavePlanRequest $request)
    {
        try {
            Plan::create($request->all());
            Alert::success('Success', 'Plan created successfully');
            return redirect()->route('admin.plans.index');
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function edit(Plan $plan)
    {
        try {
            return view('dashboard.admin.plans.edit', compact('plan'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function update(SavePlanRequest $request, Plan $plan)
    {
        try {
            $plan->update($request->all());
            Alert::success('Success', 'Plan updated successfully');
            return redirect()->route('admin.plans.index');
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function destroy(Plan $plan)
    {
        try {
            $plan->delete();
            Alert::success('Success', 'Plan deleted successfully');
            return redirect()->route('admin.plans.index');
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }
}
