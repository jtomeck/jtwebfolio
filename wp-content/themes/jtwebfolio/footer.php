<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package jtwebfolio
 */

$cta_heading = $cfs->get('jtw_cta_heading');
$cta_text = $cfs->get('jtw_cta_text');
$cta_heading = $cfs->get('jtw_cta_heading');
$btn_label = $cfs->get('jtw_cta_button_label');
$btn_link = $cfs->get('jtw_cta_button_link');
$menu_toggle = $cfs->get('jtw_toggle_menu');

?>
	

	<?php if( $cta_heading && $cta_text) : ?>
        <section class="cta<?php if ( is_page(5) ) { echo ' mobile'; } ?>">
            <div class="wrapper">
            	<div class="cta-content">
	                <h3 class="cta-title"><?php echo $cta_heading; ?></h3>
	                <p class="cta-text"><?php echo $cta_text; ?></p>
	            </div>
                <?php if( $menu_toggle ) : ?>
                    <?php if( $btn_link && $btn_label ) : ?>
                        <a href="<?php echo $btn_link; ?>" class="btn menu-toggle"><?php echo $btn_label; ?></a>
                    <?php endif; ?>
                <?php else : ?>
                    <?php if( $btn_link && $btn_label ) : ?>
                        <a href="<?php echo $btn_link; ?>" class="btn"><?php echo $btn_label; ?></a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<span>&copy; <?php echo date("Y") ?> Jared Tomeck</span>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo.svg" alt="logo">
			<span><a href="mailto:jtwebfolio@gmail.com">jtwebfolio@gmail.com</a></span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
