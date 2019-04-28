@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-header">
        <h1 class="page-title">Daftar Toko</h1>
        <div class="page-subtitle">Total : {{ count($data) }} Toko</div>

        <div class="page-options d-flex">
            <a href="{{ route('toko.create') }}" class="btn btn-secondary"><i class="fa fa-plus-square mr-2"></i>Tambah</a>
            <div class="input-icon ml-2">
                <span class="input-icon-addon">
                <i class="fe fe-search"></i>
                </span>
                <input type="text" class="form-control w-10" placeholder="Cari..">
            </div>
        </div>
    </div>

    @include('_include.alert')
    

    <div class="row row-cards">
        @foreach ($data as $item)
            
            <div class="col-12 col-lg-2 pt-5">

                <div class="card pt-3">
                    <div class="card-body p-3 text-center">
                    <div class="h3 m-0 mb-1"><i class="fa fa-university"></i></div>
                    <div class="h4 m-0">{{ $item->nama }}</div>
                        <div class="text-muted mb-4">{{ $item->alamat }}</div>
                        
                        <form action="{{ route('toko.destroy', $item->id ) }}" method="post">
                            <a href="{{ route('toko.show', $item->id) }}" class="btn btn-primary btn-sm text-light">Detail</a>
                            @csrf 
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm ml-2 text-light" onclick="return confirm('Anda Yakin ?')">Hapus</button>
                        </form>
                        
                    </div>
                </div>
            </div> 
        @endforeach
        

    </div>
</div>
@endsection
