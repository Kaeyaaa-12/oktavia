<!DOCTYPE html>
<html lang="id" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Polres</title>
    
    {{-- Menggunakan Vite untuk memuat aset, ini cara yang benar di Laravel 11 --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
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
                    <h2 class="text-3xl font-bold text-white">Selamat Datang, <span class="text-yellow-400">{{ auth()->user()->name }}</span></h2>
                    <p class="text-gray-400 mt-1">Ringkasan aktivitas website Polres Tulungagung.</p>
                </div>
            </div>

            {{-- Stats Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center">
                    <div class="bg-gray-700 p-3 rounded-full"><span class="material-symbols-outlined text-yellow-400">article</span></div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">Total Berita</p>
                        <p class="text-2xl font-bold text-white">{{ $postCount ?? 0 }}</p>
                    </div>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center">
                    <div class="bg-gray-700 p-3 rounded-full"><span class="material-symbols-outlined text-yellow-400">photo_library</span></div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">Total Gambar Galeri</p>
                        <p class="text-2xl font-bold text-white">{{ $galleryCount ?? 0 }}</p>
                    </div>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center">
                    <div class="bg-gray-700 p-3 rounded-full"><span class="material-symbols-outlined text-yellow-400">visibility</span></div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">Total Pengunjung Website</p>
                        <p class="text-2xl font-bold text-white">{{ number_format($visitorCount ?? 0, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>

            {{-- Recent Activity --}}
            <div class="mt-10 grid grid-cols-1 lg:grid-cols-2 gap-8">
                {{-- Berita Terbaru --}}
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-white mb-4">Berita Terbaru</h3>
                    <ul class="space-y-4">
                        @forelse($latestPosts as $post)
                        <li class="flex items-center space-x-4">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-16 h-16 rounded-md object-cover">
                            <div class="flex-1">
                                {{-- DIUBAH: Ditambahkan link ke halaman edit berita --}}
                                <a href="{{-- route('admin.posts.edit', $post->id) --}}" class="text-white font-medium hover:text-yellow-400 transition">{{ $post->title }}</a>
                                <p class="text-xs text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </li>
                        @empty
                        <p class="text-gray-400 text-sm">Belum ada berita yang ditambahkan.</p>
                        @endforelse
                    </ul>
                </div>
                {{-- Galeri Terbaru --}}
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-white mb-4">Galeri Terbaru</h3>
                    <ul class="space-y-4">
                       @forelse($latestGalleries as $gallery)
                        <li class="flex items-center space-x-4">
                            <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="w-16 h-16 rounded-md object-cover">
                            <div class="flex-1">
                                {{-- DIUBAH: Ditambahkan link ke halaman edit galeri --}}
                                <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="text-white font-medium hover:text-yellow-400 transition">{{ $gallery->title }}</a>
                                <p class="text-xs text-gray-400">{{ $gallery->created_at->diffForHumans() }}</p>
                            </div>
                        </li>
                        @empty
                        <p class="text-gray-400 text-sm">Belum ada gambar yang ditambahkan.</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </main>
    </div>
</body>
</html>