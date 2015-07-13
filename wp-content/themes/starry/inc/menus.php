<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Register menus
 */

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'left-primary'   => __( 'Main menu, left side (no more than 3 items please)', 'starry' ),
	'right-primary'   => __( 'Main menu, right side (no more than 3 items please)', 'starry' ),
	'top-nav'   => __( 'Menu in top bar', 'starry' ),
	'copyright' => __( 'Menu in the footer (right side from the copyright text)', 'starry' ),
));