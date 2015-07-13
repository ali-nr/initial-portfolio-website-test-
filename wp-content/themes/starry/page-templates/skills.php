<?php
/**
 * Template Name: Skills
 */

get_header(); 
// Start the Loop.
while ( have_posts() ) : the_post(); ?>
		<?php 
		//GET THEME HEADER CONTENT
		starry_header(); ?> 		
  	</header>
  	<!-- END HEADER -->

	<!-- START MAIN CONTAINER -->
	<div class="main-container">
		<div class="container">
			<!-- SKILLS -->
			<h2 class="with-breaker animate-me fadeInUp">
				<?php echo get_the_title(); ?>
				<?php // GET THE PAGE TITLE
				$subtitle = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'subtitle') : '';
				if( !empty( $subtitle ) ) : ?>
					<span><?php echo $subtitle; ?></span>
				<?php endif; ?>
			</h2>
			<?php
			//THE BREADCRUMB
			if( !is_front_page() && function_exists('fw_ext_breadcrumbs') && is_page() ) {
				fw_ext_breadcrumbs();
			}
			?>
			<?php
			// THE CONTENT
			the_content();
			//DISPLAY SKILLS
			?>
			<div class="tabs-container">
  				<ul class="nav nav-tabs" role="tablist" id="SkillsTab">
  					<?php $skillsorder = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('skillsorder') : ''; ?>
  					<?php  query_posts(array('post_type' => 'skills', 'posts_per_page'=>-1,'orderby' =>'date', 'order' => $skillsorder)); ?>
				  	<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $theicon = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'skillicon') : ''; ?>
							<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
								<li class="active">
							<?php else : ?>
								<li>
							<?php endif; ?>
									<a href="#skill-<?php echo the_ID(); ?>" role="tab" data-toggle="tab"><i class="<?php echo $theicon; ?>"></i> <?php the_title(); ?></a>
								</li>
						<?php endwhile; ?>
					<?php endif; ?>
			  		<?php wp_reset_query(); ?>
				</ul>

				<div class="tab-content">
					<?php $skillsorder = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('skillsorder') : ''; ?>
					<?php query_posts(array('post_type' => 'skills', 'posts_per_page'=>-1, 'orderby' =>'date', 'order' => $skillsorder)); ?>
				  	<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
								<div class="active tab-pane bounceInRight" id="skill-<?php the_ID(); ?>">
							<?php else : ?>
								<div class="tab-pane bounceInRight" id="skill-<?php the_ID(); ?>">
							<?php endif; ?>
								<?php $theicon = ( function_exists( 'fw_get_db_post_option' ) ) ? fw_get_db_post_option(get_the_ID(), 'skillicon') : ''; ?>
								<h2><i class="<?php echo $theicon; ?>"></i> <?php the_title(); ?></h2>
					  			<?php the_content(); ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
			  		<?php wp_reset_query(); ?>
				</div>
	  		</div>
		</div>
		<?php
		//GET EXTRA FOOTER
		starry_extrafooter();
		?>
	</div>
<?php 
endwhile;
get_footer();
