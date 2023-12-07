@extends('frontend.layouts.app')
@section('title')
   Blog
@endsection
@section('content')
    {{-- <!-- Page Title
                                                          ============================================= -->
    <section id="page-title">
        @php
            $additional_info = json_decode($property->aditional_info);
        @endphp

        <div class="container clearfix">
            <h1>{{ $property->name }}</h1>

        </div>

    </section><!-- #page-title end --> --}}

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
										<div class="entry-categories"><a href="demo-blog-categories.html">Coronavirus Update - World</a></div>
										<h2>All online Conferences to save your box, get Inspired and Stay Connected</h2>
									</div><!-- .entry-title end -->
								</div>
							</div>

							<!-- Entry Meta
							============================================= -->
							<div class="d-flex justify-content-center mt-2">
								<div class="entry-meta">
									<ul>
										<li>10th July 2014</li>
										<li>By <a href="#">SemiColonWeb</a></li>
									</ul>
								</div>
							</div><!-- .entry-meta end -->

							<!-- Entry Image
							============================================= -->
							<div class="entry-image mt-5">
								<a href="demos/blog/images/single/hero-full.jpg" data-lightbox="image"><img class="rounded" src="demos/blog/images/single/hero.jpg" alt="Blog Single"></a>
							</div><!-- .entry-image end -->

							<!-- Entry Content
							============================================= -->
							<div class="entry-content">

								<div class="row">

									<div class="col-lg-2 media-content" data-animate="fadeIn">
										<div class="entry-title text-start">
											<h4>All online Conferences to save your box, get Inspired and Stay Connected</h4>
										</div>
										<!-- Post Single - Share
										============================================= -->
										<div>
											<h5 class="mb-2">Share this Post:</h5>
											<div>
												<a href="#" class="social-icon si-small si-rounded si-colored si-facebook">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="#" class="social-icon si-small si-rounded si-colored ms-1 si-twitter">
													<i class="icon-twitter"></i>
													<i class="icon-twitter"></i>
												</a>
												<a href="#" class="social-icon si-small si-rounded si-colored ms-1 si-pinterest">
													<i class="icon-pinterest"></i>
													<i class="icon-pinterest"></i>
												</a>
												<a href="#" class="social-icon si-small si-rounded si-colored ms-1 si-rss">
													<i class="icon-rss"></i>
													<i class="icon-rss"></i>
												</a>
											</div>
										</div><!-- Post Single - Share End -->
									</div>

									<div class="col-lg-1"></div>

									<div class="text-content col-lg-6">

										<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p><br>

										<h3>1. Content</h3>
										In this cheat sheet, we will go over the following:
										<ol class="list-numbers">
											<li>Anatomy</li>
											<li>Dropdown types and variations</li>
											<li>Dropdown styles</li>
											<li>Dropdown states</li>
											<li>What the placeholder should say</li>
											<li>When not to use a dropdown (and when to)</li>
											<li>Native dropdowns</li>
											<li>Accessibility checklist</li>
											<li>Closing thoughts</li>
										</ol>

										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>

										<blockquote><p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p></blockquote><br>

										<h3>2. Anatomy</h3>

										<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>

										<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. <a href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

										<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p><br>

										<h3>3. Standard Solution</h3>
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>

										<div class="row mb-4" data-lightbox="gallery">
											<div class="col-md-6">
												<a href="demos/blog/images/single/1-full.jpg" data-lightbox="gallery-item"><img class="rounded" src="demos/blog/images/single/1.jpg" alt="Alt Images"></a>
											</div>
											<div class="col-md-6">
												<a href="demos/blog/images/single/2-full.jpg" data-lightbox="gallery-item"><img class="rounded" src="demos/blog/images/single/2.jpg" alt="Alt Images"></a>
											</div>
										</div>
										<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>

										<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. <a href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

										<div class="line"></div>

										<!-- Tag Cloud
										============================================= -->
										<div class="tagcloud">
											<h4>Related Tags</h4>
											<a href="#">general</a>
											<a href="#">information</a>
											<a href="#">media</a>
											<a href="#">press</a>
											<a href="#">gallery</a>
											<a href="#">illustration</a>
										</div><!-- .tagcloud end -->

										<div class="clear"></div>

										
									</div>
									<!-- Post Single - Content End -->

								</div>

							</div>
						</div><!-- .entry end -->

						<h3 class="mb-0">Related Posts</h3>

						<div class="row posts-md">
							<div class="col-lg-3 col-sm-6">
								<article class="entry">
									<div class="entry-image">
										<a href="#"><img src="demos/blog/images/video-thumbs/1.jpg" alt="Image 3"></a>
									</div>
									<div class="entry-title title-sm text-start">
										<div class="entry-categories"><a href="demo-blog-categories.html">Travel</a></div>
										<h3><a href="#" class="color-underline stretched-link">The Best Destinations in Asia for Solo Travel</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li><a href="#">Mar 11, 2016</a></li>
										</ul>
									</div>
								</article>
							</div>
							<div class="col-lg-3 col-sm-6">
								<article class="entry">
									<div class="entry-image">
										<a href="#"><img src="demos/blog/images/video-thumbs/2.jpg" alt="Image 3"></a>
									</div>
									<div class="entry-title title-sm text-start">
										<div class="entry-categories"><a href="demo-blog-categories.html">Fashion</a></div>
										<h3><a href="#" class="color-underline stretched-link">10 Trendy Fashion Instagram Profile You Need to Follow</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li><a href="#">Mar 11, 2016</a></li>
										</ul>
									</div>
								</article>
							</div>
							<div class="col-lg-3 col-sm-6">
								<article class="entry">
									<div class="entry-image">
										<a href="#"><img src="demos/blog/images/video-thumbs/3.jpg" alt="Image 3"></a>
									</div>
									<div class="entry-title title-sm text-start">
										<div class="entry-categories"><a href="demo-blog-categories.html">Travel</a></div>
										<h3><a href="#" class="color-underline stretched-link">23 Top Travel Bloggers Who Inspire Us To Travel</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li><a href="#">Mar 11, 2016</a></li>
										</ul>
									</div>
								</article>
							</div>

							<div class="col-lg-3 col-sm-6">
								<article class="entry">
									<div class="entry-image">
										<a href="#"><img src="demos/blog/images/video-thumbs/4.jpg" alt="Image 3"></a>
									</div>
									<div class="entry-title title-sm text-start">
										<div class="entry-categories"><a href="demo-blog-categories.html">Travel</a></div>
										<h3><a href="#" class="color-underline stretched-link">23 Top Travel Bloggers Who Inspire Us To Travel</a></h3>
									</div>
									<div class="entry-meta">
										<ul>
											<li><a href="#">Mar 11, 2016</a></li>
										</ul>
									</div>
								</article>
							</div>
						</div>

					</div>
					<!-- Single Page Content -->
				</div>

			</div>

		</section><!-- #content end -->
@endsection
