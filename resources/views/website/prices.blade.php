@extends('layouts.main')

@section('css')
    
@endsection

@section('content')
<!-- Breadcrumbs Block -->
<div class="container">
	<div class="breadcrumbs">
		<ul class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Prices</li>
		</ul>
	</div>
</div>
<!-- //Breadcrumbs Block -->
<!-- Block -->
<div class="block">
	<div class="container">
		<h1 class="text-center">Our <b>Prices</b></h1>
		<p class="font24 text-center">All of our prices include labour and materials but exclude VAT.</p>
		<div class="table-wrapper">
		<table class="table price-table">
			<tbody>
				<tr class="table-header">
					<th>Common</th>
					<th>Job Cost*</th>
					<th>Description</th>
				</tr>
				<tr>
					<td> Install ceiling fan</td>
					<td> $100 </td>
					<td> You supply ceiling fan to suit your home. </td>
				</tr>
				<tr>
					<td> Supply ceiling fan</td>
					<td> $75 </td>
					<td> You supply house to bolt it to. </td>
				</tr>
				<tr>
					<td> Install new double power</td>
					<td> $90 </td>
					<td> Includes labour, cable, gpo, everything </td>
				</tr>
				<tr>
					<td> Install double power outside</td>
					<td> $150 </td>
					<td> Includes everything + weatherporoof gpo </td>
				</tr>
				<tr>
					<td> Install new light in new location</td>
					<td> $90 </td>
					<td> Includes everything except new light </td>
				</tr>
				<tr>
					<td> Install 92mm LED downlight</td>
					<td> $90 </td>
					<td> As above but includes LED downlight. </td>
				</tr>
				<tr>
					<td> Replace light</td>
					<td> $45 </td>
					<td> Replace light where there is a cable </td>
				</tr>
				<tr>
					<td> Supply and install ceiling exhaust fan</td>
					<td> $150 </td>
					<td> 200mm bathroom type fan </td>
				</tr>
				<tr>
					<td> Supply and install Sensor light</td>
					<td> $160 </td>
					<td> Includes Twin 150w Sensor light. </td>
				</tr>
				<tr>
					<td> Fault Finding hourly Call out</td>
					<td> $40 </td>
					<td> fee applies in this case </td>
				</tr>
				<tr>
					<td> Hot water element</td>
					<td> $200 </td>
					<td> Replace most electric hot water elements </td>
				</tr>
				<tr>
					<td> Hot water Thermostat</td>
					<td> $220</td>
					<td> Element or thermostat is all it could be </td>
				</tr>
				<tr>
					<td> Install CCTV systems package</td>
					<td> $500 + </td>
					<td> Those 4 camera eBay CCTV systems </td>
				</tr>
				<tr>
					<td> Install IXL 3 in 1 type bathroom light</td>
					<td> $150 </td>
					<td> Must have roof cavity. Cannot go downstairs </td>
				</tr>
				<tr>
					<td> Install oven / stove new circuit</td>
					<td> $350 + </td>
					<td> Stoves require heavy duty cable </td>
				</tr>
				<tr>
					<td> Replace oven / stove </td>
					<td> $100 </td>
					<td> You have new one there </td>
				</tr>
				<tr>
					<td> Replace hot plates </td>
					<td> $50 </td>
					<td> If h/p separate. Minimum charge applies </td>
				</tr>
				<tr>
					<td> Take either to tip</td>
					<td> $50 </td>
					<td> Tips ain't free </td>
				</tr>
				<tr>
					<td> Install new smoke alarm </td>
					<td> $150 </td>
					<td> Includes new hardwired smoke alarm </td>
				</tr>
				<tr>
					<td> Dumb Looks </td>
					<td> free </td>
					<td> Ask Brock for the new 'blue steel' look </td>
				</tr>
				<tr>
					<td> Minor light / GPO repairs </td>
					<td> $100 </td>
					<td> It's $100 minimum charge* sorry. </td>
				</tr>
				<tr>
					<td> Replace an Antenna </td>
					<td> $240 </td>
					<td> Chuck the old SBS one you've been using. </td>
				</tr>
				<tr>
					<td> Safety switch install / changeover </td>
					<td> $220 </td>
					<td> We use quality RCD. It will save your life </td>
				</tr>
				<tr>
					<td> Switchboard Upgrade </td>
					<td> $750 </td>
					<td> Includes new board 3 x RCD 5 x CB </td>
				</tr>
				<tr>
					<td> Test and Tag </td>
					<td> $10 </td>
					<td> Just a few items </td>
				</tr>
				<tr>
					<td> Test and Tag </td>
					<td> $5 </td>
					<td> Bulk item lots (per item) - above 20 </td>
				</tr>
				<tr>
					<td> Minimum charge </td>
					<td> $100 </td>
					<td> We don't come and replace one light only. </td>
				</tr>
				<tr>
					<td> After hours emergency call out </td>
					<td> $250 </td>
					<td> Restore power only. Parts are extra. </td>
				</tr>
			</tbody>
		</table>
		</div>
		* Cost* may vary for difficult house. Usually cost is exactly as outlined above.
	</div>
</div>
<!-- //Block -->
</div>
@endsection

@section('js')
    
@endsection