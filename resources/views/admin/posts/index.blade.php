<!DOCTYPE html>
<html lang="id" class="antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Berita - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body class="bg-gray-900 text-gray-200">
    <div class="flex h-screen">
        @include('admin.layouts.sidebar')
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center pb-6 border-b border-gray-700">
                <div>
                    <h2 class="text-3xl font-bold text-white">Manajemen Berita</h2>
                    <p class="text-gray-400 mt-1">Kelola semua artikel berita di sini.</p>
                </div>
                <a href="{{ route('admin.posts.create') }}" class="bg-yellow-400 text-gray-900 font-bold py-2 px-4 rounded-lg flex items-center">
                    <span class="material-symbols-outlined mr-2">add</span>
                    Tambah Berita
                </a>
            </div>

            @if(session('success'))
                <div class="mt-6 bg-green-900/50 border border-green-700 text-green-300 px-4 py-3 rounded-lg text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mt-10 bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-gray-400 uppercase bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">Gambar</th>
                                <th scope="col" class="px-6 py-3">Judul Berita</th>
                                <th scope="col" class="px-6 py-3">Tanggal Publikasi</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($posts as $post)
                            <tr class="border-b border-gray-700 hover:bg-gray-700/50">
                                <td class="px-6 py-4">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="h-10 w-16 object-cover rounded">
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">{{ $post->title }}</th>
                                <td class="px-6 py-4">{{ $post->published_at->format('d M Y') }}</td>
                                <td class="px-6 py-4 space-x-4">
                                    <a href="{{ route('admin.posts.edit', $post) }}" class="font-medium text-yellow-400 hover:underline">Edit</a>
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline" onsubmit="return confirm('Anda yakin ingin menghapus berita ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center py-4">Tidak ada berita.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </main>
    </div>
</body>
</html>