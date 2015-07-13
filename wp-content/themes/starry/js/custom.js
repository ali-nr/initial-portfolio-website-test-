/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* MAIN JAVASCRIPT 
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
(function($) {
    "use strict";
    /*****************************
    WHEN PAGE IS LOADING
    *****************************/
    $(window).load(function () {
    	//PAGE LOADER
	    $("#loader").fadeOut(1000);
	    //PORTFOLIO
	    var $container = $('.portfolio-container');
		// initialize
		$container.isotope({
		  itemSelector: '.portfolio-item'
		});
		$('#portfolio-filters').on( 'click', 'button', function() {
		  var filterValue = $(this).attr('data-filter');
		  $container.isotope({ filter: filterValue });
		});
		//CHECK IF THE FILTER IS NOT EMPTY ON THE PAGE
	    var iso = $container.data('isotope');
	    $container.isotope( 'on', 'layoutComplete', function() {
	    	var numItems = iso.filteredItems.length;
		    if (numItems="0") { 
		    	$("#no-portfolio-item").fadeIn();
		    }
		    else {
		    	$("#no-portfolio-item").fadeOut();
		    }
	  	});
	    /*PARALLAX*/
	    //$('.parallax').parallax("50%", 0.1);
	});
    /*****************************
    WHEN PAGE IS SCROLLING
    *****************************/
    $(window).scroll(function() {
    	/*CAROUSEL*/
	    if(window.innerWidth < 910){
	    	if(window.innerWidth < 670){
	    		var numbermaxitems = 1;
	    	}
	    	else{
		   		var numbermaxitems = 2;
		   	}
	    }
	    else{
		    var numbermaxitems = 4;
	    }
	    $('.flexslider').flexslider({
			animation: "slide",
			animationLoop: false,
			maxItems: numbermaxitems,
			selector: ".slides > li.blog-post", 
			itemWidth: 210, 
			itemMargin: 0,
			controlNav: false,    
			minItems: 0,    
			move: 0, 
			slideshow: false
		});
		$('#partners-slider').flexslider({
			animation: "slide",
			animationLoop: false,
			maxItems: numbermaxitems,
			selector: ".slides > li.partners-slide", 
			itemWidth: 210, 
			itemMargin: 0,
			controlNav: false,    
			minItems: 0,    
			move: 0, 
			slideshow: false
		});
		//ANIMATIONS
	    if ($(window).scrollTop() > $("#header").height()) {
	        $('#scroll-top').fadeIn("1000");
	        $('#scroll-bottom').fadeOut();
	    } else {
	        $('#scroll-top').fadeOut();
	        $('#scroll-bottom').fadeIn("1000");
	    }
    });
    /*****************************
    OTHER JQUERY
    *****************************/
    /*BACKGROUND IOS*/
    if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
	    $("#header.big").css('min-height', '600px');
	}
	/*ANIMATIONS*/
	var wow = new WOW({
	    boxClass:     'animate-me',      // animated element css class (default is wow)
	    animateClass: 'animated', // animation css class (default is animated)
	    offset:       0,          // distance to the element when triggering the animation (default is 0)
	    mobile:       false,       // trigger animations on mobile devices (default is true)
	    live:         true        // act on asynchronously loaded content (default is true)
	});
	wow.init();
	/*MENU DROPDOWN 1st LEVEL*/
	$('.menu-item-has-children').on('mouseenter',function(){
			$(this).find('.sub-menu').addClass('open animated bounceInDown');
	});
	$('.menu-item-has-children').on('mouseleave',function(){
			$(this).find('.sub-menu').removeClass('open animated bounceInDown');
	});
	/*MEGAMENU*/
	$('.menu-item-has-mega-menu').on('mouseenter',function(){
		// COUNT THE NUMBER OF COLUMN
		var megamenucontainer = $(this).find("div.mega-menu");
		var numberofrows = megamenucontainer.children("ul.mega-menu-row").length;
		// SIZE -> 160 per rows
		megamenucontainer.width(numberofrows*190);
		// SHOW IT
		megamenucontainer.addClass('open animated bounceInDown');
	});
	$('.menu-item-has-mega-menu').on('mouseleave',function(){
			var megamenucontainer = $(this).find("div.mega-menu");
			megamenucontainer.removeClass('open animated bounceInDown');
	});
	/*INSIDE LINK*/
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    if ($target.length) {
		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 900, 'swing', function () {
		        window.location.hash = target;
		    });
		}
	});
	/*DISABLE LINKS ON SKILLS TABS*/
    $('#SkillsTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
	//$( '#SkillsTab a[href="#"]' ).click( function(e) {
	//    e.preventDefault();
	//});
	/*MOBILE MENU*/
    $('#show-mobile-menu, #navigation-mobile a').on('click',function(){
        if($('#navigation-mobile').hasClass('display-nav-menu')){
            $('body').css('overflow', '');
            $('body').css({'right': '0'});
            $('body').css({'position': 'inherit'});
            $('#navigation-mobile').removeClass('display-nav-menu');
            $('#navigation #show-mobile-menu').removeClass('mobile-button-left');
        } else {
            $('body').css({'overflow': 'hidden'});
            $('body').css({'right': '-200px'});
            $('body').css({'position': 'relative'});
            $('#navigation-mobile').addClass('display-nav-menu');
            $('#navigation #show-mobile-menu').addClass('mobile-button-left');
        }
    });
	var data = $('#navigation').html();
	$('#navigation-mobile').html(data);
    /*CONTENT IMAGE SLIDER*/
    $('.flexslider.image-slider').flexslider({
		animation: "slide",
		animationLoop: false,
		selector: ".slides > li",    
		slideshow: false
	});
    /*SEARCH FORM*/
	$('a#search-toggle').on('click',function() {
		$('#header #search-container').toggleClass("clicked");
		$('#header #search-toggle').toggleClass("clicked");
	});
	/*FAQS*/
	$('.faq').on('click',function() {
        $(this).find("h4.faq-link").toggleClass("faq-active");
        $(this).find(".faq-content").slideToggle(200);
    });
    /*PORTFOLIO*/
	$('.fancybox').fancybox({
        openEffect  : 'elastic'
    });
    /*ADDED IN 1.0.4 For the milestones */
    $('.timer').countTo({
    	speed: 4000,  
    });
})(jQuery);