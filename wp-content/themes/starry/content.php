<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */
?>
<?php if (!is_single()): ?>
	<!-- BLOG POST -->
	<li id="post-<?php the_ID(); ?>" <?php post_class("blog-post"); ?>>
		<?php if ( has_post_thumbnail()) : ?>
			<!-- THUMBNAIL IMAGE -->
			<div class="blog-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
		<?php endif; ?>
		<!-- POST CONTENT -->
		<div class="blog-content">
			<?php the_title( '<h2 class="blog-post-title" ><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
  			<ul class="post-metadatas list-inline">
  				<li><i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?></li>
  				<li><i class="fa fa-comments-o"></i> <a href="<?php the_permalink(); ?>#respond"><?php comments_number( '0', '1', '%' ); ?></a></li>
		    	<?php if(get_the_category_list() != ""){
		    		echo'<li><i class="fa fa-thumb-tack"></i> '. get_the_category_list( __( ', ', 'starry' ) ) .'</li>';
		    	}
		    	if(get_the_tag_list() != ""){
		    		echo '<li class="meta-tags"><i class="fa fa-tags"></i> '. get_the_tag_list( '', __( ', ', 'starry' ) ) .'</li>';
				} ?>
  			</ul>
  			<p class="blog-sum-up">
  				<?php echo substr(get_the_excerpt(), 0,350) .'...'; ?>
  			</p>
  			<div class="blog-button">
  				<a href="<?php the_permalink(); ?>" class="btn btn-default"><i class="fa fa-arrow-right"></i> <?php _e('Read More','starry'); ?></a>
  			</div>
		</div>
	</li>
<?php 
// IF IT IS SINGLE PAGE
else : ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class("container"); ?>>
		<div class="row single-post">
			<h2 class="with-breaker animate-me fadeInUp"><?php the_title(); ?></h2>
			<?php
			// GET DATA 
			$bloglayout = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('bloglayout') : '';
			?>
			<div class="col-lg-<?php echo ($bloglayout == "horizontal") ? "6" : "12"; ?>">
				<div class="flexslider image-slider">
					<!--SLIDER -->
					<ul class="slides">
						<?php
                        $image_id = get_post_thumbnail_id();  
                        $image_url = wp_get_attachment_image_src($image_id,'full');  
                        $image_url = $image_url[0];
                        ?>
						<li>
							<a href="<?php echo esc_url($image_url); ?>" class="fancybox"><?php echo get_the_post_thumbnail($post->ID); ?></a>
						</li>
					</ul>
				</div>
				<!--POST DETAILS -->
	  			<ul class="post-metadatas center">
	  				<li><i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?></li>
	  				<li><i class="fa fa-comments-o"></i> <a href="<?php get_permalink(); ?>"><?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></a></li>
			    	<?php if(get_the_category_list() != ""){
			    		echo'<li><i class="fa fa-thumb-tack"></i> '. get_the_category_list( __( ', ', 'starry' ) ) .'</li>';
			    	}
			    	if(get_the_tag_list() != ""){
			    		echo '<li><i class="fa fa-tags"></i> '. get_the_tag_list( '', __( ', ', 'starry' ) ) .'</li>';
					} ?>
	  			</ul>
	  			<hr>

	  			<?php 
				$blogsharing = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('blogsharing') : '';
				if(  $blogsharing == "show" ) : ?>
						<!--SHARE BUTTONS -->
		  			<ul class="share-buttons animate-me fadeInUp">
		  				<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436'); return false;}</script>
		  				<li><a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank" class="btn btn-default button-facebook" ><i class="fa fa-facebook"></i> <?php _e('Share it','starry'); ?></a></li>
		  				<li><a href="http://twitter.com/home/?status=<?php the_title(); ?>" target="_blank" class="btn btn-default button-twitter"><i class="fa fa-twitter"></i> <?php _e('Tweet it','starry'); ?></a></li>
		  			</ul>
		  		<?php endif; ?>
			</div>
			<!--POST CONTENT -->
			<?php
			// GET DATA 
			$bloglayout = ( function_exists( 'fw_get_db_settings_option' ) ) ? fw_get_db_settings_option('bloglayout') : '';
			?>
			<div class="col-lg-<?php echo ($bloglayout == "horizontal") ? "6" : "12"; ?> blog-content">
  				<?php the_content(); ?>
			</div>
		</div>
	</div>
<?php endif; ?>
