<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<hr>

<?php if ( have_comments() ) : ?>

		<h2 class="with-breaker animate-me fadeInUp">
			<?php
				printf( _n( '<i class="fa fa-comment"></i> One comment', '<i class="fa fa-comments"></i> %1$s comments', get_comments_number(), 'starry' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2>
	<!-- COMMENTS CONTAINER -->
	<div id="comments-container" class="with-separation-bottom with-separation-top animate-me fadeIn">
		<div class="container main-container">
			<ol class="comment-list">
				<?php
					wp_list_comments( array(
						'style'      => 'ol',
						'reply_text'  => '<i class="fa fa-reply"></i> Reply',
						'short_ping' => true,
						'avatar_size'=> 75,
					) );
				?>
			</ol><!-- .comment-list -->
		</div>
	</div>

	<div class="container">
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'starry' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '<i class="fa fa-chevron-left"></i> Older Comments', 'starry' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <i class="fa fa-chevron-right"></i>', 'starry' ) ); ?></div>
			</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php _e( 'Comments are closed.', 'starry' ); ?></p>
		<?php endif; ?>
	</div>

<?php endif; // have_comments() ?>

<div class="container">
	<?php 
	$args = array(
	  'id_form'           => 'comment-form',
	  'id_submit'         => 'submit',
	  'title_reply'       => __( 'Leave a Reply', 'starry' ),
	  'title_reply_to'    => __( 'Leave a Reply to %s', 'starry' ),
	  'cancel_reply_link' => __( 'Cancel Reply', 'starry' ),
	  'label_submit'      => __( 'Post Comment', 'starry'),
	  'comment_notes_before' => '',
	  'comment_notes_after' => '',
	); ?>

	<?php 
	ob_start();
	comment_form($args);
	echo str_replace('class="comment-form"','class="comment-form form-horizontal"',ob_get_clean());
	?>
</div>
