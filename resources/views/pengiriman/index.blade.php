@extends('layouts.app')

@section('content')
<div class="container">
    @include('_include.alert')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pengiriman</h3>
                <div class="card-options">
                    <a href="{{ route('jual.create') }}" class="btn btn-primary"><i class="fa fa-plus mr-2"></i>Baru</a>
                </div>
            </div>
                  
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th class="w-1">No.</th>
                            <th class="text-center">Tanggal</th>
                            <th>Toko</th>
                            <th>Volume</th>
                            <th>Harga</th>
                            <th class="w-1"></th>
                            <th class="text-center">Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item)
                            <tr>
                                <td><a href="{{ route('jual.edit', $item->id) }}" class="text-secondary">{{ $item->no_kirim }}</a></td>
                                <td class="text-center">{{ $item->created_at->format('d-M-Y') }}</td>
                                
                                <td>
                                    <a href="{{ route('toko.show', $item->toko_id) }}" class="text-dark">{{ $item->toko->nama }}</a>
                                </td>
                                <td>{{ $item->volume }} Kg</td>
                                <td>
                                    <span class="text-left">Rp.</span> 
                                    <span class="text-right">{{ number_format($item->harga) }}</span>
                                </td>
                                <td class="pl-5 pr-0">Rp.</td>
                                <td class="text-right">
                                    <span class="text-right">{{ number_format($item->total) }}</span>
                                </td>
                                <td>
                                    <a class="icon text-success" href="{{ route('jual.edit', $item->id) }}">
                                        <i class="fe fe-corner-down-left"></i>
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
