<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LockScreenController;

Route::get('/', function () {
    return view('lockscreen');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/daftar', function () {
    return view('daftar'); // Rute untuk halaman daftar
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/tagihan', function () {
    return view('tagihan'); // Rute untuk halaman
});

Route::get('/sejarah', function () {
    return view('sejarah'); // Rute untuk halaman
});

Route::get('/lockscreen', [LockScreenController::class, 'show'])->name('lockscreen');
Route::post('/unlock', [LockScreenController::class, 'unlock'])->name('unlock');
Route::get('/daftar', [DaftarController::class, 'create'])->name('daftar.create');
Route::post('/daftar', [DaftarController::class, 'store'])->name('daftar.store');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
