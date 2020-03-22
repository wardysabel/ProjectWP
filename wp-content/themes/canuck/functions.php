<?php
/**
 * Main functions file
 *
 * This file is the WordPress functions.php file, which which contains many
 * of the functions for set up and operation of the theme
 *
 * @package     Canuck WordPress Theme
 * @copyright   Copyright (C) 2017-2019  Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

/**
 * ---- load files ---------------
 */
require get_template_directory() . '/css/custom-css.php';
require get_template_directory() . '/includes/post-functions.php';
require get_template_directory() . '/includes/custom-functions.php';
require get_template_directory() . '/includes/custom-header.php';
if ( is_admin() ) {
	require get_template_directory() . '/includes/metabox-functions.php';
	require get_template_directory() . '/includes/theme-page.php';
}
if ( is_customize_preview() ) {
	require get_template_directory() . '/includes/kha-customizer.php';
}
require get_template_directory() . '/widgets/class-canuck-author-widget.php';
require get_template_directory() . '/widgets/class-canuck-category-widget.php';
require get_template_directory() . '/widgets/class-canuck-recent-posts-widget.php';
require get_template_directory() . '/widgets/class-canuck-archives-widget.php';
if ( false === get_theme_mod( 'canuck_disable_widget_slider' ) ? true : false ) {
	require get_template_directory() . '/widgets/class-canuck-slider-widget.php';
}
require get_template_directory() . '/includes/media-grabber.php';
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce-functions.php';
}

if ( ! function_exists( 'canuck_load_js' ) ) {
	/**
	 * Load jQuery Scripts
	 *
	 * Function to load jquery scripts. Some of the functions are conditionally loaded
	 * so that the user can disable naughty scripts.
	 *
	 * @uses is_admin() @uses wp_enqueue_script @uses get_template_directory_uri()
	 */
	function canuck_load_js() {
		$page_template           = basename( get_page_template() );
		$use_one_plugin_file     = get_theme_mod( 'canuck_use_one_plugins_file' ) ? true : false;
		$disable_colorbox        = get_theme_mod( 'canuck_disable_colorboxjs' ) ? true : false;
		$disable_fitvidsjs       = get_theme_mod( 'canuck_disable_fitvidsjs' ) ? true : false;
		$disable_smoothscroll    = get_theme_mod( 'canuck_disable_smoothscroll' ) ? true : false;
		$disable_scrollreveal    = get_theme_mod( 'canuck_disable_scrollreveal' ) ? true : false;
		$disable_widget_slider   = get_theme_mod( 'canuck_disable_widget_slider' ) ? true : false;
		$include_pinterest_pinit = get_theme_mod( 'canuck_include_pinit' ) ? true : false;
		$use_lazyload            = get_theme_mod( 'canuck_use_lazyload' ) ? true : false;
		if ( ! is_admin() ) {
			if ( true === $use_lazyload ) {
				// Lazyload plugin, doc ready included in minified file.
				wp_enqueue_script( 'jquery-lazy', get_template_directory_uri() . '/js/jquery.lazy.min.js', array( 'jquery' ), '', false );
			}
			// Static home page specific scripts.
			if ( 'template-home.php' === $page_template ) {
				wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/parallax.min.js', array( 'jquery' ), '', true );
				// Load scroll reveal, doc ready included in minified file.
				if ( false === $disable_scrollreveal ) {
					wp_enqueue_script( 'scrollreveal-js', get_template_directory_uri() . '/js/scrollreveal.min.js', array( 'jquery' ), '', true );
				}
				// Load Owl slider, doc ready included in minified file.
				wp_enqueue_script( 'jquery-owl-carousel', get_template_directory_uri() . '/js/owl/owl.carousel.min.js', array( 'jquery' ), '', true );
			}
			// Option to disable fitvids, doc ready included in minified file.
			if ( false === $disable_fitvidsjs ) {
				wp_enqueue_script( 'jquery-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.min.js', array( 'jquery' ), '', true );
			}
			// Option to disable smoothscroll.
			if ( false === $disable_smoothscroll ) {
				wp_enqueue_script( 'canuck-smoothscroll', get_template_directory_uri() . '/js/smooth-scroll-scripts.js', array( 'jquery' ), '', true );
			}
			// Option to disable colorbox, doc ready included in minified file.
			if ( false === $disable_colorbox ) {
				wp_enqueue_script( 'jquery-colorbox', get_template_directory_uri() . '/js/colorbox/jquery.colorbox-min.js', array( 'jquery' ), '', true );
			}
			// Load custom js.
			//wp_enqueue_script( 'canuck-custom_js', get_template_directory_uri() . '/js/doc-ready-scripts-min.js', array( 'jquery' ), '', true );
			wp_enqueue_script( 'canuck-custom_js', get_template_directory_uri() . '/js/doc-ready-scripts.js', array( 'jquery' ), '', true );
			// Load flex slider, doc ready included in minified file.
			wp_enqueue_script( 'jquery-flex-slider', get_template_directory_uri() . '/js/flex-slider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
			// Conditional load widget slider.
			if ( false === $disable_widget_slider ) {
				wp_enqueue_script( 'canuck-widget-flex-js', get_template_directory_uri() . '/js/flex-widget-doc-ready-scripts.js', array( 'jquery' ), '', true );
			}
			if ( 'template-masonry.php' === $page_template || 'template-portfolio.php' === $page_template ) {
				wp_enqueue_script( 'jquery-masonry' );
				wp_enqueue_script( 'imagesloaded' );
				wp_enqueue_script( 'canuck-masonry', get_template_directory_uri() . '/js/masonry-doc-ready-scripts.js', array( 'jquery' ), '', true );
			}
			// Pinterest Pin It.
			if ( true === $include_pinterest_pinit ) {
				wp_enqueue_script( 'pinit-js', get_template_directory_uri() . '/js/pinit.js', array( 'jquery' ), '', true );
			}
			// Load threaded comments.
			if ( is_singular() && comments_open() && 1 === ( get_option( 'thread_comments' ) ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
			// localize scripts for keyboard navigation
			wp_localize_script( 'canuck-custom_js', 'accessibleNavigationScreenReaderText', array(
				'expandMain'   => __( 'Open Main Menu', 'canuck' ),
				'collapseMain' => __( 'Close Main Menu', 'canuck' ),
				'expandChild'   => __( 'Expand Submenu', 'canuck' ),
				'collapseChild' => __( 'Collapse Submenu', 'canuck' ),
			) );
		}// End if().
	}
	add_action( 'wp_enqueue_scripts', 'canuck_load_js' );
}// End if().

if ( ! function_exists( 'canuck_styles' ) ) {
	/**
	 * Load CSS Styles
	 *
	 * Function to load css styles. Some of the style sheets are conditionally loaded
	 * so as they are part of jQuery plugins.
	 *
	 * @uses get_theme_mods() found in canuck-options.php
	 * WordPress functions - see codex
	 * @uses wp_register_style() @uses wp_enqueue_style @uses get_template_directory_uri()
	 * @uses get_template_directory_uri()
	 */
	function canuck_styles() {
		$page_template = get_page_template_slug();
		$display_font  = get_theme_mod( 'canuck_display_font_options', 'auto' );
		// Load theme fonts.
		$theme_fonts = canuck_fonts();
		if ( 'google' === $theme_fonts['header']['type'] ) {
			wp_enqueue_style( 'canuck-google-1', 'https://fonts.googleapis.com/css?family=' . $theme_fonts['header']['enqueue'] . '&display=' . $display_font );
		}
		if ( 'google' === $theme_fonts['body']['type'] ) {
			if ( $theme_fonts['header']['enqueue'] !== $theme_fonts['body']['enqueue'] ) {
				wp_enqueue_style( 'canuck-google-2', 'https://fonts.googleapis.com/css?family=' . $theme_fonts['body']['enqueue'] . '&display=' . $display_font );
			}
		}
		if ( 'google' === $theme_fonts['page']['type'] ) {
			if ( $theme_fonts['header']['enqueue'] !== $theme_fonts['page']['enqueue'] && $theme_fonts['body']['enqueue'] !== $theme_fonts['page']['enqueue'] ) {
				wp_enqueue_style( 'canuck-google-3', 'https://fonts.googleapis.com/css?family=' . $theme_fonts['page']['enqueue'] . '&display=' . $display_font );
			}
		}
		// Load skins.
		$skinfile = get_theme_mod( 'canuck_color_scheme', 'gray-pink' );
		// Load option css.
		$ka_css = canuck_custom_css();
		if ( is_child_theme() ) {
			wp_enqueue_style( 'canuck-parent', get_template_directory_uri() . '/style.css', array() );
			if ( 'template-portfolio.php' === $page_template ) {
				wp_enqueue_style( 'canuck-template-child', get_template_directory_uri() . '/css/template-portfolio-style-min.css', array( 'canuck-parent' ) );
			} elseif ( 'template-home.php' === $page_template ) {
				wp_enqueue_style( 'canuck-template-child', get_template_directory_uri() . '/css/template-home-style-min.css', array( 'canuck-parent' ) );
			} else {
				wp_enqueue_style( 'canuck-template-child', get_template_directory_uri() . '/css/template-blank-style.css', array( 'canuck-parent' ) );
			}
			wp_enqueue_style( 'canuck-skin', get_template_directory_uri() . '/css/' . esc_html( $skinfile ) . '-min.css', array( 'canuck-template-child' ) );
			//wp_enqueue_style( 'canuck-skin', get_template_directory_uri() . '/css/' . esc_html( $skinfile ) . '.css', array( 'canuck-template-child' ) );
			wp_add_inline_style( 'canuck-parent', $ka_css );
			/** Note that fontawesome and owl styles are loaded here in case they are not loaded in the child theme
			 *  It is better to load in the child theme (with the same handle) as all styles will then be loaded before the child theme style. */
			wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array() );
			wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri() . '/js/owl/assets/owl.carousel.css', array() );
		} else {
			wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array() );
			wp_enqueue_style( 'canuck-style', get_stylesheet_uri(), array() );
			if ( 'template-portfolio.php' === $page_template ) {
				wp_enqueue_style( 'canuck-template', get_theme_file_uri( '/css/template-portfolio-style-min.css' ), array( 'canuck-style' ), '1.0' );
			} elseif ( 'template-home.php' === $page_template ) {
				wp_enqueue_style( 'canuck-template', get_theme_file_uri( '/css/template-home-style-min.css' ), array( 'canuck-style' ), '1.0' );
				wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri() . '/js/owl/assets/owl.carousel.css', array() );
			}
			wp_enqueue_style( 'canuck-skin', get_theme_file_uri( '/css/' . esc_html( $skinfile ) . '-min.css' ), array( 'canuck-style' ), '1.0' );
			//wp_enqueue_style( 'canuck-skin', get_theme_file_uri( '/css/' . esc_html( $skinfile ) . '.css' ), array( 'canuck-style' ), '1.0' );
			wp_add_inline_style( 'canuck-skin', $ka_css );
		}
	}
	add_action( 'wp_enqueue_scripts', 'canuck_styles' );
}// End if().

if ( ! function_exists( 'canuck_register_menu' ) ) {
	/**
	 * Register menus.
	 */
	function canuck_register_menu() {
		register_nav_menu( 'canuck_primary', esc_html__( 'Primary Menu', 'canuck' ) );
		register_nav_menu( 'canuck_social', esc_html__( 'Social Menu', 'canuck' ) );
	}
	add_action( 'init', 'canuck_register_menu' );
}

/**
 * Add excerpt support for pages
 */
function canuck_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'canuck_add_excerpts_to_pages' );

/**
 * Check is block editor loaded.
 */
function canuck_block_editor_loaded() {
	global $canuck_block_editor_loaded;
	$canuck_block_editor_loaded = true;
	echo '<script>alert("block hook fired");</script>';
}
//add_action( 'enqueue_block_editor_assets', 'canuck_block_editor_loaded' );

if ( ! function_exists( 'canuck_theme_supports' ) ) {
	/**
	 * Theme Support Functions.
	 *
	 * This function adds all theme support functions on the after_setup_theme hook.
	 * See the WordPress Codex for each support.
	 */
	function canuck_theme_supports() {
		global $canuck_block_editor_loaded;
		// Post formats.
		add_theme_support( 'post-formats', array( 'audio', 'gallery', 'image', 'quote', 'video' ) );
		// Custom Backgrounds.
		add_theme_support( 'custom-background' );
		// Feeds.
		add_theme_support( 'automatic-feed-links' );
		// editor style
		add_editor_style();
		// Thumbnails.
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'canuck_feature', 1100, 367, true );
		add_image_size( 'canuck_small15', 300, 200, true );
		add_image_size( 'canuck_med15', 800, 533, true );
		add_image_size( 'canuck_gallery', 600, 331, true );
		add_image_size( 'canuck_gallery_thumb', 90, 60, true );
		set_post_thumbnail_size( 1100, 733, true );
		// Enable translation.
		load_theme_textdomain( 'canuck', get_template_directory() . '/languages' );
		// HTML5 markup for comment lists, comment forms, search forms and galleries.
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );
		// Title tags.
		add_theme_support( 'title-tag' );
		// Custom logo support.
		$canuck_logo_args = array(
			'height'      => 100,
			'width'       => 230,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		);
		add_theme_support( 'custom-logo', $canuck_logo_args );
		// WooCommerce supports.
		if ( class_exists( 'WooCommerce' ) ) {
			add_theme_support( 'woocommerce' );
			add_theme_support( 'wc-product-gallery-slider' );
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
		}
		// Gutenberg
		add_theme_support( 'align-wide' );
	}
	add_action( 'after_setup_theme', 'canuck_theme_supports' );
}// End if().

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 * Note: this function taken from twentynineteen
 *
 * @global int $content_width Content width.
 */
function canuck_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	$GLOBALS['content_width'] = apply_filters( 'canuck_content_width', 1600 );// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
}
add_action( 'after_setup_theme', 'canuck_content_width', 0 );

function canuck_gutenberg_load_styles() {
	/**
	 * Support for Gutenberg editor editor style
	 *
	 * This function a editor style sheet designed for the Gutenberg editor panel.
	 * It contains styles to present Gutenberg as the theme will present these blocks.
	 */
	wp_enqueue_style( 'canuck-block-editor-styles', get_theme_file_uri( '/css/gutenberg-editor-style.css' ), false, '1.0', 'all' );
	$ka_gutenberg_css = canuck_custom_css_gutenberg();
	// Load skins.
	$skinfile = get_theme_mod( 'canuck_color_scheme', 'gray-pink' );
	wp_enqueue_style( 'canuck-skin', get_theme_file_uri( '/css/' . esc_html( $skinfile ) . '-gutenberg.css' ), array( 'canuck-block-editor-styles' ), '1.0' );
	wp_add_inline_style( 'canuck-block-editor-styles', $ka_gutenberg_css );
}
add_action( 'enqueue_block_editor_assets', 'canuck_gutenberg_load_styles' );

if ( ! function_exists( 'canuck_custom_gallery_sizes' ) ) {
	/**
	 * Add custom gallery sizes.
	 */
	function canuck_custom_gallery_sizes( $sizes ) {
		$custom_sizes = array(
			'canuck_small15'       => esc_html__( 'Small 1.5 to 1', 'canuck' ),
			'canuck_gallery_thumb' => esc_html__( 'Thumbnails 1.5 to 1', 'canuck' ),
			'canuck_med15'         => esc_html__( 'Medium 1.5 to 1', 'canuck' ),
		);
		return array_merge( $sizes, $custom_sizes );
	}
	add_filter( 'image_size_names_choose', 'canuck_custom_gallery_sizes' );
}

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 * from twentyseventeen.
 */
function canuck_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
add_action( 'wp_head', 'canuck_pingback_header' );

if ( ! function_exists( 'canuck_register_sidebars' ) ) {
	/**
	 * Register Side bars
	 * Thanks to Justin Tadlock for the post on sidebars
	 *
	 * @link http://justintadlock.com/archives/2010/11/08/sidebars-in-wordpress
	 */
	function canuck_register_sidebars() {
		register_sidebar(
			array(
				'id'            => 'canuck_default_sidebar_a',
				'name'          => esc_html__( 'Default A', 'canuck' ),
				'description'   => esc_html__( 'Use for standard WordPress pages', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_default_sidebar_b',
				'name'          => esc_html__( 'Default B', 'canuck' ),
				'description'   => esc_html__( 'Second sidebar for standard WordPress pages', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_blog_sidebar_a',
				'name'          => esc_html__( 'Blog A', 'canuck' ),
				'description'   => esc_html__( 'First Blog Sidebar', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_blog_sidebar_b',
				'name'          => esc_html__( 'Blog B', 'canuck' ),
				'description'   => esc_html__( 'Second Blog Sidebar', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_404_sidebar_a',
				'name'          => esc_html__( 'Error 404 A', 'canuck' ),
				'description'   => esc_html__( 'Use this for your 404 page', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_404_sidebar_b',
				'name'          => esc_html__( 'Error 404 B', 'canuck' ),
				'description'   => esc_html__( 'Use this for your 404 page', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_contact_sidebar_a',
				'name'          => esc_html__( 'Contact A', 'canuck' ),
				'description'   => esc_html__( 'Use this for your Contact page', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_contact_sidebar_b',
				'name'          => esc_html__( 'Contact B', 'canuck' ),
				'description'   => esc_html__( 'Use this for your Contact page', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_about_sidebar_a',
				'name'          => esc_html__( 'About A', 'canuck' ),
				'description'   => esc_html__( 'Use this for your About page', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_about_sidebar_b',
				'name'          => esc_html__( 'About B', 'canuck' ),
				'description'   => esc_html__( 'Use this for your About page', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_blog_feature',
				'name'          => esc_html__( 'Blog Page Feature', 'canuck' ),
				'description'   => esc_html__( 'Used when the Blog Page Feature useage option is set to widget.', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_home_feature',
				'name'          => esc_html__( 'Home Page Feature', 'canuck' ),
				'description'   => esc_html__( 'Used when the Home Page Feature useage option is set to widget.', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_home_section1_sidebar',
				'name'          => esc_html__( 'Home Page Section 1', 'canuck' ),
				'description'   => esc_html__( 'Used when the Home Page Section 1 useage option is set to widget.', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_home_section3_sidebar',
				'name'          => esc_html__( 'Home Page Section 3', 'canuck' ),
				'description'   => esc_html__( 'Used when the Home Page Section 3 useage option is set to widget.', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_home_section5_sidebar',
				'name'          => esc_html__( 'Home Page Section 5', 'canuck' ),
				'description'   => esc_html__( 'Used when the Home Page Section 5 useage option is set to widget.', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_home_section7_sidebar',
				'name'          => esc_html__( 'Home Page Section 7', 'canuck' ),
				'description'   => esc_html__( 'Used when the Home Page Section 7 useage option is set to widget.', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_home_section10_sidebar',
				'name'          => esc_html__( 'Home Page Section 10', 'canuck' ),
				'description'   => esc_html__( 'Used when the Home Page Section 10 useage option is set to widget.', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_home_section11_sidebar',
				'name'          => esc_html__( 'Home Page Section 11', 'canuck' ),
				'description'   => esc_html__( 'Used when the Home Page Section 11 useage option is set to widget.', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_footer_a_sidebar',
				'name'          => esc_html__( 'Footer-A', 'canuck' ),
				'description'   => esc_html__( 'First column in footer', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_footer_b_sidebar',
				'name'          => esc_html__( 'Footer-B', 'canuck' ),
				'description'   => esc_html__( 'Second column in footer', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_footer_c_sidebar',
				'name'          => esc_html__( 'Footer-C', 'canuck' ),
				'description'   => esc_html__( 'Third column in footer', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_footer_d_sidebar',
				'name'          => esc_html__( 'Footer-D', 'canuck' ),
				'description'   => esc_html__( 'Fourth column in footer', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_sidebar_1',
				'name'          => esc_html__( 'Sidebar 1', 'canuck' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_sidebar_2',
				'name'          => esc_html__( 'Sidebar 2', 'canuck' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_sidebar_3',
				'name'          => esc_html__( 'Sidebar 3', 'canuck' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_sidebar_4',
				'name'          => esc_html__( 'Sidebar 4', 'canuck' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_sidebar_5',
				'name'          => esc_html__( 'Sidebar 5', 'canuck' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuck_sidebar_6',
				'name'          => esc_html__( 'Sidebar 6', 'canuck' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		if ( class_exists( 'WooCommerce' ) ) {
			register_sidebar(
				array(
					'id'            => 'canuck_woo_sidebar_a',
					'name'          => esc_html__( 'WooCommerce Sidebar a', 'canuck' ),
					'description'   => esc_html__( 'Use this side bar for the Woo Commerce Shop Page', 'canuck' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
				)
			);
			register_sidebar(
				array(
					'id'            => 'canuck_woo_sidebar_b',
					'name'          => esc_html__( 'WooCommerce Sidebar b', 'canuck' ),
					'description'   => esc_html__( 'Use this side bar for the Woo Commerce Shop Page', 'canuck' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
				)
			);
		}
	}
	add_action( 'widgets_init', 'canuck_register_sidebars' );
}// End if().

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function canuck_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
	var t, e = location.hash.substring(1);
	/^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())}, !1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'canuck_skip_link_focus_fix' );
