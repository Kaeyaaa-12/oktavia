<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polres Tulungagung - Website Resmi</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .hero-bg {
            background-image: url("{{ asset('assets/images/Background.png') }}");
        }

        /* Memberi ruang di body untuk fixed header yang lebih besar */
        body {
            /* Perkiraan tinggi header baru: sekitar 148px */
            padding-top: 148px;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <header class="bg-black text-white fixed top-0 left-0 right-0 z-30 shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center border-b border-gray-600 pb-4">
                <div class="flex items-center space-x-5">
                    <img src="{{ asset('assets/images/lambang.png') }}" alt="Logo Polri" class="h-16">
                    <div>
                        <h1 class="text-base font-bold uppercase">Kepolisian Negara Republik Indonesia</h1>
                        <h2 class="text-sm uppercase">Daerah Jawa Timur - Resor Tulungagung</h2>
                    </div>
                </div>
                <div class="text-right text-sm hidden md:block">
                    <p>Jl. Ahmad Yani Timur No.9, Bago, Kec. Tulungagung,</p>
                    <p>Kabupaten Tulungagung, Jawa Timur 66212</p>
                </div>
            </div>
            <nav class="flex justify-center items-center pt-4">
                <ul class="flex space-x-8 text-base font-semibold">
                    <li><a href="{{ url('/') }}" class="hover:text-yellow-400">BERANDA</a></li>
                    <li><a href="{{ url('/#layanan-umum') }}" class="hover:text-yellow-400">LAYANAN</a></li>
                    <li><a href="{{ url('/#berita') }}" class="hover:text-yellow-400">BERITA</a></li>

                    <li><a href="{{ route('profil.publik') }}" class="hover:text-yellow-400">PROFIL</a></li>
                    <li><a href="{{ route('inovasi.index') }}" class="hover:text-yellow-400">INOVASI</a></li>
                    <li><a href="{{ route('faq.index') }}" class="hover:text-yellow-400">FAQ</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div>
        <main class="relative -mt-[148px]">
            <div class="h-screen flex items-end justify-center hero-bg bg-cover bg-center">
                <div class="absolute inset-0 bg-black opacity-40"></div>
                <div class="relative z-10 container mx-auto px-4 flex justify-between items-end w-full pb-10 md:pb-0">
                    <div class="text-white w-full md:w-1/2 self-end mb-4 md:mb-20">
                        <h1 class="text-4xl lg:text-5xl font-bold">SELAMAT DATANG</h1>
                        <p class="mt-2 text-lg lg:text-xl">Website resmi dari Polres Tulungagung yang menyajikan
                            informasi secara lengkap dan ter-update.</p>
                    </div>
                    <div class="w-full md:w-2/5 flex justify-center md:justify-end relative -mb-4">
                        <div class="relative">
                            <img src="{{ asset('assets/images/Kapolres.png') }}" alt="Foto Kapolres"
                                class="h-auto w-full max-w-sm lg:max-w-md object-contain drop-shadow-lg">
                            <div
                                class="absolute -bottom-4 left-1/2 -translate-x-1/2 w-[90%] bg-yellow-500 text-black p-3 text-center">
                                <p class="font-bold text-sm md:text-base">AKBP MUHAMMAD TAAT RESDIANTO, S.H., S.I.K.,
                                    M.T.C.P.</p>
                                <p class="text-xs md:text-sm">Kapolres Tulungagung</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <section class="bg-gray-100 py-20">
            <div class="container mx-auto px-4 text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-800 uppercase tracking-wider">PJU dan Kapolsek Jajaran Polres
                    Tulungagung</h2>
                <div class="w-24 h-1 bg-yellow-400 mx-auto mt-2 mb-12"></div>
                <img src="{{ asset('assets/images/JAJARANKAPOLRES.png') }}"
                    alt="Foto PJU dan Kapolsek Jajaran Polres Tulungagung"
                    class="w-full max-w-6xl mx-auto rounded-lg shadow-xl">
            </div>
        </section>

        <section id="layanan-umum" class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-800 uppercase tracking-wider">INFORMASI LAYANAN UMUM</h2>
                    <div class="w-24 h-1 bg-yellow-400 mx-auto mt-2"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    {{-- Baris Pertama --}}
                    <div class="bg-gray-50 p-8 rounded-lg text-center shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="0">
                        <div class="w-24 h-24 bg-yellow-100 rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 text-gray-700">BPKB & STNK</h3>
                        <p class="text-gray-500 mt-2">Prosedur Pengurusan BPKB & STNK</p>
                        <a href="#"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold mt-4 inline-block">Selengkapnya</a>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg text-center shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="w-24 h-24 bg-yellow-100 rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283-.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 text-gray-700">Izin Keramaian</h3>
                        <p class="text-gray-500 mt-2">Prosedur Pengajuan Izin Keramaian</p>
                        <a href="#"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold mt-4 inline-block">Selengkapnya</a>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg text-center shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="w-24 h-24 bg-yellow-100 rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10l2-2h8zM18 8h2a1 1 0 011 1v6a1 1 0 01-1 1h-2v4l-4-4H8a1 1 0 01-1-1V5a1 1 0 011-1h2l4-4v4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 text-gray-700">Pengawalan</h3>
                        <p class="text-gray-500 mt-2">Prosedur Permintaan Pengawalan</p>
                        <a href="#"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold mt-4 inline-block">Selengkapnya</a>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg text-center shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="w-24 h-24 bg-yellow-100 rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 012-2h4a2 2 0 012 2v1m-4 0h4m-9 5h2m-2 4h2m5-8v4l-2-2 2-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 text-gray-700">Layanan SIM</h3>
                        <p class="text-gray-500 mt-2">Pembuatan & Perpanjangan SIM</p>
                        <a href="#"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold mt-4 inline-block">Selengkapnya</a>
                    </div>

                    {{-- Baris Kedua --}}
                    <div class="bg-gray-50 p-8 rounded-lg text-center shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="0">
                        <div class="w-24 h-24 bg-yellow-100 rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 text-gray-700">Layanan SKCK</h3>
                        <p class="text-gray-500 mt-2">Prosedur Pembuatan SKCK</p>
                        <a href="#"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold mt-4 inline-block">Selengkapnya</a>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg text-center shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="w-24 h-24 bg-yellow-100 rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 11V7a4 4 0 118 0m-4 8v3m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 text-gray-700">Besuk Tahanan</h3>
                        <p class="text-gray-500 mt-2">Prosedur dan Jadwal Besuk</p>
                        <a href="#"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold mt-4 inline-block">Selengkapnya</a>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg text-center shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="w-24 h-24 bg-yellow-100 rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 text-gray-700">SPKT</h3>
                        <p class="text-gray-500 mt-2">Laporan & Pengaduan Masyarakat</p>
                        <a href="#"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold mt-4 inline-block">Selengkapnya</a>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg text-center shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="300">
                        <div class="w-24 h-24 bg-yellow-100 rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11c.058 0 .117.002.175.005a2 2 0 11-3.35 0A2.001 2.001 0 0112 11zm0-4a3 3 0 100 6 3 3 0 000-6zm-4 4a4 4 0 108 0 4 4 0 00-8 0zm6-7a1 1 0 011 1v1a1 1 0 11-2 0V5a1 1 0 011-1zm-4 0a1 1 0 011 1v1a1 1 0 11-2 0V5a1 1 0 011-1zm8 0a1 1 0 011 1v1a1 1 0 11-2 0V5a1 1 0 011-1zm-4 14a1 1 0 110 2 1 1 0 010-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 text-gray-700">Sidik Jari</h3>
                        <p class="text-gray-500 mt-2">Pelayanan Identifikasi Sidik Jari</p>
                        <a href="#"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold mt-4 inline-block">Selengkapnya</a>
                    </div>

                    {{-- [PENAMBAHAN] Baris Ketiga --}}
                    <div class="bg-gray-50 p-8 rounded-lg text-center shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="0">
                        <div class="w-24 h-24 bg-yellow-100 rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 text-gray-700">SP2HP</h3>
                        <p class="text-gray-500 mt-2">Cek Perkembangan Hasil Penyidikan</p>
                        <a href="#"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold mt-4 inline-block">Selengkapnya</a>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg text-center shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="w-24 h-24 bg-yellow-100 rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-12 h-12 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mt-6 text-gray-700">Pengaduan</h3>
                        <p class="text-gray-500 mt-2">Layanan Pengaduan Propam</p>
                        <a href="#"
                            class="text-yellow-500 hover:text-yellow-600 font-semibold mt-4 inline-block">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="berita" class="py-20 bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-4" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-800 uppercase tracking-wider">Berita</h2>
                    <div class="w-20 h-1 bg-yellow-400 mx-auto mt-2"></div>
                </div>
                <div class="mt-12 grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2" data-aos="fade-right">
                        <div class="relative rounded-lg overflow-hidden shadow-lg">
                            <img src="https://placehold.co/800x500/000000/FFFFFF" alt="Berita Utama"
                                class="w-full h-full object-cover">
                            <div
                                class="absolute bottom-0 left-0 p-6 bg-gradient-to-t from-black to-transparent w-full">
                                <span class="text-white text-sm bg-blue-600 px-2 py-1 rounded">July 7, 2025</span>
                                <h3 class="text-white text-2xl font-bold mt-2">Kapolres Pimpin Upacara Hari Bhayangkara
                                    ke-79 "Polri untuk Masyarakat"</h3>
                            </div>
                        </div>
                        <div class="mt-8">
                            <div class="border-b border-gray-300">
                                <nav class="-mb-px flex space-x-6">
                                    <a href="#"
                                        class="text-yellow-500 border-b-2 border-yellow-500 whitespace-nowrap py-2 px-1 font-bold">Latest</a>
                                    <a href="#"
                                        class="text-gray-500 hover:text-yellow-500 border-b-2 border-transparent hover:border-yellow-500 whitespace-nowrap py-2 px-1 font-medium">Popular</a>
                                    <a href="#"
                                        class="text-gray-500 hover:text-yellow-500 border-b-2 border-transparent hover:border-yellow-500 whitespace-nowrap py-2 px-1 font-medium">Comments</a>
                                </nav>
                            </div>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="100">
                                    <img src="https://placehold.co/150x100" alt="thumbnail"
                                        class="w-36 h-24 object-cover rounded-lg">
                                    <div>
                                        <span class="text-xs text-gray-500">May 23, 2025</span>
                                        <h4 class="font-semibold text-gray-800 hover:text-yellow-600 leading-tight">
                                            Manfaatkan Liburan Sekolah, Polwan Beri Edukasi Tertib Lalu Lintas</h4>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="200">
                                    <img src="https://placehold.co/150x100/EFEFEF/333333" alt="thumbnail"
                                        class="w-36 h-24 object-cover rounded-lg">
                                    <div>
                                        <span class="text-xs text-gray-500">May 23, 2025</span>
                                        <h4 class="font-semibold text-gray-800 hover:text-yellow-600 leading-tight">
                                            Polres Respon Cepat Ungkap Kasus Pelaku Penganiayaan</h4>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="300">
                                    <img src="https://placehold.co/150x100/333333/FFFFFF" alt="thumbnail"
                                        class="w-36 h-24 object-cover rounded-lg">
                                    <div>
                                        <span class="text-xs text-gray-500">May 22, 2025</span>
                                        <h4 class="font-semibold text-gray-800 hover:text-yellow-600 leading-tight">
                                            Patroli Skala Besar Jaga Kondusifitas Wilayah di Malam Hari</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-8" data-aos="fade-left">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="relative rounded-lg overflow-hidden h-40" data-aos="fade-up"
                                data-aos-delay="100">
                                <img src="https://placehold.co/300x200/555555/FFFFFF"
                                    class="w-full h-full object-cover" alt="berita kecil">
                                <div class="absolute bottom-0 p-2 bg-gradient-to-t from-black to-transparent w-full">
                                    <h5 class="text-white text-sm font-bold leading-tight">Edukasi Tertib Lalu Lintas
                                        Anak Usia Dini</h5>
                                </div>
                            </div>
                            <div class="relative rounded-lg overflow-hidden h-40" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="https://placehold.co/300x200/666666/FFFFFF"
                                    class="w-full h-full object-cover" alt="berita kecil">
                                <div class="absolute bottom-0 p-2 bg-gradient-to-t from-black to-transparent w-full">
                                    <h5 class="text-white text-sm font-bold leading-tight">Respon Cepat Menjelang
                                        Maulid</h5>
                                </div>
                            </div>
                            <div class="relative rounded-lg overflow-hidden h-40" data-aos="fade-up"
                                data-aos-delay="300">
                                <img src="https://placehold.co/300x200/777777/FFFFFF"
                                    class="w-full h-full object-cover" alt="berita kecil">
                                <div class="absolute bottom-0 p-2 bg-gradient-to-t from-black to-transparent w-full">
                                    <h5 class="text-white text-sm font-bold leading-tight">Kunjungi Terminal, Ajak Jaga
                                        Kamtibmas</h5>
                                </div>
                            </div>
                            <div class="relative rounded-lg overflow-hidden h-40" data-aos="fade-up"
                                data-aos-delay="400">
                                <img src="https://placehold.co/300x200/888888/FFFFFF"
                                    class="w-full h-full object-cover" alt="berita kecil">
                                <div class="absolute bottom-0 p-2 bg-gradient-to-t from-black to-transparent w-full">
                                    <h5 class="text-white text-sm font-bold leading-tight">Pimpin Upacara Kenaikan
                                        Pangkat</h5>
                                </div>
                            </div>
                        </div>
                        <div data-aos="zoom-in">
                            <img src="https://placehold.co/600x400/28A745/FFFFFF?text=SPONSOR"
                                class="rounded-lg shadow-lg w-full h-auto" alt="Iklan">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="galeri" class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-800 uppercase tracking-wider">Galeri</h2>
                    <div class="w-20 h-1 bg-yellow-400 mx-auto mt-2"></div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-delay="0">
                        <img src="https://placehold.co/600x400/222/FFF?text=Foto+1" alt="Galeri Foto 1"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-delay="100">
                        <img src="https://placehold.co/600x400/333/FFF?text=Foto+2" alt="Galeri Foto 2"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-delay="200">
                        <img src="https://placehold.co/600x400/444/FFF?text=Foto+3" alt="Galeri Foto 3"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-delay="300">
                        <img src="https://placehold.co/600x400/555/FFF?text=Foto+4" alt="Galeri Foto 4"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-delay="0">
                        <img src="https://placehold.co/600x400/666/FFF?text=Foto+5" alt="Galeri Foto 5"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-delay="100">
                        <img src="https://placehold.co/600x400/777/FFF?text=Foto+6" alt="Galeri Foto 6"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-delay="200">
                        <img src="https://placehold.co/600x400/888/FFF?text=Foto+7" alt="Galeri Foto 7"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                    </div>
                    <div class="overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300"
                        data-aos="zoom-in" data-aos-delay="300">
                        <img src="https://placehold.co/600x400/999/FFF?text=Foto+8" alt="Galeri Foto 8"
                            class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-300">
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-black text-gray-300 pt-12 pb-8">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 border-b border-gray-700 pb-8 mb-8"
                    data-aos="fade-up">
                    <div>
                        <h4 class="text-white text-lg font-bold mb-4">POLRES TULUNGAGUNG</h4>
                        <p class="text-sm text-gray-400 leading-relaxed">Website resmi Kepolisian Resor Tulungagung.
                            Kami berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat.</p>
                    </div>
                    <div>
                        <h4 class="text-white text-lg font-bold mb-4">TAUTAN CEPAT</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-yellow-400">Beranda</a></li>
                            <li><a href="#layanan-umum" class="hover:text-yellow-400">Layanan</a></li>
                            <li><a href="#berita" class="hover:text-yellow-400">Berita</a></li>
                            <li><a href="#galeri" class="hover:text-yellow-400">Galeri</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white text-lg font-bold mb-4">HUBUNGI KAMI</h4>
                        <ul class="space-y-3 text-sm">
                            <li>
                                <a href="https://www.google.com/maps/search/?api=1&query=Polres+Tulungagung"
                                    target="_blank" rel="noopener noreferrer" class="flex items-start group">
                                    <i class="fas fa-map-marker-alt mt-1 mr-3 text-yellow-400 w-4 text-center"></i>
                                    <span class="text-gray-400 group-hover:text-yellow-400 transition-colors">Jl. Ahmad
                                        Yani Timur No.9, Bago, Kec. Tulungagung, Kabupaten Tulungagung, Jawa Timur
                                        66212</span>
                                </a>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-phone-alt mr-3 text-yellow-400 w-4 text-center"></i>
                                <span class="text-gray-400">(0355) 321110</span>
                            </li>
                        </ul>
                        <div class="flex space-x-4 mt-6">
                            <a href="#" aria-label="Facebook" class="text-gray-300 hover:text-yellow-400"><i
                                    class="fab fa-facebook-f fa-lg"></i></a>
                            <a href="#" aria-label="Twitter" class="text-gray-300 hover:text-yellow-400"><i
                                    class="fab fa-twitter fa-lg"></i></a>
                            <a href="https://www.instagram.com/polrestulungagung?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                aria-label="Instagram" class="text-gray-300 hover:text-yellow-400"><i
                                    class="fab fa-instagram fa-lg"></i></a>
                            <a href="#" aria-label="Youtube" class="text-gray-300 hover:text-yellow-400"><i
                                    class="fab fa-youtube fa-lg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center text-sm text-gray-500">
                    &copy; 2025 Kepolisian Resor Tulungagung. Semua Hak Cipta Dilindungi.
                </div>
            </div>
        </footer>
    </div>

    {{-- Menambahkan AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800, // durasi animasi dalam ms
            once: false, // apakah animasi hanya terjadi sekali
        });
    </script>
</body>

</html>
