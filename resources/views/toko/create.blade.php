@extends('layouts.app')

@section('title', 'Tambah Toko')

@section('content')
<div class="container">
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Toko Baru</h3>
            </div>

            <div class="card-body">
            <form action="{{ route('toko.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                </div>
            </div>

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

            </form>

        </div>
    </div>
</div>
@endsection
