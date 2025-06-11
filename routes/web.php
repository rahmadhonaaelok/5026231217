<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Coba;
use App\Http\Controllers\MejaController;

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
