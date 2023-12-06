<div class="position-relative" style="background-color: rgba(51,94,238,0.08);">
    <svg class="svg-separator" viewBox="0 0 1440 24" fill="none" xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="none">
        <path d="M0 24H1440V0C722.5 52 0 0 0 0V24Z" fill="#335EEE"></path>
    </svg>
</div>

<!-- Footer
============================================= -->
<footer id="footer" class="border-0 dark " style="background-color:dark">

    <div class="container">

        <!-- Footer Widgets
            ============================================= -->
        <div class="footer-widgets-wrap">

            <div class="row">
                <div class="col-6 col-lg-4">
                    <img class="mb-5 bg-white" src="{{asset('spm.png')}}" alt=""
                        width="120px">
                    <p class="text-white-50">Home is not just a place, it's a feeling of warmth, belonging, and endless possibilities. Step into our remarkable property
                         and embark on a journey where luxury meets serenity, and dreams become a beautiful reality.</p>
                    <div class="clear"></div>
                    <div>
                        <a href="https://www.facebook.com/profile.php?id=100092644669210" target="blank" class="social-icon me-2 si-light si-rounded si-small si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <h4>Features</h4>
                    <ul class="list-unstyled mb-0 text-small">
                        <h6>Agency Login</h6>
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        <!--@if (Route::has('register'))-->
                        <!--    <li class="nav-item">-->
                        <!--        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>-->
                        <!--    </li>-->
                        <!--@endif-->
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @can('view backend')
                                <a class="dropdown-item" href="{{route('admin.dashboard') }}"
                                 >
                                    {{ __('Dashboard') }}
                                </a>
                                @endcan
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </ul>
                </div>
                <div class="col-6 col-lg-3 mt-5 mt-lg-0">
                    <h4>Resources</h4>
                    <ul class="list-unstyled mb-0 text-small">
                        <li class="mb-2"><a href="{{route('property.index')}}" class="text-light">Property</a></li>
                        <li class="mb-2"><a href="{{route('service.index')}}" class="text-light">service</a></li>

                    </ul>
                </div>
                <div class="col-6 col-lg-2 mt-5 mt-lg-0">
                    <h4>About</h4>
                    <ul class="list-unstyled mb-0 text-small">
                        <li class="mb-2"><a href="{{route('frontend.about')}}" class="text-light">Abouy us</a></li>
                        <li class="mb-2"><a href="{{route('frontend.contact')}}" class="text-light">Locations</a></li>

                    </ul>
                </div>
            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>
    <!-- Copyrights ============================================= -->
    <div id="copyrights" class="dark">

        <div class="container">

            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 text-white-50">
                    Copyrights &copy; 2023 All Rights Reserved by sanmi property management<br>

                </div>

                <div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
                    <div class="copyrights-menu copyright-links mb-0 clearfix">
                        <a href="{{route('frontend.index')}}" class="text-white-50">Home</a>/<a href="{{route('frontend.about')}}"
                            class="text-white-50">About Us</a>/<a  href="{{route('frontend.contact')}}" class="text-white-50">Contact</a>
                    </div>
                </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->
