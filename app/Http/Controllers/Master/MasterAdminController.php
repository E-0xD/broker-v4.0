<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Enums\UserRole;
use App\Enums\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class MasterAdminController extends Controller
{
    public function index()
    {
        try {
            // Get only admin users
            $admins = User::all();
            return view('dashboard.master.admins.index', compact('admins'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'A Master Dashboard Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function show(User $admin)
    {
        try {
            return view('dashboard.master.admins.show', compact('admin'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'A Master Dashboard Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function updateRole(Request $request, User $admin)
    {
        try {
            $validated = $request->validate([
                'role' => ['required', 'string', 'in:' . UserRole::ADMIN->value . ',' . UserRole::USER->value]
            ]);

            $admin->update(['role' => $validated['role']]);
            Alert::success('Success', 'Admin role updated successfully');
            return redirect()->route('master.admins.show', $admin);
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'A Master Dashboard Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function updateStatus(Request $request, User $admin)
    {
        try {
            $validated = $request->validate([
                'status' => ['required', 'string', 'in:' . implode(',', array_column(UserStatus::cases(), 'value'))]
            ]);

            $admin->update(['status' => $validated['status']]);
            Alert::success('Success', 'Admin status updated successfully');
            return redirect()->route('master.admins.show', $admin);
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'A Master Dashboard Error Occurred');
            return redirect()->route('dashboard');
        }
    }
}