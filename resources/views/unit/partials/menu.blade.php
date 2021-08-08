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
      <a class="sidebar-link {{ Str::startsWith($route, UNIT. '.masuk.index') ? 'actived' : '' }}" href="{{ route(UNIT . '.masuk.index') }}">Buat Surat</a>
      <a class="sidebar-link {{ Str::startsWith($route, UNIT. '.masuk.index') ? 'actived' : '' }}" href="{{ route(UNIT . '.masuk.index') }}">Surat Unit</a>
    </li>               
  </ul>
</li>
