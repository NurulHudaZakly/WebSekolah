<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
  return view('welcome');
});

Route::resource('siswa', SiswaController::class);
Route::resource('visimisi', VisiMisiController::class);
Route::resource('guru', GuruController::class);
Route::get('/', [HomeController::class, 'index'])->name('home'); // Halaman Home
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
