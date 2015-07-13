<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'title'  => array(
		'label' => __( 'Title', 'starry' ),
		'desc'  => __( 'This is the text that appears above the carousel. It will not be displayed if the field is empty', 'starry' ),
		'type'  => 'text',
		'value' => 'Our Partners'
	),
	'subtitle'  => array(
		'label' => __( 'Subtitle', 'starry' ),
		'desc'  => __( 'This is the text that appears above the title. It will not be displayed if the field is empty', 'starry' ),
		'type'  => 'text',
		'value' => 'Thanks to all'
	),
	'layout'  => array(
	    'type'  => 'image-picker',
	    'value' => 'value-1',
	    'label' => __('Layout', 'starry'),
	    'desc'  => __('How do you want to display the partners in the carousel ?', 'starry'),
	    'choices' => array(
	        'value-1' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/partners/static/img/layout1.jpg',
	        'value-2' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/partners/static/img/layout2.jpg',
	    ),
	    'blank' => false, // (optional) if true, images can be deselected
	)
);