$(function(){
	$('.demo1').scroller();
	
	$('.demo2').scroller({
		container: {
			easing: 'easeOutExpo'
		},
		options: {
			margin: 25,
			zoom: 2,
			easing: ['easeInSine', 'easeOutElastic'],
			duration: [300, 1200]
		},
		onclick: function(a, img){
			var alt = img.attr('alt'), h2 = $('.title');
			h2.text(alt);
		}
	});
	
	$('.demo3').scroller({
		container: {
			easing: 'easeOutElastic'
		},
		direction: 'vertical'
	});
	
});
