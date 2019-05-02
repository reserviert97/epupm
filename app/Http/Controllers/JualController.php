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
        $inv = $this->generateInv(Pengiriman::class, 'no_kirim', 'KRM', '2000');
        $data = Toko::all();
        return view('pengiriman.create', compact('data', 'inv'));
    }

    public function store(Request $request)
    {
        $date = $this->generateDate($request->created_at);

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

        $date = $this->generateDate($request->created_at);

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

    public function generateInv($model, $kolom, $kode, $awal)
    {
        $nomorAkhir = $model::orderBy($kolom, 'Desc')->first();

        $bln = now()->month < 10 ? '0' . now()->month : now()->month; 
        $key = $bln . now()->year;

        if ($nomorAkhir == null) {
            $noInvoice = explode('-', $kode.'-'.$key.'-'.$awal);
        }else {
            $noInvoice = explode('-', $nomorAkhir->$kolom);
        }

        $inv = $noInvoice[0].'-'. $key .'-'. ($noInvoice[2]+1);
        
        return $inv;
    }

    public function generateDate($data)
    {
        $date = Carbon::createFromDate($data['year'], $data['month'], $data['day'], 'Asia/Jakarta');
        return $date;
    }
}
