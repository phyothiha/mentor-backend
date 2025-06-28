<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\AuthenticationController;

// Authentication
Route::post('/login', [AuthenticationController::class, 'login']);
Route::post('/logout', [AuthenticationController::class, 'logout'])
    ->middleware('auth:sanctum');