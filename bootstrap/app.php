<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        $middleware->alias([
            'repairer.beforelogin' => \App\Http\Middleware\RepairerAuth::class,
            'repairer.afterlogin' => \App\Http\Middleware\RepairerAuthAfter::class,
            'admin.beforelogin' => \App\Http\Middleware\AdminAuthBefore::class,
            'admin.afterlogin' => \App\Http\Middleware\AdminAuthAfter::class,
            'user.beforelogin' => \App\Http\Middleware\UsernAuthBefore::class,
            'user.afterlogin' => \App\Http\Middleware\UsernAuthAfter::class,
        ]);
        // $middleware->alias(['repairer.afterlogin'=>\App\Http\Middleware\RepairerAuthAfter::class]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
