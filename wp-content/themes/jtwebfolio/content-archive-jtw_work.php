<?php
/**
 * The template used for displaying work archives
 *
 * @package jtwebfolio
 */

$thumb_id = get_post_thumbnail_id( $post->ID );
$terms = get_the_terms( get_the_ID() , 'jtw_skills' );

?>

<div class="project">
	<a class="full" href="<?php the_permalink(); ?>"></a>
	<div class="project-image">
		<?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true); ?>
		<img class="project-featured-image" src="<?php echo $thumb_url_array[0]; ?>" alt="Banner Text">
	</div>
	<div class="project-content">
		<h5 class="project-title"><?php the_title(); ?></h5>
		<?php if ($terms) : ?>
		<ul class="project-tags">
			<?php foreach ( $terms as $term ) : ?>
				<li class="tag"><?php echo $term->name; ?></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div>
	<div class="hover"></div>
</div>