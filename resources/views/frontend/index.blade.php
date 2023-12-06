@extends('frontend.layouts.app')
@section('title')
Home
@endsection
@section('content')
    <!-- Slider ============================================= -->

    @include('frontend.layouts.partial.slider')
    <!-- #slider end -->

    {{-- @include('frontend.layouts.partial.property_brands') --}}



    {{-- @include('frontend.layouts.partial.how_we_work_cleaning') --}}
    {{-- @include('frontend.layouts.partial.cleaning_brands') --}}


    {{-- @include('frontend.layouts.partial.shine_and_sparkel') --}}
    @include('frontend.layouts.partial.why_choose_us')

    {{-- @include('frontend.layouts.partial.testimonials') --}}

    @include('frontend.layouts.partial.contact_us')
@endsection
