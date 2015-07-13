<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<a href="<?php echo esc_url($atts['link']); ?>" target="<?php echo $atts['target'] ?>" class="btn btn-default">
	<?php if(!empty($atts['icon'])) : ?>
		<i class="<?php echo $atts['icon']; ?>"></i>
	<?php endif; ?>
	<?php echo esc_html($atts['label']); ?>
</a>