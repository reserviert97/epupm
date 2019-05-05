<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengiriman;
use App\Pembelian;
use App\Operasional;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with([
            'persenPadi' => Pengiriman::presentase(), 
            'persenOp' => Operasional::presentase(),
            'totalPadi' => Pembelian::totalPadi(),
            'totalBeras' => Pengiriman::totalBeras(),
            'warna' => $this->warna(Pengiriman::presentase()),
            'warnaOp' => $this->warna(Operasional::presentase()),
            'stokPadi' => Pembelian::stok(),
            'stokBeras' => Pengiriman::stok(),
            'operasional' => Operasional::totalOperasional(),
            'sisaOperasional' => 60000000 - Operasional::totalOperasional(),
            'totalModal' => Pembelian::totalUang(),
            'hasilKirim' => Pengiriman::totalUang(),
            'saldo' => 55000000 - Pengiriman::totalUang(),
        ]);
    }

    /**
     * Custom Helper
     */

    public function warna($value)
    {
        $warna = '';
        if ($value <= 10) {
            $warna = 'bg-red';
        } elseif ($value <= 60 && $value >= 10) {
            $warna = 'bg-yellow';
        } else {
            $warna = 'bg-green';
        }
        return $warna;
    }
}
