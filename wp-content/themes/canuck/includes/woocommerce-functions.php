<?php
/**
 * WooCommerce functions file.
 *
 * This file contains custom functions that are loaded
 * when the WooCommerce plugin is installed.
 * Thank you AJ Clarke!
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      modified by Kevin Archibald <www.kevinsspace.ca/contact/>
 * @link        http://www.wpexplorer.com/woocommerce-compatible-theme/
 */

/**
 * Alter WooCommerce shop posts per page.
 *
 * @param integer $cols is columns to use.
 */
function canuck_woo_posts_per_page( $cols ) {
	return 12;
}
add_filter( 'loop_shop_per_page', 'canuck_woo_posts_per_page' );

/**
 * Alter shop columns.
 *
 * @param integer $columns is columns to use.
 */
function canuck_woo_shop_columns( $columns ) {
	return 4;
}
add_filter( 'loop_shop_columns', 'canuck_woo_shop_columns' );

/**
 * Add correct body class for shop columns.
 *
 * @param string $classes are css classes.
 */
function canuck_woo_shop_columns_body_class( $classes ) {
	if ( is_shop() || is_product_category() || is_product_tag() ) {
		$classes[] = 'columns-4';
	}
	return $classes;
}
add_filter( 'body_class', 'canuck_woo_shop_columns_body_class' );

/**
 * Change pagination pointers.
 *
 * @param array $args is array of html.
 */
function canuck_woo_pagination_args( $args ) {
	$args['prev_text'] = '<i class="fa fa-angle-left"></i>';
	$args['next_text'] = '<i class="fa fa-angle-right"></i>';
	return $args;
}
add_filter( 'woocommerce_pagination_args', 'canuck_woo_pagination_args' );

/**
 * Change sale text.
 */
function canuck_woo_sale_flash() {
	return '<span class="onsale">' . esc_html__( 'Sale', 'canuck' ) . '</span>';
}
add_filter( 'woocommerce_sale_flash', 'canuck_woo_sale_flash' );

/**
 * Set related products to display 4 products.
 *
 * @param array $args is array of data.
 */
function canuck_woo_related_posts_per_page( $args ) {
	$args['posts_per_page'] = 8;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'canuck_woo_related_posts_per_page' );

/**
 * Filter up-sells columns
 *
 * @param integer $columns is columns to use.
 */
function canuck_woo_single_loops_columns( $columns ) {
	return 4;
}
add_filter( 'woocommerce_up_sells_columns', 'canuck_woo_single_loops_columns' );

/**
 * Filter related args.
 *
 * @param array $args is array of data.
 */
function canuck_woo_related_columns( $args ) {
	$args['columns'] = 4;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'canuck_woo_related_columns', 10 );

/**
 * Filter body classes to add column class.
 *
 * @param string $classes are css classes.
 */
function canuck_woo_single_loops_columns_body_class( $classes ) {
	if ( is_singular( 'product' ) ) {
		$classes[] = 'columns-4';
	}
	return $classes;
}
add_filter( 'body_class', 'canuck_woo_single_loops_columns_body_class' );

/**
 * Add the cart link to menu
 *
 * @param string $items contains lists html..
 * @param array  $args is array of data.
 */
function canuck_add_menu_cart_item_to_menus( $items, $args ) {
	// Make sure your change to your Menu location !!!!
	if ( 'canuck_primary' === $args->theme_location ) {
		$css_class = 'menu-item menu-item-type-cart menu-item-type-woocommerce-cart'; // phpcs:ignore
		if ( is_cart() ) {
			$css_class .= ' current-menu-item';
		}
		$items .= '<li class="' . esc_attr( $css_class ) . '">';
		$items .= canuck_menu_cart_item();
		$items .= '</li>';
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'canuck_add_menu_cart_item_to_menus', 10, 2 );

/**
 * Function returns the main menu cart link
 */
function canuck_menu_cart_item() {
	$output     = '';
	$cart_count = WC()->cart->cart_contents_count;
	$css_class  = 'canuck-menu-cart-total canuck-cart-total-' . intval( $cart_count ); // phpcs:ignore
	if ( $cart_count ) {
		$url = wc_get_cart_url();
	} else {
		$url = wc_get_page_permalink( 'shop' );
	}
	$html    = WC()->cart->get_cart_total();
	$html    = str_replace( 'amount', '', $html );
	$output .= '<a href="' . esc_url( $url ) . '" class="' . esc_attr( $css_class ) . '">';
	$output .= '<span class="fa fa-shopping-bag"></span>';
	$output .= wp_kses_post( $html );
	$output .= '</a>';
	return $output;
}

/**
 * Update cart link with AJAX.
 *
 * @param array $fragments is array of data.
 */
function canuck_main_menu_cart_link_fragments( $fragments ) {
	$fragments['.canuck-menu-cart-total'] = canuck_menu_cart_item();
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'canuck_main_menu_cart_link_fragments' );

/**
 * Set up layout options for the shop page
 */
function canuck_woo_shop_options() {
	global $wp_customize;
	// Add panel.
	$wp_customize->add_panel(
		'canuck_woo',
		array(
			'priority'    => 9,
			'capability'  => 'edit_theme_options',
			'title'       => esc_html__( 'Canuck WooCommerce Options', 'canuck' ),
			'description' => esc_html__( 'Theme specific options when WooCommerce is installed.', 'canuck' ),
		)
	);
	// Add sections in panel.
	$wp_customize->add_section(
		'canuck_shop_page',
		array(
			'priority'    => 1,
			'capability'  => 'edit_theme_options',
			'title'       => esc_html__( 'WooCommerce Shop Page Layouts', 'canuck' ),
			'description' => esc_html__( 'Pick the layout you want. Sidebars will be in the Appearance->Widgets Panel.', 'canuck' ),
			'panel'       => 'canuck_woo',
		)
	);
	$wp_customize->add_setting(
		'canuck_shop_page_layout',
		array(
			'default'           => 'right_sidebar',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new Canuck_Custom_Radio_Image_Control(
			$wp_customize,
			'canuck_shop_page_layout',
			array(
				'label'       => esc_html__( 'Shop Page Layout', 'canuck' ),
				'section'     => 'canuck_shop_page',
				'settings'    => 'canuck_shop_page_layout',
				'type'        => 'radio_image',
				'description' => esc_html__( 'Select a layout option for your shop page.', 'canuck' ),
				'priority'    => 1,
				'choices'     => canuck_page_layout_choices(),
			)
		)
	);
	$wp_customize->add_setting(
		'canuck_shop_page_title',
		array(
			'default'           => esc_html__( 'Shop Products', 'canuck' ),
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'canuck_shop_page_title',
		array(
			'label'       => esc_html__( 'Shop Page Layout', 'canuck' ),
			'section'     => 'canuck_shop_page',
			'settings'    => 'canuck_shop_page_title',
			'type'        => 'text',
			'description' => esc_html__( 'Input a title for your Shop Page, no html allowed.', 'canuck' ),
			'priority'    => 2,
		)
	);
}
add_action( 'customize_register', 'canuck_woo_shop_options' );
