<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/signup', [UserController::class, 'show'])->name('user.show');
Route::post('/signup', [UserController::class, 'store'])->name('user.store');
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/protected', function () {
    return view('protected');
})->middleware('auth')->name('protected');
