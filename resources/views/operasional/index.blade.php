@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Invoices</h3>
                <div class="card-options">
                    <a href="{{ route('operasional.plastik') }}" class="btn btn-primary mr-1">Pembelian Plastik</a>
                    <a href="{{ route('operasional.transport') }}" class="btn btn-primary mr-1">Transport</a>
                    <a href="{{ route('operasional.giling') }}" class="btn btn-primary mr-1">Giling</a>
                    <a href="{{ route('operasional.bm') }}" class="btn btn-primary mr-1">Bongkar Muat</a>
                    <a href="{{ route('operasional.kemas') }}" class="btn btn-primary">Kemas</a>
                </div>
            </div>
                  
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th class="w-1">No.</th>
                            <th>Tanggal</th>
                            <th>Item</th>
                            <th>Harga</th>
                            <th>Volume</th>
                            <th>Total</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item)
                            <tr>
                                <td><span class="text-muted">001401</span></td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->item }}</td>
                                <td>Rp. {{ $item->harga }}</td>
                                <td>{{ $item->volume }} Kg</td>
                                <td>Rp. {{ $item->total }}</td>
                                <td>
                                    {{-- <form action="{{ route('jual.destroy', $item->id ) }}" method="post">
                                    @csrf @method('delete')
                                        <button class="btn btn-danger btn-sm mr-1">delete</button>
                                    
                                    <a class="icon" href="">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
