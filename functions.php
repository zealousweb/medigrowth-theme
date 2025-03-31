<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package swasthika
 * @since 1.0
 */

if ( ! function_exists( 'swasthika_setup' ) ) :
	function swasthika_setup() {

		// Add theme support features.
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'disable-custom-font-sizes' );
		add_theme_support( 'disable-custom-colors' );

		// Enqueue editor styles.
		add_editor_style( 'assets/css/editor-style.css' );

	}
endif;
add_action( 'after_setup_theme', 'swasthika_setup' );

/**
 * Enqueue theme styles and scripts.
 *
 * @since 1.0
 */
function swasthika_styles() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'swasthika-style', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );

	// Enqueue custom JavaScript with jQuery as a dependency.
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ], '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'swasthika_styles' );

/**
 * Include required files.
 */

// Include TGM Plugin Activation.
require get_template_directory() . '/inc/TGM/tgm.php';

// Include custom block patterns.
require get_template_directory() . '/inc/block-patterns.php';

