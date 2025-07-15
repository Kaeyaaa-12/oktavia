<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InovasiController extends Controller
{
    /**
     * Menampilkan halaman inovasi.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Anda bisa mengirim data dari database ke view di sini jika diperlukan
        // Contoh: $inovasi = InovasiModel::all();
        // return view('inovasi', ['inovasi' => $inovasi]);

        return view('inovasi'); // Kita akan membuat file inovasi.blade.php
    }
}
