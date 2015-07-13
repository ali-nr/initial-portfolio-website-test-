<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer' => array(
		'title'   => __( 'Footer', 'starry' ),
		'type'    => 'tab',
		'options' => array(
			'footer-box' => array(
				'title'   => __( 'General Settings', 'starry' ),
				'type'    => 'box',
				'options' => array(
					'footerwidgets'    => array(
						'label' => __( 'Widgets in the footer', 'starry' ),
						'desc'  => __( '3 columns widget area in the footer, you can set them in the widget page', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Show', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Hide', 'starry' )
						),
						'value'        => 'yes',
					),
					'footerfirstcolor' => array(
					    'type'  => 'color-picker',
					    'value' => '#B4B4B4',
					    'label'  => __('Footer area first color', 'starry'),
						'desc' => __( 'Links, Icons...', 'starry' ),
					),
					'footersecondcolor' => array(
					    'type'  => 'color-picker',
					    'value' => '#E7E7E7',
					    'label'  => __('Footer area second color', 'starry'),
					),
					'footerbg'    => array(
						'label'       => __( 'Footer area image pattern', 'starry' ),
						'type'        => 'upload',
						'desc' => __( 'Check out cool free ones compatible with the theme here <a href="//subtlepatterns.com" target="_blank">Subtlepatterns.com</a>', 'starry' ),
						'images_only' => true
					),
					'footerbgsizewidth'    => array(
						'label'       => __( 'Footer area pattern size : WIDTH', 'starry' ),
						'type'        => 'short-text',
						'value' =>  '300',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'footerbgsizeheight'    => array(
						'label'       => __( 'Footer area pattern size : HEIGHT', 'starry' ),
						'type'        => 'short-text',
						'value' =>  '300',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'footerbgretina'    => array(
						'label'       => __( '(Optional) Footer area retina image pattern', 'starry' ),
						'type'        => 'upload',
						'desc' => __( '2x time the size of the one above', 'starry' ),
						'images_only' => true
					),
					'footercopyrightdisplay'    => array(
						'label' => __( 'Display copyright bottom bar', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Show', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Hide', 'starry' )
						),
						'value'        => 'yes',
						'help'  => array(
							'icon' => 'image',
							'html' => '<img src="'.get_template_directory_uri() .'/framework-customizations/theme/options/images/copyright.png" width="600">'
						),
					),
					'footercopyrightuppercase' => array(
						'label' => __( 'Copyright uppercase ?', 'starry' ),
						'type'  => 'checkbox',
						'value' => true
					),
					'footercopyrightcontent' => array(
						'label' => __( 'Copyright Content', 'starry' ),
						'type'  => 'textarea',
						'value' => '&#169; 2015 all rights reserved. Powered by <a href="//themeforest.net/user/2Fwebd">Starry</a>.'
					),
				)
			),
		)
	)
);