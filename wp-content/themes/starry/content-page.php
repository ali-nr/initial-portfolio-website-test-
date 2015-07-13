<?php
/**
 * The template used for displaying page content
 */
?>
	<?php 
  	// CHECK FOR SIDEBARDS AND ADAPT THE LAYOUT
  	if ( function_exists('fw_ext_sidebars_get_current_position') ) : 
  		$current_position = fw_ext_sidebars_get_current_position();
  	endif;
  	if (!empty($current_position)): 
		if ($current_position != 'full' || is_page_template( 'page-templates/full-width.php' )) : 
			$class = "";
		else :
			$class = "container";
		endif;
	else :
		$class = "container";
	endif; ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
		<?php 
		// WE DO NOT DISPLAY THE TITLE ON THE HOME PAGE
		// You can delete the condition if you want to display the title on the home page :
		if(!is_front_page()): ?>

			<?php // GET THE SECOND FEATURED IMAGE
			$secondfeatured = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'secondfeatured') : '';
			$secondfeaturedheight = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'secondfeaturedheight') : '';
			if( !empty( $secondfeatured ) ) : ?>	
				<div class="second-featured" style="background-image: url(<?php echo esc_url($secondfeatured['url']) ?>); height: <?php echo $secondfeaturedheight ?>px;">
				</div>
			<?php endif; ?>
			
			<!-- PAGE TITLE -->
			<h2 class="with-breaker animate-me fadeInUp">
				<?php echo get_the_title(); ?>
				<?php // GET THE PAGE TITLE
				$subtitle = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'subtitle') : '';
				if( !empty( $subtitle ) ) : ?>
					<span><?php echo $subtitle; ?></span>
				<?php endif; ?>
			</h2>

			<?php
			//THE BREADCRUMB
			if( !is_front_page() && function_exists('fw_ext_breadcrumbs') && is_page() ) {
				fw_ext_breadcrumbs();
			}
			?>
		<?php endif; ?>
		<?php
		// THE CONTENT
		the_content();

		//DISABLED IN THIS THEME
		wp_link_pages(array('echo'  => 0));
		//EDIT LINK
		edit_post_link( __( 'Edit', 'starry' ), '<span class="edit-link">', '</span>' );
		?>
	</div>