<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'title'  => array(
		'label' => __( 'Title', 'starry' ),
		'desc'  => __( 'This is the text that appears above the carousel. It will not be displayed if the field is empty', 'starry' ),
		'type'  => 'text',
		'value' => 'What we do'
	),
	'subtitle'  => array(
		'label' => __( 'Subtitle', 'starry' ),
		'desc'  => __( 'This is the text that appears above the title. It will not be displayed if the field is empty', 'starry' ),
		'type'  => 'text',
		'value' => 'Built for any kind of activity !'
	),
	'buttonlink'  => array(
		'label' => __( 'Button link', 'starry' ),
		'desc'  => __( 'This is the button that appears under the grid. It will not be displayed if the field is empty', 'starry' ),
		'type'  => 'text',
		'value' => '#'
	),
	'buttontitle'  => array(
		'label' => __( 'Button title', 'starry' ),
		'desc'  => __( 'Then the button title', 'starry' ),
		'type'  => 'text',
		'value' => 'Check Out Our Skills'
	),
	'category'  => array(
		'label' => __( '(Optional) category', 'starry' ),
		'desc'  => __( 'Type a skill category slug below, so only items from this category will be displayed. You can find it in Skills -> categories. You will see in the table a column slug ;)', 'starry' ),
		'type'  => 'text',
	),
);