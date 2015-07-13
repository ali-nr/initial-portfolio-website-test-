<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	'post-box' => array(
		'title'   => __( 'Post Options', 'starry' ),
		'type'    => 'box',
		'options' => array(
			'posttopfeatured'    => array(
				'label'       => __( 'Top featured image (optional)', 'starry' ),
				'desc'       => __( 'Change the image behind the menu in the header, otherwise we use default one.', 'starry' ),
				'type'        => 'upload',
				'images_only' => true
			),
		),
	),
);
