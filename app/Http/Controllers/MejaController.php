<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meja;
use Illuminate\Support\Facades\DB;

class MejaController extends Controller
{
    public function index()
    {
        $this->logActivity();
        $meja = Meja::all();
        return view('meja.index', compact('meja'));
    }

    public function create()
    {
        $this->logActivity();
        return view('meja.create');
    }

    public function store(Request $request)
    {
        $this->logActivity();
        Meja::create($request->all());
        return redirect('/meja');
    }

    public function edit($id)
    {
        $this->logActivity();
        $meja = Meja::find($id);
        return view('meja.edit', compact('meja'));
    }

    public function update(Request $request, $id)
    {
        $this->logActivity();
        $meja = Meja::find($id);
        $meja->update($request->all());
        return redirect('/meja');
    }

    public function destroy($id)
    {
        $this->logActivity();
        Meja::destroy($id);
        return redirect('/meja');
    }

    private function logActivity()
    {
        DB::table('logactivity')->insert([
            'namaroute' => request()->route()->uri(),
        ]);
    }
}
