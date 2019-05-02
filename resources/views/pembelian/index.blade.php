@extends('layouts.app')

@section('title', 'Daftar Pembelian')

@section('content')
<div class="container">
    @include('_include.alert')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pembelian</h3>
                <div class="card-options">
                    <a href="{{ route('beli.create') }}" class="btn btn-primary"><i class="fe fe-plus-circle mr-1"></i>Tambah</a>
                </div>
            </div>
                  
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th class="w-5">No.</th>
                            <th class="text-center">Tanggal</th>
                            <th class="w-1"></th>
                            <th class="">Penjual</th>
                            <td class="w-1"></td>
                            <th class="">Volume</th>
                            <th class="">Harga</th>
                            <th class="w-1"></th>
                            <th class="text-center w-5">Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item)
                            <tr>
                                <td><a href="{{ route('beli.edit', $item->id) }}" class="text-secondary">{{ $item->no }}</a></td>
                                <td class="text-center">{{ $item->created_at->format('d-M-Y') }}</td>
                                <td class="w-1 pr-0">
                                    <span class="ml-5 avatar">{{ substr($item->penjual->nama,0,1) }}</span>
                                </td>
                                <td>
                                    <a href="{{ route('penjual.show', $item->penjual_id) }}" class="text-dark">{{ $item->penjual->nama }}</a>
                                </td>
                                <td class="w-1 pr-0"><span class="ml-4 status-icon bg-primary"></span></td>
                                <td>{{ $item->volume }} Kg</td>
                                <td>
                                    <span class="text-left">Rp.</span> 
                                    <span class="text-right">{{ number_format($item->harga) }}</span>
                                </td>
                                <td><span class="text-left">Rp.</span></td>
                                <td class="text-right">
                                    <span class="text-right">{{ number_format($item->total) }}</span>
                                </td>
                                <td>
                                    <a class="icon" href="{{ route('beli.edit', $item->id) }}">
                                        <i class="fa fa-pencil-square"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
