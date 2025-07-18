<!DOCTYPE html>
<html lang="id" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gambar - Admin Polres</title>
    {{-- Salin semua isi <head> dari file admin lainnya --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>

<body class="bg-gray-900 text-gray-200">
    <div class="flex h-screen">
        @include('admin.layouts.sidebar')
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center pb-6 border-b border-gray-700">
                <div>
                    <h2 class="text-3xl font-bold text-white">Edit Detail Gambar</h2>
                    <p class="text-gray-400 mt-1">Ubah judul untuk gambar ini.</p>
                </div>
                <a href="{{ route('admin.galleries.index') }}" class="bg-gray-700 text-gray-300 font-bold py-2 px-4 rounded-lg flex items-center hover:bg-gray-600">
                    <span class="material-symbols-outlined mr-2">arrow_back</span>
                    Kembali
                </a>
            </div>
            <div class="mt-10 bg-gray-800 p-8 rounded-lg shadow-lg">
                <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT') {{-- Method untuk update --}}

                    <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="max-h-64 rounded-lg mx-auto">
                    
                    <div>
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-300">Judul Gambar</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $gallery->title) }}" class="w-full bg-gray-700 text-gray-200 border border-gray-600 rounded-lg focus:ring-yellow-500 focus:border-yellow-500 p-2.5 transition" required>
                    </div>
                    
                    <div class="flex justify-end pt-4">
                        <button type="submit" class="bg-yellow-400 text-gray-900 font-bold py-2.5 px-6 rounded-lg flex items-center hover:bg-yellow-500 transition-all duration-300">
                            <span class="material-symbols-outlined mr-2">save</span>
                            Update Judul
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>