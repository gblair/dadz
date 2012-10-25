var dadz = {
	init : function() {
		dadz.contact();
		// dadz.popups();
	},
	// popups : function() {
	// 	$('.popup').colorbox({
	// 		fastIframe: false,
	// 		transition: 'none',
	// 		scrolling: false,
	// 		opacity: 0.6
	// 	});
	// },
	contact : function() {
		$('span.dadz').replaceWith(
			'<span>('+(2569-1652)+')-'+(92+64+128+256+43-10)+'-'+(16+27+2657)+'</span>'
		);
	},
}
$(function() {
	dadz.init();
});