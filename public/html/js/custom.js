/* Global variables */
"use strict";
var $document = $(document),
	$window = $(window),
	plugins = {
		mainSlider: $('#slider'),
		categoryCarousel: $('.category-carousel .container'),
		testimonialsCarousel: $('.testimonials-carousel'),
		brandsCarousel: $('.brands-carousel'),
		textIconCarousel: $('.text-icon-carousel'),
		bulbCarousel: $('.bulb-carousel'),
		gallery: $('#gallery'),
		backToTop: $('.back-to-top'),
		submenu: $('[data-submenu]'),
		isotopeGallery: $('.gallery-isotope'),
		postGallery: $('.blog-isotope'),
		postCarousel: $('.post-carousel'),
		contactForm: $('#contactform'),
		googleMapFooter: $('#footer-map'),
		googleMap: $('#map')
	},
	shiftMenu = $('#slidemenu, #page-content, body, .navbar, .navbar-header'),
	$navbarToggle = $('.navbar-toggle'),
	$dropdown = $('.dropdown-submenu, .dropdown');

/* Initialize All Scripts */
$document.ready(function () {

	var windowWidth = window.innerWidth || $window.width();
	var windowH = $window.height();

	// skew block hover effect
	var $skewblock = $('.skew-wrapper'),
		$skew = $('.skew', $skewblock);

	if ($skewblock.length) {
		$skew.on('mouseenter', function () {
			$skew.not(this).addClass('min');
			$(this).addClass('active');
		}).on('mouseleave', function () {
			$skew.removeClass('min active');
		});
	}

	// menu hover effect
	var $electricBtn = $('.electric-btn');
	if ($electricBtn.length) {
		$electricBtn.each(function () {
			var $this = $(this),
				btntext = $('.text', $this).text();
			var mask = '<div class="mask"><span>' + btntext + '</span></div>';
			for (var i = 0; i < 6; i++) {
				$this.append(mask);
			}
		})
	}

	// back to top
	var backPos;
	if (plugins.backToTop.length) {
		var backPos = plugins.backToTop.offset();
		if (backPos.top < windowH) {
			plugins.backToTop.hide();
		}
		plugins.backToTop.on('click', function () {
			$("html, body").animate({
				scrollTop: 0
			}, "slow");
			return false;
		});
	}

	// image popup
	if (plugins.gallery.length) {
		plugins.gallery.find('a.hover').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});
	}

	// slider
	if (plugins.mainSlider.length) {
		plugins.mainSlider.nivoSlider({
			animSpeed: 500,
			pauseTime: 6000000,
			pauseOnHover: false,
			effect: 'sliceUpDown',
			prevText: '',
			nextText: '',
			controlNav: false
		});
	}

	// testimonials carousel
	if (plugins.testimonialsCarousel.length) {
		plugins.testimonialsCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: true,
			autoplaySpeed: 2000,
			arrows: false,
			dots: true
		});
	}

	// post carousel
	if (plugins.postCarousel.length) {
		plugins.postCarousel.slick({
			mobileFirst: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: false,
			autoplaySpeed: 2000,
			arrows: true,
			dots: false
		});
	}

	// brands carousel
	if (plugins.brandsCarousel.length) {
		plugins.brandsCarousel.slick({
			mobileFirst: false,
			slidesToShow: 7,
			slidesToScroll: 1,
			infinite: true,
			autoplay: false,
			autoplaySpeed: 2000,
			arrows: false,
			dots: false,
			variableWidth: true,
			responsive: [{
				breakpoint: 991,
				settings: {
					slidesToShow: 5
				},
            }, {
				breakpoint: 767,
				settings: {
					slidesToShow: 3
				},
            }, {
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					arrows: true
				},
            }]
		});
	}

	// mobile carousel
	function slickMobile(carousel) {
		carousel.slick({
			mobileFirst: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			autoplay: false,
			autoplaySpeed: 2000,
			arrows: true,
			dots: true,
			slide: '.slide-item',
			responsive: [{
				breakpoint: 767,
				settings: "unslick",
            }]
		});
	}

	function startCarousel() {
		if (plugins.bulbCarousel.length) {
			slickMobile(plugins.bulbCarousel);
		}
		if (plugins.categoryCarousel.length) {
			slickMobile(plugins.categoryCarousel);
		}
		if (plugins.textIconCarousel.length) {
			slickMobile(plugins.textIconCarousel);
		}
	}
	if (windowWidth < 768) {
		startCarousel();
	}
	// END mobile carousel

	// submenu
	function toggleNavbarMethod(windowWidth) {
		var $dropdownLink = $(".dropdown > a, .dropdown-submenu > a");
		var $dropdown = $(".dropdown, .dropdown-submenu");
		var $dropdownCaret = $(".dropdown > a > .ecaret, .dropdown-submenu > a > .ecaret");
		$dropdownLink.on('click.toggleNavbarMethod', function (e) {
			e.preventDefault();
			e.stopPropagation();
			var url = $(this).attr('href');
			if (url) $(location).attr('href', url);
		});
		if (windowWidth > 767) {
			$dropdown.on('mouseenter.toggleNavbarMethod', function () {
				var $this = $(this);
				$this.find('.dropdown-menu').first().stop(true, true).fadeIn("fast");
				$this.toggleClass('open');
			}).on('mouseleave.toggleNavbarMethod', function () {
				var $this = $(this);
				$this.find('.dropdown-menu').first().stop(true, true).fadeOut("fast");
				$this.toggleClass('open');
			});
		} else {
			$dropdown.unbind('.toggleNavbarMethod');
			$dropdownCaret.unbind('.toggleNavbarMethod');
			$dropdownCaret.on('click.toggleNavbarMethod', function (e) {
				e.stopPropagation();
				e.preventDefault();
				var $li = $(this).parent().parent('li');
				if ($li.hasClass('opened')) {
					$li.find('.dropdown-menu').first().stop(true, true).slideUp(0);
					$li.removeClass('opened');
				} else {
					$li.find('.dropdown-menu').first().stop(true, true).slideDown(0);
					$li.addClass('opened');
				}
			})
		}
	}
	toggleNavbarMethod(windowWidth);

	// slide menu
	var $slideNav = $('#slide-nav'),
		toggler = '.navbar-toggle',
		$pagewrapper = $('#page-content'),
		$navigationwrapper = $('.navbar-header'),
		$slidemenu = $('#slidemenu'),
		menuwidth = '100%',
		slidewidth = '270px',
		menuneg = '-100%',
		slideneg = '-270px';

	$slideNav.after($('<div id="navbar-height-col"></div>'));
	$slideNav.on("click", toggler, function (e) {
		var $this = $(this);
		var $heightCol = $('#navbar-height-col');
		var selected = $this.hasClass('slide-active');
		$slidemenu.stop().animate({
			left: selected ? menuneg : '0px'
		});
		$heightCol.stop().animate({
			left: selected ? slideneg : '0px'
		});
		$pagewrapper.stop().animate({
			left: selected ? '0px' : slidewidth
		});
		$navigationwrapper.stop().animate({
			left: selected ? '0px' : slidewidth
		});
		$this.toggleClass('slide-active', !selected);
		$slidemenu.toggleClass('slide-active');
		$pagewrapper.toggleClass('slide-active');
		$navigationwrapper.toggleClass('slide-active');
		$('.navbar, body').toggleClass('slide-active');
	});
	// END slide menu

	// Isotope
	if (plugins.isotopeGallery.length) {
		var $gallery = plugins.isotopeGallery;
		$gallery.imagesLoaded(function () {
			setGallerySize();
		});
		$gallery.isotope({
			itemSelector: '.gallery__item',
			masonry: {
				columnWidth: '.gallery__item:not(.doubleW)'
			}
		});
		isotopeFilters($gallery);
	}

	// Isotope Filters (for gallery)
	function isotopeFilters(gallery) {
		var gallery = $(gallery);
		if (gallery.length) {
			var container = gallery;
			var optionSets = $(".filters-by-category .option-set"),
				optionLinks = optionSets.find("a");
			optionLinks.on('click', function (e) {
				var thisLink = $(this);
				if (thisLink.hasClass("selected")) return false;
				var optionSet = thisLink.parents(".option-set");
				optionSet.find(".selected").removeClass("selected");
				thisLink.addClass("selected");
				var options = {},
					key = optionSet.attr("data-option-key"),
					value = thisLink.attr("data-option-value");
				value = value === "false" ? false : value;
				options[key] = value;
				if (key === "layoutMode" && typeof changeLayoutMode === "function") changeLayoutMode($this, options);
				else {
					container.isotope(options);
					setGallerySize();
				}
				return false
			})
		}
	}

	function setGallerySize() {
		var windowW = window.innerWidth || $window.width(),
			itemsInRow = 2;
		if (windowW > 1199) {
			itemsInRow = 4;
		} else if (windowW > 767) {
			itemsInRow = 4;
		} else if (windowW > 480) {
			itemsInRow = 2;
		}
		var containerW = $('#page-content').width(),
			galleryW = containerW / itemsInRow;
		$gallery.find('.gallery__item').each(function () {
			$(this).css({
				width: galleryW + 'px'
			});
		});
		$gallery.isotope('layout');
	}

	// Post Isotope
	if (plugins.postGallery.length) {
		var $postgallery = plugins.postGallery;
		$postgallery.imagesLoaded(function () {
			setPostSize();
		});
		$postgallery.isotope({
			itemSelector: '.blog-post',
			masonry: {
				gutter: 30,
				columnWidth: '.blog-post:not(.doubleW)'
			}
		});
	}

	// Post More
	var $postMoreLink = $('.view-more-post'),
		$postPreload = $('#postPreload');
	
	$postMoreLink.on('click', function () {
		var item;
		var target = $(this).attr('data-load');
		$(this).hide();
		$.ajax({
			url: target,
			success: function (data) {
				$postPreload.append(data);
				if (plugins.postGallery.length) {
					$(' > div', $postPreload).each(function () {
						item = $(this);
						$postgallery.append(item).isotope('appended', item);
						setPostSize();
					});
				}
			}
		});
	})

	function setPostSize() {
		var windowW = window.innerWidth || $window.width(),
			itemsInRow = 1;
		if (windowW > 1199) {
			itemsInRow = 3;
		} else if (windowW > 767) {
			itemsInRow = 2;
		} else if (windowW > 480) {
			itemsInRow = 1;
		}
		var containerW = $('#pageContent .container').width() - 60,
			galleryW = containerW / itemsInRow;
		$postgallery.find('.blog-post').each(function () {
			if (windowW > 767) {
				$(this).css({
					width: galleryW + 'px'
				});
			} else {
				$(this).css({
					width: galleryW + 60 + 'px'
				});
			}
		});
		setTimeout(function () {
			$('.slick-initialized').slick('setPosition');
			$postgallery.isotope('layout');
		}, 100);
	}

	// Contact page form
	if (plugins.contactForm.length) {
		var $contactform = plugins.contactForm;
		$contactform.validate({
			rules: {
				name: {
					required: true,
					minlength: 2
				},
				message: {
					required: true,
					minlength: 20
				},
				email: {
					required: true,
					email: true
				}

			},
			messages: {
				name: {
					required: "Please enter your name",
					minlength: "Your name must consist of at least 2 characters"
				},
				message: {
					required: "Please enter message",
					minlength: "Your message must consist of at least 20 characters"
				},
				email: {
					required: "Please enter your email"
				}
			},
			submitHandler: function (form) {
				$(form).ajaxSubmit({
					type: "POST",
					data: $(form).serialize(),
					url: "process-contact.php",
					success: function () {
						$('#success').fadeIn();
						$('#contactform').each(function () {
							this.reset();
						});
					},
					error: function () {
						$('#contactform').fadeTo("slow", 0, function () {
							$('#error').fadeIn();
						});
					}
				});
			}
		});
	}

	// Resize window events
	$window.resize(function () {
		var windowWidth = window.innerWidth || $window.width();
		if (windowWidth < 768) {
			startCarousel();
		}
		if (windowWidth > 767 && $navbarToggle.is(':hidden')) {
			shiftMenu.removeClass('slide-active');
		}
		setTimeout(function () {
			if (plugins.isotopeGallery.length) {
				setGallerySize();
			}
			if (plugins.postGallery.length) {
				setPostSize();
			}
		}, 500);
		setTimeout(function () {
			$dropdown.removeClass('opened');
			toggleNavbarMethod(windowWidth);
		}, 1000);
	});
})

$window.on('load', function () {
	setTimeout(function () {
		$('#loader-wrapper').fadeOut(500);
	}, 500);
	
	function createMap(id, mapZoom){
		// Create google map
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: mapZoom,
			scrollwheel: false, // The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(55.8610112, -4.2547319), // Glasgow
			// How you would like to style the map. 
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [{
					"color": "#e9e9e9"
                }, {
					"lightness": 17
                }]
            }, {
				"featureType": "landscape",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f5f5f5"
                }, {
					"lightness": 20
                }]
            }, {
				"featureType": "road.highway",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#ffffff"
                }, {
					"lightness": 17
                }]
            }, {
				"featureType": "road.highway",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#ffffff"
                }, {
					"lightness": 29
                }, {
					"weight": 0.2
                }]
            }, {
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
                }, {
					"lightness": 18
                }]
            }, {
				"featureType": "road.local",
				"elementType": "geometry",
				"stylers": [{
					"color": "#ffffff"
                }, {
					"lightness": 16
                }]
            }, {
				"featureType": "poi",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f5f5f5"
                }, {
					"lightness": 21
                }]
            }, {
				"featureType": "poi.park",
				"elementType": "geometry",
				"stylers": [{
					"color": "#dedede"
                }, {
					"lightness": 21
                }]
            }, {
				"elementType": "labels.text.stroke",
				"stylers": [{
					"visibility": "on"
                }, {
					"color": "#ffffff"
                }, {
					"lightness": 16
                }]
            }, {
				"elementType": "labels.text.fill",
				"stylers": [{
					"saturation": 36
                }, {
					"color": "#333333"
                }, {
					"lightness": 40
                }]
            }, {
				"elementType": "labels.icon",
				"stylers": [{
					"visibility": "off"
                }]
            }, {
				"featureType": "transit",
				"elementType": "geometry",
				"stylers": [{
					"color": "#f2f2f2"
                }, {
					"lightness": 19
                }]
            }, {
				"featureType": "administrative",
				"elementType": "geometry.fill",
				"stylers": [{
					"color": "#fefefe"
                }, {
					"lightness": 20
                }]
            }, {
				"featureType": "administrative",
				"elementType": "geometry.stroke",
				"stylers": [{
					"color": "#fefefe"
                }, {
					"lightness": 17
                }, {
					"weight": 1.2
                }]
            }]
		};
		// Get the HTML DOM element that will contain your map 
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById(id);
		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);
		var image = 'images/map-marker.png';
		// Let's also add a marker while we're at it
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(55.8610112, -4.2547319),
			map: map,
			icon: image
		});		
		
	}

	if (plugins.googleMapFooter.length) {
		createMap('footer-map', 14)
	}
	if (plugins.googleMap.length) {
		createMap('map', 12)
	}
	
});