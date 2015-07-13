<?php if (!defined('FW')) die( 'Forbidden' );
 ?>
	
						</div><!-- #END .fw-col-sm-12  --> 
					</div><!-- #END .fw-row -->
				</div><!-- #END .fw-container --> 
			</section>
		</div><!-- #END .fw-page-builder-content -->  
	</div><!-- #END #POST --> 
	<!-- PARALLAX CONTAINER -->
	<?php 
	
	//IF PARALLAX IS ENABLED 
	if(!empty($atts['parallaxposition'])) :
		if($atts['parallaxposition'] == "yes") : 
			$bg_attached = "background-attachment: fixed;";
			$parallax_class="parallax";
		endif;
	else: 
		$bg_attached = "background-attachment: scroll;";
		$parallax_class = "no-parallax";
	endif;
	
	// IF HAS VIDEO LINK
	$video_class = (!empty($atts['parallaxvideo'])) ? "has-video" : "no-video";
	
	// SECTION CLASSES
	$the_classes = "parallax-section-container with-separation-bottom with-separation-top";
	
	// CUSTOM CSS FROM OPTIONS 
	if (!empty($atts['parallaximage'])): 
		$custom_css = 'background-image: url('. $atts['parallaximage']['url'] .'); '.$bg_attached;
	else : 
		$custom_css = "";
	endif;
	
	
	echo'<section class="'.$the_classes.' '.$parallax_class.' '.$video_class.'" style="'.$custom_css.'" >'; ?>
		<div class="container">
			<?php if (!empty($atts['contenttitle'])): ?>
				<h2 class="animate-me fadeInLeft"><?php echo $atts['contenttitle']; ?></h2>
			<?php endif; ?>
			<?php if(!empty($atts['parallaxcontainercontent'])): ?>
	  			<p class="animate-me fadeInRight"><?php echo esc_html($atts['parallaxcontainercontent']); ?></p>
	  		<?php endif; ?>
	  		<?php if ( !empty($atts['buttoncontent1']) ): ?>
			  	<a href="<?php echo esc_url($atts['buttonlink1']); ?>" class="btn btn-default animate-me fadeInRight"><i class="<?php echo esc_html($atts['buttonicon1']); ?>"></i> <?php echo $atts['buttoncontent1']; ?></a>
	  		<?php endif; ?>
		</div>
	  		
  		<?php
			if (!empty($atts['parallaxvideo'])) :
				echo '<div class="bg-video">'; 
					echo'<iframe width="420" height="345" src="'.$atts['parallaxvideo'].'?autoplay=1" frameborder="0" allowfullscreen></iframe>';
				echo '</div>';
			endif;
  		?>
	</section>
	<div class="container">
		<div class="fw-page-builder-content">
			<section>
				<div class="fw-container">
					<div class="fw-row">
						<div class="fw-col-sm-12">
