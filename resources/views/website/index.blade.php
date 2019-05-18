@extends('layouts.main')

@section('css')
    
@endsection

@section('bodyTag')
    <body class="home">
@endsection

@section('content')

<!-- Slider -->
<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider"> <img src="{{ asset('html/images/slider/slide1.jpg') }}" title="#htmlcaption1" data-thumb="{{ asset('html/images/slider/slide1.jpg') }}" alt="" /> <img src="{{ asset('html/images/slider/slide2.jpg') }}" title="#htmlcaption2" data-thumb="{{ asset('html/images/slider/slide2.jpg') }}" alt="" /> <img src="{{ asset('html/images/slider/slide3.jpg') }}" title="#htmlcaption3" data-thumb="{{ asset('html/images/slider/slide3.jpg') }}" alt="" /> </div>
    <div id="htmlcaption1" class="nivo-caption">
        <div class="vert-wrapper">
            <div class="vert">
                <div class="text text1">We’re the Current
                    <br>Specialist!</div>
                <div class="text text2 margin-bottom">keeping you wired</div>
                <div class="text text3"><a href="#" class="btn btn-lg"><i class="icon icon-lightning"></i><span>Know More</span></a></div>
            </div>
        </div>
    </div>
    <div id="htmlcaption2" class="nivo-caption">
        <div class="vert-wrapper">
            <div class="vert">
                <div class="text text1">Best Services for
                    <br>Your Family</div>
                <div class="text text2">making our clients happier</div>
                <div class="text text3"><a href="#" class="btn btn-lg"><i class="icon icon-lightning"></i><span>Know More</span></a></div>
            </div>
        </div>
    </div>
    <div id="htmlcaption3" class="nivo-caption">
        <div class="vert-wrapper">
            <div class="vert">
                <div class="text text1">Nothing is
                    <br>Impossible for Us</div>
                <div class="text text2">we can light everything</div>
                <div class="text text3"><a href="#" class="btn btn-lg"><i class="icon icon-lightning"></i><span>Know More</span></a></div>
            </div>
        </div>
    </div>
</div>
<!-- Slider -->
<!-- Request Block -->
<div class="block block-negative">
    <div class="container">
        <div class="request-form">
            <h4>Request Service Today</h4>
            <div class="inside">
                <form action="#">
                    <input class="input-custom input-full" type="text" placeholder="First & Last Name:" />
                    <input class="input-custom input-full" type="text" placeholder="Email Address:" />
                    <input class="input-custom input-full" type="text" placeholder="Phone Number:" />
                    <button class="btn"><i class="icon icon-lightning"></i><span>Get Service</span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //Request Block -->
<!-- Switch Block -->
<div class="block">
    <div class="container">
        <div class="row bulb-carousel top-negative">
            <div class="col-sm-4">
                <div class="bulb-block">
                    <div class="bulb">
                        <div class="bulb-img"><img src="{{ asset('html/images/bulb-img-1.jpg') }}" alt=""></div>
                        <div class="bulb-mask"><img src="{{ asset('html/images/bulbmask.png') }}" alt=""></div>
                    </div>
                    <h5 class="bulb-block-title">Switch ON
                        <br> Higher <b>Standards</b></h5>
                    <div class="bulb-block-text">for quality work and safety</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="bulb-block">
                    <div class="bulb">
                        <div class="bulb-img"><img src="{{ asset('html/images/bulb-img-2.jpg') }}" alt=""></div>
                        <div class="bulb-mask"><img src="{{ asset('html/images/bulbmask.png') }}" alt=""></div>
                    </div>
                    <h5 class="bulb-block-title">Switch ON
                        <br> Better <b>Solutions</b></h5>
                    <div class="bulb-block-text">for design and energy saving</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="bulb-block">
                    <div class="bulb">
                        <div class="bulb-img"><img src="{{ asset('html/images/bulb-img-3.jpg') }}" alt=""></div>
                        <div class="bulb-mask"><img src="{{ asset('html/images/bulbmask.png') }}" alt=""></div>
                    </div>
                    <h5 class="bulb-block-title">Switch ON
                        <br> Personal <b>Commitment</b></h5>
                    <div class="bulb-block-text">for your comfort and security</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Switch Block -->
<!-- Skew Category Block -->
<div class="block">
    <div class="skew-wrapper category-carousel light-arrow">
        <div class="container">
            <div class="skew"> <span class="straight-image" style="background-image: url({{ asset('html/images/category-img-1.jp') }}g);"></span> <span class="straight"><span class="title">Commercial</span> <a class="btn btn-sm" href="#"><span>More info</span></a> </span>
            </div>
            <div class="skew"> <span class="straight-image" style="background-image: url({{ asset('html/images/category-img-2.jp') }}g);"></span> <span class="straight"><span class="title">Industrial</span> <a class="btn btn-sm" href="#"><span>More info</span></a> </span>
            </div>
            <div class="skew"> <span class="straight-image" style="background-image: url({{ asset('html/images/category-img-3.jpg') }});"></span> <span class="straight"><span class="title">Residential</span> <a class="btn btn-sm" href="#"><span>More info</span></a> </span>
            </div>
        </div>
    </div>
</div>
<!-- //Skew Category Block -->
<!-- About Block -->
<div class="block">
    <div class="container">
        <h1 class="text-center">About <b>Us</b></h1>
        <p class="font24 text-center">We are locally owned and operated which makes our services causal as they are done by friendly and helpful technicians.</p>
        <div class="row">
            <div class="col-sm-6">
                <div class="video-responsive">
                    <iframe src="https://player.vimeo.com/video/103180506"></iframe>
                </div>
            </div>
            <div class="divider-sm visible-xs"></div>
            <div class="col-sm-6">
                <p>All of our services are backed by our 100% satisfaction guarantee. Our electricians can install anything from new security lighting for your outdoors to a whole home generator that will keep your appliances working during a power outage. Our installation services are always done promptly and safely. </p>
                <ul class="marker-list">
                    <li>Full-service electrical layout, design</li>
                    <li>Wiring and installation/upgrades</li>
                    <li>Emergency power solutions (generators)</li>
                    <li>Virtually any electrical needs you have – just ask!</li>
                </ul> <a href="#" class="btn btn-border"><i class="icon icon-lightning"></i><span>Know more</span></a> </div>
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
<!-- Services Block -->
<div class="block bottom-sm">
    <div class="container">
        <h2 class="text-center">Our <b>Services</b></h2>
        <h4 class="text-center subtitle"><i class="icon icon-telephone"></i>1 (800) 765-43-21</h4>
        <p class="font24 text-center">Never hesitate when it comes to potential electrical problems. Electrical issues can quickly develop into major catastrophes. </p>
        <div class="row text-icon-carousel">
            <div class="col-sm-4">
                <div class="text-icon">
                    <div class="text-icon-icon"><span><i class="icon icon-light"></i><span class="icon-hover"></span></span>
                    </div>
                    <h5 class="text-icon-title">Electrical</h5>
                    <div class="text-icon-text">Wiring, Remodels and Additions, Heat detectors</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-icon">
                    <div class="text-icon-icon"><span><i class="icon icon-tool"></i><span class="icon-hover"></span></span>
                    </div>
                    <h5 class="text-icon-title">Heating</h5>
                    <div class="text-icon-text">Trust our professionals to listen to your needs and problems</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-icon">
                    <div class="text-icon-icon"><span><i class="icon icon-air-conditioner"></i><span class="icon-hover"></span></span>
                    </div>
                    <h5 class="text-icon-title">Air Conditioning</h5>
                    <div class="text-icon-text">Then present you with options that fit your budget and designs</div>
                </div>
            </div>
            <div class="clearfix hidden-xs"></div>
            <div class="col-sm-4">
                <div class="text-icon">
                    <div class="text-icon-icon"><span><i class="icon icon-security-camera"></i><span class="icon-hover"></span></span>
                    </div>
                    <h5 class="text-icon-title">Security Systems</h5>
                    <div class="text-icon-text">You can view events over a monitor in our home</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-icon">
                    <div class="text-icon-icon"><span><i class="icon icon-computer"></i><span class="icon-hover"></span></span>
                    </div>
                    <h5 class="text-icon-title">Panels Changes</h5>
                    <div class="text-icon-text">Prices that meet your needs and budget</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-icon">
                    <div class="text-icon-icon"><span><i class="icon icon-screwdriver"></i><span class="icon-hover"></span></span>
                    </div>
                    <h5 class="text-icon-title">Trouble Shooting</h5>
                    <div class="text-icon-text">We think before we start working to save you money</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Services Block -->
<!-- Testimonials Block -->
<div class="block bg-1 bottom-sm">
    <div class="container">
        <div class="testimonials">
            <h2 class="text-center">Our Testimonials</h2>
            <div class="testimonials-carousel light-arrow">
                <div class="testimonials-item">
                    <div class="testimonials-text">I love my new heaters. I should have done this years ago. The installation was done professionally and in the time frame allotted. It was a great experience. </div>
                    <div class="testimonials-username">Eldon C. Caron</div>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-text">Great service. They really helped me out when my heater went out. They made the service and payment very convenient for me. I highly recommend this company.</div>
                    <div class="testimonials-username">Paul Grant</div>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-text">I love my new heaters. I should have done this years ago. The installation was done professionally and in the time frame allotted. It was a great experience. </div>
                    <div class="testimonials-username">Eldon C. Caron</div>
                </div>
                <div class="testimonials-item">
                    <div class="testimonials-text">Great service. They really helped me out when my heater went out. They made the service and payment very convenient for me. I highly recommend this company.</div>
                    <div class="testimonials-username">Paul Grant</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Testimonials Block -->
<!-- Brand Block -->
<div class="block bottom-sm">
    <div class="container">
        <ul class="brands-carousel">
            <li>
                <a href="#"><img src="{{ asset('html/images/brand-01.png') }}" alt=""></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('html/images/brand-02.png') }}" alt=""></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('html/images/brand-03.png') }}" alt=""></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('html/images/brand-04.png') }}" alt=""></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('html/images/brand-05.png') }}" alt=""></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('html/images/brand-06.png') }}" alt=""></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('html/images/brand-07.png') }}" alt=""></a>
            </li>
        </ul>
    </div>
</div>
<!-- //Brand Block -->
@endsection

@section('js')
    
@endsection