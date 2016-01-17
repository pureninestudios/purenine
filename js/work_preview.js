/*-----------------------------------------------------------------------------------*/
/*	04. PORTFOLIO / WORKS SECTION
/*-----------------------------------------------------------------------------------*/


$(document).ready(function () { // Document ready

	/* Open Action don't remove */
	
	function openAction() {
	
	
		$('body').css("overflow","hidden");
		
		var $shadow;
		
		$shadow = $('.shadow:visible');
		for ( var i = 0; i < $shadow.length; i++ ) {
			el = $shadow.eq(i);
			el.children('.work-content').delay(800).addClass('show');
		}
	}
	
	/* Close Action don't remove */
	
	
	function closeAction() {
	
	
		$('body').css("overflow","auto");
	
		var $list;
		
		$list = $('.work-content:visible');
		for ( var i = 0; i < $list.length; i++ ) {
			el = $list.eq(i);
			el.removeClass('show');
		}
	
		$list = $('.shadow');
		for ( var i = 0; i < $list.length; i++ ) {
			$list.eq(i).delay(800).fadeOut("slow");
		}
				
	}
	


	/* Close Action don't remove */
	
	
	$('.closex').on('click', function() {	
		closeAction();
	});
	
	
	/* Close Action when Escape is pressed */
	
	
	$(window).keyup(function(e) {
	
		switch( e.keyCode ) {
			
			case 27:			
				closeAction();
		}});
	
	
	/* WORK 1 */
	
	$('.work1').on('click', function() {
	    $('.work1-container').fadeIn( 800,  function() { 
	    	openAction();     
	    });
	});
	
	/* WORK 2 */
	
	$('.work2').on('click', function() {
	    $('.work2-container').fadeIn( 800,  function() { 
	    	openAction();     
	    });
	});
	
	/* WORK 3 */
	
	$('.work3').on('click', function() {
	    $('.work3-container').fadeIn( 800,  function() { 
	    	openAction();     
	    });
	});
	
	/* WORK 4 */
	
	$('.work4').on('click', function() {
	    $('.work4-container').fadeIn( 800,  function() { 
	    	openAction();     
	    });
	});
	
	/* WORK 5 */
	
	$('.work5').on('click', function() {
	    $('.work5-container').fadeIn( 800,  function() { 
	    	openAction();     
	    });
	});
	
	/* WORK 6 */
	
	$('.work6').on('click', function() {
	    $('.work6-container').fadeIn( 800,  function() { 
	    	openAction();     
	    });
	});
	
});