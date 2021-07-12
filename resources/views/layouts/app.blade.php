<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/carousel.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.min') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="container-fluid">
                <nav class="navbar navbar-light" style=" background : red;">
                  <a class="navbar-brand"></a>
                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <a href="{{ url('/') }}"><img src="{{ url('img/search.png') }}" width="15"/></a>
                    </button>
                  </form>
                </nav>
             </div>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
            <div class="container">
                <a href="{{ url('/') }}"><img src="{{ url('img/LOGO.png') }}"width="50"/>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
        </li>
      </ul>
    </div>
  </div>
</nav>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                                <?php
                                 $pesanans_utama = \App\pesanans::where('user_id', Auth::user()->id)->where('status',0)->first();
                                 if(!empty($pesanans_utama))
                                    {
                                     $notif = \App\pesananDetail::where('pesanan_id', $pesanan_utama->id)->count(); 
                                    }
                                ?>
                                <a class="nav-link" href="{{ url('check-out') }}">
                                    <i class="fa fa-shopping-cart"></i>
                                    @if(!empty($notif))
                                    <span class="badge badge-danger">{{ $notif }}</span>
                                    @endif
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Selamat datang, 
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('profile') }}">
                                        Profil
                                    </a>

                                    <a class="dropdown-item" href="{{ url('history') }}">
                                        Riwayat Turnamen
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Keluar') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="text-white footer-gg" style="background : black;" >
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3 mt-3">
                            <img src="{{ url('img/LOGO.png') }}" alt="GGWP" width="135">
                        </div>
                        <p class="font-size-thick font-weight-semibold">BUATBAJUKU.ID, Perusahaan Konveksi yang memproduksi jaket,kemeja,poloshirt,kaos,jersey,workshirt dan lain sebagainya.</p>
                    </div>
                    <div class="col-md-3">
                        <p class="titleFooter mt-3">Tentang Kami</p>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-white" target="_blank" href="/privacy-policy">Kebijakan &amp; Privasi</a>
                        </li>
                        <li>
                            <a class="text-white" target="_blank" href="/terms-and-conditions">Syarat &amp; Ketentuan</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mt-3">
                    <p class="text-white" class="titleFooter">Section</p>
                    <ul class="list-unstyled">
                        <li>
                            <a class="text-white" href="/media/esports">Lorem ipsum</a>
                        </li>
                        <li>
                            <a class="text-white" href="/media/geek">Lorem ipsum</a>
                        </li>
                        <li>
                            <a class="text-white" href="/media/hiburan">Lorem ipsum</a>
                        </li>
                        <li>
                            <a class="text-white" href="/media/tekno">Lorem ipsum</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mt-3">
                    <p class="titleFooter">Ikuti BUATBAJUKU.ID</p>
                    <ul class="list-unstyled">
                        
                        <li>
                            <a class="text-white" target="_blank" href="https://www.instagram.com/ggwp_esports/">Instagram</a>
                        </li>
                        <li>
                            <a class="text-white" target="_blank" href="https://www.facebook.com/DuniakuNetworkGGWP/">Facebook</a>
                        </li>
                        <li>
                            <a class="text-white" target="_blank" href="https://twitter.com/DuniakuNet">Twitter</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-top mt-3 px-0 py-2 col-md-12">
                <div class="align-items-center row">
                    <div class="col mt-2">
                        <a href="https://www.instagram.com/wf.esports/" target="_blank"><img class="image" border="0" title="Instagram" src="{{ url('img/Instagram.png') }}" width="40px"></a>
                            <a class="button icon-sprite-footer" target="_blank" href="https://twitter.com/DuniakuNet">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="button icon-sprite-footer" target="_blank" href="https://www.instagram.com/ggwp_esports/">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                         <div class="text-right mt-3">
                        <p class="text-small">2021 © BUATBAJUKU.ID ALL RIGHT RESERVED</p>
                    </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('sweet::alert')
</body>
</html>
