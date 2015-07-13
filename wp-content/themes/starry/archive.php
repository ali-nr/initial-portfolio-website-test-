<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one.
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
				<?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'starry' ), get_the_date() );

					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'starry' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'starry' ) ) );

					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'starry' ), get_the_date( _x( 'Y', 'yearly archives date format', 'starry' ) ) );

					else :
						_e( 'Archives', 'starry' );
					endif;
				?>
			</h2>
			<?php
			if( function_exists('fw_ext_breadcrumbs') ) {
				fw_ext_breadcrumbs();
			}
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
