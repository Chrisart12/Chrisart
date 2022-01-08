/*---Boutton  scroll to top----  */
$(function() {
	$("#btn_top").click(function() {
		
		$('html, body').animate({scrollTop:0},'slow');
	});

	$(window).scroll(function() {
	 if($(window).scrollTop() < 1400) {
	 	$("#btn_top").fadeOut();
	 } else {
	 	$("#btn_top").fadeIn();
	 }
	});

});
/*----- End scroll to top----------- */