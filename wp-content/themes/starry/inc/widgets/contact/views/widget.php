<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

echo $before_widget;

echo $title;
?>
	<!-- WIDGET -->
	<ul class="contact-informations">
		<?php if(!empty($contact_address_widget)): ?>
			<li class="contact-address">
				<?php // GET SETTINGS SET IN WORDPRESS
				$address1 = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('address1') : '';
				$address2 = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('address2') : '';
				$address3 = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('address3') : '';
				echo $address1;
				echo "<br>";
				echo $address2;
				if(!empty($address3)):
					echo "<br>";
					echo $address3;
				endif;
				?>
			</li>
		<?php endif; ?>
		<?php if(!empty($contact_phone)): ?>
			<li class="contact-phone">
				<?php // GET SETTINGS SET IN WORDPRESS
				$phone = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('phone') : '';
				echo $phone;
				?>
			</li>
		<?php endif; ?>
	</ul>
	<?php if(!empty($contact_social)): ?>
		<?php starry_social_icons(); ?>
	<?php endif; ?>
	<?php if(!empty($contact_link)): ?>
		<a href="<?php echo esc_url($contact_link); ?>" class="btn btn-default"><i class="fa fa-envelope-o"></i><?php _e("Contact Form","starry"); ?></a>
	<?php endif; ?>
<?php echo $after_widget ?>