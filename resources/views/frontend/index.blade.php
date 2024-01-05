@extends('frontend.layouts.app')
@section('title')
Home
@endsection
@section('content')
    <!-- Slider ============================================= -->

    @include('frontend.layouts.partial.slider')

    @include('frontend.layouts.partial.why_choose_us')
    {{-- @include('frontend.layouts.partial.faqs') --}}
    {{-- @include('frontend.layouts.partial.testimonials') --}}

    {{-- @include('frontend.layouts.partial.contact_us') --}}

@endsection
