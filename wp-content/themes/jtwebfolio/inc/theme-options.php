<?php
/**
 * Implementation of the Super Custom Post Type Feature
 *
 * You can add more if you wish
 *
 * @package jtwebfolio
 **/

function build_options_page() { ?>
<div id="theme-options-wrap">
	<div class="icon32" id="icon-tools"> <br /> </div>
	<h2>Theme Settings</h2>
	<p>Update various settings throughout your website.</p>
	<form method="post" action="options.php" enctype="multipart/form-data">
		<?php settings_fields('theme_options'); ?>
		<?php do_settings_sections(__FILE__); ?>
		<p class="submit">
			<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
		</p>
	</form>
</div>
<?php }
add_action('admin_init', 'register_and_build_fields');
function register_and_build_fields() {
	register_setting('theme_options', 'theme_options', 'validate_setting');
	add_settings_section('homepage_settings', 'Homepage Settings', 'section_homepage', __FILE__);
	function section_homepage() {}
	add_settings_field('dribbbleurl', 'Dribbble URL', 'dribbbleurl', __FILE__, 'homepage_settings');
	add_settings_field('twitterurl', 'Twitter URL', 'twitterurl', __FILE__, 'homepage_settings');
	add_settings_field('linkedinurl', 'LinkedIn URL', 'linkedinurl', __FILE__, 'homepage_settings');
}
function validate_setting($theme_options) {
	return $theme_options;
}
function dribbbleurl() {
	$options = get_option('theme_options');  echo "<input name='theme_options[facebookurl]' type='text' value='{$options['facebookurl']}' />";
}
function twitterurl() {
	$options = get_option('theme_options');  echo "<input name='theme_options[googleurl]' type='text' value='{$options['googleurl']}' />";
}
function linkedinurl() {
	$options = get_option('theme_options');  echo "<input name='theme_options[twitterurl]' type='text' value='{$options['twitterurl']}' />";
}
add_action('admin_menu', 'theme_options_page');
function theme_options_page() {  add_options_page('Theme Settings', 'Theme Settings', 'administrator', __FILE__, 'build_options_page');}
