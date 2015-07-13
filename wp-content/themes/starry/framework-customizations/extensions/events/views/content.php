<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );
/**
 * @var string $the_content
 */

global $post;
$options = fw_get_db_post_option($post->ID, fw()->extensions->get( 'events' )->get_event_option_id());
?>
<?php foreach($options['event_children'] as $key => $row) : ?>
	<?php if (empty($row['event_date_range']['from']) or empty($row['event_date_range']['to'])) : ?>
		<?php continue; ?>
	<?php endif; ?>
	<ul class="details-event">
		<li><b><?php _e('Start', 'fw') ?>:</b> <?php echo $row['event_date_range']['from']; ?></li>
		<li><b><?php _e('End', 'fw') ?>:</b> <?php echo $row['event_date_range']['to']; ?></li>

		<?php if (empty($row['event-user']) === false) : ?>
			<li>
				<b><?php _e('Speakers', 'fw') ?>:</b>
				<?php foreach($row['event-user'] as $user_id ) : ?>
					<?php $user_info = get_userdata($user_id); ?>
					<?php echo esc_html( $user_info->display_name ); ?>
					<?php echo ($user_id !== end($row['event-user']) ? ', ' : '' ); ?>
				<?php endforeach; ?>
			</li>
		<?php endif;?>

	</ul>

	<div class="details-event-button">
		<button data-uri="<?php echo esc_url(add_query_arg( array( 'row_id' => $key, 'calendar' => 'google' ), fw_current_url() )); ?>" type="button" class="btn btn-default"><?php _e('Google Calendar', 'fw') ?></button>
		<button data-uri="<?php echo esc_url(add_query_arg( array( 'row_id' => $key, 'calendar' => 'ical'   ), fw_current_url() )); ?>" type="button" class="btn btn-default"><?php _e('Ical Export', 'fw') ?></button>
	</div>
	<hr class="after-hr"/>
<?php endforeach; ?>
<!-- .additional information about event -->

<?php echo $the_content; ?>

<!-- call map shortcode -->
<?php echo fw_ext_events_render_map() ?>
<!-- .call map shortcode -->


<?php do_action('fw_ext_events_single_after_content'); ?>