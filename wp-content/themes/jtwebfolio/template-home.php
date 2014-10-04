<?php
/**
 * Template Name: Home Template
 *
 * @package CMH
 */

$main_heading = $cfs->get('jtw_main_heading');
$main_text = $cfs->get('jtw_main_text');
$main_skills = $cfs->get('jtw_skills');

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

<?php get_footer(); ?>