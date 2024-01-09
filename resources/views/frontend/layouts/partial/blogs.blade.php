
        <div class="container py-4">
            <div class="heading-block border-bottom-0 center">
              
                <h3 class="nott ls0">Recently From the Blog</h3>
            </div>

            <div class="row mt-5 clearfix">

                @foreach ($blogs as $blog )
              
                <div class="col-md-3">
                    <article class="entry">
                        <div class="entry-image mb-3">
                            <a href="{{route('blog.show',$blog->slug)}}">
                                <img style="width: 350px" src="{{$blog->blogPicture[0]->link}}" alt="Image 3"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="{{route('blog.show',$blog->slug)}}">{{$blog->title}}</a></h3>
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

                <div class="center ">
                    <a href="{{route('blog.index')}}" class="button button-large button-rounded rounded-pill text-capitalize ms-0 mt-5 ls0">View All Blog</a>
                </div>

              
            </div>

        </div>