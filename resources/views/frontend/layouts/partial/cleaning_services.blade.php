<div class="clear"></div>

<div id="section-price" class="section mb-0 topmargin-lg bg-white"
    style="padding-bottom: 10px; overflow: visible"
    data-scrollto-settings="{&quot;offset&quot;:60,&quot;speed&quot;:1250,&quot;easing&quot;:&quot;easeOutQuad&quot;}">

    <div class="container" >
        <div class="heading-block center mx-auto" style="max-width: 700px">
            <h2 id="services" class=" nott ls0">Our Services</h2>
            <span class="text-primary">We give this  services to our client </span>
        </div>
        <div class="container clearfix" >



            <div class="row col-mb-50">
                @foreach ($service as $item)
                <div class="col-md-6 col-lg-4"  >
                    <div class="feature-box media-box">
                        <div class="fbox-media">
                            @if (!empty($item->servicePicture->link))
                            <img   src="{{$item->servicePicture->link}}" alt="services">

                            @else
                            <img src="{{asset('frontend/images/services/1.jpg')}}" alt="Why choose Us?">

                            @endif
                        </div>
                        <div class="fbox-content px-0" >
                            <h3> <a  href="{{route('service.show',$item->slug)}}"> {{ $item->name}}</h3>
                            <p>{{ $item->short_description}}</p>
                             <a href="{{route('service.show',$item->slug)}}"> <div class="btn btn-success" > Readmore</div></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>

    </div>

    <div class="text-center" style="position: relative;
    z-index: 9999;">
        <a class="btn btn-primary" href="{{route('service.index')}}"> View more</a>
      </div>
</div>

@section('script')


<script>jQuery(document).ready(function() {

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
