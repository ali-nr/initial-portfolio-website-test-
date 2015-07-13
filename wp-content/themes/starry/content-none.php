<?php
/**
 * The template for displaying a "No posts found" message
 */
?>

	<div <?php post_class('container'); ?>>
		<!-- NOT FOUND -->
		<h3 class="center">
			<?php _e( 'Nothing Found', 'starry' ); ?>
		</h3>
		<div class="center animate-me bounceIn">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
				<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'starry' ), admin_url( 'post-new.php' ) ); ?></p>
			<?php elseif ( is_search() ) : ?>
				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'starry' ); ?></p>
				<?php 
				add_filter( 'get_search_form', '_starry_search_form2' );
				get_search_form();
				remove_filter( 'get_search_form', '_starry_search_form2' ); ?>
			<?php else : ?>
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'starry' ); ?></p>
				<?php 
				add_filter( 'get_search_form', '_starry_search_form2' );
				get_search_form();
				remove_filter( 'get_search_form', '_starry_search_form2' ); ?>
			<?php endif; ?>
		</div>
	</div>

