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

    <style>
        #largeImageContainer {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
            max-width: 100%;
            max-height: 100%;
            text-align: center;
        }

        #largeImage {
            width: 100%;
            height: auto;
        }

        .thumbnail-container {
            margin-bottom: 20px;
            text-align: center;
        }

        .thumbnail {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        @media screen and (max-width: 767px) {

            /* Adjust styles for smaller screens */
            .thumbnail-container {
                text-align: center;
            }

            #largeImageContainer {
                width: 80%;
                max-width: 300px;
            }
        }
    </style>


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



        {{-- <div id="top-bar" class="transparent-topbar d-lg-none d-xl-block">
            <div class="container clearfix">

                <div class="row justify-content-between ">
                    <div class="col-12 col-md-auto">

                        <!-- Top Links
                                   ============================================= -->
                        <div class="top-links">
                            <ul class="top-links-container">
                                <li class="top-links-item"><a href="/">Home</a></li>
                             
                                <li class="top-links-item"><a href="#contact">Contact</a></li>
                               
                            </ul>
                        </div><!-- .top-links end -->

                    </div>

                    <div class="col-12 col-md-auto dark">

                        <!-- Top Social ============================================= -->
                        <ul id="top-social">
                            <li><a href="https://www.facebook.com/facebook.leadgiant/" class="si-facebook" target="_blank"><span
                                        class="ts-icon"><i class="icon-facebook fs-6"></i></span><span
                                        class="ts-text">Facebook</span></a></li>
                            <li><a href="https://twitter.com/lead_giant" class="si-twitter" target="_blank"><span
                                        class="ts-icon"><i class="icon-twitter fs-6"></i></span><span
                                        class="ts-text">X(Twitter)</span></a></li>
                                        <li><a href="https://www.linkedin.com/company/leadgiant/" class="si-linkedin" target="_blank"><span
                                            class="ts-icon"><i class="icon-linkedin-sign fs-6"></i></span><span
                                            class="ts-text">Linkedin</span></a></li>
                            <li><a href="https://www.fiverr.com/users/khan_saddam/" class="si-fiver" target="_blank"><span
                                        class="ts-icon"><img class=" rounded-pill " height="22px" src="fiver.png" alt=""> </span><span
                                        class="ts-text text-success"  >Fiverr</span></a></li>
                            <li><a href="https://www.upwork.com/freelancers/~0141b05ecc39a5fa6a" class="si-upwork" target="_blank"><span
                                        class="ts-icon"> <img height="23px" src="upwork.png" alt=""> </span><span
                                        class="ts-text" >Upwork</span></a></li>
                            <li><a href="tel:+8801956004778" class="si-call"><span class="ts-icon fs-6"><i
                                            class="icon-call"></i></span><span
                                        class="ts-text">+88 01956004778</span></a></li>
                            <li><a href="mailto:info@Lead Giant.com" class="si-email3"><span class="ts-icon"><i
                                            class="icon-envelope-alt fs-6"></i></span><span class="ts-text">info@Lead
                                        Giant.com</span></a></li>
                        </ul><!-- #top-social end -->

                    </div>
                </div>

            </div>
        </div><!-- #top-bar end --> --}}
        <!-- Header ============================================= -->
        <header id="header" class="header-size-md">
            <div id="header-wrap">
                <div class="container  " style="box-shadow: none !important">
                    <div class="header-row">

                        <!-- Logo    ============================================= -->
                        <div id="logo">
                            <a href="/" class="standard-logo" data-dark-logo="fahad_logo.png">
                                <img style="height: 70px;widht:75px" src="{{ asset('fahad_logo.png') }}"
                                    alt="Lead giant Logo"></a>
                            <a href="/" class="retina-logo" data-dark-logo="lfahad_logo.png">
                                <img style="height: 70px;widht:75px" src="{{ asset('fahad_logo.png') }}"
                                    alt="Lead giant Logo"></a>
                        </div><!-- #logo end -->

                        <div class="header-misc">



                            <a href="#contact" class="button button-rounded ms-3 d-none d-sm-block rounded-pill">Contact
                                Us</a>

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
                                <li class="menu-item"><a class="menu-link" href="#about_us">
                                        <div>About</div>
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
    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "102176832364524");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    @yield('script')




</body>

</html>
