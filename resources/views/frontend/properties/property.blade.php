@extends('frontend.layouts.app')
@section('title')
    Property
@endsection
@section('content')
    <!-- Page Title
                                                          ============================================= -->
    <section id="page-title">
        @php
            $additional_info = json_decode($property->aditional_info);
        @endphp

        <div class="container clearfix">
            <h1>{{ $property->name }}</h1>

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
                                    <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                        <div class="flexslider">
                                            <div class="slider-wrap" data-lightbox="gallery">
                                                @foreach ($property->propertyPicture as $item)
                                                    <div class="slide" data-thumb="{{ $item->link }}">
                                                        <p title="Pink Printed Dress - Side View"
                                                            data-lightbox="gallery-item">

                                                            <img src="{{ $item->link }}" alt="Pink Printed Dress">
                                                        </p>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sale-flash badge bg-danger p-2">Sale!</div>
                                </div><!-- Product Single - Gallery End -->

                            </div>

                            <div class="col-md-4 ">

                                <div class="d-flex align-items-center justify-content-between">

                                    <div class="product-price">BDT <ins>{{ $property->price }}</ins> Total</div>
                                    <!-- Product Single - Price End -->



                                </div>
                                <hr>
                                <div class="card border-0 p-3 " style="background-color: rgba(255,255,255,0.85)">
                                    <div class=" card-body" data-alert-type="inline">
                                        <form action="{{ route('contact.request') }}" enctype="multipart/form-data"
                                            method="post" class="row form-cleaning mb-0" >
                                            @csrf
                                            <div class="col-sm-12">
                                                <div class="input-group form-group">
                                                    <span class="input-group-text bg-color text-white"><i
                                                            class="icon-line2-envelope-letter"></i></span>
                                                    <input type="email" name="email" id="email"
                                                        class="form-control required" value=""
                                                        placeholder="Your Email" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="input-group form-group">
                                                    <span class="input-group-text bg-color text-white"><i
                                                            class="icon-line2-bubbles"></i></span>
                                                    <input type="text" name="property_requester_name"
                                                        id="property_requester_name" class="form-control required"
                                                        value="" placeholder="Your Name" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="input-group form-group">
                                                    <span class="input-group-text bg-color text-white"><i
                                                            class="icon-line2-call-out"></i></span>
                                                    <input type="text" name="contact_no" id="contact_no"
                                                        class="form-control required" value=""
                                                        placeholder="Contact Number" required>
                                                </div>
                                            </div>
                                            <div class="form-floating">
                                                <textarea name="property_description_msg" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                                    style="height: 100px">I am interested on {{ $property->name }}</textarea>

                                            </div>


                                            <input type="hidden" name="ref_id" value="{{ $property->id }}">
                                            <input type="hidden" name="type" value="1">


                                            <div class="col-12">
                                                <button type="submit" name="form-cleaning-submit"
                                                    class="btn btn-lg bg-color text-white fw-semibold w-100 mt-2">Contact
                                                    Now</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>



                                <hr>



                                <!-- Product Single - Meta  ============================================= -->
                                <div class="card product-meta">
                                    <div class="card-body">
                                        <span itemprop="productID" class="sku_wrapper badge bg-warning text-dark fs-6 rounded-pill">ID: <span
                                                class="sku ">
                                               {{ $property->id }}

                                              </span></span>
                                        <span itemprop="productID" class="sku_wrapper"><span class="sku">
                                                @if ($additional_info->residential)
                                                    <span class="badge bg-info text-dark fs-6 rounded-pill">Residential
                                                     </span>
                                                @endif
                                                @if ($additional_info->commercial)
                                                    <span class="badge bg-success text-white fs-6 rounded-pill">Commercial
                                                     </span>
                                                @endif
                                                @if ($additional_info->new ==1)
                                                    <span class="badge bg-primary text-white fs-6 rounded-pill">New
                                                     </span>
                                                     @else
                                                     <span class="badge bg-warning text-white fs-6 rounded-pill">Used
                                                    </span>
                                                @endif
                                            </span></span>

                                    </div>
                                </div>
                                <!-- Product Single - Meta End -->




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
                                        <p class="mt-0">We guarantee you the sale of Original Property.</p>
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

                <hr>
                <div>

                    <div class="row">
                        <div class="col-12 mt-5  ">
                            <div class="tab-content clearfix  p-2 ">

                                <div class="card-body p-2" style="background-color: beige">
                                    <h3><span class=" d-md-inline-block"> Additional Information</span></h3>
                                    <div class="row  text-center">
                                        @if ($additional_info->bedroom)
                                            <div class="col-lg-4"><span
                                                    class="border py-2 mt-1 bg-light d-block mb-2 mb-lg-0">
                                                    <span class="icon-bed"></span> {{ $additional_info->bedroom }} Bedroom
                                                </span></div>
                                        @endif
                                        @if ($additional_info->attached_bath)
                                            <div class="col-lg-4"><span
                                                    class="border py-2 mt-1 bg-light d-block mb-2 mb-lg-0">
                                                    <span class="icon-bath"></span>
                                                    <span class="author-number">{{ $additional_info->attached_bath }}
                                                        Attached Bath</span>
                                                </span></div>
                                        @endif
                                        @if ($additional_info->common_bath)
                                            <div class="col-lg-4"><span class="border py-2 mt-1 bg-light d-block"><span
                                                        class="icon-shower"></span>
                                                    <span class="author-number">{{ $additional_info->common_bath }} common
                                                        bath</span></span></div>
                                        @endif
                                        @if ($additional_info->floor)
                                            <div class="col-lg-4"><span
                                                    class="border py-2 mt-1 bg-light d-block mb-2 mb-lg-0"> <span
                                                        class="icon-building"></span>
                                                    <span class="author-number">{{ $additional_info->floor }}
                                                        Floor</span></span></div>
                                        @endif



                                        @if ($additional_info->sq_ft)
                                            <div class="col-lg-4"><span
                                                    class="border py-2 mt-1 bg-light d-block mb-2 mb-lg-0">
                                                    <span class="icon-ruler-combined"></span>
                                                    <span class="author-number">{{ $additional_info->sq_ft }} Sq.ft</span>

                                                </span></div>
                                        @endif
                                        @if ($additional_info->dining_space)
                                            <div class="col-lg-4"><span class="border py-2 mt-1 bg-light d-block"> <span
                                                        class="icon-utensils"></span>
                                                    <span class="author-number">{{ $additional_info->dining_space }}Dining
                                                        Space</span></span></div>
                                        @endif
                                        @if ($additional_info->living_room)
                                            <div class="col-lg-4"><span class="border py-2 mt-1 bg-light d-block"> <span
                                                        class="icon-realestate-chair"></span>
                                                    <span class="author-number">{{ $additional_info->living_room }}Living
                                                        room</span></span></div>
                                        @endif
                                        @if ($additional_info->balconies)
                                            <div class="col-lg-4"><span class="border py-2 mt-1 bg-light d-block"> <span
                                                        class="icon-realestate-door"></span>
                                                    <span class="author-number">{{ $additional_info->balconies }}
                                                        Belcony</span></span></div>
                                        @endif


                                    </div>
                                </div>
                            </div>


                            <hr>



                            <div class="tabs clearfix mb-0   " style="background-color: beige">

                                <h3>
                                    <span class=" d-md-inline-block ms-4 mt-3"> Description</span>
                                </h3>
                                <div class="tab-container">

                                    <div class="tab-content clearfix p-2">
                                        {!! $property->description !!}
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="tabs clearfix mb-0 p-2"style="background-color: beige">
                                @php
                                    $benifit = json_decode($property->benifits);
                                    $separator = '_';

                                @endphp

                                <h3><span class="d-md-inline-block"> Benifits</span></h3>
                                <div class="tab-container">

                                    <div class="tab-content clearfix">
                                        <div class="row  text-center">

                                            @foreach ($benifit as $key => $item)
                                                @if (!is_null($item))
                                                    <div class="col-lg-4"><span class="border py-2 mt-1 bg-light d-block">
                                                            <span class="icon-line-circle-check text-primary"></span>
                                                            <span class="author-number">
                                                                {{ strtoupper(str_replace($separator, ' ', $key)) }}</span></span>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>


                                    </div>



                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <br><br>

                <div class="w-100">

                    <h4>More blogs</h4>

                    <div class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false"
                        data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">
                        @foreach ($blogs as $item)
                            @php
                                $first_image = $item->propertyPicture[0];
                            @endphp

                            <div class="oc-item">
                                <div class="product">
                                    <div class="product-image">
                                        <img src="{{ $first_image->link }}" alt="Checked Short Dress">

                                        <div class="badge bg-danger p-2"> buy </div>
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content align-items-end justify-content-between"
                                                data-hover-animate="fadeIn" data-hover-speed="400">
                                                <a href="{{ route('property.show', $item->slug) }}"
                                                    class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>

                                            </div>
                                            <div class="bg-overlay-bg bg-transparent"></div>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title">
                                            <h3><a
                                                    href="{{ route('property.show', $item->slug) }}">{{ $item->name }}</a>
                                            </h3>
                                        </div>
                                        <hr>
                                        <div class="product-price">Est. price <ins>{{ $item->price }}/-Bdt</ins></div>

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
