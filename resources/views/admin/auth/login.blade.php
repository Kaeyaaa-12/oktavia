<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Polres Tulungagung</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="antialiased">

    <div class="relative flex flex-col justify-center items-center min-h-screen bg-cover bg-center"
        style="background-image: url('{{ asset('assets/images/bglogin.png') }}');">
        <header class="absolute top-0 left-0 p-6 z-10 flex items-center space-x-4">
            <img src="{{ asset('assets/images/lambang.png') }}" alt="Logo Polres Tulungagung" class="w-20 md:w-24">
            <img src="{{ asset('assets/images/poldajatim.png') }}" alt="Logo Polda Jatim" class="w-20 md:w-24">
        </header>

        <div class="relative z-10 w-full max-w-sm m-4" x-data="{ showForgotPassword: false }">

            <div class="bg-black backdrop-blur-sm rounded-2xl shadow-2xl border border-gray-700">

                <div class="relative p-8">

                    <div x-show="!showForgotPassword" x-transition>
                        <h2 class="text-2xl font-bold text-center text-yellow-400 mb-6">LOGIN</h2>

                        @if ($errors->any())
                            <div
                                class="mb-4 text-center bg-red-900/50 border border-red-700 text-red-300 px-4 py-3 rounded-lg text-sm">
                                Email atau Password salah.
                            </div>
                        @endif

                        <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
                            @csrf

                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                    class="w-full bg-gray-200 text-gray-900 border border-gray-500 rounded-lg p-2.5 focus:ring-yellow-500 focus:border-yellow-500 transition"
                                    placeholder="contoh@email.com">
                                @error('email')
                                    <p class="mt-2 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-300">Password</label>
                                <input type="password" id="password" name="password" required
                                    class="w-full bg-gray-200 text-gray-900 border border-gray-500 rounded-lg p-2.5 focus:ring-yellow-500 focus:border-yellow-500 transition"
                                    placeholder="••••••••">
                                @error('password')
                                    <p class="mt-2 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="text-right -mt-2">
                                <a href="#" @click.prevent="showForgotPassword = true"
                                    class="text-sm text-yellow-400 hover:text-yellow-300 transition">Lupa Password?</a>
                            </div>

                            <button type="submit"
                                class="w-full py-3 bg-yellow-500 text-black rounded-lg hover:bg-yellow-600 font-bold uppercase tracking-wider shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                                Login
                            </button>
                            <p class="text-center text-sm text-gray-400 !mt-4">Khusus Staff Polres Tulungagung</p>
                        </form>
                    </div>

                    <div x-show="showForgotPassword" x-transition style="display: none;">
                        <h2 class="text-2xl font-bold text-center text-yellow-400 mb-4">Lupa Password</h2>
                        <p class="text-center text-gray-300 text-sm mb-6">Masukkan email Anda untuk menerima link reset.
                        </p>

                        @if (session('status'))
                            <div
                                class="mb-4 font-medium text-sm text-green-400 bg-green-900/50 border border-green-700 text-center p-3 rounded-lg">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('admin.password.email') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="email_forgot" class="block mb-2 text-sm font-medium text-gray-300">Email
                                    Terdaftar</label>
                                <input type="email" id="email_forgot" name="email" value="{{ old('email') }}"
                                    required
                                    class="w-full bg-gray-200 text-gray-900 border border-gray-500 rounded-lg p-2.5 focus:ring-yellow-500 focus:border-yellow-500 transition">
                                @error('email')
                                    <p class="mt-2 text-xs text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="text-right -mt-2">
                                <a href="#" @click.prevent="showForgotPassword = false"
                                    class="text-sm text-yellow-400 hover:text-yellow-300 transition">Kembali ke
                                    Login</a>
                            </div>
                            <button type="submit"
                                class="w-full py-3 bg-yellow-500 text-black rounded-lg hover:bg-yellow-600 font-bold uppercase tracking-wider shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                                Kirim Link Reset
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
