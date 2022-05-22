<?php

use App\Http\Controllers\public\LandingPageController;
use App\Http\Controllers\user\CounterController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\DepartmentController;
use App\Http\Controllers\user\TokenController;
use Illuminate\Support\Facades\Route;

Route::resource('/', LandingPageController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/department', DepartmentController::class);
Route::resource('/counter', CounterController::class);
Route::get('token/generate/{department}', [TokenController::class, 'generate'])->name('token.generate');
Route::resource('/token', TokenController::class);



require __DIR__ . '/auth.php';
