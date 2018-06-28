<?php
/**
 * Register custom logo options.
 *
 * @package Blogly
 * @since   1.0
 */

namespace Blogly\Logo;

/**
 * Attach hooks
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme', $n( 'enable_custom_logo' ) );
}

/**
 * Add custom logo support and set defaults.
 */
function enable_custom_logo() {
	add_theme_support( 'custom-logo', [
		'width'  => 180,
		'height' => 50,
		'header_text' => [ 'site-title', 'site-description' ],
	] );
}
