@extends('layouts.app')

@section('title', 'Daftar Operasional')

@section('content')
<div class="container">
    @include('_include.alert')
    <div class="page-header">
        <h1 class="page-title">Operasional</h1>

        <div class="page-options d-flex">
            <button data-toggle="dropdown" type="button" class="btn btn-secondary dropdown-toggle" aria-expanded="false">
                <i class="fe fe-plus-square mr-2"></i>
                <span class="mr-1">Tambah</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(311px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="{{ route('plastik.create') }}">Pembelian Plastik</a>
                <a class="dropdown-item" href="{{ route('transport.create') }}">Transport</a>
                <a class="dropdown-item" href="{{ route('giling.create') }}">Giling</a>
                <a class="dropdown-item" href="{{ route('bongkarmuat.create') }}">Bongkar Muat</a>
                <a class="dropdown-item" href="{{ route('sortir.create') }}">Sortir & Kemas</a>
            </div>
            
            <div class="input-icon ml-2">
                <span class="input-icon-addon">
                <i class="fe fe-search"></i>
                </span>
                <input type="text" class="form-control w-10" placeholder="Cari...">
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th class="w-1">No.</th>
                            <th>Tanggal</th>
                            <th>Item</th>
                            <th class="w-1 text-right pr-0">Volume</th>
                            <th class="w-1"></th>
                            <th class="w-1"></th>
                            <th class="text-center">Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item)
                            <tr>
                                <td><span class="text-muted">{{ $item->nomor }}</span></td>
                                <td>{{ $item->created_at->format('d-M-Y') }}</td>
                                <td>{{ $item->jenis_item }}</td>
                                
                                @if ($item->jenis_item == 'Giling')
                                    <td class="text-right">{{ $item->giling->volume_gkg }}</td>
                                    <td class="pl-0">Kg</td>
                                    <td class=""><span class="ml-5">Rp. </span></td>
                                    <td class="text-right">{{ number_format($item->giling->total) }}</td>
                                    <td>
                                        <a class="icon" href="{{ route('giling.edit', $item->giling->id) }}">
                                            <i class="fe fe-chevrons-left"></i>
                                        </a>
                                    </td>

                                @elseif ($item->jenis_item == 'Plastik')
                                    <td class="text-right">{{ $item->plastik->volume }}</td>
                                    <td class="pl-0">Buah</td>
                                    <td class=""><span class="ml-5">Rp. </span></td>
                                    <td class="text-right">{{ number_format($item->plastik->total) }}</td>
                                    <td>
                                        <a class="icon" href="{{ route('plastik.edit', $item->plastik->id) }}">
                                            <i class="fe fe-chevrons-left"></i>
                                        </a>
                                    </td>

                                @elseif ($item->jenis_item == 'Bongkar Muat')
                                    <td class="text-right">{{ $item->bongkarMuat->volume }}</td>
                                    <td class="pl-0">Kg</td>
                                    <td class=""><span class="ml-5">Rp. </span></td>
                                    <td class="text-right">{{ number_format($item->bongkarMuat->harga) }}</td>
                                    <td>
                                        <a class="icon" href="{{ route('bongkarmuat.edit', $item->bongkarMuat->id) }}">
                                            <i class="fe fe-chevrons-left"></i>
                                        </a>
                                    </td>
                                
                                @elseif ($item->jenis_item == 'Sortir')
                                    <td class="text-right">{{ $item->sortir->volume }}</td>
                                    <td class="pl-0">Kg</td>
                                    <td class=""><span class="ml-5">Rp. </span></td>
                                    <td class="text-right">{{number_format($item->sortir->harga) }}</td>
                                    <td>
                                        <a class="icon" href="{{ route('sortir.edit', $item->sortir->id) }}">
                                            <i class="fe fe-chevrons-left"></i>
                                        </a>
                                    </td>

                                @elseif ($item->jenis_item == 'Transport')
                                    <td class="text-right">{{ $item->transport->volume }}</td>
                                    <td class="pl-0">Kg</td>
                                    <td class=""><span class="ml-5">Rp. </span></td>
                                    <td class="text-right">{{ number_format($item->transport->harga) }}</td>
                                    <td>
                                        <a class="icon" href="{{ route('transport.edit', $item->transport->id) }}">
                                            <i class="fe fe-chevrons-left"></i>
                                        </a>
                                    </td>

                                @endif

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
