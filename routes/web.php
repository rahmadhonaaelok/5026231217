<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Coba;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\karyawanController ;
use App\Http\Controllers\Karyawan2Controller;


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

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);

Route::get('/karyawan', [Karyawan2Controller::class, 'index']);
Route::get('/karyawan/tambah', [Karyawan2Controller::class, 'tambah']);
Route::post('/karyawan/store', [Karyawan2Controller::class, 'store']);
Route::get('/karyawan/hapus/{id}', [Karyawan2Controller::class, 'hapus']);
Route::get('/karyawan/cari', [Karyawan2Controller::class, 'cari']);
