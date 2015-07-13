<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'label'  => array(
		'label' => __( 'Button Label', 'starry' ),
		'desc'  => __( 'This is the text that appears on your button', 'starry' ),
		'type'  => 'text',
		'value' => 'Learn More'
	),
	'link'   => array(
		'label' => __( 'Button Link', 'starry' ),
		'desc'  => __( 'Where should your button link to', 'starry' ),
		'type'  => 'text',
		'value' => '#'
	),
    'target' => array(
        'type'  => 'switch',
		'label'   => __( 'Open Link in New Window', 'starry' ),
		'desc'    => __( 'Select here if you want to open the linked page in a new window', 'starry' ),
        'right-choice' => array(
            'value' => '_blank',
            'label' => __('Yes', 'starry'),
        ),
        'left-choice' => array(
            'value' => '_self',
            'label' => __('No', 'starry'),
        ),
    ),
    'icon'  => array(
		'label' => __( 'Button icon', 'starry' ),
		'desc'    => __( 'Choose an icon for your button just before the label', 'starry' ),
		'type'  => 'icon',
		'value' => 'fa fa-book'
	)
);