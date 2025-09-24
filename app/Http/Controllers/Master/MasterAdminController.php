<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Enums\UserRole;
use App\Enums\UserStatus;
use App\Http\Requests\UpdateStatusRequest;
use App\Http\Requests\UpdateUserRoleRequest;
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

    public function updateRole(UpdateUserRoleRequest $request, User $admin)
    {
        try {
            $admin->update(['role' => $request->role]);
            Alert::success('Success', 'Admin role updated successfully');
            return redirect()->route('master.admins.show', $admin);
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'A Master Dashboard Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function updateStatus(UpdateStatusRequest $request, User $admin)
    {
        try {
            $admin->update(['status' => $request->status]);
            Alert::success('Success', 'Admin status updated successfully');
            return redirect()->route('master.admins.show', $admin);
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'A Master Dashboard Error Occurred');
            return redirect()->route('dashboard');
        }
    }
}