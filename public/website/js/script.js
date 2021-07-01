// JavaScript Document



function openNav() {
		document.getElementById("myNav").style.width = "250px";
		document.getElementById("body-overlay").style.display = "block";
		$("#myNav").removeClass("width");
		$("#body-overlay").removeClass("opacity");
		$('body').addClass("fixedPosition");
	}

	function closeNav() {
		document.getElementById("myNav").style.width = "0";
		document.getElementById("body-overlay").style.display = "none";
		$('body').removeClass("fixedPosition");
	}

$(document).ready(function() { 

	

	new WOW().init();

	$(window).on('load', function () {
		$('#main_slider').owlCarousel({
			autoplay: true,
			autoplayTimeout: 2500,
			autoplayHoverPause: false,
			mouseDrag: false,
			dots: true,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right '></i>"],
			loop: true,
			lazyLoad: false,
			rtl: true,
			nav: true,
			animateOut: 'false',
			animateIn: 'fadeIn',
			smartSpeed:3000,
			margin: 0,
			responsive: {
				0: {
					items: 1
				}
			}
		});
	});


	$(window).on('load', function () {

		$('.tab-slider').owlCarousel({
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		dots: false,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		loop: true,
		lazyLoad: false,
		rtl: true,
		nav: true,
		smartSpeed:2000,
		margin: 25,
		responsive: {
			0: {
				items: 1
			},

			640: {
				items: 2
			},
			
			768: {
				items: 3
			},

			991: {
				items: 5
			},

			1200: {
				items: 5
			}
			
			
			}
		});

	});


	$(window).on('load', function () {

		$('.slider-opinions').owlCarousel({
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		dots: false,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		loop: true,
		lazyLoad: false,
		rtl: true,
		nav: true,
		smartSpeed:2000,
		margin: 25,
		responsive: {
			0: {
				items: 2
			},

			768: {
				items: 2
			},

			300: {
				items: 1
			}
				}
		});

	});


	$(window).on('load', function () {

		$('.brand-slider').owlCarousel({
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
		dots: false,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		loop: true,
		lazyLoad: false,
		rtl: true,
		nav: true,
		smartSpeed:2000,
		margin: 25,
		responsive: {
			0: {
				items: 5
			},

			1365: {
				items: 5
			},


			768: {
				items: 4
			},
			
			480: {
				items: 3
			},

			300: {
				items: 2
			},


			}
		});

	});
	
  	$('.fancybox').fancybox();	
	

	
	$(document).mouseup(function(e){

    var container = $(".sub-menu");
    var container2 = $("#myNav, .clicker");
    var container3 = $(".search_sec, .search");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.removeClass("show");
    }
		
	 if (!container2.is(e.target) && container2.has(e.target).length === 0) 
    {
        container2.addClass("width");
		$("#body-overlay").addClass("opacity");
		$('body').removeClass("fixedPosition");
    }

    if (!container3.is(e.target) && container3.has(e.target).length === 0) 
    {
        $('.search_sec').removeClass("active");
    }

});
	

$(document).on("click",".header .search .search_btn",function(e) {
			e.preventDefault();
			$('.search_sec').toggleClass("active");
		});


	$("html").niceScroll({
			cursorcolor: "#FDB62F",
			cursorwidth: "7px",
			cursorborder: "none",
			 autohidemode: true,
			zindex: "9999"
	});


	$(window).on('load', function () {
    $('#single_slider').owlCarousel({
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true,
      dots: false,
      navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right '></i>"],
      loop: true,
      lazyLoad: false,
      rtl: true,
      nav: true,
      thumbs: true,
      thumbsPrerendered: true,
      thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        animateOut:"fadeOut",
    	animateIn:"fadeIn",
      smartSpeed:1500,
      margin: 0,
      responsive: {
        0: {
          items: 1
        }
      }
    });
});




});



function initMap() {
        var uluru = {lat: 24.7241504, lng:47.382996};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          animation:google.maps.Animation.BOUNCE
        });

}