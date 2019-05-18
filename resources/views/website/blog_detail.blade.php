@extends('layouts.main')

@section('css')
    
@endsection

@section('pageContentTag')
<div id="pageContent">
@endsection

@section('content')
<!-- Content  -->
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
			<div class="row">
				<div class="col-md-9 column-center">
					<div class="blog-post single">
						<div class="post-image">
							<a href="blog-single.html"><img src="{{ asset('html/images/blog/blog-post-single.jpg') }}" alt=""></a>
							<div class="post-image-over"></div>
						</div>

						<div class="post-content">
							<h2 class="post-title">Commercial Renovation No Problem with Certified Electrician</h2>
							<div class="post-date"><span class="day">10</span><span class="month">April</span></div>
							<div class="post-author">by Adam Smith</div>
							<div class="post-meta"><i class="icon icon-speech"></i><span>12</span></div>
							<div class="post-teaser">
								<p>If you are interested in purchasing an old building for commercial use or maybe your business is in an old building that needs a serious upgrade, you will need a specialized crew of professionals to make it happen.
								</p>
								<blockquote>
									<p>Commercial projects require a different set of skills and talents than the standard residential projects. Everything is on a much bigger scale, including the wiring and electrical needs. For this reason, it is absolutely critical you hire an electrical team that has experience and training to work on commercial projects. A certified electrician on your job ensures everything will be done right and up to code, which means your renovation or upgrade will chug along according to your schedule. The team at The Electric Connection has the commercial experience you want and need.</p>
									<div class="quote-author">– Michael M. Soderquist</div>
								</blockquote>
								<p>It is always best to bring the electrician in at the very beginning of a restoration project. This allows the professional to provide valuable insight and input as to where the wiring needs to be as well as the best type of materials to use for a commercial project. Bringing in the certified professional early on also makes the scheduling of the project much easier. You won’t have to worry about down days or redoing certain areas because the wiring wasn’t put in first. The construction team needs to work together and that means everyone needs to be involved from the get go.</p>
								</p>

								<p>The planning phase is an excellent time to discuss all of the commercial lighting options and various upgrades that can be put in place throughout the building. It is important these are thought about beforehand to make sure the project runs smoothly. Projects that are delayed or run into various hiccups can cost more money and end up pushing back opening dates. Give The Electric Connection a call today and talk with one of our professionals about your commercial building renovation.</p>
								<ul class="tags-list">
									<li><a href="#">Electrical</a></li>
									<li><a href="#">Heating</a></li>
									<li><a href="#">Install</a></li>
								</ul>
							</div>
						</div>

					</div>
					<h3 class="dark">Comments</h3>
					<div class="comments">

						<div class="comment">
							<div class="userpic"><span class="icon icon-technology"></span></div>
							<div class="text">
								<div class="meta"><span class="author"><i>by Adam Smith</i></span> | <span class="date">10 Sept 2016 </span> <a href="#">Reply</a></div>
								<p>The planning phase is an excellent time to discuss all of the commercial lighting options and various upgrades that can be put in place throughout the building. </p>
							</div>
						</div>
						<div class="comment replay">
							<div class="userpic"><span class="icon icon-technology"></span></div>
							<div class="text">
								<div class="meta"><span class="author"><i>by Adam Smith</i></span> | <span class="date">10 Sept 2016 </span> <a href="#">Reply</a></div>
								<p>It is always best to bring the electrician in at the very beginning of a restoration project. This allows the professional to provide valuable insight and input as to where the wiring needs to be as well as the best type of materials to use for a commercial project. </p>
							</div>
						</div>
					</div>
					<div class="divider-md"></div>
					<h3 class="dark">Leave a Comment</h3>
					<div class="divider divider-sm"></div>
					<form id="commentForm" class="contact-form comment-form" name="commentform" method="post" novalidate="novalidate">
						<div class="inputs-col">
							<div class="row">
								<div class="col-md-6">
									<div class="input-wrapper">
										<label>Name <span class="required">*</span></label>
										<input type="text" class="input-custom input-full" name="name" placeholder="Your name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-wrapper">
										<label>Email</label>
										<input type="text" class="input-custom input-full" name="email" placeholder="xxxx@xxxx.xxx">
									</div>
								</div>
							</div>
						</div>
						<div>
							<label>Message</label>
							<textarea class="textarea-custom input-full" name="message"></textarea>
						</div>
						<button type="submit" id="submit" class="btn btn-border"><i class="icon icon-lightning"></i><span>Add Comment</span></button>
					</form>

					<div class="divider divider-lg"></div>

				</div>
				<div class="col-md-3 column-right">
					<div class="side-block">
						<h4>Archives</h4>
						<div class="calendar">
							<div class="calendar__header">November 2016</div>
							<table>
								<tr>
									<th>S</th>
									<th>M</th>
									<th>T</th>
									<th>W</th>
									<th>Th</th>
									<th>F</th>
									<th>S</th>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>1</td>
									<td>2</td>
									<td>3</td>
									<td>4</td>
									<td>5</td>
								</tr>
								<tr>
									<td>6</td>
									<td>7</td>
									<td>8</td>
									<td>9</td>
									<td>10</td>
									<td>11</td>
									<td>12</td>
								</tr>
								<tr>
									<td>13</td>
									<td>14</td>
									<td>15</td>
									<td>16</td>
									<td class="selected">17</td>
									<td>18</td>
									<td>19</td>
								</tr>
								<tr>
									<td>20</td>
									<td>21</td>
									<td>22</td>
									<td>23</td>
									<td>24</td>
									<td>25</td>
									<td>26</td>
								</tr>
								<tr>
									<td>27</td>
									<td>28</td>
									<td>29</td>
									<td>30</td>
									<td>31</td>
									<td></td>
									<td></td>
								</tr>
							</table>
							<div class="calendar__footer"><a href="#">« Sep</a></div>
						</div>
					</div>
					<div class="side-block">
						<h4>Post Categories</h4>
						<ul class="category-list">
							<li><a href="#">Audios  <span>(2)</span></a></li>
							<li><a href="#">Daily Inspiration  <span>(7)</span></a></li>
							<li><a href="#">Freelance  <span>(3)</span></a></li>
							<li><a href="#">Links  <span>(1)</span></a></li>
							<li><a href="#">Mobile  <span>(1)</span></a></li>
							<li><a href="#">Photography  <span>(5)</span></a></li>
							<li><a href="#">Quotes  <span>(1)</span></a></li>
							<li><a href="#">Resources  <span>(3)</span></a></li>
							<li><a href="#">Status  <span>(1)</span></a></li>
						</ul>
					</div>
					<div class="side-block">
						<h4>Popular tags</h4>
						<ul class="tags-list">
							<li><a href="#">Electrical</a></li>
							<li><a href="#">Heating</a></li>
							<li><a href="#">Install</a></li>
							<li><a href="#">Air Conditioning</a></li>
							<li><a href="#">Light</a></li>
							<li><a href="#">Lamp</a></li>
							<li><a href="#">Security Systems</a></li>
							<li><a href="#">Service</a></li>
							<li><a href="#">Panels Changes</a></li>
						</ul>
					</div>
					<div class="side-block">
						<h4>Popular Posts</h4>
						<div class="blog-post post-preview">
							<div class="wrapper">
								<div class="post-image">
									<a href="blog-single.html"><img src="{{ asset('html/images/blog/blog-post-small-1.jpg') }}" alt=""></a>
								</div>
								<div class="post-content">
									<div class="post-date"><span class="day">10</span><span class="month">sept</span></div>
									<div class="post-author">by Adam Smith</div>
									<div class="post-meta"><i class="icon icon-speech"></i><span>12</span></div>
									<h5 class="post-title"><a href="blog-single.html">Electrical Safety this Holiday Season by Santa Monica Electrician</a></h5>
									<div class="post-teaser">Decorating your home and the outdoors is an extremely popular activity starting in about October.</div>
								</div>
							</div>
						</div>
						<div class="blog-post post-preview">
							<div class="wrapper">
								<div class="post-image">
									<a href="blog-single.html"><img src="{{ asset('html/images/blog/blog-post-small-2.jpg') }}" alt=""></a>
								</div>
								<div class="post-content">
									<div class="post-date"><span class="day">10</span><span class="month">sept</span></div>
									<div class="post-author">by Adam Smith</div>
									<div class="post-meta"><i class="icon icon-speech"></i><span>12</span></div>
									<h5 class="post-title"><a href="blog-single.html">Commercial Renovation No Problem with Certified Electrician</a></h5>
									<div class="post-teaser">If you are interested in purchasing an old building for commercial use or maybe your business...</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('js')
    
@endsection