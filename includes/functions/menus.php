<?php
/**
 * Register menus
 *
 * @package Blogly
 * @since   1.0
 */

namespace Blogly\Menu;

/**
 * Attach hooks.
 */
function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme', $n( 'register_menus' ) );
}

/**
 * Add menu locations.
 */
function register_menus() {
	register_nav_menus( [
		'footer' => esc_html__( 'Footer', 'blogly' ),
	] );
}
