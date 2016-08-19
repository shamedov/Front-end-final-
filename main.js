/*nav-bar effekt*/
$(document).ready(function() {
	$(".menu > li").hover(function(){
		$(this).children('a').eq(0).find("~ ul").stop(false,true).fadeIn(300);
	},function(){
		$(this).children('a').eq(0).find("~ ul").stop(false,true).fadeOut(300);
	});
});
/*menu scroll*/
$('a[href^="#"]').on('click.smoothscroll',function (e) {
 e.preventDefault();
 
var target = this.hash,
 $target = $(target);
 
$('html, body').stop().animate({
 'scrollTop': $target.offset().top
 }, 500, 'swing', function () {
 window.location.hash = target;
 });
 });

/*opacity up button*/
$(document).ready(function(){

        $(window).scroll(function(){

            var Tbtn = $(this).scrollTop();

          $(".opacityBTN").html(Tbtn);

		if ( Tbtn >= 300 ) {
			$(".opacityBTN").stop().animate({'opacity':'1'},450);
			$("#head-nav").addClass('fixed')
		};

        if ( Tbtn < 300 ) {
        	$(".opacityBTN").stop().animate({'opacity':'0'},450);
        	$("#head-nav").removeClass('fixed')
        };

    })
})
/*hide effect left and right*/
var hgt = $(window).height();
$(window).scroll(function(){
    if ( ($(this).scrollTop()+hgt) >= $("#startup").offset().top) {
    	$("#startup .tabs").css({visibility:"visible"});
   		$("#startup .startImg1").addClass('animated hideLeft');
   		$("#startup .startText1").addClass('animated hideRight');

    }
})

 

