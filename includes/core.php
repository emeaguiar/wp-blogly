<?php
/**
 * Core setup, site hooks and filters.
 */
namespace Blogly\Core;

/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @return void
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme',  $n( 'i18n' ) );
	add_action( 'after_setup_theme',  $n( 'theme_setup' ) );
	add_action( 'wp_enqueue_scripts', $n( 'scripts' ) );
	add_action( 'wp_enqueue_scripts', $n( 'styles' ) );
}

/**
 * Makes Theme available for translation.
 *
 * Translations can be added to the /languages directory.
 * If you're building a theme based on "blogly", change the
 * filename of '/languages/Blogly.pot' to the name of your project.
 *
 * @return void
 */
function i18n() {
	load_theme_textdomain( 'blogly', BLOGLY_PATH . '/languages' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function theme_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5', array(
		'search-form',
		'gallery'
		)
	);

	// This theme uses wp_nav_menu() in three locations.
	register_nav_menus(
		array(
			'primary'        => esc_html__( 'Primary Menu', 'tenup' ),
		)
	);
}

/**
 * Enqueue scripts for front-end.
 *
 * @return void
 */
function scripts() {

	wp_enqueue_script(
		'frontend',
		BLOGLY_TEMPLATE_URL . "/dist/js/frontend.min.js",
		[],
		BLOGLY_VERSION,
		true
	);

}

/**
 * Enqueue styles for front-end.
 *
 * @return void
 */
function styles() {

	wp_enqueue_style(
		'styles',
		BLOGLY_TEMPLATE_URL . "/dist/css/style.min.css",
		[],
		BLOGLY_VERSION
	);

	wp_enqueue_style(
		'fonts',
		'https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i|Playfair+Display:400,700',
		[],
		BLOGLY_VERSION
	);
}
