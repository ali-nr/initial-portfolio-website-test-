<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'extrafooter' => array(
		'title'   => __( 'Extra footer', 'starry' ),
		'type'    => 'tab',
		'options' => array(
			'extra-box' => array(
				'title'   => __( 'Main setting', 'starry' ),
				'type'    => 'box',
				'options' => array(
					'extrafooter'    => array(
						'label' => __( 'Display the extra footer : contact boxes', 'starry' ),
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
							'html' => '<img src="'.get_template_directory_uri() .'/framework-customizations/theme/options/images/extrafooter.png" width="400">'
						),
					),
					'extrafootertitle'    => array(
						'label' => __( 'Extra footer title', 'starry' ),
						'desc'  => __( 'The headline before', 'starry' ),
						'type'  => 'text',
						'value' => 'Get In touch'
					),
					'extrafootersubtitle'    => array(
						'label' => __( 'Extra footer subtitle', 'starry' ),
						'type'  => 'text',
						'value' => 'What are you waiting for ?'
					),
					'extrafooterbox'               => array(
						'label'        => __( 'Extra footer Box', 'starry' ),
						'type'         => 'addable-box',
						'desc'		   => __( '4 boxes max', 'starry' ),
						'value'        => array(),
						'box-options'  => array(
							'extrafooterboxtitle'     => array(
								'label' => __( 'Box title', 'starry' ),
								'type'  => 'text',
								'value' => 'Facebook',
								'desc'  => __( 'Network name.',
									'starry' )
							),
							'extrafooterboxcontent' => array(
								'label' => __( 'Box text content', 'starry' ),
								'type'  => 'textarea',
								'value' => 'Like our page and send us message directly from our brand new Facebook page.',
								'desc'  => __( 'Be short again please, try to keep the same number of lines.',
									'starry' )
							),
							'extrafooterboxicon'                      => array(
								'label' => __( 'Box icon', 'starry' ),
								'type'  => 'icon',
								'value' => 'fa fa-facebook',
							),
							'extrafooterboxbuttontitle'     => array(
								'label' => __( 'Button title', 'starry' ),
								'type'  => 'text',
								'value' => 'Like our page'
							),
							'extrafooterboxbuttonlink'     => array(
								'label' => __( 'Button Link', 'starry' ),
								'type'  => 'text',
								'value' => 'http://facebook.com'
							),
							'extrafooterboxbg'        => array(
								'label' => __( 'Background color', 'starry' ),
								'type'  => 'color-picker',
								'value' => '#3b5998',
								'desc'  => __( 'To save your your time ;) Twitter : #00aced, Google+ : #dd4b39, YouTube : #bb0000, linkedin: #007bb6',
									'starry' )
							)
						),
						'template'     => 'Extra footer box',
						'limit'        => 4
					),
					'extrafooterexept'            => array(
						'label'  => __( 'Disable this on several pages', 'starry' ),
						'type'   => 'addable-option',
						'desc'  => __( 'The ID/name of the page (such as the contact page ID for instance)','starry' ),
						'option' => array(
							'type' => 'short-text',
						),
					),
				)
			),
		)
	)
);