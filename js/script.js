$(document).ready(function(){

	$('body').removeClass('preload');

	// Navigation menu knobs
	var knob = '<div class="knob">'+
			   	   '<div class="knob-cover">'+
				   '</div>'+
				   '<div class="knob-spinner">'+
				   '</div>'+
			   '</div>'+
			   '<div class="mark m-1"></div>'+
			   '<div class="mark m-2"></div>'+
			   '<div class="mark m-3"></div>'+
			   '<div class="mark m-4"></div>'+
			   '<div class="mark m-5"></div>'+
			   '<div class="mark m-6"></div>'+
			   '<div class="mark m-7"></div>'+
			   '<div class="mark m-8"></div>'+
			   '<div class="mark m-9"></div>'+
			   '<div class="mark m-10"></div>';
		menuItem = $('header .menu li a');
	
	menuItem.wrapInner('<span />');
		
	menuItem.prepend(knob)
	.on('mouseenter',function(){
		$(this).find('.knob-spinner').addClass('animated');
	}).on('mouseleave',function(){
		$(this).find('.knob-spinner').removeClass('animated');
	});
	
	// WELCOME
	
	var welcome = $('#welcome'),
		welcomeLetter = welcome.find('span span').first();
	
	welcome.fadeIn();
	
	welcomeLetter
		.animate({'top':15},150) 								// W
		.parent().next().children().animate({'top':23},300) 	// E
		.parent().next().children().animate({'top':13},450) 	// L
		.parent().next().children().animate({'top':30},600) 	// C
		.parent().next().children().animate({'top':22},750)		// O
		.parent().next().children().animate({'top':26},900) 	// M
		.parent().next().children().animate({'top':30},1050) 	// E
		.parent().next().children().animate({'top':10},1200) 	// T
		.parent().next().children().animate({'top':13},1350) 	// O
		.parent().next().children().animate({'top':42},1500) 	// R
		.parent().next().children().animate({'top':35},1650) 	// A
		.parent().next().children().animate({'top':38},1800) 	// R
		.parent().next().children().animate({'top':36},1950)	// E
		.parent().next().children().animate({'top':8 },2100)	// F
		.parent().next().children().animate({'top':11},2250)	// O
		.parent().next().children().animate({'top':8 },2400)	// R
		.parent().next().children().animate({'top':10},2550)	// M
		.parent().next().children().animate({'top':45},2700)	// M
		.parent().next().children().animate({'top':40},2850)	// A
		.parent().next().children().animate({'top':42},3000) 	// S
		.parent().next().children().animate({'top':39},3150)	// T
		.parent().next().children().animate({'top':45},3300)	// E
		.parent().next().children().animate({'top':39},3450)	// R
		.parent().next().children().animate({'top':42},3600)	// I
		.parent().next().children().animate({'top':37},3750) 	// N
		.parent().next().children().animate({'top':45},3900);	// G
		
	
	// Multiple column fix in IE8 and below
	
	$('.lt-ie9 .quad-column ul li').not(':last-child').append(',&nbsp;');

});