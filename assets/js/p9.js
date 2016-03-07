// ==========================================================================
// Document ready
// ==========================================================================

(function($) {

	var windowHeight = $(window).height();
	
	$('.full-height').css({ 'height' : windowHeight });
	
	// ==========================================================================
	// Scroll to div
	// ==========================================================================
	
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
	   		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		   		var target = $(this.hash);
		   		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		   		if (target.length) {
			   		$('html, body').animate({
				   		scrollTop: target.offset().top
				   	}, 1000);
				   	return false;
				}
			}
		});
	});

})(jQuery);

// ==========================================================================
// Window load
// ==========================================================================

(function($){
	"use strict";
    $(window).load(function() {
        
    });
})(jQuery);