<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'contenttitle'  => array(
		'label' => __( 'Title', 'starry' ),
		'desc'  => __( 'This is the title of the box, on the left part. Please stay short. Moreover the title need to be unique if you use more than one box on the same page.', 'starry' ),
		'type'  => 'text',
	),
	'customcontainercontent'  => array(
		'label' => __( 'Content', 'starry' ),
		'type'  => 'textarea',
		'desc'  => __( 'This is the content of the box, bellow the title, stay short too please (2 or 3 lines for a better render)', 'starry' ),
	),
	'icon'                      => array(
		'label' => __( 'Icon', 'unyson' ),
		'type'  => 'icon',
		'desc'  => __( 'The icon will be displayed in the background with a little opacity', 'starry' ),
		'value' => 'fa fa-group',
	),
	'color'        => array(
		'label' => __( 'Background color', 'unyson' ),
		'type'  => 'color-picker',
		'desc'  => __( 'The background of the container, remember that white color should come out', 'starry' ),
		'value' => '#d05c3d'
	),
	'buttoncontent1'  => array(
		'label' => __( 'Button #1 Content', 'starry' ),
		'desc'  => __( 'The button is on the right side.', 'starry' ),
		'type'  => 'short-text',
		'value' => 'Learn More'
	),
	'buttonlink1'  => array(
		'label' => __( 'Button #1 Link', 'starry' ),
		'type'  => 'text',
		'value' => 'http://yourdomain/about/'
	),
	'buttonicon1'  => array(
		'label' => __( 'Button #1 Icon', 'starry' ),
		'type'  => 'icon',
		'value' => 'fa fa-book'
	),
	'buttoncontent2'  => array(
		'label' => __( 'Button #2 Content', 'starry' ),
		'desc'  => __( 'The button is on the right side.', 'starry' ),
		'type'  => 'short-text',
	),
	'buttonlink2'  => array(
		'label' => __( 'Button #2 Link', 'starry' ),
		'type'  => 'text',
	),
	'buttonicon2'  => array(
		'label' => __( 'Button #2 Icon', 'starry' ),
		'type'  => 'icon',
	)
);