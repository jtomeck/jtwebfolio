jQuery(document).ready(function($){
	// MISC VARIABLES
	var body = $("body");

	// SMOOTH ANCHOR SCROLL
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	      	if ($(window).width() < 960) {
		        $('html,body').animate({
		          scrollTop: target.offset().top - 140
		        }, 500);
		        return false;
		    }else{
		    	$('html,body').animate({
		          scrollTop: target.offset().top - 30
		        }, 500);
		        return false;
		    }
	      }
	    }
	  });
	});

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