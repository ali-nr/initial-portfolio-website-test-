<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header' => array(
		'title'   => __( 'Header/Topbar', 'starry' ),
		'type'    => 'tab',
		'options' => array(
			'header-box' => array(
				'title'   => __( 'Main options', 'starry' ),
				'type'    => 'box',
				'options' => array(
					'headerheight' => array(
						'label' => __( 'Header height for pages', 'starry' ),
						'type'  => 'short-text',
						'value' => '250',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'headerlogo' => array(
						'label' => __( 'Main Logo: Image', 'starry' ),
						'desc'  => __( 'Upload your image for the logo (white color advised)', 'starry' ),
						'type'  => 'upload',
						'images_only' => true
					),
					'headerlogowidth' => array(
						'label' => __( 'Main Logo: Width', 'starry' ),
						'type'  => 'short-text',
						'value' => '200',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'logomobile'    => array(
						'label' => __( 'Logo on mobile device', 'starry' ),
						'desc'  => __( 'Do you want to show the logo on mobile devices ?', 'starry' ),
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
					'logotop' => array(
						'label' => __( 'Main Logo: Margin top from menu', 'starry' ),
						'type'  => 'short-text',
						'value' => '-10',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'headerlogoheight' => array(
						'label' => __( 'Main Logo: Height', 'starry' ),
						'type'  => 'short-text',
						'value' => '58',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'headerslogan'    => array(
						'label' => __( 'Display slogan in the main menu ?', 'starry' ),
						'desc'  => __( 'Under the logo image', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'show',
							'label' => __( 'Show', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => __( 'Hide', 'starry' )
						),
						'value'        => 'show',
						'help'  => array(
							'icon' => 'image',
							'html' => '<img src="'.get_template_directory_uri() .'/framework-customizations/theme/options/images/slogan.png" width="200">'
						),
					),
					'headercursor'    => array(
						'label' => __( 'Animated pointer ?', 'starry' ),
						'desc'  => __( 'The futuristic animation on the cursor in the header', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'show',
							'label' => __( 'Show', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => __( 'Hide', 'starry' )
						),
						'value'        => 'show',
						'help'  => array(
							'icon' => 'image',
							'html' => '<img src="'.get_template_directory_uri() .'/framework-customizations/theme/options/images/cursor.png" width="300">'
						),
					),
					'headercursorchoice'    => array(
						'label' => __( 'Choose the animated pointer', 'starry' ),
						'desc'  => __( 'Regarding the animated pointer, there is 2 kinds so try to find your favorite one ;)', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'polygons',
							'label' => __( 'Polygons', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'bubbles',
							'label' => __( 'Bubbles', 'starry' )
						),
						'value'        => 'polygons',
					),
					'headershadow'    => array(
						'label' => __( 'Display shadow in the header ?', 'starry' ),
						'desc'  => __( 'Inner shadow to highlight your content', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'show',
							'label' => __( 'Show', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => __( 'Hide', 'starry' )
						),
						'value'        => 'show',
					),
					'headershadowopacity' => array(
						'label' => __( 'Shadow opacity', 'starry' ),
						'type'  => 'short-text',
						'value' => '0.7',
						'desc' => __('Between 0 and 1','starry'),
						'help' => __('like 0.6','starry'),
					),
					'headermaincolor' => array(
					    'type'  => 'color-picker',
					    'value' => '#FFF',
					    'label'  => __('Header Main color', 'starry'),
						'desc' => __('Default color for the header elements. Regarding the text ticker we use the font families set in "Content Style" tab.','starry'),
					),
					'menuppercase' => array(
						'label' => __( 'Menu font uppercase ?', 'starry' ),
						'type'  => 'checkbox',
						'value' => true
					),
					'menufontweight' => array(
						'label' => __( 'Menu font weight', 'starry' ),
						'type'    => 'short-select',
						'desc' => __('Beware, all these font weights may not be available for all the fonts','starry'),
						'value'   => '800',
						'choices' => array(
							'100' => '100',
							'200' => '200',
							'300' => '300',
							'400' => '400',
							'500' => '500',
							'600' => '600',
							'700' => '700',
							'800' => '800',
							'900' => '900',
						),
					),
					'menufontsize' => array(
						'label' => __( 'Menu font size', 'starry' ),
						'type'    => 'short-select',
						'desc' => __('The sizes below are in Pixels','starry'),
						'value'   => '14',
						'choices' => array(
							'12' => '12',
							'13' => '13',
							'14' => '14',
							'15' => '15',
							'16' => '16',
							'17' => '17',
							'18' => '18',
							'19' => '19',
							'20' => '20',
						),
					),
					'headertop' => array(
						'label' => __( 'Menu spacing from top', 'starry' ),
						'type'  => 'short-text',
						'value' => '55',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'headerfixed'    => array(
						'label' => __( 'Fixed Navigation', 'starry' ),
						'desc'  => __( 'Do you want to to fix a bar on the top of the page when the user scroll ?', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'starry' )
						),
						'value'        => 'yes',
					),
					'headerfixedlogo' => array(
						'label' => __( 'Main Logo for fixed menu: Image', 'starry' ),
						'desc'  => __( 'Same as above but has to bring out over white color (dark color advised). Same size than the one above.', 'starry' ),
						'type'  => 'upload',
						'images_only' => true
					),
					'headerfixedlogowidth' => array(
						'label' => __( 'Main Logo for fixed menu: Width', 'starry' ),
						'type'  => 'short-text',
						'value' => '200',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'headerfixedlogoheight' => array(
						'label' => __( 'Main Logo for fixed menu: Height', 'starry' ),
						'type'  => 'short-text',
						'value' => '58',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry'),
					),
					'menumobilebg' => array(
					    'type'  => 'color-picker',
					    'value' => '#313131',
					    'label'  => __('Mobile Menu background color', 'starry'),
						'desc' => __('Also used for the submenu background.','starry')
					),
					'menumobilecolor' => array(
					    'type'  => 'color-picker',
					    'value' => '#e7e7e7',
					    'label'  => __('Mobile Menu text color', 'starry'),
						'desc' => __('Also used for the submenu background.','starry')
					),

				)
			),
			'header-box2' => array(
				'title'   => __( 'Topbar Options', 'starry' ),
				'type'    => 'box',
				'options' => array(
					'topbarshow'    => array(
						'label' => __( 'Display the top bar', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'show',
							'label' => __( 'Show', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => __( 'Hide', 'starry' )
						),
						'value'        => 'hide',
						'help'  => array(
							'icon' => 'image',
							'html' => '<img src="'.get_template_directory_uri() .'/framework-customizations/theme/options/images/topbar.png" width="600">'
						),
					),
					'topbarcomponents'                => array(
						'label'   => __( 'Topbar componants', 'starry' ),
						'type'    => 'checkboxes',
						'value'   => array(
							'topbarphone' => true,
							'topbarmenu' => true,
							'topbarsocial' => true,
							'topbarsearch' => true,
							'topbarlanguage' => false,
						),
						'choices' => array(
							'topbarphone' => __( 'Display your phone number in the topbar(set in Contact tab)', 'starry' ),
							'topbarmenu' => __( 'Display a custom menu in the topbar(set in menu page)', 'starry' ),
							'topbarsocial' => __( 'Display the social icons in the topbar', 'starry' ),
							'topbarsearch' => __( 'Display the search icon in the topbar', 'starry' ),
							'topbarlanguage' => __( 'Display the languages dropdown in the topbar (compatible with WPML)', 'starry' ),
						)
					),
					'topbarsocialtext' => array(
						'label' => __( 'Text before the social icons', 'starry' ),
						'type'  => 'text',
						'value' => 'We are social !',
					)
				)
			),
		)
	)
);