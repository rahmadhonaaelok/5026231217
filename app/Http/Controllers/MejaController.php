<?php

namespace App\Http\Controllers;

use App\Models\Meja;

class MejaController extends Controller
{
    public function index()
    {
        $data = Meja::all();
        return view('meja.index', compact('data'));
    }
}
