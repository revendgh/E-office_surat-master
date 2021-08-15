@php
    $r = \Route::current()->getAction();
    $route = (isset($r['as'])) ? $r['as'] : '';
@endphp

<li class="nav-item mT-30">
    <a class="sidebar-link {{ Str::startsWith($route, AKADEMIK . '.dash') ? 'actived' : '' }}" href="{{ route(AKADEMIK . '.dash') }}">
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
      <a class="sidebar-link {{ Str::startsWith($route, AKADEMIK . '.surat.pengajuan') ? 'active' : '' }}" href="{{ route(AKADEMIK . '.surat.pengajuan') }}">Pengajuan</a>
      <a class="sidebar-link {{ Str::startsWith($route, AKADEMIK . '.surat.terverifikasi') ? 'active' : '' }}" href="{{ route(AKADEMIK . '.surat.terverifikasi') }}">Terverifikasi</a>
      <a class="sidebar-link {{ Str::startsWith($route, AKADEMIK . '.surat.diteruskan') ? 'active' : '' }}" href="{{ route(AKADEMIK . '.surat.diteruskan') }}">Diteruskan</a>
      <a class="sidebar-link {{ Str::startsWith($route, AKADEMIK . '.surat.ditolak') ? 'active' : '' }}" href="{{ route(AKADEMIK . '.surat.ditolak') }}">Ditolak</a>
      <a class="sidebar-link {{ Str::startsWith($route, AKADEMIK . '.surat.cetak') ? 'active' : '' }}" href="{{ route(AKADEMIK . '.surat.cetak') }}">Cetak</a>
      <a class="sidebar-link {{ Str::startsWith($route, AKADEMIK . '.surat.menunggu_persetujuan') ? 'active' : '' }}" href="{{ route(AKADEMIK . '.surat.menunggu_persetujuan') }}">Menunggu Persetujuan</a>
      <a class="sidebar-link {{ Str::startsWith($route, AKADEMIK . '.surat.disetujui') ? 'active' : '' }}" href="{{ route(AKADEMIK . '.surat.disetujui') }}">Disetujui</a>
      <a class="sidebar-link {{ Str::startsWith($route, AKADEMIK . '.surat.selesai') ? 'active' : '' }}" href="{{ route(AKADEMIK . '.surat.selesai') }}">Selesai</a>
    </li>               
  </ul>
</li>
