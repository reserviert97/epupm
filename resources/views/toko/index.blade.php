@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-header">
        <h1 class="page-title">Daftar Toko</h1>
        <div class="page-subtitle">Total : 3 Toko</div>

        <div class="page-options d-flex">
            <a href="{{ route('toko.create') }}" class="btn btn-success"><i class="fa fa-plus-square mr-2"></i>Tambah</a>
            <div class="input-icon ml-2">
                <span class="input-icon-addon">
                <i class="fe fe-search"></i>
                </span>
                <input type="text" class="form-control w-10" placeholder="Cari Penjual">
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <button data-dismiss="alert" class="close"></button>
            <i class="fe fe-check mr-2" aria-hidden="true"></i> {{ session('success') }}
        </div>
    @endif
    

    <div class="row row-cards">
        @foreach ($data as $item)
            <div class="col-6 col-sm-4 col-lg-2 pt-5">
                <div class="card pt-3">
                    <div class="card-body p-3 text-center">
                    <div class="h4 m-0">{{ $item->nama }}</div>
                        <div class="text-muted mb-4">{{ $item->alamat }}</div>
                        
                        <form action="{{ route('penjual.destroy', $item->id ) }}" method="post">
                            <a href="{{ route('penjual.show', $item->id) }}" class="btn btn-icon btn-primary"><i class="fa fa-folder-open"></i></a>
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-icon btn-primary btn-danger" onclick="return confirm('Anda Yakin ?')"><i class="fe fe-trash"></i></button>
                        </form>
                        
                    </div>
                </div>
            </div>
        @endforeach
        

    </div>
</div>
@endsection
