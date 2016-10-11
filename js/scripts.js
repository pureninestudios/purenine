
$(document).ready(function() {

	"use strict";

	FirstLoad();
	PageAnim();
	HeroHeight();
	OpenAbout();
	ProjectExpander();
	FullPage();
	ClassicSlider();
	MagnificPopup();
	Shortcodes();
	ContactForm();
	retinajs();

});


$(window).on( 'resize', function () {
	HeroHeight();
});

$( window ).scroll(function() {
	HeroParallax();
});

/*--------------------------------------------------
Function Firs tLoad
---------------------------------------------------*/


	function FirstLoad() {

		$('body').jpreLoader({
			loaderVPos: '0',
			autoClose: false,
		});

		$("header").removeClass("hidden");

		$('body').waitForImages({
			finished: function() {
				setTimeout( function(){
					$("#hero").removeClass("hidden");
				} , 1000 );
			},
		waitForAll: true
		});

	}// End First Load



/*--------------------------------------------------
Function Page Animation
---------------------------------------------------*/


	function PageAnim() {

		$(".animsition").animsition({
			inClass: 'fade-in',
			outClass: 'fade-out',
			inDuration: 150,
			outDuration: 400,
			linkElement: '.animation-link',
			loading: true,
			loadingParentElement: 'body',
			loadingClass: 'animsition-loading',
			loadingInner: '',
			timeout: true,
			timeoutCountdown: 15000,
			onLoadEvent: true,
			browser: [ 'animation-duration', '-webkit-animation-duration'],
			overlay : false,
			overlayClass : 'animsition-overlay-slide',
			overlayParentElement : 'body',
			transition: function(url){ window.location.href = url; }
		  });

	}// End Page Animation



/*--------------------------------------------------
Function Page Share
---------------------------------------------------*/

	function PageShare() {


		$('#page-content').append('<share-button class="share-button"></share-button>');

		setTimeout( function(){
			config = {
			  networks: {
				pinterest: {
				  enabled: false
				},
				googlePlus: {
				  enabled: false
				},
				reddit: {
				  enabled: false
				},
				linkedin: {
				  enabled: false
				},
				whatsapp: {
				  enabled: false
				},
				email: {
				  enabled: false
				}
			  }
			}

			var share = new ShareButton('.share-button', config);
		} , 1000 );

	}//End PageShare



/*--------------------------------------------------
Function Hero Height
---------------------------------------------------*/

	function HeroHeight() {

		var heights = window.innerHeight;
		if( $('#hero').length > 0 ){
			var heights = window.innerHeight;
			document.getElementById("hero").style.height = heights + "px";
		}

	}//End Hero Height



/*--------------------------------------------------
Function Hero Parallax
---------------------------------------------------*/

	function HeroParallax() {

		var page_title = $('body');
		var block_intro = $('#hero-styles');
		if( block_intro.length > 0 ) var block_intro_top = block_intro.offset().top;

		var current_top = $(document).scrollTop();
		var hero_height = $('#hero-styles').height();
		if( $('#hero-styles').hasClass('parallax-hero')){
			block_intro.css('transform', 'translate3d(0, ' + current_top * 0.5 + 'px, 0)');
		}


	}//End Hero Parallax



/*--------------------------------------------------
Function Open About
---------------------------------------------------*/

	function OpenAbout() {

		$("li.about-open").on('click', function() {
			$.fn.fullpage.setAllowScrolling(false);
			$(".about-open").toggleClass("hidden");
			$(".about-close").toggleClass("hidden");
			$("#about-us").toggleClass("is-active");
		});

		$("li.about-close").on('click', function() {
			$.fn.fullpage.setAllowScrolling(true);
			$(".about-open").toggleClass("hidden");
			$(".about-close").toggleClass("hidden");
			$("#about-us").toggleClass("is-active");
			$('#about-us').animate({scrollTop : 0},300);
		});

	}//End Open About



/*--------------------------------------------------
Function Progress Bar
---------------------------------------------------*/

	function ProgressBar() {

		var getMax = function(){
			return $(document).height() - $(window).height();
		}

		var getValue = function(){
			return $(window).scrollTop();
		}

		if('max' in document.createElement('progress')){
			var progressBar = $('progress');

			progressBar.attr({ max: getMax() });

			$(document).on('scroll', function(){
				progressBar.attr({ value: getValue() });
			});

			$(window).resize(function(){
				progressBar.attr({ max: getMax(), value: getValue() });
			});
		}
		else {
			var progressBar = $('.progress_bar'),
				max = getMax(),
				value, width;

			var getWidth = function(){
				value = getValue();
				width = (value/max) * 100;
				width = width + '%';
				return width;
			}

			var setWidth = function(){
				progressBar.css({ width: getWidth() });
			}

			$(document).on('scroll', setWidth);
			$(window).on('resize', function(){
				max = getMax();
				setWidth();
			});
		}

	  $('#flat').addClass("active");
	  $('#progressBar').addClass('flat');

	  $('#flat').on('click', function(){
		$('#progressBar').removeClass().addClass('flat');
		$('a').removeClass();
		$(this).addClass('active');
		$(this).preventDefault();
	  });


	}//End Progress Bar



/*--------------------------------------------------
Function Show Hide Header
---------------------------------------------------*/

	function ShowHideHeader() {

		var didScroll;
		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('header').outerHeight() - 140;

		$(window).scroll(function(event){
			didScroll = true;
		});

		setInterval(function() {
			if (didScroll) {
				hasScrolled();
				didScroll = false;
			}
		}, 50);

		function hasScrolled() {
			var st = $(this).scrollTop();

			if(Math.abs(lastScrollTop - st) <= delta)
				return;

			if (st > lastScrollTop && st > navbarHeight){
				// Scroll Down
				$('header').removeClass('nav-down').removeClass('nav-up-temp').addClass('nav-up');
				$('#project_close').removeClass('nav-down').removeClass('nav-up-temp').addClass('nav-up');
			} else {
				// Scroll Up
				if(st + $(window).height() < $(document).height()) {
					$('header').removeClass('nav-up').addClass('nav-down');
					$('#project_close').removeClass('nav-up').addClass('nav-down');
				}
			}

			lastScrollTop = st;
		}


		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll >= 400) {
				$("header").addClass("black-header");
				$("#project_close").addClass("black-header");
			} else {
				$("header").removeClass("black-header");
				$("#project_close").removeClass("black-header");
			}
		});

	}//End Show Hide Header



/*--------------------------------------------------
Function Project Expander
---------------------------------------------------*/

	function closeSection() {
		$('#showcase-slider').removeClass('expanded');
		$.fn.fullpage.setAllowScrolling(true);
		$('#menu').removeClass('hover');
		$('.section-info').removeClass('hidden');
		setTimeout(function(){
			$("#project_close").addClass("hide");
			$('#menu').removeClass('hidden');
			$('#fp-nav').removeClass('hidden');
			$('#showcase-nav').removeClass('hidden');
			$('.share-button').removeClass('hidden');
			$('#showcase-slider').addClass('delay');
		},( 1000 ));
		setTimeout(function(){$('.hamburger').removeClass('hidden');},( 500 ));
		setTimeout(function(){$('.blog-left').removeClass('inactive'); $('.disable-section').removeClass('active');},( 1550 ));
		setTimeout(function(){$('.blog-right').removeClass('active');},( 1300 ));
		setTimeout(function(){$('#project-page-data').removeClass('is-open');},( 1100 ));
		setTimeout(function(){$('#project-page-holder, #project-page-data').height('0');},( 1100 ));
		setTimeout(function(){$(".project-page").remove();},( 1100 ));
		return false;
	}

	function ProjectExpander() {

		$('#showcase-slider .section .open-project-link:not(.external)').on('click', function() {

			var sectionTitle, sectionSlug;

			sectionTitle = $(this).data('section-title');
			sectionSlug = $(this).data('section-slug');

			history.pushState(null, sectionTitle, '/#' + sectionSlug + '');

			$('#menu').addClass('hidden');
			$('#progressBar').addClass('active');
			$.fn.fullpage.setAllowScrolling(false);

			var myUrl = $(this).find('.open-project').attr("href") + " .item-data";

				$('.disable-section').addClass('active');


				setTimeout(function(){
					$('#loader-line-box').addClass('is-open');
				},( 200 ));
					setTimeout(function(){
						$("#project-page-data").load(myUrl,function(e){

						$('#project-page-holder').waitForImages({
							finished: function() {

								///Init scripts here
								if( $('#project_next').length > 0 ){
									var heights1 = window.innerHeight;
									document.getElementById("project_next").style.height = heights1  + "px";

									$(".project-link").on({
										 mouseenter: function () {
											 $('#project_next').addClass("hover");
										 },
										 mouseleave: function () {
											 $('#project_next').removeClass("hover");
										 }
									});

									$("#project_close").on({
										 mouseenter: function () {
											 $('#menu').addClass("hover");
										 },
										 mouseleave: function () {
											 $('#menu').removeClass("hover");
										 }
									});
								}

								ClassicSlider();
								Shortcodes();
								MagnificPopup();

								setTimeout(function(){

									$('#project-page-data').addClass('is-open');
									setTimeout(function(){
										$('#project-page-holder, #project-page-data').height($('.project-page').height());
									},( 500 ));

									setTimeout(function(){
										$('#loader-line-box').removeClass('is-open');
										$('#fp-nav').addClass('hidden');
										$('.section-info').addClass('hidden');
										$('#showcase-nav').addClass('hidden');
										$('.share-button').addClass('hidden');
										$('#showcase-slider').removeClass('delay');
										setTimeout(function(){
										$("#project_close").removeClass("hide");
										},( 400 ));
										setTimeout(function(){
											$('html, body').animate({scrollTop : 400},800);
											$('#project_next').footerReveal({ shadow: false, zIndex: 0 });
											ProgressBar();
											ShowHideHeader();
										},( 1000 ));
									},( 300 ));

								},( 500 ));
							},
								waitForAll: true
							});


						});

					},( 500 ));

			return false;

		});

		$(document).on('click', '#project_close', function(event) {
			event.preventDefault();
			$('html, body').animate({scrollTop : 0},800);
			closeSection();
			setTimeout(function(){history.back();}, 1000);
		});

		$(document).on('click', '.project-link', function(event) {
			$('#showcase-slider').addClass('expanded');
			$.fn.fullpage.moveSectionDown();
			$("#project_next").addClass("disabled");
			$('#progressBar').removeClass('active');
			$(".next-project-footer").addClass("disabled");
			setTimeout(function(){$('header').addClass('nav-up-temp');
			$('#project_close').addClass('nav-up-temp');},( 220 ));
			$('html, body').animate({scrollTop: $("#nav-anchor").offset().top}, 200);
			setTimeout(function(){$('html, body').animate({scrollTop : 0},0);},( 300 ));
			$("#project_close").removeClass("hide");
			setTimeout(function(){$('#showcase-slider .section.active a.open-project').trigger('click');},( 600 ));
			return false;
		});

	} //End Project Expander

/*--------------------------------------------------
Function FullPage
---------------------------------------------------*/

	function FullPage() {

		if( $('#showcase-slider').length > 0 ){

			$('#showcase-slider').fullpage({
       			css3: true,
				navigation: true,
				loopBottom: true,
				loopTop: true,
        		navigationPosition: 'right',
				anchors :['nat-geo', 'djbooth', 'madden', 'audiomack', 'pga-tour', 'activision', 'guardian'],
				onLeave: function(index, nextIndex, direction){

					$('html').removeClass('initial-load');

					$(window).scroll(function() {
						var scroll = $(window).scrollTop();

						if (scroll >= $('#hero').height() - 150) {
							if ($(".active").hasClass("video")) {
							video.pause();
							}
						} else {
							if ($(".active").hasClass("video")) {
							video.play();
							}
						}
					});

				}
       		});

			$.fn.fullpage.setKeyboardScrolling(false);

			$('.showcase-prev').on('click', function() {
				$.fn.fullpage.moveSectionUp();
			});

			$('.showcase-next').on('click', function() {
				$.fn.fullpage.moveSectionDown();
			});

		}

	}//End FullPage



/*--------------------------------------------------
Function Classic Slider
---------------------------------------------------*/

	function ClassicSlider() {

		if( $('.classic-slider').length > 0 ){
			$('.classic-slider').flexslider({
				animation: "slide",
				direction: "horizontal",
				animationSpeed: 1000,
				animationLoop: true,
				smoothHeight: false,
				controlNav: false,
				slideshow: false,
			});
		}

	}//End ClassicSlider



/*--------------------------------------------------
Function MagnificPopup
---------------------------------------------------*/

	function MagnificPopup() {

		var mfp = $('.mfp-gallery');
		if(mfp.length) {
			mfp.each(function(index, element) {
				$(element).magnificPopup({
					  delegate: 'a.mf-zoom',
					  type: 'image',
					  image: {
						  markup: '<div class="mfp-figure">'+
									'<div class="mfp-close"></div>'+
									'<div class="mfp-img"></div>'+
								  '</div>' +
								  '<div class="mfp-bottom-bar">'+
									'<div class="mfp-title"></div>'+
									'<div class="mfp-counter"></div>'+
								  '</div>',

						  cursor: 'mfp-zoom-out-cur',

						  verticalFit: true, // Fits image in area vertically

						  tError: '<a href="%url%">The image</a> could not be loaded.' // Error message
						},
						gallery: {
						  enabled:true,
						  tCounter: '<span class="mfp-counter">%curr% / %total%</span>' // markup of counter
						},
					  mainClass: 'mfp-zoom-in',
					  tLoading: '',
					  removalDelay: 300, //delay removal by X to allow out-animation
					  callbacks: {
						imageLoadComplete: function() {
						  var self = this;
						  setTimeout(function() {
							self.wrap.addClass('mfp-image-loaded');
						  }, 16);
						},
						close: function() {
						  this.wrap.removeClass('mfp-image-loaded');
						}
					  },
					  closeBtnInside: false,
					  closeOnContentClick: true,
					  midClick: true
					});
			});
		}

	}//End MagnificPopup



/*--------------------------------------------------
Function Shortcodes
---------------------------------------------------*/

	function Shortcodes() {

		//Progress bar animations
		$('.progress-bar li').each(function(i){
			$(this).appear(function(){
				var percent = $(this).find('span').attr('data-width');
				var $endNum = parseInt($(this).find('span strong i').text(),10);
				var $that = $(this);
				$(this).find('span').animate({
					'width' : percent + '%'
				},1600, function(){
				});
				$(this).find('span strong').animate({
					'opacity' : 1
				},1400);
				$(this).find('span strong i').countTo({
					from: 0,
					to: $endNum,
					speed: 1200,
					refreshInterval: 30,
					onComplete: function(){}
				});
				if(percent == '100'){
					$that.find('span strong').addClass('full');
				}
			});
		});

		// Milestone counters
		if( jQuery('.clapat-counter').length > 0 ){
		$('.clapat-counter').each(function() {
			$(this).appear(function() {
				var $endNum = parseInt($(this).find('.number').text(),10);
				$(this).find('.number').countTo({
					from: 0,
					to: $endNum,
					speed: 1500,
					refreshInterval: 30
				});
			},{accX: 0, accY: 0});
		});
		}

		// Text Carousel
		if( $('.text-carousel').length > 0 ){
			$(".text-carousel").owlCarousel({
				loop:true,
				dots:true,
				dotsEach: 1,
				items:1,
				autoplay:true,
				smartSpeed: 750,
				autoplayHoverPause:true
			});
		}

		// Appear Item Animation
		$('.has-animation').each(function() {
			$(this).appear(function() {
				$(this).delay($(this).attr('data-delay')).queue(function(next){
					$(this).addClass('animate-in');
					next();
				});
			});

		});

	}//End Shortcodes




/*--------------------------------------------------
Function Contact Formular
---------------------------------------------------*/

	function ContactForm() {

		if( jQuery('#contact-formular').length > 0 ){
			$('#contactform').submit(function(){
				var action = $(this).attr('action');
				$("#message").slideUp(750,function() {
				$('#message').hide();
				$('#submit').attr('disabled','disabled');
				$.post(action, {
					name: $('#name').val(),
					email: $('#email').val(),
					comments: $('#comments').val()
				},
				function(data){
					document.getElementById('message').innerHTML = data;
					$('#message').slideDown('slow');
					$('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
					$('#submit').removeAttr('disabled');
					if(data.match('success') != null) $('#contactform').slideUp('slow');

				}
				);
				});
				return false;
			});
		}

	}//End ContactForm

	(function($){
		"use strict";
		$(window).load(function() {

			$('body').delay(100).queue(function(next){
				$(this).addClass('all-loaded');
				next();
			});

			$('.p9-loader').delay(3500).fadeOut(200);

			function onLoadNotFirst() {
				if ( !$('html').hasClass('initial-load') ){

					$('.fp-section.active').find('.open-project-link').click();

				}
			}
			setTimeout(onLoadNotFirst, 4800);

			// Stop unsightly "jump" when pressing back button
			history.scrollRestoration = 'manual';
			$(window).on("popstate", function(e) {
				// Trigger "project close" when clicking back button
		    	if (e.originalEvent.state == null) {
					$('html, body').animate({scrollTop : 0},800);

					setTimeout(closeSection, 1000);
		    	}
		  	});

		});
	})(jQuery);
