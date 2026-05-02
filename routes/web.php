<?php

use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;

// Halaman depan
Route::get('/', function () {
    return view('welcome');
});

// Grouping route admin agar lebih rapi
Route::prefix('admin')->group(function () {
    // Dashboard (mengambil data pesanan dari Firestore)
    Route::get('/dashboard', [AdminProductController::class, 'history']); 
    
    // Action Firestore
    Route::post('/product', [AdminProductController::class, 'store']);
    Route::post('/voucher', [AdminProductController::class, 'storeVoucher']);
    Route::delete('/voucher/{kode}', [AdminProductController::class, 'deleteVoucher']);
});