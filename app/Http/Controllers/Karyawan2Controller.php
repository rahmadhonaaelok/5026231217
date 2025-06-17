<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan2Controller extends Controller
{
    //
    public function index()
	{
    	// mengambil data dari table karyawan
		$karyawan = DB::table('karyawan')->get();
        // $karyawan = DB::table('karyawan')->paginate(10);
    	// mengirim data pegawai ke view index
		return view('data_karyawan/index4',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{

		// memanggil view tambah
		return view('data_karyawan/tambah_karyawan');

	}

	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
		// insert data ke table karyawan
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');

	}

	// method untuk hapus data karyawan
	public function hapus($id)
	{
		// menghapus data karyawan berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cari."%")
		->get();

    		// mengirim data karyawan ke view index
		return view('data_karyawan/index4',['karyawan' => $karyawan], ['cari' => $cari]);

	}
}
