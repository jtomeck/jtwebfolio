<?php
/**
 * jtwebfolio functions and definitions
 *
 * @package jtwebfolio
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'jtwebfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jtwebfolio_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on jtwebfolio, use a find and replace
	 * to change 'jtwebfolio' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'jtwebfolio', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'jtwebfolio' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'jtwebfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // jtwebfolio_setup
add_action( 'after_setup_theme', 'jtwebfolio_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function jtwebfolio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'jtwebfolio' ),
		'id'            => 'blog_sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'jtwebfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jtwebfolio_scripts() {
	wp_enqueue_style( 'jtwebfolio-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '20140719', all );
	wp_enqueue_script( 'jtwebfolio-mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '20130115', true );
	wp_enqueue_script( 'jtwebfolio-cycle2', get_template_directory_uri() . '/assets/js/jquery.cycle2.min.js', array(), '20130115', true );
	wp_enqueue_script( 'jtwebfolio-select', get_template_directory_uri() . '/assets/js/jquery.lister.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jtwebfolio_scripts' );

/**
 * Allow SVG upload in media
 */
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load supercpt file.
 */
require get_template_directory() . '/inc/supercpt.php';

/**
 * Theme options page.
 */
require get_template_directory() . '/inc/theme-options.php';