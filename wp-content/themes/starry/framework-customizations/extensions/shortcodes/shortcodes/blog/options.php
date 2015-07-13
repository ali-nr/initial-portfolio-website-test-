<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'title'  => array(
		'label' => __( 'Title', 'starry' ),
		'desc'  => __( 'This is the text that appears above the carousel. It will not be displayed if the field is empty', 'starry' ),
		'type'  => 'text',
		'value' => 'Latest posts from our blog'
	),
	'subtitle'  => array(
		'label' => __( 'Subtitle', 'starry' ),
		'desc'  => __( 'This is the text that appears above the title. It will not be displayed if the field is empty', 'starry' ),
		'type'  => 'text',
		'value' => 'All about our passion.'
	),
	'number'  => array(
		'label' => __( 'Number of posts displayed', 'starry' ),
		'desc'  => __( 'A number please', 'starry' ),
		'type'  => 'short-text',
		'value' => '6'
	),
	'buttonlink'  => array(
		'label' => __( 'Button link', 'starry' ),
		'desc'  => __( 'This is the button that appears under the carousel. It will not be displayed if the field is empty', 'starry' ),
		'type'  => 'text',
		'value' => '#'
	),
	'buttontitle'  => array(
		'label' => __( 'Button title', 'starry' ),
		'desc'  => __( 'Then the button title', 'starry' ),
		'type'  => 'text',
		'value' => 'Our blog'
	)
);