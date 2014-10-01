<?php
/**
 * The header for our theme.
 * 
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package jtwebfolio
 */

$args = array( 'menu' => 'Main Nav' );
$options = get_option('theme_options');

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_enqueue_script( 'jquery' ); ?> 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<nav class="mobile-navigation">
				<?php wp_nav_menu( $args ); ?>
			</nav>
			<div class="wrapper">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo"></a></h1>
					<h2 class="site-description"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/site_description.svg" alt="jtwebfolio"></h2>
				</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( $args ); ?>
				</nav><!-- #site-navigation -->

				<div class="toggles">
					<a href="#" class="menu-toggle"></a>
					<a href="/contact" class="hire-me"></a>
				</div>
				<div class="social">
					<a href="<?php echo $options['dribbbleurl']; ?>" class="dribbble">Dribbble</a>
					<a href="<?php echo $options['twitterurl']; ?>" class="twitter">Twitter</a>
					<a href="<?php echo $options['linkedinurl']; ?>" class="linkedin">LinkedIn</a>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
