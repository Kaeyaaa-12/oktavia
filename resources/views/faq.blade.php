<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Polres Tulungagung</title>
    @vite('resources/css/app.css')
    <style>
        .hero-bg {
            background-image: url("{{ asset('assets/images/Background.png') }}");
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-gray-100 font-sans">

    <div>

        <main class="relative h-screen">
            <header class="bg-black bg-opacity-70 text-white absolute top-0 left-0 right-0 z-20">
                <div class="container mx-auto px-4 py-2">
                    <div class="flex justify-between items-center border-b border-gray-600 pb-2">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('assets/images/lambang.png') }}" alt="Logo Polri" class="h-12">
                            <div>
                                <h1 class="text-sm font-bold uppercase">Kepolisian Negara Republik Indonesia</h1>
                                <h2 class="text-xs uppercase">Daerah Jawa Timur - Resor Tulungagung</h2>
                            </div>
                        </div>
                        <div class="text-right text-xs hidden md:block">
                            <p>Jl. Ahmad Yani Timur No.9, Bago, Kec. Tulungagung,</p>
                            <p>Kabupaten Tulungagung, Jawa Timur 66212</p>
                        </div>
                    </div>

                    <nav class="flex justify-center items-center pt-2">
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

            <div class="h-full flex items-center justify-center hero-bg bg-cover bg-center">
                <div class="absolute inset-0 bg-black opacity-40"></div>

                <div class="relative z-10 container mx-auto px-4 text-center text-white">
                    <h1 class="text-4xl lg:text-5xl font-bold uppercase">Frequently Asked Questions</h1>
                    <p class="mt-4 text-lg lg:text-xl max-w-3xl mx-auto">Temukan jawaban atas pertanyaan yang sering
                        diajukan terkait layanan dan informasi di Polres Tulungagung.</p>
                </div>

            </div>
        </main>

        <section id="faq" class="py-24 bg-gray-50">


            <div class="container mx-auto px-4 relative">

                <div class="text-center mb-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-800 uppercase tracking-wide">Pusat Informasi &
                        Bantuan</h2>
                    <p class="text-gray-600 mt-3 max-w-3xl mx-auto text-lg">Panduan lengkap dan jawaban terperinci atas
                        pertanyaan umum seputar layanan Kepolisian Resor Tulungagung.</p>
                </div>

                <div class="max-w-4xl mx-auto space-y-6">

                    <div
                        class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-yellow-400">
                        <details class="overflow-hidden">
                            <summary class="flex justify-between items-center p-6 cursor-pointer">
                                <h3 class="font-semibold text-gray-900 text-lg">Bagaimana alur lengkap pengurusan SKCK
                                    secara online dan offline?</h3>
                                <div
                                    class="text-yellow-500 transform transition-transform duration-300 group-open:-rotate-180">
                                    <i class="fas fa-chevron-down fa-sm"></i>
                                </div>
                            </summary>
                            <div class="px-6 pb-6 pt-2 border-t border-gray-200 text-gray-700 leading-relaxed">
                                <p class="mb-4">SKCK (Surat Keterangan Catatan Kepolisian) dapat diurus melalui dua
                                    cara. Keduanya memerlukan pemenuhan syarat yang sama, namun dengan alur yang
                                    berbeda.</p>

                                <strong class="font-semibold text-gray-800">1. Prosedur Online
                                    (Direkomendasikan)</strong>
                                <ul class="list-disc list-inside space-y-2 mt-2 mb-4">
                                    <li>Unduh dan install aplikasi <strong class="text-black">POLRI Super App</strong>
                                        di Play Store atau App Store.</li>
                                    <li>Registrasi dan pilih layanan "SKCK", lalu klik "Ajukan SKCK".</li>
                                    <li>Isi data pribadi, unggah dokumen persyaratan (KTP, KK, Pas Foto, dll) dalam
                                        bentuk digital.</li>
                                    <li>Lakukan pembayaran PNBP sebesar Rp 30.000,- melalui metode pembayaran virtual.
                                    </li>
                                    <li>Anda akan mendapatkan kode/barcode untuk mencetak SKCK fisik di loket pelayanan
                                        SKCK Polres Tulungagung.</li>
                                </ul>

                                <strong class="font-semibold text-gray-800">2. Prosedur Offline (Datang
                                    Langsung)</strong>
                                <p class="mt-2 mb-4">Datang ke loket pelayanan SKCK di Polres Tulungagung dengan membawa
                                    dokumen asli dan fotokopi:</p>
                                <ul class="list-disc list-inside space-y-2">
                                    <li>Fotokopi KTP dan KK (bawa juga yang asli).</li>
                                    <li>Fotokopi Akta Kelahiran atau Ijazah terakhir.</li>
                                    <li>Pas foto berwarna 4x6 (latar merah), 4 lembar.</li>
                                    <li>Mengisi formulir pendaftaran di tempat.</li>
                                </ul>

                                <blockquote class="mt-5 border-l-4 border-yellow-300 bg-yellow-50 p-4 rounded-r-lg">
                                    <h4 class="font-bold text-gray-800">Informasi Penting:</h4>
                                    <p class="text-sm text-gray-700 mt-1">Dasar hukum biaya PNBP adalah PP No. 76 Tahun
                                        2020. SKCK memiliki masa berlaku 6 bulan sejak tanggal diterbitkan dan dapat
                                        diperpanjang jika diperlukan.</p>
                                </blockquote>
                            </div>
                        </details>
                    </div>

                    <div
                        class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-yellow-400">
                        <details class="overflow-hidden">
                            <summary class="flex justify-between items-center p-6 cursor-pointer">
                                <h3 class="font-semibold text-gray-900 text-lg">Saya kehilangan KTP/ATM, apa saja yang
                                    perlu disiapkan untuk melapor?</h3>
                                <div
                                    class="text-yellow-500 transform transition-transform duration-300 group-open:-rotate-180">
                                    <i class="fas fa-chevron-down fa-sm"></i>
                                </div>
                            </summary>
                            <div class="px-6 pb-6 pt-2 border-t border-gray-200 text-gray-700 leading-relaxed">
                                <p class="mb-4">Untuk kehilangan dokumen penting seperti KTP, Kartu ATM, SIM, atau
                                    Ijazah, Anda perlu membuat <strong class="text-black">Surat Keterangan Tanda Lapor
                                        Kehilangan (SKTLK)</strong> di kantor polisi terdekat (Polsek/Polres).</p>

                                <strong class="font-semibold text-gray-800">Langkah-langkah Pelaporan:</strong>
                                <ol class="list-decimal list-inside space-y-2 mt-2 mb-4">
                                    <li>Datang ke Sentra Pelayanan Kepolisian Terpadu (SPKT).</li>
                                    <li>Sampaikan kepada petugas bahwa Anda ingin membuat laporan kehilangan.</li>
                                    <li>Jelaskan kronologi kejadian (kapan dan di mana perkiraan hilangnya).</li>
                                </ol>

                                <strong class="font-semibold text-gray-800">Data yang Perlu Disiapkan (jika
                                    ada):</strong>
                                <ul class="list-disc list-inside space-y-2 mt-2">
                                    <li>Fotokopi KTP untuk verifikasi data diri.</li>
                                    <li>Fotokopi dokumen yang hilang (jika punya).</li>
                                    <li>Nomor seri atau data spesifik dari barang/dokumen yang hilang (misal: nomor
                                        kartu ATM).</li>
                                </ul>
                                <blockquote class="mt-5 border-l-4 border-red-300 bg-red-50 p-4 rounded-r-lg">
                                    <p class="font-bold text-red-800">Penerbitan SKTLK tidak dipungut biaya sama sekali
                                        atau GRATIS.</p>
                                </blockquote>
                            </div>
                        </details>
                    </div>

                    <div
                        class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-yellow-400">
                        <details class="overflow-hidden">
                            <summary class="flex justify-between items-center p-6 cursor-pointer">
                                <h3 class="font-semibold text-gray-900 text-lg">Apa saja tahapan tes untuk mendapatkan
                                    SIM baru?</h3>
                                <div
                                    class="text-yellow-500 transform transition-transform duration-300 group-open:-rotate-180">
                                    <i class="fas fa-chevron-down fa-sm"></i>
                                </div>
                            </summary>
                            <div class="px-6 pb-6 pt-2 border-t border-gray-200 text-gray-700 leading-relaxed">
                                <p class="mb-4">Proses penerbitan SIM baru di SATPAS Polres Tulungagung melibatkan
                                    serangkaian tes untuk memastikan kompetensi dan kelayakan pengendara.</p>

                                <strong class="font-semibold text-gray-800">Alur Proses Penerbitan SIM:</strong>
                                <ol class="list-decimal list-inside space-y-3 mt-2">
                                    <li><strong>Pendaftaran:</strong> Mengisi formulir dan melengkapi syarat
                                        administrasi (e-KTP asli dan fotokopi).</li>
                                    <li><strong>Tes Kesehatan & Psikologi:</strong> Melakukan tes kesehatan
                                        (jasmani/penglihatan) dan tes psikologi di lokasi yang telah ditunjuk (biasanya
                                        di sekitar area SATPAS).</li>
                                    <li><strong>Ujian Teori (AVIS):</strong> Mengerjakan ujian berbasis komputer untuk
                                        mengukur pemahaman tentang peraturan lalu lintas, etika berkendara, dan
                                        rambu-rambu.</li>
                                    <li><strong>Ujian Praktik:</strong> Setelah lulus ujian teori, Anda akan mengikuti
                                        ujian praktik di lapangan uji yang telah disiapkan, mencakup berbagai manuver
                                        sesuai jenis SIM.</li>
                                    <li><strong>Identifikasi & Pencetakan:</strong> Jika lulus semua ujian, proses
                                        dilanjutkan dengan pengambilan foto, sidik jari, tanda tangan, dan pencetakan
                                        SIM.</li>
                                </ol>

                                <blockquote class="mt-5 border-l-4 border-blue-300 bg-blue-50 p-4 rounded-r-lg">
                                    <h4 class="font-bold text-gray-800">Tips Sukses:</h4>
                                    <p class="text-sm text-gray-700 mt-1">Pelajari soal-soal latihan ujian teori yang
                                        banyak tersedia online. Untuk ujian praktik, jangan ragu untuk mencoba fasilitas
                                        latihan yang biasanya disediakan di luar jam pelayanan.</p>
                                </blockquote>
                            </div>
                        </details>
                    </div>

                    <div
                        class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-yellow-400">
                        <details class="overflow-hidden">
                            <summary class="flex justify-between items-center p-6 cursor-pointer">
                                <h3 class="font-semibold text-gray-900 text-lg">Kapan saya harus menelepon 110 dan kapan
                                    harus datang ke kantor polisi?</h3>
                                <div
                                    class="text-yellow-500 transform transition-transform duration-300 group-open:-rotate-180">
                                    <i class="fas fa-chevron-down fa-sm"></i>
                                </div>
                            </summary>
                            <div class="px-6 pb-6 pt-2 border-t border-gray-200 text-gray-700 leading-relaxed">
                                <strong class="font-semibold text-gray-800">Hubungi Call Center 110 untuk Kondisi
                                    Darurat:</strong>
                                <p class="mt-1 mb-4">Layanan 110 (bebas pulsa, 24 jam) digunakan untuk situasi yang
                                    membutuhkan respons polisi segera. Contoh:</p>
                                <ul class="list-disc list-inside space-y-2">
                                    <li>Melihat langsung kejadian kejahatan (pencurian, perampokan, penganiayaan).</li>
                                    <li>Kecelakaan lalu lintas yang parah.</li>
                                    <li>Ancaman langsung terhadap keselamatan jiwa.</li>
                                    <li>Keributan atau gangguan kamtibmas yang eskalatif.</li>
                                </ul>
                                <p class="mt-2 text-sm">Saat menelepon, sampaikan dengan tenang: <strong
                                        class="text-black">Apa</strong> yang terjadi, <strong class="text-black">Di
                                        mana</strong> lokasi detailnya, dan <strong class="text-black">Kapan</strong>
                                    kejadiannya.</p>

                                <strong class="font-semibold text-gray-800 mt-5 block">Datang ke Kantor Polisi
                                    (SPKT):</strong>
                                <p class="mt-1">Untuk laporan yang tidak bersifat darurat, seperti kehilangan
                                    dokumen, penipuan online yang sudah terjadi, atau membuat laporan resmi lainnya,
                                    Anda dapat langsung datang ke Sentra Pelayanan Kepolisian Terpadu (SPKT) Polres atau
                                    Polsek terdekat.</p>
                            </div>
                        </details>
                    </div>

                    <div
                        class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-yellow-400">
                        <details class="overflow-hidden">
                            <summary class="flex justify-between items-center p-6 cursor-pointer">
                                <h3 class="font-semibold text-gray-900 text-lg">Bagaimana cara cek dan bayar denda
                                    tilang elektronik (ETLE)?</h3>
                                <div
                                    class="text-yellow-500 transform transition-transform duration-300 group-open:-rotate-180">
                                    <i class="fas fa-chevron-down fa-sm"></i>
                                </div>
                            </summary>
                            <div class="px-6 pb-6 pt-2 border-t border-gray-200 text-gray-700 leading-relaxed">
                                <p class="mb-4">Tilang elektronik atau ETLE (Electronic Traffic Law Enforcement)
                                    mencatat pelanggaran lalu lintas melalui kamera statis maupun mobile. Jika kendaraan
                                    Anda terbukti melanggar, alurnya adalah sebagai berikut:</p>

                                <strong class="font-semibold text-gray-800">Proses Konfirmasi dan Pembayaran
                                    ETLE:</strong>
                                <ol class="list-decimal list-inside space-y-3 mt-2">
                                    <li><strong>Surat Konfirmasi:</strong> Anda akan menerima surat konfirmasi yang
                                        dikirim ke alamat sesuai STNK. Surat ini berisi foto bukti pelanggaran, jenis
                                        pasal yang dilanggar, dan tautan konfirmasi.</li>
                                    <li><strong>Konfirmasi Online:</strong> Lakukan konfirmasi melalui situs atau
                                        aplikasi ETLE nasional. Anda bisa menerima atau menyangkal pelanggaran tersebut.
                                        Konfirmasi wajib dilakukan dalam batas waktu yang ditentukan.</li>
                                    <li><strong>Kode Pembayaran:</strong> Setelah konfirmasi, Anda akan menerima kode
                                        pembayaran denda tilang melalui SMS atau email. Kode ini biasanya merupakan
                                        nomor BRIVA (BRI Virtual Account).</li>
                                    <li><strong>Pembayaran Denda:</strong> Bayar denda melalui berbagai kanal seperti
                                        ATM, mobile banking, atau teller bank yang ditunjuk (umumnya BRI) sebelum batas
                                        waktu yang ditentukan.</li>
                                </ol>

                                <blockquote class="mt-5 border-l-4 border-red-300 bg-red-50 p-4 rounded-r-lg">
                                    <h4 class="font-bold text-gray-800">Peringatan Penting:</h4>
                                    <p class="text-sm text-gray-700 mt-1">Jika Anda tidak melakukan konfirmasi atau
                                        tidak membayar denda sesuai batas waktu, STNK kendaraan Anda akan <strong
                                            class="text-black">diblokir sementara</strong>. Pemblokiran akan dibuka
                                        setelah denda dilunasi.</p>
                                </blockquote>
                            </div>
                        </details>
                    </div>

                    <div
                        class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-yellow-400">
                        <details class="overflow-hidden">
                            <summary class="flex justify-between items-center p-6 cursor-pointer">
                                <h3 class="font-semibold text-gray-900 text-lg">Saya ingin mengadakan acara
                                    hajatan/pentas seni, bagaimana prosedur perizinannya?</h3>
                                <div
                                    class="text-yellow-500 transform transition-transform duration-300 group-open:-rotate-180">
                                    <i class="fas fa-chevron-down fa-sm"></i>
                                </div>
                            </summary>
                            <div class="px-6 pb-6 pt-2 border-t border-gray-200 text-gray-700 leading-relaxed">
                                <p class="mb-4">Untuk acara yang berpotensi menimbulkan keramaian atau menggunakan
                                    fasilitas umum (seperti hajatan pernikahan, konser musik, pengajian akbar, dll.),
                                    Anda perlu mengurus <strong class="text-black">Surat Izin Keramaian</strong>.
                                    Tujuannya adalah untuk memastikan keamanan, ketertiban, dan kelancaran acara.</p>

                                <strong class="font-semibold text-gray-800">Langkah-langkah Pengajuan Izin:</strong>
                                <ul class="list-disc list-inside space-y-2 mt-2">
                                    <li>Ajukan surat permohonan yang ditujukan kepada <strong
                                            class="text-black">Kapolsek (untuk tingkat kecamatan)</strong> atau <strong
                                            class="text-black">Kapolres (untuk tingkat kabupaten, c.q. Kasat
                                            Intelkam)</strong>.</li>
                                    <li>Surat permohonan harus diajukan selambat-lambatnya 7 hari sebelum acara.</li>
                                    <li>Lampirkan proposal kegiatan yang berisi detail:
                                        <ul class="list-['-_'] list-inside ml-4 mt-1">
                                            <li>Jenis dan tujuan acara.</li>
                                            <li>Waktu (tanggal dan jam) dan lokasi acara.</li>
                                            <li>Perkiraan jumlah undangan/penonton.</li>
                                            <li>Nama penanggung jawab acara.</li>
                                        </ul>
                                    </li>
                                    <li>Sertakan fotokopi KTP penanggung jawab dan izin penggunaan tempat (jika
                                        menyewa).</li>
                                </ul>
                                <p class="mt-3">Pihak kepolisian akan meninjau permohonan dan mungkin akan memberikan
                                    rekomendasi terkait keamanan yang perlu disiapkan.</p>
                            </div>
                        </details>
                    </div>

                    <div
                        class="group bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-yellow-400">
                        <details class="overflow-hidden">
                            <summary class="flex justify-between items-center p-6 cursor-pointer">
                                <h3 class="font-semibold text-gray-900 text-lg">Siapakah Bhabinkamtibmas dan bagaimana
                                    saya bisa menghubunginya?</h3>
                                <div
                                    class="text-yellow-500 transform transition-transform duration-300 group-open:-rotate-180">
                                    <i class="fas fa-chevron-down fa-sm"></i>
                                </div>
                            </summary>
                            <div class="px-6 pb-6 pt-2 border-t border-gray-200 text-gray-700 leading-relaxed">
                                <p class="mb-4"><strong class="text-black">Bhabinkamtibmas</strong> (Bhayangkara
                                    Pembina Keamanan dan Ketertiban Masyarakat) adalah anggota Polri yang bertugas di
                                    tingkat desa atau kelurahan. Mereka adalah garda terdepan kepolisian yang
                                    bersentuhan langsung dengan masyarakat.</p>

                                <strong class="font-semibold text-gray-800">Peran Utama Bhabinkamtibmas:</strong>
                                <ul class="list-disc list-inside space-y-2 mt-2">
                                    <li>Melakukan kunjungan rutin (sambang) ke warga.</li>
                                    <li>Membantu menyelesaikan masalah ringan antar warga (problem solving).</li>
                                    <li>Memberikan penyuluhan dan informasi terkait keamanan.</li>
                                    <li>Mendeteksi dini potensi gangguan kamtibmas di wilayahnya.</li>
                                </ul>

                                <strong class="font-semibold text-gray-800 mt-4 block">Cara Menghubungi
                                    Bhabinkamtibmas:</strong>
                                <p class="mt-2">Setiap desa/kelurahan memiliki satu petugas Bhabinkamtibmas. Anda
                                    dapat menemukan kontaknya melalui:</p>
                                <ul class="list-disc list-inside space-y-2 mt-2">
                                    <li>Papan informasi di kantor desa/kelurahan.</li>
                                    <li>Bertanya langsung kepada perangkat desa/RT/RW setempat.</li>
                                    <li>Menghubungi kantor Polsek terdekat dan menanyakan siapa petugas Bhabinkamtibmas
                                        untuk wilayah Anda.</li>
                                </ul>
                            </div>
                        </details>
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
                            <a href="#" aria-label="Instagram" class="text-gray-300 hover:text-yellow-400"><i
                                    class="fab fa-instagram fa-lg"></i></a>
                            <a href="#" aria-label="Youtube" class="text-gray-300 hover:text-yellow-400"><i
                                    class="fab fa-youtube fa-lg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center text-sm text-gray-500">
                    © 2025 Kepolisian Resor Tulungagung. Semua Hak Cipta Dilindungi.
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
