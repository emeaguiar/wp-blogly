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

	add_action( 'after_setup_theme',  $n( 'register_menus' ) );
	add_filter( 'nav_menu_item_title',$n( 'add_menu_parent_icon' ), 10, 2 );
}

/**
 * Add menu locations.
 */
function register_menus() {
	register_nav_menus( [
		'footer' => esc_html__( 'Footer', 'blogly' ),
	] );
}

function add_menu_parent_icon( $title, $item ) {
	$children = get_pages( esc_html( sprintf( 'child_of=%s', $item->object_id ) ) );

	if ( empty( $children ) ) {
		return $title;
	}

	return $title . '<svg class="icon"><use xlink:href="#angle-down" /></svg>';
}
