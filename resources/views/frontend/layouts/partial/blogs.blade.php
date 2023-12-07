  <!-- Blogs
        ============================================= -->
        <div class="container py-4">
            <div class="heading-block border-bottom-0 center">
                <div class="badge rounded-pill badge-default">Latest Articles</div>
                <h3 class="nott ls0">Recently From the Blog</h3>
            </div>

            <div class="row mt-5 clearfix">

                @foreach ($blogs as $blog )
              
                <div class="col-md-4">
                    <article class="entry">
                        <div class="entry-image mb-3">
                            <a href="#"><img src="{{$blog->blogPicture[0]->link}}" alt="Image 3"></a>
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
                    </article>
                </div>
                @endforeach
               

              
            </div>

        </div>