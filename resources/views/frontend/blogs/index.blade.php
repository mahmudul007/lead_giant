@extends('frontend.layouts.app')
@section('title')
blogs

@endsection
@section('content')
  <!-- Content  ============================================= -->
  <div class="section topmargin-lg parallax"
  
  data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -500px;"
  id="section-about">

  <!-- Wave Shape Divider
  ============================================= -->
  <div class="wave-top"
      style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('frontend/demos/course/images/wave-3.svg'); height: 12px; z-index: 2; background-repeat: repeat-x;">
  </div>

  <div class="container">


      <div class="clear"></div>



          <!-- Course 1
          ============================================= -->
          <div class="row mt-2">

            <!-- Course 1
            ============================================= -->
            <div class="container py-4">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge rounded-pill badge-default">Latest Articles</div>
                    <h3 class="nott ls0">Recently From the Blog</h3>
                </div>
    
                <div class="row mt-5 clearfix">
    
                    @foreach ($blogs as $blog )
                  
                    <div class="col-md-3">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img style="width: 350px" src="{{$blog->blogPicture[0]->link}}" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">{{$blog->title}}</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-line2-user"></i><a href="#"> Admin</a></li>
                                    <li><i class="icon-calendar-times1"></i><a href="#"> {{$blog->created_at->diffForHumans()}}</a></li>
                                </ul>
                            </div>
                            <div class="entry-content clearfix" style=" max-height: 300px;  overflow:hidden">
                                <p>{!!$blog->blogtext!!}</p>
                            </div>
                            <a href="{{route('blog.show',$blog->slug)}}">read more</a>
                        </article>
                    </div>
                    @endforeach
    
                   
    
                  
                </div>
    
            </div>


        </div>
  
  </div>


</div>
<!-- Slider

@endsection
