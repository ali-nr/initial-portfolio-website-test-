/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* FIXED NAVIGATION
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
(function($) {
    "use strict";
    /*****************************
    WHEN PAGE IS LOADING
    *****************************/
    $(window).load(function () {
    	scrollMenu();
	});
    /*****************************
    WHEN PAGE IS SCROLLING
    *****************************/
    $(window).scroll(function() {
    	scrollMenu();
    });
    /*****************************
    DEFINITION
    *****************************/
	function scrollMenu() {
		var scroll = $(window).scrollTop();
	    if (scroll > ($(window).height() -20)) {
			$("#header.big #navigation").addClass("navigation-fixed");
	    } else {
			$("#header.big #navigation").removeClass("navigation-fixed");
	    }
	    if (scroll > ($("#header").height() -20)) {
			$("#header.small #navigation").addClass("navigation-fixed");	
	    } 
	    else{
			$("#header.small #navigation").removeClass("navigation-fixed");
	    }
	    if (scroll > 20 & scroll < ($("#header").height() -20)) {
	        $("#header.small #navigation").fadeOut("100");
	    } else {
		    $("#header.small #navigation").fadeIn("1000"); 
	    }

	    if (scroll > 60 & scroll < $(window).height()) {
	        $("#header.big #navigation").fadeOut("100");
	    } else {
		    $("#header.big #navigation").fadeIn("1000"); 
	    }
	}
})(jQuery);