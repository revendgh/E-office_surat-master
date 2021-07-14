@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, MAHASISWA . '.dash') ? 'actived' : '' }}" href="{{ route(MAHASISWA . '.dash') }}">
        <span class="icon-holder">
            <i class="c-black-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, MAHASISWA . '.surat') ? 'actived' : '' }}" href="{{ route(MAHASISWA . '.surat.index') }}">
        <span class="icon-holder">
            <i class="c-green-500 ti-write"></i>
        </span>
        <span class="title">Buat Surat</span>
    </a>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, MAHASISWA . '.status') ? 'actived' : '' }}" href="{{ route(MAHASISWA . '.status.index') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-agenda"></i>
        </span>
        <span class="title">Status Surat</span>
    </a>
</li>
