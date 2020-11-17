<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\RegisterController;


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
// 'index' is method(function) name
Route::post('/register', [RegisterController::class, 'store']);
// 'store' is method(function) name

Route::get('/posts', function () {
    return view('posts.index');
});
