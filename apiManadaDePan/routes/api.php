<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderServiceController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::resource('/services', ServiceController::class);
Route::resource('/animals', AnimalController::class);

Route::middleware('auth:sanctum')->group(function () {

  Route::get('logout', [AuthController::class, 'logout']);

  Route::resource('/orderservices', OrderServiceController::class);
  Route::resource('/orders', OrderController::class);
  
});