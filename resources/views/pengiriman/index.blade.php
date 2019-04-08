@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Invoices</h3>
                <div class="card-options">
                    <a href="{{ route('jual.create') }}" class="btn btn-primary">Pembelian Baru</a>
                </div>
            </div>
                  
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th class="w-1">No.</th>
                            <th>Tanggal</th>
                            <th>Toko</th>
                            <th>Volume</th>
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
                                <td>{{ $item->toko }}</td>
                                <td>{{ $item->volume }} Kg</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>Rp. {{ $item->total }}</td>
                                <td>
                                    <form action="{{ route('jual.destroy', $item->id ) }}" method="post">
                                    @csrf @method('delete')
                                        <button class="btn btn-danger btn-sm mr-1">delete</button>
                                    
                                    <a class="icon" href="">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                    </form>
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
