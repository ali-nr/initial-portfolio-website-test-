<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>
		<?php //GET THEME HEADER CONTENT
		starry_header(); ?> 		
  	</header>
  	<!-- END HEADER -->

	<!-- START MAIN CONTAINER -->
	<div class="main-container">
		<div class="container">
			<!--BLOG -->
  			<h2 class="with-breaker animate-me fadeInUp">
				<?php printf( __( 'Category Archives: %s', 'starry' ), single_cat_title( '', false ) ); ?>
			</h2>
			<?php
			if( function_exists('fw_ext_breadcrumbs') ) {
				fw_ext_breadcrumbs();
			}
			?>
			<?php
				// Show an optional term description.
				$term_description = term_description();
				if ( ! empty( $term_description ) ) :
					printf( '<div class="taxonomy-description center">%s</div>', $term_description );
				endif;
			?>
			<ul class="blog-grid">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content' ); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
			</ul>
			<?php starry_paging_nav(); ?>
		</div>
		<?php //GET EXTRA FOOTER
		starry_extrafooter();
		?>
		</div>
	</div>
	<!-- END MAIN CONTAINER -->
<?php
get_footer();