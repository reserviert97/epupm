@extends('layouts.app')

@section('title', $data->nama.' | Penjual')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-profile">
                <div class="card-header" style="background-image: url(/demo/photos/ilnur-kalimullin-218996-500.jpg);"></div>
                <div class="card-body text-center">
                  <img class="card-profile-img" src="/demo/faces/male/18.jpg">
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
                          <h4 class="m-0"><a href="javascript:void(0)">{{ $data->pembelian->sum('volume') }} <small>Kg</small></a></h4>
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
                          <h4 class="m-0"><a href="javascript:void(0)">{{ number_format($data->pembelian->sum('total')) }}</a></h4>
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
                          <h4 class="m-0"><a href="javascript:void(0)">{{ $data->pembelian->count() }}</a></h4>
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
                                <th>Harga</th>
                                <th class="w-1"></th>
                                <th class="text-center">Total</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->pembelian as $item)
                                    <tr>
                                        <td><span class="text-muted">{{ $item->no }}</span></td>
                                        <td>{{ $item->created_at->format('d-M-Y') }}</td>
                                        <td>{{ $item->volume }} Kg</td>
                                        <td>Rp. {{ number_format($item->harga) }}</td>
                                        <td class="pl-5 pr-0">Rp. </td>
                                        <td class="text-right pl-0 pr-5">{{ number_format($item->total) }}</td>
                                        <td>
                                            <a class="icon" href="javascript:void(0)">
                                                <i class="fe fe-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                

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
