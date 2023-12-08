<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Seposale') }}</title>

        <!-- =================== META =================== -->
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">
        <!-- =================== STYLE =================== -->
        <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body  id="home" class="inner-scroll">

    <!--================ PRELOADER ================-->
    <div class="preloader-cover">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--============== PRELOADER END ==============-->
    <!-- ================= HEADER ================= -->
    <header class="header">
        <a href="#" class="nav-btn">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <div class="top-panel">
            <div class="container">
                <div class="top-panel-cover">
                    <ul class="header-cont">
                        <li><a href="tel:+912345687"><i class="fa fa-phone"></i>+265 123 456 87</a></li>
                        <li><a href="mailto:seposale@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>seposale@gmail.com</a></li>
                    </ul>
                    <ul class="icon-right-list">
                        <li><a class="header-like" href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>6</span></a></li>
                        <li><a class="header-user" href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <li><a class="header-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="container">
                <a href="{{route('home')}}" class="logo"><img src="{{asset('assets/images/Seposale-Logo.svg')}}" alt="logo"></a>
                <nav class="nav-menu">
                    <ul class="nav-list">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('products')}}">Products</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- =============== HEADER END =============== -->

   <div>
       {{ $slot }}
   </div>

    <!--==================== FOOTER ====================-->
    <footer>
        <div class="container">
            <div class="row footer-item-cover">
                <div class="footer-subscribe col-md-7 col-lg-8">
                    <h6>subscribe</h6>
                    <p>Subscribe and get latest updates.</p>
                    <form class="subscribe-form">
                        <i class="fa fa-at" aria-hidden="true"></i>
                        <input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
                        <button type="submit" class="btn btn-form"><span>send</span></button>
                    </form>
                </div>
                <div class="footer-item col-md-5 col-lg-4">
                    <div class="footer-touch col-md-7 col-lg-8">
                        <h6>stay in touch</h6>
                        <ul class="footer-soc social-list">
                            <li><a target="_blank" href="https://www.facebook.com/seposale"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/seposale"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/seposale"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="footer-autor">Questions? Please write us at: <a href="mailto:seposale@gmail.com">seposale@gmail.com</a></div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-copyright"><a target="_blank" href="https://rovadex.com/">Seposale</a> © 2019. All Rights Reserved.</div>
                <ul class="footer-pay">
                    <li><a href="#"><img src="assets/img/footer-pay-1.png" alt="img"></a></li>
                    <li><a href="#"><img src="assets/img/footer-pay-2.png" alt="img"></a></li>
                    <li><a href="#"><img src="assets/img/footer-pay-3.png" alt="img"></a></li>
                    <li><a href="#"><img src="assets/img/footer-pay-4.png" alt="img"></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!--================== FOOTER END ==================-->

    <!--===================== TO TOP =====================-->
    <a class="to-top" href="#home">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </a>
    <!--=================== TO TOP END ===================-->

        <!--==================== SCRIPT	====================-->
        <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nice-select.js')}}"></script>
        <script src="{{asset('assets/js/wow.js')}}"></script>
        <script src="{{asset('assets/js/rx-lazy.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
    </body>
</html>
