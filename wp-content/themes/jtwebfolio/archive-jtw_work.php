<?php
/**
 * Template Name: Work Archive
 *
 * @package jtwebfolio
 */

//Featured Image
$thumb_id = get_post_thumbnail_id( $post->ID );

$page_icon = $cfs->get('jtw_page_icon');
$page_tagline = $cfs->get('jtw_page_tagline');

$add_skills_heading = $cfs->get('jtw_add_skills_heading');
$add_skills_description = $cfs->get('jtw_add_skills_description');
$add_skills = $cfs->get('jtw_add_skills');

$work_args = array(
    'posts_per_page' => -1,
    'post_type' => 'jtw_work'
);
$work_query = new WP_Query( $work_args );

get_header(); ?>

	<section id="primary" class="content-area">
		<article id="post-<?php the_ID(); ?>" <?php post_class("work-archive"); ?>>
			<header class="entry-header">
				<div class="entry-info">
					<div class="entry-icon">
						<img src="<?php echo $page_icon; ?>" alt="">
					</div>
					<div class="entry-tagline">
						<h2 class="entry-title"><?php echo $page_tagline; ?></h2>
					</div>
				</div><!-- .entry-info -->
				<?php if ( $thumb_id ) : ?>
		            <div class="entry-image">
		                <?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true); ?>
		                <img class="entry-featured-image" src="<?php echo $thumb_url_array[0]; ?>" alt="Banner Text">
		            </div><!-- .entry-image -->
		        <?php endif; ?>
			</header><!-- .entry-header -->
			<?php if ( $work_query->have_posts() ) : ?>
            	<div class="entry-content">
		            <?php while ( $work_query->have_posts() ) : $work_query->the_post(); ?>

		                <?php get_template_part( 'content', 'archive-jtw_work' ); ?>

		            <?php endwhile; ?>
		            <?php wp_reset_postdata(); ?>
		        </div>
	        <?php endif; ?>
	    </article>

	</section><!-- #primary -->

<?php get_footer(); ?>
