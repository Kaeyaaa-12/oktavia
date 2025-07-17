<!DOCTYPE html>
<html lang="id" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Informasi - Admin Polres</title>
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

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1f2937;
        }

        ::-webkit-scrollbar-thumb {
            background: #facc15;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #eab308;
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-200">
    <div class="flex h-screen">

        {{-- Panggil Sidebar di sini --}}
        @include('admin.layouts.sidebar')

        {{-- Main Content --}}
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center pb-6 border-b border-gray-700">
                <div>
                    <h2 class="text-3xl font-bold text-white">Manajemen Berita & Informasi</h2>
                    <p class="text-gray-400 mt-1">Kelola semua artikel berita dan pengumuman di sini.</p>
                </div>
                <button class="bg-yellow-400 text-gray-900 font-bold py-2 px-4 rounded-lg flex items-center">
                    <span class="material-symbols-outlined mr-2">add</span>
                    Tambah Berita
                </button>
            </div>

            {{-- News Table --}}
            <div class="mt-10 bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-gray-400 uppercase bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">Judul Berita</th>
                                <th scope="col" class="px-6 py-3">Kategori</th>
                                <th scope="col" class="px-6 py-3">Tanggal Publikasi</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-700 hover:bg-gray-700/50">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">Operasi
                                    Zebra 2025 Dimulai Hari Ini</th>
                                <td class="px-6 py-4">Lalu Lintas</td>
                                <td class="px-6 py-4">13 Juli 2025</td>
                                <td class="px-6 py-4"><span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-900 text-green-300">Published</span>
                                </td>
                                <td class="px-6 py-4 space-x-4">
                                    <a href="#" class="font-medium text-yellow-400 hover:underline">Edit</a>
                                    <a href="#" class="font-medium text-red-500 hover:underline">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
