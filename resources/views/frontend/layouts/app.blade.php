{{-- <!DOCTYPE html>
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

</head> --}}
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href={{asset("frontend/css/bootstrap.css")}} type="text/css" />
    <link rel="stylesheet" href={{asset("frontend/style.css")}} type="text/css" />

	<link rel="stylesheet" href={{asset('frontend/css/dark.css')}} type="text/css" />
	<link rel="stylesheet" href={{asset('frontend/css/font-icons.css')}} type="text/css" />
	<link rel="stylesheet" href={{asset('frontend/css/animate.css')}} type="text/css" />
	<link rel="stylesheet" href={{asset("frontend/css/magnific-popup.css")}} type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href={{asset("frontend/css/components/bs-switches.css")}} type="text/css" />

	<link rel="stylesheet" href={{asset("frontend/css/custom.css")}} type="text/css" />
	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Seo Demo Specific Stylesheet -->
	<link rel="stylesheet" href={{asset("frontend/css/colors.php?color=FE9603")}} type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href={{asset("frontend/demos/seo/css/fonts.css")}} type="text/css" />
	<link rel="stylesheet" href={{asset("frontend/demos/seo/seo.css")}} type="text/css" />
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

        {{-- <!-- Header ============================================= -->
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
        </header><!-- #header end --> --}}

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="transparent-topbar">
			<div class="container clearfix">

				<div class="row justify-content-between">
					<div class="col-12 col-md-auto">

						<!-- Top Links
						============================================= -->
						<div class="top-links">
							<ul class="top-links-container">
								<li class="top-links-item"><a href="demo-seo.html">Home</a></li>
								<li class="top-links-item"><a href="demo-seo-faqs.html">FAQs</a></li>
								<li class="top-links-item"><a href="demo-seo-contact.html">Contact</a></li>
								<li class="top-links-item"><a href="#"><img src="{{asset('frontend/demos/seo/images/flags/eng.png')}}" alt="Lang">Eng</a>
									<ul class="top-links-sub-menu">
										<li class="top-links-item"><a href="#"><img src="{{asset('frontend/demos/seo/images/flags/fre.png')}}" alt="Lang">French</a></li>
										<li class="top-links-item"><a href="#"><img src="{{asset('frontend/demos/seo/images/flags/ara.png')}}" alt="Lang">Arabic</a></li>
										<li class="top-links-item"><a href="#"><img src="{{asset('frontend/demos/seo/images/flags/tha.png')}}" alt="Lang">Thai</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto dark">

						<!-- Top Social
						============================================= -->
						<ul id="top-social">
							<li><a href="https://facebook.com/semicolonweb" class="si-facebook" target="_blank"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="https://twitter.com/__semicolon" class="si-twitter" target="_blank"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="https://youtube.com/semicolonweb" class="si-youtube" target="_blank"><span class="ts-icon"><i class="icon-youtube"></i></span><span class="ts-text">Youtube</span></a></li>
							<li><a href="https://instagram.com/semicolonweb" class="si-instagram" target="_blank"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+10.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+10.11.85412542</span></a></li>
							<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
						</ul><!-- #top-social end -->

					</div>
				</div>

			</div>
		</div><!-- #top-bar end -->
        	<!-- Header
		============================================= -->
		<header id="header" class="transparent-header floating-header header-size-md">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="fahad_logo.png"><img src="fahad_logo.png" alt="Lead giant Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="lfahad_logo.png"><img src="fahad_logo.png" alt="Lead giant Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							{{-- <!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end --> --}}

							<a href="demo-seo-about.html" class="button button-rounded ms-3 d-none d-sm-block">Get Started</a>

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container">
								<li class="menu-item current"><a class="menu-link" href="demo-seo.html"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-seo-about.html"><div>What We Do</div></a></li>
								<li class="menu-item mega-menu"><div class="menu-link"><div>Services</div></div>
									<div class="mega-menu-content mega-menu-style-2 px-0">
										<div class="container">
											<div class="row">
												<a href="demo-seo-optimizations.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="{{asset('frontend/demos/seo/images/icons/seo.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Seo Optimization</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<a href="demo-seo-social.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="{{asset('frontend/demos/seo/images/icons/social.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Social Media Marketing</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<a href="demo-seo-adwords.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="{{asset('frontend/demos/seo/images/icons/adword.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Adwords Campaign</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<a href="demo-seo-experience.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="{{asset('frontend/demos/seo/images/icons/experience.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Customer Experience</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<a href="demo-seo-analysis.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="{{asset('frontend/demos/seo/images/icons/analysis.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Digital Analysis</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<a href="demo-seo-content-marketing.html" class="mega-menu-column sub-menu-container col-lg-4 border-bottom h-bg-light py-4">
													<div class="feature-box">
														<div class="fbox-icon mb-2">
															<img src="{{asset('frontend/demos/seo/images/icons/content_marketing.svg')}}" alt="Feature Icon" class="bg-transparent rounded-0">
														</div>
														<div class="fbox-content">
															<h3 class="nott ls0">Content Marketing</h3>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
														</div>
													</div>
												</a>
												<div class="mega-menu-column sub-menu-container col-12 p-0">
													<a href="demo-seo-about.html" class="button button-rounded button-large nott ls0 w-100 text-center m-0 rounded-0 py-3 button-light ">View All <i class="icon-line-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item"><a class="menu-link" href="demo-seo-faqs.html"><div>FAQs</div></a></li>
								<li class="menu-item"><a class="menu-link" href="demo-seo-contact.html"><div>Contact</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
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
