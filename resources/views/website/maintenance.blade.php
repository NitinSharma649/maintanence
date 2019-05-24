@extends('layouts.main')

@section('css')
    
@endsection

@section('content')
<!-- Breadcrumbs Block -->
<div class="container">
	<div class="breadcrumbs">
		<ul class="breadcrumb">
			<li><a href="{{ route('index') }}">Home</a></li>
			<li class="active">Maintenance</li>
		</ul>
	</div>
</div>
<!-- //Breadcrumbs Block -->
<!-- Block -->
<div class="block">
	<h1 class="text-center decor color">Maintenance <b>Form</b></h1>
</div>
<!-- //Block -->
<!-- Block -->
<div class="block">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-sm-10 col-md-10">
				<form id="maintenance_form" class="contact-form" action="{{ route('maintenance.store') }}" method="post" novalidate>
					@csrf
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
									<input type="text" class="input-custom input-full" name="phone" placeholder="+91">
								</div>
							</div>
						</div>
						<div class="input-wrapper">
							<label>Email</label>
							<input type="text" class="input-custom input-full" name="email" placeholder="xxxx@xxxx.xxx">
						</div>
						
						<div class="row">
							
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>Address 1</label>
									<input type="text" class="input-custom input-full" name="address_1" placeholder="Enter Address 1">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>Address 2</label>
									<input type="text" class="input-custom input-full" name="address_2" placeholder="Enter Address 2">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>City</label>
									<input type="text" class="input-custom input-full" name="city" placeholder="Enter City">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>State</label>
									<input type="text" class="input-custom input-full" name="state" placeholder="Enter State">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>Country</label>
									<input type="text" class="input-custom input-full" name="country" placeholder="Enter Country">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>Postal Code</label>
									<input type="text" class="input-custom input-full" name="postal_code" placeholder="Enter Postal Code">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="input-wrapper">
								<label>Product Number</label>
								<input type="text" class="input-custom input-full" name="product_number" placeholder="Product Number">
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-wrapper">
								<label>Product Issue</label>
								<input type="text" class="input-custom input-full" name="issue" placeholder="Enter Issue">
							</div>
						</div>
					</div>
					<div>
						<label>Describe Issue</label>
						<textarea class="textarea-custom input-full" name="description"></textarea>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label>In Warranty</label>
						</div>
						<div class="col-md-6">
							<div class="input-wrapper">
								<label>
									<input type="radio" name="in_warranty" value="1" checked>
									Yes
								</label>
								<label>
									<input type="radio" name="in_warranty" value="0">
									No
								</label>
							</div>
						</div>
					</div>
					<br>
					<button type="submit" id="submit" class="btn btn-border"><i class="icon icon-lightning"></i><span>Submit Compaint</span></button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //Block -->
@endsection

@section('js')
    
@endsection