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
      <a class="sidebar-link {{ Str::startsWith($route, WAREKTOR. '.masuk.index') ? 'actived' : '' }}" href="{{ route(WAREKTOR . '.masuk.index') }}">Menunggu Disposisi</a>
      <a class="sidebar-link {{ Str::startsWith($route, WAREKTOR. '.masuk.index') ? 'actived' : '' }}" href="{{ route(WAREKTOR . '.masuk.index') }}">Surat Masuk</a>
    </li>               
  </ul>
</li>