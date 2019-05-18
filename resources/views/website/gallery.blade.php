@extends('layouts.main')

@section('css')
    
@endsection

@section('content')
<!-- Breadcrumbs Block -->
<div class="container">
	<div class="breadcrumbs">
		<ul class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Gallery</li>
		</ul>
	</div>
</div>
<!-- //Breadcrumbs Block -->
<!-- Block -->
<div class="block bottom-null">
	<div class="container">
		<h1 class="text-center">Our <b>Gallery</b></h1>
		<p class="font24 text-center">You will really enjoy doing business with us! Fast, electrical estimates at a competitive price. We save you time and money. Interested? Check out our photos.</p>
		<!-- Filters -->
		<div class="filters-by-category">

			<ul class="option-set" data-option-key="filter">
				<li><a href="#filter" data-option-value="*" class="selected">All</a></li>
				<li><a href="#filter" data-option-value=".category1" class="">Electrical</a></li>
				<li><a href="#filter" data-option-value=".category2" class="">Heating</a></li>
				<li><a href="#filter" data-option-value=".category3" class="">Air Conditioning</a></li>
				<li><a href="#filter" data-option-value=".category4" class="">Security Systems</a></li>
				<li><a href="#filter" data-option-value=".category5" class="">Other</a></li>
			</ul>

		</div>
	</div>
	<!-- //end Filters -->
	<div class="gallery gallery-isotope" id="gallery">
		<div class="gallery__item  category1">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-01.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-01.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category2">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-02.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-01.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category1">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-03.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-03.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category2">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-04.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-04.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category3 category5">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-05.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-05.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category4">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-06.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-06.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category2">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-07.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-07.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category2">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-08.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-08.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category3">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-09.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-09.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category6">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-10.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-10.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>

		<div class="gallery__item category4">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-11.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-11.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category1">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-12.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-12.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item   category3">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-13.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-13.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category2">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-14.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-14.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category2">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-15.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-15.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
		<div class="gallery__item category2">
			<div class="gallery__item__image"> <img src="{{ asset('html/images/gallery/gallery-img-thumb-16.jpg') }}" alt="" /> <a class="hover" href="{{ asset('html/images/gallery/gallery-img-16.jpg') }}"><div class="inside"><span class="icon icon-technology"></span>View</div></a> </div>
		</div>
	</div>
</div>
@endsection

@section('js')
    
@endsection