<section id="content">

    <div class="content-wrap pt-0">

        {{-- about us  --}}
        <div class="section bg-transparent mt-4 mb-0 pb-0" id="about_us">
            <div class="container">
                <div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">
                    <div class="badge rounded-pill badge-default">About</div>
                    <h3 class="nott ls0 mb-3">About Us</h3>

                </div>
                <div class="nott ls0 mb-3 ">

                    <p>Established in 2016, Lead Giant has emerged as a formidable force in the digital marketing landscape, distinguished by its innovative
                        approach and unparalleled expertise. Boasting a remarkable track record of executing nearly 2000 successful projects across
                        esteemed platforms such as Fiverr and Upwork, our team's proficiency and dedication have solidified our reputation as a trusted
                        industry leader. Our comprehensive service portfolio encompasses a wide array of specialized solutions, including B2B lead
                        generation strategies tailored to foster robust business relationships, meticulous social media management techniques designed to
                        amplify brand visibility and engagement, proficient virtual assistant services ensuring operational efficiency, cutting-edge SEO
                        optimization tactics to enhance online visibility, strategic digital ad operations maximizing ROI, and bespoke website development
                        catering to unique business requirements. Whether you represent a local business aspiring to dominate your niche market or a global
                        enterprise with ambitions for widespread acclaim, Lead Giant's adept team collaboratively partners with you to devise and implement
                        bespoke digital strategies aligned with your distinct objectives, ultimately facilitating transformative growth and sustained success.
                        Partner with us, and let's synergize to elevate your brand to unparalleled digital prominence and prosperity.</p>
                    </div>
            </div>
            
             
           
        </div>

        <!-- Client Carousel
        ============================================= -->
        <div class="section bg-transparent m-0 border-bottom py-5">

            <div class="container">
                <h3>Our Valuable Clients</h3>
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
                    <h3 class="nott ls0 mb-3">Our Services</h3>
                 
                </div>
                <div class="row justify-content-between align-items-center">

                    <div class="col-lg-4 col-sm-6">

                        <div class="feature-box flex-md-row-reverse text-md-end border-0">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{ asset('frontend/demos/seo/images/icons/seo.svg') }}"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0" style="color:#65c0a3">DIGITAL AD-OPERATIONS</h3>
                                <p>Facebook, Instagram, Twitter,
                                    Google, Youtube, LinkedIn ad-
                                    operations with professional
                                    campaign management system.
                                </p>
                            </div>
                        </div>

                        <div class="feature-box flex-md-row-reverse text-md-end border-0 mt-5 ">
                            <div class="fbox-icon">
                                <a href="#"><img src="frontend/demos/seo/images/icons/adword.svg"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0" style="color:#76a9d4 ">CONTENT MANAGEMENT
                                </h3>
                                <p>Professional content management
                                    and content creation for social
                                    media management and ad
                                    operations</p>
                            </div>
                        </div>

                        <div class="feature-box flex-md-row-reverse text-md-end border-0 mt-5">
                            <div class="fbox-icon">
                                <a href="#"><img src="frontend/demos/seo/images/icons/analysis.svg"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0" style="color:#76a9d4 ">WEBSITE DEVELOPMENT</h3>
                                <p>Dynamic website and web
                                    applications development using
                                    powerful PHP-Laravel, React, Express
                                    and other powerful technologies.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-7 offset-3 offset-sm-0 d-sm-none d-lg-block center my-5 d-none">
                        <img src="521.png"  alt="iphone" class="rounded  parallax" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                    </div>

                    <div class="col-lg-4 col-sm-6">

                        <div class="feature-box border-0">
                            <div class="fbox-icon">
                                <a href="#"><img src="frontend/demos/seo/images/icons/social.svg"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0" style="color: #ed4d7b">LEAD GENERATION</h3>
                                <p>B2B Lead Generation, Sales Funnel,
                                    Prospect List building, Email list
                                    building, Sales Funnel, Social media
                                    ad funnel and other effective lead
                                    generation strategies
                                    
                                </p>
                            </div>
                        </div>

                        <div class="feature-box border-0 mt-5">
                            <div class="fbox-icon">
                                <a href="#"><img src="frontend/demos/seo/images/icons/experience.svg"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0 " style="color: #f1bb28" >VIRTUAL ASSISTANT</h3>
                                <p>Full on admin support including
                                    communication, data entry, web
                                    scrapping, contact list building,
                                    appointment setting and many
                                    more</p>
                            </div>
                        </div>

                        <div class="feature-box border-0 mt-5">
                            <div class="fbox-icon">
                                <a href="#"><img src="frontend/demos/seo/images/icons/content_marketing.svg"
                                        alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0" style="color:#65c0a3">DIGITAL MARKETING</h3>
                                <p>Email Marketing, SEO, Social Media
                                    Marketing and other digital marketing
                                    supports</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <hr />
        <div class="content-wrap  d-flex align-items-center" id="team">
            <div class="container clearfix">

                <div class="row justify-content-center gutter-50 col-mb-50">

                    <div class="col-xl-6 col-lg-8 text-center">
                        <h3 class="h1 fw-bold mb-3">Our Awesome Team</h3>
                    </div>

                    <div class="clear"></div>

                    <div class="col-sm-6 col-md-6 col-lg-3" >
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image ">
                                <img class="rounded-circle" style="height: 286px" src="team/2.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc p-3">
                                <div class="team-title pt-0"><h4>Fahad Husain Khan</h4><span class="fst-normal">Owner/President</span></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img class="rounded-circle" style="height: 286px" src="team/4.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc p-3">
                                <div class="team-title pt-0"><h4>Saddam Housain Khan</h4><span class="fst-normal">Head of growth and Planning</span></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img class="rounded-circle" style="height: 286px" src="team/2.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc p-3">
                                <div class="team-title pt-0"><h4>Rofikul Islam</h4><span class="fst-normal">Operations Manager</span></div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="team card shadow-sm border-0 h-shadow h-translatey-sm all-ts rounded-4 overflow-hidden">
                            <div class="team-image">
                                <img src="team/3.jpg" class="rounded-circle" style="height: 286px" alt="John Doe">
                            </div>
                            <div class="team-desc p-3">
                                <div class="team-title pt-0"><h4>Sharmita Jahan</h4><span class="fst-normal">Accounts Manager</span></div>
                                
                            </div>
                        </div>
                    </div>

                

                </div>
            </div>
        </div>
        <hr />


        <!-- Form Section
        ============================================= -->
     
        <div class="section m-0 "
            style="background: url({{ asset('quotes_picture.png') }}) no-repeat center center; background-size: cover; padding: 100px 0;">
           
            <div class="container" id="qt">
              
                <div class="row justify-content-between align-items-center">

                    <div class="col-md-4">
                        <div class="heading-block border-bottom-0 bottommargin-sm">
                            <div class="badge rounded-pill badge-default">Quotes</div>
                            <h3 class="nott ls0">Get your free Quote today</h3>
                        </div>
                        <p>Looking for a customized solution? You're just a step away! Fill out the form below with your details and requirements. Our team will review your request and get back to you with a tailored quote that fits your needs perfectly. We promise a quick response and a transparent pricing model. No hidden fees, no surprises – just the right solution at the right price. Let us help you make an informed decision. Get your quote now!</p>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                            
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <div class="">
                                    <div class=""></div>
                                    <form class="row mb-0" name="name" action="{{ url('contact/request/') }}"
                                        enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="col-12 form-group mb-3">
                                            <label for="template-contactform-name">Name:*</label>
                                            <input type="text" name="name" placeholder="your name"
                                                class="form-control input-sm required" value="" required >
                                        </div>
                                        <div class="col-12 form-group mb-3">
                                            <label for="template-contactform-email">Email Address:*</label>
                                            <input type="email" name="email" class="form-control input-sm " placeholder=" email address"
                                                value=""required>
                                        </div>
                                        <div class="col-12 form-group mb-3">
                                            <label for="template-contactform-email">Phone number:*</label>
                                            <input type="number" name="phone"
                                                class="form-control input-sm required" placeholder="phone number" value=""required>
                                        </div>
                                        <div class="col-12 form-group mb-4">
                                            <label for="template-contactform-website">Service Needed:*</label>
                                            <input type="text" name="value"
                                                class="form-control input-sm required" placeholder="service needed" value="">
                                        </div>

                                        <div class="col-12 form-group mb-0">
                                            <button style="background-color: #e34e31" class="button button-rounded rounded-pill w-100 nott ls0 m-0" type="submit"
                                                name="template-contactform-submit"  value="submit">Submit</button>
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
        @include('frontend.layouts.partial.latest_work')


       

        <!-- Testimonials
        ============================================= -->
        <div class="section mt-0"
            style="background: url('frontend/demos/seo/images/sections/3.jpg') no-repeat top center; background-size: cover; padding: 80px 0 70px;">
            <div class="container" id="testi">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge rounded-pill badge-default">Testimonials</div>
                    <h3 class="nott ls0">What our clients tell about us
                    </h3>
                </div>

                <div id="oc-testi" class="bg-white text-dark owl-carousel carousel-widget dark topmargin border-bottom border-top border-light" data-items-xl="3" data-items-lg="3" data-items-md="2" auto data-items-xs="1" data-pagi="false" data-loop="true" data-margin="0" data-autoplay="3000">

                    <div class="oc-item p-5 d-flex flex-column text-center">
                        <div class="testimonial bg-white text-dark">
                          
                            <div class="overflow-hidden ">
                                <p>They're quick! I wasn't expecting this to be delivered for another few days, but they
                                    got it to me within 12 hours</p>
                                <div class="testi-meta">
                                    anthonyg5457
                                    <span>United States</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="oc-item p-5 d-flex flex-column text-center ">
                        <div class="testimonial bg-white text-dark">
                           
                            <div style="overflow: auto; max-height: 200px;">
                                <p>explained the job in detail, a little back and forth was needed to ensure we both
                                    understood the task which Saddam had no problem with. list produced targets the
                                    exact area of interest, great job</p>
                                <div class="testi-meta">
                                    kevin8132
                                    <span>Ireland</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item p-5 d-flex flex-column text-center">
                        <div class="testimonial bg-white text-dark">
                          
                            <div style="overflow: auto; max-height: 200px;">
                                <p>Incredible service. Arrived Incredibly quickly (less than 24 hours) and the data is
                                    accurate and legitimate. Very Impressed to be honest. Thank you.</p>
                                <div class="testi-meta">
                                    alistairwesson
                                    <span>United Kingdom</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item p-5 d-flex flex-column text-center">
                        <div class="testimonial bg-white text-dark">
                          
                            <div style="overflow: auto; max-height: 200px;">
                                <p>I'm very surprised by the quality of the leads he sent me. The communication was
                                    clear and concise and he wasn't dishonest about anything in the end, he delivered a
                                    wrong file, but managed to re-send the correct one within 5 minutes. Very skilled
                                    Individual and once again, I'm impressed by leads quality. I will definitely order
                                    again! See less</p>
                                <div class="testi-meta">
                                    eavacinc
                                    <span>Croatia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item p-5 d-flex flex-column text-center">
                        <div class="testimonial bg-white text-dark">

                            <div style="overflow: auto; max-height: 200px;">
                                <p>Lead Giant always does an amazing job. Have bired about 10 times now. Best of the
                                    best will continue to hire thank you</p>
                                <div class="testi-meta">
                                    bizmane09
                                    <span>United States
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item  p-5 d-flex flex-column text-center">
                        <div class="testimonial bg-white text-dark">
                           
                            <div style="overflow: auto; max-height: 200px;">
                                <p>I work with Lead Giant on a frequent basis, they are incredible at their job! Highly
                                    recommended!!</p>
                                <div class="testi-meta">
                                    danrozansky
                                    <span>United States
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item p-5 d-flex flex-column text-center">
                        <div class="testimonial bg-white text-dark">

                            <div style="overflow: auto; max-height: 200px;">
                                <p>Excellent work. Great communication, fast delivery and high quality result. Really
                                    enjoy working with Lead Giant. Highly recommend.</p>
                                <div class="testi-meta">
                                    jd1423

                                    <span>United States
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item p-5 d-flex flex-column text-center">
                        <div class="testimonial bg-white text-dark">

                            <div style="overflow: auto; max-height: 200px;">
                                <p>Great communication and fast delivery of project. We always use Lead Giant as our go
                                    to guy for b2b lead information. They asks questions before committing to the
                                    project to ensure he delivers exactly what we need. Highly recommended.</p>
                                <div class="testi-meta">
                                    daniellewood3


                                    <span>United Kingdom

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item p-5 d-flex flex-column text-center">
                        <div class="testimonial bg-white text-dark">
                           
                            <div style="overflow: auto; max-height: 200px;">
                                <p>Lead Giant provided a very good product with excellent communication. They were very
                                    attentive to my needs. I am very happy with my product and will use them again</p>
                                <div class="testi-meta">
                                    danudutyjr


                                    <span>United States

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
    

    @include('frontend.layouts.partial.work_process')

        @include('frontend.layouts.partial.blogs')


</section><!-- #content end -->
