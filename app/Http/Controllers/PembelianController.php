<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Penjual;
use Carbon\Carbon;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pembelian::orderBy('id', 'Desc')->get();
       
        return view('pembelian.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nomorAkhir = Pembelian::orderBy('no', 'Desc')->first();
        $noInvoice = explode('-', $nomorAkhir->no);

        $bln = now()->month < 10 ? '0' . now()->month : now()->month; 
        $key = $bln . now()->year;

        $inv = $noInvoice[0].'-'. $key .'-'. ($noInvoice[2]+1); 
        
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
        $year = $request->created_at['year'];
        $month = $request->created_at['month'];
        $day = $request->created_at['day'];
        $tz = 'Asia/Jakarta';
        $date = Carbon::createFromDate($year, $month, $day, $tz);
        
        $pembelian = Pembelian::create([
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

        $year = $request->created_at['year'];
        $month = $request->created_at['month'];
        $day = $request->created_at['day'];
        $tz = 'Asia/Jakarta';
        $date = Carbon::createFromDate($year, $month, $day, $tz);

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
}
