<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
})->name('base.form');

Route::post('/proses', [DataController::class, 'proses']);
