<?php if (!defined('FW')) die( 'Forbidden' ); ?>
	
						</div><!-- #END .fw-col-sm-12  --> 
					</div><!-- #END .fw-row -->
				</div><!-- #END .fw-container --> 
			</section>
		</div><!-- #END .fw-page-builder-content -->  
	</div><!-- #END #POST --> 
	<!-- PARALLAX CONTAINER -->
	<section class="milestones-container with-separation-bottom with-separation-top"> 
		<div class="milestones-boxes">
			<?php
			if(!empty($atts['milestonebox'])): 
				$milestonebox = $atts['milestonebox'];
	  			foreach($milestonebox as $value) {
	  				echo '<div class="milestone-box animate-me zoomIn '.$value['milestonebox_icon'].' '.starry_clean($value['milestonebox_title']).'" >';
	  					echo '<style type = "text/css" scoped>';
							    echo '.'.starry_clean($value['milestonebox_title']).'{background-color: '.$value['milestonebox_bg'].';} ';
						    echo'</style>';
						echo '<div class="milestone-number">';
							echo '<h1 class="timer" data-from="0" data-to="'.esc_html($value['milestonebox_number']).'"></h1>';
							echo '<h1><i class="fa '.$value['milestonebox_icon'].'"></i></h1>';
						echo '</div>';
	  					if (!empty($value['milestonebox_title'])):
							echo '<h2>'.esc_html($value['milestonebox_title']).'</h2>';
						endif;
						if (!empty($value['milestonebox_content'])):
							echo '<p>'.esc_html($value['milestonebox_content']).'</p>';
						endif;
					echo '</div>';
	  			} 
	  		endif; ?>
  		</div>
	</section>
	<div class="container">
		<div class="fw-page-builder-content">
			<section>
				<div class="fw-container">
					<div class="fw-row">
						<div class="fw-col-sm-12">
