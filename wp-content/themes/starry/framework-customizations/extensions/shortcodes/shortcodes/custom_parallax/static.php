<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_script(
	'fw-shortcode-video-full',
	get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/custom_parallax/static/js/scripts.js',
	false,
	true
);

