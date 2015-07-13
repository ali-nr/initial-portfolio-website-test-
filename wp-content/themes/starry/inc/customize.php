<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * MAIN CUSTOM STYLE
 */

/**
 * CUSTOM CSS FROM OPTIONS
 * @internal
 */
function starry_custom_css() {
    echo '<style type="text/css">';
    	//
    	// IMAGES
    	//
        //LOGO
    	echo 'a#logo-navigation{';
		$logo_url = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerlogo') : ''; 
		if(!empty($logo_url)) :
			echo 'background-image: url("'.esc_url($logo_url['url']).'");';
			$logo_width = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerlogowidth') : ''; 
			echo 'min-width: '.esc_html($logo_width) .'px;';
			echo 'background-size: '.esc_html($logo_width) .'px;';
			$logo_height = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerlogoheight') : ''; 
			echo 'height: '.esc_html($logo_height).'px;';
		else :
			echo 'background-image: url("'.get_template_directory_uri() .'/images/dummy/logo-header.png");';
			echo 'min-width: 200px;';
			echo 'background-size: 200px;';
			echo 'height: 50px;';
			$logotop = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('logotop') : ''; 
			echo 'top: '. esc_html($logotop) .'px;';

		endif;
		echo '}';
		//DURING PAGE LOADING
		echo '#loader #loading-logo{';
			$pageloadingimage = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('pageloadingimage') : ''; 
			if(!empty($pageloadingimage)) :
				echo 'background-image: url("'.esc_url($pageloadingimage['url']).'");';
				$pageloadingimagewidth = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('pageloadingimagewidth') : ''; 
				echo 'min-width: '.esc_html($pageloadingimagewidth) .'px;';
				echo 'background-size: '.esc_html($pageloadingimagewidth) .'px;';
				$pageloadingimageheight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('pageloadingimageheight') : ''; 
				echo 'height: '.esc_html($pageloadingimageheight) .'px;';
			endif;
		echo '}';
		$pageloadingcolor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('pageloadingcolor') : ''; 
		echo'.pace .pace-activity {';
			echo'background: '.$pageloadingcolor.';';
		echo'}';
		//DURING FIXED HEADER
		$headerfixed = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerfixed') : '';
		if( $headerfixed == "yes" ) :
			echo '#navigation.navigation-fixed a#logo-navigation{';
				$headerfixedlogo = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerfixedlogo') : ''; 
				if(!empty($headerfixedlogo)) :
					echo 'background-image: url("'.esc_url($headerfixedlogo['url']).'");';
				else :
					echo 'background-image: url("'.get_template_directory_uri() .'/images/dummy/logo-fixed-menu.png");';
				endif;
				$logofixed_width = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerfixedlogowidth') : ''; 
				echo 'min-width: '.esc_html($logofixed_width) .'px;';
				echo 'background-size: '.esc_html($logofixed_width) .'px;';
				$logofixed_height = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerfixedlogoheight') : ''; 
				echo 'height: '.esc_html($logofixed_height) .'px;';
			echo '}';
		endif;
		//FOOTER PATERN
		echo '#footer{';
			$footerbgsizewidth = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('footerbgsizewidth') : ''; 
			$footerbgsizeheight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('footerbgsizeheight') : ''; 
			$footerbg = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('footerbg') : ''; 
			if (!empty($footerbg)):
				echo 'background-image: url("'.esc_url($footerbg['url']).'");';
			else :
				echo 'background-image: url("'.get_template_directory_uri() .'/images/dummy/footer.png");';
			endif;
			echo 'background-repeat: repeat;';
			echo 'background-size: '.esc_html($footerbgsizewidth).'px '.esc_html($footerbgsizeheight).'px;';
		echo '} ';
		echo '@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) { ';
		    echo '#footer{';
		    	$footerbgretina = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('footerbgretina') : ''; 
				if (!empty($footerbgretina)):
					echo 'background-image: url("'.esc_url($footerbgretina['url']).'");';
				else :
					echo 'background-image: url("'.get_template_directory_uri() .'/images/dummy/footer@2X.png");';
				endif;
				echo 'background-size: '.esc_html($footerbgsizewidth).'px '.esc_html($footerbgsizeheight).'px;';
			echo '}';
		echo '}';
		//BOXED PATERN
		$layout = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('layout') : '';
		if( $layout == "boxed" ) :
			$boxedbgsizewidth = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('boxedbgsizewidth') : ''; 
			$boxedbgsizeheight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('boxedbgsizeheight') : ''; 
			echo 'body.boxed{';
				$boxedbg = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('boxedbg') : ''; 
				if (!empty($boxedbg)):
					echo 'background-image: url("'.esc_url($boxedbg['url']).'");';
				else :
					echo 'background-image: url("'.get_template_directory_uri() .'/images/dummy/boxed.png");';
				endif;
				echo 'background-repeat: repeat;';
				echo 'background-size: '.esc_html($boxedbgsizewidth).'px '.esc_html($boxedbgsizeheight).'px;';
			echo '} ';
			echo '@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) { ';
			    echo 'body.boxed{';
			    	$boxedbgretina = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('boxedbgretina') : ''; 
					if (!empty($boxedbgretina)):
						echo 'background-image: url("'.esc_url($boxedbgretina['url']).'");';
					else :
						echo 'background-image: url("'.get_template_directory_uri() .'/images/dummy/boxed@2X.png");';
					endif;
					echo 'background-size: '.esc_html($boxedbgsizewidth).'px '.esc_html($boxedbgsizeheight).'px;';
				echo '}';
			echo '}';
			
			
			// ADDED IN 1.2.1
			$bodycolor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('bodycolor') : '';
			echo 'body.boxed .main-container {background: '.$bodycolor.' !important;}';
		endif;
		//
    	// HEADER
    	//
    	//HEADER HEIGHT
    	echo '#header{';
			$headerheight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerheight') : ''; 
			echo 'max-height: '.esc_html($headerheight).'px;';
			echo 'height: '.esc_html($headerheight).'px;';
		echo '}';
		//NAVIGATION FROM TOP
		echo '#navigation{';
			$headertop = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headertop') : ''; 
			echo 'top: '.esc_html($headertop).'px;';
		echo '}';
		//SHADE DISPLAY
		$headershadow = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headershadow') : '';
		if( $headershadow == "show" ) :
			echo '#shade{';
				echo 'z-index: 2;';
				echo 'width: 100%;';
				echo 'height: 100%;';
				echo 'position: absolute;';
				echo 'left: 0;';
				echo 'top: 0;';
				$headershadowopacity = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headershadowopacity') : ''; 
				echo 'background: -moz-linear-gradient(top, rgba(0,0,0,'.esc_html($headershadowopacity).') 0%, rgba(255,255,255,0) 100%);';
				echo 'background: -webkit-linear-gradient(top, rgba(0,0,0,'.esc_html($headershadowopacity).') 0%, rgba(255,255,255,0) 100%);';
				echo 'background: -o-linear-gradient(top, rgba(0,0,0,'.esc_html($headershadowopacity).') 0%, rgba(255,255,255,0) 100%);';
				echo 'background: -ms-linear-gradient(top, rgba(0,0,0,'.esc_html($headershadowopacity).') 0%, rgba(255,255,255,0) 100%);';
				echo 'background: linear-gradient(to bottom, rgba(0,0,0,'.esc_html($headershadowopacity).') 0%, rgba(255,255,255,0) 100%);';
			echo '}';
		endif;
		//MENU UPPERCASE
		$menuppercase = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('menuppercase') : '';
		if ($menuppercase == true):
			echo'#navigation ul li a, #navigation ul.sub-menu li a, #top-navigation ul.sub-menu li a, #header #navigation-mobile li a, #top-navigation ul{';
				echo'text-transform: uppercase;';
			echo '}';
		endif;
		//MENU WEIGHT + SIZE
		$menufontweight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('menufontweight') : '';		
		$menufontsize = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('menufontsize') : '';
		echo'#navigation ul li a{';
			echo 'font-weight:'.$menufontweight.';';
			echo 'font-size:'.$menufontsize.'px;';
		echo '}';
		//HEADER COLOR
		$headermaincolor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headermaincolor') : '';
		echo'#header, #header a,#header a#close-navigation-mobile:hover,#header #navigation-mobile li a:hover, #header #navigation-mobile li.current-menu-item a,#header #logo-navigation span,#header #ticker h4, #header #navigation ul li a:after{';
			echo 'color: '.$headermaincolor.';';
		echo '}';
		//
    	// FOOTER
    	//
		//FOOTER FIRST COLOR
		$footerfirstcolor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('footerfirstcolor') : '';
		echo'#footer{';
			echo 'color: '.$footerfirstcolor.';';
		echo '}';
		//FOOTER SECOND COLOR
		$footersecondcolor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('footersecondcolor') : '';
		echo'#footer a,#widgets .widget ul li.contact-address:before,#widgets .widget ul li.contact-phone:before{';
			echo 'color: '.$footersecondcolor.';';
		echo '}';
		//COPYRIGHT
		$footercopyrightuppercase = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('footercopyrightuppercase') : '';
		if ($footercopyrightuppercase == true):
			echo'#copyright{';
				echo'text-transform: uppercase;';
			echo '}';
		endif; 
		//
    	// MAIN SETTNGS (COLOR, FONTS)
    	//
    	//BG COLOR
		$bodycolor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('bodycolor') : '';
		echo'body{';
			echo 'background-color: '.$bodycolor.';';
		echo '}';
		//MAIN FONT
		$mainfont = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('mainfont') : '';
		//ESCAPE THE WARNINGS
		if (!isset($mainfont)) {
	        continue;
	    }
		echo'body{';
			echo'font-family: '.$mainfont['family'].', helvetica, arial, sans-serif;';
			echo 'color: '.$mainfont['color'].';';
			if ($mainfont['style'] = "regular"):
				echo 'font-weight: 400;';
			else :
				echo 'font-weight: '.$mainfont['style'].';';
			endif;
			echo 'font-size: '.$mainfont['size'].'px;';
		echo '}';
		echo'.main-container .btn, #navigation ul.sub-menu li a{';
			if ($mainfont['style'] = "regular"):
				echo 'font-weight: 400;';
			else :
				echo 'font-weight: '.$mainfont['style'].';';
			endif;
		echo '}';
		//SECOND FONT
		$secondfont = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('secondfont') : '';
		//ESCAPE THE WARNINGS
		if (!isset($secondfont)) {
	        continue;
	    }
		echo'.with-breaker span, .main-container blockquote,.main-container .welcome-message, .main-container ul.post-metadatas li, .comment-author, #logo-navigation span, #ticker h4, #navigation ul li a:after{';
			echo'font-family: '.$secondfont['family'].', Georgia, serif;';
			echo 'color: '.$secondfont['color'].';';
			if ($secondfont['style'] == "regular"):
				echo 'font-weight: 400;';
			else :
				echo 'font-weight: '.$secondfont['style'].';';
			endif;
			echo 'font-size: '.$secondfont['size'].'px;';
			if ($secondfont['style'] == "italic"):
				echo 'font-style: italic;';
			endif;
		echo '}';
		echo '.contact-box p, .milestone-box p, .milestone-box p,  .custom-section-text p, figure.effect-sadie p{';
			echo'font-family: '.$secondfont['family'].', Georgia, serif;';
			if ($secondfont['style'] == "regular"):
				echo 'font-weight: 400;';
			else :
				echo 'font-weight: '.$secondfont['style'].';';
			endif;
			if ($secondfont['style'] == "italic"):
				echo 'font-style: italic;';
			endif;
		echo '}';
		echo '.contact-box h2, .milestone-box h2, .milestone-box h1, .contact-box a.btn.btn-default, .wpcf7-form-control.wpcf7-submit{';
			echo'font-family: '.$mainfont['family'].', helvetica, arial, sans-serif;';
		echo '}';
		//MAIN COLOR
		$maincolor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('maincolor') : '';
		echo'body, .main-container h2.blog-post-title a, #blog-container .blog-post-title a, #navigation.navigation-fixed ul li a,.main-container .welcome-message span, .main-container h4.faq-link a, .main-container ul.social-list li:hover a,.nav-tabs>li>a:hover, .skill:hover p, #partners-slider a,.main-container .widget a.btn.btn-default, #blog-container .flexslider a.blog-post-title, .parallax-section-container a.btn.btn-default,.fw-shortcode-calendar-wrapper .page-header h3,.btn-group button[data-calendar-nav*="today"],.btn-group button[data-calendar-nav],#cal-slide-content a.event-item{';
			echo 'color: '.$maincolor.';';
		echo '}';
		echo'::-moz-selection{';
			echo 'background: '.$maincolor.';';
		echo '}';
		echo'::selection{';
			echo 'background: '.$maincolor.';';
		echo '}';
		echo'.main-container code, .main-container pre, .main-container .btn,.wpcf7-form-control.wpcf7-submit,#navigation ul.sub-menu li a:hover,#top-navigation ul.sub-menu li a:hover,.fw-shortcode-calendar.cal-context .cal-day-today,.cal-year-box [class*="span"]:hover, .cal-month-box [class*="cal-cell"]:hover{';
			echo 'background: '.$maincolor.';';
		echo '}';
		echo '.main-container .widget a.btn.btn-default{';
			echo 'border: 1px solid '.$maincolor.';';
		echo '}';
		//SECOND COLOR
		$linkcolor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('linkcolor') : '';
		echo'.main-container h2.blog-post-title a:hover, .main-container .blog-grid ul.post-metadatas,
		.single-post ul.post-metadatas, .comment-author, .comment-list .children li:before,
		#blog-container .blog-post-title a:hover, #blog-container .blog-button .btn.btn-default,
		#blog-container ul.post-metadatas, #navigation.navigation-fixed ul.sub-menu li a,
		#navigation.navigation-fixed ul li.current-menu-item a,#navigation.navigation-fixed ul li a:hover,
		.with-breaker span, .main-container a, .main-container blockquote, .main-container blockquote:before,
		.main-container .icon, .main-container .welcome-message, .main-container h4.faq-link.faq-active a,
		.skill:hover h4, .skill p, .main-container .fw-iconbox .fw-iconbox-image{';
			echo 'color: '.$linkcolor.';';
		echo '}';
		echo'.widget a.btn.btn-default:hover{';
			echo 'color: '.$linkcolor.'!important;';
		echo '}';
		echo'#blog-container .blog-button .btn.btn-default, .widget a.btn.btn-default{';
			echo 'border-color: '.$linkcolor.';';
		echo '}';
		echo'#blog-container .blog-button a.btn.btn-default:hover{';
			echo 'background: '.$linkcolor.';';
		echo '}';
		//HEADLINE
		$headlinesuppercase = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headlinesuppercase') : '';
		$headelinefontweight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headelinefontweight') : '';
		$headlinesletter = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headlinesletter') : '';
		echo'.main-container h1,.main-container h2,.main-container h3,.main-container h4,
		.main-container thead th,.nav-tabs>li>a, .portfolio-container figure figcaption{';
			if ($headlinesuppercase == true):
				echo'text-transform: uppercase;';
			endif;
			echo 'font-weight:'.$headelinefontweight.';';
			echo'letter-spacing: '.$headlinesletter.'px;';
		echo '}';
		echo '.widget a.btn.btn-default,.main-container .btn,.widget h4, .wpcf7-form-control.wpcf7-submit, .breadcrumbs, #contact-form label,#comment-form label,#ticker-text ul li{';
			if ($headlinesuppercase == true):
				echo'text-transform: uppercase;';
			endif;
		echo '}';
		echo '.comment-list li:before, #ticker-text ul li, .main-container .dropcap{';
			echo 'font-weight:'.$headelinefontweight.';';
		echo '}';
		//LINEHEIGHT
		$mainfontlineheight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('mainfontlineheight') : '';
		echo' .main-container p{';
			echo 'line-height: '.$mainfontlineheight.'em;';
		echo '}';
		//
    	// OTHER
    	//
    	//PAGE LOADER
    	$pageloading = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('pageloading') : '';
		if( $pageloading != "yes" ) :
  			echo '.pace .pace-activity,.pace{';
  				echo 'display: none !important;';
  			echo '}';
		endif; 
		//NAVIGATION FIXED
		$headerfixed = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerfixed') : '';
		if( $headerfixed == "yes" ) :
			echo '#navigation{';
  				echo 'position: fixed !important';
  			echo '}';
		endif;
		//OTHERCOLOR
		$otherlightcolor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('otherlightcolor') : '';
		echo'.main-container hr, .main-container hr.align-left,.main-container h4.faq-link{';
			echo'border-color: '.$otherlightcolor.';';
		echo'}';
		echo'.nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus{';
			echo'border-bottom-color: '.$otherlightcolor.'; ';
		echo'}';
		echo'.nav-tabs>li.active>a:after,.nav-tabs>li.active>a:hover:after,.nav-tabs>li.active>a:focus:after{';
			echo'border-color: transparent transparent '.$otherlightcolor.' transparent;';
		echo'}';
		echo'#ticker h4, .with-breaker:after, .main-container pre, .main-container .btn, .wpcf7-form-control.wpcf7-submit{';
			echo'color: '.$otherlightcolor.';';
		echo'}';
		echo'.with-breaker:before{';
			echo'background: '.$otherlightcolor.';';
		echo'}';
		//MENU MOBILE
		$menumobilebg = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('menumobilebg') : '';
		echo'#navigation-mobile, #navigation ul.sub-menu li a,#top-navigation ul.sub-menu li a, .mega-menu{';
			echo'background-color: '.$menumobilebg.';';
		echo'}';
		$menumobilecolor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('menumobilecolor') : '';
		echo'#navigation ul.sub-menu li a,#top-navigation ul.sub-menu li a,#header a#close-navigation-mobile,#header #navigation-mobile li a{';
			echo'color: '.$menumobilecolor.';';
		echo'}';
		//OTHER FONTWEIGHT
		$lightfontweight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('lightfontweight') : '';
		echo'.main-container .welcome-message, figure.effect-sadie h4,.main-container h2.blog-post-title a, #blog-container .blog-post-title h2,.widget h4, .widget h1{';
			echo'font-weight: '.$lightfontweight.';';
		echo'}';
		//HIDE TEXT TICKER ON MOBILES
		$hometickerhidemobile = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('hometickerhidemobile') : '';
		if( is_front_page() && $hometickerhidemobile == "yes" ) :
			echo'@media only screen and (max-width: 520px) {';
				echo "#ticker{display:none;}";
				echo "#header.big.with-separation-bottom{max-height:150px!important;min-height:150px!important;}";
			echo'}';
		endif;
		//DISABLE SEPARATIONS IF NEEDED
		$separation = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('separation') : '';
		if($separation == "sharped" ) :
			echo'.with-separation-bottom:after,.with-separation-top:before,#navigation.navigation-fixed:before{';
				echo 'background: transparent';
			echo'}';
		endif;
		//DISABLE LOGO ON MOBLE
		$logomobile = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('logomobile') : '';
		if($logomobile != "yes" ) :
			echo'@media only screen and (max-width: 520px) {';
				echo "a#logo-navigation{display:none;}";
			echo'}';
		endif;
		//CUSTOM CSS
		$customcss = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('customcss') : '';
		echo esc_html($customcss);
    echo '</style>';
}
add_action( 'wp_head', 'starry_custom_css' );

/**
 * JS FOR THE SLDIER IN THE HOME PAGE
 */
function starry_slider() {
    echo '<script type="text/javascript">';
    	echo'jQuery(document).ready(function() {';
			echo"var slider = jQuery('#header-slider');";
		    echo'slider.flexslider({';
		    	$homeheader_type = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('homeheader_content') : '';
		    	if (is_front_page() && !empty($homeheader_type['header_slider']['homeslideranimation'])):
						echo'animation: "'.$homeheader_type['header_slider']['homeslideranimation'].'",';
				endif;
				echo'animationLoop: true,';
				echo'selector: ".slides > li",';
				echo'controlNav: false,';
				echo'slideshowSpeed: 10000,';
				echo'slideshow: true,';
				echo'keyboard: true,';   
				echo'directionNav: false,';
		    	echo'controlsContainer: ".navigation-slider-container"';
			echo'});';
			echo"var sliderInfos = slider.data('flexslider');";
			echo"jQuery('#sliderNext').on('click',function(){";
		        echo'sliderInfos.flexAnimate(sliderInfos.getTarget("next"));';
		    echo'});';
		    echo"jQuery('#sliderPrev').on('click',function(){";
		        echo'sliderInfos.flexAnimate(sliderInfos.getTarget("prev"));';
		    echo'});';
    	echo'});';
    echo '</script>';
}
add_action( 'wp_footer', 'starry_slider' );

/**
 * Register Fonts.
 *
 * @return string
 */
function starry_fonts_url() {
    $fonts_url = '';

    //GET FONTS USED IN THE THEME
    $mainfont = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('mainfont') : '';
    $secondfont = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('secondfont') : '';

   	/*$headelinefontweight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headelinefontweight') : '';
	$lightfontweight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('lightfontweight') : '';
	$menufontweight = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('menufontweight') : '';
	if ($secondfont['style']  == "italic") :
		$is_italic = ",400italic";
	else :
		$is_italic = "";
	endif;
   	//MAKE IT COMPATIBLE TO URL
    if($mainfont['style'] = "regular" | $secondfont['style'] = "regular"):
    	$query_args = 'family='.$mainfont['family'].':400,'.$headelinefontweight.','.$lightfontweight.','.$menufontweight.'|'.$secondfont['family'].':400'.$secondfont['style'] .''. $is_italic;
    elseif ($mainfont['style'] = "regular"):
    	$query_args = 'family='.$mainfont['family'].':400,'.$headelinefontweight.','.$lightfontweight.','.$menufontweight.'|'.$secondfont['family'].':'.$secondfont['style'] .''. $is_italic;
    elseif($secondfont['style'] = "regular") :
    	$query_args == 'family='.$mainfont['family'].':'.$mainfont['style'].','.$headelinefontweight.','.$lightfontweight.','.$menufontweight.'|'.$secondfont['family'].':400'. $is_italic;
    else : 
    	$query_args == 'family='.$mainfont['family'].':'.$mainfont['style'].','.$headelinefontweight.','.$lightfontweight.','.$menufontweight.'|'.$secondfont['family'].':'.$secondfont['style'] .''. $is_italic;
    endif;*/

    $query_args = "family=".$mainfont['family'].":100,200,300,400,400italic,600,700italic,800,900%7C".$secondfont['family'].":100,200,300,400,400italic,600,700italic,800,900";

    $fonts_url =  '//fonts.googleapis.com/css?'.preg_replace("/ /","+",$query_args);
 
    return $fonts_url;
}