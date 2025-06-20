<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Meja;

class MejaController extends Controller
{
    public function index()
    {
        $data = Meja::all();
        return view('meja.index', compact('data'));
    }
}

class MejaController extends Controller
{
    public function index()
    {
        $this->logActivity(); 
        $meja = meja::all();
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
        meja ::create($request->all());
        return redirect('/meja');
    }

    public function edit($id)
    {
        $this->logActivity(); 
        $meja = meja::find($id);
        return view('meja.edit', compact('meja'));
    }

    public function update(Request $request, $id)
    {
        $this->logActivity();
        $meja = meja::find($id);
        $meja->update($request->all());
        return redirect('/meja');
    }

    public function destroy($id)
    {
        $this->logActivity();
        meja::destroy($id);
        return redirect('/meja');
    }
}
public function logActivity()
{
    \DB::table('logactivity')->insert([
        'namaroute' => request()->route()->uri(),
    ]);
}
