<?php

use App\Http\Controllers\Admin\AdminPlanController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminInvestmentController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // Plan Management Routes
    Route::group(['prefix' => 'plans', 'as' => 'plans.'], function () {
        Route::get('/', [AdminPlanController::class, 'index'])->name('index');
        Route::get('/create', [AdminPlanController::class, 'create'])->name('create');
        Route::post('/', [AdminPlanController::class, 'store'])->name('store');
        Route::get('/{plan}/edit', [AdminPlanController::class, 'edit'])->name('edit');
        Route::put('/{plan}', [AdminPlanController::class, 'update'])->name('update');
        Route::delete('/{plan}', [AdminPlanController::class, 'destroy'])->name('destroy');
    });

    // User Management Routes
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('index');
        Route::get('/{user}', [AdminUserController::class, 'show'])->name('show');
        Route::put('/{user}/balance', [AdminUserController::class, 'updateBalance'])->name('update-balance');
        Route::put('/{user}/status', [AdminUserController::class, 'updateStatus'])->name('update-status');
    });

    // Investment Management Routes
    Route::group(['prefix' => 'investments', 'as' => 'investments.'], function () {
        Route::get('/', [AdminInvestmentController::class, 'index'])->name('index');
        Route::get('/create', [AdminInvestmentController::class, 'create'])->name('create');
        Route::post('/', [AdminInvestmentController::class, 'store'])->name('store');
        Route::post('/{investment}/roi', [AdminInvestmentController::class, 'addRoi'])->name('add-roi');
    });
});
