<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'custom-types' => array(
		'title'   => __( 'Post Options', 'starry' ),
		'type'    => 'tab',
		'options' => array(
			'posts-box' => array(
				'title'   => __( 'Main options', 'starry' ),
				'type'    => 'box',
				'options' => array(
					'portfoliosharing'    => array(
						'label' => __( 'Single Project Sharing', 'starry' ),
						'desc'  => __( 'Display social sharing buttons on project page for the portfolio', 'starry' ),
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
					'portfolioextra'    => array(
						'label' => __( 'Single Project extra footer', 'starry' ),
						'desc'  => __( 'Display latest projects on single project page', 'starry' ),
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
					'portfolioextratitle'    => array(
						'label'       => __( 'The extra footer title', 'starry' ),
						'type'        => 'text',
						'value' =>  'Our Latest Work',
						'desc' => __('Will be displayed above the projects carousel (extra footer)','starry'),
					),
					'portfoliosubtitle'    => array(
						'label'       => __( 'The extra footer subtitle', 'starry' ),
						'type'        => 'text',
						'value' =>  'Yep, and we are proud !',
						'desc' => __('See description above, just the subtitle','starry'),
					),
					'portfolioorder'    => array(
						'label' => __( 'Portfolio order', 'starry' ),
						'desc'  => __( 'How do you want to order the portfolio posts in both page and shortcode (by date) ?', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'ASC',
							'label' => __( 'Ascending', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'DESC',
							'label' => __( 'Descending', 'starry' )
						),
						'value'        => 'DESC',
					),
					'skillsorder'    => array(
						'label' => __( 'Skill order', 'starry' ),
						'desc'  => __( 'How do you want to order the skills posts in both page and shortcode (by date) ?', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'ASC',
							'label' => __( 'Ascending', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'DESC',
							'label' => __( 'Descending', 'starry' )
						),
						'value'        => 'DESC',
					),
					/*'portfolioextra'    => array(
						'label' => __( 'Single Project extra footer', 'starry' ),
						'desc'  => __( 'Display latest projects on single project page', 'starry' ),
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
					),*/
					'blogsharing'    => array(
						'label' => __( 'Single Post Sharing', 'starry' ),
						'desc'  => __( 'Display social sharing buttons in the blog', 'starry' ),
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
					'bloglayout'    => array(
						'label' => __( 'Single Post Layout', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'horizontal',
							'label' => __( 'Horizontal', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'vertical',
							'label' => __( 'Vertical', 'starry' )
						),
						'value'        => 'horizontal',
					),
					/*'blogextra'    => array(
						'label' => __( 'Single Post extra footer', 'starry' ),
						'desc'  => __( 'Display latest posts on single post page', 'starry' ),
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
					),*/
				)
			),
		)
	)
);