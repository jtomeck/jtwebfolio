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

<!--[if lte IE 9]>
<div class="alert alert-warning">
  <div class="wrapper">
    <div class="alert-header">
      <h1 class="alert-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/jt_logo.png" alt="jtwebfolio"></h1>
      <h2 class="alert-heading">I can't even believe it...</h2>
    </div>
    <div class="alert-content">
      <p>I've detected you're using Internet Explorer 9 or older... I don't mean to insult you, but the internet has come a long way over the years and your browser hasn't kept up...</p>
    </div>
    <div class="alert-footer">
      <h4 class="alert-footer-heading">Please upgrade, for everyone's sake...</h4>
      <p>Here are the links to the most modern browsers. Pick any one of them!</p>
      <ul class="browsers">
        <li class="browser">
          <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/browser-google_chrome.png" alt="Chrome Browser">
            <p>Google Chrome</p>
          </a>
        </li>
        <li class="browser">
          <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/browser-firefox.png" alt="Mozilla Firefox Browser">
            <p>Mozilla Firefox</p>
          </a>
        </li>
        <li class="browser">
          <a href="http://www.opera.com/" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/browser-opera.png" alt="Opera Browser">
            <p>Opera</p>
          </a>
        </li>
        <li class="browser">
          <a href="http://support.apple.com/downloads/#safari" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/browser-apple_safari.png" alt="Safari Browser">
            <p>Apple Safari</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie.css" />
<![endif]-->

</head>

<body <?php body_class($post->post_name); ?>>

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
