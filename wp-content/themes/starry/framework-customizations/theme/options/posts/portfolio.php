<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	'portfolio-box' => array(
		'title'   => __( 'Project Options', 'starry' ),
		'type'    => 'box',
		'options' => array(
			'projectlink'                      => array(
				'label' => __( 'Project URL', 'starry' ),
				'type'  => 'text',
				'desc'  => __( 'The link to your project, leaves empty and it will not be displayed','starry'),
				'value' => '#',
			),
			'projectgallery'                      => array(
				'label' => __( 'Project Gallery', 'starry' ),
				'type' => 'multi-upload',
				'images_only' => true,
				'desc'  => __( 'If you want to add more than a thumbnail image, these images will be displayed in the slider on the project page','starry'),
			),
			'projectdate'                      => array(
				'label' => __( 'Project Date', 'starry' ),
				'desc'  => __( 'To locate your project in time, it is an option here, it will not be displayed if you leave it empty.','starry'),
				'type'  => 'datetime-range',	
				'datetime-pickers' => array(
					'from' => array(
						'timepicker' => false,
						'datepicker' => true,
					),
					'to'   => array(
						'timepicker' => false,
						'datepicker' => true,
					)
				)
			),
			'projectvideo'                      => array(
				'label' => __( '(Optional) Video embed url', 'starry' ),
				'desc'  => __( 'It will be only displayed on the single page, so do not forget to set a thumbnail image.','starry'),
				'type'  => 'text',
				'desc'  => __( 'Something like : http://www.youtube.com/embed/L9szn1QQfas','starry'),
			),
			'projecttopfeatured'    => array(
				'label'       => __( 'Top featured image (optional)', 'starry' ),
				'desc'       => __( 'Change the image behind the menu in the header, otherwise we use default one.', 'starry' ),
				'type'        => 'upload',
				'images_only' => true
			),
		),
	),
);
