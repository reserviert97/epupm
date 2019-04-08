@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambahankan Pembelian Baru</h3>
            </div>

            <div class="card-body">
            <form action="{{ route('jual.store') }}" method="post">
            @csrf
                
                <div class="form-group">
                    <label class="form-label">Toko</label>
                    <input type="text" name="toko" class="form-control" placeholder="Toko">
                </div>

                <div class="form-group">
                    <label class="form-label">Volume</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="volume" aria-describedby="basic-addon2">
                        <span class="input-group-append" id="basic-addon2">
                        <span class="input-group-text">Kg</span>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Harga</label>
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </span>
                        <input type="number" class="form-control text-right" name="harga">
                        <span class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </span>
                    </div>
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
