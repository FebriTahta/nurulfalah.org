<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="hotel, bed and breakfast, accommodations, travel, motel">
    <meta name="description" content="Albert - Hotel and Bed&amp;Breakfast">
    <meta name="author" content="Ansonika">
    <title>Albert - Hotel and Bed&amp;Breakfast</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello/css/icon_set_1.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello/css/icon_set_2.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello/css/fontello.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
    <link href="{{asset('layerslider/css/layerslider.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">

    @yield('css')
</head>

<body>

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- End Preload -->
    
     <!-- Header ================================================== -->
    <header>
    <div class="container">
        <div class="row">
            <div class="col--md-3 col-sm-3 col-xs-3">
                <a href="index.html" id="logo">
                <img src="{{asset('img/nf_logo_white.png')}}" width="190" height="23" alt="" data-retina="true" class="logo_normal">
                <img src="{{asset('img/nf_logo.png')}}" width="190" height="23" alt="" data-retina="true" class="logo_sticky">
                </a>
            </div>
            <nav class="col--md-9 col-sm-9 col-xs-9">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            
            <div class="main-menu">
                <div id="header_menu">
                     <img src="{{asset('img/logo_m.png')}}" width="141" height="40" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                 <ul>
                    {{-- <li class="submenu">
                    <a href="javascript:void(0);" class="show-submenu">Home<i class="icon-down-open-mini"></i></a>
                    <ul>
                        <li><a href="index.html">Home Booking</a></li>
                    </ul>
                    </li> --}}
                    <li class="submenu">
                        <a href="javascript:void(0);" class="show-submenu">Program<i class="icon-down-open-mini"></i></a>
                        <ul>
                            <li><a href="room_detail.html">Daftar Program</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                    <a href="javascript:void(0);" class="show-submenu">Media<i class="icon-down-open-mini"></i></a>
                    <ul>
                    	<li><a href="room_detail.html">Artikel</a></li>
                        <li><a href="room_detail.html">Berita</a></li>
                        <li><a href="room_detail.html">Quote</a></li>
                    </ul>
                    </li>
                    <li><a href="contacts.html">Contacts</a></li>
                     <li><a href="#0">Cabang</a></li>
                </ul>
            </div><!-- End main-menu -->
            
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
    </header>
    <!-- End Header =============================================== -->