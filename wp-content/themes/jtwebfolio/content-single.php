<?php
/**
 * @package jtwebfolio
 */

//Featured Image
$thumb_id = get_post_thumbnail_id( 76 );

$page_icon = $cfs->get('jtw_page_icon', 76);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-info">
			<div class="entry-icon">
				<img src="<?php echo $page_icon; ?>" alt="">
			</div>
			<div class="entry-tagline">
				<h2 class="entry-title"><?php the_title(); ?></h2>
			</div>
		</div><!-- .entry-info -->
		<?php if ( $thumb_id ) : ?>
            <div class="entry-image">
                <?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true); ?>
                <img class="entry-featured-image" src="<?php echo $thumb_url_array[0]; ?>" alt="Banner Text">
            </div><!-- .entry-image -->
        <?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'jtwebfolio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
