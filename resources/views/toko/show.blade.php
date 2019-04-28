@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-lg-9">
            <div class="row row-cards">
                <div class="col-sm-4 col-lg-4">
                    <div class="card ">
                        <div class="card-body p-4">
                            <div class="row">
                            <div class="col-auto">
                                <div class="stamp stamp-md bg-blue">
                                <i class="fe fe-truck"></i>
                                </div>
                            </div>
                            <div class="col text-right">
                                <div class="small text-muted">Total Transaksi</div>
                                <div class="h4 m-0">50</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4">
                    <div class="card ">
                        <div class="card-body p-4">
                            <div class="row">
                            <div class="col-auto">
                                <div class="stamp stamp-md bg-green">
                                <i class="fe fe-dollar-sign"></i>
                                </div>
                            </div>
                            <div class="col text-right">
                                <div class="small text-muted">Total Uang</div>
                                <div class="h4 m-0">120.000.000</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-lg-4">
                    <div class="card ">
                        <div class="card-body p-4">
                            <div class="row">
                            <div class="col-auto">
                                <div class="stamp stamp-md bg-red">
                                <i class="fa fa-tree"></i>
                                </div>
                            </div>
                            <div class="col text-right">
                                <div class="small text-muted">Total Volume</div>
                                <div class="h4 m-0">5000 Kg</div>
                            </div>
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

        <div class="col-lg-3">
            <div class="card card-profile">
                <div class="card-body">
                    <div class="media mb-5">
                        <h1><i class="d-flex mt-3 mr-5 fa fa-university"></i></h1>
                        
                        <div class="media-body">
                        <h5>{{ $data->nama }}</h5>
                        <address class="text-muted small">
                            {{ $data->alamat }}, Losari<br>
                            Brebes - Jawa Tengah, 52255
                        </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="h6">Relationship</div>
                            <p>Client</p>
                        </div>
                        <div class="col-6">
                            <div class="h6">Model Bisnis</div>
                            <p>Warung</p>
                        </div>
                        
                        <div class="col-6">
                            <div class="h6">Telepon</div>
                            <p>0812-1239-2989</p>
                        </div>
                    </div>
                    <div class="h6">Description</div>
                    <p>Toko Beras Paling Laris di Losari</p>
                </div>

                <div class="card-footer text-right">
                    <button class="btn btn-secondary btn-sm">Edit</button>
                </div>
            </div>
        </div>
    

    </div>
</div>
@endsection
