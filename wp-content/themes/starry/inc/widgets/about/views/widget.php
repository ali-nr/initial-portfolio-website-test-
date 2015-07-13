<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

echo $before_widget;
?>
	<!-- WIDGET -->
	<img src="<?php echo esc_url($logo_footer_url); ?>" id="footer-logo" alt="Logo footer">
	<p><?php echo $footer_description; ?></p>
	<?php if(!empty($footer_link)): ?>
		<a href="<?php echo esc_url($footer_link); ?>" class="btn btn-default"><i class="fa fa-users"></i><?php _e("Read more","starry"); ?></a>
	<?php endif; ?>
<?php echo $after_widget ?>