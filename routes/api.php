<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarPulseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HistoryController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


Route::apiResource('/carpulses', CarPulseController::class);
Route::delete('/history/truncate', [HistoryController::class, 'truncate']);
