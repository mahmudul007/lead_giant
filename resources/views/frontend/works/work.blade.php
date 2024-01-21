@extends('frontend.layouts.app')
@section('title')
    Blog
@endsection
@section('content')
    <section id="content">


        <div class="content-wrap pt-5" style="overflow: visible;">

            <div class="container">

                <div class="single-post mb-0">


                    <div class="entry">

                        <div class="row justify-content-center">
                            <div class="col-lg-6">

                                <div class="entry-title text-center">
                                    <h2>{{ $work->title }}</h2>
                                    <h6>{{ $work->category }}</h6>
                                </div><!-- .entry-title end -->
                            </div>
                        </div>



                        <div class="entry-image mt-5">
                            <a href="{{ $work->worksPicture[0]->link }}" data-lightbox="image"><img
                                    style="height: 100% ;width:100%" class="rounded"
                                    src="{{ $work->worksPicture[0]->link }}" alt="Blog Single"></a>
                        </div><!-- .entry-image end -->


                    </div><!-- .entry end -->
                    <hr>

                    <h3 class="mb-0 mt-2">Related Other works</h3>


                    <div id="portfolio" class="portfolio row grid-container gutter-20">
                        @foreach ($works as $work)
                            <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-icons pf-illustrations">
                                <div class="grid-inner">
                                    <div class="portfolio-image">
                                        <div class="thumbnail-container">
                                            <img src="{{ $work->worksPicture[0]->link }}" class="thumbnail"
                                                alt="Thumbnail Image 1">
                                        </div>
                                        <div id="largeImageContainer" style="display: none;">
                                            <span class="close-btn" onclick="closeLargeImage()">&times;</span>
                                            <img src="" id="largeImage" alt="Large Image">
                                        </div>
                                        <div id="largeImageContainer" style="display: none;">
                                            <img src="" id="largeImage" alt="Large Image">
                                        </div>
                                    </div>
                                    <div class="portfolio-desc">
                                        <span class="text-center">{{ $work->category }}</span>
                                        <h3 class="text-center">{{ $work->title }}</h3>


                                    </div>
                                </div>
                            </article>
                        @endforeach





                    </div>



                </div>
                <!-- Single Page Content -->
            </div>

        </div>

    </section><!-- #content end -->
@endsection
