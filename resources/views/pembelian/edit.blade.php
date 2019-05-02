@extends('layouts.app')

@section('title', 'Edit #'.$data->no )

@section('content')
<div class="container">
    @include('_include.alert')
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route('beli.update', $data->id) }}" method="post">
            @csrf
            @method('put')
            <div class="card-header">
                <h3 class="card-title">Pembelian Padi</h3>
                <div class="card-options">
                    <a href="{{ route('beli.index') }}" class="btn btn-secondary btn-sm"><i class="fe fe-arrow-left mr-1"></i>Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm ml-2"><i class="fe fe-check mr-1"></i> simpan</button>
                </div>
            </div>

            <div class="card-body">
            
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Nomor</label>
                            <input type="text" class="form-control" value="{{ $data->no }}" disabled>
                            <input type="hidden" value="{{ $data->no }}" name="no">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Tanggal</label>
                            <div class="row gutters-xs">
                                <div class="col-5">
                                <select name="created_at[month]" class="form-control custom-select">
                                    <option>Bulan</option>
                                    <option value="1" {{ $date->month == 1 ? 'selected' : '' }}>January</option>
                                    <option value="2" {{ $date->month == 2 ? 'selected' : '' }}>February</option>
                                    <option value="3" {{ $date->month == 3 ? 'selected' : '' }}>March</option>
                                    <option value="4" {{ $date->month == 4 ? 'selected' : '' }}>April</option>
                                    <option value="5" {{ $date->month == 5 ? 'selected' : '' }}>May</option>
                                    <option value="6" {{ $date->month == 6 ? 'selected' : '' }}>June</option>
                                    <option value="7" {{ $date->month == 7 ? 'selected' : '' }}>July</option>
                                    <option value="8" {{ $date->month == 8 ? 'selected' : '' }}>August</option>
                                    <option value="9" {{ $date->month == 9 ? 'selected' : '' }}>September</option>
                                    <option value="10" {{ $date->month == 10 ? 'selected' : '' }}>October</option>
                                    <option value="11" {{ $date->month == 11 ? 'selected' : '' }}>November</option>
                                    <option value="12" {{ $date->month == 12 ? 'selected' : '' }}>December</option>
                                </select>
                                </div>
                                <div class="col-3">
                                <select name="created_at[day]" class="form-control custom-select">
                                    <option value="">Hari</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}" {{ $i == $date->day ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                    
                                </select>
                                </div>
                                <div class="col-4">
                                <select name="created_at[year]" class="form-control custom-select">
                                    <option value="">Tahun</option>
                                    <option value="2019" {{ $date->year == 2019 ? 'selected' : '' }}>2019</option>
                                </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Penjual</label>
                            <select class="custom-select" name="penjual">
                                @foreach ($penjual as $item)
                                    <option value="{{ $item->id }}" {{ $data->penjual_id == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Volume</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="volume" aria-describedby="basic-addon2" value="{{ $data->volume }}">
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
                                <input type="number" class="form-control text-right" name="harga" value="{{ $data->harga }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-label">Satuan</div>
                            <div class="custom-switches-stacked">
                                <label class="custom-switch">
                                    <input type="radio" name="satuan" value="GKG" class="custom-switch-input" {{ $data->satuan == 'GKG' ? 'checked' : '' }}>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">GKG</span>
                                </label>
                                <label class="custom-switch">
                                    <input type="radio" name="satuan" value="GKP" class="custom-switch-input" {{ $data->satuan == 'GKP' ? 'checked' : '' }}>
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">GKP</span>
                                </label>
                            </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </span>
                                <input type="text" class="form-control text-right" value="{{ number_format($data->total) }}" disabled>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
            </form>
            <div class="card-footer text-right">
                <form action="{{ route('beli.destroy', $data->id ) }}" method="post">
                    @csrf @method('delete')
                    <button class="btn btn-danger btn-sm mr-1"><i class="fe fe-trash mr-1" onclick="return confirm('Anda Yakin ?')"></i> delete</button>
                </form>
            </div>

            

        </div>
    </div>
</div>
@endsection
