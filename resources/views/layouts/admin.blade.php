<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Jamu Saripah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#7E8959] text-white hidden md:block">
            <div class="p-6 text-2xl font-bold border-b border-[#6B754D]">
                Jamu Saripah
            </div>
            <nav class="p-4 space-y-2">
                <a href="#" class="flex items-center p-3 rounded-lg bg-[#6B754D]">
                    <i class="fas fa-home mr-3"></i> Dashboard
                </a>
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-[#6B754D] transition">
                    <i class="fas fa-box mr-3"></i> Kelola Produk
                </a>
                <a href="#" class="flex items-center p-3 rounded-lg hover:bg-[#6B754D] transition">
                    <i class="fas fa-ticket-alt mr-3"></i> Voucher
                </a>
                <a href="/history" class="flex items-center p-3 rounded-lg hover:bg-[#6B754D] transition">
                    <i class="fas fa-history mr-3"></i> Riwayat Pesanan
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
</body>
</html>