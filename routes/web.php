<?php

use App\Http\Controllers\public\LandingPageController;
use App\Http\Controllers\user\DashboardController;
use Illuminate\Support\Facades\Route;

Route::resource('/', LandingPageController::class);
Route::resource('/dashboard', DashboardController::class);



require __DIR__.'/auth.php';
