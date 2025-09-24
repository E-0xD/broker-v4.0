<?php

use App\Http\Controllers\Master\MasterAdminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('master/admins')->name('master.admins.')->group(function () {

        Route::get('/', [MasterAdminController::class, 'index'])->name('index');
        Route::get('/{admin}', [MasterAdminController::class, 'show'])->name('show');
        Route::put('/{admin}/role', [MasterAdminController::class, 'updateRole'])->name('update-role');
        Route::put('/{admin}/status', [MasterAdminController::class, 'updateStatus'])->name('update-status');

});