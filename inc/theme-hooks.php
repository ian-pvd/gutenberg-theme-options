<?php

/**
 * Theme Hooks
 *
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package uve-got-options
 */

/**
 * Gutenberg Theme Support Options
 */
function gutenberg_theme_support_options() {

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'post-content.css' );

}
add_action( 'after_setup_theme', 'gutenberg_theme_support_options' );
