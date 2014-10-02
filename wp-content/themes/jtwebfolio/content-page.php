<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package jtwebfolio
 */

//Featured Image
$thumb_id = get_post_thumbnail_id( $post->ID );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( $thumb_id ) : ?>
            <div class="entry-image">
                <?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true); ?>
                <img class="entry-featured-image" src="<?php echo $thumb_url_array[0]; ?>" alt="Banner Text">
            </div><!-- .entry-image -->
        <?php endif; ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
