<?php
/**
 * The template used for displaying blog archives
 *
 * @package jtwebfolio
 */



?>

<div class="post">
	<div class="post-content">
		<h5 class="post-title"><?php the_title(); ?></h5>
		<?php if ($terms) : ?>
		<ul class="post-tags">
			<?php foreach ( $terms as $term ) : ?>
				<li class="tag"><?php echo $term->name; ?></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
		<p class="post-content"><?php the_content(); ?></p>
	</div>
</div>