@extends('frontend.layouts.app')
@section('title')
Cleaning service

@endsection
@section('content')
<div class="clear"></div>

<div  class="mt-4 mb-5  bg-white">

    <div class="container" >
        <div class="heading-block center mx-auto" style="max-width: 700px">
            <h2  >Our brands</h2>
            <span>We give this brands to our client</span>
        </div>
        <div class="container clearfix" >



            <div class="row col-mb-50">

                    @foreach ($brands as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                @if (!empty($item->servicePicture->link))
                                <img src="{{$item->servicePicture->link}}" alt="pic">

                                @else
                                <img src="frontend/images/brands/1.jpg" alt="pic">

                                @endif
                            </div>
                            <div class="fbox-content px-0">
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
</div>

@endsection
