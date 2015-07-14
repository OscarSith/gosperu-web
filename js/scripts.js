jQuery(function ($) {

	'use strict';

	$('.page-loader').delay(500).fadeOut(500);

	$(".goscroll").click(function (event) {
		event.preventDefault();
		//calculate destination place
		var dest = 0;
		if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
		  dest = $(document).height() - $(window).height();
		} else {
		  dest = $(this.hash).offset().top;
		}
		//go to destination
		$('html,body').animate({
		  scrollTop: dest
		}, 1000, 'easeOutQuad');
	});
});

/*====================================
Fixed Header
======================================*/
// if ($('#large-header').length) {
// 	$(window).bind('scroll', function() {
// 		var navHeight = $(window).height() - 480;
// 		if ($(window).scrollTop() > navHeight) {
// 			$('div.header-sticky').addClass('on');
// 		} else {
// 			$('div.header-sticky').removeClass('on');
// 		}
// 	});
// }

(function($) {
	"use strict";

	// var easing = 'jswing';

	var RedQ = {

		redQ_init : function() {
			// RedQ.redQ_nav_hover();
			RedQ.redQ_small_submenu();
			// RedQ.redQ_navbar_toggle();
		},

		// redQ_nav_hover : function() {
		// 	$('.dropdown').on('mouseenter', function() {
		// 		var self = $(this);

		// 		self.find('.dropdown-menu').stop().slideDown(300, easing);
		// 	});

		// 	$('.dropdown').on('mouseleave', function() {
		// 		var self = $(this);

		// 		self.find('.dropdown-menu').stop().slideUp(300, easing);
		// 	});
		// },
		redQ_small_submenu: function() {
			var sel = $('li.dropdown ul.sub-menu li.dropdown');
			sel.addClass('has-caret');
			sel.append('<span class="sub-caret fa fa-caret-right"></span>');

			// var caret = $('.has-caret').on('click', function(e) {
			// 	e.preventDefault();
			// 	console.log('work');
			// 	$(this).find('.sub-menu').css('display', 'block');
			// });
		},
		redQ_navbar_toggle: function() {
			// $('.navbar-toggle').on('click', function() {
			// 	console.log('hello');
			// 	$('.collapse.navbar-collapse').toggleClass('in');
			// });
		},
	};

	RedQ.redQ_init();

})(jQuery);

$(document).ready(function() {

                $('.navbar-toggle').click(function(e){
                    e.preventDefault();
                    $('.collapse.navbar-collapse').addClass('in');

                    $('body').addClass('mobile-menu-open');
                    $('.collapse.navbar-collapse').show().prop('id', 'mobile-menu-wrap');
                });

                $('.mobile-menu-close').click(function(e){
                    e.preventDefault();
                    // $('.collapse.navbar-collapse').removeClass('in');
                    $('body').removeClass('mobile-menu-open');

                });

                $( window ).resize(function() {
                    var width = $(window).width();

                    if ((width>=768)) {
                        $('body').removeClass('mobile-menu-open');
                        $('.collapse.navbar-collapse.in').removeAttr('id');
                        $('.collapse.navbar-collapse.in').removeClass('in');
                    }
                });
});

function init_map()
{
	var coordLat = -12.0748715;
	var coordLng = -77.0907253;
	if( jQuery(window).width() < 756 )
	{
		delta = 0;
	}

	var point = new google.maps.LatLng(coordLat,coordLng);
	var center = new google.maps.LatLng(coordLat,coordLng);

	var mapOptions = {
		zoom: 16,
		center: center,
		scrollwheel: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
  // var image = 'images/gmap_default.png';
  var beachMarker = new google.maps.Marker({
  	map: map,
  	position: point
  });
}

if( document.getElementById('map') )
	{
		var script = document.createElement('script');
	 	script.type = 'text/javascript';
	 	script.src = 'https://maps.googleapis.com/maps/api/js?sensor=false&callback=init_map';
	 	document.body.appendChild(script);
 	}
// =============================================
// Animate on Appear
// =============================================
var wow = new WOW(
  {
	boxClass:     'wow',      // animated element css class (default is wow)
	animateClass: 'animated', // animation css class (default is animated)
	offset:       10,          // distance to the element when triggering the animation (default is 0)
	mobile:       false       // trigger animations on mobile devices (true is default)
  }
);
wow.init();
