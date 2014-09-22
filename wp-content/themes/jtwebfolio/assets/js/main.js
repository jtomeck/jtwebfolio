jQuery(document).ready(function($){

	var body = $("body");

	// MAIN NAVIGATION
	var menuToggle = $(".menu-toggle");
	var menu = $(".mobile-navigation");
	var menuHeight = $(window).outerHeight() - 165;

	menuToggle.click(function(e){
		if( menu.hasClass("toggled") ) {
			body.removeClass("toggled");
			menu.removeClass("toggled");
			menu.animate({
				height: "0"
			}, 500, function(){
				//Animation Complete
			});
		}else{
			body.addClass("toggled");
			menu.addClass("toggled");
			menu.animate({
				height: menuHeight
			}, 500, function(){
				//Animation Complete
			});
		}
		e.preventDefault();
	});
});