<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('loginaction');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::middleware(['auth', 'Administrator'])->group(function () {

        Route::resource('level', LevelController::class);
        Route::resource('user', UserController::class);
        Route::resource('anggota', AnggotaController::class);
        Route::resource('buku', BukuController::class);
        Route::resource('peminjaman', PeminjamanController::class);
    });





    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
