@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, UNIT. '.dash') ? 'actived' : '' }}" href="{{ route(UNIT . '.dash') }}">
        <span class="icon-holder">
            <i class="c-black-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, UNIT. '.masuk') ? 'actived' : '' }}" href="{{ route(UNIT . '.masuk.index') }}">
        <span class="icon-holder">
            <i class="c-green-500 ti-email"></i>
        </span>
        <span class="title">Surat Masuk</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, UNIT. '.keluar') ? 'actived' : '' }}" href="{{ route(UNIT . '.keluar.index') }}">
        <span class="icon-holder">
            <i class="c-red-500 ti-files"></i>
        </span>
        <span class="title">Surat Keluar</span>
    </a>
</li>

