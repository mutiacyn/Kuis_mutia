<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('mahasiswa', MahasiswaController::class);


