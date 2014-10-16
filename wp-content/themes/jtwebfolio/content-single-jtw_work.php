<?php
/**
 * @package jtwebfolio
 */

$client_logo = $cfs->get('jtw_client_logo');
$proj_desc = $cfs->get('jtw_project_desc');
$done_at_burst = $cfs->get('jtw_done_at_burst');
$details = $cfs->get('jtw_details_section');
$cta_heading = $cfs->get('jtw_project_cta_heading');
$cta_text = $cfs->get('jtw_project_cta_text');
$cta_buttons = $cfs->get('jtw_project_cta_buttons');
$new_window = $cfs->get('jtw_new_window');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-info">
			<?php if ( $client_logo ) : ?>
			<div class="client-logo">
				<img src="<?php echo $client_logo; ?>" alt="">
			</div>
			<?php else : ?>
				<h1 class="client-name"><?php the_title(); ?></h1>
			<?php endif; ?>
			<?php if ( $proj_desc ) : ?>
			<p class="entry-desc">
				<?php if ( $done_at_burst ) : ?>
					<span class="done-at-burst"><strong>NOTE:</strong> I did this work while working at <a href="http://burstmarketing.net" target="_blank">Burst Marketing</a></span>
				<?php endif; ?>
				<?php echo $proj_desc; ?>
			</p>
			<?php endif; ?>
		</div>
	</header><!-- .entry-header -->
	
	<div class="contribution">
		<h1 class="contribution-title">Here's what I did<span>scroll on, my friend...</span></h1>
		<a href="#section" class="slide_link pulse-trans"></a>
	</div>

	<div class="entry-content">
		<div id="section"></div>
		<?php foreach ( $details as $detail ) : ?>
		<section class="detail">
			<div class="wrapper">
				<div class="detail-header">
					<h3 class="detail-title"><?php echo $detail['jtw_detail_title']; ?></h3>
				</div>
				<div class="detail-content">
					<?php if ( $detail['jtw_detail_image'] ) : ?>
					<div class="detail-image <?php if ( $detail['jtw_is_website'] ) { echo 'is-website'; } ?>">
						<div class="container">
							<img src="<?php echo $detail['jtw_detail_image']; ?>" alt="">
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<?php endforeach; ?>

	</div><!-- .entry-content -->
	
	<?php if( $cta_buttons ) : ?>
    <section class="cta">
        <div class="wrapper">
        	<div class="cta-content">
                <h3 class="cta-title">What did you think?</h3>
                <p class="cta-text">If this piqued your interest, there's plenty more where this came from.<br>
                	All you have to do is make your choice.</p>
                <h6 class="cta-whats-next">So, what'll it be?</h6>
            </div>
            <div class="cta-buttons">
            	<?php foreach ($cta_buttons as $cta_button ) : ?>
                	<a href="<?php echo $cta_button['jtw_project_cta_button_url']; ?>" class="btn" <?php if ( $cta_button['jtw_new_window'] ) { echo 'target="_blank"'; } ?>><?php echo $cta_button['jtw_project_cta_button_label']; ?></a>
            	<?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
</article><!-- #post-## -->
