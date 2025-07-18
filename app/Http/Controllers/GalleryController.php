<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Menampilkan halaman manajemen galeri.
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Menampilkan form untuk menambah gambar baru.
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Menyimpan gambar baru ke database dan storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // Simpan gambar ke storage/app/public/galleries
        $path = $request->file('image')->store('galleries', 'public');

        // Buat entri di database
        Gallery::create([
            'title' => $request->title,
            'image_path' => $path,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Gambar berhasil ditambahkan.');
    }
    public function destroy(Gallery $gallery)
    {
        // Hapus file gambar dari storage
        Storage::disk('public')->delete($gallery->image_path);

        // Hapus data dari database
        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Gambar berhasil dihapus.');
    }
    /**
     * Menampilkan form untuk mengedit gambar.
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Memperbarui data gambar di database.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $gallery->update([
            'title' => $request->title,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Judul gambar berhasil diperbarui.');
    }
}