<?php
/**
 * WP Theme constants and setup functions
 */

// Useful global constants.
define( 'BLOGLY_VERSION',      '0.1.0' );
define( 'BLOGLY_URL',          get_stylesheet_directory_uri() );
define( 'BLOGLY_TEMPLATE_URL', get_template_directory_uri() );
define( 'BLOGLY_PATH',         get_template_directory() . '/' );
define( 'BLOGLY_INC',          BLOGLY_PATH . 'includes/' );

require_once BLOGLY_INC . 'core.php';
require_once BLOGLY_INC . 'template-tags.php';

require_once BLOGLY_INC . 'functions/menus.php';
require_once BLOGLY_INC . 'functions/logo.php';

// Run the setup functions.
Blogly\Core\setup();

Blogly\Menu\setup();
Blogly\Logo\setup();

// Require Composer autoloader if it exists.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once 'vendor/autoload.php';
}
