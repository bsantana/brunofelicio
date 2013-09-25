$(function($){
	$(document).ready(function(){
		console.log($("#foo2"))
		$("#foo2").carouFredSel({
	circular: true,
	infinite: true,
	auto 	: f,
	prev	: {	
		button	: "#foo2_prev",
		key		: "left"
	},
	next	: { 
		button	: "#foo2_next",
		key		: "right"
	},
});
	});
})(jQuery);
