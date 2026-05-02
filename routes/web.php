<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AuthController; // Tambahkan ini
use Illuminate\Support\Facades\Route;

// Halaman depan
Route::get('/', function () {
    return view('welcome');
});

// Route untuk Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Grouping route admin dengan proteksi Login
Route::prefix('admin')->middleware('auth')->group(function () {
    // Dashboard (mengambil data pesanan dari Firestore)
    Route::get('/dashboard', [AdminProductController::class, 'history'])->name('admin.dashboard'); 
    
    // Action Firestore
    Route::post('/product', [AdminProductController::class, 'store']);
    Route::post('/voucher', [AdminProductController::class, 'storeVoucher']);
    Route::delete('/voucher/{kode}', [AdminProductController::class, 'deleteVoucher']);
});