@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, WAREKTOR . '.dash') ? 'actived' : '' }}" href="{{ route(WAREKTOR . '.dash') }}">
        <span class="icon-holder">
            <i class="c-black-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <hr class="rounded" style="border-top: 3px solid #89CFF0; border-radius: 5px;">
    <h4 class="pl-4">E-OFFICE</h4>
</li>
<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
        <i class="c-green-500 ti-email"></i>
      </span>
    <span class="title">Surat Masuk</span>
    <span class="arrow">
        <i class="ti-angle-right"></i>
      </span>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a class="sidebar-link {{ Str::startsWith($route, WAREKTOR . '.masuk.index') ? 'actived' : '' }}" href="{{ route(WAREKTOR . '.masuk.index') }}">Menunggu Disposisi</a>
      <a class="sidebar-link {{ Str::startsWith($route, WAREKTOR . '.masuk.index') ? 'actived' : '' }}" href="{{ route(WAREKTOR . '.masuk.index') }}">Surat Masuk</a>
    </li>               
  </ul>
</li>
<li class="nav-item">
    <a class="sidebar-link {{ Str::startsWith($route, WAREKTOR. '.keluar') ? 'actived' : '' }}" href="{{ route(WAREKTOR . '.keluar.index') }}">
        <span class="icon-holder">
            <i class="c-red-500 ti-files"></i>
        </span>
        <span class="title">Surat Keluar</span>
    </a>
</li>
@if(Auth::user()->wakil_rektor->jabatan == "Wakil Rektor Akademik")
<li class="nav-item">
    <hr class="rounded" style="border-top: 3px solid #89CFF0; border-radius: 5px;">
    <h4 class="pl-4">E-SURAT</h4>
</li>
<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
        <i class="c-purple-500 ti-notepad"></i>
      </span>
    <span class="title">Surat Akademik</span>
    <span class="arrow">
        <i class="ti-angle-right"></i>
      </span>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a class="sidebar-link {{ Str::startsWith($route, WAREKTOR . '.surat.index') ? 'actived' : '' }}" href="{{ route(WAREKTOR . '.surat.index') }}">Menunggu Persetujuan</a>
      <a class="sidebar-link {{ Str::startsWith($route, WAREKTOR . '.surat.disetujui') ? 'actived' : '' }}" href="{{ route(WAREKTOR . '.surat.disetujui') }}">Disetujui</a>
    </li>               
  </ul>
</li>
@endif