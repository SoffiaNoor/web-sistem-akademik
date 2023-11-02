<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login']);
// Route::post('/login', 'AuthController@login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');