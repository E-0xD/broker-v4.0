<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DepositController;
use App\Http\Controllers\Dashboard\TransactionHistoryController;
use App\Http\Controllers\Dashboard\WithdrawController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('board', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::get('deposit/callback', [DepositController::class, 'callback'])->name('deposit.callback');
Route::resource('deposit', DepositController::class)->only(['index', 'create', 'store']);

Route::resource('withdraw', WithdrawController::class)->only(['index', 'create', 'store']);

Route::get('transaction/history', TransactionHistoryController::class)->name('transaction.history');

Route::view('plan', 'dashboard.user.plans')->middleware(['auth', 'verified'])->name('plan');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});
