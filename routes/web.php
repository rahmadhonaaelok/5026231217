<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Coba;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\KeranjangBelanjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('selamat', function () {
    return view('welcome');
});

// route controller coba
Route::get('hello', [Coba::class, 'helloword']);
Route::get('dosen', [Coba::class, 'index']);

// tugas views sederhana
Route::get('pertama', function () {
    return view('pertama');
});

Route::get('/meja', [MejaController::class, 'index']);

Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/create', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');

