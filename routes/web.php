<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

Route::get('/', [PasienController::class, 'index'])
    ->name('pasien.index');

    // Route untuk menambah form tambah pasien
Route::get('/pasien/tambah', [PasienController::class, 'tambah'])
    ->name('pasien.create');
Route::post('/pasien', [PasienController::class, 'simpan'])
    ->name('pasien.store');
