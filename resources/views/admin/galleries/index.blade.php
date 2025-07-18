<!DOCTYPE html>
<html lang="id" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Galeri - Admin Polres</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-gray-900 text-gray-200">
    <div class="flex h-screen" x-data="{}"> {{-- Tambahkan x-data --}}
        @include('admin.layouts.sidebar')
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center pb-6 border-b border-gray-700">
                <div>
                    <h2 class="text-3xl font-bold text-white">Manajemen Galeri</h2>
                    <p class="text-gray-400 mt-1">Kelola semua gambar galeri di sini.</p>
                </div>
                <a href="{{ route('admin.galleries.create') }}" class="bg-yellow-400 text-gray-900 font-bold py-2 px-4 rounded-lg flex items-center hover:bg-yellow-300 transition-colors">
                    <span class="material-symbols-outlined mr-2">add_photo_alternate</span>
                    Tambah Gambar
                </a>
            </div>

            @if(session('success'))
                <div class="mt-4 bg-green-800/50 border border-green-600 text-green-300 px-4 py-3 rounded-lg relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="mt-10 bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-gray-400 uppercase bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">Gambar</th>
                                <th scope="col" class="px-6 py-3">Judul</th>
                                <th scope="col" class="px-6 py-3">Tanggal Unggah</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galleries as $gallery)
                            <tr class="border-b border-gray-700 hover:bg-gray-700/50">
                                <td class="px-6 py-4">
                                    {{-- GAMBAR DIBUAT BISA DIKLIK --}}
                                    <button @click="$dispatch('open-modal', 'view-gallery-{{ $gallery->id }}')">
                                        <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="h-16 w-auto rounded-md object-cover cursor-pointer hover:opacity-80 transition">
                                    </button>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">{{ $gallery->title }}</th>
                                <td class="px-6 py-4">{{ $gallery->created_at->format('d F Y H:i') }}</td>
                                <td class="px-6 py-4 space-x-4">
                                    {{-- TOMBOL EDIT --}}
                                    <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="font-medium text-yellow-400 hover:underline">Edit</a>
                                    
                                    {{-- TOMBOL HAPUS DENGAN MODAL --}}
                                    <button @click="$dispatch('open-modal', 'confirm-gallery-deletion-{{ $gallery->id }}')" class="font-medium text-red-500 hover:underline">Hapus</button>
                                </td>
                            </tr>

                            {{-- MODAL UNTUK MELIHAT DETAIL GAMBAR --}}
                            <x-modal name="view-gallery-{{ $gallery->id }}" focusable>
                                <div class="p-6 bg-gray-800 text-white rounded-lg">
                                    <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="w-full h-auto rounded-lg mb-4">
                                    <h2 class="text-lg font-medium text-yellow-400">{{ $gallery->title }}</h2>
                                    <p class="mt-1 text-sm text-gray-400">Diupload pada: {{ $gallery->created_at->format('d F Y, H:i') }}</p>
                                    <div class="mt-6 flex justify-end">
                                        <x-secondary-button x-on:click="$dispatch('close')">Tutup</x-secondary-button>
                                    </div>
                                </div>
                            </x-modal>

                            {{-- MODAL UNTUK KONFIRMASI HAPUS --}}
                            <x-modal name="confirm-gallery-deletion-{{ $gallery->id }}" focusable>
                                <form method="post" action="{{ route('admin.galleries.destroy', $gallery->id) }}" class="p-6 bg-gray-800 rounded-lg">
                                    @csrf
                                    @method('delete')
                                    <h2 class="text-lg font-medium text-white">Yakin ingin menghapus gambar ini?</h2>
                                    <p class="mt-1 text-sm text-gray-400">Setelah dihapus, data tidak bisa dikembalikan.</p>
                                    <div class="mt-6 flex justify-end">
                                        <x-secondary-button x-on:click="$dispatch('close')">Batal</x-secondary-button>
                                        <x-danger-button class="ms-3">Hapus Gambar</x-danger-button>
                                    </div>
                                </form>
                            </x-modal>
                            @empty
                            <tr class="border-b border-gray-700">
                                <td colspan="4" class="px-6 py-4 text-center text-gray-400">Tidak ada gambar di galeri.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>