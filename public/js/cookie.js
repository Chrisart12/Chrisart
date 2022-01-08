/*-----Start mise en place de cookie bar--------*/
$(function(){
 
 	if($.cookie('cookiebar') === undefined ) {
		$('body').append('<div class="cookie_bar" id="cookie_bar">En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de Cookies pour réaliser des statistiques de visites anonymes. <a href="https://www.google.com/analytics/terms/fr.html">En savoir plus</a><a href="#"class="cookie_btn" id="cookie_btn">OK</a></div>');
	
		$('#cookie_btn').click(function(e){
			e.preventDefault();
			$('#cookie_bar').fadeOut();
			$.cookie('cookiebar', 'viewed', {expires: 30 * 12});
		});
	}

});
/*----- End Mise en place de cookie bar--------*/
