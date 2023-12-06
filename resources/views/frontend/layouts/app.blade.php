<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
 ============================================= -->
    <link href=<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href=<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500&display=swap" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href={{asset("frontend/css/bootstrap.css")}} type="text/css" />
    <link rel="stylesheet" href={{asset("frontend/style.css")}} type="text/css" />

    <!-- One Page Module Specific Stylesheet -->
    <link rel="stylesheet" href={{asset("frontend/one-page/onepage.css")}} type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href={{asset("frontend/css/dark.css")}} type="text/css" />
    <link rel="stylesheet" href={{asset("frontend/css/font-icons.css")}} type="text/css" />
    <link rel="stylesheet" href={{asset("frontend/one-page/css/et-line.css")}} type="text/css" />
    <link rel="stylesheet" href={{asset("frontend/css/animate.css")}} type="text/css" />
    <link rel="stylesheet" href={{asset("frontend/css/magnific-popup.css")}} type="text/css" />

    <link rel="stylesheet" href={{asset("frontend/demos/real-estate/css/font-icons.css")}} type="text/css" />

    <link rel="stylesheet" href={{asset("frontend/one-page/css/fonts.css" )}}type="text/css" />

    <link rel="stylesheet" href={{asset("frontend/css/custom.css")}} type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- DatePicker CSS -->
    <link rel="stylesheet" href={{asset("frontend/css/components/daterangepicker.css")}} type="text/css" />
    <!-- Range Slider CSS -->
    <link rel="stylesheet" href={{asset("frontend/css/components/ion.rangeslider.css")}} type="text/css" />

    <!--  Demo cleaner Specific Stylesheet -->
    <link rel="stylesheet" href={{asset("frontend/css/colors.php?color=335EEE")}} type="text/css" /> <!-- Cleaner Theme Color -->
    <link rel="stylesheet" href={{asset("frontend/demos/cleaner/css/fonts.css")}} type="text/css" /> <!-- Cleaner Theme Font -->
    <link rel="stylesheet" href={{asset("frontend/demos/cleaner/cleaner.css")}} type="text/css" />
    <!-- Cleaner Theme Custom CSS -->
    <!-- / -->


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

        <!-- Header ============================================= -->
        <header id="header" class="full-header transparent-header header-size-custom" data-sticky-shrink="false"
            data-mobile-sticky="true">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
                                 ============================================= -->
                        <div id="logo" class="me-lg-3">
                            <a href="{{route('frontend.index')}}"  class="standard-logo" data-dark-logo="spm.png"><img src={{asset("spm.png")}}
                                    alt="Canvas Logo"></a>
                            <a href="{{route('frontend.index')}}"  class="retina-logo" data-dark-logo="spm.png"><img src={{asset("spm.png")}}
                                    alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

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

                        <!-- Primary Navigation
                                          ============================================= -->
                        <nav class="primary-menu">

                            <ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250"
                                data-offset="65">
                                <li class="menu-item">
                                    <a href="{{route('frontend.index')}}"  class="menu-link fs-6 fw-bolder" >
                                        <div>Home</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('property.index')}}" class="menu-link  fs-6 fw-bolder" >
                                        <div>blogs</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('service.index')}}"  class="menu-link  fs-6 fw-bolder"
                                       >
                                        <div>brands</div>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('frontend.contact')}}" class="menu-link  fs-6 fw-bolder"
                                      >
                                        <div>Contact</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('frontend.about')}}"  class="menu-link  fs-6 fw-bolder"
                                      >
                                        <div>About</div>
                                    </a>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

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
    <script src={{asset("frontend/js/jquery.js")}}></script>
    <script src={{asset("frontend/js/plugins.min.js")}}></script>
    <script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

    <!-- Footer Scripts
 ============================================= -->
    <script src={{asset("frontend/js/functions.js")}}></script>
    <!-- DatePicker JS -->
	<script src={{asset("frontend/js/components/moment.js")}}></script>
	<script src={{asset("frontend/js/components/daterangepicker.js")}}></script>
    @yield('script')

</body>

</html>
