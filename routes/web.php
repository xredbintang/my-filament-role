<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Middleware\AuthSiswaMiddleware;
use Illuminate\Support\Facades\Route;

// routes/web.php
Route::get('/', [App\Http\Controllers\tentangController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

Route::middleware(AuthSiswaMiddleware::class)->group(function () {
    Route::get('/dashboard', function () {
        return view('siswa');
    })->name('dashboard.siswa');
});






