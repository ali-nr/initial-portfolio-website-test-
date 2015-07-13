<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'category'  => array(
		'label' => __( '(Optional) category', 'starry' ),
		'desc'  => __( 'Type a team category slug below, so only items from this category will be displayed. You can find it in Team -> categories. You will see in the table a column slug ;)', 'starry' ),
		'type'  => 'text',
	),
);