<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InovasiController as PublicInovasiController;
use App\Http\Controllers\FaqController as PublicFaqController;
use App\Http\Controllers\ProfilController as PublicProfilController;

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController as AdminLoginController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController as AdminPasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\NewPasswordController as AdminNewPasswordController;

//======================================================================
// HALAMAN PUBLIK (Dapat diakses semua orang)
//======================================================================
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/profil-publik', function () { // Diubah agar tidak konflik dengan profil admin
    return view('profil');
})->name('profil.publik');
Route::get('/inovasi', [PublicInovasiController::class, 'index'])->name('inovasi.index');
Route::get('/faq', [PublicFaqController::class, 'index'])->name('faq.index');


//======================================================================
// HALAMAN ADMIN (Memerlukan autentikasi)
//======================================================================
Route::prefix('admin')->name('admin.')->group(function () {

    // --- Rute untuk Tamu (Halaman Login, Lupa Password, dll.) ---
    Route::middleware('guest')->group(function () {
        Route::get('login', [AdminLoginController::class, 'create'])->name('login');
        Route::post('login', [AdminLoginController::class, 'store']);

        Route::post('forgot-password', [AdminPasswordResetLinkController::class, 'store'])->name('password.email');
        Route::get('reset-password/{token}', [AdminNewPasswordController::class, 'create'])->name('password.reset');
        Route::post('reset-password', [AdminNewPasswordController::class, 'store'])->name('password.store');
    });

    // --- Rute untuk Admin yang Sudah Login ---
    Route::middleware('auth')->group(function () {
        Route::post('logout', [AdminLoginController::class, 'destroy'])->name('logout');

        // Halaman Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard'); // Memuat dashboard.blade.php
        })->name('dashboard');

        // Halaman Berita
        Route::get('/berita', function () {
            return view('admin.berita'); // Memuat berita.blade.php
        })->name('berita');

    });
});
