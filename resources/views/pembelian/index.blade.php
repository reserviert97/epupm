@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Invoices</h3>
              </div>
              <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                  <thead>
                    <tr>
                      <th class="w-1">No.</th>
                      <th>Tanggal</th>
                      <th>Keterangan</th>
                      <th>Penjual</th>
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
                      <td>15 Dec 2017</td>
                      <td><a href="invoice.html" class="text-inherit">Pembelian</a></td>
                      <td>Abdul Syukur</td>
                      <td>5000 Kg</td>
                      <td>GKG</td>
                      <td>Rp. 12.000.087</td>
                      <td>Rp. 70.000.000</td>
                      
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
@endsection