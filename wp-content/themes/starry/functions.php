<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

/**
 * Theme Includes
 */
require_once get_template_directory() .'/inc/init.php';

/**
 * TGM Plugin Activation
 */
{
	require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';

	// INSTALL THE FRAMEWORK UNYSON 
	function _action_theme_register_required_plugins() {
		tgmpa( array(
			array(
				'name'      => 'Unyson',
				'slug'      => 'unyson',
				'force_activation'  => true,
				'required'  => true,
			),
			array(
				'name'      => 'Contact Form 7',
				'slug'      => 'contact-form-7',
				'force_activation'  => false,
				'required'  => false,
			),
			array(
	            'name'                  => 'Starry Custom Post Types & Shortcodes', // The plugin name
	            'slug'                  => 'starry-assets', // The plugin slug (typically the folder name)
	            'source'                => get_stylesheet_directory() . '/inc/starry-assets.zip', 
            	'force_activation'      => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            	'force_deactivation'    => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
	            'required'              => true, // If false, the plugin is only 'recommended' instead of required
	        )
		) );

	}
	add_action( 'tgmpa_register', '_action_theme_register_required_plugins' );
}
