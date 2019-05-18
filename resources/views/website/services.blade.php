@extends('layouts.main')

@section('css')
    
@endsection

@section('content')
<!-- Breadcrumbs Block -->
<div class="container">
	<div class="breadcrumbs">
		<ul class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Services</li>
		</ul>
	</div>
</div>
<!-- //Breadcrumbs Block -->
<!-- Block -->
<div class="block">
	<div class="container">
		<h1 class="text-center">Our <b>Services</b></h1>
		<p class="font24 text-center">We offer a variety of electrical services for both residential and commercial properties, including upgrades, repairs, replacements, and installations</p>
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="category-item">
					<div class="category-image">
						<a href="#"><img src="{{ asset('html/images/category-img-01.jpg') }}" alt="" class="img-responsive"></a>
					</div>
					<h5 class="category-title">Repairs</h5>
					<div class="category-text">Is your home suffering through electrical problems but you can’t figure out where they are coming from? Don’t hesitate to call us. </div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="category-item">
					<div class="category-image">
						<a href="#"><img src="{{ asset('html/images/category-img-02.jpg') }}" alt="" class="img-responsive"></a>
					</div>
					<h5 class="category-title">Lighting Upgrades</h5>
					<div class="category-text">If you’re older home is unable to keep up with the sometimes intense electrical demands of the 21st century, then call us for an electric service panel upgrade </div>
				</div>
			</div>
			<div class="clearfix visible-sm"></div>
			<div class="col-sm-6 col-md-4">
				<div class="category-item">
					<div class="category-image">
						<a href="#"><img src="{{ asset('html/images/category-img-03.jpg') }}" alt="" class="img-responsive"></a>
					</div>
					<h5 class="category-title">Lighting Upgrades</h5>
					<div class="category-text">Are you noticing your home’s lighting starting to flicker or lose power on a more constant basis? Then you need an electric lighting upgrade! Call us today. </div>
				</div>
			</div>
			<div class="clearfix visible-md visible-lg"></div>
			<div class="col-sm-6 col-md-4">
				<div class="category-item">
					<div class="category-image">
						<a href="#"><img src="{{ asset('html/images/category-img-04.jpg') }}" alt="" class="img-responsive"></a>
					</div>
					<h5 class="category-title">Surge Protection</h5>
					<div class="category-text">Faulty wiring, downed power lines, and an overabundance of appliances can overwhelm your electrical system and spell trouble for your home’s power. </div>
				</div>
			</div>
			<div class="clearfix visible-sm"></div>
			<div class="col-sm-6 col-md-4">
				<div class="category-item">
					<div class="category-image">
						<a href="#"><img src="{{ asset('html/images/category-img-05.jpg') }}" alt="" class="img-responsive"></a>
					</div>
					<h5 class="category-title">Generator Repair</h5>
					<div class="category-text">Don’t fall victim to frequent power outages and call up us who can supply you with a generator that will never call it quits on you. </div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="category-item">
					<div class="category-image">
						<a href="#"><img src="{{ asset('html/images/category-img-06.jpg') }}" alt="" class="img-responsive"></a>
					</div>
					<h5 class="category-title">Install a Ceiling Fan</h5>
					<div class="category-text">A ceiling fan is always a great choice for cooling a room. It is usually the first thing you see when entering a room and can range from sleek and trendy to standard and traditional. </div>
				</div>
			</div>
			<div class="clearfix visible-sm"></div>
			<div class="clearfix visible-md visible-lg"></div>
			<div class="col-sm-6 col-md-4">
				<div class="category-item">
					<div class="category-image">
						<a href="#"><img src="{{ asset('html/images/category-img-07.jpg') }}" alt="" class="img-responsive"></a>
					</div>
					<h5 class="category-title">Outdoor and Motion Lighting</h5>
					<div class="category-text">One of the most popular trends in home care in recent years is outdoor motion-sensor lighting. </div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="category-item">
					<div class="category-image">
						<a href="#"><img src="{{ asset('html/images/category-img-08.jpg') }}" alt="" class="img-responsive"></a>
					</div>
					<h5 class="category-title">Digital Thermostat Installation</h5>
					<div class="category-text">With energy costs from utilities going up every year, it is more important to than ever to keep heating and cooling costs controlled. </div>
				</div>
			</div>
			<div class="clearfix visible-sm"></div>
			<div class="col-sm-6 col-md-4">
				<div class="category-item">
					<div class="category-image">
						<a href="#"><img src="{{ asset('html/images/category-img-09.jpg') }}" alt="" class="img-responsive"></a>
					</div>
					<h5 class="category-title">Baseboard Heating Installation</h5>
					<div class="category-text">Avoid the costliness of central heating systems by taking a zoned approach to room heating truly an alternative worth consideration! </div>
				</div>
			</div>
		</div>
		<div class="divider"></div>
		<h2 class="smaller">We Specialize <b>In</b></h2>
		<div class="divider"></div>
		<div class="row">
			<div class="col-sm-4">
				<ul class="marker-list">
					<li>Electrical Safety and Maintenance Inspections</li>
					<li>Electrical panel upgrades</li>
					<li>Recessed lighting</li>
					<li>Electrical troubleshooting</li>
					<li>Dedicated circuits</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="marker-list">
					<li>Wiring</li>
					<li>Electrical Surge Protection</li>
					<li>Attic and bath exhaust fans</li>
					<li>Ceiling fan installation</li>
					<li>Fixture repair and replacement</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="marker-list">
					<li>Outdoor/landscape lighting</li>
					<li>Hot tub and appliance wiring</li>
					<li>Dedicated Circuits and sub panels</li>
					<li>Dimmer and light fixture installation</li>
					<li>Breaker replacements</li>
				</ul>
			</div>
		</div>
		<div class="divider"></div>
		<h2 class="smaller">Electrical Lighting <b>Upgrades</b></h2>
		<div class="divider"></div>
		<div class="row">
			<div class="col-sm-4">
				<ul class="marker-list">
					<li>Bathroom Lighting</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="marker-list">
					<li>Kitchen Lighting</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="marker-list">
					<li>Outdoor Security Lighting</li>
				</ul>
			</div>
		</div>
		<div class="divider"></div>
		<h2 class="smaller">Our Electrical <b>Technicians are:</b></h2>
		<div class="divider"></div>
		<ul class="marker-list">
			<li>Fully screened, drug tested, and background checked for your peace of mind</li>
			<li>Neat, clean and uniformed for safety and security</li>
			<li>Friendly, helpful, and reliable. We don’t hire anyone we wouldn’t hire to work inside of our own homes.</li>
			<li>Knowledgeable, experienced and skilled</li>
			<li>Rigorously trained in customer service</li>
			<li>Top-notch troubleshooters who specialize in saving you time and money</li>
			<li>Fully outfitted with state-of-the-art diagnostic tools and a huge inventory of parts</li>
			<li>Fully licensed, bonded and insured</li>
		</ul>
	</div>
</div>
@endsection

@section('js')
    
@endsection