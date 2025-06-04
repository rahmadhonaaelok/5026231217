<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\Link;
use App\Http\Controllers\Pegawai2Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;


Route::get('halo', function () {
    return 'Selamat datang di Laravel';
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('blog', function () {
    return view('blog');
});



Route::get('/publishfrontend', function () {
    return view('publishfrontend');
});

// Tambahan route sesuai file di views
Route::get('/p1', function () {
    return view('p1');
});

Route::get('/p4', function () {
    return view('p4');
});

Route::get('/p7part1', function () {
    return view('p7part1');
});

Route::get('/p7part2', function () {
    return view('p7part2');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('/tugaslinktree', function () {
    return view('tugaslinktree');
});

Route::get('/template1', function () {
    return view('template1');
});

//selalu beri comment untuk route yang setipe. karena sampai akhir nanti kita hanya pake yang route kalo ga comment nanti kalian yang kesulitan
//pegawai
//Route::get('dosen', [Link::class, 'index']);
//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index']);
//Route::get('formulir', [Pegawai2Controller::class, 'formulir']);
//Route::post('formulir/proses', [Pegawai2Controller::class, 'proses']);

//blog
//Route::get('/blog', [BlogController::class, 'home']);
//Route::get('/blog/tentang', [BlogController::class, 'tentang']);
//Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
=======
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Pegawai2Controller;
//sama dengan import java.io.*

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//system.out.println();
//Route.get();

Route::get('/', function () {
    return view('welcome');
});

//simple
Route::get('/selamat', function () {
    return view('welcome');
});

//view code
Route::get('halo', function () {
	return "<h1> Halo, Selamat datang di tutorial laravel www.malasngoding.com </h1>";
});

Route::get('blog', function () {
	return view('blog');
});

//controller
Route::get('hello', [Coba::class, 'helloword']);
//Route::get('hello', 'App\Http\Controllers\Coba@helloworld');

//namafile boleh sama dgn asli atau beda
Route::get('pertama', function () {
	return view('pertama');
});


//route kumpulan tugas
Route::get('frontend', function () {
	return view('frontend');
});

//route untuk file tugas hingga ets
//pt 1
Route::get('pertama', function () {
	return view('pertama');
});

//latihan pt2 diedit langsung di file pt1

//3
Route::get('bootsrap1', function () {
	return view('bootsrap1');
});

Route::get('bootsrap2', function () {
	return view('bootsrap2');
});

//pt 4
Route::get('latihan', function () {
	return view('latihan');
});

//tugas linktree pt 5
Route::get('indahkus', function () {
	return view('indahkus');
});

//pt 7
Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

//ets
Route::get('ets', function () {
	return view('ets');
});

//4
Route::get('dosen', [Coba::class, 'index']);

//5
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index'] );

//menangkap data dari inputan

//halaman isian formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
//action form : redirect
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//8
// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//9
//route CRUD
Route::get('/pegawai',[PegawaiController::class, 'index']);

//10
//route pegawai tambah
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);

//route pegawai store
Route::post('/pegawai/store', [PegawaiController:: class, 'store']);

//11
//data id
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
//update
Route::post('/pegawai/update', [PegawaiController:: class, 'update']);

//12
//hapus
Route::get('/pegawai/hapus/{id}', [PegawaiController:: class, 'hapus']);

//16
//cari
Route::get('/pegawai/cari', [PegawaiController:: class, 'cari']);

>>>>>>> 44061e5 (pertemuan14)
