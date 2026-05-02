<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Jamu Saripah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#F9F9F9]">

    <!-- Navbar -->
    <nav class="p-6 flex justify-between items-center bg-white shadow-sm">
        <div class="text-2xl font-bold text-[#7E8959]">Jamu <span class="text-[#A4AC86]">Saripah</span></div>
        <div>
            <a href="/admin/dashboard" class="bg-[#7E8959] text-white px-6 py-2 rounded-full font-semibold hover:bg-[#6B754D] transition">
                Masuk Dashboard
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="flex flex-col items-center justify-center min-h-[80vh] text-center px-4">
        <div class="mb-6">
            <span class="bg-[#E9EDC9] text-[#7E8959] px-4 py-1 rounded-full text-sm font-bold uppercase tracking-widest">
                Traditional Herbal Drink
            </span>
        </div>
        <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6 leading-tight">
            Sehat Alami dengan <br> <span class="text-[#7E8959]">Resep Autentik.</span>
        </h1>
        <p class="text-gray-500 max-w-2xl text-lg mb-10">
            Kelola stok produk, pantau riwayat transaksi, dan buat voucher promo untuk pelanggan Jamu Saripah dalam satu platform terintegrasi Firestore.
        </p>
        <div class="flex gap-4">
            <a href="/admin/dashboard" class="bg-[#7E8959] text-white px-8 py-4 rounded-xl font-bold text-lg shadow-lg shadow-[#7e8959]/30 hover:-translate-y-1 transition-all">
                Buka Panel Admin
            </a>
            <button class="border-2 border-[#7E8959] text-[#7E8959] px-8 py-4 rounded-xl font-bold text-lg hover:bg-[#7E8959] hover:text-white transition-all">
                Pelajari Fitur
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-10 text-gray-400 text-sm">
        &copy; 2026 Jamu Saripah Project • Built with Laravel & Firebase
    </footer>

</body>
</html>