<?php
/**
 * Register custom block pattern categories for the Swasthika theme.
 *
 * This function checks for the required function and class availability before
 * registering custom block pattern categories. Categories help organize custom
 * block patterns under the "Patterns" section of the block editor.
 *
 * @since 1.0
 * @return void
 */
function swasthika_register_block_patterns() {

	// Check if the function exists (introduced in WordPress 5.5+).
	if ( function_exists( 'register_block_pattern_category' ) ) {

		// Define custom block pattern categories.
		$swasthika_block_pattern_categories = array(
			'swasthika-fse' => array(
				'label' => esc_html__( 'Swasthika', 'swasthika' ),
			),
		);

		// Allow other plugins/themes to modify the pattern categories via filter.
		$swasthika_block_pattern_categories = apply_filters( 'swasthika_block_pattern_categories', $swasthika_block_pattern_categories );

		// Register each category if not already registered.
		foreach ( $swasthika_block_pattern_categories as $name => $properties ) {
			if (
				class_exists( 'WP_Block_Pattern_Categories_Registry' ) &&
				! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name )
			) {
				register_block_pattern_category( $name, $properties );
			}
		}
	}
}
add_action( 'init', 'swasthika_register_block_patterns' );
