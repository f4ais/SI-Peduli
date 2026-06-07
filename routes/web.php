<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VerifikasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/verifikasi', [VerifikasiController::class, 'index'])
        ->name('verifikasi.index');

    Route::get('/verifikasi/{id}', [VerifikasiController::class, 'show'])
        ->name('verifikasi.show');

    Route::post('/verifikasi/{id}/approve', [VerifikasiController::class, 'approve'])
        ->name('verifikasi.approve');

    Route::post('/verifikasi/{id}/reject', [VerifikasiController::class, 'reject'])
        ->name('verifikasi.reject');
});

require __DIR__.'/auth.php';