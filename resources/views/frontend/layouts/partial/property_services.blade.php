  <!-- Content  ============================================= -->
  <div class="section topmargin-lg parallax"
  style="padding: 80px 0 60px; background-image: url('frontend/demos/course/images/icon-pattern.jpg'); background-size: auto; background-repeat: repeat"
  data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -500px;"
  id="section-about">

  <!-- Wave Shape Divider
  ============================================= -->
  <div class="wave-top"
      style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('frontend/demos/course/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x;">
  </div>

  <div class="container">

      <div class="heading-block border-bottom-0 mb-5 center">
          <h3>Exclusive Property </h3>
          <span class="text-primary">Discover your dream home in this exquisite real estate property. Situated in a sought-after neighborhood,
          this charming residence offers a perfect blend of modern elegance and timeless appeal. </span>
      </div>

      <div class="clear"></div>

      <div class="row mt-2">


          <!-- Course 1
          ============================================= -->
          @foreach ($property as $item)
          <div class="col-md-6  col-xl-4 mb-5 slideInUp animated" data-animate="slideInUp">
            <div class="card course-card hover-effect border-0">
                @php
                    $first_image= $item->propertyPicture[0];

                @endphp
                @if ( !is_null($first_image))
                <a href="{{route('property.show',$item->slug)}}"><img class="card-img-top "
                    src="{{    $first_image->link}}" alt="Card image cap"></a>
                @else
                <a href="{{route('property.show',$item->slug)}}"><img class="card-img-top "
                    src="{{asset('frontend/images/brands/1.jpg')}}" alt="Card image cap"></a>
                @endif

                <div class="card-body">
                    <h4 class="card-title fw-bold mb-2"><a href="{{route('property.show',$item->slug)}}">{{$item->name}}</a></h4>
                    <p class="mb-3 card-title-sub text-uppercase fw-normal ls1"><a href="#"
                            class="text-black-50">{{$item->location}}</a></p>



                </div>
                @php
                   $add_info=json_decode($item->aditional_info);

                @endphp
                <div
                    class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                    <div class="badge bg-primary">
                        @if (!is_null($item->price))
                        {{$item->price}}/-Bdt
                        @else
                        N/A
                        @endif


                    </div>
                    <a href="#" class="text-dark position-relative"><i class="icon-bed"></i>
                        <span class="author-number">
                            @if (!is_null( $add_info->bedroom))
                            {{ $add_info->bedroom}}Bed
                            @else
                            N/E
                            @endif



                        </span> </a>
                    <a href="#" class="text-dark position-relative"><i class="icon-bath"></i>

                        <span class="author-number">
                            @if (!is_null(( $add_info->common_bath)||($add_info->attached_bath) ))
                            {{ $add_info->common_bath + $add_info->attached_bath}} Bath
                            @else
                            N/E
                            @endif



                        </span></a>
                    <a href="#" class="text-dark position-relative"><i
                            class="icon-ruler-combined"></i>
                        <span class="author-number">
                            @if (!is_null( $add_info->sq_ft))
                            {{ $add_info->sq_ft}}  Sq.ft
                            @else
                            N/E
                            @endif</span></a>
                </div>
            </div>
        </div>
          @endforeach


      </div>
      <div class="text-center">
        <a href="{{route('property.index')}}"><div class="btn btn-success ">View All</div></a>
      </div>

  </div>

  <!-- Wave Shape Divider - Bottom
  ============================================= -->
  <div class="wave-bottom"
      style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('frontend/demos/course/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);">
  </div>
</div>
<!-- Slider
