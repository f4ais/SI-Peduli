<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect('/dashboard-admin');
})->name('dashboard');

Route::get('/pendataan', [PendataanController::class, 'index']);
Route::post('/pendataan/store', [PendataanController::class, 'store']);

Route::get('/dashboard-admin', [AdminController::class, 'dashboard']);