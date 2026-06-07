<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\ProfileController;
<<<<<<< HEAD
use App\Http\Controllers\FamilyController;
=======
use App\Http\Controllers\VerifikasiController;
>>>>>>> 96c24494bac4008572812748670c7f2312c088ed
>>>>>>> 9c0871d0f728ccdeb963837afd4e84a44d9637ff
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect('/dashboard-admin');
})->name('dashboard');

<<<<<<< HEAD


Route::middleware('auth')->group(function () {

Route::resource('families', FamilyController::class);    

=======
<<<<<<< HEAD
Route::get('/pendataan', [PendataanController::class, 'index']);
Route::post('/pendataan/store', [PendataanController::class, 'store']);

Route::get('/dashboard-admin', [AdminController::class, 'dashboard']);
=======
Route::middleware('auth')->group(function () {

>>>>>>> 9c0871d0f728ccdeb963837afd4e84a44d9637ff
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

<<<<<<< HEAD
require __DIR__.'/auth.php';
=======
require __DIR__.'/auth.php';
>>>>>>> 96c24494bac4008572812748670c7f2312c088ed
>>>>>>> 9c0871d0f728ccdeb963837afd4e84a44d9637ff
