<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	'partners-box' => array(
		'title'   => __( 'Partner options', 'starry' ),
		'type'    => 'box',
		'options' => array(
			'link'    => array(
				'label'   => __( 'Optional link on the logo', 'starry' ),
				'type'  => 'text',
			),
		)
	),
);
