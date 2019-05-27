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
				<form id="maintenance_form" class="contact-form" action="{{ route('maintenance.store') }}" method="post">
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
									<input type="text" class="input-custom input-full" name="name" placeholder="Your name" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>Phone</label>
									<input type="text" class="input-custom input-full" name="phone" placeholder="+91" required>
								</div>
							</div>
						</div>
						<div class="input-wrapper">
							<label>Email</label>
							<input type="email" class="input-custom input-full" name="email" placeholder="xxxx@xxxx.xxx" required>
						</div>
						
						<div class="row">
							
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>Address 1</label>
									<input type="text" class="input-custom input-full" name="address_1" placeholder="Enter Address 1" required>
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
									<input type="text" class="input-custom input-full" name="city" placeholder="Enter City" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>State</label>
									<input type="text" class="input-custom input-full" name="state" placeholder="Enter State" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>Country</label>
									<input type="text" class="input-custom input-full" name="country" placeholder="Enter Country" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label>Postal Code</label>
									<input type="number" class="input-custom input-full" name="postal_code" placeholder="Enter Postal Code" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="input-wrapper">
								<label>Warranty Number</label>
								<input type="text" class="input-custom input-full" id="warranty_number" name="warranty_number" placeholder="Warranty Number" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-wrapper">
								<label>Product Issue</label>
								<input type="text" class="input-custom input-full" name="issue" placeholder="Enter Issue" required>
							</div>
						</div>
					</div>
					<div>
						<label>Describe Issue</label>
						<textarea class="textarea-custom input-full" name="description" required></textarea>
					</div>
					{{--  <div class="row">
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
					</div>  --}}
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
	<script>
		window.pageData=window.pageData || {};

		window.pageData.checkWarranty=window.pageData.checkWarranty||{};
		window.pageData.checkWarranty.flag=false;
		var message="", flag=false;
		$(document).ready(function(){
			$('#maintenance_form').on('submit',function(e){
				checkWarrantyMethod();
			});
			$(document).on('blur', '#warranty_number', function(){
				checkWarrantyMethod();
			});
		});


		function checkWarrantyMethod(){
			if($.trim($warranty_number = $('#warranty_number').val()) != ''){
				window.pageData.checkWarranty.message="", window.pageData.checkWarranty.flag=false;
				message="", flag=false;
				$.ajax({
					url: "{{ url('api/CheckWarrantyNumber') }}",
					type: "POST",
					data: {
						'warranty_number': $('#warranty_number').val()
					},
					success: function(response){
						if(response.status==200){
							{{--  window.pageData.checkWarranty.flag=true;  --}}
							flag=true;
						}else{
							{{--  window.pageData.checkWarranty.flag=false;
							window.pageData.checkWarranty.message=response.message;  --}}
							flag=false;
							message=response.message;
						}
					},
					error: function(error){
						console.log(error);
					}	
				});

				if(flag){
					return true;
				}else{
					toastr.error(message, 'Error');
					return false;
				}
			}else{
				toastr.info('warranty number Cannot be empty', 'info');
			}
		}
	</script>
    
@endsection