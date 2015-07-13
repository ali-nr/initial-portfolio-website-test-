<?php
/**
 * DISPLAY THE CATEGORY FOR THE PORTFOLIO
 */
get_header(); ?>
		<?php 
		//GET THEME HEADER CONTENT
		starry_header(); ?> 		
  	</header>
  	<!-- END HEADER -->
  	
	<!-- START MAIN CONTAINER -->
	<div class="main-container">
		<div class="container">
  			<!--PORTFOLIO -->
  			<h2 class="with-breaker animate-me fadeInUp">
  				<?php _e( 'Portfolio Archive :','starry'); ?>
  				<?php 
  				$term =	$wp_query->queried_object;
				echo $term->name;
  				?>
			</h2>
			<?php
			//THE BREADCRUMB
			if( !is_front_page() && function_exists('fw_ext_breadcrumbs') && is_page() ) {
				fw_ext_breadcrumbs();
			}
			?>
  		</div>
  		<div id="portfolio-container" class="with-separation-bottom with-separation-top">
		  	<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<!--PORTFOLIO ITEM -->
		  			<figure class="portfolio-item effect-sadie">
				        <?php the_post_thumbnail(array(800,600)); ?>
				        <figcaption>
				            <h4><?php the_title(); ?></h4>
				            <p><?php echo excerpt(12); ?></p>
				            <a href="<?php the_permalink(); ?>"><?php _e("View more","starry"); ?></a>
				        </figcaption>         
				    </figure>
				<?php endwhile; ?>
			<?php endif; ?>
  		</div>
	  	<?php 
	  	// THE NAVIGATION 
	  	starry_portfolio_nav();
		//GET EXTRA FOOTER
		starry_extrafooter();
		?>
	</div>
<?php 
get_footer();

