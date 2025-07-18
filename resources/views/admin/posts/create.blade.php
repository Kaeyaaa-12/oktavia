<!DOCTYPE html>
<html lang="id" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita Baru - Admin Polres</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #1f2937; }
        ::-webkit-scrollbar-thumb { background: #facc15; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #eab308; }
    </style>
</head>

<body class="bg-gray-900 text-gray-200">
    <div class="flex h-screen">

        @include('admin.layouts.sidebar')

        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center pb-6 border-b border-gray-700">
                <div>
                    <h2 class="text-3xl font-bold text-white">Tambah Berita Baru</h2>
                    <p class="text-gray-400 mt-1">Isi formulir di bawah untuk mempublikasikan berita baru.</p>
                </div>
                <a href="{{ route('admin.berita') }}" class="bg-gray-700 text-gray-300 font-bold py-2 px-4 rounded-lg flex items-center hover:bg-gray-600">
                    <span class="material-symbols-outlined mr-2">arrow_back</span>
                    Kembali
                </a>
            </div>

            <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    {{-- Judul Berita --}}
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-300">Judul Berita</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}"
                               class="w-full bg-gray-700 text-gray-200 border border-gray-600 rounded-lg focus:ring-yellow-500 focus:border-yellow-500 p-2.5 transition"
                               placeholder="Masukkan judul berita..." required>
                        @error('title')
                            <p class="mt-2 text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Isi Berita --}}
                    <div>
                        <label for="content" class="block mb-2 text-sm font-medium text-gray-300">Isi Berita</label>
                        <textarea id="content" name="content" rows="10"
                                  class="w-full bg-gray-700 text-gray-200 border border-gray-600 rounded-lg focus:ring-yellow-500 focus:border-yellow-500 p-2.5 transition"
                                  placeholder="Tulis isi berita di sini...">{{ old('content') }}</textarea>
                        @error('content')
                            <p class="mt-2 text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Gambar --}}
                    <div>
                        <label for="image" class="block mb-2 text-sm font-medium text-gray-300">Gambar Unggulan</label>
                        <input type="file" id="image" name="image"
                               class="block w-full text-sm text-gray-400 border border-gray-600 rounded-lg cursor-pointer bg-gray-700 focus:outline-none file:bg-gray-800 file:border-0 file:text-gray-300 file:px-4 file:py-2.5 file:mr-4">
                        @error('image')
                            <p class="mt-2 text-xs text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tombol Simpan --}}
                    <div class="flex justify-end pt-4">
                        <button type="submit"
                                class="bg-yellow-400 text-gray-900 font-bold py-2.5 px-6 rounded-lg flex items-center hover:bg-yellow-500 transition-all duration-300">
                            <span class="material-symbols-outlined mr-2">save</span>
                            Simpan & Publikasikan
                        </button>
                    </div>

                </form>
            </div>
        </main>
    </div>
</body>
</html>