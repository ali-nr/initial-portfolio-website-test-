<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'parallaximage'  => array(
		'label' => __( 'Background Image', 'starry' ),
		'desc'  => __( 'Large image, it will be centered and fixed on scroll', 'starry' ),
		'type'  => 'upload',
		'images_only' => true
	),
	'contenttitle'  => array(
		'label' => __( 'Title', 'starry' ),
		'desc'  => __( 'This is the title of the box.', 'starry' ),
		'type'  => 'text',
	),
	'parallaxcontainercontent'  => array(
		'label' => __( 'Content', 'starry' ),
		'type'  => 'textarea',
		'desc'  => __( 'This is the content of the box, bellow the title.', 'starry' ),
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
	'parallaxposition'    => array(
		'label' => __( 'Choose the attachment of the background image', 'starry' ),
		'desc'  => __( 'Note that Parallax Option only works with modern browsers.', 'starry' ),
		'type'         => 'switch',
		'right-choice' => array(
			'value' => 'yes',
			'label' => __( 'Parallax', 'starry' )
		),
		'left-choice'  => array(
			'value' => 'no',
			'label' => __( 'Fixed', 'starry' )
		),
		'value'        => 'yes',
	),
	// ADDED ON 1.2
	'parallaxvideo'  => array(
		'label' => __( 'Video Background URL', 'starry' ),
		'desc'  => __( 'URL of an embed video on Youtube or Vimeo for example. It will replace any current background image.', 'starry' ),
		'type'  => 'text',
	),
);