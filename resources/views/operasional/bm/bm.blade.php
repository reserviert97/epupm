@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route('bongkarmuat.store') }}" method="post">
            @csrf
            
            <div class="card-header">
                <h3 class="card-title">Bongkar Muat</h3>
                <div class="card-options">
                    <a href="{{ route('operasional.index') }}" class="btn btn-secondary btn-sm"><i class="fe fe-arrow-left mr-1"></i>Kembali</a>
                    <button type="submit" class="btn btn-success btn-sm ml-2"><i class="fe fe-check mr-1"></i> Buat</button>
                </div>
            </div>

            <div class="card-body">
            
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Nomor</label>
                            <input type="text" class="form-control" value="{{ $inv }}" disabled>
                            <input type="hidden" value="{{ $inv }}" name="no_bm">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Tanggal</label>
                            <div class="row gutters-xs">
                                <div class="col-5">
                                <select name="created_at[month]" class="form-control custom-select" required>
                                    <option value="">Bulan</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                </div>
                                <div class="col-3">
                                <select name="created_at[day]" class="form-control custom-select" required>
                                    <option value="">Hari</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                </div>
                                <div class="col-4">
                                <select name="created_at[year]" class="form-control custom-select" required>
                                    <option value="">Tahun</option>
                                    <option value="2019">2019</option>
                                </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 col-sm-6">
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
                                <input type="text" class="form-control text-right" value="200" disabled>
                                <span class="input-group-append" id="basic-addon2">
                                    <span class="input-group-text"><i class="fe fe-at-sign mr-1"></i> Kg</span>
                                </span>
                            </div>
                        </div>
    
                    </div>

                </div>
                
            </div>

            <div class="card-footer">
            </div>

            </form>

        </div>
    </div>
</div>
@endsection
