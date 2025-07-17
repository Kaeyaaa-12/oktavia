<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Polres Tulungagung</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative flex flex-col justify-center items-center min-h-screen bg-cover bg-center"
        style="background-image: url('{{ asset('assets/images/bglogin.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <header class="absolute top-0 left-0 p-6 z-10 flex items-center space-x-4">
            <img src="{{ asset('assets/images/lambang.png') }}" alt="Logo Polres Tulungagung" class="w-20 md:w-24">
            <img src="{{ asset('assets/images/poldajatim.png') }}" alt="Logo Polda Jatim" class="w-20 md:w-24">
        </header>
        <div class="relative z-10 w-full max-w-sm m-4">
            <div
                class="bg-black bg-opacity-25 backdrop-blur-xl rounded-3xl shadow-2xl border border-white border-opacity-20">
                <div class="relative p-12">
                    <h2 class="text-3xl font-bold text-center text-yellow-400 mb-8">Buat Password Baru</h2>
                    <form action="{{ route('admin.password.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="relative border-b-2 border-gray-500">
                            <input type="email" id="email" name="email"
                                value="{{ $request->email ?? old('email') }}" required readonly
                                class="block w-full appearance-none bg-transparent px-1 pb-2 text-gray-400 focus:outline-none">
                            <label for="email"
                                class="absolute top-0 left-1 text-gray-400 transition-transform duration-300 pointer-events-none -translate-y-5 text-xs">Email</label>
                        </div>
                        <div class="relative border-b-2 border-gray-500 focus-within:border-yellow-400 transition">
                            <input type="password" id="password" name="password" required
                                class="block w-full appearance-none bg-transparent px-1 pb-2 text-white placeholder-transparent focus:outline-none">
                            <label for="password"
                                class="absolute top-0 left-1 text-gray-300 transition-transform duration-300 pointer-events-none">Password
                                Baru</label>
                        </div>
                        <div class="relative border-b-2 border-gray-500 focus-within:border-yellow-400 transition">
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                class="block w-full appearance-none bg-transparent px-1 pb-2 text-white placeholder-transparent focus:outline-none">
                            <label for="password_confirmation"
                                class="absolute top-0 left-1 text-gray-300 transition-transform duration-300 pointer-events-none">Konfirmasi
                                Password</label>
                        </div>
                        <div class="pt-4">
                            <button type="submit"
                                class="w-full py-3 bg-yellow-500 text-black rounded-lg hover:bg-yellow-600 font-bold uppercase">Reset
                                Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
