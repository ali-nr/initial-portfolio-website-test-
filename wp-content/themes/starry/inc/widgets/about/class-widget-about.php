<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

class Widget_About extends WP_Widget {

	/**
	 * @internal
	 */
	function __construct() {
		$widget_ops = array( 'description' => 'Starry widget to display the "about informations" in the footer.' );
		parent::WP_Widget( false, __( 'About', 'starry' ), $widget_ops );

		parent::__construct( 'Widget_About', 'About', $widget_ops );

        add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
        add_action('admin_enqueue_styles', array($this, 'upload_styles'));
	}
	/**
     * Upload the Javascripts for the media uploader
     */
    public function upload_scripts()
    {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('upload_media_widget',  '/wp-content/themes/starry/inc/widgets/about/upload-media.js', array('jquery'));
    }
    public function upload_styles()
    {
        wp_enqueue_style('thickbox');
    }
	/**
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		extract( $args );
		$footer_description     = esc_attr( $instance['footer_description'] );
		$logo_footer_url     = esc_attr( $instance['logo_footer_url'] );
		$footer_link     = esc_attr( $instance['footer_link'] );
		$before_widget = str_replace( 'class="', 'class="widget_about ', $before_widget );

		$filepath = dirname( __FILE__ ) . '/views/widget.php';

		if ( file_exists( $filepath ) ) {
			include( $filepath );
		}
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'logo_footer_url' => '', 'footer_link' => '', 'footer_description' => '' ) );
		$logo_footer_url = '';
        if(isset($instance['logo_footer_url']))
        {
            $logo_footer_url = $instance['logo_footer_url'];
        }
		?>

		<p>
            <label for="<?php echo $this->get_field_name( 'logo_footer_url' ); ?>"><?php _e( 'Logo Image (318x70 for instance and PNG please)', 'starry' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'logo_footer_url' ); ?>" id="<?php echo $this->get_field_id( 'logo_footer_url' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $logo_footer_url ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

		<p>
			<label for="<?php echo $this->get_field_id( 'footer_description' ); ?>"><?php _e( 'Small text to describe your business', 'starry' ); ?></label>
			<textarea name="<?php echo $this->get_field_name( 'footer_description' ); ?>" class="widefat"
			       id="<?php $this->get_field_id( 'footer_description' ); ?>"><?php echo esc_attr( $instance['footer_description'] ); ?></textarea>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'footer_link' ); ?>"><?php _e( 'Button link', 'starry' ); ?></label>
			<input type="text" name="<?php echo $this->get_field_name( 'footer_link' ); ?>"
			       value="<?php echo esc_attr( $instance['footer_link'] ); ?>" class="widefat"
			       id="<?php $this->get_field_id( 'footer_link' ); ?>"/>
		</p>
	<?php
	}
}
