<?php
/**
 * Register custom block pattern categories for the medigrowth theme.
 *
 * This function checks for the required function and class availability before
 * registering custom block pattern categories. Categories help organize custom
 * block patterns under the "Patterns" section of the block editor.
 *
 * @since 1.0
 * @return void
 */
function medigrowth_register_block_patterns() {

	// Check if the function exists (introduced in WordPress 5.5+).
	if ( function_exists( 'register_block_pattern_category' ) ) {

		// Define custom block pattern categories.
		$medigrowth_block_pattern_categories = array(
			'medigrowth-fse' => array(
				'label' => esc_html__( 'MediGrowth', 'medigrowth' ),
			),
		);

		// Allow other plugins/themes to modify the pattern categories via filter.
		$medigrowth_block_pattern_categories = apply_filters( 'medigrowth_block_pattern_categories', $medigrowth_block_pattern_categories );

		// Register each category if not already registered.
		foreach ( $medigrowth_block_pattern_categories as $name => $properties ) {
			if (
				class_exists( 'WP_Block_Pattern_Categories_Registry' ) &&
				! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name )
			) {
				register_block_pattern_category( $name, $properties );
			}
		}
	}
}
add_action( 'init', 'medigrowth_register_block_patterns' );
