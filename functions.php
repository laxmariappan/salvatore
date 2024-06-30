<?php
/**
 * Salvatore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Salvatore
 * @since Salvatore 1.1
 */

/**
 * Enqueue child theme styles.
 *
 * @return void
 */
function salvatore_enqueue_styles(): void {
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [],
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'salvatore_enqueue_styles' );