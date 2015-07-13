<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'milestonebox'               => array(
		'label'        => __( 'Milestone Box', 'starry' ),
		'type'         => 'addable-box',
		'desc'		   => __( '4 boxes max', 'starry' ),
		'value'        => array(),
		'box-options'  => array(
			'milestonebox_title'     => array(
				'label' => __( 'Box title', 'starry' ),
				'type'  => 'text',
				'value' => 'Name',
				'desc'  => __( 'If you leave it empty, it will not be displayed.',
					'starry' )
			),
			'milestonebox_content' => array(
				'label' => __( 'Box text content', 'starry' ),
				'type'  => 'textarea',
				'value' => 'Some text to describe your milestone, stay short please ;).',
				'desc'  => __( 'If you leave it empty, it will not be displayed.',
					'starry' )
			),
			'milestonebox_icon'                      => array(
				'label' => __( 'Box icon', 'starry' ),
				'type'  => 'icon',
				'value' => 'fa fa-trophy',
			),
			'milestonebox_number'     => array(
				'label' => __( 'Milestone number', 'starry' ),
				'type'  => 'text',
				'value' => '99',
				'desc'  => __( 'At the right of the icon, will be animated.',
					'starry' )
			),
			'milestonebox_bg'        => array(
				'label' => __( 'Background color', 'starry' ),
				'type'  => 'color-picker',
				'value' => '#3b5998',
				'desc'  => __( 'This is the background of the box',
					'starry' )
			)
		),
		'template'     => 'Extra footer box',
		'limit'        => 4
	),
);