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

	// Add named font size options.
	add_theme_support(
		'editor-font-sizes',
		[
			[
				'name' => __( 'Small', 'uve-got-options' ),
				'size' => 10,
				'slug' => 'small'
			],
			[
				'name' => __( 'Normal', 'uve-got-options' ),
				'size' => 16,
				'slug' => 'normal'
			],
			[
				'name' => __( 'Large', 'uve-got-options' ),
				'size' => 20,
				'slug' => 'large'
			],
			[
				'name' => __( 'Huge', 'uve-got-options' ),
				'size' => 32,
				'slug' => 'huge'
			],
			[
				'name' => __( 'Ludicrous', 'uve-got-options' ),
				'size' => 64,
				'slug' => 'ludicrous'
			],
		]
	);

	// Disable custom font sizes.
	add_theme_support('disable-custom-font-sizes');

	// Enqueue core block styles on the front end.
	add_theme_support( 'wp-block-styles' );

	// Enable support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add theme support for full-width and wide images.
	add_theme_support( 'align-wide' );

	// Enable Gutenberg Dark Mode.
	// add_theme_support( 'dark-editor-style' );

}
add_action( 'after_setup_theme', 'gutenberg_theme_support_options' );
