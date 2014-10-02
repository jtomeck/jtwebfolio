<?php
/**
 * Template Name: Home Template
 *
 * @package CMH
 */

$main_heading = $cfs->get('jtw_main_heading');
$main_text = $cfs->get('jtw_main_text');
$main_skills = $cfs->get('jtw_skills');

$cta_heading = $cfs->get('jtw_cta_heading');
$cta_text = $cfs->get('jtw_cta_text');
$cta_heading = $cfs->get('jtw_cta_heading');
$btn_label = $cfs->get('jtw_cta_button_label');
$btn_link = $cfs->get('jtw_cta_button_link');
$menu_toggle = $cfs->get('jtw_toggle_menu');

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
    <?php if( $cta_heading && $cta_text) : ?>
        <section class="cta mobile">
            <div class="wrapper">
                <h3 class="cta-title"><?php echo $cta_heading; ?></h3>
                <p class="cta-text"><?php echo $cta_text; ?></p>
                <?php if( $menu_toggle[0] ) : ?>
                    <?php if( $btn_link && $btn_label ) : ?>
                        <a href="<?php echo $btn_link; ?>" class="btn"><?php echo $btn_label; ?></a>
                    <?php endif; ?>
                <?php else : ?>
                    <?php if( $btn_link && $btn_label ) : ?>
                        <a href="<?php echo $btn_link; ?>" class="btn menu-toggle"><?php echo $btn_label; ?></a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
<?php get_footer(); ?>