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
      		if ($(window).width() > 350 && $(window).height() < 350) {
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
	skillIcon = $(".skills-icons .skill-icon");
	skillIconLastTwo = $(".skills-icons .skill-icon").slice(-2);
	skillText = $(".skills-text .skill-text");
	skillTextNum = $(".skills-text .skill-text:eq(" + $(this).index() + ")");
	skillIcon.click(function(){
		// Toggle triangle
		if( $(this).hasClass("triangle-toggled") ){
			$(this).removeClass("triangle-toggled");
		}else{
			skillIcon.removeClass("triangle-toggled");
			$(this).addClass("triangle-toggled");
		}
		/* If any icon has the triangle visible, add
		 * the toggle class to the last two skills */
		if( skillIcon.is(".triangle-toggled") ) {
			skillIconLastTwo.addClass("toggled");
		}else{
			skillIconLastTwo.removeClass("toggled");
		}

		if( $(".skills-text .skill-text:eq(" + $(this).index() + ")").hasClass("text-toggled") ) {
			$(".skills-text .skill-text:eq(" + $(this).index() + ")").removeClass("text-toggled");
		}else{
			skillText.removeClass("text-toggled");
			$(".skills-text .skill-text:eq(" + $(this).index() + ")").addClass("text-toggled");
		}
	});
});