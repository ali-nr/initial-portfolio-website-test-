<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	fw()->theme->get_options( 'general-settings' ),
	fw()->theme->get_options( 'main-style' ),
	fw()->theme->get_options( 'header' ),
	fw()->theme->get_options( 'home' ),
	fw()->theme->get_options( 'contact' ),
	fw()->theme->get_options( 'social' ),
	fw()->theme->get_options( 'footer' ),
	fw()->theme->get_options( 'extra-footer' ),
	fw()->theme->get_options( 'custom-types' ),
);
