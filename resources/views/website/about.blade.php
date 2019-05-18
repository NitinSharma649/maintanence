@extends('layouts.main')

@section('css')
    
@endsection

@section('content')

<!-- Breadcrumbs Block -->

<div class="container">
	<div class="breadcrumbs">
		<ul class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">our team</li>
		</ul>
	</div>
</div>

<!-- //Breadcrumbs Block -->
<!-- About Block -->
<div class="block">
	<div class="container">
		<h1 class="text-center">About <b>Us</b></h1>
		<p class="font24 text-center">We are locally owned and operated which makes our services causal as they are done by friendly and helpful technicians.</p>
		<div class="row">
			<div class="col-sm-6">
				<p>We started out in 2002. We are locally owned and operated which makes our services causal as they are done by friendly and helpful technicians. Our mission is to service each client with a highly trained and courteous technician that is dependable and always trustworthy. We are an accredited member of the BBB (Better Business Bureau). All of our services are backed by our 100% satisfaction guarantee. We service everywhere from Tysons Corner all the way to Merrifield.</p>

				<p>Our electricians can install anything from new security lighting for your outdoors to a whole home generator that will keep your appliances working during a power outage. Our installation services are always done promptly and safely.</p>

				<p>Electrical repairs are always performed by qualified techs that are trained in tasks such as ceiling fan repairs, troubleshooting, all types of lighting (repairs & installations), outlets and GFI outlet repairs. Call for free estimates.</p>
			</div>
			<div class="divider-sm visible-xs"></div>
			<div class="col-sm-6">

				<img src="{{ asset('html/images/about-img-1.jpg') }}" class="img-responsive" alt="">

			</div>
		</div>
		<div class="divider"></div>
		<div class="row">
			<div class="col-sm-6">
				<img src="{{ asset('html/images/about-img-2.jpg') }}" class="img-responsive" alt="">
			</div>
			<div class="divider-sm visible-xs"></div>
			<div class="col-sm-6">
				<div class="divider-sm"></div>
				<h2>Certificates</h2>
				<img src="{{ asset('html/images/about-img-3.jpg') }}" class="img-responsive" alt="">
			</div>
		</div>
	</div>
</div>
<!-- //About Block -->
<!-- Question Block -->
<div class="block bg-dark pad-sm">
	<div class="container">
		<div class="text-center">
			<h3><span class="light">Do you need help with</span> <b>electrical maintenance?</b></h3>
			<p class="font24">Contact us – our technicians are ready to help you solve that issue.</p>
			<div class="btn-inline"><a class="btn" href="#"><i class="icon icon-telephone"></i><span>Give Us A Call</span></a><a class="btn btn-invert" href="#"><i class="icon icon-lightning"></i><span>Request A Free Estimate</span></a></div>
		</div>
	</div>
</div>
<!-- //Question Block -->
<!-- Personal Block -->
<div class="block">
	<div class="container">
		<div class="row bulb-carousel">
			<div class="col-sm-3">
				<div class="bulb-block">
					<div class="bulb">
						<div class="bulb-img"><img src="{{ asset('html/images/person-01.jpg') }}" alt=""></div>
						<div class="bulb-mask"><img src="{{ asset('html/images/bulbmask-sm.png') }}" alt=""></div>
					</div>
					<h6 class="person-name">David K. Anthony</h6>
					<div class="person-position">Master Electrician</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="bulb-block">
					<div class="bulb">
						<div class="bulb-img"><img src="{{ asset('html/images/person-02.jpg') }}" alt=""></div>
						<div class="bulb-mask"><img src="{{ asset('html/images/bulbmask-sm.png') }}" alt=""></div>
					</div>
					<h6 class="person-name">James M. Campbell</h6>
					<div class="person-position">Electrician</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="bulb-block">
					<div class="bulb">
						<div class="bulb-img"><img src="{{ asset('html/images/person-03.jpg') }}" alt=""></div>
						<div class="bulb-mask"><img src="{{ asset('html/images/bulbmask-sm.png') }}" alt=""></div>
					</div>
					<h6 class="person-name">George N. Nelsony</h6>
					<div class="person-position">Office Manager</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="bulb-block">
					<div class="bulb">
						<div class="bulb-img"><img src="{{ asset('html/images/person-04.jpg') }}" alt=""></div>
						<div class="bulb-mask"><img src="{{ asset('html/images/bulbmask-sm.png') }}" alt=""></div>
					</div>
					<h6 class="person-name">Charles D. Shepard</h6>
					<div class="person-position">Electrician</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Personal Block -->
		
@endsection


@section('js')
    
@endsection