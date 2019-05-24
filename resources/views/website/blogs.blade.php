@extends('layouts.main')

@section('css')
    
@endsection

@section('pageContentTag')
<div id="pageContent">
@endsection

@section('content')
<!-- Breadcrumb section -->
<section class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb--wd pull-left">
			<li><a href="index.html">Home</a></li>
			<li class="active">Blog</li>
		</ol>
	</div>
</section>
<!-- Content section -->
<section class="content">
	<div class="container">
		<h1 class="text-center">Blog <span class="color-alt">Posts</span></h1>
		<div class="divider-sm"></div>
		<div class="blog-isotope" id="blogGallery">
			<div class="blog-post">
				<div class="post-image">
					<a href="{{ route('blogs.show', rand(1,50)) }}"><img src="{{ asset('html/images/blog/blog-post-img-card-1.jpg') }}" alt=""></a>
				</div>
				<div class="post-content">
					<div class="post-author">by Adam Smith</div>
					<div class="post-meta"><i class="icon icon-speech"></i><span>12</span></div>
					<div class="post-date"><span class="day">10</span><span class="month">sept</span></div>
					<h3 class="post-title"><a href="#">Commercial Renovation No Problem with Certified Electrician</a></h3>
					<div class="post-teaser">
						<p>If you are interested in purchasing an old building for commercial use or maybe your business is in an old building that...</p>
					</div>
				</div>
			</div>
			<div class="blog-post">
				<div class="post-image">
					<div class="post-video">
						<iframe src="https://player.vimeo.com/video/103180506"></iframe>
					</div>
				</div>
				<div class="post-content">
					<div class="post-author">by Adam Smith</div>
					<div class="post-meta"><i class="icon icon-speech"></i><span>12</span></div>
					<div class="post-date"><span class="day">18</span><span class="month">sept</span></div>
					<h3 class="post-title"><a href="#">Commercial Renovation No Problem with Certified Electrician</a></h3>
					<div class="post-teaser">
						<p>Decorating your home and the outdoors is an extremely popular activity starting in about October. October and fall weather tends to be very wet. </p>
					</div>
				</div>
			</div>

			<div class="blog-post">

				<div class="post-image">
					<a href="{{ route('blogs.show', rand(1,50)) }}"><img src="{{ asset('html/images/blog/blog-post-img-card-4.jpg') }}" alt="">
						<div class="post-quote">
							<div class="vert-wrap">
								<div class="vert">
									<p>I love my new heaters. I should have done this years ago. The installation was done professionally and in the time frame allotted. It was a great experience.</p>
									<div class="quote-author">Michael M. Soderquist</div>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="post-content">
					<div class="post-author">by Adam Smith</div>
					<div class="post-meta"><i class="icon icon-speech"></i><span>12</span></div>
					<div class="post-date"><span class="day">11</span><span class="month">sept</span></div>
					<h3 class="post-title"><a href="#">Don’t get shocked! Install GFCIs…  make sure they work.</a></h3>
					<div class="post-teaser">
						<p>For decades, ground fault circuit interrupters (GFCIs) have saved thousands of lives and have helped significantly reduce the number of home electrocutions by about fifty percent.</p>
					</div>
				</div>
			</div>
			<div class="blog-post">
				<div class="post-image">
					<div class="post-carousel">
						<a href="#"><img src="{{ asset('html/images/blog/blog-post-img-card-2.jpg') }}" alt=""></a>
						<a href="#"><img src="{{ asset('html/images/blog/blog-post-img-card-2-1.jpg') }}" alt=""></a>
						<a href="#"><img src="{{ asset('html/images/blog/blog-post-img-card-2-2.jpg') }}" alt=""></a>
					</div>
				</div>
				<div class="post-content">
					<div class="post-author">by Adam Smith</div>
					<div class="post-meta"><i class="icon icon-speech"></i><span>12</span></div>
					<div class="post-date"><span class="day">25</span><span class="month">sept</span></div>
					<h3 class="post-title"><a href="#">Commercial Renovation No Problem with Certified Electrician</a></h3>
					<div class="post-teaser">
						<p>If you are interested in purchasing an old building for commercial use or maybe your business is in an old building that needs a serious upgrade, you will need a specialized crew of professionals to make it happen. </p>
					</div>
				</div>
			</div>


			<div class="blog-post">
				<div class="post-image">
					<a href="{{ route('blogs.show', rand(1,50)) }}"><img src="{{ asset('html/images/blog/blog-post-img-card-3.jpg') }}" alt=""></a>
					<div class="post-link-wrapper">
						<div class="vert-wrap">
							<div class="vert">
								<a href="#" class="post-link">http://electricianservicelink.com</a>
							</div>
						</div>
					</div>
				</div>
				<div class="post-content">
					<div class="post-author">by Adam Smith</div>
					<div class="post-meta"><i class="icon icon-speech"></i><span>12</span></div>
					<div class="post-date"><span class="day">14</span><span class="month">sept</span></div>
					<h3 class="post-title"><a href="#">Commercial Renovation No Problem with Certified Electrician</a></h3>
					<div class="post-teaser">
						<p>Decorating your home and the outdoors is an extremely popular activity starting in about October. October and fall weather tends to be very wet. </p>
					</div>
				</div>
			</div>
			<div class="blog-post">
				<div class="post-image bg">
					<div class="post-music">
						<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/40347410&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
					</div>
				</div>
				<div class="post-content">
					<div class="post-author">by Adam Smith</div>
					<div class="post-meta"><i class="icon icon-speech"></i><span>12</span></div>
					<div class="post-date"><span class="day">4</span><span class="month">sept</span></div>
					<h3 class="post-title"><a href="#">Don’t get shocked! Install GFCIs…  make sure they work.</a></h3>
					<div class="post-teaser">
						<p>For decades, ground fault circuit interrupters (GFCIs) have saved thousands of lives and have helped significantly reduce the number of home electrocutions by about fifty percent.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="text-center"><a class="btn btn-border view-more-post" data-load="post-more-ajax.txt"><i class="icon icon-lightning"></i>More Posts</a></div>
	<div id="postPreload"></div>
	<div class="divider"></div>
</section>
@endsection

@section('js')
    
@endsection