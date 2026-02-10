<?php
/**
 * Theme functions and definitions.
 *
 * @category WordPress
 * @package  medigrowth
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
define( 'medigrowth_VERSION', '1.0' );
define( 'medigrowth_THEME_DIR', get_template_directory() );
define( 'medigrowth_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function medigrowth_setup() {
	// Add support for block styles and full site editing.
	add_theme_support( 'block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' ); // Load style.css in block editor.

	// Support for wide and full align images.
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'medigrowth_setup' );

/**
 * Enqueue styles and scripts.
 */
function medigrowth_enqueue_assets() {
	wp_enqueue_style(
		'medigrowth-style',
		get_stylesheet_uri(),
		array(),
		medigrowth_VERSION
	);

	wp_enqueue_script(
		'medigrowth-script',
		medigrowth_THEME_URI . '/assets/js/main.js',
		array( 'jquery' ),
		medigrowth_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'medigrowth_enqueue_assets' );



/**
 * Register block styles.
 */
function medigrowth_register_block_styles() {
	if ( function_exists( 'register_block_style' ) ) {
		register_block_style(
			'core/button',
			array(
				'name'  => 'shadow',
				'label' => __( 'Shadow', 'medigrowth' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'fill',
				'label' => __( 'Fill', 'medigrowth' ),
			)
		);
	}
}
add_action( 'init', 'medigrowth_register_block_styles' );

// Include necessary files.
require_once medigrowth_THEME_DIR . '/inc/medigrowth-plugins/medigrowth-plugins.php';
require_once medigrowth_THEME_DIR . '/inc/block-patterns.php';
