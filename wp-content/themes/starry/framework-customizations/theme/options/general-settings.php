<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'General', 'starry' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'General Settings', 'starry' ),
				'type'    => 'box',
				'options' => array(
					'favicon' => array(
						'label' => __( 'Favicon', 'starry' ),
						'desc'  => __( 'Upload a favicon image', 'starry' ),
						'type'  => 'upload'
					),
					'defaultimage' => array(
						'label' => __( 'Default featured image', 'starry' ),
						'desc'  => __( 'In the header of every page if you do not set any featured image through Wordpress. <strong>Size like 2048x1365</strong>', 'starry' ),
						'type'  => 'upload'
					),
					'scrolltop'    => array(
						'label' => __( 'Scroll to top button', 'starry' ),
						'desc'  => __( 'It is the bottom right button on every page which appears when you scroll down', 'starry' ),
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
							'html' => '<img src="'.get_template_directory_uri() .'/framework-customizations/theme/options/images/scrolltop.png" width="200">'
						),
					),
					'pageloading'    => array(
						'label' => __( 'Page loading', 'starry' ),
						'desc'  => __( 'White screen whild page is loading with your logo.', 'starry' ),
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
					'pageloadingimage'    => array(
						'label'       => __( 'Page loading: LOGO', 'starry' ),
						'type'        => 'upload',
						'images_only' => true
					),
					'pageloadingimagewidth'                => array(
						'label' => __( 'Page loading : LOGO WIDTH', 'starry' ),
						'type'  => 'short-text',
						'value' => '150',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'pageloadingimageheight'                => array(
						'label' => __( 'Page loading : LOGO HEIGHT', 'starry' ),
						'type'  => 'short-text',
						'value' => '35',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),

					'pageloadingcolor'    => array(
						'label' => __( 'Color of the loader', 'starry' ),
						'desc'  => __( 'It is the loading animation background color ;)', 'starry' ),
						'type'  => 'color-picker',
					    'value' => '#444',
						'help'  => array(
							'icon' => 'image',
							'html' => '<img src="'.get_template_directory_uri() .'/framework-customizations/theme/options/images/loader.jpg" width="200">'
						),
					),
					'onepagecheck'    => array(
						'label' => __( 'OnePage', 'starry' ),
						'desc'  => __( 'If you use the theme as a one page, by selecting this YEP here you will improve the navigation within your website', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yep', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Nop', 'starry' )
						),
						'value'        => 'no',
					),
					'enableanimations'    => array(
						'label' => __( 'CSS3 animations', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'enable',
							'label' => __( 'Enable', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'disable',
							'label' => __( 'Disable', 'starry' )
						),
						'value'        => 'enable',
					),
					'layoutresponsive'    => array(
						'label' => __( 'Responsive layout', 'starry' ),
						'desc'  => __( 'If yes, the layout will be fluid and will adapts to the device width (mobile, tablet...). (beta) If you choose fixed that will only remove for now a part, because the media queries form Bootstrap will be still here. Let us know you feedbacks to improve it.', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Responsive', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Fixed', 'starry' )
						),
						'value'        => 'yes',
					),
					'separation'    => array(
						'label' => __( 'Theme Separations', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'angled',
							'label' => __( 'Angled', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'sharped',
							'label' => __( 'Sharped', 'starry' )
						),
						'value'        => 'angled',
					),
					'layout'    => array(
						'label' => __( 'Website layout', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'wide',
							'label' => __( 'Wide', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'boxed',
							'label' => __( 'Boxed', 'starry' )
						),
						'value'        => 'wide',
					),
					'boxedbg'    => array(
						'label'       => __( 'If boxed layout: Background image pattern', 'starry' ),
						'type'        => 'upload',
						'images_only' => true,
						'desc' => __( 'Check out cool free ones compatible with the theme here <a href="//subtlepatterns.com" target="_blank">Subtlepatterns.com</a>', 'starry' )
					),
					'boxedbgsizewidth'    => array(
						'label'       => __( 'If boxed layout: Pattern width -> WIDTH', 'starry' ),
						'type'        => 'short-text',
						'value' =>  '798',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'boxedbgsizeheight'    => array(
						'label'       => __( 'If boxed layout: Pattern width -> HEIGHT', 'starry' ),
						'type'        => 'short-text',
						'value' =>  '798',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'boxedbgretina'    => array(
						'label'       => __( '(Optional) If boxed layout: Background retina image pattern', 'starry' ),
						'type'        => 'upload',
						'desc' => __( '2x time the size of the one above', 'starry' ),
						'images_only' => true
					),
				)
			)
		)
	)
);