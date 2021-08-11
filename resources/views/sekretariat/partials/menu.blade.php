@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, SEKRETARIAT. '.dash') ? 'actived' : '' }}" href="{{ route(SEKRETARIAT . '.dash') }}">
        <span class="icon-holder">
            <i class="c-black-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, SEKRETARIAT. '.masuk') ? 'actived' : '' }}" href="{{ route(SEKRETARIAT . '.masuk.index') }}">
        <span class="icon-holder">
            <i class="c-green-500 ti-email"></i>
        </span>
        <span class="title">Surat Masuk</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, SEKRETARIAT. '.keluar') ? 'actived' : '' }}" href="{{ route(SEKRETARIAT . '.keluar.index') }}">
        <span class="icon-holder">
            <i class="c-red-500 ti-files"></i>
        </span>
        <span class="title">Surat Keluar</span>
    </a>
</li>