<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Admin - Jamu Saripah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-[#F9F9F9] min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full">
        <div class="text-center mb-10">
            <div class="text-3xl font-bold text-[#7E8959]">Jamu <span class="text-[#A4AC86]">Saripah</span></div>
            <p class="text-gray-500 mt-2">Buat Akun Administrator Baru</p>
        </div>

        <div class="bg-white p-8 rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100">
            <form action="{{ route('register') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" name="name" required class="w-full px-5 py-4 rounded-2xl bg-gray-200 border border-transparent focus:border-[#7E8959] focus:bg-white focus:ring-4 focus:ring-[#7E8959]/10 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" autocomplete="off" required class="w-full px-5 py-4 rounded-2xl bg-gray-200 border border-transparent focus:border-[#7E8959] focus:bg-white focus:ring-4 focus:ring-[#7E8959]/10 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" autocomplete="new-password" required class="w-full px-5 py-4 rounded-2xl bg-gray-200 border border-transparent focus:border-[#7E8959] focus:bg-white focus:ring-4 focus:ring-[#7E8959]/10 outline-none transition-all">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" required class="w-full px-5 py-4 rounded-2xl bg-gray-200 border border-transparent focus:border-[#7E8959] focus:bg-white focus:ring-4 focus:ring-[#7E8959]/10 outline-none transition-all">
                </div>

                <button type="submit" class="w-full bg-[#7E8959] text-white font-bold py-4 rounded-2xl shadow-lg shadow-[#7E8959]/30 hover:-translate-y-1 hover:bg-[#6B754D] transition-all duration-300">
                    Daftar Sekarang
                </button>
            </form>

            <div class="mt-8 text-center text-sm text-gray-400">
                Sudah punya akun? <a href="{{ route('login') }}" class="text-[#7E8959] font-bold hover:underline">Login di sini</a>
            </div>
        </div>
    </div>
</body>
</html>