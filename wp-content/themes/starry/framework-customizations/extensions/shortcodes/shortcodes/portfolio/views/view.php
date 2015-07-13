<?php if (!defined('FW')) die( 'Forbidden' ); ?>
	
						</div><!-- #END .fw-col-sm-12  --> 
					</div><!-- #END .fw-row -->
				</div><!-- #END .fw-container --> 
			</section>
		</div><!-- #END .fw-page-builder-content -->  
	</div><!-- #END #POST --> 
	<!--PORTFOLIO -->
	<div class="container">
		<?php if ( !empty($atts['title']) ): ?>
			<h2 class="with-breaker animate-me fadeInUp">
	  			<?php echo esc_html($atts['title']); ?><span><?php echo esc_html($atts['subtitle']); ?></span>
			</h2>
		<?php endif; ?>
	</div>
	<div class="portfolio-container with-separation-bottom with-separation-top">
		
		<?php $portfolioorder = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('portfolioorder') : ''; ?>
		<?php if ( !empty($atts['category']) ): ?>
			<?php query_posts(array('portfolio-category' => $atts['category'], 'post_type' => 'portfolio', 'orderby' =>'date', 'order' => $portfolioorder, 'posts_per_page'=>esc_html($atts['number']) )); ?>
		<?php else : ?>
			<?php query_posts(array('post_type' => 'portfolio', 'orderby' =>'date', 'order' => $portfolioorder, 'posts_per_page'=>esc_html($atts['number']) )); ?>
		<?php endif; ?>
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
	<?php if ( !empty($atts['buttonlink']) ): ?>
		<div class="portfolio-button center animate-me zoomIn">
			<a href="<?php echo esc_url($atts['buttonlink']); ?>" class="btn btn-default"><i class="fa fa-suitcase"></i> <?php echo esc_html($atts['buttontitle']); ?></a>
		</div>
	<?php endif; ?>
	<div class="container">
		<div class="fw-page-builder-content">
			<section>
				<div class="fw-container">
					<div class="fw-row">
						<div class="fw-col-sm-12">
