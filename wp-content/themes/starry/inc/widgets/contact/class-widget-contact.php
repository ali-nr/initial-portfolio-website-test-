<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_Contact extends WP_Widget {

	/**
	 * @internal
	 */
	function __construct() {
		$widget_ops = array( 'description' => 'Starry widget to display the contact informations in the footer.' );
		parent::WP_Widget( false, __( 'Contact', 'starry' ), $widget_ops );
	}
	/**
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );
		$title     = esc_attr( $instance['title'] );
		$contact_address_widget = isset($instance['contact_address_widget']) ? $instance['contact_address_widget'] : '';;
		$contact_phone = isset($instance['contact_phone']) ? $instance['contact_phone'] : '';;
		$contact_social = isset($instance['contact_social']) ? $instance['contact_social'] : '';;
		$contact_link     = esc_attr( $instance['contact_link'] );
		$before_widget = str_replace( 'class="', 'class="widget_contact ', $before_widget );
		$title         = str_replace( 'class="', 'class="widget_contact ',
				$before_title ) . $title . $after_title;

		$filepath = dirname( __FILE__ ) . '/views/widget.php';

		if ( file_exists( $filepath ) ) {
			include( $filepath );
		}
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'contact_link' => '', 'contact_address_widget' => '','contact_social' => '','contact_phone' => '') );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'starry' ); ?> </label>
			<input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>"
			       value="<?php echo esc_attr( $instance['title'] ); ?>" class="widefat"
			       id="<?php $this->get_field_id( 'title' ); ?>"/>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'contact_address_widget' ); ?>"><?php _e( 'Display address', 'starry' ); ?> </label>
			<input type="checkbox" name="<?php echo $this->get_field_name( 'contact_address_widget' ); ?>" 
				   class="widefat"
			       id="<?php $this->get_field_id( 'contact_address_widget' ); ?>"
			       <?php checked($instance['contact_address_widget'], 'on'); ?>/>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'contact_phone' ); ?>"><?php _e( 'Display Phone', 'starry' ); ?> </label>
			<input type="checkbox" name="<?php echo $this->get_field_name( 'contact_phone' ); ?>"
			       class="widefat"
			       id="<?php $this->get_field_id( 'contact_phone' ); ?>"
			       <?php checked($instance['contact_phone'], 'on'); ?>/>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'contact_social' ); ?>"><?php _e( 'Display Social', 'starry' ); ?> </label>
			<input type="checkbox" name="<?php echo $this->get_field_name( 'contact_social' ); ?>"
			       class="widefat"
			       id="<?php $this->get_field_id( 'contact_social' ); ?>"
			       <?php checked($instance['contact_social'], 'on'); ?>/>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'contact_link' ); ?>"><?php _e( 'Contact button link', 'starry' ); ?></label>
			<input type="text" name="<?php echo $this->get_field_name( 'contact_link' ); ?>"
			       value="<?php echo esc_attr( $instance['contact_link'] ); ?>" class="widefat"
			       id="<?php $this->get_field_id( 'contact_link' ); ?>"/>
		</p>
	<?php
	}
}
