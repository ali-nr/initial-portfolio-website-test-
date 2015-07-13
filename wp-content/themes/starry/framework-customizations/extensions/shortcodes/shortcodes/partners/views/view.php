<?php if (!defined('FW')) die( 'Forbidden' ); ?>
	
					
	<!-- BLOG SHORTCODES -->
	<div class="container">
		<?php if ( !empty($atts['title']) ): ?>
			<h2 class="with-breaker animate-me fadeInUp">
	  			<?php echo $atts['title']; ?><span><?php echo $atts['subtitle']; ?></span>
			</h2>
		<?php endif; ?>
		<div id="partners-slider" class="flexslider">
  			<ul class="slides">
  				<?php 
				$html_begin_slider = '<li class="partners-slide">'."\n";
				$html_end_slider = '</li>'."\n";
				
				query_posts(array('post_type' => 'partners', 'posts_per_page'=>-1, 'orderby' =>'date', 'order' => 'ASC' ));
				$h = 0;
				if (have_posts()):
					while (have_posts()):
						the_post();
						
						if(!empty($atts['layout'])):
							if($atts['layout'] == "value-1"):
								$per_row = 2;
							else: 
								$per_row = 1;
							endif;
						else: 
							$per_row = 1;
						endif;

						if ($h > 0 && !is_float($h/$per_row)) print $html_end_slider;
						if (!is_float($h/$per_row)) print $html_begin_slider;
							$image_id = get_post_thumbnail_id();  
					        $image_attributes = wp_get_attachment_image_src($image_id, 'full');
					        $partnerlink = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'link') : '';
							if( !empty( $partnerlink ) ) :
								print '<a href="'.esc_url($partnerlink).'" target="_blank" class="apartner">';
								print '<img src="'.esc_url($image_attributes[0]).'" alt="'.esc_attr(get_the_title()).'">';
								print '</a>';
							else : 
								print '<div class="apartner">';
								print '<img src="'.esc_url($image_attributes[0]).'" alt="'.esc_attr(get_the_title()).'">';
								print '</div>';
							endif; 
						 
						$h++;
				 
				    endwhile;
				endif;
				if ($h > 0) echo $html_end_slider; ?>
				<?php wp_reset_query(); ?>
  			</ul>
	  	</div>
	</div>
	

