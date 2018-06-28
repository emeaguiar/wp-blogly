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
}
