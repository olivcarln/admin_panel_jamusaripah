<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Import ini agar $request tidak merah
use App\Http\Controllers\Controller;
use Kreait\Laravel\Firebase\Facades\Firebase;

class AdminProductController extends Controller {
    protected $firestore;

    public function __construct() {
        $this->firestore = Firebase::firestore()->database();
    }

    public function store(Request $request) {
        $this->firestore->collection('products')->add([
            'nama'  => $request->nama,
            'harga' => (int) $request->harga,
            'stok'  => (int) $request->stok,
            'image' => $request->image_url,
        ]);
        return back()->with('success', 'Produk berhasil ditambah!');
    }

    public function updateHarga(Request $request, $id) {
        $this->firestore->collection('products')->document($id)->update([
            ['path' => 'harga', 'value' => (int) $request->harga_baru]
        ]);
        return back()->with('success', 'Harga berhasil diupdate!');
    }

    public function storeVoucher(Request $request) {
        $this->firestore->collection('vouchers')->document($request->kode_voucher)->set([
            'potongan' => (int) $request->potongan,
            'expired'  => $request->expired_date,
        ]);
        return back()->with('success', 'Voucher berhasil ditambah!');
    }

    public function deleteVoucher($kode) {
        $this->firestore->collection('vouchers')->document($kode)->delete();
        return back()->with('success', 'Voucher dihapus!');
    }

    public function history() {
        $ordersRef = $this->firestore->collection('orders');
        // Pastikan kolom 'timestamp' ada di Firestore agar orderBy tidak error
        $query = $ordersRef->orderBy('timestamp', 'DESC'); 
        $orders = $query->documents();

        return view('admin.history', compact('orders'));
    }
}