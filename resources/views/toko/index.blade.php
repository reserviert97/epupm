@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Penjual</h3>
                <div class="card-options">
                    <a href="{{ route('toko.create') }}" class="btn btn-primary">Tambah Toko</a>
                </div>
            </div>
                  
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item)
                            <tr>
                                <td class="text-center"><span class="text-muted">{{ $item->id }}</span></td>
                                <td><a href="invoice.html" class="text-inherit">{{ $item->nama }}</a></td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <form action="{{ route('toko.destroy', $item->id ) }}" method="post">
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
