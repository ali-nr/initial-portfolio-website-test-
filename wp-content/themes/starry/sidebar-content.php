<?php
/**
 * The Content Sidebar
 */
?>
<?php if ( function_exists('fw_ext_sidebars_get_current_position') ) : ?>
	<div id="content-sidebar" class="main-container content-sidebar" role="complementary">
		<?php $current_position = fw_ext_sidebars_get_current_position();?>
		<?php if ($current_position !== 'full') : ?>

			<?php if ($current_position === 'right') :?>
				<div class="col-md-3 right-sidebar animate-me fadeInRight">
					<?php echo fw_ext_sidebars_show('blue'); ?>
				</div>
			<?php endif;?>

			<?php if ($current_position === 'left') :?>
				<div class="col-md-3 left-sidebar animate-me fadeInLeft">
					<?php echo fw_ext_sidebars_show('blue'); ?>
				</div>
			<?php endif ?>

		<?php endif;?>
	</div><!-- #content-sidebar -->
<?php endif; ?>