<?php
/**
 * The template for displaying Search Results pages
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
				<?php printf( __( 'Search Results for: %s', 'starry' ), get_search_query() ); ?>
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
	</div>
	<!-- END MAIN CONTAINER -->
<?php
get_footer();
