<?php
/**
 * The template for displaying the footer
 */
?>
		<!-- START FOOTER -->
	  	<footer id="footer" class="with-separation-top">

	  		<?php
	  		// IF YOU WANT TO DISPLAY WIDGET AREA IN THE FOOTER
			$showfooterwidgets = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('footerwidgets') : '';
			if(  $showfooterwidgets == "yes" ) :
			?>
		  		<?php get_sidebar( 'footer' ); ?>
			<?php endif; ?>

			<?php
			// IF YOU WANT TO DISPALY THE COPYRIGHTS
			$showcopyrights = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('footercopyrightdisplay') : '';
			if(  $showcopyrights == "yes" ) :
			?>
			  	<div id="copyright" class="animate-me fadeInUp">
			  		<div class="container">
			  			<?php
			  			// GET COPYRIGHT CONTENTS
						$copyrightscontent = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('footercopyrightcontent') : '';
						?>
				  		<p><?php echo $copyrightscontent; ?></p>

				  		<?php 
				  		// COPYRIGHT MENU
				  		if ( has_nav_menu('copyright') ) {
					  		$settings_footer = array(
								'theme_location'  => 'copyright',
								'container'       => '',
								'items_wrap'      => '<ul id="footer-navigation" class="%2$s">%3$s</ul>',
							);
							wp_nav_menu( $settings_footer ); 
						}
						?>
			  		</div>
			  	</div>
			<?php endif; ?>
	  	</footer>
	  	<!-- END FOOTER -->
	  	
	  	<?php
	  	// IF YOU WANT TO DISPLAY SCROLL BUTTON
		$scrolltop = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('scrolltop') : '';
		if(  $scrolltop == "yes" ) :
		?>
			<!-- SCROLL TOP -->
			<a href="#header" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
		<?php endif; ?>
  	</div>

    <!-- SCRIPTS -->
    <?php wp_footer(); ?>
  </body>
  <!-- END BODY -->
</html>