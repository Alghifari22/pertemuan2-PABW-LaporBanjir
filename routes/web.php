<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DataController::class, 'form'])
    ->name('laporan.form');

Route::post('/laporan', [DataController::class, 'store'])
    ->name('laporan.store');

Route::get('/konfirmasi', [DataController::class, 'konfirmasi'])
    ->name('laporan.konfirmasi');

Route::get('/laporan', [DataController::class, 'index'])
    ->name('laporan.index');