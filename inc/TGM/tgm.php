<?php
/**
 * TGM Plugin Activation configuration
 *
 * @package Swasthika
 * @since 1.0.0
 */

// Load TGM Plugin Activation Class.
require_once get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php';

/**
 * Register recommended plugins for the theme
 *
 * @since 1.0.0
 * @return void
 */
function swasthika_register_plugins() {
	$plugins = array(
		array(
			'name'             => esc_html__( 'Fluent Forms – Customizable Contact Forms, Survey, Quiz, & Conversational Form Builder', 'swasthika' ),
			'slug'             => 'fluentform',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => esc_html__( 'Breadcrumb NavXT', 'swasthika' ),
			'slug'             => 'breadcrumb-navxt',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => esc_html__( 'One Click Demo Import', 'swasthika' ),
			'slug'             => 'one-click-demo-import',
			'required'         => false,
			'force_activation' => false,
		),
	);

	$config = array(
		'id'           => 'swasthika',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'swasthika_register_plugins' );
