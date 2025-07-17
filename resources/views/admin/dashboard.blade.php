<!DOCTYPE html>
<html lang="id" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Polres</title>
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
                    <h2 class="text-3xl font-bold text-white">Selamat Datang, <span
                            class="text-yellow-400">{{ auth()->user()->name }}</span></h2>
                    <p class="text-gray-400 mt-1">Ini adalah halaman yang dilindungi. Hanya Staff yang bisa melihat ini.
                    </p>
                </div>
            </div>

            {{-- Stats Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                {{-- Card 1 --}}
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center">
                    <div class="bg-gray-700 p-3 rounded-full"><span
                            class="material-symbols-outlined text-yellow-400">report</span></div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">Total Laporan</p>
                        <p class="text-2xl font-bold text-white">1,234</p>
                    </div>
                </div>
                {{-- Card 2 --}}
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center">
                    <div class="bg-gray-700 p-3 rounded-full"><span
                            class="material-symbols-outlined text-yellow-400">task_alt</span></div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">Laporan Selesai</p>
                        <p class="text-2xl font-bold text-white">987</p>
                    </div>
                </div>
                {{-- Card 3 --}}
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center">
                    <div class="bg-gray-700 p-3 rounded-full"><span
                            class="material-symbols-outlined text-yellow-400">pending</span></div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">Laporan Diproses</p>
                        <p class="text-2xl font-bold text-white">247</p>
                    </div>
                </div>
                {{-- Card 4 --}}
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-center">
                    <div class="bg-gray-700 p-3 rounded-full"><span
                            class="material-symbols-outlined text-yellow-400">groups</span></div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">Jumlah Petugas</p>
                        <p class="text-2xl font-bold text-white">56</p>
                    </div>
                </div>
            </div>

            {{-- Recent Reports Table --}}
            <div class="mt-10 bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold text-white mb-4">Laporan Terbaru</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-gray-400 uppercase bg-gray-700">
                            <tr>
                                <th scope="col" class="px-6 py-3">ID Laporan</th>
                                <th scope="col" class="px-6 py-3">Pelapor</th>
                                <th scope="col" class="px-6 py-3">Tanggal</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-700 hover:bg-gray-700/50">
                                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap">LP-00123
                                </th>
                                <td class="px-6 py-4">Budi Santoso</td>
                                <td class="px-6 py-4">12 Juli 2025</td>
                                <td class="px-6 py-4"><span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-900 text-green-300">Selesai</span>
                                </td>
                                <td class="px-6 py-4"><a href="#"
                                        class="font-medium text-yellow-400 hover:underline">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
