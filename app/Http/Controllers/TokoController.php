<?php

namespace App\Http\Controllers;

use App\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $data = Toko::all();
        return view('toko.index', compact('data'));
    }

    public function create()
    {
        return view('toko.create');
    }

    public function store(Request $request)
    {
        Toko::insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('toko.index');
    }

    public function show(Toko $toko)
    {
        return view('toko.show')->withData($toko);
    }

    public function destroy(Toko $toko)
    {
        $toko->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
