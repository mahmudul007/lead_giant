@extends('frontend.layouts.app')
@section('title')
    Services
@endsection
@section('content')
    <!-- Page Title
                                          ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{{ $service->name }}</h1>

        </div>


    </section><!-- #page-title end -->

    <!-- Content
                                          ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="single-product">
                    <div class="product">
                        <div class="row gutter-40">

                            <div class="col-md-5">


                                <div class="product-image">
                                    <div>
                                        @if (!empty($service->servicePicture->link))
                                            <img src="{{ $service->servicePicture->link }}" alt="">
                                        @else
                                            <img src="{{ asset('frontend/images/properties/1.jfif') }}" alt="">
                                        @endif

                                    </div>
                                    <div class="sale-flash badge bg-danger p-2">Get service!</div>
                                </div><!-- Product Single - Gallery End -->

                            </div>

                            <div class="col-md-5 product-desc">


                                <div class="card border-0 p-3 shadow-lg" style="background-color: rgba(255,255,255,0.85)">
                                    <div class=" card-body" data-alert-type="inline">



                                        <form action={{ route('contact.request') }} method="post"
                                            class="row form-cleaning mb-0" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-process">
                                                <div class="form-cleaning-loader css3-spinner" style="position: absolute;">
                                                    <div class="css3-spinner-double-bounce1"></div>
                                                    <div class="css3-spinner-double-bounce2"></div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group form-group">
                                                    <span class="input-group-text bg-color text-white"><img
                                                            src="{{ asset('frontend/demos/cleaner/images/icons/cleaner2.svg') }}"
                                                            alt="" width="20"></span>
                                                    <select class="required form-select" name="cleaning_service">
                                                        <option value="{{ $service->name }}" disabled selected>{{ $service->name }}
                                                        </option>
                                                        <option value="Home Cleaning">Home Cleaning</option>
                                                        <option value="Office Cleaning">Office Cleaning</option>
                                                        <option value="Window Cleaning">Window Cleaning</option>
                                                        <option value="Garden Maintenance">Garden Maintenance</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group form-group">
                                                    <span class="input-group-text bg-color text-white"><i
                                                            class="icon-line2-map"></i></span>
                                                    <input type="text" name="location" class="form-control required"
                                                        value="" placeholder="Location"required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group form-group">
                                                    <span class="input-group-text bg-color text-white"><i
                                                            class="icon-line2-calendar"></i></span>
                                                    <input type="text"
                                                        class="form-control cleaning-date datetimepicker-input required"
                                                        name="clean_date" value="Select your Date & Time"required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group input-group">
                                                    <span class="input-group-text bg-color text-white"><i
                                                            class="icon-line2-layers"></i></span>
                                                    <input type="number" name="cleaning_area_sq_ft" min=""
                                                        class="form-control required" value=""
                                                        placeholder="Area (sqft.)"required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group form-group">
                                                    <span class="input-group-text bg-color text-white"><i
                                                            class="icon-line2-envelope-letter"></i></span>
                                                    <input type="email" name="email" class="form-control required"
                                                        value="" placeholder="Your Email"required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="input-group form-group">
                                                    <span class="input-group-text bg-color text-white"><i
                                                            class="icon-line2-call-out"></i></span>
                                                    <input type="text" name="contact_no" class="form-control required"
                                                        value="" placeholder="Contact Number"required>
                                                </div>
                                            </div>


                                            <input type="hidden" name="type" value=2>
                                            <input type="hidden" name="ref_id" value="{{ $service->id }}">


                                            <div class="col-12">
                                                <button type="submit" name="form-cleaning-submit"
                                                    class="btn btn-lg bg-color text-white fw-semibold w-100 mt-2">Book
                                                    Now</button>
                                            </div>

                                        </form>


                                    </div>
                                </div>

                                <hr>



                                <!-- Product Single - Meta
                                                 ============================================= -->
                                <div class="card product-meta">
                                    <div class="card-body">
                                        <span itemprop="productID" class="sku_wrapper">ID: <span
                                                class="sku">{{ $service->id }}</span></span>

                                    </div>
                                </div><!-- Product Single - Meta End -->




                            </div>

                            <div class="col-md-2">

                                <a href="#" title="Brand Logo" class="d-none d-md-block"><img
                                        src="{{ asset('spm.png') }}" alt="Brand Logo"></a>

                                <div class="divider divider-center"><i class="icon-circle-blank"></i></div>

                                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                    <div class="fbox-icon">
                                        <i class="icon-thumbs-up2"></i>
                                    </div>
                                    <div class="fbox-content fbox-content-sm">
                                        <h3>100% Original</h3>
                                        <p class="mt-0">We guarantee you the sale of Original Brands.</p>
                                    </div>
                                </div>

                                <div class="feature-box fbox-plain fbox-dark fbox-sm mt-4">
                                    <div class="fbox-icon">
                                        <i class="icon-credit-cards"></i>
                                    </div>
                                    <div class="fbox-content fbox-content-sm">
                                        <h3>Payment Options</h3>
                                        <p class="mt-0">We contact with you face to face</p>
                                    </div>
                                </div>





                            </div>

                            <div class="w-100"></div>



                        </div>
                    </div>
                </div>



                <div>
                    <div class="row">
                        <div class="col-12 mt-5 ">
                            <div class="tabs clearfix mb-0 p-2 " style="background-color: beige">

                                <h3>
                                    <span class=" d-md-inline-block"> Description</span>
                                </h3>
                                <div class="tab-container">

                                    <div class="tab-content clearfix">
                                        {!! $service->description !!}
                                    </div>
                                </div>

                            </div>
                            <hr>


                        </div>
                    </div>

                </div>
                <br><br>

                <div class="w-100">

                    <h4>More services</h4>

                    <div class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false"
                        data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">
                        @foreach ($services as $item)
                            <div class="oc-item">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="{{ route('service.show', $item->slug) }}">
                                            @if (!empty($item->servicePicture->link))
                                                <img src="{{ $item->servicePicture->link }}" alt="Why choose Us?">
                                            @else
                                                <img src="{{ asset('frontend/images/properties/2.jpg') }}"
                                                    alt="pic">
                                            @endif

                                        </a>



                                        <div class="badge bg-success p-2">Service!</div>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content align-items-end justify-content-between"
                                                data-hover-animate="fadeIn" data-hover-speed="400">
                                                <a href="{{ route('service.show', $item->slug) }}"
                                                    class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>

                                            </div>
                                            <div class="bg-overlay-bg bg-transparent"></div>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title">
                                            <h3><a href="{{ route('service.show', $item->slug) }}">{{ $item->name }}</a>
                                            </h3>
                                        </div>
                                        {{-- <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div> --}}

                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>

            </div>
        </div>
    </section><!-- #content end -->
@endsection
@section('script')
    <script>
        jQuery(document).ready(function() {

            jQuery('.cleaning-date').daterangepicker({
                "buttonClasses": "button button-rounded button-mini nott ls0 fw-semibold",
                "applyClass": "button-color m-0 ms-1",
                "cancelClass": "bg-danger m-0 text-light",
                singleDatePicker: true,
                startDate: moment().startOf('hour'),
                minDate: moment().startOf('date'),
                timePicker: true,
                timePickerSeconds: false,
                locale: {
                    format: 'DD/MM/YYYY h:mm a',
                },
                timePickerIncrement: 10
            });
        });
    </script>
@endsection
