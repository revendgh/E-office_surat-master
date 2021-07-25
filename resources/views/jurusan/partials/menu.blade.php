@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, JURUSAN . '.dash') ? 'actived' : '' }}" href="{{ route(JURUSAN . '.dash') }}">
        <span class="icon-holder">
            <i class="c-black-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>

<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
        <i class="c-purple-500 ti-write"></i>
      </span>
    <span class="title">Surat</span>
    <span class="arrow">
        <i class="ti-angle-right"></i>
      </span>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a class="sidebar-link {{ Str::startsWith($route, JURUSAN . '.surat.pengajuan') ? 'active' : '' }}" href="{{ route(JURUSAN . '.surat.pengajuan') }}">Pengajuan</a>
      <a class="sidebar-link {{ Str::startsWith($route, JURUSAN . '.surat.terverifikasi') ? 'active' : '' }}" href="{{ route(JURUSAN . '.surat.terverifikasi') }}">Terverifikasi</a>
      <a class="sidebar-link {{ Str::startsWith($route, JURUSAN . '.surat.ditolak') ? 'active' : '' }}" href="{{ route(JURUSAN . '.surat.ditolak') }}">Ditolak</a>
      <a class="sidebar-link {{ Str::startsWith($route, JURUSAN . '.surat.cetak') ? 'active' : '' }}" href="{{ route(JURUSAN . '.surat.cetak') }}">Cetak</a>
    </li>               
  </ul>
</li>
