$(function(){

$('a#adesignproject').on('click', function(){
	if ( $('body').hasClass('offcanvas') ) {
    			$('body').removeClass('offcanvas');
    			$('.js-zz-nav-toggle').removeClass('active');				
	    	}
   $('html,body').stop().animate({ scrollTop: $('#design-project').offset().top }, 1000);
});

$('a#aremontproject').on('click', function(){
if ( $('body').hasClass('offcanvas') ) {
    			$('body').removeClass('offcanvas');
    			$('.js-zz-nav-toggle').removeClass('active');				
	    	}
   $('html,body').stop().animate({ scrollTop: $('#remont-project').offset().top }, 1000);
});

$('a#aadvantages').on('click', function(){
	if ( $('body').hasClass('offcanvas') ) {
    			$('body').removeClass('offcanvas');
    			$('.js-zz-nav-toggle').removeClass('active');				
	    	}
   $('html,body').stop().animate({ scrollTop: $('#advantages').offset().top }, 1000);
});

$('a#avideorow').on('click', function(){
	if ( $('body').hasClass('offcanvas') ) {
    			$('body').removeClass('offcanvas');
    			$('.js-zz-nav-toggle').removeClass('active');				
	    	}
   $('html,body').stop().animate({ scrollTop: $('#videorow').offset().top }, 1000);
});

$('a#aphotorow').on('click', function(){
	if ( $('body').hasClass('offcanvas') ) {
    			$('body').removeClass('offcanvas');
    			$('.js-zz-nav-toggle').removeClass('active');				
	    	}
   $('html,body').stop().animate({ scrollTop: $('#photorow').offset().top }, 1000);
});

$('a#zzfooter').on('click', function(){
	if ( $('body').hasClass('offcanvas') ) {
    			$('body').removeClass('offcanvas');
    			$('.js-zz-nav-toggle').removeClass('active');				
	    	}
   $('html,body').stop().animate({ scrollTop: $('#zz-footer').offset().top }, 1000);
});

});
