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
    </section><!-- .main-banner -->

    <section class="home-skills">
        <div class="wrapper">
            <h1 class="skills-title">Skills</h1>
            <ul class="skills-list">
                <?php foreach( $main_skills as $main_skill ) : ?>
                <li class="skill">
                    <div class="skill-icon">
                        <img src="<?php echo $main_skill['jtw_skill_image']; ?>" alt="">
                    </div>
                    <div class="skill-text">
                        <p><?php echo $main_skill['jtw_skill_text']; ?></p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div><!-- .wrapper -->
    </section><!-- .home-skills -->

<?php get_footer(); ?>