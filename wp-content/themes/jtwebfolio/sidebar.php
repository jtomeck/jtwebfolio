<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package jtwebfolio
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area sidebar" role="complementary">
	<?php dynamic_sidebar( 'blog_sidebar' ); ?>
</div><!-- #secondary -->
