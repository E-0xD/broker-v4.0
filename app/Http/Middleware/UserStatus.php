<?php

namespace App\Http\Middleware;

use App\Enums\UserStatus as UserStatusEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class UserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->status === UserStatusEnum::DISABLED->value) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            
            Alert::error('Account Disabled', 'Your account has been disabled. Please contact support for assistance.');
            return redirect()->route('login');
        }

        return $next($request);
    }
}
