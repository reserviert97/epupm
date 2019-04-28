@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible">
        <button data-dismiss="alert" class="close"></button>
        <i class="fe fe-check mr-2" aria-hidden="true"></i> {{ session('success') }}
    </div>
@endif