<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>
		<?php 
		//GET THEME HEADER CONTENT
		starry_header(); ?>
  	</header>
  	<!-- END HEADER -->

	<!-- START MAIN CONTAINER -->
	<div class="main-container">
		<div <?php post_class('container'); ?>>
			<!-- 404 -->
			<h2 class="with-breaker animate-me fadeInUp">
				<?php _e( '404 Error', 'starry' ); ?><span><?php _e("Not found...","starry"); ?></span></h3>
			</h2>
			<div class="center animate-me bounceIn">
				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'starry' ); ?></p>
				<?php 
				add_filter( 'get_search_form', '_starry_search_form2' );
				get_search_form();
				remove_filter( 'get_search_form', '_starry_search_form2' ); ?>
			</div>
		</div>
		<?php
		//GET EXTRA FOOTER
		starry_extrafooter();
		?>
	</div>
	<!-- END MAIN CONTAINER -->

<?php
get_footer();