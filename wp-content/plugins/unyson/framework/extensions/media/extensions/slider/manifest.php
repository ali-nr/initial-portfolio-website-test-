<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']        = __( 'Sliders', 'fw' );
$manifest['description'] = __( "Adds the Sliders extension to your website. You'll be able to create different built in jQuery sliders for your homepage and all the other website pages.", 'fw' );
$manifest['version'] = '1.1.8';
$manifest['display'] = true;
$manifest['standalone'] = true;
$manifest['requirements'] = array(
	'extensions' => array(
		'population-method' => array(),
	)
);
$manifest['github_update'] = 'ThemeFuse/Unyson-Sliders-Extension';
