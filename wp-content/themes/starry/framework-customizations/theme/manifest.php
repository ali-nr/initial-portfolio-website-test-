<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$manifest = array();

$manifest['id'] = 'starry';

$manifest['name']         = __('Starry', 'starry');
$manifest['uri']          = 'themeforest.net/user/2Fwebd';
$manifest['description']  = __('Another awesome wordpress theme', 'starry');
$manifest['version']      = '1.2.1';
$manifest['author']       = '2Fwebd';
$manifest['author_uri']   = '//themeforest.net/user/2Fwebd';

$manifest['supported_extensions'] = array(
	'page-builder' => array(),
	'breadcrumbs' => array(),
	'megamenu' => array(),
	'sidebars' => array(),
	'seo' => array(),
	'backup' => array(),
	'analytics' => array(),
	'slider' => array(),
);
