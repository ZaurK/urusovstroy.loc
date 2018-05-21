$(function(){

$('a#adesignproject').on('click', function(){
   $('html,body').stop().animate({ scrollTop: $('#design-project').offset().top }, 1000);
});

$('a#aremontproject').on('click', function(){
   $('html,body').stop().animate({ scrollTop: $('#remont-project').offset().top }, 1000);
});

$('a#aadvantages').on('click', function(){
   $('html,body').stop().animate({ scrollTop: $('#advantages').offset().top }, 1000);
});

$('a#avideorow').on('click', function(){
   $('html,body').stop().animate({ scrollTop: $('#videorow').offset().top }, 1000);
});

$('a#aphotorow').on('click', function(){
   $('html,body').stop().animate({ scrollTop: $('#photorow').offset().top }, 1000);
});

$('a#colorlibfooter').on('click', function(){
   $('html,body').stop().animate({ scrollTop: $('#colorlib-footer').offset().top }, 1000);
});

});