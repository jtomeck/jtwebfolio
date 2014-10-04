<?php
/**
 * The template used for displaying page content in page.php
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

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
	
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<?php if ( $add_skills ) : ?>
	<div class="add-skills">
		<div class="add-skills-header">
			<h3 class="add-skills-title"><?php echo $add_skills_heading; ?></h3>
			<p class="add-skills-text"><?php echo $add_skills_description; ?></p>
		</div>
		<div class="add-skills-content">
			<ul class="skills">
				<?php foreach ( $add_skills as $skill ) : ?>
					<?php $skill_icon = $skill['jtw_skill_icon']; ?>
					<?php $skill_url = $skill['jtw_skill_url']; ?>
					<li class="skill">
						<a href="<?php echo $skill_url; ?>" class="full" target="_blank"></a>
						<div class="skill-icon">
							<img src="<?php echo $skill_icon; ?>" alt="">
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div><!-- .additional-skills -->
	<?php endif; ?>

</article><!-- #post-## -->
