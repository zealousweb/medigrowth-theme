<?php
/**
 * Theme functions and definitions.
 *
 * @category WordPress
 * @package  Swasthika
 * @author   ZealousWeb <info@zealousweb.com>
 * @license  GPL-2.0+ https://www.gnu.org/licenses/gpl-2.0.html
 * @link     https://developer.wordpress.org/themes/basics/theme-functions/
 * @since    1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define theme constants.
 */
define( 'SWASTHIKA_VERSION', '1.0.0' );
define( 'SWASTHIKA_THEME_DIR', get_template_directory() );
define( 'SWASTHIKA_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup.
 *
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 * @return void
 */
function swasthika_setup() {

	// Add editor styles.
	add_editor_style( get_template_directory_uri() . '/style.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );

	// Add support for One Click Demo Import.
	add_theme_support( 'ocdi' );
}
add_action( 'after_setup_theme', 'swasthika_setup' );

/**
 * Enqueue theme styles and scripts.
 *
 * @since 1.0.0
 * @return void
 */
function swasthika_enqueue_assets() {
	// Enqueue theme stylesheet.
	wp_enqueue_style(
		'swasthika-style',
		get_stylesheet_uri(),
		array(),
		SWASTHIKA_VERSION
	);

	// Enqueue custom JavaScript with jQuery dependency.
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
 * Include required theme files.
 *
 * @since 1.0.0
 * @return void
 */
function swasthika_include_files() {
	// Include TGM Plugin Activation.
	require_once SWASTHIKA_THEME_DIR . '/inc/TGM/tgm.php';

	// Include custom block patterns.
	require_once SWASTHIKA_THEME_DIR . '/inc/block-patterns.php';
}
add_action( 'after_setup_theme', 'swasthika_include_files' );

/**
 * Define import files for One Click Demo Import.
 *
 * @since 1.0.0
 * @return array Array of import files configuration.
 */
function swasthika_import_files() {
	return array(
		array(
			'import_file_name'           => 'Swasthika Demo Import',
			'local_import_file'          => SWASTHIKA_THEME_DIR . '/inc/demo-import/content.xml',
		),
	);
}
add_filter( 'ocdi/import_files', 'swasthika_import_files' );

/**
 * After demo import, replace old URLs with the current site URL in database.
 *
 * @since 1.0.0
 * @return void
 */
function swasthika_replace_demo_urls() {
	global $wpdb;

	$old_url = 'http://swasthika.localhost'; // Replace with your old URL.
	$new_url = home_url(); // Get the current site URL.

	// Escape both URLs to avoid issues.
	$old_url = esc_url_raw( $old_url );
	$new_url = esc_url_raw( $new_url );

	// Replace old URL with new URL in post content.
	$posts = $wpdb->get_results( "SELECT ID, post_content FROM {$wpdb->posts}" );

	if ( ! empty( $posts ) ) {
		foreach ( $posts as $post ) {
			if ( strpos( $post->post_content, $old_url ) !== false ) {
				$updated_content = str_replace( $old_url, $new_url, $post->post_content );
				$wpdb->update(
					$wpdb->posts,
					array( 'post_content' => $updated_content ),
					array( 'ID' => $post->ID ),
					array( '%s' ),
					array( '%d' )
				);
			}
		}
	}

	// Replace URLs in post meta
    $wpdb->query( $wpdb->prepare(
        "UPDATE {$wpdb->postmeta} SET meta_value = REPLACE(meta_value, %s, %s)",
        $old_url, $new_url
    ) );

    // Replace URLs in options (for widgets, theme mods, etc.)
    $wpdb->query( $wpdb->prepare(
        "UPDATE {$wpdb->options} SET option_value = REPLACE(option_value, %s, %s)",
        $old_url, $new_url
    ) );
}
add_action( 'ocdi/after_import', 'swasthika_replace_demo_urls' );

/**
 * Add custom image sizes.
 *
 * @since 1.0.0
 * @return void
 */
function swasthika_image_sizes() {
	add_image_size( 'swasthika-featured', 1200, 600, true );
	add_image_size( 'swasthika-thumbnail', 400, 300, true );
}
add_action( 'after_setup_theme', 'swasthika_image_sizes' );
