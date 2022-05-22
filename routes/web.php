<?php

use App\Http\Controllers\public\LandingPageController;
use App\Http\Controllers\user\CounterController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::resource('/', LandingPageController::class);
Route::resource('/dashboard', DashboardController::class);
Route::resource('/department', DepartmentController::class);
Route::resource('/counter', CounterController::class);



require __DIR__.'/auth.php';
