<?php
/**
 * The template for displaying all single posts.
 *
 * @package jtwebfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single-jtw_work' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>