jQuery(document).ready(function($){
	
	var body = $("body");

	// BROWSER DETECTION
	var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
	var isChrome = navigator.userAgent.match('CriOS');

	// MAIN NAVIGATION
	var menuToggle = $(".menu-toggle");
	var menu = $(".mobile-navigation");
	var menuHeight = $(window).innerHeight();

	// MENU FUNCTIONALITY
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
			if(isSafari && !isChrome) {
				// Detect browser to correct browser height with address bar issues in safari
				menu.animate({
					// Set menuHeight in safari
					height: menuHeight-96
				}, 500, function(){
					//Animation Complete
				});
			}else{
				menu.animate({
					// Set menuHeight in all other browsers
					height: menuHeight-165
				}, 500, function(){
					//Animation Complete
				});
			}
		}
		e.preventDefault();
	});

	// HOMEPAGE SKILLS FUNCTIONALITY
	skill = $(".home-skills .skill");
	skillLastTwo = $(".home-skills .skill").slice(-2);
	skill.click(function(){
		if( $(this).hasClass("text-toggled") ){
			$(this).removeClass("text-toggled");
		}else{
			skill.removeClass("text-toggled");
			$(this).addClass("text-toggled");
		}
		
		if( skill.is(".text-toggled") ) {
			skillLastTwo.addClass("toggled");
		}else{
			skillLastTwo.removeClass("toggled");
		}
	});
});