<?php
/**
 * Theme functions and definitions.
 *
 * @category WordPress
 * @package  Swasthika
 * @author   ZealousWeb <hello@zealousweb.com>
 * @license  GPL-2.0+ https://www.gnu.org/licenses/gpl-2.0.html
 * @link     https://developer.wordpress.org/themes/basics/theme-functions/
 * @since    1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define theme constants.
 */
define( 'SWASTHIKA_VERSION', '1.0' );
define( 'SWASTHIKA_THEME_DIR', get_template_directory() );
define( 'SWASTHIKA_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function swasthika_setup() {
	// Add support for block styles and full site editing.
	add_theme_support( 'block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' ); // Load style.css in block editor.

	// Support for wide and full align images.
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'swasthika_setup' );

/**
 * Enqueue styles and scripts.
 */
function swasthika_enqueue_assets() {
	wp_enqueue_style(
		'swasthika-style',
		get_stylesheet_uri(),
		array(),
		SWASTHIKA_VERSION
	);

	wp_enqueue_script(
		'swasthika-script',
		SWASTHIKA_THEME_URI . '/assets/js/main.js',
		array( 'jquery' ),
		SWASTHIKA_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'swasthika_enqueue_assets' );

/**
 * Register block pattern categories.
 */
function swasthika_register_block_pattern_categories() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'swasthika',
			array( 'label' => __( 'Swasthika Patterns', 'swasthika' ) )
		);
	}
}
add_action( 'init', 'swasthika_register_block_pattern_categories' );

// Include necessary files.
require_once SWASTHIKA_THEME_DIR . '/inc/swasthika-plugins/swasthika-plugins.php';
require_once SWASTHIKA_THEME_DIR . '/inc/block-patterns.php';
