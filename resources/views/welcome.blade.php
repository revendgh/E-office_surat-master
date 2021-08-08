<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partials.head')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Office</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <header class="header-area header-sticky static">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="#" class="logo-itk" >
                                <img src="{{ asset('images/logo-itk.png') }}"  width="86px" alt="" style="margin-top: 8px;" />
                            </a>
                            @if (Route::has('login'))
                                <ul class="nav">
                                    <li>
                                        <a class="js-scroll-trigger" href="#kontak" class="tentang"> <b>Kontak E-Office</b></a>
                                    </li>
                                    <li>
                                        @auth
                                        @switch(auth()->user()->role)
                                            @case(100)
                                                <a href="{{ route(ADMIN . '.dash') }}" class="text-sm text-gray-700 underline">Home</a>
                                                @break
                                            @case(1)
                                                <a href="{{ route(MAHASISWA . '.dash') }}" class="text-sm text-gray-700 underline">Home</a>
                                                @break
                                            @case(10)
                                                <a href="{{ route(AKADEMIK. '.dash') }}" class="text-sm text-gray-700 underline">Home</a>
                                                @break
                                            @case(11)
                                                <a href="{{ route(JURUSAN . '.dash') }}" class="text-sm text-gray-700 underline">Home</a>
                                                @break
                                            @case(4)
                                                <a href="{{ route(UNIT . '.dash') }}" class="text-sm text-gray-700 underline">Home</a>
                                                @break
                                            @case(5)
                                                <a href="{{ route(ARSIPARIS . '.dash') }}" class="text-sm text-gray-700 underline">Home</a>
                                                @break
                                            @case(6)
                                                <a href="{{ route(SEKRETARIAT . '.dash') }}" class="text-sm text-gray-700 underline">Home</a>
                                                @break
                                            @case(7)
                                                <a href="{{ route(WAREKTOR . '.dash') }}" class="text-sm text-gray-700 underline">Home</a>
                                                @break
                                            @case(8)
                                                <a href="{{ route(REKTOR . '.dash') }}" class="text-sm text-gray-700 underline">Home</a>.
                                                @break
                                            @default
                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                                        @endswitch
                                        @else
                                        <a href="{{ route('login') }}" role="button" class="btn btn-outline-primary login ">Login</a>
                                        @endif
                                    </li>
                                </ul>
                            @endif
                                <a class='menu-trigger'>
                                    <span>Menu</span>
                                </a>
                                <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
         <!-- ***** Header Area End ***** -->
        <header class="masthead d-flex">
            <div class="container text-center my-auto">
              <h1 class="mb-1">SELAMAT DATANG DI E-OFFICE ITK</h1>
              <a class="btn btn-primary btn-lg js-scroll-trigger" href="#tentang">Tentang E-OFFICE</a>
            </div>
            <div class="overlay"></div>   
          </header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 about text-center" id="tentang">
                    <h1> Manajamen E-Office ITK</h1>
                    <h4>"Merupakan sistem informasi manajemen e-office berbasis web yang berfokus pada pengelolan persuratan yang berada di lingkungan Kampus Institut Teknologi Kalimantan"</h4>   
                    <div class="row-padding">
                        <a class="btn btn-primary btn-lg js-scroll-trigger" href="#services" class="btn">Lebih lanjut</a>
                    </div>
                </div>
            </div>
        </div>
        <section id="services" class="features-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="single-features mt-40">
                            <div class="features-title-icon d-flex justify-content-between">
                                <h4 class="features-title"><a href="#">Mahasiswa</a></h4>
                                <div class="features-icon">
                                    <i class="lni lni-brush"></i>
                                    <img class="shape" src="{{ asset('images/mahasiswa.png') }}" alt="Shape">
                                </div>
                            </div>
                            <div class="features-content">
                                <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                                <a class="features-btn" href="#">LEARN MORE</a>
                            </div>
                        </div> <!-- single features -->
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="single-features mt-40">
                            <div class="features-title-icon d-flex justify-content-between">
                                <h4 class="features-title"><a href="#">Internal ITK</a></h4>
                                <div class="features-icon">
                                    <i class="lni lni-layout"></i>
                                    <img src="{{ asset('images/internal.png') }}" class="shape" alt="Shape">
                                </div>
                            </div>
                            <div class="features-content">
                                <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                                <a class="features-btn" href="#">LEARN MORE</a>
                            </div>
                        </div> <!-- single features -->
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="single-features mt-40">
                            <div class="features-title-icon d-flex justify-content-between">
                                <h4 class="features-title"><a href="#">Eksternal ITK</a></h4>
                                <div class="features-icon">
                                    <i class="lni lni-bolt"></i>
                                    <img class="shape" src="assets/images/f-shape-1.svg" alt="Shape">
                                </div>
                            </div>
                            <div class="features-content">
                                <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                                <a class="features-btn" href="#">LEARN MORE</a>
                            </div>
                        </div> <!-- single features -->
                    </div>
                </div> <!-- row -->
            </div>
        </section>

        <section class="section home-feature">
            <div class="container2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="panel panel-default" id="kirim-surat">
                                    <div class="panel-heading" style="font-size: 19px;"><strong>Bukan bagian dari ITK, tapi ingin mengirimkan surat? Silahkan mengisi form dibawah ini</strong> </div>
                                    <form style="padding: 40px;">
                                        
                                        <div class="form-group">
                                            <label class="form_style">
                                                Nama Instansi
                                                <input class="input" type="text" placeholder="Nama Instansi">
                                            </label>
                                            <label class="form_style">
                                                Email
                                                <input class="input" type="text" placeholder="Email">
                                            </label>
                                            <label class="form_style">
                                                Tujuan Surat
                                                <input class="input" type="text" placeholder="Tujuan Surat">
                                            </label>    
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                <label class="custom-file-label" for="inputGroupFile04">Lampiran</label>
                                            </div>
                                        </div>
    
                                        <div class="footer-right">
                                            <button class="btn btn-primary" type="submit" data-attach-loading="" style="margin-top: 10px;">KIRIM</button>
                                        </div>
    
                                    </form>
                                </div>
                            </div>
                            <!-- ***** Features Small Item End ***** -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <section class="row row-padding text-center kontak-sukma" id="kontak">
                <div class="col-md-6 offset-md-3 head-section"> 
                    <h3>Kontak E-Office</h3>
                </div>
                <div class="col-md-4">
                   <img src="{{ asset('images/map.png') }}" alt="" style="height: 55px;">
                   <h6>Jl. Soekarno-Hatta Km.15, Karang Joang, Balikpapan, Kalimantan Timur, 76127</h6>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/telephone.png') }}" alt="" style="height: 44px;">
                    <h6>0542-8530801</h6>
                 </div>
                 <div class="col-md-4">
                    <img src="{{ asset('images/email.png') }}" alt="" style="height: 50px;">
                    <h6>humas@itk.ac.id</h6>
                 </div>
            </section>
            <section class="row-divider">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="copyright">Copyright© 2020 Institut Teknologi Kalimantan - Design: Patrick Polii</p>
                    </div>
                </div>    
            </section>
            
        </footer>
        <!-- min js -->
        <script src="{{ mix('/js/app.js') }}"></script>
        <!-- jQuery -->
        <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Plugins -->
        <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/imgfix.min.js') }}"></script>

        <!-- Global Init -->
        <script src="{{ asset('js/custom.js') }}"></script>

    </body>

</html>