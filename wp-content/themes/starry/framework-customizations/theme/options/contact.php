<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'contact' => array(
		'title'   => __( 'Contact', 'starry' ),
		'type'    => 'tab',
		'options' => array(
			'contact-box' => array(
				'title'   => __( 'Contact informations (for the widget, topbar and the form)', 'starry' ),
				'type'    => 'box',
				'options' => array(
					'email'    => array(
						'label' => __( 'Email', 'starry' ),
						'desc'  => __( 'Email here please for the contact form (NOT IF YOU USE CONTACT FORM 7)', 'starry' ),
						'type'  => 'text',
						'value' => 'email@email.com'
					),
					'phone'  => array(
						'label' => __( 'Phone', 'starry' ),
						'type'  => 'text',
						'value' => '(+33)0 11 22 33 44'
					),
					'address1'    => array(
						'label' => __( 'Address line 1', 'starry' ),
						'type'  => 'text',
						'value' => '666 Avenue des Champs-Elysees.'
					),
					'address2'    => array(
						'label' => __( 'Address line 2', 'starry' ),
						'type'  => 'text',
						'value' => '75000 Paris'
					),
					'address3'    => array(
						'label' => __( 'Address line 3', 'starry' ),
						'type'  => 'text'
					),
					/*'formtopics'            => array(
						'label'  => __( 'Form topics', 'starry' ),
						'type'   => 'addable-option',
						'option' => array(
							'type' => 'text',
						),
						'value'  => array( 'Request an estimate', 'Question', 'Charity Website','Support','Other' )
					)*/
				)
			),
		)
	)
);