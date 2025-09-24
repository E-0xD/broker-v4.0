<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateBalanceRequest;
use App\Models\User;
use App\Enums\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class AdminUserController extends Controller
{
    public function index()
    {
        try {
            $users = User::where('role', 'user')->get();
            return view('dashboard.admin.users.index', compact('users'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function show(User $user)
    {
        try {
            return view('dashboard.admin.users.show', compact('user'));
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }


    public function updateBalance(UpdateBalanceRequest $request, User $user)
    {
        try {
            $user->update(['balance' => $request->balance]);
            Alert::success('Success', 'User balance updated successfully');
            return redirect()->route('admin.users.show', $user);
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }

    public function updateStatus(Request $request, User $user)
    {
        try {
            $validated = $request->validate([
                'status' => ['required', 'string', 'in:' . implode(',', array_column(UserStatus::cases(), 'value'))]
            ]);

            $user->update(['status' => $validated['status']]);
            Alert::success('Success', 'User status updated successfully');
            return redirect()->route('admin.users.show', $user);
        } catch (\Throwable $th) {
            Log::error($th);
            Alert::error('Error', 'An Admin Error Occurred');
            return redirect()->route('dashboard');
        }
    }
}
