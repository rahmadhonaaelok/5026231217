<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
     public function index()
    {
    	// mengambil data dari table karyawan

        $karyawan = DB::table('karyawan')->paginate(10); //array per page

        // mengirim data pegawai ke view index2
    	return view('karyawan/index_karyawan',['karyawan' => $karyawan]);

    }
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('karyawan/tambah_karyawan');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen,

		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');

	}



	// method untuk hapus data pegawai
	public function hapus($kodepegawai)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')
        ->where('kodepegawai',$kodepegawai)
        ->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}



}
