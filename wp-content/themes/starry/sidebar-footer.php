<?php
/**
 * The Footer Sidebar
 */

if ( ! is_active_sidebar( 'widgets' ) ) {
	return;
}
?>

<aside id="widgets" class="container">
	<div class="row">
		<?php dynamic_sidebar( 'widgets' ); ?>
	</div>
</aside>