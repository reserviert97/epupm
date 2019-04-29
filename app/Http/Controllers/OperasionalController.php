<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operasional;
use App\Transport;

class OperasionalController extends Controller
{
    public function index()
    {
        $data = Operasional::all();

        // $satu = Operasional::find(2);
        // dd($satu->bongkarMuat->harga);
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
        $operasional = Operasional::create([
            'jenis_item' => $request->item,
            'created_at' => now(),
        ]);

        Transport::insert([
            'harga' => $request->harga * $request->volume,
            'volume' => $request->volume,
            'operasional_id' => $operasional->id,
            'id_pembelian' => 2,
            'created_at' => now(),
        ]);
        
        return redirect()->route('operasional.index');
    }
}
