<?php
/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Swasthika
 * @since 1.0.0
 */

if ( ! function_exists( 'swasthika_setup' ) ) {
	/**
	 * Theme setup.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	function swasthika_setup() {
		// Add editor styles.
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

        add_theme_support( 'ocdi' );
	}
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
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue custom JavaScript with jQuery dependency.
	wp_enqueue_script(
		'swasthika-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array( 'jquery' ),
		'1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'swasthika_enqueue_assets' );

/**
 * Include required theme files.
 */

// Include TGM Plugin Activation.
require get_template_directory() . '/inc/TGM/tgm.php';

// Include custom block patterns.
require get_template_directory() . '/inc/block-patterns.php';
/**
 * Define import files for One Click Demo Import.
 */
function mytheme_import_files() {
    return [
        [
            'import_file_name'           => 'Swasthika Demo Import',
            'local_import_file'          => get_template_directory() . '/inc/demo-import/content.xml',
            // 'local_import_widget_file'   => get_template_directory() . '/inc/demo-import/widgets.wie',
            // 'local_import_customizer_file' => get_template_directory() . '/inc/demo-import/customizer.dat',
            // 'import_preview_image_url' => 'https://yourdomain.com/demo-preview.jpg',
            // 'preview_url'                => home_url(), // Dynamically gets the current site URL
        ]
    ];
}
add_filter( 'ocdi/import_files', 'mytheme_import_files' );

/**
 * After demo import, replace old URLs with the current site URL in database.
 */
function zealousweb_replace_demo_urls() {
    global $wpdb;

    $old_url = 'https://demo.zealousweb.com/wordpress-themes/swasthika'; // Change this to match the old site used in demo data
    $new_url = home_url(); // Current site URL

    // Escape both URLs to avoid issues
    $old_url = esc_url_raw( $old_url );
    $new_url = esc_url_raw( $new_url );

    // Replace old URL with new URL in post content
    $posts = $wpdb->get_results( "SELECT ID, post_content FROM {$wpdb->posts}" );

    foreach ( $posts as $post ) {
        if ( strpos( $post->post_content, $old_url ) !== false ) {
            $updated_content = str_replace( $old_url, $new_url, $post->post_content );

            $wpdb->update(
                $wpdb->posts,
                [ 'post_content' => wp_kses_post( $updated_content ) ],
                [ 'ID' => $post->ID ],
                [ '%s' ],
                [ '%d' ]
            );
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
add_action( 'ocdi/after_import', 'zealousweb_replace_demo_urls' );