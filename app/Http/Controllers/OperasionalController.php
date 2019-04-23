<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operasional;

class OperasionalController extends Controller
{
    public function index()
    {
        $data = Operasional::all();
        return view('operasional.index', compact('data'));
    }

    public function transport()
    {
        return view('operasional.transport');
    }

    public function giling()
    {
        
    }

    public function kemas()
    {
        
    }

    public function bm()
    {
        
    }

    public function store(Request $request)
    {
        Operasional::insert([
            'item' => $request->item,
            'harga' => $request->harga,
            'volume' => $request->volume,
            'total' => $request->harga * $request->volume,
            'Keterangan' => '',
            'created_at' => now(),
        ]);
        return redirect()->route('operasional.index');
    }
}
