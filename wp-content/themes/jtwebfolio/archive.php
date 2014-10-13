<?php
/**
 * Template For displaying archives
 *
 * @package jtwebfolio
 */

//Featured Image
$thumb_id = get_post_thumbnail_id( 76 );

$page_icon = $cfs->get('jtw_page_icon', 76);
$page_tagline = $cfs->get('jtw_page_tagline', 76);

get_header(); ?>

	<section id="primary" class="content-area">
		<article id="post-<?php the_ID(); ?>" <?php post_class("blog-archive"); ?>>
			<header class="entry-header">
				<div class="entry-info">
					<div class="entry-icon">
						<img src="<?php echo $page_icon; ?>" alt="">
					</div>
					<div class="entry-tagline">
						<h2 class="entry-title">Blog Archives</h2>
					</div>
				</div><!-- .entry-info -->
				<?php if ( $thumb_id ) : ?>
		            <div class="entry-image">
		                <?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true); ?>
		                <img class="entry-featured-image" src="<?php echo $thumb_url_array[0]; ?>" alt="Banner Text">
		            </div><!-- .entry-image -->
		        <?php endif; ?>
			</header><!-- .entry-header -->
			<?php if ( have_posts() ) : ?>
        	<div class="entry-content">
	            <?php while ( have_posts() ) : the_post(); ?>

	                <?php get_template_part( 'content', 'archive' ); ?>

	            <?php endwhile; ?>
	            <?php wp_reset_postdata(); ?>

	        </div>
	        <?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			<?php get_sidebar(); ?>
	    </article>
		
	</section><!-- #primary -->

<?php get_footer(); ?>
