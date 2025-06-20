<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MejaController extends Controller
{
    public function index()
    {
        $this->logActivity();
        $meja = DB::table('meja')->paginate(10);
        return view('meja.index', ['meja' => $meja]);
    }

    public function create()
    {
        $this->logActivity();
        return view('meja.create');
    }

    public function store(Request $request)
    {
        $this->logActivity();
        DB::table('meja')->insert([
            'meja_merkmeja' => $request->merkmeja,
            'meja_hargameja' => $request->hargameja,
            'meja_tersedia' => $request->tersedia,
            'meja_berat' => $request->berat
        ]);
        return redirect('/meja');
    }

    public function edit($id)
    {
        $this->logActivity();
        $meja = DB::table('meja')->where('meja_id', $id)->first();
        return view('meja.edit', ['meja' => $meja]);
    }

    public function update(Request $request)
    {
        $this->logActivity();
        DB::table('meja')->where('meja_id', $request->id)->update([
            'meja_merkmeja' => $request->merkmeja,
            'meja_hargameja' => $request->hargameja,
            'meja_tersedia' => $request->tersedia,
            'meja_berat' => $request->berat
        ]);
        return redirect('/meja');
    }

    public function destroy($id)
    {
        $this->logActivity();
        DB::table('meja')->where('meja_id', $id)->delete();
        return redirect('/meja');
    }

    public function search(Request $request)
    {
        $this->logActivity();
        $cari = $request->cari;

        $meja = DB::table('meja')
            ->where('meja_merkmeja', 'like', "%{$cari}%")
            ->orWhere('meja_hargameja', '=', $cari)
            ->orWhere('meja_tersedia', '=', $cari === 'tersedia' ? 1 : ($cari === 'tidak tersedia' ? 0 : null))
            ->paginate();

        return view('meja.index', ['meja' => $meja, 'cari' => $cari]);
    }

    private function logActivity()
    {
        DB::table('logactivity')->insert([
            'namaroute' => request()->route()->uri(),
        ]);
    }
}
