<?php if (!defined('FW')) die( 'Forbidden' ); ?>
	
						</div><!-- #END .fw-col-sm-12  --> 
					</div><!-- #END .fw-row -->
				</div><!-- #END .fw-container --> 
			</section>
		</div><!-- #END .fw-page-builder-content -->  
	</div><!-- #END #POST --> 
	<!-- CUSTOM CONTAINER -->
	<section class="custom-section-container <?php echo starry_clean($atts['contenttitle']); ?> with-separation-bottom with-separation-top"  style="background-color: <?php echo esc_html($atts['color']);?>"> 
		<?php 
		// IF THERE IS SOME CONTENT EXCEPT THE BUTTONS
		if ( !empty($atts['contenttitle']) && !empty($atts['customcontainercontent']) ): ?>
			<?php if ( !empty($atts['buttonlink2']) && !empty($atts['buttoncontent2']) ): ?>
				<div class="container">
			<?php elseif( empty($atts['buttonlink2']) && empty($atts['buttoncontent2']) && empty($atts['buttonlink1']) && empty($atts['buttoncontent1']) ): ?>
				<div class="container only-content">
			<?php else: ?>
				<div class="container only-one-buttons">
			<?php endif; ?>
		<?php 
		// NO CONTENT ONLY BUTTONS
		else: ?>
			<?php if ( !empty($atts['buttonlink2']) && !empty($atts['buttoncontent2']) ): ?>
				<div class="container only-buttons">
			<?php else: ?>
				<div class="container only-one-buttons only-buttons">
			<?php endif; ?>
		<?php endif; ?>
			<?php
			$icon = preg_replace('/(^|\s)fa($|\s)/', '\1\2', $atts['icon']); // remove "fa" part
			?>
			<div class="container-icon <?php echo $icon; ?>">
				<style type="text/css" scoped>
			    		a.btn.btn-default:hover{ color: <?php echo esc_html($atts['color']); ?>;}
			    </style>
			    <?php if(!empty($atts['contenttitle'])): ?> 
			  		<div class="custom-section-text">
				  		<h2 class="animate-me fadeInLeft"><?php echo esc_html($atts['contenttitle']); ?></h2>
				  		<?php if(!empty($atts['customcontainercontent'])): ?>
				  			<p class="animate-me fadeInLeft"><?php echo esc_html($atts['customcontainercontent']); ?></p>
				  		<?php endif; ?>
			  		</div>
			  	<?php endif; ?>
		  		<?php if ( !empty($atts['buttonlink1']) OR !empty($atts['buttonlink2']) ): ?>
			  		<div class="custom-section-buttons">
				  		<a href="<?php echo esc_url($atts['buttonlink1']); ?>" class="btn btn-default animate-me fadeInRight"><i class="<?php echo esc_html($atts['buttonicon1']); ?>"></i> <?php echo $atts['buttoncontent1']; ?></a>
				  		<?php if ( !empty($atts['buttonlink2']) ): ?>
				  			<a href="<?php echo esc_url($atts['buttonlink2']); ?>" class="btn btn-default animate-me fadeInRight"><i class="<?php echo esc_html($atts['buttonicon2']); ?>"></i> <?php echo $atts['buttoncontent2']; ?></a>
				  		<?php endif; ?>
			  		</div>
		  		<?php endif; ?>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="fw-page-builder-content">
			<section>
				<div class="fw-container">
					<div class="fw-row">
						<div class="fw-col-sm-12">
