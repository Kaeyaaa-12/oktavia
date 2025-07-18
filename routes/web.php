<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InovasiController as PublicInovasiController;
use App\Http\Controllers\FaqController as PublicFaqController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController as AdminLoginController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController as AdminPasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\NewPasswordController as AdminNewPasswordController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Halaman Publik
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/profil-publik', fn() => view('profil'))->name('profil.publik');
Route::get('/inovasi', [PublicInovasiController::class, 'index'])->name('inovasi.index');
Route::get('/faq', [PublicFaqController::class, 'index'])->name('faq.index');

/*
|--------------------------------------------------------------------------
| Halaman Admin
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {

    // Rute untuk pengguna yang belum login (tamu)
    Route::middleware('guest')->group(function () {
        Route::get('login', [AdminLoginController::class, 'create'])->name('login');
        Route::post('login', [AdminLoginController::class, 'store']);
        Route::post('forgot-password', [AdminPasswordResetLinkController::class, 'store'])->name('password.email');
        Route::get('reset-password/{token}', [AdminNewPasswordController::class, 'create'])->name('password.reset');
        Route::post('reset-password', [AdminNewPasswordController::class, 'store'])->name('password.store');
    });

    // Rute untuk pengguna yang sudah login
    Route::middleware('auth')->group(function () {
        Route::post('logout', [AdminLoginController::class, 'destroy'])->name('logout');
        
        // HANYA SATU DEFINISI DASHBOARD YANG BENAR
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // Rute untuk Berita (menggunakan nama 'berita' pada URL)
        Route::resource('berita', PostController::class)->names('posts');
        
        // Rute untuk Galeri
        Route::resource('galleries', GalleryController::class);
    });
});