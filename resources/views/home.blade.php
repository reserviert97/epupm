@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
            Dashboard
        </h1>
    </div>
    <div class="row row-cards row-deck">
        <div class="col-lg-6">
            <div class="card card-aside">
                <a href="#" class="card-aside-column"
                    style="background-image: url(./demo/photos/david-marcu-114194-500.jpg)"></a>
                <div class="card-body d-flex flex-column">
                    <h4><a href="#">Selamat Datang, {{ Auth::user()->name }}</a></h4>
                    <div class="text-muted">Sistem Manajemen Keuangan untuk program Pengembangan Usaha Pangan
                        Masyarakat.</div>
                    <div class="d-flex align-items-center mt-auto">

                        <div class="ml-auto text-muted">
                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
                                    class="fe fe-heart mr-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card p-2">
                        <div class="card-body text-center">
                            <div class="h5">Total Pengiriman</div>
                            <div class="h1 mb-4">{{ number_format($totalBeras) }} Kg</div>
                            <div class="progress progress-sm">
                                <div class="progress-bar {{ $warna }}" style="width: {{ $persenPadi }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card p-2">
                        <div class="card-body text-center">
                            <div class="h5">Dana Operasional</div>
                            <div class="h1 mb-4">Rp. {{ number_format($operasional) }}</div>
                            <div class="progress progress-sm">
                                <div class="progress-bar {{ $warnaOp }}" style="width: {{ $persenOp }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Laporan Keuangan
                    </h3>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0">
                                        Dana Operasional
                                    </div>
                                    <span class="small text-muted">Sisa Dana Operasional</span>
                                </div>
                                <div class="col text-right">
                                    <span class="h4 text-primary font-weight-bold">{{ number_format($sisaOperasional) }}</span>
                                </div>
                            </div>
                        </li>
                        <li class="mt-4">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0">
                                        Dana Modal
                                    </div>
                                    <span class="small text-muted">Total Penggunaan Dana Modal</span>
                                </div>
                                <div class="col text-right">
                                    <span class="h4 text-info font-weight-bold">{{ number_format($totalModal) }}</span>
                                </div>
                            </div>
                        </li>
                        <li class="mt-4">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0">
                                        Piutang
                                    </div>
                                    <span class="small text-muted">Total Pengiriman</span>
                                </div>
                                <div class="col text-right">
                                    <span class="h4 text-warning font-weight-bold">{{ number_format($hasilKirim) }}</span>
                                </div>
                            </div>
                        </li>
                        <li class="mt-4">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0">
                                        Sisa Saldo
                                    </div>
                                    <span class="small text-muted">Sisa Saldo di Rekening</span>
                                </div>
                                <div class="col text-right">
                                    <span class="h4 text-danger font-weight-bold">{{ number_format($saldo) }}</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Statistik
                    </h3>
                </div>
                <table class="table card-table">
                    <tbody>
                        <tr>
                            <th>
                                Keterangan
                            </th>
                            <th class="text-right">
                                Jumlah
                            </th>
                        </tr>
                        <tr>
                            <td class="text-muted">
                                Pembelian Padi (GKG)
                            </td>
                            <td class="text-right">
                                {{ number_format($totalPadi) }} Kg
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">
                                Stok Padi
                            </td>
                            <td class="text-right">
                                {{ $stokPadi }} Kg
                            </td>
                        </tr>

                        <tr>
                            <td class="text-muted">
                                Stok Beras
                            </td>
                            <td class="text-right">
                                {{ $stokBeras }} Kg
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-footer">
                    <div class="text-right">
                        <button type="button" class="btn btn-primary">
                            <i class="mdi mdi-export mr-2"></i>Export data
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
