<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="{{ route('home') }}">
                <span class="h1">e-PUPM</span><br>
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span class="avatar avatar-cyan">{{ substr(Auth::user()->name, 0, 1) }}
                            <span class="avatar-status bg-green"></span>
                        </span>
                        
                        <span class="ml-2 d-none d-lg-block">
                            <span class="text-default">{{ Auth::user()->name }}</span>
                            <small class="text-muted d-block mt-1">Administrator</small>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-settings"></i> Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-clipboard"></i> Laporan
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="dropdown-icon fe fe-log-out"></i> Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        
                    </div>
                </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse"
                data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>
<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ Nav::isRoute('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('beli.index') }}" class="nav-link {{ Nav::hasSegment('beli') }}">Pembelian</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('operasional.index') }}" class="nav-link {{ Nav::hasSegment('operasional') }}">Operasional</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('jual.index') }}" class="nav-link {{ Nav::hasSegment('kirim') }}">Pengiriman</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('penjual.index') }}" class="nav-link {{ Nav::hasSegment('penjual') }}">Penjual</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('toko.index') }}" class="nav-link {{ Nav::hasSegment('toko') }}">Toko</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
