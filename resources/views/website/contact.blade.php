@extends('layouts.main')

@section('css')
    
@endsection

@section('content')
<!-- Breadcrumbs Block -->
<div class="container">
	<div class="breadcrumbs">
		<ul class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Contact Us</li>
		</ul>
	</div>
</div>
<!-- //Breadcrumbs Block -->
<!-- Block -->
<div class="block">
	<h1 class="text-center decor color">Contact <b>Information</b></h1>
	<div class="divider"></div>
	<div id="map"></div>
</div>
<!-- //Block -->
<!-- Block -->
<div class="block">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-md-3">
				<div class="address">
					<div class="address-block">
						<i class="icon icon-map-marker"></i>
						<h6 class="text-uppercase">Our address:</h6>8494 Signal Hill Road
						<br> Manassas, VA, 20110
					</div>
					<div class="address-block">
						<i class="icon icon-telephone"></i>
						<h6 class="text-uppercase">Call us:</h6> 1 (800) 765-43-21
					</div>
					<div class="divider-sm"></div>
					<h6>Have any questions?</h6>
					<p><a href="#">noreply@envato.com</a>
						<br>
						<a href="#">www.envato.com</a></p>
				</div>
				<div class="divider"></div>
				<div class="social-links">
					<ul>
						<li>
							<a class="icon icon-twitter" href="#"></a>
						</li>
						<li>
							<a class="icon icon-facebook" href="#"></a>
						</li>
						<li>
							<a class="icon icon-google-plus" href="#"></a>
						</li>
						<li>
							<a class="icon icon-linkedin" href="#"></a>
						</li>
						<li>
							<a class="icon icon-instagram" href="#"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-1 visible-lg"></div>
			<div class="col-sm-7 col-md-8">
				<form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
					<div id="success">
						<p>Your message was sent successfully!</p>
					</div>
					<div id="error">
						<p>Something went wrong, try refreshing and submitting the form again.</p>
					</div>
					<div class="inputs-col">
						<div class="row">
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>Name <span class="required">*</span></label>
									<input type="text" class="input-custom input-full" name="name" placeholder="Your name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>Phone</label>
									<input type="text" class="input-custom input-full" name="phone" placeholder="(555) 555-5555">
								</div>
							</div>
						</div>
						<div class="input-wrapper">
							<label>Email</label>
							<input type="text" class="input-custom input-full" name="email" placeholder="xxxx@xxxx.xxx">
						</div>
					</div>
					<div>
						<label>Message</label>
						<textarea class="textarea-custom input-full" name="message"></textarea>
					</div>
					<button type="submit" id="submit" class="btn btn-border"><i class="icon icon-lightning"></i><span>Send Message</span></button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //Block -->
@endsection

@section('js')
    
@endsection