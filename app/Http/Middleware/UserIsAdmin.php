<?php

namespace App\Http\Middleware;

use App\Enums\UserRole;
use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class UserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        
        if ($user->role !== UserRole::ADMIN->value && $user->role !== UserRole::MASTER->value) {
            Alert::error('Access Denied', 'You do not have permission to access this area.');
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
