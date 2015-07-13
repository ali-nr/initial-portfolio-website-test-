<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'home' => array(
		'title'   => __( 'Home', 'starry' ),
		'type'    => 'tab',
		'options' => array(
			'home-box' => array(
				'title'   => __( 'Main options', 'starry' ),
				'type'    => 'box',
				'options' => array(
					'homeinfo'                      => array(
						'label' => __( 'Beware', 'starry' ),
						'type'  => 'html',
						'value' => '{some: "json"}',
						'html'  => '<strong>Please, be sure that the <i>Front page displays</i> option into the <i>Settings -> Reading</i> page is set on "A static page (select below)".</strong>',
					),
					'homescrolldown'    => array(
						'label' => __( 'Scroll bottom arrow', 'starry' ),
						'desc'  => __( 'In the top part of the home page', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'show',
							'label' => __( 'Show', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'hide',
							'label' => __( 'Hide', 'starry' )
						),
						'value'        => 'show',
						'help'  => array(
							'icon' => 'image',
							'html' => '<img src="'.get_template_directory_uri() .'/framework-customizations/theme/options/images/scrollbottom.png" width="400">'
						),
					),
					'homeheader_content'       => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'picker'       => array(
							'gadget' => array(
								'label'   => __( 'Header type', 'starry' ),
								'type'    => 'select',
								'choices' => array(
									'header_single' => __( 'Single Image', 'starry' ),
									'header_slider'  => __( 'Slider', 'starry' ),
									'header_video'  => __( 'Video (advanced)', 'starry' )
								)
							)
						),
						'choices'      => array(
							'header_single' => array(
								'homesingleimage'  => array(
									'label'       => __( 'Home background image', 'starry' ),
									'desc'        => __( 'So you do not need to set a featured image for the home page in Wordpress, just upload it here.',
										'starry' ),
									'type'        => 'upload',
									'images_only' => true
								)
							),
							'header_slider'  => array(
								'homesliderimages'    => array(
									'label' => __( 'Images in the slider', 'starry' ),
									'desc'  => __( 'Just upload the images for the slider here', 'starry' ),
									'type'  => 'multi-upload',
									'images_only' => true
								),
								'homeslidercontrol'                => array(
									'label' => __( 'Display navigation', 'starry' ),
									'type'  => 'checkbox',
									'value' => true,
									'desc' =>  __('The arrows','starry')
								),
								'homeslideranimation'    => array(
									'label' => __( 'Slider transitions ', 'starry' ),
									'type'         => 'switch',
									'right-choice' => array(
										'value' => 'fade',
										'label' => __( 'Fade', 'starry' )
									),
									'left-choice'  => array(
										'value' => 'slide',
										'label' => __( 'Slide', 'starry' )
									),
									'value'        => 'slide',
								)
							),
							'header_video' => array(
								'header_video_mp4'  => array(
									'label' => __( 'Video MP4 format', 'starry' ),
									'desc'        => __( 'VIDEO FILE. This is the most important format.',
										'starry' ),
									'type'        => 'upload'
								),
								'header_video_poster'  => array(
									'label' => __( 'Video Poster -> JPG', 'starry' ),
									'desc'        => __( 'This is the image displayed when the videos are not supported on the browser, so it is just a screenshot.',
										'starry' ),
									'type'        => 'upload',
									'images_only' => true
								),
								'header_video_ogv'  => array(
									'label' => __( 'Video OGV format', 'starry' ),
									'desc'        => __( 'VIDEO FILE. Enhance the video compatibility over most browsers',
										'starry' ),
									'type'        => 'upload'
								),
								'header_video_webm'  => array(
									'label' => __( 'Video WEBM format (FILE)', 'starry' ),
									'desc'        => __( 'VIDEO FILE. Enhance the video compatibility over most browsers. If the file is too big, leave this field empty and take a look below.',
										'starry' ),
									'type'        => 'upload'
								),
								'header_video_webm_link'  => array(
									'label' => __( 'Video WEBM (LINK)', 'starry' ),
									'desc'        => __( 'Webm use to be heavier, if the video file is too big for Worpdress uploader, use your FTP and copy/past the link here.',
										'starry' ),
									'type'        => 'text'
								),
							)
						),
						'show_borders' => false,
					),
					'homerevslider'                => array(
						'label' => __( 'Use the Revolution slider ?', 'starry' ),
						'type'  => 'checkbox',
						'value' => false,
						'desc' =>  __('It will replace your choice above, you can find the plugin in ASSETS/revslider.zip AND you need to call it "home"','starry')
					),
					'hometickershow'    => array(
						'label' => __( 'Text ticker/slider', 'starry' ),
						'desc'  => __( 'Do you want to display the text ticker/slider in the home page', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'starry' )
						),
						'value'        => 'yes',
					),
					'hometickerintroduce' => array(
						'label' => __( 'Text ticker text introduction', 'starry' ),
						'type'  => 'text',
						'value' => 'Why choose us ?'
					),
					'hometickercontent2'            => array(
						'label'  => __( 'Text ticker content', 'starry' ),
						'type'   => 'addable-option',
						'option' => array(
							'type' => 'text',
						),
						'desc'   => __( 'The sentences, displayed in the text ticker. <strong>Be short please (no more than 6 words is advised)</strong>','starry' ),
						'help'	 => __( 'Be sure, that the field above "Text ticker" is set on YES','starry'),
						'value'  => array( "Our work is our passion", "We're ready to hear you", "Our work is all about quality","We're always at the top","We care about you","We're French & proud !","We're dynamic !" )
					),
					'hometickerhidemobile'    => array(
						'label' => __( 'Text ticker/slider on small screens', 'starry' ),
						'desc'  => __( 'Do you want to display to hide the text ticker for the screens under 520px (mobiles) ?', 'starry' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'starry' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'starry' )
						),
						'value'        => 'no',
					),
					'hometickerspeed' => array(
						'label' => __( 'Text ticker Speed', 'starry' ),
						'type'  => 'text',
						'desc'  => __( 'In MS, Delay before scrolling to next item', 'starry' ),
						'value' => '2000'
					),

				)
			),
		)
	)
);