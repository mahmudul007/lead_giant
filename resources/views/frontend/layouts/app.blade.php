
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
   
    <!-- Stylesheets
 ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href={{ asset('frontend/css/bootstrap.css') }} type="text/css" />
    <link rel="stylesheet" href={{ asset('frontend/style.css') }} type="text/css" />

    <link rel="stylesheet" href={{ asset('frontend/css/dark.css') }} type="text/css" />
    <link rel="stylesheet" href={{ asset('frontend/css/font-icons.css') }} type="text/css" />
    <link rel="stylesheet" href={{ asset('frontend/css/animate.css') }} type="text/css" />
    <link rel="stylesheet" href={{ asset('frontend/css/magnific-popup.css') }} type="text/css" />

    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href={{ asset('frontend/css/components/bs-switches.css') }} type="text/css" />

    <link rel="stylesheet" href={{ asset('frontend/css/custom.css') }} type="text/css" />
    <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

    <!-- Seo Demo Specific Stylesheet -->
    <link rel="stylesheet" href={{ asset('frontend/css/colors.php?color=FE9603') }} type="text/css" />
    <!-- Theme Color -->
    <link rel="stylesheet" href={{ asset('frontend/demos/seo/css/fonts.css') }} type="text/css" />
    <link rel="stylesheet" href={{ asset('frontend/demos/seo/seo.css') }} type="text/css" />
    <!-- / -->

    <!-- Document Title
 ============================================= -->
    {{-- <title>Lead Giant </title> --}}
    @yield('css')

    <!-- Document Title
 ============================================= -->
    <title>
        @yield('title')
    </title>

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="clearfix">

      

        <div id="top-bar" class="transparent-topbar">
            <div class="container clearfix">

                <div class="row justify-content-between">
                    <div class="col-12 col-md-auto">

                        <!-- Top Links
      ============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="/">Home</a></li>
                                <li class="top-links-item"><a href="#faq">FAQs</a></li>
                                <li class="top-links-item"><a href="#contact">Contact</a></li>
                                <li class="top-links-item"><a href="#"><img
                                            src="{{ asset('frontend/demos/seo/images/flags/eng.png') }}"
                                            alt="Lang">Eng</a>

                                </li>
                            </ul>
                        </div><!-- .top-links end -->

                    </div>

                    <div class="col-12 col-md-auto dark">

                        <!-- Top Social ============================================= -->
                        <ul id="top-social">
                            <li><a href="https://facebook.com/semicolonweb" class="si-facebook" target="_blank"><span
                                        class="ts-icon"><i class="icon-facebook"></i></span><span
                                        class="ts-text">Facebook</span></a></li>
                            <li><a href="https://twitter.com/__semicolon" class="si-twitter" target="_blank"><span
                                        class="ts-icon"><i class="icon-twitter"></i></span><span
                                        class="ts-text">Twitter</span></a></li>
                            <li><a href="https://youtube.com/semicolonweb" class="si-youtube" target="_blank"><span
                                        class="ts-icon"><i class="icon-youtube"></i></span><span
                                        class="ts-text">Youtube</span></a></li>
                            <li><a href="https://instagram.com/semicolonweb" class="si-instagram" target="_blank"><span
                                        class="ts-icon"><i class="icon-instagram2"></i></span><span
                                        class="ts-text">Instagram</span></a></li>
                            <li><a href="tel:+10.11.85412542" class="si-call"><span class="ts-icon"><i
                                            class="icon-call"></i></span><span
                                        class="ts-text">+10.11.85412542</span></a></li>
                            <li><a href="mailto:info@Lead Giant.com" class="si-email3"><span class="ts-icon"><i
                                            class="icon-envelope-alt"></i></span><span class="ts-text">info@Lead
                                        Giant.com</span></a></li>
                        </ul><!-- #top-social end -->

                    </div>
                </div>

            </div>
        </div><!-- #top-bar end -->
        <!-- Header ============================================= -->
        <header id="header" class="transparent-header floating-header header-size-md">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo    ============================================= -->
                        <div id="logo">
                            <a href="/" class="standard-logo" data-dark-logo="fahad_logo.png">
                                <img style="height: 50px;widht:75px"
                                    src="{{asset('fahad_logo.png')}}" alt="Lead giant Logo"></a>
                            <a href="/" class="retina-logo" data-dark-logo="lfahad_logo.png">
                                <img style="height: 50px;widht:75px"
                                src="{{asset('fahad_logo.png')}}" alt="Lead giant Logo"></a>
                        </div><!-- #logo end -->

                        <div class="header-misc">

                            {{-- <!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end --> --}}

                            <a href="#" class="button button-rounded ms-3 d-none d-sm-block">Get Started</a>

                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation ============================================= -->
                        <nav class="primary-menu with-arrows">

                            <ul class="menu-container">
                                <li class="menu-item current"><a class="menu-link" href="/">
                                        <div>Home</div>
                                    </a></li>
                                
								<li class="menu-item"><a class="menu-link" href="#services">
									<div>Services</div>
								</a></li>
                                <li class="menu-item"><a class="menu-link" href="#faq">
                                        <div>FAQs</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#contact">
                                        <div>Contact</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->
        @yield('content')

        @include('frontend.layouts.partial.footer')

    </div>







    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src={{ asset('frontend/js/jquery.js') }}></script>
    <script src={{ asset('frontend/js/plugins.min.js') }}></script>
    <script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

    <script src="{{ asset('js/share.js') }}"></script>
    <!-- Footer Scripts
 ============================================= -->
    <script src={{ asset('frontend/js/functions.js') }}></script>
    <!-- DatePicker JS -->
    <script src={{ asset('frontend/js/components/moment.js') }}></script>
    <script src={{ asset('frontend/js/components/daterangepicker.js') }}></script>
    @yield('script')

</body>

</html>
