<?php
/**
 * The template used for displaying blog archives
 *
 * @package jtwebfolio
 */

$terms = get_the_terms( get_the_ID() , 'category' );

?>

<div class="post post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php the_permalink(); ?>" class="full"></a>
	<div class="wrapper">
		<div class="meta">
			<div class="posted-on">
				<span class="posted">posted:</span>
				<span class="month"><?php the_time('M'); ?></span>
				<span class="day"><?php the_time('d'); ?></span>
			</div>
		</div>
		<div class="post-content">
			<h4 class="post-title"><?php the_title(); ?></h4>
			<?php if ($terms) : ?>
			<ul class="post-tags">
				<?php foreach ( $terms as $term ) : ?>
					<li class="tag"><?php echo $term->name; ?></li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>
</div>