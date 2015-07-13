<?php
/**
 * The Template for displaying the single portfolio project
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
		while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class("container"); ?>>
				<div class="row single-portfolio">
					<div class="col-lg-6">
						<?php
						$projectvideo = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'projectvideo') : '';
						if (empty($projectvideo)): ?>
		  					<div class="flexslider image-slider">
		  						<!--SLIDER -->
		  						<ul class="slides">
		  							<?php
		  							// GET THE THUMBNAIL IMAGE
			                        $image_id = get_post_thumbnail_id();  
			                        $image_url = wp_get_attachment_image_src($image_id,'full');  
			                        $image_url = $image_url[0];
			                        ?>
									<li>
										<a href="<?php echo esc_url($image_url); ?>" class="fancybox" rel="gallery-<?php echo the_ID(); ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a>
									</li>
									<?php 
									// GET THE OPTIONAL GALLERY
									$projectgallery = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'projectgallery') : '';
			  						foreach($projectgallery as $value) {
									  echo '<li>';
									  echo '<a href="'.esc_url($value['url']).'" class="fancybox" rel="gallery-'. get_the_ID() .'"><img src="'.esc_url($value['url']).'"></a>';
									  echo '</li>';
									}
			  						?>
		  						</ul>
		  					</div>
		  				<?php else : ?>
		  					<div class="video-container">
		  						<iframe src="<?php echo $projectvideo; ?> " frameborder="0"></iframe>
		  					</div>
		  				<?php endif; ?>

	  					<?php 
	  					$portfoliosharing = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('portfoliosharing') : '';
						if(  $portfoliosharing == "show" ) : ?>
		  					<!--SHARE BUTTONS -->
				  			<ul class="share-buttons animate-me fadeInUp">
				  				<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436'); return false;}</script>
				  				<li><a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank" class="btn btn-default button-facebook" ><i class="fa fa-facebook"></i> <?php _e('Share it','starry'); ?></a></li>
				  				<li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" target="_blank" class="btn btn-default button-twitter"><i class="fa fa-twitter"></i> <?php _e('Tweet it','starry'); ?></a></li>
				  			</ul>
				  		<?php endif; ?>
	  				</div>
	  				<div class="col-lg-6">
	  					<!--ITEM DETAILS -->
			  			<h1 class="animate-me fadeInRight project-title"><?php the_title(); ?></h1>
			  			<hr class="align-left">
			  			<ul class="post-metadatas">
			  				<?php $projectdate = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'projectdate') : ''; ?>
			  				<?php if ($projectdate['from'] != "" && $projectdate['to'] != ""): ?>
			  					<li><i class="fa fa-clock-o"></i><?php _e("Period :","starry"); ?> <?php echo $projectdate['from'] .' - '. $projectdate['to']; ?></li>
			  				<?php endif; ?>
		  					<?php $terms = get_the_terms(get_the_ID(),"portfolio-category"); ?>
			                <?php if ( is_array($terms) ) : ?>
			                	<?php 
			                	// IN ORDER TO ADAPT THE PLURIAL OF CATEGORY
			                	$count = count($terms);
                				if ( $count > 1 ) : ?>
			  						<li><i class="fa fa-thumb-tack"></i><?php _e("Categories:","starry"); ?>
			  					<?php else : ?>
			  						<li><i class="fa fa-thumb-tack"></i><?php _e("Category:","starry"); ?>
			  					<?php endif; ?>
				                	<?php 
				                    foreach ( $terms as $term ) {
				                    	$termlink = get_term_link( $term );
				                    	if ( is_wp_error( $termlink ) ) {
									        continue;
									    }
				                        echo '<a href="'.esc_url($termlink).'">' . esc_html($term->name) . '</a> ';
				                    } ?>
			  					</li>
			  				<?php endif; ?> 
			  			</ul>
			  			<div class="project-description">
			  				<?php the_excerpt(); ?>
			  			</div>
			  			<?php $projectlink = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'projectlink') : ''; ?>
			  			<?php if (!empty($projectlink)): ?>
				  			<div class="text-right animate-me bounceIn">
				  				<a href="<?php echo esc_url($projectlink); ?>" class="btn btn-default" target="_blank"><i class="fa fa-link"></i> <?php _e("View project","starry"); ?></a>
				  			</div>
				  		<?php endif; ?>
	  				</div>
				</div>
			</div> 

			<?php
			$portfolioextra = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('portfolioextra') : '';
			if(  $portfolioextra == "show" ) : ?>
	  		
				<?php
				$portfolioextratitle = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('portfolioextratitle') : '';
				$portfoliosubtitle = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('portfoliosubtitle') : '';
				?>
				<?php if (!empty($portfolioextratitle)): ?>
					<!--PORTFOLIO -->
					<div class="container">
						<h2 class="with-breaker animate-me fadeInUp">
				  			<?php echo $portfolioextratitle; ?>
				  			<?php if (!empty($portfoliosubtitle)): ?>
				  				<span><?php echo $portfoliosubtitle; ?></span>
				  			<?php endif; ?>
						</h2>
					</div>
				<?php endif; ?>
				<div id="portfolio-container" class="portfolio-container with-separation-bottom with-separation-top">		
					<?php $portfolioorder = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('portfolioorder') : ''; ?>
					<?php query_posts(array('post_type' => 'portfolio', 'posts_per_page'=>6, 'orderby' =>'date', 'order' => $portfolioorder)); ?>
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
					<?php wp_reset_query(); ?>
				</div>
			<?php endif; ?>

			<?php
			// Previous/next post navigation.
			starry_post_nav();
		endwhile;

		//GET EXTRA FOOTER
		starry_extrafooter();
		?>
	</div>
	<!-- END MAIN CONTAINER -->
<?php
get_footer();