<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('laporan.form'));

// Form pelaporan tetap terbuka untuk masyarakat tanpa akun.
Route::get('/data-laporan', [LaporanController::class, 'form'])->name('laporan.form');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/konfirmasi', [LaporanController::class, 'konfirmasi'])->name('laporan.konfirmasi');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/profil', fn () => view('profile'))->name('profile');
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
});
