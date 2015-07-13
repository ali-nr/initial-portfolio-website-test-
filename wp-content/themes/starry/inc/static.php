<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Include static files: javascript and css
 */
if ( is_admin() ) {
	return;
}
/**
 * Enqueue scripts and styles for the front end.
 */
//COMMENT SCRIPT
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

// Register Web Font
wp_enqueue_style( 'theme-fonts', starry_fonts_url(), array(), null );

// Font Awesome stylesheet
wp_enqueue_style(
	'font-awesome',
	get_template_directory_uri() . '/css/font-awesome.min.css',
	array(),
	'1.0'
);

// Bootstrap stylesheet
wp_enqueue_style(
	'bootstrap',
	get_template_directory_uri() . '/css/bootstrap.min.css',
	array(),
	'1.0'
);

// Animations stylesheet
wp_enqueue_style(
	'animations',
	get_template_directory_uri() . '/css/animate.min.css',
	array(),
	'1.0'
);



// Load our main stylesheet.
wp_enqueue_style(
	'starry-theme-style',
	get_stylesheet_uri(),
	'1.0'
);

// Responsive stylesheet
$layoutresponsive = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('layoutresponsive') : '';
if( $layoutresponsive == "yes" ) :
	wp_enqueue_style(
		'responsive',
		get_template_directory_uri() . '/css/responsive.css',
		array(),
		'1.0'
	);
endif;

// LOAD JS PLUGINS FOR THE THEME
wp_enqueue_script(
	'fw-theme-plugins',
	get_template_directory_uri() . '/js/plugins.js',
	array( 'jquery' ),
	'1.0',
	true
);

//ANIMATED HEADER 
$headercursor = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headercursor') : '';
if( $headercursor == "show" ) :
	$headercursorchoice = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headercursorchoice') : '';
	if ($headercursorchoice == "polygons") :
		wp_enqueue_script(
			'fw-header-pointer',
			get_template_directory_uri() . '/js/header-pointer.js',
			array( 'jquery' ),
			'1.0',
			true
		);
	else :
		wp_enqueue_script(
			'fw-header-pointer',
			get_template_directory_uri() . '/js/header-pointer2.js',
			array( 'jquery' ),
			'1.0',
			true
		);
	endif;
endif;

// JS FOR THE TEXT TICKER IN THE HOME PAGE
$hometickershow2 = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('hometickershow') : '';
if( is_front_page() && $hometickershow2 == "yes" ) :
	function starry_ticker() {
		$hometickerspeed = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('hometickerspeed') : '';
	    echo '<script type="text/javascript">';
	    	echo'jQuery(document).ready(function() {';
				echo'jQuery("#ticker-text").vTicker("init", {';
			    	echo'speed: 300,';
			    	echo'pause: '. $hometickerspeed;
			    echo'});';
	    	echo'});';
	    echo '</script>';
	}
	add_action( 'wp_footer', 'starry_ticker' );
endif;

//ONE PAGE NAVIGATION
$onepagecheck = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('onepagecheck') : '';
if( $onepagecheck == "yes" ) :
	function starry_link_onepage() {
		echo '<script type="text/javascript">';
	    	echo'jQuery(document).ready(function() {';
				echo'/*FIX FROM -> 2ammedia : http://themeforest.net/item/starry-creative-easy-wordpress-theme/10100894/comments?page=3&filter=all#comment_9334275*/';
				echo'jQuery("a[href*=#]:not([href=#])").click(function() {';
				    echo'if (location.pathname.replace(/^\//,"") == this.pathname.replace(/^\//,"") && location.hostname == this.hostname) {';
						echo'var target = jQuery(this.hash);';
						echo'target = target.length ? target : jQuery("[name=" + this.hash.slice(1) +"]");';
						echo'if (target.length) {';
							echo'jQuery("html,body").animate({';
								echo'scrollTop: target.offset().top';
							echo'}, 800);';
							echo'return false;';
						echo'}';
				    echo'}';
				echo'});';
	    	echo'});';
	    echo '</script>';
	}
	add_action( 'wp_footer', 'starry_link_onepage' );
endif;

//NAVIGATION FIXED
$headerfixed = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('headerfixed') : '';
if( $headerfixed == "yes" ) :
	wp_enqueue_script(
		'fw-fixed-navigation',
		get_template_directory_uri() . '/js/fixed-nav.js',
		array( 'jquery' ),
		'1.0',
		true
	);
endif;

// LOAD JS FUNCTIONS FOR THE THEME
wp_enqueue_script(
	'fw-theme-script',
	get_template_directory_uri() . '/js/custom.js',
	array( 'jquery' ),
	'1.0',
	true
);
