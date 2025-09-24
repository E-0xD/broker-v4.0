<?php

use App\Http\Controllers\Dashboard\InvestmentController;
use App\Http\Middleware\UserIsAdmin;
use App\Http\Middleware\UserIsMaster;
use App\Http\Middleware\UserStatus;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Console\Scheduling\Schedule;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'master' => UserIsMaster::class,
            'admin' => UserIsAdmin::class,
            'check.status' => UserStatus::class
        ]);
    })->withSchedule(function (Schedule $schedule) {
        $schedule->call(function () {
            (new InvestmentController())->processEarnings();
        })->daily();
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
