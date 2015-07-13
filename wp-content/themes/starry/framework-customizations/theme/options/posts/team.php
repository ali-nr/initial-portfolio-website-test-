<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	'team-box' => array(
		'title'   => __( 'Settings', 'starry' ),
		'type'    => 'box',
		'options' => array(
			'teamsocial'  => array(
				'label'        => __( 'Social Network for the teammare', 'starry' ),
				'type'         => 'addable-box',
				'desc'		   => __( '8 boxes max. You can leave empty if you do not want', 'starry' ),
				'value'        => array(),
				'box-options'  => array(
					'teamsocialicon'                      => array(
						'label' => __( 'Social icon', 'starry' ),
						'type'  => 'icon',
						'value' => 'fa fa-facebook',
					),
					'teamsociallink'     => array(
						'label' => __( 'Social Link', 'starry' ),
						'type'  => 'text',
						'value' => 'http://www.facebook.com/YOURPAGE'
					)
				),
				'limit'        => 8
			),
		)
	),
);
