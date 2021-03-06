<?php
/**
 * The template for displaying all single posts.
 *
 * @package jtwebfolio
 */

get_header(); ?>

	<div id="primary" class="content-area single-post">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>
			
			<nav class="navigation post-navigation" role="navigation">
				<div class="nav-links">
					<?php previous_post_link('%link', '&laquo; Previous post' ); ?>
					<?php next_post_link('%link', 'Next post &raquo;' ); ?>
				</div><!-- .nav-links -->
			</nav>
			
			<div class="comments">
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>