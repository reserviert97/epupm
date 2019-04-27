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
                                <td>{{ $item->jenis_item }}</td>
                                
                                @if ($item->jenis_item == 'Giling')
                                    <td>{{ $item->giling->volume_gkg }} Kg</td>
                                    <td>Rp. {{ $item->giling->total }}</td>

                                @elseif ($item->jenis_item == 'Plastik')
                                    <td>{{ $item->plastik->volume }} Kg</td>
                                    <td>Rp. {{ $item->plastik->harga }}</td>

                                @elseif ($item->jenis_item == 'Bongkar Muat')
                                    <td>{{ $item->bongkarMuat->volume }} Kg</td>
                                    <td>Rp. {{ $item->bongkarMuat->harga }}</td>
                                
                                @elseif ($item->jenis_item == 'Sortir')
                                    <td>{{ $item->sortir->volume }} Kg</td>
                                    <td>Rp. {{ $item->sortir->harga }}</td>

                                @elseif ($item->jenis_item == 'Transport')
                                    <td>{{ $item->transport->volume }} Kg</td>
                                    <td>Rp. {{ $item->transport->harga }}</td>

                                @endif

                                
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
