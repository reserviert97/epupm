@extends('layouts.back')

@section('title', 'Tidak Ada')

@section('content')
 
<div class="page">
    <div class="page-single">
        <div class="container text-center">
            <div class="display-1 text-muted mb-5"><i class="si si-exclamation"></i> 404</div>
            <h1 class="h2 mb-3">Oops... Ada kesalahan</h1>
            <p class="h4 text-muted font-weight-normal mb-7">Maaf, halaman yang anda cari tidak ada&hellip;</p>
            <a class="btn btn-primary" href="javascript:history.back()">
              <i class="fe fe-arrow-left mr-2"></i>Go back
            </a>
        </div>
    </div>
</div>
   
@endsection

