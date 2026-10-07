<?php

use App\Http\Middleware\admincheck;
use App\Http\Middleware\checklogin;
use App\Http\Middleware\teacher;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'checklogin'=>checklogin::class,
        ]);
    })
    ->withMiddleware(function (Middleware $middleware): void {
       $middleware->alias([
            'admincheck'=>admincheck::class,
        ]);
    })
    ->withMiddleware(function (Middleware $middleware): void {
       $middleware->alias([
            'teacher'=>teacher::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
