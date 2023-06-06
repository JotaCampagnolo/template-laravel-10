<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::get('/protected', function () {
    return view('protected');
});