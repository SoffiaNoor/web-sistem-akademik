<?php

use App\Http\Controllers\AuditController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\regisController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\AmbilKuliahController;
use App\Http\Controllers\MahasiswaController;

Route::get('/home', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [regisController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [regisController::class, 'register']);
Route::resource('/mata_kuliah', MataKuliahController::class);
Route::resource('/audit_mata_kuliah', AuditController::class);
Route::resource('/dosen', DosenController::class);
Route::resource('/ruang', RuangController::class);
Route::resource('/tempat', TempatController::class);
Route::resource('/ambil_kuliah', AmbilKuliahController::class);
Route::get('ambil_kuliah/{NRP}/{IDMK}', [AmbilKuliahController::class,'show'])->name('ambil_kuliah.show');
Route::get('ambil_kuliah/{NRP}/{IDMK}/edit', [AmbilKuliahController::class,'edit'])->name('ambil_kuliah.edit');
Route::delete('ambil_kuliah/{NRP}/{IDMK}', [AmbilKuliahController::class,'destroy'])->name('ambil_kuliah.destroy');

Route::put('ambil_kuliah/{NRP}/{IDMK}', [AmbilKuliahController::class,'update'])->name('ambil_kuliah.update');

Route::resource('/mahasiswa', MahasiswaController::class);
