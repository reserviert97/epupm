<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjual;

class PenjualController extends Controller
{
    public function index()
    {
        $data = Penjual::all();
        return view('penjual.index', compact('data'));
    }

    public function delete(Penjual $penjual)
    {
        $penjual->delete();
        session()->flash('success', 'Data berhasil dihapus');
        
        return redirect()->back();
    }

    public function create()
    {
        return view('penjual.create');
    }

    public function store(Request $request)
    {
        Penjual::insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('penjual.index');
    }

    public function show(Penjual $penjual)
    {
        return view('penjual.show')->withData($penjual);
    }
}
