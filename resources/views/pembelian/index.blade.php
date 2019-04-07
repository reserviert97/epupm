@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Invoices</h3>
                <div class="card-options">
                    <a href="{{ route('beli.create') }}" class="btn btn-primary">Pembelian Baru</a>
                </div>
            </div>
                  
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th class="w-1">No.</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Penjual</th>
                            <th>Volume</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item)
                            <tr>
                                <td><span class="text-muted">001401</span></td>
                                <td>{{ $item->created_at }}</td>
                                <td><a href="invoice.html" class="text-inherit">{{ $item->keterangan }}</a></td>
                                <td>{{ $item->penjual }}</td>
                                <td>{{ $item->volume }} Kg</td>
                                <td>{{ $item->satuan }}</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>Rp. {{ $item->total }}</td>
                                <td>
                                    <form action="{{ route('beli.destroy', $item->id ) }}" method="post">
                                    @csrf 
                                    @method('delete')
                                        <button class="btn btn-danger btn-sm mr-1">delete</button>
                                    </form>
                                    <a class="icon" href="{{ route('beli.edit', $item->id) }}">
                                        <i class="fe fe-edit"></i>
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
