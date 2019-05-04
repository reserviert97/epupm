<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Penjual;
use Carbon\Carbon;
use Faker\Factory as Faker;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pembelian::orderBy('created_at', 'Desc')->get();
        return view('pembelian.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inv = $this->generateInv(Pembelian::class, 'no', 'PMB', '1000');
        $penjual = Penjual::all();
        return view('pembelian.create', compact('penjual', 'inv'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $this->generateDate($request->created_at);
        Pembelian::create([
            'no' => $request->no,
            'penjual_id' => $request->penjual,
            'volume' => $request->volume,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'total' => $request->harga * $request->volume,
            'created_at' => $date,
        ]);
        session()->flash('success', 'Data berhasil dibuat');
        return redirect()->route('beli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelian $beli)
    {
        $date = new Carbon($beli->created_at);
        $penjual = Penjual::all();
        return view('pembelian.edit', compact(['penjual', 'date']))->withData($beli);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pembelian = Pembelian::findOrFail($id);

        $date = $this->generateDate($request->created_at);

        $pembelian->update([
            'no' => $request->no,
            'created_at' => $date,
            'updated_at' => now(),
            'penjual_id' => $request->penjual,
            'volume' => $request->volume,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'total' => $request->harga * $request->volume,
        ]);
        session()->flash('success', 'Data berhasil diubah');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('beli.index');
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
