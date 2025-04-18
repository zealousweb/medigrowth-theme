<?php
/**
 * Block Pattern Registration
 *
 * @package Swasthika
 * @since 1.0.0
 */

/**
 * Registers block pattern categories.
 *
 * Categories are registered using the `register_block_pattern_category` function, and
 * are used to group block patterns in the Inserter.
 *
 * @since 1.0.0
 * @return void
 */
function swasthika_register_block_patterns() {
	// Check if function exists to prevent errors in older versions.
	if ( function_exists( 'register_block_pattern_category' ) ) {
		// Define block pattern categories.
		$swasthika_block_pattern_categories = array(
			'swasthika-fse' => array(
				'label' => esc_html__( 'Swasthika FSE', 'swasthika' ),
			),
		);

		// Allow external modification of block pattern categories.
		$swasthika_block_pattern_categories = apply_filters( 'swasthika_block_pattern_categories', $swasthika_block_pattern_categories );

		// Register each category if not already registered.
		foreach ( $swasthika_block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}
	}
}
add_action( 'init', 'swasthika_register_block_patterns' );
