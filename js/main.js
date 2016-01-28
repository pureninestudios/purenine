/*

	COMMITY TEMPLATE  V1.0 BY SUPVIEW.BE
	
	
	01. STICKY HEADER TEXT
	02. PARALLAX SETTINGS
	03. NAVIGATION SHOW HIDE
	04. PORTFOLIO / WORKS SECTION
	05. SMOOTH SCROLLING
	06. FLEXSLIDER
	07. TWITTER FEED
	08. SHOW / HIDE BURGER DEPENDING ON SCROLL DIRECTION
	09. BX SLIDER

*/


jQuery(document).ready(function($){

  "use strict";


    mediaCheck({
        media: '(max-width: 1024px)',  /* If the page is max-width:1024px do the entry */
        entry: function () {
		

        },
        exit: function () { /* If not do the exit function */


/*-----------------------------------------------------------------------------------*/
/*	02. PARALLAX SETTINGS
/*-----------------------------------------------------------------------------------*/
	

			//.parallax(xPosition, speedFactor, outerHeight) options:
			//xPosition - Horizontal position of the element
			//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
			//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
			$('#header').parallax("1%", -0);	
			$('.intersection').parallax("50%", 0.6);	
        }
  
  
  
    }); /* END OF THE MEDIACHECK */



/*-----------------------------------------------------------------------------------*/
/*	03. NAVIGATION SHOW HIDE
/*-----------------------------------------------------------------------------------*/

	$(".navToggle").on("click", function(){
		  
		  $(this).toggleClass("open");
		  
		  $("#menu").toggleClass("active");	

			setTimeout(
			  function() 
			  {
					$('nav a').each(function(i){
						var t = $(this);
						setTimeout(function(){ t.toggleClass('active'); }, (i+1) * 100)
						
					});
			
			  }, 200);
				
			var $social = $('.social-links');
			
			if ( $(this).hasClass('open') ){
				
				setTimeout(
				 	 function() 
				 	 {  
					  $social.fadeIn(300);	
				}, 800);
				
			} else {
				
				$social.fadeOut(100);
				
			}
				  
				  		  
		  		  $(".bgblack").toggleClass("active");	
		  		  

		  
	  });
	
	$('.bgblack, nav a').on('click', function() {	

		$(".social-links").fadeToggle("active");	

			setTimeout(
			  function() 
			  {
					$('nav a').each(function(i){
						var t = $(this);
						setTimeout(function(){ t.toggleClass('active'); }, (i+1) * 100);
					});
			
			  }, 200);



		setTimeout( "$('#menu, .bgblack').toggleClass('active');",1200 );

		$(".navToggle").toggleClass("open");
		

	});



/*-----------------------------------------------------------------------------------*/
/*	05. SMOOTH SCROLLING
/*-----------------------------------------------------------------------------------*/
	
	
	$('.go-down a, nav a').click(function(e){
	    $('html,body').scrollTo(this.hash,this.hash,  {'axis':'y'});
	    e.preventDefault();
	});


/*-----------------------------------------------------------------------------------*/
/*	06. Flexslider
/*-----------------------------------------------------------------------------------*/
	

      $('#agency_img').flexslider({
        animation: "slide",
        itemMargin: 3,
      });

      $('#agency_text').flexslider({
        animation: "fade",
        itemMargin: 3,
        sync: "#agency_img",
      });

      $('#clients_img').flexslider({
        animation: "fade",
        animationLoop: true,
        slideshowSpeed: 2000, 
      });

      $('#members_slides').flexslider({
        animation: "slide",
        animationLoop: true,
      });



/*-----------------------------------------------------------------------------------*/
    /*	07. TWITTER FEED
/*-----------------------------------------------------------------------------------*/



/*-------- ### HOW TO CREATE A VALID ID TO USE: ###
 * Go to www.twitter.com and sign in as normal, go to your settings page.
 * Go to "Widgets" on the left hand side.
 * Create a new widget for what you need eg "user time line" or "search" etc.
 * Feel free to check "exclude replies" if you don't want replies in results.
 * Now go back to settings page, and then go back to widgets page and
 * you should see the widget you just created. Click edit.
 * Look at the URL in your web browser, you will see a long number like this:
 * 345735908357048478
 * Use this as your ID below instead!
-----*/


var config1 = {
  "id": '346694115758575616',
  "domId": 'twitter',
  "maxTweets": 1,
  "enableLinks": true
};
twitterFetcher.fetch(config1);




}); /* END OF Document Ready */


(function($){
	"use strict";
    $(window).load(function() {
        
        // Pre-loader
        $('.ss-preloader').delay(250).fadeOut(350);
        $('body').removeClass('no-scroll');
        
        // ==========================================================================
        // Fade in
        // ==========================================================================
        
        $('.logo-main').delay(650).queue(function(next){
        
        	$(this).addClass('faded');
        	next();
        	
        });
        
        $('.navToggle').delay(750).queue(function(next){
        
        	$(this).addClass('faded');
        	next();
        	
        });
        
        $('.huge-title h1').delay(1000).queue(function(next){
        
        	$(this).addClass('faded');
        	next();
        	
        });
        
        $('.social-links-top').delay(1100).queue(function(next){
        
        	$(this).addClass('faded');
        	next();
        	
        });
        
    });
})(jQuery);

/* ----------------------------------------------------------------------------------------------------------
	/* 08. SHOW / HIDE BURGER BASED ON SCROLL DIRECTION 
---------------------------------------------------------------------------------------------------------- */

$(function () {

	var $win = $(window),
		$doc = $(document),
		$nav = $('.burger-wrap'),
		isTouch = Modernizr.touch,
		scrolled = 200,
		upTop = 0;
		
		
	// Only run function if window is bigger than 640px and NOT touch enabled
	if ( $(window).width() > 640 && !isTouch ){
		
		$win.scroll(function(event){
			
			var newTop = $(this).scrollTop(),
				scrollDir;
				
			// Scroll down
			if ( newTop > upTop ){
			
				$nav.removeClass('going-up').addClass('going-down');
				scrollDir = 'down';
				
			// Scroll up
			} else {
			
				$nav.removeClass('going-down').addClass('going-up');
				scrollDir = 'up'
				
			}
			
			// Define new upTop value
			upTop = newTop;
			
			// Add "hide" class to burger wrap
			
			if ( $win.scrollTop() > 140 && $win.scrollTop() < 199 && scrollDir == 'down' ){
				
				$nav.addClass('hide');
				
			}
			
			// Add "scroll" class to burger wrap
			
			if ( $win.scrollTop() >= scrolled ) {
				
				$nav.removeClass('hide').addClass('scrolled');
				
			}
			
			// Remove all classes, add "up-top" class to burger wrap
			if ($win.scrollTop() == 0 ){
				
				$nav.removeClass('scrolled going-up going-down hide').addClass('up-top');
				
			} else {
				
				$nav.removeClass('up-top');
				
			}
			
		});
		
	}// conditional

}); // entire function

/* ----------------------------------------------------------------------------------------------------------
	/* 09. BX SLIDER
---------------------------------------------------------------------------------------------------------- */

	$(function () {
	
		$('.bxslider li:first-child').addClass('current');
	
		var slider = $('.bxslider').bxSlider({
		  mode : 'fade',
		  speed : 1000,
		  auto : true,
		  autoHover : true,
		  controls : false,
		  pager : false,
		  
		  // Remove "current" class from all slides
		  onSlideBefore: function(){
		  
		  	$('li').removeClass('current');
		  	  
		  },
		  
		  // Add "current" class to current slide
		  onSlideAfter: function(){
		    
			  var $index = $(this).find('li[aria-hidden="false"]');
			  $index.addClass('current');
		    
		  }
		});
		
		// Stop slider once pager is triggered
		
		$('.bx-controls a').click(function(){
		
			slider.stopAuto();
			
		});
	
	});
