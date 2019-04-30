<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengiriman;
use App\Toko;
use Carbon\Carbon;

class JualController extends Controller
{
    public function index()
    {
        $data = Pengiriman::orderBy('no_kirim', 'Desc')->get();
        return view('pengiriman.index', compact('data'));
    }

    public function create()
    {
        $nomorAkhir = Pengiriman::orderBy('no_kirim', 'Desc')->first();
        $noInvoice = explode('-', $nomorAkhir->no_kirim);

        $bln = now()->month < 10 ? '0' . now()->month : now()->month; 
        $key = $bln . now()->year;

        $inv = $noInvoice[0].'-'. $key .'-'. ($noInvoice[2]+1); 

        $data = Toko::all();
        return view('pengiriman.create', compact('data', 'inv'));
    }

    public function store(Request $request)
    {
        $year = $request->created_at['year'];
        $month = $request->created_at['month'];
        $day = $request->created_at['day'];
        $tz = 'Asia/Jakarta';
        $date = Carbon::createFromDate($year, $month, $day, $tz);

        Pengiriman::insert([
            'toko_id' => $request->toko,
            'no_kirim' => $request->no_kirim,
            'volume' => $request->volume,
            'harga' => $request->harga,
            'total' => $request->harga * $request->volume,
            'created_at' => $date,
        ]);
        
        session()->flash('success', 'Data berhasil ditambahkan');
        return redirect()->route('jual.index');
    }

    public function destroy(Pengiriman $pengiriman)
    {
        $pengiriman->delete();
        session()->flash('success', 'Data Berhasil dihapus');
        return redirect()->route('jual.index');
    }

    public function edit(Pengiriman $pengiriman)
    {
        $date = new Carbon($pengiriman->created_at);
        $toko = Toko::all();
        return view('pengiriman.edit', compact('pengiriman', 'toko', 'date'));
    }

    public function update(Request $request, $id)
    {
        $pengiriman = Pengiriman::findOrFail($id);

        $year = $request->created_at['year'];
        $month = $request->created_at['month'];
        $day = $request->created_at['day'];
        $tz = 'Asia/Jakarta';
        $date = Carbon::createFromDate($year, $month, $day, $tz);

        $pengiriman->update([
            'no_kirim' => $request->no_kirim,
            'created_at' => $date,
            'updated_at' => now(),
            'toko_id' => $request->toko,
            'volume' => $request->volume,
            'harga' => $request->harga,
            'total' => $request->harga * $request->volume,
        ]);

        session()->flash('success', 'Data berhasil diubah');
        return redirect()->back();
    }
}
