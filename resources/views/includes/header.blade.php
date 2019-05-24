<!-- Header -->
<header class="page-header">
    <!-- Fixed navbar -->
    <nav class="navbar" id="slide-nav">
        <div class="container">
            <div class="navbar-header">
                <div class="header-top">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="social-links">
                                <ul>
                                    <li>
                                        <a class="icon icon-twitter" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="icon icon-facebook" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="icon icon-instagram" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('html/images/logo.png') }}" alt="Logo">
                                    <span><img src="{{ asset('html/images/bolt.gif') }}" alt=""></span></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="phone">
                                <div class="number"><i class="icon icon-telephone"></i><span>9876543210</span></div>
                                <div class="under-number">Call us now. Resistance is futile!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="navbar-toggle"><i class="icon icon-interface icon-menu"></i><i class="icon icon-cancel"></i></button>
            </div>
            <div id="slidemenu" data-hover="dropdown" data-animations="fadeIn">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}"><span class="electric-btn"><span class="text">Home</span></span></a></li>
                    <li><a href="{{ route('about-us') }}"><span class="electric-btn"><span class="text">Our team</span></span></a></li>
                    <li class="dropdown"><a href="{{ route('services') }}" data-toggle="dropdown" data-submenu=""><span class="electric-btn"><span class="text">Services</span></span><span class="ecaret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-submenu"> <a href="#" data-toggle="dropdown" data-submenu="">Commercial <span class="ecaret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Panels Changes</a></li>
                                    <li><a href="#">Air Conditioning</a></li>
                                    <li><a href="#">Security Systems</a></li>
                                    <li><a href="#">Full-service layout</a></li>
                                    <li><a href="#">Wiring and installation</a></li>
                                    <li><a href="#">Emergency power</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"> <a href="#">Industrial<span class="ecaret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Full-service layout</a></li>
                                    <li><a href="#">Wiring and installation</a></li>
                                    <li><a href="#">Emergency power</a></li>
                                    <li><a href="#">Panels Changes</a></li>
                                    <li><a href="#">Air Conditioning</a></li>
                                    <li><a href="#">Security Systems</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Residential</a></li>
                            <li><a href="{{ route('maintenance.index') }}">Maintenance</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('prices') }}"><span class="electric-btn"><span class="text">Prices</span></span></a>
                    </li>
                    <li><a href="{{ route('blogs') }}"><span class="electric-btn"><span class="text">Blogs</span></span></a>
                    </li>
                    <li><a href="{{ route('gallery') }}"><span class="electric-btn"><span class="text">Gallery</span></span></a>
                    </li>
                    <li><a href="{{ route('faq') }}"><span class="electric-btn"><span class="text">FAQ</span></span></a>
                    </li>
                    <li><a href="{{ route('contact') }}"><span class="electric-btn"><span class="text">Contact</span></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
