<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Jamu Saripah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#F9F9F9] min-h-screen flex items-center justify-center p-4">

    <div class="max-w-md w-full">
        <div class="text-center mb-10">
            <div class="text-3xl font-bold text-[#7E8959]">Jamu <span class="text-[#A4AC86]">Saripah</span></div>
            <p class="text-gray-500 mt-2">Panel Administrasi Khusus Admin</p>
        </div>

        <div class="bg-white p-8 rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100">
            <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">Selamat Datang</h2>
            <p class="text-gray-400 text-center mb-8 text-sm">Silakan masuk untuk mengelola toko</p>

            @if ($errors->any())
                <div class="bg-red-50 text-red-600 p-4 rounded-xl mb-6 text-sm border border-red-100 font-semibold">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Email Admin</label>
                    <input type="email" name="email" autocomplete="off" required 
                        class="w-full px-5 py-4 rounded-2xl bg-gray-200 border border-transparent focus:border-[#7E8959] focus:bg-white focus:ring-4 focus:ring-[#7E8959]/10 outline-none transition-all"
                        placeholder="contoh@jamusaripah.com">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" autocomplete="new-password" required 
                        class="w-full px-5 py-4 rounded-2xl bg-gray-200 border border-transparent focus:border-[#7E8959] focus:bg-white focus:ring-4 focus:ring-[#7E8959]/10 outline-none transition-all"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between px-1">
                    <label class="flex items-center text-sm text-gray-500 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-gray-300 text-[#7E8959] focus:ring-[#7E8959]">
                        <span class="ml-2">Ingat saya</span>
                    </label>
                    <a href="#" class="text-sm text-[#7E8959] font-semibold hover:underline">Lupa Password?</a>
                </div>

              <button type="submit" 
                class="w-full bg-[#7E8959] text-white font-bold py-4 rounded-2xl shadow-lg shadow-[#7E8959]/30 hover:-translate-y-1 hover:bg-[#6B754D] transition-all duration-300">
                Masuk Dashboard
            </button>

            <p class="mt-6 text-center text-sm text-gray-400">
                Belum punya akun admin? <a href="{{ route('register') }}" class="text-[#7E8959] font-bold hover:underline">Daftar Akun</a>
            </p>

            <div class="mt-8 text-center pt-6 border-t border-gray-50">
                <a href="/" class="text-gray-400 text-sm hover:text-[#7E8959] transition-colors flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>

        <p class="text-center mt-10 text-gray-400 text-sm italic">
            "Sehat Alami dengan Resep Autentik"
        </p>

    </div>
</body>
</html>