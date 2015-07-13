<?php
/**
 * The Template for displaying all single posts
 */
get_header(); ?>
		<?php 
		//GET THEME HEADER CONTENT
		starry_header(); ?>
  	</header>
  	<!-- END HEADER -->

	<!-- START MAIN CONTAINER -->
	<div class="main-container">
		<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
			// Include the page content template.
			get_template_part( 'content' );
			// Previous/next post navigation.
			starry_post_nav();
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
		//GET EXTRA FOOTER
		starry_extrafooter();
		?>
	</div>
	<!-- END MAIN CONTAINER -->
<?php
get_footer();