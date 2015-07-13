<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	'page-box' => array(
		'title'   => __( 'Page settings ', 'starry' ),
		'type'    => 'box',
		'options' => array(
			'subtitle'    => array(
				'label'   => __( 'Subtitle', 'starry' ),
				'desc'  => __( 'Subtitle under the title in your page (Not needed if it is the home page.', 'starry' ),
				'type'  => 'text',
			),
			'secondfeatured'    => array(
				'label'       => __( 'Second featured image (optional)', 'starry' ),
				'desc'       => __( 'Add a second featured image to your page. It will be displayed before the page title, the image will be as a banner so large images are better ;)', 'starry' ),
				'type'        => 'upload',
				'images_only' => true
			),
			'secondfeaturedheight'    => array(
				'label'   => __( 'Seconde featured height', 'starry' ),
				'desc'  => __( 'In pixels but you do not need to set px.', 'starry' ),
				'value' => '300',
				'type'  => 'short-text'
			),
		)
	),
);
