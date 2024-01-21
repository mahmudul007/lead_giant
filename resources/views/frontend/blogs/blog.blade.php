@extends('frontend.layouts.app')
@section('title')
    Blog
@endsection
@section('content')
    <!-- Content
                                                              ============================================= -->
    <!-- Content
      ============================================= -->
    <section id="content">


        <div class="content-wrap pt-5" style="overflow: visible;">

            <div class="container">
                <!-- Single Page Content
         ============================================= -->
                <div class="single-post mb-0">

                    <!-- Single Post
          ============================================= -->
                    <div class="entry">

                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <!-- Entry Title
             ============================================= -->
                                <div class="entry-title">
                                    <div class="entry-categories"><a href="#">{{ $blog->category }}</a></div>
                                    <h2>{{ $blog->title }}</h2>
                                </div><!-- .entry-title end -->
                            </div>
                        </div>

                        <!-- Entry Meta
           ============================================= -->
                        <div class="d-flex justify-content-center mt-2">
                            <div class="entry-meta">
                                <ul>
                                    <li>{{ $blog->created_at->diffForHumans() }}</li>
                                    <li>By <a href="#">Admin</a></li>
                                </ul>
                            </div>
                        </div><!-- .entry-meta end -->

                        <!-- Entry Image
           ============================================= -->
                        <div class="entry-image mt-5">
                            <a href="demos/blog/images/single/hero-full.jpg" data-lightbox="image"><img
                                    style="height: 150px ;width:250px" class="rounded"
                                    src="{{ $blog->blogPicture[0]->link }}" alt="Blog Single"></a>
                        </div><!-- .entry-image end -->

                        <!-- Entry Content
           ============================================= -->
                        <div class="entry-content">

                            <div class="row">

                                <div class="col-lg-2 media-content" data-animate="fadeIn">
                                    <div class="entry-title text-start">
                                        <h4>{{ $blog->title }}</h4>
                                    </div>
                                  
                                </div>

                                <div class="col-lg-1"></div>

                                <div class="text-content col-lg-6">

                                    {!! $blog->blogtext !!}

                                    <div class="line"></div>




                                </div>
                                <!-- Post Single - Content End -->

                            </div>

                        </div>
                    </div><!-- .entry end -->

                    <h3 class="mb-0">Related Blogs</h3>

                    <div class="row posts-md">
                        @foreach ($blogs as $item)
                            <div class="col-lg-3 col-sm-6">
                                <article class="entry">
                                    <div class="entry-image">
                                        <a href="{{ route('blog.show', $blog->slug) }}"><img
                                                src="{{ $item->blogPicture[0]->link }}" alt="Image 3"></a>
                                    </div>
                                    <div class="entry-title title-sm text-start">
                                        <div class="entry-categories"><a
                                                href="demo-blog-categories.html">{{ $item->category }}</a></div>
                                        <h3><a
                                                href="{{ route('blog.show', $blog->slug) }}"class="color-underline stretched-link">{{ $item->title }}</a>
                                        </h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a
                                                    href="{{ route('blog.show', $blog->slug) }}">{{ $item->created_at->diffForHumans() }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                                <a href="{{ route('blog.show', $blog->slug) }}">read more</a>
                            </div>
                        @endforeach


                    </div>

                </div>
                <!-- Single Page Content -->
            </div>

        </div>

    </section><!-- #content end -->
@endsection
