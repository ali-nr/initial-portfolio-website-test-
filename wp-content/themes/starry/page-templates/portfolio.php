<?php
/**
 * Template Name: Portfolio
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
		<div class="container">
  			<!--PORTFOLIO -->
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
			<?php 
			// DISPLAY THE CONTENT IF IT EXISTS
			the_content(); 
			?>
			<?php 
			// DISPLAY THE PORTFOLIO CATEGORY FOR FILTERING
			$terms = get_terms("portfolio-category");
			$count = count($terms); 
			if ( $count > 0 ): ?>
				<div id="portfolio-filters" class="animate-me fadeIn">
					<button class="btn btn-default" data-filter="*"><i class="fa fa-tags"></i> <?php _e('Show all','starry'); ?></button>
	                <?php 
	                foreach ( $terms as $term ) {
	                	$termname = strtolower($term->name);
                		$termname = str_replace(' ', '-', $termname);
	                    echo '<button class="btn btn-default" data-filter=".portfolio-' . esc_attr($termname) . '"><i class="fa fa-tag"></i>' . esc_html($term->name) . '</button>';
	                } ?>
	            </div>
            <?php endif; ?>
  		</div>
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
		<?php $portfolioorder = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('portfolioorder') : ''; ?>
		<?php query_posts(array('post_type' => 'portfolio', 'orderby' =>'date', 'order' => $portfolioorder, 'posts_per_page'=>12, 'paged' => $paged)); ?>
  		<div id="portfolio-container" class="portfolio-container with-separation-bottom with-separation-top">
		  	<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php 
					// THE CATEGORY FOR FILTERING
					$terms = get_the_terms( get_the_ID(), 'portfolio-category' );	
				     if ( $terms && ! is_wp_error( $terms ) ) : 
				 
				         $links = array();
				 
				         foreach ( $terms as $term ) {
				             $links[] = 'portfolio-'. $term->name;
				         }
				 
				         $tax_links = join( " ", str_replace(' ', '-', $links));          
				         $tax = strtolower($tax_links);
				     else :	
					 $tax = '';					
				     endif; 
                    ?>
					<!--PORTFOLIO ITEM -->
		  			<figure class="portfolio-item effect-sadie <?php echo $tax; ?>">
				        <?php the_post_thumbnail(array(800,600)); ?>
				        <figcaption>
				            <h4><?php the_title(); ?></h4>
				            <p><?php echo excerpt(12); ?></p>
				            <a href="<?php the_permalink(); ?>"><?php _e("View more","starry"); ?></a>
				        </figcaption>         
				    </figure>
				<?php endwhile; ?>

				<!--IF THE FILTER IS EMPTY -->
	  			<div id="no-portfolio-item" >
			     	<i class="fa fa-frown-o"></i>
			     	<h4><?php _e("No match on this page...","starry"); ?></h4>
			     	<p><?php _e("Unfortunately, there is no project with such category on this page, try on the next one. (Navigation at the right :)","starry"); ?></p>
			    </div>
			<?php endif; ?>
  		</div>
	  	<?php 
	  	// THE NAVIGATION 
	  	starry_portfolio_nav();
	  	//ONCE IT IS DONE
	  	wp_reset_query(); 
		//GET EXTRA FOOTER
		starry_extrafooter();
		?>
	</div>
<?php 
endwhile;
get_footer();

