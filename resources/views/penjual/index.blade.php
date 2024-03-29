@extends('layouts.app')

@section('title', 'Daftar Penjual')

@section('content')

<div class="container">
    <div class="page-header">
        <h1 class="page-title">Daftar Penjual</h1>
        <div class="page-subtitle">Total : {{ count($data) }} Penjual</div>

        <div class="page-options d-flex">
            <a href="{{ route('penjual.create') }}" class="btn btn-secondary"><i class="fe fe-user-plus mr-2"></i>Tambah</a>
            <div class="input-icon ml-2">
                <span class="input-icon-addon">
                <i class="fe fe-search"></i>
                </span>
                <input type="text" class="form-control w-10" placeholder="Cari Penjual">
            </div>
        </div>
    </div>

    @include('_include.alert')
    

    <div class="row row-cards">
        @foreach ($data as $item)
            <div class="col-6 col-sm-4 col-lg-2 pt-5">
                <div class="card pt-3">
                    <div class="card-body pb-2 pt-2 text-center">
                    <span class="h1 avatar avatar-xl avatar-cyan">{{ substr($item->nama,0,1) }}</span>
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
