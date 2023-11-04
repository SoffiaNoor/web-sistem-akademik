<?php

use App\Http\Controllers\AuditController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\AmbilKuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('/mata_kuliah', MataKuliahController::class);
    Route::resource('/audit_mata_kuliah', AuditController::class);
    Route::resource('/dosen', DosenController::class);
    Route::resource('/ruang', RuangController::class);
    Route::resource('/tempat', TempatController::class);
    Route::resource('/ambil_kuliah', AmbilKuliahController::class);
    Route::resource('/mahasiswa', MahasiswaController::class);
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('ambil_kuliah/{NRP}/{IDMK}', [AmbilKuliahController::class, 'show'])->name('ambil_kuliah.show');
    Route::get('ambil_kuliah/{NRP}/{IDMK}/edit', [AmbilKuliahController::class, 'edit'])->name('ambil_kuliah.edit');
    Route::delete('ambil_kuliah/{NRP}/{IDMK}', [AmbilKuliahController::class, 'destroy'])->name('ambil_kuliah.destroy');
    Route::put('ambil_kuliah/{NRP}/{IDMK}/edit', [AmbilKuliahController::class, 'update'])->name('ambil_kuliah.update');
});


