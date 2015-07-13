<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'social' => array(
		'title'   => __( 'Social Networks', 'starry' ),
		'type'    => 'tab',
		'options' => array(
			'social-box' => array(
				'title'   => __( 'Networks', 'starry' ),
				'type'    => 'box',
				'options' => array(
					'rss'    => array(
						'label' => __( 'Display RSS icon', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'show',
							'label' => __( 'Show', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => __( 'Hide', 'starry' )
						),
						'value'        => 'false',
					),
					'facebook'    => array(
						'label' => __( 'Facebook URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'twitter'    => array(
						'label' => __( 'Twitter URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'youtube'    => array(
						'label' => __( 'Youtube URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'skype'    => array(
						'label' => __( 'Skype URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'dribbble'    => array(
						'label' => __( 'Dribbble URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'github'    => array(
						'label' => __( 'Github URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'paypal'    => array(
						'label' => __( 'Paypal URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'flickr'    => array(
						'label' => __( 'Flickr URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'trello'    => array(
						'label' => __( 'Trello URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'instagram'    => array(
						'label' => __( 'Instagram URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'vimeo'    => array(
						'label' => __( 'Vimeo URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'linkedin'    => array(
						'label' => __( 'Linkedin URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
					'googleplus'    => array(
						'label' => __( 'Google Plus URL', 'starry' ),
						'desc'  => __( 'Direct URL to your page', 'starry' ),
						'type'  => 'text',
						'help'	 => __( 'Just enter something to enable it','starry')
					),
				),
			),
		)
	)
);