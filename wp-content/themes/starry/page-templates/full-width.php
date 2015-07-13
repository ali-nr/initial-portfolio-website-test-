<?php
/**
 * Template Name: Full Width
 */


get_header(); 
// Start the Loop.
while ( have_posts() ) : the_post(); ?>
		<?php 
		//GET THEME HEADER CONTENT
		starry_header(); ?> 		
  	</header>
  	<!-- END HEADER -->
  	
	<!-- START MAIN CONTAINER -->
	<div class="main-container">
		<?php
		// Include the page content template.
		get_template_part( 'content', 'page' );
		?>
		<?php
		//GET EXTRA FOOTER
		starry_extrafooter();
		?>
	</div>
<?php 
endwhile;
get_footer();

