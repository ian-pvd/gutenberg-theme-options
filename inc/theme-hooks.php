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

	// Add editor color palette.
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => __( 'Red', 'uve-got-options' ),
				'slug'  => 'red',
				'color' => '#E12627',
			],
			[
				'name'  => __( 'Dark Gray', 'uve-got-options' ),
				'slug'  => 'gray-dark',
				'color' => '#414242',
			],
			[
				'name'  => __( 'Blue', 'uve-got-options' ),
				'slug'  => 'blue',
				'color' => '#3EC1CC',
			],
			[
				'name'  => __( 'Green', 'uve-got-options' ),
				'slug'  => 'green',
				'color' => '#99D04A',
			],
		]
	);

	// Disable custom theme colors.
	add_theme_support( 'disable-custom-colors' );

}
add_action( 'after_setup_theme', 'gutenberg_theme_support_options' );
