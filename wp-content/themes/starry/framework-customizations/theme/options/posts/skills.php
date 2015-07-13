<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	'skill-box' => array(
		'title'   => __( 'Settings', 'starry' ),
		'type'    => 'box',
		'options' => array(
			'skillicon'                      => array(
				'label' => __( 'Skill icon', 'starry' ),
				'type'  => 'icon',
				'desc'  => __( 'Used for both the shortcode and the page before the title','starry'),
				'value' => 'fa fa-star-o',
			),
			'skillmessage'                      => array(
				'label' => __( 'Excerpt for the shortcode', 'starry' ),
				'type'  => 'textarea',
				'desc'  => __( 'Short description of the skill used in the shortcode. Long as a tweet is good : approximately 140 characters.','starry'),
			),
		)
	),
);
