<?php if (!defined('FW')) die( 'Forbidden' ); ?>
	
	
	<div id="team-container" class="container">
	<!-- TEAM SHORTCODE -->
		<?php 
		$html_begin_slider = '<div  class="row">'."\n";
		$html_end_slider = '</div>'."\n";
		
		// THE WORDPRESS QUERY
		if ( !empty($atts['category']) ):
			query_posts(array('team-category' => $atts['category'], 'post_type' => 'team', 'posts_per_page'=>-1, 'order' => 'ASC', 'orderby' =>'date')); 
		else :
			query_posts(array('post_type' => 'team', 'posts_per_page'=>-1, 'order' => 'ASC', 'orderby' =>'date')); 
		endif;
		$h = 0;

		if (have_posts()):
			while (have_posts()): 
				the_post();

				if ($h > 0 && !is_float($h/4)) print $html_end_slider;
				if (!is_float($h/4)) print $html_begin_slider; 
				print '<div class="col-md-3 team-single">';
					 
					$image_id = get_post_thumbnail_id();  
					$image_attributes_team = wp_get_attachment_image_src($image_id, 'full');
					
					print '<img src="'. esc_url($image_attributes_team[0]) .'" alt="'. get_the_title() .'" class="animate-me bounceIn">';
					print '<h3 class="center">'. get_the_title() .'</h3>';
					print the_excerpt();
					print '<ul class="social-list">';
						$teamoptions = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'teamsocial') : '';
			  			foreach($teamoptions as $valueteam) {
			  				print '<li><a href="'.esc_url($valueteam['teamsociallink']).'"><i class="'.$valueteam['teamsocialicon'].'"></i></a></li>';
						}
					print '</ul>';
				print '</div>';
				
			$h++;
			endwhile;
		endif;
		if ($h > 0) echo $html_end_slider; 
		wp_reset_query();?>
	</div>

