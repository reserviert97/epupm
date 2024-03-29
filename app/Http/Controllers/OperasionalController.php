<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operasional;
use App\Transport;
use Carbon\Carbon;
use App\Sortir;
use App\BongkarMuat;
use App\Plastik;
use App\Giling;

class OperasionalController extends Controller
{
    public function index()
    {
        $data = Operasional::orderBy('created_at', 'Desc')->get();
        return view('operasional.index', compact('data'));
    }

    public function transport()
    {
        $inv = $this->generateInv(Transport::class, 'no_transport', 'TNR', '3000');
        return view('operasional.transport.transport', compact('inv'));
    }

    public function storeTransport(Request $request)
    {
        $date = $this->generateDate($request->created_at);

        $operasional = Operasional::create([
            'jenis_item' => 'Transport',
            'nomor' => $request->no_transport,
            'created_at' => $date,
            'updated_at' => now(),
        ]);

        Transport::insert([
            'harga' => 155 * $request->volume,
            'no_transport' => $request->no_transport,
            'volume' => $request->volume,
            'operasional_id' => $operasional->id,
            'created_at' => $date,
            'updated_at' => now()
        ]);
        
        session()->flash('success', 'Transaksi Transport berhasil ditambah');
        return redirect()->route('operasional.index');
    }

    public function editTransport(Transport $transport)
    {
        $date = new Carbon($transport->created_at);
        return view('operasional.transport.edit')->with(['data' => $transport, 'date' => $date]);
    }

    public function updateTransport(Transport $transport, Request $request)
    {
        $date = $this->generateDate($request->created_at);

        $transport->operasional->update([
            'created_at' => $date,
            'updated_at' => now(),
        ]);
        
        $transport->update([
            'harga' => 200 * $request->volume,
            'volume' => $request->volume,
            'created_at' => $date,
            'updated_at' => now()
        ]);

        session()->flash('success', 'Transaksi Transport berhasil diupdate');
        return redirect()->back();
    }

    public function destroyTransport(Transport $transport)
    {
        $transport->operasional->delete();
        $transport->delete();

        session()->flash('success', 'Transaksi Transport Berhasil dihapus');
        return redirect()->route('operasional.index');
    }

    public function sortir()
    {
        $inv = $this->generateInv(Sortir::class, 'no_sortir', 'STR', '4000');
        return view('operasional.sortir.sortir', compact('inv'));
    }

    public function editSortir(Sortir $sortir)
    {
        $date = new Carbon($sortir->created_at);
        return view('operasional.sortir.edit')->with(['data' => $sortir, 'date' => $date]);
    }

    public function updateSortir(Sortir $sortir, Request $request)
    {
        $date = $this->generateDate($request->created_at);

        $sortir->operasional->update([
            'created_at' => $date,
            'updated_at' => now(),
        ]);
        
        $sortir->update([
            'harga' => 200 * $request->volume,
            'volume' => $request->volume,
            'created_at' => $date,
            'updated_at' => now()
        ]);

        session()->flash('success', 'Data Sortir dan Pengemasan berhasil diupdate');
        return redirect()->back();
    }

    public function destroySortir(Sortir $sortir)
    {
        $sortir->operasional->delete();
        $sortir->delete();

        session()->flash('success', 'Data Sortir dan Pengemasan Berhasil dihapus');
        return redirect()->route('operasional.index');
    }

    public function storeSortir(Request $request)
    {
        $date = $this->generateDate($request->created_at);

        $operasional = Operasional::create([
            'jenis_item' => 'Sortir',
            'nomor' => $request->no_sortir,
            'created_at' => $date,
            'updated_at' => now(),
        ]);

        Sortir::insert([
            'harga' => 200 * $request->volume,
            'no_sortir' => $request->no_sortir,
            'volume' => $request->volume,
            'operasional_id' => $operasional->id,
            'created_at' => $date,
            'updated_at' => now()
        ]);
        
        session()->flash('success', 'Berhasil menambahkan transaksi Sortir');
        return redirect()->route('operasional.index');
        
    }

    public function bongkarMuat()
    {
        $inv = $this->generateInv(BongkarMuat::class, 'no_bm', 'STR', '5000');
        return view('operasional.bm.bm', compact('inv'));
    }

    public function storeBongkarMuat(Request $request)
    {
        $date = $this->generateDate($request->created_at);

        $operasional = Operasional::create([
            'jenis_item' => 'Bongkar Muat',
            'nomor' => $request->no_bm,
            'created_at' => $date,
            'updated_at' => now(),
        ]);

        BongkarMuat::insert([
            'harga' => 200 * $request->volume,
            'no_bm' => $request->no_bm,
            'volume' => $request->volume,
            'operasional_id' => $operasional->id,
            'created_at' => $date,
            'updated_at' => now()
        ]);

        session()->flash('success', 'Transaksi Bongkar Muat berhasil ditambahkan');
        return redirect()->route('operasional.index');
    }

    public function editBongkarMuat(BongkarMuat $bongkarMuat)
    {
        $date = new Carbon($bongkarMuat->created_at);
        return view('operasional.bm.edit')->with(['data' => $bongkarMuat, 'date' => $date]);
    }

    public function updateBongkarMuat(Request $request, BongkarMuat $bongkarMuat)
    {
        $date = $this->generateDate($request->created_at);

        $bongkarMuat->operasional->update([
            'created_at' => $date,
            'updated_at' => now(),
        ]);
        
        $bongkarMuat->update([
            'harga' => 200 * $request->volume,
            'volume' => $request->volume,
            'created_at' => $date,
            'updated_at' => now()
        ]);

        session()->flash('success', 'Data Transaksi Bongkar Muat berhasil diupdate');
        return redirect()->back();
    }

    public function destroyBongkarMuat(BongkarMuat $bongkarMuat)
    {
        $bongkarMuat->operasional->delete();
        $bongkarMuat->delete();

        session()->flash('success', 'Transkasi Bongkar Muat Berhasil dihapus');
        return redirect()->route('operasional.index');
    }

    public function plastik()
    {
        $inv = $this->generateInv(Plastik::class, 'no_plastik', 'PLS', '6000');
        return view('operasional.plastik.plastik', compact('inv'));
    }

    public function storePlastik(Request $request)
    {
        $date = $this->generateDate($request->created_at);

        $operasional = Operasional::create([
            'jenis_item' => 'Plastik',
            'nomor' => $request->no_plastik,
            'created_at' => $date,
            'updated_at' => now(),
        ]);

        Plastik::insert([
            'harga' => $request->harga,
            'no_plastik' => $request->no_plastik,
            'volume' => $request->volume,
            'total' => $request->harga * $request->volume,
            'jenis' => $request->jenis,
            'operasional_id' => $operasional->id,
            'created_at' => $date,
            'updated_at' => now()
        ]);

        session()->flash('success', 'Transaksi Pembelian Plastik berhasil ditambahkan');
        return redirect()->route('operasional.index');
    }

    public function editPlastik(Plastik $plastik)
    {
        $date = new Carbon($plastik->created_at);
        return view('operasional.plastik.edit')->with(['data' => $plastik, 'date' => $date]);
    }

    public function updatePlastik(Plastik $plastik, Request $request)
    {
        $date = $this->generateDate($request->created_at);

        $plastik->operasional->update([
            'created_at' => $date,
            'updated_at' => now(),
        ]);
        
        $plastik->update([
            'harga' => $request->harga,
            'volume' => $request->volume,
            'total' => $request->harga * $request->volume,
            'jenis' => $request->jenis,
            'created_at' => $date,
            'updated_at' => now()
        ]);

        session()->flash('success', 'Transaksi Pembelian Plastik berhasil diubah');
        return redirect()->back();
    }

    public function destroyPlastik(Plastik $plastik)
    {
        $plastik->operasional->delete();
        $plastik->delete();

        session()->flash('success', 'Data Pembelian Plastik Berhasil dihapus');
        return redirect()->route('operasional.index');
    }

    public function giling()
    {
        $inv = $this->generateInv(Giling::class, 'no_giling', 'GLG', '7000');
        return view('operasional.giling.giling', compact('inv'));
    }

    public function storeGiling(Request $request)
    {
        $date = $this->generateDate($request->created_at);

        $operasional = Operasional::create([
            'jenis_item' => 'Giling',
            'nomor' => $request->no_giling,
            'created_at' => $date,
            'updated_at' => now(),
        ]);

        Giling::insert([
            'no_giling' => $request->no_giling,
            'volume_gkg' => $request->volume_gkg,
            'volume_beras' => $request->volume_beras,
            'total' => 350 * $request->volume_beras,
            'rendemen' => ($request->volume_beras/$request->volume_gkg) * 100,
            'operasional_id' => $operasional->id,
            'created_at' => $date,
            'updated_at' => now()
        ]);

        session()->flash('success', 'Transaksi Penggilingan berhasil ditambahkan');
        return redirect()->route('operasional.index');
    }

    public function editGiling(Giling $giling)
    {
        $date = new Carbon($giling->created_at);
        return view('operasional.giling.edit')->with(['data'=> $giling, 'date' => $date]);
    }

    public function updateGiling(Request $request, Giling $giling)
    {
        $date = $this->generateDate($request->created_at);

        $giling->operasional->update([
            'created_at' => $date,
            'updated_at' => now(),
        ]);
        
        $giling->update([
            'created_at' => $date,
            'updated_at' => now(),
            'volume_gkg' => $request->volume_gkg,
            'volume_beras' => $request->volume_beras,
            'total' => 350 * $request->volume_beras,
            'rendemen' => ($request->volume_beras/$request->volume_gkg) * 100,
        ]);

        session()->flash('success', 'Data Penggilingan berhasil diupdate');
        return redirect()->back();
    }

    public function destroyGiling(Giling $giling)
    {
        $giling->operasional->delete();
        $giling->delete();

        session()->flash('success', 'Data Penggilingan Berhasil dihapus');
        return redirect()->route('operasional.index');
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
