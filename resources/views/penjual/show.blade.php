@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-profile">
                <div class="card-header" style="background-image: url(/demo/photos/eberhard-grossgasteiger-311213-500.jpg);"></div>
                <div class="card-body text-center">
                  <img class="card-profile-img" src="/demo/faces/male/16.jpg">
                  <h3 class="mb-3">{{ $data->nama }}</h3>
                  <p class="mb-4 text-muted">
                    {{ $data->alamat }}
                  </p>
                  <button class="btn btn-default btn-sm">
                    <span class="fe fe-edit"></span> Edit
                  </button>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="row row-cards">
                <div class="col-sm-4 col-lg-4">
                    <div class="card p-3">
                      <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-yellow mr-3">
                          <i class="fa fa-pagelines"></i>
                        </span>
                        <div>
                          <h4 class="m-0"><a href="javascript:void(0)">7000 <small>Kg</small></a></h4>
                          <small class="text-muted">Total Padi</small>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4">
                    <div class="card p-3">
                      <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-green mr-3">
                          <i class="fa fa-dollar"></i>
                        </span>
                        <div>
                          <h4 class="m-0"><a href="javascript:void(0)"> 12.000.000 </a></h4>
                          <small class="text-muted">Total Uang</small>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4">
                    <div class="card p-3">
                      <div class="d-flex align-items-center">
                        <span class="stamp stamp-md bg-blue mr-3">
                          <i class="fe fe-shopping-cart"></i>
                        </span>
                        <div>
                          <h4 class="m-0"><a href="javascript:void(0)">78</a></h4>
                          <small class="text-muted">Transaksi</small>
                        </div>
                      </div>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Transaksi Terakhir</h3>
                        </div>
                        <div class="table-responsive">
                          <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                              <tr>
                                <th class="w-1">No.</th>
                                <th>Tanggal</th>
                                <th>Volume</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Total</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="text-muted">001401</span></td>
                                    <td>29 April 2019</td>
                                    <td>900 Kg</td>
                                    <td>GKG</td>
                                    <td>Rp. 5000</td>
                                    <td>Rp. 4.500.000</td>
                                    <td>
                                        <a class="icon" href="javascript:void(0)">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><span class="text-muted">001401</span></td>
                                    <td>29 April 2019</td>
                                    <td>900 Kg</td>
                                    <td>GKG</td>
                                    <td>Rp. 5000</td>
                                    <td>Rp. 4.500.000</td>
                                    <td>
                                        <a class="icon" href="javascript:void(0)">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><span class="text-muted">001401</span></td>
                                    <td>29 April 2019</td>
                                    <td>900 Kg</td>
                                    <td>GKG</td>
                                    <td>Rp. 5000</td>
                                    <td>Rp. 4.500.000</td>
                                    <td>
                                        <a class="icon" href="javascript:void(0)">
                                            <i class="fe fe-edit"></i>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
