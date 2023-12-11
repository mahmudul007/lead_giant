<section id="content">

    <div class="content-wrap pt-0">

        <!-- Client Carousel
        ============================================= -->
        <div class="section bg-transparent m-0 border-bottom py-5">

            <div class="container">
                <h3>We works With</h3>
                <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="100" data-loop="true"
                    data-autoplay="5000" data-nav="false" data-pagi="false" data-items-xs="2" data-items-sm="3"
                    data-items-md="4" data-items-lg="5" data-items-xl="6">
                    @foreach ($brands as $client)
                        <div class="oc-item"><a href="#">
                                <img src="{{ $client->brandPicture->link }}" alt="Brands"></a></div>
                    @endforeach


                </div>
            </div>
        </div>

        <!-- Features
        ============================================= -->
        <div class="section bg-transparent mt-4 mb-0 pb-0" id="services">
            <div class="container">
                <div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">
                    <div class="badge rounded-pill badge-default">Services</div>
                    <h3 class="nott ls0 mb-3">What We Do</h3>
                    <p>Dynamically provide access to resource-leveling mindshare vis-a-vis bricks-and-clicks ideas
                        authoritatively.</p>
                </div>
                <div class="row justify-content-between align-items-center">

                    <div class="col-lg-4 col-sm-6">

                        <div class="feature-box flex-md-row-reverse text-md-end border-0">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{ asset('frontend/demos/seo/images/icons/seo.svg') }}"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0"> SEO optimization</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore, voluptates!
                                </p>
                            </div>
                        </div>

                        <div class="feature-box flex-md-row-reverse text-md-end border-0 mt-5 ">
                            <div class="fbox-icon">
                                <a href="#"><img src="frontend/demos/seo/images/icons/adword.svg"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">B2B Lead Generation </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
                            </div>
                        </div>

                        <div class="feature-box flex-md-row-reverse text-md-end border-0 mt-5">
                            <div class="fbox-icon">
                                <a href="#"><img src="frontend/demos/seo/images/icons/analysis.svg"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">Data Scraping</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
                            </div>
                        </div>

                    </div>

                    {{-- <div class="col-lg-3 col-7 offset-3 offset-sm-0 d-sm-none d-lg-block center my-5 d-none">
                        <img src="frontend/demos/seo/images/sections/2.png" alt="iphone" class="rounded  parallax" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                    </div> --}}

                    <div class="col-lg-4 col-sm-6">

                        <div class="feature-box border-0">
                            <div class="fbox-icon">
                                <a href="#"><img src="frontend/demos/seo/images/icons/social.svg"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">Skip Tracing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore, voluptates!
                                </p>
                            </div>
                        </div>

                        <div class="feature-box border-0 mt-5">
                            <div class="fbox-icon">
                                <a href="#"><img src="frontend/demos/seo/images/icons/experience.svg"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">Ad operations</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
                            </div>
                        </div>

                        <div class="feature-box border-0 mt-5">
                            <div class="fbox-icon">
                                <a href="#"><img src="frontend/demos/seo/images/icons/content_marketing.svg"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">Email Marketing</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>



        <!-- Form Section
        ============================================= -->
        <div class="section m-0"
            style="background: url({{asset('frontend/demos/seo/images/sections/1.jpg')}}) no-repeat center center; background-size: cover; padding: 100px 0;">
            <div class="container">
                <div class="row justify-content-between align-items-center">

                    <div class="col-md-4">
                        <div class="heading-block border-bottom-0 bottommargin-sm">
                            <div class="badge rounded-pill badge-default">Quotes</div>
                            <h3 class="nott ls0">Get your free Quote today</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolore voluptatem
                            assumenda quae possimus sunt dignissimos tempora officia.</p>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="mb-3">Apply Now</h4>
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <div class="">
                                    <div class=""></div>
                                    <form class="row mb-0" name="name"
                                        action="{{ url('contact/request/') }}" enctype="multipart/form-data"
                                        method="post">
                                        @csrf
                                        <div class="col-12 form-group mb-3">
                                            <label for="template-contactform-name">Name:*</label>
                                            <input type="text"  name="name"
                                                class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group mb-3">
                                            <label for="template-contactform-email">Email Address:*</label>
                                            <input type="email"  name="email"
                                                class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group mb-3">
                                            <label for="template-contactform-email">Phone number:*</label>
                                            <input type="number"  name="phone"
                                                class="form-control input-sm required" value="">
                                        </div>
                                        <div class="col-12 form-group mb-4">
                                            <label for="template-contactform-website">Comments:*</label>
                                            <input type="text"  name="value"
                                                class="form-control input-sm required" value="">
                                        </div>

                                        <div class="col-12 form-group mb-0">
                                            <button class="button button-rounded w-100 nott ls0 m-0" type="submit"
                                                name="template-contactform-submit" value="submit">Apply Now</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5 mt-md-0 center">
                        {{-- <a href="#" data-lightbox="iframe" class="play-icon shadow"><i
                                class="icon-play"></i></a> --}}
                    </div>

                </div>

            </div>
        </div>

        <!-- Works/Projects
        ============================================= -->
        <div class="section m-0"
            style="background: url('frontend/demos/seo/images/sections/5.jpg') no-repeat center center; background-size: cover;padding: 80px 0;">
            <div class="container">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge rounded-pill badge-default">Completed Projects</div>
                    <h3 class="nott ls0">Our Latest Works</h3>
                </div>

                <div id="portfolio" class="portfolio row grid-container gutter-20">

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="frontend/demos/seo/images/works/1.jpg" alt="The Atmosphere">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3><a href="#">The Atmosphere</a></h3>
                                <span>Digital Marketing</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="frontend/demos/seo/images/works/2.jpg" alt="Wavelength Structure">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Wavelength Structure</h3>
                                <span>SEO</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-uielements">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="frontend/demos/seo/images/works/3.jpg" alt="Greenhouse Garden">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Simplicity Pages</h3>
                                <span>Analytics</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-icons pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="frontend/demos/seo/images/works/4.jpg" alt="Industrial Hub">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>SEO Analysis</h3>
                                <span>SEO</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-uielements pf-media">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="frontend/demos/seo/images/works/5.jpg" alt="Corporate Headquarters">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Marketing Strategy</h3>
                                <span>Digital Marketing</span>
                            </div>
                        </div>
                    </article>

                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="frontend/demos/seo/images/works/6.jpg" alt="Space Station">
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500">
                                        <a href="#" class="overlay-trigger-icon bg-light text-dark"
                                            data-hover-animate="fadeIn" data-hover-speed="500"><i
                                                class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                        data-hover-speed="500"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h3>Space Station</h3>
                                <span>Social Media</span>
                            </div>
                        </div>
                    </article>

                </div>

                <div class="center">
                    <a href="/" class="button button-large button-rounded text-capitalize ms-0 mt-5 ls0">View
                        All Works</a>
                </div>

            </div>
        </div>

        <!-- Features
        ============================================= -->
        <div class="container clearfix py-5">
            <div class="row">
                <div class="col-md-4 mt-5">
                    <div class="feature-box fbox-center border-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="frontend/demos/seo/images/icons/research.svg"
                                    alt="Feature Icon" class="bg-transparent rounded-0"></a>
                        </div>
                        <div class="fbox-content">
                            <h3 class="nott ls0">1. Planning &amp; Research</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, dolore, voluptates!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="feature-box fbox-center border-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="frontend/demos/seo/images/icons/optimizing.svg"
                                    alt="Feature Icon" class="bg-transparent rounded-0"></a>
                        </div>
                        <div class="fbox-content">
                            <h3 class="nott ls0">2. Optimizing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, provident.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-5">
                    <div class="feature-box fbox-center border-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="frontend/demos/seo/images/icons/result.svg"
                                    alt="Feature Icon" class="bg-transparent rounded-0"></a>
                        </div>
                        <div class="fbox-content">
                            <h3 class="nott ls0">3. Result</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, ipsa!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials
        ============================================= -->
        <div class="section mt-0"
            style="background: url('frontend/demos/seo/images/sections/3.jpg') no-repeat top center; background-size: cover; padding: 80px 0 70px;">
            <div class="container">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge rounded-pill badge-default">Testimonials</div>
                    <h3 class="nott ls0">What Clients Says</h3>
                </div>

                <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget clearfix"
                    data-margin="0" data-pagi="true" data-loop="true" data-center="true" data-autoplay="5000"
                    data-items-sm="1" data-items-md="2" data-items-xl="3">

                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="frontend/demos/pet/images/testimonials/1.jpg"
                                        alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum
                                    libero illo rerum repellendus!</p>
                                <div class="testi-meta">
                                    John Doe
                                    <span>XYZ Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="frontend/demos/pet/images/testimonials/2.jpg"
                                        alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati
                                    id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Collis Ta'eed
                                    <span>Envato Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="frontend/demos/pet/images/testimonials/3.jpg"
                                        alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati
                                    id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Collis Ta'eed
                                    <span>Envato Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="frontend/demos/pet/images/testimonials/4.jpg"
                                        alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati
                                    id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Mary Jane
                                    <span>Google Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="frontend/images/testimonials/5.jpg"
                                        alt="Customer Testimonails"></a>
                            </div>
                            <div class="testi-content">
                                <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati
                                    id culpa corporis molestias.</p>
                                <div class="testi-meta">
                                    Steve Jobs
                                    <span>Apple Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.layouts.partial.blogs')


</section><!-- #content end -->
