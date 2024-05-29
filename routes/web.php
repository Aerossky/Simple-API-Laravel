<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Route::get('/login', function () {
//     return view('auth.signin');
// });

Route::resource('/login', AuthController::class);
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::post('/register', [AuthController::class, 'register'])->name('login.register');


Route::resource('/dashboard', DashboardController::class);
