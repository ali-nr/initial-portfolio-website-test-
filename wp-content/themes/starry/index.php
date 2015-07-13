<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
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
				<?php _e("Blog","starry"); ?>
			</h2>
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
	<!-- END MAIN CONTAINER -->
<?php
get_footer();
