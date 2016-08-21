
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

	/*launch fadein*/
	$('#launch').addClass('animated fadeIn');

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
	//startup
	var hgt = $(window).height();
	$(window).scroll(function(){
	    if ( ($(this).scrollTop()+hgt) >= $("#startup").offset().top) {
	    	$("#startup .tabs").css({visibility:"visible"});
	   		$("#startup .startImg1").addClass('animated hideLeft');
	   		$("#startup .startText1").addClass('animated hideRight');

	    }
	})
	//texnology
	$(window).scroll(function(){
	    if ( ($(this).scrollTop()+hgt) >= $("#texnology").offset().top) {
	    	$("#texnology .i-mack").css({visibility:"visible"});
	   		$("#texnology .texText").addClass('animated hideLeft');
	   		$("#texnology .texImg").addClass('animated hideRight');

	    }
	})
	//helmet
	$(window).scroll(function(){
	    if ( ($(this).scrollTop()+hgt) >= $("#helmet").offset().top) {
	    	$("#helmet .helm").css({visibility:"visible"});
	   		$("#helmet .helmImg").addClass('animated hideLeft');
	   		$("#helmet .helmText").addClass('animated hideRight');

	    }
	})
	//liveup
	$(window).scroll(function(){
	    if ( ($(this).scrollTop()+hgt) >= $("#liveUp").offset().top) {
	    	$("#liveUp .liveBoss").css({visibility:"visible"});
	   		$("#liveUp .liveText").addClass('animated hideLeft');
	   		$("#liveUp .liveInp").addClass('animated hideRight');

	    }
	})
	//mackbook
	$(window).scroll(function(){
	    if ( ($(this).scrollTop()+hgt) >= $("#mackbook").offset().top) {
	    	$("#mackbook .mack-tab").css({visibility:"visible"});
	   		$("#mackbook .geleee").addClass('animated flipInX');
	   		$("#mackbook .geleee1").addClass('animated flipInY');


	    }
	}) 
	/*features*/
	$(window).scroll(function(){
	    if ( ($(this).scrollTop()+hgt) >= $("#features").offset().top) {
	    	$("#features .featBoss").css({visibility:"visible"});
	   		$("#features .feat1").addClass('animated hideLeft');
	   		$("#features .feat2").addClass('animated hideRight');

	    }
	})


/**/



 

