@extends('layouts.admin')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Dashboard Admin</h1>
        <button onclick="toggleModal('modal-produk')" class="bg-[#7E8959] text-white px-4 py-2 rounded-lg hover:bg-[#6B754D] transition">
            <i class="fas fa-plus mr-2"></i> Tambah Produk
        </button>
    </div>

    <!-- Stats Card -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-blue-500">
            <p class="text-sm text-gray-500 uppercase font-bold">Total Penjualan</p>
            <p class="text-2xl font-bold">Rp 2.450.000</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-green-500">
            <p class="text-sm text-gray-500 uppercase font-bold">Produk Aktif</p>
            <p class="text-2xl font-bold">12 Item</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-orange-500">
            <p class="text-sm text-gray-500 uppercase font-bold">Stok Menipis</p>
            <p class="text-2xl font-bold text-red-500">3 Produk</p>
        </div>
    </div>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <!-- Form Tambah Voucher -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <h2 class="text-xl font-bold mb-4 flex items-center">
                <i class="fas fa-ticket-alt mr-2 text-[#7E8959]"></i> Tambah Voucher Baru
            </h2>
            <form action="{{ url('/admin/voucher') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kode Voucher</label>
                    <input type="text" name="kode_voucher" placeholder="CONTOH: HEMAT50" class="w-full p-2 border rounded-lg focus:ring-[#7E8959] focus:border-[#7E8959]" required>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Potongan (Rp)</label>
                        <input type="number" name="potongan" class="w-full p-2 border rounded-lg" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Expired</label>
                        <input type="date" name="expired_date" class="w-full p-2 border rounded-lg" required>
                    </div>
                </div>
                <button type="submit" class="w-full bg-[#7E8959] text-white py-2 rounded-lg font-bold">Simpan Voucher</button>
            </form>
        </div>

        <!-- History Singkat (Firestore Data) -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <h2 class="text-xl font-bold mb-4 flex items-center">
                <i class="fas fa-shopping-cart mr-2 text-[#7E8959]"></i> Pesanan Terbaru
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="text-gray-400 text-sm border-b">
                            <th class="pb-2">User ID</th>
                            <th class="pb-2 text-right">Total</th>
                            <th class="pb-2 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach($orders as $order)
                        <tr class="border-b last:border-0">
                            <td class="py-3 font-medium">{{ Str::limit($order->id(), 8) }}</td>
                            <td class="py-3 text-right">Rp {{ number_format($order['total_harga'] ?? 0) }}</td>
                            <td class="py-3 text-center">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">Selesai</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Produk (Hidden by default) -->
<div id="modal-produk" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-xl w-full max-w-md p-6">
        <h2 class="text-xl font-bold mb-4">Tambah Produk Firestore</h2>
        <form action="{{ url('/admin/product') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="nama" placeholder="Nama Jamu" class="w-full p-2 border rounded-lg" required>
            <input type="number" name="harga" placeholder="Harga" class="w-full p-2 border rounded-lg" required>
            <input type="number" name="stok" placeholder="Stok" class="w-full p-2 border rounded-lg" required>
            <input type="text" name="image_url" placeholder="URL Gambar" class="w-full p-2 border rounded-lg">
            <div class="flex justify-end space-x-2">
                <button type="button" onclick="toggleModal('modal-produk')" class="px-4 py-2 text-gray-500">Batal</button>
                <button type="submit" class="px-4 py-2 bg-[#7E8959] text-white rounded-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function toggleModal(id) {
        const modal = document.getElementById(id);
        modal.classList.toggle('hidden');
    }
</script>
@endsection