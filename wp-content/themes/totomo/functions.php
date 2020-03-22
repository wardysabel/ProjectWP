<?php
/**
 * Totomo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Totomo
 */

add_action( 'after_setup_theme', 'totomo_setup' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function totomo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'totomo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 910, 500, true );

	// Enable support for custom logo.
	add_theme_support( 'custom-logo' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Header', 'totomo' ),
		'social'  => __( 'Social Menu', 'totomo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Post formats.
	add_theme_support(
		'post-formats',
		array( 'aside', 'audio', 'image', 'gallery', 'link', 'quote', 'video' )
	);

	// This theme styles the visual editor to resemble the theme style.
	add_editor_style( 'css/editor-style.css' );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function totomo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'totomo_content_width', 768 );
}
add_action( 'after_setup_theme', 'totomo_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function totomo_scripts() {
	wp_enqueue_style( 'totomo-google-fonts', totomo_fonts_url() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

	wp_enqueue_style( 'totomo-style', get_stylesheet_uri() );

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.2', true );
	wp_enqueue_script( 'totomo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true );
	wp_enqueue_script( 'totomo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'totomo', get_template_directory_uri() . '/js/totomo.js', array(
		'jquery',
		'bootstrap',
		'wp-mediaelement',
	), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'totomo_scripts' );


/**
 * Get Google Fonts URL.
 *
 * @return string
 */
function totomo_fonts_url() {
	$fonts_url = '';
	$font_families = array();
	$subsets   = 'latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Varela Round, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Varela Round font: on or off', 'totomo' ) ) {
		$font_families[] = 'Varela Round';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (hebrew, vietnamese)', 'totomo' );

	if ( 'hebrew' === $subset ) {
		$subsets .= ',hebrew';
	} elseif ( 'vietnamese' === $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( ! empty( $font_families ) ) {
		$query_args = array(
			'family' => rawurlencode( implode( '|', $font_families ) ),
			'subset' => rawurlencode( $subsets ),
		);
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Bootstrap menu.
 */
require get_template_directory() . '/inc/bootstrap-menu.php';

if ( is_admin() ) {
	require_once get_template_directory() . '/inc/admin/class-tgm-plugin-activation.php';
	require_once get_template_directory() . '/inc/admin/plugins.php';
}

/**
 * Dashboard.
 */
require get_template_directory() . '/inc/dashboard/class-totomo-dashboard.php';
new totomo_Dashboard();

/**
 * Load Gutenberg stylesheet.
 */
function totomo_style_editor_gutenberg() {
	// Load the theme styles within Gutenberg.
	wp_enqueue_style( 'totomo-fonts', totomo_fonts_url() );
	wp_enqueue_style( 'style-editor', get_theme_file_uri( '/style-gutenberg.css' ), false );
}
add_action( 'enqueue_block_editor_assets', 'totomo_style_editor_gutenberg' );
