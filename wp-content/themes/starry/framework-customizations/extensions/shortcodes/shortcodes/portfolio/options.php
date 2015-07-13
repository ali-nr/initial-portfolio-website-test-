<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'title'  => array(
		'label' => __( 'Title', 'starry' ),
		'desc'  => __( 'This is the text that appears above the grid. It will not be displayed if the field is empty', 'starry' ),
		'type'  => 'text',
		'value' => 'our Latest Work'
	),
	'subtitle'  => array(
		'label' => __( 'Subtitle', 'starry' ),
		'desc'  => __( 'This is the text that appears above the title. It will not be displayed if the field is empty', 'starry' ),
		'type'  => 'text',
		'value' => 'Yep, and we are proud !'
	),
	'number'                    => array(
		'label'   => __( 'Number of projects displayed', 'starry' ),
		'type'    => 'select',
		'value'   => '6',
		'choices' => array(
			'3'  => '3',
			'6' => '6',
			'9' => '9',
			'12' => '12',
			'15' => '15',
			'18' => '18',
			'21' => '21',
		),
	),
	'category'  => array(
		'label' => __( '(Optional) category', 'starry' ),
		'desc'  => __( 'Type a portfolio category slug below, so only items from this category will be displayed. You can find it in Portfolio -> categories. You will see in the table a column slug ;)', 'starry' ),
		'type'  => 'text',
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
		'value' => 'More Stuff On Our Portfolio'
	)
);