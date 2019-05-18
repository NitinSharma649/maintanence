@extends('layouts.main')

@section('css')
    
@endsection

@section('content')
<!-- Breadcrumbs Block -->
<div class="container">
	<div class="breadcrumbs">
		<ul class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Frequently Asked Questions</li>
		</ul>
	</div>
</div>
<!-- //Breadcrumbs Block -->
<!-- Block -->
<div class="block">
	<div class="container">
		<h1 class="text-center">Frequently Asked <b>Questions</b></h1>
		<p class="font24 text-center">You will find answers to all of your most common Electrical Services related questions located here. </p>
		<div class="panel-group">
			<div class="faq-item">
				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
					<a role="button" data-toggle="collapse" href="#faq1">
						Does conduit need to go inside the transformer box?
						<span class="caret-toggle closed">–</span>
							<span class="caret-toggle opened">+</span>
					</a>
				</h4>
					</div>
					<div id="faq1" class="panel-collapse collapse in">
						<div class="panel-body">
							<p>No. Conduit should be stopped just short of the box.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="faq-item">
				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
					<a role="button" data-toggle="collapse" href="#faq2" class="collapsed">
						How close to the pole do I bring my conduit to?
						<span class="caret-toggle closed">–</span>
							<span class="caret-toggle opened">+</span>
					</a>
				</h4>
					</div>
					<div id="faq2" class="panel-collapse collapse">
						<div class="panel-body">
							<p>The top of the elbow must be 6" from the pole..</p>
						</div>
					</div>
				</div>
			</div>
			<div class="faq-item">
				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
					<a role="button" data-toggle="collapse" href="#faq3" class="collapsed">
						Is additional conduit required beyond what is installed in the ditch?
						<span class="caret-toggle closed">–</span>
							<span class="caret-toggle opened">+</span>
					</a>
				</h4>
					</div>
					<div id="faq3" class="panel-collapse collapse">
						<div class="panel-body">
							<p>If the service is being supplied from a utility pole, the member is required to supply 1-10' section of SCH 80 PVC and 2-10' sections of SCH 40 PVC to be left near the base of the pole for installation by the power company up the pole.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="faq-item">
				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
					<a role="button" data-toggle="collapse" href="#faq4" class="collapsed">
						Does someone need to inspect the ditch before covering the conduit?
						<span class="caret-toggle closed">–</span>
							<span class="caret-toggle opened">+</span>
					</a>
				</h4>
					</div>
					<div id="faq4" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Yes, contact the power company and a representative will come and inspect the ditch and conduit. The representative will place a white sticker on the meter panel with a pass or fail notice.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="faq-item">
				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
					<a role="button" data-toggle="collapse" href="#faq5" class="collapsed">
						Is there a difference in meter bases?
						<span class="caret-toggle closed">–</span>
							<span class="caret-toggle opened">+</span>
						</a>
				</h4>
					</div>
					<div id="faq5" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Yes, There are three types. Overhead only, Underground only, and Overhead/Underground combination bases. However, combination boxes are not recommended for Underground installations because of their limited wire space.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="faq-item">
				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
					<a role="button" data-toggle="collapse" href="#faq6" class="collapsed">
						Can septic lines be installed under power lines?
						<span class="caret-toggle closed">–</span>
							<span class="caret-toggle opened">+</span>
					</a>
				</h4>
					</div>
					<div id="faq6" class="panel-collapse collapse">
						<div class="panel-body">
							<p>Yes</p>
						</div>
					</div>
				</div>
			</div>
			<div class="faq-item">
				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
					<a role="button" data-toggle="collapse" href="#faq7" class="collapsed">
					Can permanent service be installed if the house has had a ruff in inspection?
						<span class="caret-toggle closed">–</span>
							<span class="caret-toggle opened">+</span>
					</a>
				</h4>
					</div>
					<div id="faq7" class="panel-collapse collapse">
						<div class="panel-body">
							<p>No, We will not set a meter without a final inspection or in some instances a non occupancy permit shall be allowed from the local electrical inspector.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="faq-item last">
				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
					<a role="button" data-toggle="collapse" href="#faq8" class="collapsed">
					What about outdoor lighting?
						<span class="caret-toggle closed">–</span>
							<span class="caret-toggle opened">+</span>
					</a>
				</h4>
					</div>
					<div id="faq8" class="panel-collapse collapse">
						<div class="panel-body">
							<p>We offer a variety of lighting products including decorative colonial, cobra head, directional floodlights, and security lights. We can customize plans to fit any lighting need.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //Block -->
@endsection

@section('js')
    
@endsection