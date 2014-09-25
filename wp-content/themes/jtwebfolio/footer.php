<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package jtwebfolio
 */
?>

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
