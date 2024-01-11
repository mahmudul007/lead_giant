     <!-- Works/Projects
        ============================================= -->
        <div class="section m-0"
           >
            <div class="container">
                <div class="heading-block border-bottom-0 center">
                  
                    <h3 class="nott ls0">Previous Work Samples
                    </h3>
                </div>

                <div id="portfolio" class="portfolio row grid-container gutter-20">
                    @foreach ($works as $work)
                    <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-icons pf-illustrations">
                        <div class="grid-inner">
                            <div class="portfolio-image">
                                <img src="{{$work->worksPicture[0]->link}}" alt="Industrial Hub">
                               
                            </div>
                            <div class="portfolio-desc">
                                <span class="text-center">{{$work->category}}</span>
                                <h3 class="text-center">{{$work->title}}</h3>
                               
                              
                            </div>
                        </div>
                    </article>
                    @endforeach
                    <div class="center ">
                        <a href="{{route('work.index')}}" class="button button-large button-rounded rounded-pill text-capitalize ms-0 mt-5 ls0">View All work</a>
                    </div>
                   

                

                </div>


            </div>
        </div>