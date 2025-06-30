<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\AuthenticationController;
use App\Http\Controllers\UserController;

Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/logout', [AuthenticationController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class);
});