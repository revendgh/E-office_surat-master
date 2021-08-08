@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, ARSIPARIS . '.dash') ? 'actived' : '' }}" href="{{ route(ARSIPARIS . '.dash') }}">
        <span class="icon-holder">
            <i class="c-black-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ARSIPARIS. '.masuk') ? 'actived' : '' }}" href="{{ route(ARSIPARIS . '.masuk.index') }}">
        <span class="icon-holder">
            <i class="c-green-500 ti-email"></i>
        </span>
        <span class="title">Surat Masuk</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, ARSIPARIS. '.agenda') ? 'actived' : '' }}" href="{{ route(ARSIPARIS . '.agenda.index') }}">
        <span class="icon-holder">
            <i class="c-purple-500 ti-book"></i>
        </span>
        <span class="title">Buku Agenda</span>
    </a>
</li>

