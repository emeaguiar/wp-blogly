<?php
/**
 * Register menus
 *
 * @package Blogly
 * @since   1.0
 */

namespace Blogly\Menu;

function setup() {
	$n = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme', $n( 'register_menus' ) );
	add_action( 'after_setup_theme', $n( 'unregister_menus' ) );
}

/**
 * Add menu locations.
 */
function register_menus() {
	register_nav_menus( [
		'header_left'   => esc_html__( 'Header Left', 'blogly' ),
		'header_right'  => esc_html__( 'Header Right', 'blogly' ),
		'header_bottom' => esc_html__( 'Header Bottom', 'blogly' ),
	] );
}

/**
 * Remove unneeded menus.
 */
function unregister_menus() {
	unregister_nav_menu( 'primary' );
}
