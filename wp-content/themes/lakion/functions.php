<?php
/**
 * Taha Auto Group Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Taha Auto Group
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_TAHA_AUTO_GROUP_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'taha-auto-group-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_TAHA_AUTO_GROUP_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );