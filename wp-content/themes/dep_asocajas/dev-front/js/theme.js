(function($){

	const $GeneralScope = {

		// Constructor
		init: function() {
			this.menuScripts();
		},

		// scripts for Menu
		menuScripts: function() { 
			$(window).scroll(function() {

				let scroll    = $(window).scrollTop();
				let header_el = $('.navbar');

				if (scroll >= 100) {
					header_el.addClass("scroll_menu");
				} else {
					header_el.removeClass("scroll_menu");
				}
			});
		},
	}

	// -- Home -- //
	const $HomeScope = {

		// Constructor
		init: function() {
			// Instance functions
			this.homeSlider();
		},


		// scripts for banner
		homeSlider: function() {
			let slider_wrapper = $('.slider-wrapper');
			let slick_settings = {
				dots: false,
				arrows: true,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 6000,
				speed: 300,
				slidesToShow: 1,
				slidesToScroll: 1
			}

			if(!slider_wrapper.hasClass('slick-initialized')) {
				const slick_slider = slider_wrapper.slick(slick_settings);
			}
		},
	}

	// Trigger 
	$GeneralScope.init();

	// Home Scripts
	if($('body').hasClass('home')) {
		$HomeScope.init();
	}

})(jQuery);