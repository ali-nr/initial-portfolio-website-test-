<?php if (!defined('FW')) die('Forbidden');

$container_class = 'fw-container';
?>
<section <?php if (!empty($atts['section_id'])){ echo 'id="'. esc_attr($atts['section_id']) .'"'; } ?> >
	<div class="<?php echo $container_class; ?>">
		<?php echo do_shortcode($content); ?>
	</div>
</section>