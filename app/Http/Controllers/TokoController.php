<?php

namespace App\Http\Controllers;

use App\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Toko::all();
        return view('toko.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('toko.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Toko::insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);
        return redirect()->route('toko.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(Toko $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(Toko $toko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toko $toko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toko $toko)
    {
        $toko->delete();
        return redirect()->route('toko.index');
    }
}
