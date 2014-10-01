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
      		if ($(window).width() > 400 && $(window).height() < 400) {
		    	$('html,body').animate({
		          scrollTop: target.offset().top - 90
		        }, 500);
		        return false;
		    }else{
		        $('html,body').animate({
		          scrollTop: target.offset().top - 140
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
	var screenHeight = $(window).innerHeight();

	// MENU FUNCTIONALITY
	menuToggle.click(function(e){
		if( menu.hasClass("toggled") ) {
			body.removeClass("toggled");
			menu.removeClass("toggled");
			
		}else{
			body.addClass("toggled");
			menu.addClass("toggled");
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