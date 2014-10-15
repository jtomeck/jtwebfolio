<?php
/**
 * Template Name: Home Template
 *
 * @package CMH
 */

$main_heading = $cfs->get('jtw_main_heading');
$main_text = $cfs->get('jtw_main_text');
$main_skills = $cfs->get('jtw_skills');

$work_args = array(
    'posts_per_page' => 3,
    'post_type' => 'jtw_work'
);
$work_query = new WP_Query( $work_args );

$posts_args = array(
    'posts_per_page' => 5,
    'post_type' => 'post'
);
$posts_query = new WP_Query( $posts_args );

get_header(); ?>

    <section class="main-banner">
        <div class="wrapper">
            <h1 class="main-title"><?php echo $main_heading; ?></h1>
            <p class="main-text"><?php echo $main_text; ?></p>
        </div><!-- .wrapper -->
        <a href="#skills" class="slide_link pulse"></a>
    </section><!-- .main-banner -->

    <section class="home-skills">
        <div class="skills-header">
            <div class="wrapper">
                <h1 id="skills" class="skills-title">Skills</h1>
            </div>
        </div>
        <div class="skills-list-wrap">
            <div class="wrapper">
                <ul class="skills-icons">
                    <?php $countIcon = 0; ?>
                    <?php foreach( $main_skills as $main_skill ) : ?>
                        <li class="skill-icon icon<?php echo $countIcon; ?>"><img src="<?php echo $main_skill['jtw_skill_image']; ?>" alt=""></li>
                    <?php $countIcon++; endforeach; ?>
                </ul>
                <ul class="skills-text">
                    <?php $countText = 0; ?>
                    <?php foreach( $main_skills as $main_skill ) : ?>
                        <li class="skill-text text<?php echo $countText; ?>"><?php echo $main_skill['jtw_skill_text']; ?></li>
                    <?php $countText++; endforeach; ?>
                </ul>
            </div>
        </div><!-- .skills-list-wrap -->
    </section><!-- .home-skills -->

    <section class="section-bottom desktop">
        <div class="featured-work">
            <div class="featured-work-header">
                <h1 class="featured-work-title">Featured Work</h1>
                <a href="<?php bloginfo( 'url' ); ?>/work" class="featured-work-link btn">All Work</a>
            </div>
            <?php if ( $work_query->have_posts() ) : ?>
                <div class="featured-work-projects">
                    <a href="#" id="prev"></a>
                    <a href="#" id="next"></a>
                    <div class="pager"></div>
                    <div class="projects-list cycle-slideshow"
                        data-cycle-fx="scrollHorz"
                        data-cycle-pause-on-hover="true"
                        data-cycle-speed="500"
                        data-cycle-pager=".pager"
                        data-cycle-prev="#prev"
                        data-cycle-next="#next"
                        data-cycle-slides="> div">
                        <?php while ( $work_query->have_posts() ) : $work_query->the_post(); ?>
                            <?php $thumb_id = get_post_thumbnail_id( $post->ID ); ?>
                            <?php $work_terms = get_the_terms( get_the_ID() , 'jtw_skills' ); ?>
                            <div class="project">
                                <div class="project-info">
                                    <a href="<?php the_permalink(); ?>" class="full"></a>
                                    <h4 class="project-name"><?php the_title(); ?></h4>
                                    <?php if ($work_terms) : ?>
                                    <ul class="project-tags">
                                        <?php foreach ( $work_terms as $work_term ) : ?>
                                            <li class="tag"><?php echo $work_term->name; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                                <div class="project-image">
                                    <?php $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true); ?>
                                    <img class="project-featured-image" src="<?php echo $thumb_url_array[0]; ?>" alt="Banner Text">
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div><!-- .featured-work -->
        <div class="featured-articles">
            <div class="featured-articles-header">
                <h1 class="featured-articles-title">Featured Posts</h1>
                <a href="<?php bloginfo( 'url' ); ?>/work" class="featured-articles-link btn">All Posts</a>
            </div>
            <?php if ( $posts_query->have_posts() ) : ?>
            <div class="featured-article-list">
                <?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
                    <div class="article">
                        <a href="<?php the_permalink(); ?>" class="full"></a>
                        <div class="article-date">
                            <span class="month"><?php the_time('m'); ?></span>/<span class="day"><?php the_time('d'); ?></span>/<span class="year"><?php the_time('y'); ?></span>
                        </div>
                        <h3 class="article-title"><?php the_title(); ?></h3>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <?php endif; ?>
        </div><!-- .featured-articles -->
    </section><!-- .section-bottom -->

<?php get_footer(); ?>