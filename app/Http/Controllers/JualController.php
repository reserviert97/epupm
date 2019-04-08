<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengiriman;

class JualController extends Controller
{
    public function index()
    {
        $data = Pengiriman::all();
        return view('pengiriman.index', compact('data'));
    }

    public function create()
    {
        return view('pengiriman.create');
    }

    public function store(Request $request)
    {
        Pengiriman::insert([
            'toko' => $request->toko,
            'volume' => $request->volume,
            'harga' => $request->harga,
            'total' => $request->harga * $request->volume,
            'created_at' => now()
        ]);
        
        return redirect()->route('jual.index');
    }

    public function destroy(Pengiriman $pengiriman)
    {
        $pengiriman->delete();
        return redirect()->back();
    }
}
