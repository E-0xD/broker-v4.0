<?php

use App\Http\Controllers\Master\MasterAdminController;
use App\Http\Controllers\Master\DepositSettingController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'check.status', 'master'])->prefix('master')->name('master.')->group(function () {
    // Admin management routes
    Route::prefix('admins')->name('admins.')->group(function () {
        Route::get('/', [MasterAdminController::class, 'index'])->name('index');
        Route::get('/{admin}', [MasterAdminController::class, 'show'])->name('show');
        Route::put('/{admin}/role', [MasterAdminController::class, 'updateRole'])->name('update-role');
        Route::put('/{admin}/status', [MasterAdminController::class, 'updateStatus'])->name('update-status');
    });

    // Deposit settings routes
    Route::prefix('deposits/settings')->name('deposits.settings.')->group(function () {
        Route::get('/', [DepositSettingController::class, 'index'])->name('index');
        Route::put('/', [DepositSettingController::class, 'update'])->name('update');
    });
});