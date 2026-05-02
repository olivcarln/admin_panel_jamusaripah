<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller {

    public function store(Request $request) {
        return back()->with('success', 'Produk berhasil ditambah (sementara tanpa Firebase)');
    }

    public function updateHarga(Request $request, $id) {
        return back()->with('success', 'Harga berhasil diupdate (sementara nonaktif)');
    }

    public function storeVoucher(Request $request) {
        return back()->with('success', 'Voucher berhasil ditambah (sementara nonaktif)');
    }

    public function deleteVoucher($kode) {
        return back()->with('success', 'Voucher dihapus (sementara nonaktif)');
    }

    public function history() {
        $orders = [];
        return view('admin.dashboard', compact('orders'));
    }
}