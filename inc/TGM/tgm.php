<?php

// Load TGM Plugin Activation Class
require_once get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php';

/**
 * Register Recommended Plugins
 */
function swasthika_register_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Fluent Forms – Customizable Contact Forms, Survey, Quiz, & Conversational Form Builder', 'swasthika' ),
			'slug'             => 'fluentform',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Breadcrumb NavXT', 'swasthika' ),
			'slug'             => 'breadcrumb-navxt',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'One Click Demo Import', 'swasthika' ),
			'slug'             => 'one-click-demo-import',
			'required'         => false,
			'force_activation' => false,
		),
	);

	$config = array(
		'id'           => 'swasthika', // Unique ID for hashing notices
		'default_path' => '',          // Default absolute path to bundled plugins
		'menu'         => 'tgmpa-install-plugins', // Menu slug
		'has_notices'  => true,        // Show admin notices
		'dismissable'  => true,        // User can dismiss the notice
		'is_automatic' => false,       // Automatically activate plugins after installation
	);

	// Corrected function call
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'swasthika_register_plugins' );
