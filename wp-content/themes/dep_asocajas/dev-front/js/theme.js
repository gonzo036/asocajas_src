(function($){

	const $GeneralScope = {

		// Constructor
		init: function() {
			this.menuScripts();
			this.fancyScripts();
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

		fancyScripts: function(){
			$('[data-fancybox="gallery"]').fancybox({
				loop: false,
				gutter: 50,
				keyboard: true,
				preventCaptionOverlap: true,
				arrows: true,
				infobar: true,
				buttons: [
					"zoom",
					//"share",
					"slideShow",
					//"fullScreen",
					"download",
					"thumbs",
					"close"
				],
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
			this.homeCounter();
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
				slidesToScroll: 1,
				adaptiveHeight: true
			}

			if(!slider_wrapper.hasClass('slick-initialized')) {
				const slick_slider = slider_wrapper.slick(slick_settings);
			}
		},

		// scripts for news
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

		// scripts for history
		timeSlider: function() {
			let slider_wrapper = $('.time--numbers');
			let time_items = slider_wrapper.find('.time--number');
			let time_tab = $('.time---detail');
			let numbersball = time_items.find('.time--holder');

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
					let yearcolor = instance.data('color');
					let numberball = instance.find('.time--holder');

					instance.click(function(event) {
						/* Act on the event */
						time_items.removeClass('active');
						time_tab.css('display','none');
						numbersball.css('background-color','#f6f6f6');

						instance.addClass('active');
						$('.time--details').find("[data-year="+yearclick+"]").css({
							'display' : 'block',
							'background-color': yearcolor
						});
						numberball.css('background-color', yearcolor);
					});
				});
			}
		},

		// scripts for counter
		homeCounter: function() {

			let numberItems = $('.numbers--item');
			

			$('.counter').counterUp({
			    delay: 10,
			    separator: '.',
			    time: 1500
			});

			if(numberItems) {
				numberItems.each(function(index, el) {
					let instance   = $(this);
					let numberItem = instance.find('h4');
				});
			}
		}
	}

	// -- Press -- //
	const $PressScope = {

		// Constructor
		init: function() {
			// Instance functions
			this.videoSlider();
			this.gallerySlider();
		},

		// Scripts Video
		videoSlider: function() {
			let slider_wrapper = $('.video-news--wrapper');
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

		// Scripts Gallery
		gallerySlider: function() {
			let slider_wrapper = $('.gallery-news--wrapper');
			let slick_settings = {
				dots: false,
				arrows: true,
				slidesToShow: 4,
				infinite: false,
				slidesToScroll: 4,
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
	}

	// Trigger 
	$GeneralScope.init();

	// Home Scripts
	if($('body').hasClass('home')) {
		$HomeScope.init();
	}

	// Home Scripts
	if($('body').hasClass('page-template-templates_prensa-tpl-php') || $('body').hasClass('single-post')  ) {
		$PressScope.init();
	}

})(jQuery);