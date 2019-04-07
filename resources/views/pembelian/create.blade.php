@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambahankan Pembelian Baru</h3>
            </div>

            <div class="card-body">
            <form action="{{ route('beli.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label class="form-label">Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" data-mask="00/00/0000" data-mask-clearifnotmatch="true"
                        placeholder="00/00/0000" autocomplete="off" maxlength="10">
                </div>
                <div class="form-group">
                    <label class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                </div>
                <div class="form-group">
                    <label class="form-label">Penjual</label>
                    <input type="text" name="penjual" class="form-control" placeholder="Nama Penjual">
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
                    <div class="form-label">Satuan</div>
                    <div class="custom-switches-stacked">
                        <label class="custom-switch">
                            <input type="radio" name="satuan" value="GKG" class="custom-switch-input" checked>
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">GKG</span>
                        </label>
                        <label class="custom-switch">
                            <input type="radio" name="satuan" value="GKP" class="custom-switch-input">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">GKP</span>
                        </label>
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
