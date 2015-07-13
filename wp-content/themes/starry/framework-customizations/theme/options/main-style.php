<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style' => array(
		'title'   => __( 'Content Style', 'starry' ),
		'type'    => 'tab',
		'options' => array(
			'font-content' => array(
				'title'   => __( 'Main style', 'starry' ),
				'type'    => 'box',
				'options' => array(
					'mainfont'                => array(
						'label' => __( 'Main font', 'starry' ),
						'type'  => 'typography',
						'desc' => __('Used in the content, or by default, the size is only for the paragraph.','starry'),
						'value' => array(
							'size'   => 14,
							'family' => 'Raleway',
							'style'  => '400',
							'color'  => '#444',
						)
					),
					'secondfont'                => array(
						'label' => __( 'Second font', 'starry' ),
						'type'  => 'typography',
						'desc' => __('Second font in the content. Size does not matter here (regarding the subtitles)','starry'),
						'value' => array(
							'size'   => 14,
							'family' => 'Droid Serif',
							'style'  => '400',
							'color'  => '#B4B4B4',
						)
					),
					'maincolor' => array(
					    'type'  => 'color-picker',
					    'value' => '#444',
					    'label'  => __('Main color', 'starry'),
						'desc' => __('Default color for many elements such as buttons background','starry')
					),
					'linkcolor' => array(
					    'type'  => 'color-picker',
					    'value' => '#B4B4B4',
					    'label'  => __('Main hover color', 'starry')
					),
					'mainfontlineheight' => array(
						'label' => __( 'Default font line height', 'starry' ),
						'type'  => 'short-text',
						'value' => '1.7',
						'desc' => __('In em','starry'),
						'help' => __('No need to set em','starry')
					),
					'headlinesuppercase' => array(
						'label' => __( 'Headlines uppercase ?', 'starry' ),
						'type'  => 'checkbox',
						'value' => true
					),
					'headlinesletter' => array(
						'label' => __( 'Headlines letter spacing', 'starry' ),
						'type'  => 'short-text',
						'value' => '-1',
						'desc' => __('In Pixel','starry'),
						'help' => __('No need to set px','starry')
					),
					'headelinefontweight' => array(
						'label' => __( 'Headlines font weight', 'starry' ),
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
					'lightfontweight' => array(
						'label' => __( 'Light font weight', 'starry' ),
						'type'    => 'short-select',
						'desc' => __('Used at many places in the theme (widget title, post title in the blog grid...), Beware, all these font weights may not be available for all the fonts','starry'),
						'value'   => '300',
						'choices' => array(
							'100' => '100',
							'200' => '200',
							'300' => '300',
							'500' => '500',
							'600' => '600',
							'700' => '700',
							'800' => '800',
							'900' => '900',
						),
					),
					'otherlightcolor' => array(
					    'type'  => 'color-picker',
					    'value' => '#E7E7E7',
						'desc' => __('Used for some borders and the submenu text.','starry'),
					    'label'  => __('Light color', 'starry')
					),
					'bodycolor' => array(
					    'type'  => 'color-picker',
					    'value' => '#FFFFFF',
						'label' => __('Body background color.','starry'),
					    'desc'  => __('Please be sure that the angled sepeartions are off otherwise it will looks very weird (or you need to edit the images/breaker.svg and images/breaker-bottom.svg files with Illustrator and fill them with your color.', 'starry')
					),
					'customcss' => array(
					    'type'  => 'textarea',
					    'label' => __('Custom CSS', 'starry'),
					    'desc'  => __('No need to set the tags (&lt;style&gt;)', 'starry')
					)
				)
			)
		)
	)
);