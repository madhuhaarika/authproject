<?php
use App\Http\Controllers\JWTAuthController;
use App\Http\Controllers\ExampleController;
use App\Http\Middleware\JwtMiddleware;
use App\Http\Middleware\CheckRole;

// Routes that don't need authentication
Route::post('register', [JWTAuthController::class, 'register']);
Route::post('login', [JWTAuthController::class, 'login']);

// Routes that need JWT authentication
Route::middleware([JwtMiddleware::class])->group(function () {
    Route::get('user', [JWTAuthController::class, 'getUser']);
    Route::post('logout', [JWTAuthController::class, 'logout']);
});
// routes/api.php

    Route::get('/dashboard', [ExampleController::class, 'adminDashboard']);



   // Route::get('/dashboard', [ExampleController::class, 'staffDashboard']);



  //  Route::get('/student/dashboard', [ExampleController::class, 'studentDashboard']);

