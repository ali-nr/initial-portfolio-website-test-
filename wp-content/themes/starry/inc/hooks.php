<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Filters and Actions
 *  MAPS : 
 * 1.  Theme setup
 * 2.  CUSTOMIZE FROM THEME OPTIONS
 * 3.  STARRY Register widget areas
 * 4.  STARRY Custom SEARCH FORMS
 * 5.  STARRY RETURN SOCIAL ICONS
 * 6.  STARRY HEADER
 * 7.  STARRY EXTRA FOOTER
 * 8.  STARRY NAVIGATION 
 * 9.  FILTER FOR COMMENTS
 * 10. SET A LIMIT FOR THE EXCERPT (MAINLY FOR THE PORTFOLIO)
 * //NOW IN A PLUGIN // -> 11. ADD INLINE SHORTCODE TO THE EDITOR
 * 12. LANGUAGE SWITCHERS
 * 13. Extend the default WordPress body classes.
 * 14. Extend the default WordPress post classes.
 * 15. REMOVE SOME EXTENSIONS
 * 16. ADDING DOCUMENTATION LINK
 */

if ( ! function_exists( '_action_theme_setup' ) ) : 
/**
 * Theme setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 * @
 **/
function _action_theme_setup() {

	/*
	 * Make Theme available for translation.
	 */
	load_theme_textdomain( 'starry', get_template_directory() . '/languages' );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 800, 600, true );
	add_image_size( 'fw-theme-full-width', 1038, 576, true );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	/*add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'audio',
		'quote',
		'link',
		'gallery',
	) );*/
	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );

	// CONTENT WIDTH
	if ( ! isset( $content_width ) ) $content_width = 900;
}
endif;
add_action( 'init', '_action_theme_setup' );
/**
 * TITLE FOR WORDPRESS 4.1
 * @internal
 */
function starry_theme_slug_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'starry_theme_slug_setup' );
//TITLE RENDER IF IT IS NOT WP 4.1
if ( ! function_exists( '_wp_render_title_tag' ) ) :
	function starry_theme_slug_render_title() { ?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php }
	add_action( 'wp_head', 'starry_theme_slug_render_title' );
endif;
/**
 * CUSTOMIZE FROM THEME OPTIONS
 * @internal
 */
require_once(get_template_directory() . '/inc/customize.php');

/**
 * STARRY Register widget areas.
 * @internal
 */
function _action_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'starry' ),
		'id'            => 'widgets',
		'description'   => __( 'Appears in the footer section of the site.', 'starry' ),
		'before_widget' => '<div id="%1$s" class="widget col-md-4 %2$s animate-me fadeIn">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}

add_action( 'widgets_init', '_action_theme_widgets_init' );

/**
 * STARRY Custom SEARCH FORMS
 * @internal
 */
function _starry_search_form( $form ) {
	$form = '<!-- SEARCHFORM -->
	<div id="search-container" class="animate-me fadeInDown">
		<form role="search" method="get" action="' . esc_url( home_url( '/' ) ) . '" >
			<input type="text" value="' . esc_attr(get_search_query()) . '" name="s" id="s" placeholder="' . __( 'Search...','starry' ) . '"/>
			<input type="hidden" name="searchsubmit" id="searchsubmit" value="true" />
			<button type="submit" name="searchsubmit"><i class="fa fa-search"></i></button>
        </form>
	</div>
	<a href="#" id="search-toggle"><i class="fa"></i></a>
	<!-- END SEARCHFORM -->';

	return $form;
}
add_filter( 'get_search_form', '_starry_search_form' );
//THE BIG ONE (SEARCH TEMPLATE & 404)
function _starry_search_form2( $form ) {
	$form = '
	<div id="container-search-container" class="animate-me fadeInTop">
  		<form role="search" method="get" action="' . esc_url( home_url( '/' ) ) . '" >
			<input type="text" value="' . esc_attr(get_search_query()) . '" name="s" id="s" class="form-control" placeholder="' . __( 'Search...','starry' ) . '"/>
			<input type="hidden" name="searchsubmit" id="searchsubmit" value="true" />
			<button type="submit" name="searchsubmit" class="btn btn-default"><i class="fa fa-search"></i> Search</button>
        </form>
	</div>';

	return $form;
}
/**
 * STARRY RETURN SOCIAL ICONS
 * @internal
 */
function starry_social_icons() {
	echo'<ul class="social-icons">';
    	$rss = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('rss') : '';
		if( $rss == "show" ) :
			echo '<li><a href="'.get_bloginfo_rss('rss2_url').'"><i class="fa fa-rss"></i></a></li>';
		endif;
    	$facebook = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('facebook') : '';
		if( !empty( $facebook ) ) :
			echo '<li><a href="'.esc_url($facebook).'" target="_blank"><i class="fa fa-facebook"></i></a></li>';
		endif;
    	$twitter = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('twitter') : '';
		if( !empty( $twitter ) ) :
			echo '<li><a href="'.esc_url($twitter).'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
		endif;
    	$youtube = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('youtube') : '';
		if( !empty( $youtube ) ) :
			echo '<li><a href="'.esc_url($youtube).'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
		endif;
    	$skype = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('skype') : '';
		if( !empty( $skype ) ) :
			echo '<li><a href="'.esc_url($skype).'" target="_blank"><i class="fa fa-skype"></i></a></li>';
		endif;
    	$dribbble = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('dribbble') : '';
		if( !empty( $dribbble ) ) :
			echo '<li><a href="'.esc_url($dribbble).'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
		endif;
    	$github = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('github') : '';
		if( !empty( $github ) ) :
			echo '<li><a href="'.esc_url($github).'" target="_blank"><i class="fa fa-github"></i></a></li>';
		endif;
    	$paypal = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('paypal') : '';
		if( !empty( $paypal ) ) :
			echo '<li><a href="'.esc_url($paypal).'" target="_blank"><i class="fa fa-paypal"></i></a></li>';
		endif;
    	$flickr = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('flickr') : '';
		if( !empty( $flickr ) ) :
			echo '<li><a href="'.esc_url($flickr).'" target="_blank"><i class="fa fa-flickr"></i></a></li>';
		endif;
    	$trello = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('trello') : '';
		if( !empty( $trello ) ) :
			echo '<li><a href="'.esc_url($trello).'" target="_blank"><i class="fa fa-trello"></i></a></li>';
		endif;
    	$instagram = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('instagram') : '';
		if( !empty( $github ) ) :
			echo '<li><a href="'.esc_url($instagram).'" target="_blank"><i class="fa fa-instagram"></i></a></li>';
		endif;
    	$vimeo = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('vimeo') : '';
		if( !empty( $vimeo ) ) :
			echo '<li><a href="'.esc_url($vimeo).'" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>';
		endif;
    	$instagram = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('instagram') : '';
		if( !empty( $instagram ) ) :
			echo '<li><a href="'.esc_url($instagram).'" target="_blank"><i class="fa fa-instagram"></i></a></li>';
		endif;
    	$linkedin = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('linkedin') : '';
		if( !empty( $linkedin ) ) :
			echo '<li><a href="'.esc_url($linkedin).'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
		endif;
    	$googleplus = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('googleplus') : '';
		if( !empty( $googleplus ) ) :
			echo '<li><a href="'.esc_url($googleplus).'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
		endif;
	echo'</ul>';
}
/**
 * STARRY HEADER
 * @internal
 */
function starry_header(){
	if( !is_front_page() ) {
		if(is_singular( 'portfolio' )) :
			$projecttopfeatured = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'projecttopfeatured') : '';
		endif;
		if(is_singular( 'post' )) :
			$posttopfeatured = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'posttopfeatured') : '';
		endif;
  		echo'<!-- HEADER SLIDER -->';
	  	echo'<div class="flexslider" id="header-slider">';
	  		echo'<ul class="slides">';
	  			// IF HAS FEATURED IMAGE
	  			if (has_post_thumbnail() && is_page()) { 
					$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );
		  			echo '<li><img src="'. esc_url($image[0]) .'" alt="SLider Image"></li>';
				} 
				//ADDED IN 1.1.2
				elseif(is_singular( 'portfolio' ) && !empty($projecttopfeatured)){
		  			echo '<li><img src="'. $projecttopfeatured['url'] .'" alt="SLider Image"></li>';
				}	
				//ADDED IN 1.1.3
				elseif(is_singular( 'post' ) && !empty($posttopfeatured)){
		  			echo '<li><img src="'. $posttopfeatured['url'] .'" alt="SLider Image"></li>';
				}	
				else {
					// GET DEFAULT ONE
					$defaultimage = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('defaultimage') : '';
					if( !empty( $defaultimage ) ) { 
						echo'<li><img src="'. esc_url($defaultimage['url']) .'" alt="SLider Image"></li>';
					} else {
						echo'<li><img src="'. get_template_directory_uri() .'/images/dummy/bg1.jpg" alt="SLider Image"></li>';
					}
				}
	  		echo'</ul>';
	  	echo'</div>';
	// IF IT IS THE HOME PAGE, THERE IS 3 DIFFERENT CHOICES
	} else { 
		$homerevslider = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('homerevslider') : '';
		if($homerevslider != true): 
			$homeheader_type = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('homeheader_content') : '';
			// IF YOU CHOOSE SINGLE IMAGE
			if ( $homeheader_type['gadget'] == "header_single") {
				echo'<!-- HEADER SLIDER -->';
			 	echo'<div class="flexslider" id="header-slider">';
			 		echo'<ul class="slides">';
					if( !empty( $homeheader_type['header_single']['homesingleimage']['url'] )) { 
						echo'<li><img src="'. esc_url($homeheader_type['header_single']['homesingleimage']['url']) .'" alt="SLider Image"></li>';
					} else {
						echo'<li><img src="'. get_template_directory_uri() .'/images/dummy/bg1.jpg" alt="SLider Image"></li>';
					}
			 		echo'</ul>';
			 	echo'</div>';
			}
			// IF YOU CHOOSE THE GALLERY
			elseif ( $homeheader_type['gadget'] == "header_slider") {
				if($homeheader_type['header_slider']['homeslidercontrol'] == true):
					echo'<!-- SLIDER NAVIGATION -->';
				    echo'<div class="navigation-slider-container">';
				        echo'<a href="#" id="sliderPrev"><i class="fa fa-arrow-left"></i></a>';
				        echo'<a href="#" id="sliderNext"><i class="fa fa-arrow-right"></i></a>';
				    echo'</div>';
				endif; 
				echo'<!-- HEADER SLIDER -->';
				echo'<div class="flexslider" id="header-slider">';
				 	echo'<ul class="slides">';
						foreach($homeheader_type['header_slider']['homesliderimages'] as $value_slider) {
							echo '<li><img src="'.esc_url($value_slider['url']).'" alt="slider image"></li>';
						}
				 	echo'</ul>';
				 echo'</div>';
			}
			// IF YOU CHOOSE THE VIDEO
			elseif ( $homeheader_type['gadget'] == "header_video") {
				echo'<div id="header-video" ';
				    echo'data-vide-bg="';
				    if(!empty($homeheader_type['header_video']['header_video_mp4']['url'])):
				    	// REMOVE THE EXTENSIO
				    	echo'mp4: '.esc_url($homeheader_type['header_video']['header_video_mp4']['url']).', ';
				   	endif;
				   	if(!empty($homeheader_type['header_video']['header_video_ogv']['url'])):
				    	echo'ogv: '.esc_url($homeheader_type['header_video']['header_video_ogv']['url']).', ';
				   	endif;
				   	if(!empty($homeheader_type['header_video']['header_video_webm']['url'])):
				    	echo'webm: '.esc_url($homeheader_type['header_video']['header_video_webm']['url']).', ';
				    elseif(!empty($homeheader_type['header_video']['header_video_webm_link'])) :
				    	echo'webm: '.esc_url($homeheader_type['header_video']['header_video_webm_link']).', ';
				   	endif;
				   	if(!empty($homeheader_type['header_video']['header_video_poster']['url'])):
				    	echo'poster: '.esc_url($homeheader_type['header_video']['header_video_poster']['url']).'" ';
				   	endif;
				    echo'data-vide-options="posterType: jpg, loop: true, muted: true, position: 50% 50%">';
				echo'</div>';
			}
			// OTHERWISE WE DISPLAY THE DEFAULT IMAGE
			else {
				echo'<!-- HEADER SLIDER -->';
			 	echo'<div class="flexslider" id="header-slider">';
			 		echo'<ul class="slides">';
						echo'<li><img src="'. get_template_directory_uri() .'/images/dummy/bg1.jpg" alt="SLider Image"></li>';
			 		echo'</ul>';
			 	echo'</div>';
			}
		// IF YOU CHOOSE THE REVOLUTION SLIDER
		else :
			echo'<!-- HEADER SLIDER -->';
		 	echo'<div id="header-slider">';
		 		putRevSlider("home");
		 	echo'</div>';
		endif;
  	}
}
/**
 * STARRY EXTRA FOOTER
 * @internal
 */
function starry_clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = esc_html($string);
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

function starry_extrafooter(){
	$extrafooter = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('extrafooter') : '';
	$extrafooterexept = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('extrafooterexept') : ''; 
	if (!empty($extrafooterexept)): 
		if( !is_page($extrafooterexept) && $extrafooter == "show" ) : 
			$extrafootertitle = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('extrafootertitle') : '';
			if( !empty( $extrafootertitle ) ) :
		  		echo'<div class="container">';
		  			echo'<h2 class="with-breaker animate-me fadeInUp">';
		  				$extrafootersubtitle = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('extrafootersubtitle') : '';
			  			echo esc_html($extrafootertitle) .'<span>'. esc_html($extrafootersubtitle) .'</span>';
		  			echo'</h2>';
		  		echo'</div>';
	  		endif;
	  		echo'<section class="contact-container with-separation-bottom with-separation-top">';
		  		echo'<div class="contact-boxes">';
		  			$extrafooterbox = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('extrafooterbox') : '';
		  			foreach($extrafooterbox as $value) {
						echo '<div class="contact-box animate-me zoomIn '.$value['extrafooterboxicon'].' '.starry_clean($value['extrafooterboxtitle']).'">';
							echo '<style type = "text/css" scoped>';
						    echo '.'.starry_clean($value['extrafooterboxtitle']).'{background-color: '.$value['extrafooterboxbg'].';} ';
						    echo '.'.starry_clean($value['extrafooterboxtitle']).' a.btn.btn-default:hover{ color: '.$value['extrafooterboxbg'].';}';
						    echo'</style>';
							echo '<h2>'.esc_html($value['extrafooterboxtitle']).'</h2>';
							echo '<p>'.esc_html($value['extrafooterboxcontent']).'</p>';
							echo '<a href="'.esc_url($value['extrafooterboxbuttonlink']).'" class="btn btn-default" target="_blank"><i class="'.$value['extrafooterboxicon'].'"></i> '.esc_html($value['extrafooterboxbuttontitle']).'</a>';
						echo '</div>';
					}
		  		echo'</div>';
	  		echo'</section>';
	  	endif;
  	else: 
  		if( $extrafooter == "show") : 
			$extrafootertitle = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('extrafootertitle') : '';
			if( !empty( $extrafootertitle ) ) :
		  		echo'<div class="container">';
		  			echo'<h2 class="with-breaker animate-me fadeInUp">';
		  				$extrafootersubtitle = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('extrafootersubtitle') : '';
			  			echo esc_html($extrafootertitle) .'<span>'. esc_html($extrafootersubtitle) .'</span>';
		  			echo'</h2>';
		  		echo'</div>';
	  		endif;
	  		echo'<section class="contact-container with-separation-bottom with-separation-top">';
		  		echo'<div class="contact-boxes">';
		  			$extrafooterbox = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('extrafooterbox') : '';
		  			foreach($extrafooterbox as $value) {
						echo '<div class="contact-box animate-me zoomIn '.$value['extrafooterboxicon'].' '.starry_clean($value['extrafooterboxtitle']).'">';
							echo '<style type = "text/css" scoped>';
						    echo '.'.starry_clean($value['extrafooterboxtitle']).'{background-color: '.$value['extrafooterboxbg'].';} ';
						    echo '.'.starry_clean($value['extrafooterboxtitle']).' a.btn.btn-default:hover{ color: '.$value['extrafooterboxbg'].';}';
						    echo'</style>';
							echo '<h2>'.esc_html($value['extrafooterboxtitle']).'</h2>';
							echo '<p>'.esc_html($value['extrafooterboxcontent']).'</p>';
							echo '<a href="'.esc_url($value['extrafooterboxbuttonlink']).'" class="btn btn-default" target="_blank"><i class="'.$value['extrafooterboxicon'].'"></i> '.esc_html($value['extrafooterboxbuttontitle']).'</a>';
						echo '</div>';
					}
		  		echo'</div>';
	  		echo'</section>';
	  	endif;
  	endif;
}
/**
 * STARRY NAVIGATION 
 * @internal
 */
function starry_paging_nav(){
	echo '<div class="blog-next-page center animate-me zoomIn">' . "\n";
	if ( get_previous_posts_link() ){
		$previous_posts_link =  explode('"',get_previous_posts_link()); $npl_url=$previous_posts_link[1];
		echo '<a href="'. $previous_posts_link[1] .'" class="btn btn-default"><i class="fa fa-hand-o-left"></i> '. __('Previous Posts','starry') .'</a>';
	}	
	if ( get_next_posts_link() ){
		$next_posts_link = explode('"',get_next_posts_link()); $npl_url=$next_posts_link[1];
		echo '<a href="'. $next_posts_link[1] .'" class="btn btn-default">'. __('Next Posts','starry') .' <i class="fa fa-hand-o-right"></i></a>';
	}
	echo '</div>' . "\n";
}
function starry_portfolio_nav(){
	echo '<div class="portfolio-button center animate-me zoomIn">' . "\n";
	if ( get_previous_posts_link() ){
		$previous_posts_link =  explode('"',get_previous_posts_link()); $npl_url=$previous_posts_link[1];
		echo '<a href="'. $previous_posts_link[1] .'" class="btn btn-default"><i class="fa fa-hand-o-left"></i> '. __('Previous Projects','starry') .'</a>';
	}	
	if ( get_next_posts_link() ){
		$next_posts_link = explode('"',get_next_posts_link()); $npl_url=$next_posts_link[1];
		echo '<a href="'. $next_posts_link[1] .'" class="btn btn-default">'. __('Next Projects','starry') .' <i class="fa fa-hand-o-right"></i></a>';
	}
	echo '</div>' . "\n";
}
function starry_post_nav(){
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '',
		true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}

	echo '
		<hr><div class="blog-next-page center animate-me fadeInUp" role="navigation">' . "\n";

	ob_start();
	previous_post_link( '%link',
		__( '<i class="fa fa-hand-o-left"></i> %title', 'starry' ) );
	next_post_link( '%link',
		__( '%title <i class="fa fa-hand-o-right"></i>', 'starry' ) );
	$link = ob_get_clean();
	echo str_replace('<a ','<a class="btn btn-default" ', $link);

	
	echo '</div>' . "\n";
}
/**
 * FILTER FOR COMMENTS
 * @internal
 */
add_filter('comment_reply_link', 'replace_reply_link_class');
function replace_reply_link_class($class){
    $class = str_replace("class='comment-reply-link", "class='btn btn-default", $class);
    return $class;
}
add_filter( 'comment_form_default_fields', 'starry_comment_form_fields' );
function starry_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="control-group row"><label class="control-label col-md-3" for="contact-name">' . __( 'Name','starry' ) . '</label> ' .
                    '<div class="controls col-md-9"><input class="input-xlarge form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' /></div></div>',
        'email'  => '<div class="control-group row"><label class="control-label col-md-3" for="contact-email">' . __( 'Email','starry' ) . '</label> ' .
                    '<div class="controls col-md-9"><input class="input-xlarge form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' /></div></div>',
        'url'    => '',
    );
    
    return $fields;
}
add_filter( 'comment_form_defaults', 'starry_comment_form' );
function starry_comment_form( $args ) {
    $args['comment_field'] = '<div class="control-group row">
            <label class="control-label col-md-3" for="contact-message">' . __( 'Comment', 'starry' ) . '</label> 
            <div class="controls col-md-9"><textarea class="form-control" id="comment" name="comment" rows="5" aria-required="true"></textarea></div>
        </div>';
    return $args;
}
add_action('comment_form', 'starry_comment_button' );
function starry_comment_button() {
    echo '<div class="control-group text-right"><button class="btn btn-default" type="submit"><i class="fa fa-paper-plane-o"></i>' . __( 'Post Comment','starry' ) . '</button></div>';
}

/**
 * SET A LIMIT FOR THE EXCERPT (MAINLY FOR THE PORTFOLIO)
 * @internal
 */
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

/**
 * LANGUAGE SWITCHERS
 * @internal
 */
/*WPML LANGUAGE SWITCHER*/	
function starry_languages_switcher(){
	if (class_exists('SitePress')) {
		function getActiveLanguage() {
			// fetches the list of languages
			$languages = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR');
			$activeLanguage = 'Englsih';
			// runs through the languages of the system, finding the active language
			foreach($languages as $language) {
				// tests if the language is the active one
				if($language['active'] == 1) {
					$activeLanguage = $language['native_name'];
				}
			}
			return $activeLanguage;
		}
	    $languages = icl_get_languages('skip_missing=0&orderby=code');
	    if(!empty($languages)){
	    	echo '<!-- LANGUAGES -->';
	    	echo'<a href="#"><i class="fa fa-flag"></i>'. getActiveLanguage() .' <i class="fa fa-angle-down"></i></a>';
	  		echo '<ul id="languages" class="sub-menu bounceInDown">';
	  			foreach($languages as $l){
	  				if(!$l['active'] == 1) {
		  				echo '<li class="menu-item"><a href="'.$l['url'].'">'.$l['translated_name'].'</a></li>';
		  			}
		  		}
	  		echo '</ul>';
	    }
	}
}

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @param array $classes A list of existing body class values.
 *
 * @return array The filtered body class list.
 * @internal
 */
function _filter_theme_body_classes( $classes ) {
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( get_header_image() ) {
		$classes[] = 'header-image';
	} else {
		$classes[] = 'masthead-fixed';
	}

	if ( is_archive() || is_search() || is_home() ) {
		$classes[] = 'list-view';
	}

	if ( function_exists('fw_ext_sidebars_get_current_position') ) {
		$current_position = fw_ext_sidebars_get_current_position();
		if ( in_array( $current_position, array( 'full', 'left' ) )
		     || empty($current_position)
		     || is_page_template( 'page-templates/full-width.php' )
		     || is_page_template( 'page-templates/contributors.php' )
		     || is_attachment()
		) {
			$classes[] = 'full-width';
		}
	} else {
		$classes[] = 'full-width';
	}

	if ( is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'footer-widgets';
	}

	if ( is_singular() && ! is_front_page() ) {
		$classes[] = 'singular';
	}

	if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
		$classes[] = 'slider';
	} elseif ( is_front_page() ) {
		$classes[] = 'grid';
	}

	return $classes;
}

add_filter( 'body_class', '_filter_theme_body_classes' );

/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 *
 * @param array $classes A list of existing post class values.
 *
 * @return array The filtered post class list.
 * @internal
 */
function _filter_theme_post_classes( $classes ) {
	if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}
/**
 * REMOVE SOME EXTENSIONS
 */
add_filter( 'post_class', '_filter_theme_post_classes' );

if (defined('FW')):
    /** @internal */
    function _starry_action_hide_extensions_from_the_list() {
        //global $current_screen; fw_print($current_screen); // debug

        if (fw_current_screen_match(array('only' => array('id' => 'toplevel_page_fw-extensions')))) {
            echo '<style type="text/css"> #fw-ext-portfolio, #fw-ext-learning, #fw-ext-feedback, #fw-ext-styling { display: none; } </style>';
        }
    }
    add_action('admin_print_scripts', '_starry_action_hide_extensions_from_the_list');
endif;
/**
 * ADDING DOCUMENTATION LINK
 */
add_action( 'admin_bar_menu', 'toolbar_link_to_mypage', 999 );
function toolbar_link_to_mypage( $wp_admin_bar ) {
	$args = array(
		'id'    => 'my_page',
		'title' => 'Starry Documentation',
		'href'  => 'http://www.2f-design.fr/themes/starry/documentation/',
		'meta'  => array( 'class' => 'my-toolbar-page' )
	);
	$wp_admin_bar->add_node( $args );
}


/**
 * Change Events extension post type slug
 * 
 * @param string $slug
 *
 * @return string
 */
function _filter_change_events_slug_name( $slug ) {
    return 'events';
}

add_filter( 'fw_ext_events_post_slug', '_filter_change_events_slug_name' );


