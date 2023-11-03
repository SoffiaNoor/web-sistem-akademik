<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\regisController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [regisController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [regisController::class, 'register']);

// Route::get('/mata_kuliah', [MataKuliahController::class, 'index']);
// Route::get('/mata_kuliah/{IDMK}', [MataKuliahController::class, 'show'])->name('mata_kuliah.show');
Route::resource('/mata_kuliah', MataKuliahController::class);

