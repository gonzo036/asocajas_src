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
			this.newsSlider();
			this.timeSlider();
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

		// scripts for banner
		newsSlider: function() {
			let slider_wrapper = $('.home-news--wrapper');
			let slick_settings = {
				dots: false,
				arrows: true,
				slidesToShow: 3,
				infinite: false,
				slidesToScroll: 3,
				responsive: [				
					{
						breakpoint: 680,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			}

			if(!slider_wrapper.hasClass('slick-initialized')) {
				const slick_slider = slider_wrapper.slick(slick_settings);
			}
		},

		// scripts for banner
		timeSlider: function() {
			let slider_wrapper = $('.time--numbers');
			let time_items = slider_wrapper.find('.time--number');
			let time_tab = $('.time---detail');

			let slick_settings = {
				dots: false,
				arrows: true,
				slidesToShow: 6,
				infinite: false,
				slidesToScroll: 6,
				accessibility: false,
				responsive: [				
					{
						breakpoint: 680,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			}

			if(!slider_wrapper.hasClass('slick-initialized')) {
				const slick_slider = slider_wrapper.slick(slick_settings);
			}

			if(time_items) {
				time_items.each(function(index, el) {
					let instance = $(this);
					let yearclick = instance.data('year');

					instance.click(function(event) {
						/* Act on the event */
						time_items.removeClass('active');
						time_tab.css('display','none');

						instance.addClass('active');
						$('.time--details').find("[data-year="+yearclick+"]").css('display','block');
					});
				});
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