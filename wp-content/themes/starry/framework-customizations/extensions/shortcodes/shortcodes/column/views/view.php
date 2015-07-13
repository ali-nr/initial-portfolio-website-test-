<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
?>
<?php if (!empty($atts['extraclasses'])) : 
	$extraclass = $atts['extraclasses'];
else :
	$extraclass = "";
endif; ?>
<div class="<?php echo $class; ?> <?php echo $extraclass; ?>">
	<?php echo do_shortcode($content); ?>
</div>
