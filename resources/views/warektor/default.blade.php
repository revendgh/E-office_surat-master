<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts.partials.head')
<style type="text/css">
    .card-header .fa {
      transition: .3s transform ease-in-out;
    }
    .card-header .collapsed .fa {
      transform: rotate(90deg);
    }
</style>
@yield('css')
<link rel="stylesheet" type="text/css" href="{{ asset('datetimepicker/jquery.datetimepicker.css') }}" >
<body class="app">

    @include('warektor.partials.spinner')

    <div>
        <!-- #Left Sidebar ==================== -->
        @include('warektor.partials.sidebar')

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('warektor.partials.topbar')

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <div class="container-fluid">

                        <h4 class="c-grey-900 mT-10 mB-30">@yield('page-header')</h4>

                        @include('warektor.partials.messages')
                        @yield('content')

                    </div>
                </div>
            </main>

            <!-- ### $App Screen Footer ### -->
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                <span>Copyright © {{ date('Y') }} Designed by
                    <a href="https://colorlib.com" target='_blank' title="Colorlib">Colorlib</a>. All rights
                    reserved.</span>
            </footer>
        </div>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('datetimepicker/jquery.js') }}"></script>
    <script src="{{ asset('datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
    @yield('script')

    <!-- Global js content -->

    <!-- End of global js content-->

    <!-- Specific js content placeholder -->
    @stack('js')
    <!-- End of specific js content placeholder -->

</body>

</html>