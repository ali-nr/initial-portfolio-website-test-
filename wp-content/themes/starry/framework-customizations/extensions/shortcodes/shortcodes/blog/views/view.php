<?php if (!defined('FW')) die( 'Forbidden' ); ?>
	
						</div><!-- #END .fw-col-sm-12  --> 
					</div><!-- #END .fw-row -->
				</div><!-- #END .fw-container --> 
			</section>
		</div><!-- #END .fw-page-builder-content -->  
	</div><!-- #END #POST --> 
	<!-- BLOG SHORTCODES -->
	<div class="container">
		<?php if ( !empty($atts['title']) ): ?>
			<h2 class="with-breaker animate-me fadeInUp">
	  			<?php echo esc_html($atts['title']); ?><span><?php echo esc_html($atts['subtitle']); ?></span>
			</h2>
		<?php endif; ?>
	</div>
	<div id="blog-container" class="with-separation-bottom with-separation-top animate-me fadeIn">
		<div class="flexslider">
			<ul class="slides">
				<?php  query_posts(array('post_type' => 'post', 'showposts' => $atts['number'] , 'orderby' =>'date', 'order' => 'DESC', 'posts_per_page'=>-1 )); ?>
			  	<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
			  			<!-- POST -->
			  			<li class="blog-post">
			  				<?php if ( has_post_thumbnail() ) : ?>
				  				<!-- THUMBNAIL IMAGE -->
				  				<div class="blog-thumbnail">
					  				<a href="<?php the_permalink(); ?>">
						  				<?php the_post_thumbnail(); ?>
					  				</a>
					  			</div>
					  		<?php else : ?>
					  			<div class="blog-thumbnail">
					  				<a href="<?php the_permalink(); ?>">
						  				<i class="fa fa-newspaper-o"></i>
					  				</a>
					  			</div>
					  		<?php endif; ?>
				  			<!-- POST CONTENT -->
								<div class="blog-content">
				  				<a href="<?php the_permalink(); ?>" class="blog-post-title"><h2><?php the_title(); ?></h2></a>
				  				<ul class="post-metadatas list-inline">
					  				<li><i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?></li>
					  				<li><i class="fa fa-comments-o"></i> <a href="<?php the_permalink(); ?>"><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></a></li>
					  			</ul>
				  				<p class="blog-sum-up">
				  					<?php echo substr(get_the_excerpt(), 0,130); ?>
				  				</p>
				  				<div class="blog-button">
					  				<a href="<?php the_permalink(); ?>" class="btn btn-default"><i class="fa fa-arrow-right"></i> <?php _e("Read More","starry"); ?></a>
					  			</div>
				  			</div>
			  			</li>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>
	</div>
	<?php if ( !empty($atts['buttonlink']) ): ?>
		<div class="blog-button center animate-me zoomIn">
			<a href="<?php echo esc_url($atts['buttonlink']); ?>" class="btn btn-default"><i class="fa fa-comments-o"></i> <?php echo esc_html($atts['buttontitle']); ?></a>
		</div>
	<?php endif; ?>
	<div class="container">
		<div class="fw-page-builder-content">
			<section>
				<div class="fw-container">
					<div class="fw-row">
						<div class="fw-col-sm-12">
