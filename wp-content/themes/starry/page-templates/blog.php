<?php
/**
 * Template Name: Blog
 */

get_header(); 
// Start the Loop.
while ( have_posts() ) : the_post(); ?>
		<?php 
		//GET THEME HEADER CONTENT
		starry_header(); ?> 		
  	</header>
  	<!-- END HEADER -->

  	<?php if ( function_exists('fw_ext_sidebars_get_current_position') ) : ?>
	  	<?php 
	  	// GET SIDEBARS AND CHECK THE SIDE FOR THE MAIN LAYOUT
	  	$current_position = fw_ext_sidebars_get_current_position();?>
		<?php 
		// IF IT IS RIGHT POSITION
		if ($current_position === 'right') :?>
			<!-- START MAIN CONTAINER -->
			<div id="the-container" class="main-container">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<?php
							// Include the page content template.
							get_template_part( 'content', 'page' );
							?>
						</div>
						<?php get_sidebar( 'content' ); ?>
					</div>
				</div>
				<?php
				//GET EXTRA FOOTER
				starry_extrafooter();
				?>
			</div>
			<!-- END MAIN CONTAINER -->

		<?php 
		// IF IT IS LEFT POSITION
		elseif ($current_position === 'left') :?>
			<!-- START MAIN CONTAINER -->
			<div id="the-container" class="main-container">
				<div class="container">
					<div class="row">
						<?php get_sidebar( 'content' ); ?>
						<div class="col-md-9">
							<?php
							// Include the page content template.
							get_template_part( 'content', 'page' );
							?>
						</div>
					</div>
				</div>
				<?php
				//GET EXTRA FOOTER
				starry_extrafooter();
				?>
			</div>
			<!-- END MAIN CONTAINER -->

		<?php 
		// IF EXTENSION IS NOT ENABLE
		else : ?>
			<!-- START MAIN CONTAINER -->
			<div id="the-container" class="main-container">
				<?php
				// Include the page content template.
				get_template_part( 'content', 'page' );
				?>
				<?php
				//GET EXTRA FOOTER
				starry_extrafooter();
				?>
			</div>
			<!-- END MAIN CONTAINER -->
		<?php endif; ?>
	<?php else: ?>
		<!-- START MAIN CONTAINER -->
		<div id="the-container" class="main-container">
			<?php
			// Include the page content template.
			get_template_part( 'content', 'page' );
			?>
			<?php
			//GET EXTRA FOOTER
			starry_extrafooter();
			?>
		</div>
		<!-- END MAIN CONTAINER -->
	<?php endif; ?>
<?php 
endwhile;
get_footer();
