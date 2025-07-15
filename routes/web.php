<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InovasiController;
use App\Http\Controllers\FaqController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- HALAMAN PUBLIK (Untuk Pengunjung) ---
Route::get('/', [HomeController::class, 'index'])->name('landing');

Route::get('/profil-publik', function () { // Diubah agar tidak konflik dengan profil admin
    return view('profil');
})->name('profil.publik');

Route::get('/inovasi', [InovasiController::class, 'index'])->name('inovasi.index');

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// --- HALAMAN SETELAH LOGIN (Bawaan Breeze) ---
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// --- HALAMAN ADMIN (Harus Login) ---
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    // Route untuk mengelola profil admin sendiri (bawaan Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk mengelola Berita
    Route::resource('posts', PostController::class)->except(['show']);
});


// --- ROUTE OTENTIKASI (Login, Register, dll) ---
require __DIR__.'/auth.php';