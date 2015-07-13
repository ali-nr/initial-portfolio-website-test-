<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */
?>
<<?php echo $atts['heading'];?> class="with-breaker animate-me fadeInUp">
	<?php echo esc_html($atts['title']); ?>
	<?php if( !empty( $atts['subtitle'] ) ) : ?>
		<span><?php echo esc_html($atts['subtitle']); ?></span>
	<?php endif; ?>
</<?php echo $atts['heading'];?>>