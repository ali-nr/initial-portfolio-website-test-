<?php if (!defined('FW')) die( 'Forbidden' ); ?>
	
	<!-- SKILLS SHORTCODES -->
	<div class="container">
		<?php if ( !empty($atts['title']) ): ?>
			<h2 class="with-breaker animate-me fadeInUp">
	  			<?php echo esc_html($atts['title']); ?><span><?php echo esc_html($atts['subtitle']); ?></span>
			</h2>
		<?php endif; ?>
		<table id="skills-container" class="skills">
			<?php
			$html_begin_row = '<tr class="skills-row">'."\n";
			$html_end_row = '</tr>'."\n";
			// THE WORDPRESS QUERY
			$skillsorder = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('skillsorder') : ''; 
			if ( !empty($atts['category']) ):
				query_posts(array('skills-category' => $atts['category'], 'post_type' => 'skills', 'posts_per_page'=>-1, 'orderby' =>'date', 'order' => $skillsorder)); 
			else :
				query_posts(array('post_type' => 'skills', 'posts_per_page'=>-1, 'orderby' =>'date', 'order' => $skillsorder ));
			endif;
			$h = 0;
			if (have_posts()):
				while (have_posts()):
					the_post();
					
					if ($h > 0 && !is_float($h/3)) print $html_end_row;
					if (!is_float($h/3)) print $html_begin_row;
						$theicon = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'skillicon') : ''; 
						$skillmessage = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'skillmessage') : ''; 
					 	echo'<td class="skill animate-me zoomIn">';
				  			echo'<h4><i class="'.$theicon.'"></i>'.get_the_title().'</h4>';
				  			echo'<p>'.esc_html($skillmessage).'</p>';
			  			echo'</td>';

					$h++;
			 
			    endwhile;
			endif;
			if ($h > 0) echo $html_end_row; ?>
			<?php wp_reset_query(); ?>
		</table>
	<?php if ( !empty($atts['buttonlink']) ): ?>
		<div class="skill-button center animate-me fadeInUp">
			<a href="<?php echo esc_url($atts['buttonlink']); ?>" class="btn btn-default"><i class="fa fa-trophy"></i> <?php echo esc_html($atts['buttontitle']); ?></a>
		</div>
	<?php endif; ?>
	</div>
