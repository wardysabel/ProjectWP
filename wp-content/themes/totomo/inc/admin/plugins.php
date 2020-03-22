<?php
/**
 * Add required and recommended plugins.
 *
 * @package totomo
 */

add_action( 'tgmpa_register', 'totomo_register_required_plugins' );

/**
 * Register required plugins
 *
 * @since  1.0
 */
function totomo_register_required_plugins() {
	$plugins = totomo_required_plugins();

	$config = array(
		'id'          => 'totomo',
		'has_notices' => false,
	);

	tgmpa( $plugins, $config );
}

/**
 * List of required plugins
 */
function totomo_required_plugins() {
	return array(
		array(
			'name' => esc_html__( 'Slim SEO', 'totomo' ),
			'slug' => 'slim-seo',
		)
	);
}
