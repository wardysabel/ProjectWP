<?php
/**
 * Bassist customization 
 *
 * @package Bassist
 * @since Bassist 1.0.0
 */

/**
 * Implement Customizer additions and adjustments.
 *
 * @since Bassist 1.0.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */

function bassist_customize_register ($wp_customize) {

	$blog_navigation_array = array(
		'navigation'	=> __( 'Navigation', 'bassist' ),
		'pagination'	=> __( 'Pagination', 'bassist' ),
	);

/**
* Removes the control for displaying or not the header text and adds the posibility of displaying the site title and tagline separately. 
**/

// ===============================
$wp_customize->remove_control('display_header_text');

//===============================
$wp_customize->add_setting('bassist_theme_options[show_site_title]', array(
	'default'			=> 1,
	'sanitize_callback'	=> 'absint',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
));

$wp_customize->add_control( 'show_site_title', array(
	'label'		=> __('Display Site Title', 'bassist'),
	'section'	=> 'title_tagline',
	'settings'	=> 'bassist_theme_options[show_site_title]',
	'type'		=> 'checkbox',
));
//===============================
$wp_customize->add_setting( 'bassist_theme_options[show_site_description]', array(
	'default'			=> 1,
	'sanitize_callback'	=> 'absint',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
));

$wp_customize->add_control('show_site_description', array(
	'label'		=> __('Display Tagline', 'bassist'),
	'section'	=> 'title_tagline',
	'settings'	=> 'bassist_theme_options[show_site_description]',
	'type'		=> 'checkbox',
));

// ==============================
// == Colors Section ==
// ==============================
$wp_customize->add_setting( 'bassist_theme_options[site_description_color]', array(
	'default'			=> '#111111',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'site_description_color', array(
	'label'		=> __('Site Description Color', 'bassist'),
	'section'	=> 'colors',
	'settings'	=> 'bassist_theme_options[site_description_color]',
)));

// =============================
// == Front Page Panel ==
// =============================
$wp_customize->add_panel( 'front_page', array(
	'title'			=> __( 'Front Page Settings', 'bassist'),
	'priority'		=> 125,
	'description'	=> __( 'In this section you can choose several settings of the Front Page.', 'bassist'),
) );

// =============================
// == About Section ==
// =============================
$wp_customize->add_section( 'about_section', array(
	'title'			=> __( 'About Section Settings', 'bassist'),
	'description'	=> __( 'In this section you can choose several settings of the About Section.', 'bassist'),
	'panel'			=> 'front_page',
) );

//===============================
$wp_customize->add_setting( 'bassist_theme_options[about_page]', array(
	'default'		=> '',
	'sanitize_callback'	=> 'absint',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'about_page', array(
	'label'			=> __('Your About Page', 'bassist'),
	'description'	=> __('Create a page with an introduction about yourself and select it with the dropdown.', 'bassist'),
	'section'		=> 'about_section',
	'settings'		=> 'bassist_theme_options[about_page]',
	'type' => 'dropdown-pages',
	'allow_addition' => true,
));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[about_section_font_size]', array(
	'default'		=> '1.125em',
	'sanitize_callback'	=> 'sanitize_text_field',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'about_section_font_size', array(
	'label'			=> __('Font Size of the About Section', 'bassist'),
	'description'	=> __('Choose the font size in px or em (Ex.: 16px, 1em).', 'bassist'),
	'section'		=> 'about_section',
	'settings'		=> 'bassist_theme_options[about_section_font_size]',
));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[about_section_background_color]', array(
	'default'			=> '#aa0000',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'about_section_background_color', array(
	'label'		=> __('About Section Background Color', 'bassist'),
	'section'	=> 'about_section',
	'settings'	=> 'bassist_theme_options[about_section_background_color]',
)));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[hide_about_section]', array(
	'default'			=> false,
	'sanitize_callback'	=> 'bassist_sanitize_checkbox',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'hide_about_section', array(
	'label'			=> __('Hide About Section', 'bassist'),
	'section'		=> 'about_section',
	'settings'		=> 'bassist_theme_options[hide_about_section]',
	'type'			=> 'checkbox',
));

// =============================
// == Audio Section ==
// =============================
$wp_customize->add_section( 'audio_section', array(
	'title'			=> __( 'Audio Section Settings', 'bassist'),
	'description'	=> __( 'In this section you can choose several settings of the Audio Section.', 'bassist'),
	'panel'			=> 'front_page',
) );

//===============================
$wp_customize->add_setting( 'bassist_theme_options[audio_section_title]', array(
	'default'			=> 'Music',
	'sanitize_callback'	=> 'sanitize_text_field',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'audio_section_title', array(
	'label'			=> __('Title of the Audio Section', 'bassist'),
	'description'	=> __('This section shows your posts with format audio.', 'bassist'),
	'section'		=> 'audio_section',
	'settings'		=> 'bassist_theme_options[audio_section_title]',
));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[audio_section_background_color]', array(
	'default'			=> '#971598',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'audio_section_background_color', array(
	'label'		=> __('Audio Section Background Color', 'bassist'),
	'section'	=> 'audio_section',
	'settings'	=> 'bassist_theme_options[audio_section_background_color]',
)));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[hide_audio_section]', array(
	'default'			=> false,
	'sanitize_callback'	=> 'bassist_sanitize_checkbox',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'hide_audio_section', array(
	'label'			=> __('Hide Audio Section', 'bassist'),
	'section'		=> 'audio_section',
	'settings'		=> 'bassist_theme_options[hide_audio_section]',
	'type'			=> 'checkbox',
));

// =============================
// == Video Section ==
// =============================
$wp_customize->add_section( 'video_section', array(
	'title'			=> __( 'Video Section Settings', 'bassist'),
	'description'	=> __( 'In this section you can choose several settings of the Video Section.', 'bassist'),
	'panel'			=> 'front_page',
) );

//===============================
$wp_customize->add_setting( 'bassist_theme_options[video_section_title]', array(
	'default'			=> 'Videos',
	'sanitize_callback'	=> 'sanitize_text_field',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'video_section_title', array(
	'label'			=> __('Title of the Video Section', 'bassist'),
	'description'	=> __('This section shows your posts with format video.', 'bassist'),
	'section'		=> 'video_section',
	'settings'		=> 'bassist_theme_options[video_section_title]',
));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[video_section_background_color]', array(
	'default'			=> '#1258a8',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'video_section_background_color', array(
	'label'		=> __('Video Section Background Color', 'bassist'),
	'section'	=> 'video_section',
	'settings'	=> 'bassist_theme_options[video_section_background_color]',
)));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[hide_video_section]', array(
	'default'			=> false,
	'sanitize_callback'	=> 'bassist_sanitize_checkbox',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'hide_video_section', array(
	'label'			=> __('Hide Video Section', 'bassist'),
	'section'		=> 'video_section',
	'settings'		=> 'bassist_theme_options[hide_video_section]',
	'type'			=> 'checkbox',
));

// =============================
// == Image Section ==
// =============================
$wp_customize->add_section( 'image_section', array(
	'title'			=> __( 'Image Section Settings', 'bassist'),
	'description'	=> __( 'In this section you can choose several settings of the Image Section.', 'bassist'),
	'panel'			=> 'front_page',
) );

//===============================
$wp_customize->add_setting( 'bassist_theme_options[image_section_title]', array(
	'default'			=> 'Images',
	'sanitize_callback'	=> 'sanitize_text_field',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'image_section_title', array(
	'label'			=> __('Title of the Image Section', 'bassist'),
	'description'	=> __('This section shows your posts with format image.', 'bassist'),
	'section'		=> 'image_section',
	'settings'		=> 'bassist_theme_options[image_section_title]',
));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[image_section_background_color]', array(
	'default'			=> '#004f6f',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'image_section_background_color', array(
	'label'		=> __('Image Section Background Color', 'bassist'),
	'section'	=> 'image_section',
	'settings'	=> 'bassist_theme_options[image_section_background_color]',
)));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[hide_image_section]', array(
	'default'			=> false,
	'sanitize_callback'	=> 'bassist_sanitize_checkbox',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'hide_image_section', array(
	'label'			=> __('Hide Image Section', 'bassist'),
	'section'		=> 'image_section',
	'settings'		=> 'bassist_theme_options[hide_image_section]',
	'type'			=> 'checkbox',
));

// =============================
// == Quotes Section ==
// =============================
$wp_customize->add_section( 'quote_section', array(
	'title'			=> __( 'Quotes Section Settings', 'bassist'),
	'description'	=> __( 'In this section you can choose several settings of the Quotes Section.', 'bassist'),
	'panel'			=> 'front_page',
) );

//===============================
$wp_customize->add_setting( 'bassist_theme_options[quote_section_title]', array(
	'default'			=> 'Quotes',
	'sanitize_callback'	=> 'sanitize_text_field',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'quote_section_title', array(
	'label'			=> __('Title of the Quotes Section', 'bassist'),
	'description'	=> __('This section shows your posts with format quote.', 'bassist'),
	'section'		=> 'quote_section',
	'settings'		=> 'bassist_theme_options[quote_section_title]',
));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[quote_section_background_color]', array(
	'default'			=> '#078587',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'quote_section_background_color', array(
	'label'		=> __('Quotes Section Background Color', 'bassist'),
	'section'	=> 'quote_section',
	'settings'	=> 'bassist_theme_options[quote_section_background_color]',
)));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[hide_quote_section]', array(
	'default'			=> false,
	'sanitize_callback'	=> 'bassist_sanitize_checkbox',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'hide_quote_section', array(
	'label'			=> __('Hide Quotes Section', 'bassist'),
	'section'		=> 'quote_section',
	'settings'		=> 'bassist_theme_options[hide_quote_section]',
	'type'			=> 'checkbox',
));

// =============================
// == Parallax Section ==
// ============================= 
$wp_customize->add_section( 'parallax', array(
	'title'			=> __( 'Parallax Settings', 'bassist' ),
	'description'	=> __( 'In this section you can add four parallax image blocks to the Front Page. If the image is left empty, no parallax block is created.', 'bassist'),
	'panel'			=> 'front_page',
) );

//===============================
$wp_customize->add_setting( 'bassist_theme_options[parallax_background_image_1]', array(
	'default'			=> '',
	'sanitize_callback'	=> 'esc_url_raw',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option', 
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'parallax_background_image_1', array(
	'label'		=> __('Parallax 1 Background Image', 'bassist'),
	'section'	=> 'parallax',
	'settings'	=> 'bassist_theme_options[parallax_background_image_1]',
)));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[parallax_background_image_2]', array(
	'default'			=> '',
	'sanitize_callback'	=> 'esc_url_raw',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option', 
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'parallax_background_image_2', array(
	'label'		=> __('Parallax 2 Background Image', 'bassist'),
	'section'	=> 'parallax',
	'settings'	=> 'bassist_theme_options[parallax_background_image_2]',
)));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[parallax_background_image_3]', array(
	'default'			=> '',
	'sanitize_callback'	=> 'esc_url_raw',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option', 
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'parallax_background_image_3', array(
	'label'		=> __('Parallax 3 Background Image', 'bassist'),
	'section'	=> 'parallax',
	'settings'	=> 'bassist_theme_options[parallax_background_image_3]',
)));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[parallax_background_image_4]', array(
	'default'			=> '',
	'sanitize_callback'	=> 'esc_url_raw',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option', 
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'parallax_background_image_4', array(
	'label'		=> __('Parallax 4 Background Image', 'bassist'),
	'section'	=> 'parallax',
	'settings'	=> 'bassist_theme_options[parallax_background_image_4]',
)));

// =============================
// ==     Contact Section     ==
// ============================= 
$wp_customize->add_section( 'contact', array(
	'title'		=> __( 'Contact Section Settings', 'bassist' ),
	'panel'		=> 'front_page',
) );

//===============================
$wp_customize->add_setting( 'bassist_theme_options[contact_page]', array(
	'default'			=> '',
	'sanitize_callback'	=> 'absint',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'contact_page', array(
	'label'			=> __('Your Contact Page', 'bassist'),
	'description'	=> __('Install the contact plugin of your preference. Create a page with a title like Contact or Contact me, write the shortcode given by the Contact plugin in the content of the page and select it with the dropdown.', 'bassist'),
	'section'		=> 'contact',
	'settings'		=> 'bassist_theme_options[contact_page]',
	'type' => 'dropdown-pages',
	'allow_addition' => true,
));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[contact_section_background_color]', array(
	'default'			=> '#02cc94',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'contact_section_background_color', array(
	'label'		=> __('Contact Section Background Color', 'bassist'),
	'section'	=> 'contact',
	'settings'	=> 'bassist_theme_options[contact_section_background_color]',
)));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[contact_section_background_image]', array(
	'default'			=> '',
	'sanitize_callback'	=> 'esc_url_raw',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option', 
));

$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'contact_section_background_image', array(
	'label'		=> __('Contact Section Background Image', 'bassist'),
	'section'	=> 'contact',
	'settings'	=> 'bassist_theme_options[contact_section_background_image]',
)));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[contact_section_text_color]', array(
	'default'			=> '#000000',
	'sanitize_callback'	=> 'sanitize_hex_color',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'contact_section_text_color', array(
	'label'		=> __('Contact Section Text Color', 'bassist'),
	'section'	=> 'contact',
	'settings'	=> 'bassist_theme_options[contact_section_text_color]',
)));


//===============================
$wp_customize->add_setting( 'bassist_theme_options[hide_contact_section]', array(
	'default'			=> false,
	'sanitize_callback'	=> 'bassist_sanitize_checkbox',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'hide_contact_section', array(
	'label'			=> __('Hide Contact Section', 'bassist'),
	'section'		=> 'contact',
	'settings'		=> 'bassist_theme_options[hide_contact_section]',
	'type'			=> 'checkbox',
));

// =============================
// == Theme's Options ==
// =============================
$wp_customize->add_panel( 'theme_options', array(
	'title'				=> __( 'Other Theme Options', 'bassist'),
	'priority'			=> 126,
	'capability'		=> 'edit_theme_options',
	'theme_supports'	=> '',	
));

// =============================
// == Special Pages Section ==
// =============================
$wp_customize->add_section( 'special_pages', array(
	'title'			=> __( 'Special Pages', 'bassist' ),
	'description'	=> __( 'In this section you can select the pages made with the special page templates, so they can be used across the theme. Select the pages with the dropdown menu.', 'bassist'),
	'panel'			=> 'theme_options',
) );
//===============================
$wp_customize->add_setting( 'bassist_theme_options[contributors_page]', array(
	'default'			=> '',
	'sanitize_callback'	=> 'absint',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'contributors_page', array(
	'label'		=> __('Your Contributors Page', 'bassist'),
	'section'	=> 'special_pages',
	'settings'	=> 'bassist_theme_options[contributors_page]',
	'type' => 'dropdown-pages',
	'allow_addition' => true,
));

//===============================
$wp_customize->add_setting( 'bassist_theme_options[featured_articles_page]', array(
	'default'			=> '',
	'sanitize_callback'	=> 'absint',
	'type'				=> 'option',
	'capability'		=> 'edit_theme_options',
) );

$wp_customize->add_control( 'featured_articles_page', array(
	'label'		=> __('Your Featured Articles Page', 'bassist'),
	'section'	=> 'special_pages',
	'settings'	=> 'bassist_theme_options[featured_articles_page]',
	'type' => 'dropdown-pages',
	'allow_addition' => true,
));

// =============================
// == Blog Settings ==
// ============================= 
$wp_customize->add_section( 'blog_settings', array(
	'title'			=> __( 'Blog Settings', 'bassist' ),
	'description'	=> __( 'In this section you can choose several blog options.', 'bassist'),
	'panel'			=> 'theme_options',

) );
//===============================
 $wp_customize->add_setting('bassist_theme_options[front_page_entry_meta]', array(
	'sanitize_callback'	=> 'bassist_sanitize_checkbox',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
	'default'			=> false, 
));

$wp_customize->add_control( 'front_page_entry_meta', array(
	'settings'	=> 'bassist_theme_options[front_page_entry_meta]',
	'label'		=> __('Hide the post meta information on the front page.','bassist'),
	'section'	=> 'blog_settings',
	'type'		=> 'checkbox',
));

//===============================
 $wp_customize->add_setting('bassist_theme_options[blog_page_entry_meta]', array(
	'sanitize_callback'	=> 'bassist_sanitize_checkbox',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
	'default'			=> false, 
));

$wp_customize->add_control( 'blog_page_entry_meta', array(
	'settings'	=> 'bassist_theme_options[blog_page_entry_meta]',
	'label'		=> __('Hide the post meta information on the blog page.','bassist'),
	'section'	=> 'blog_settings',
	'type'		=> 'checkbox',
));

// =============================
// == Navigation Settings ==
// ============================= 
$wp_customize->add_section( 'navigation_settings', array(
	'title'			=> __( 'Navigation Settings', 'bassist' ),
	'description'	=> __( 'In this section you can choose between navigation or pagination in multiple view pages.', 'bassist'),
	'panel'			=> 'theme_options',

) );
//===============================
 $wp_customize->add_setting('bassist_theme_options[blog_navigation]', array(
	'sanitize_callback'	=> 'bassist_sanitize_blog_nav',
	'capability'		=> 'edit_theme_options',
	'type'				=> 'option',
	'default'			=> 'navigation', 
));

$wp_customize->add_control( 'blog_navigation', array(
	'settings'	=> 'bassist_theme_options[blog_navigation]',
	'label'		=> __('Choose your preferred mode of navigating between old and new articles','bassist'),
	'section'	=> 'navigation_settings',
	'type'		=> 'radio',
	'choices'	=> $blog_navigation_array,
));

}

add_action( 'customize_register', 'bassist_customize_register' );

/**
* Theme's Custom Styling
*/

function bassist_theme_custom_styling() {
	$bassist_theme_options = bassist_get_options( 'bassist_theme_options' );
	
	$parallax_background_image_1 = $bassist_theme_options['parallax_background_image_1'];
	$parallax_background_image_2 = $bassist_theme_options['parallax_background_image_2'];
	$parallax_background_image_3 = $bassist_theme_options['parallax_background_image_3'];
	$parallax_background_image_4 = $bassist_theme_options['parallax_background_image_4'];

	$about_section_font_size = $bassist_theme_options['about_section_font_size'];
	$about_section_background_color = $bassist_theme_options['about_section_background_color'];

	$audio_section_background_color = $bassist_theme_options['audio_section_background_color'];
	$video_section_background_color = $bassist_theme_options['video_section_background_color'];
	$image_section_background_color = $bassist_theme_options['image_section_background_color'];
	$quote_section_background_color = $bassist_theme_options['quote_section_background_color'];
	
	$contact_section_background_color = $bassist_theme_options['contact_section_background_color'];
	$contact_section_background_image = $bassist_theme_options['contact_section_background_image'];
	$contact_section_text_color = $bassist_theme_options['contact_section_text_color'];

	$front_page_entry_meta = $bassist_theme_options['front_page_entry_meta'];
	$blog_page_entry_meta = $bassist_theme_options['blog_page_entry_meta'];

	$css = '';

	if ( is_front_page() && true === $front_page_entry_meta )
	$css .= '.front-page .entry-meta { position: absolute; left: -9999px; display: none}' . "\n";

	if ( is_home() && true === $blog_page_entry_meta )	
	$css .= '.entry-meta { position: absolute; left: -9999px;}' . "\n";

	if ( $parallax_background_image_1 )
	$css .= '.parallax .bg__1 { background-image: url(' . $parallax_background_image_1 . ')}' . "\n";

	if ( $parallax_background_image_2 )
	$css .= '.parallax .bg__2 { background-image: url(' . $parallax_background_image_2 . ')}' . "\n";

	if ( $parallax_background_image_3 )
	$css .= '.parallax .bg__3 { background-image: url(' . $parallax_background_image_3 . ')}' . "\n";

	if ( $parallax_background_image_4 )
	$css .= '.parallax .bg__4 { background-image: url(' . $parallax_background_image_4 . ')}' . "\n";

	if ( $about_section_font_size )
	$css .= '.about-section p { font-size: ' . $about_section_font_size . '}' . "\n";

	if ( $about_section_background_color )
	$css .= '.about-section { background-color: ' . $about_section_background_color . '}' . "\n";

	if ( bassist_relative_luminance($about_section_background_color) <= 0.324 ) {
	$css .= '.about-section { color: #eee}' . "\n";
	}

	if ( $audio_section_background_color )
	$css .= '.audio-format-section { background-color: ' . $audio_section_background_color . '}' . "\n";

	if ( bassist_relative_luminance($audio_section_background_color) <= 0.324 ) {
	$css .= '.audio-format-section, .audio-posts .entry-title a, .audio-posts .entry-meta, .audio-posts .entry-meta a, .audio-posts .wp-block-audio figcaption { color: #eee}' . "\n";
	$css .= '.audio-posts .entry-meta a:hover, .audio-posts .entry-meta a:focus { color: #ccc}' . "\n";
	$css .= '.audio-posts .entry-title a:hover, .audio-posts .entry-title a:focus { color: #ccc}' . "\n";
	}

	if ( $video_section_background_color )
	$css .= '.video-format-section { background-color: ' . $video_section_background_color . '}' . "\n";

	if ( bassist_relative_luminance($video_section_background_color) <= 0.324 ) {
	$css .= '.video-format-section, .video-posts .entry-title a, .video-posts .entry-meta, .video-posts .entry-meta a { color: #ccc}' . "\n";
	$css .= '.video-posts .entry-meta a:hover, .video-posts .entry-meta a:focus { color: #fff}' . "\n";
	$css .= '.video-posts .entry-title a:hover, .video-posts .entry-title a:focus { color: #fff}' . "\n";
}

	if ( $image_section_background_color )
	$css .= '.image-format-section { background-color: ' . $image_section_background_color . '}' . "\n";

	if ( bassist_relative_luminance( $image_section_background_color ) <= 0.324 ) {
	$css .= '.image-format-section, .image-posts .entry-title a, .image-posts .entry-meta, .image-posts .entry-meta a, .image-posts .wp-caption .wp-caption-text, .image-posts .wp-block-image figcaption { color: #ccc}' . "\n";
	$css .= '.image-posts .entry-meta a:hover, .image-posts .entry-meta a:focus { color: #eee}' . "\n";
	$css .= '.image-posts .entry-title a:hover, .image-posts .entry-title a:focus { color: #eee}' . "\n";
	}

	if ( $quote_section_background_color )
	$css .= '.quote-format-section { background-color: ' . $quote_section_background_color . '}' . "\n";

	if ( bassist_relative_luminance( $quote_section_background_color ) <= 0.324 ) {
		$css .= '.quote-format-section, .quote-posts .entry-title a, .quote-posts .entry-meta, .quote-posts .entry-meta a { color: #ccc}' . "\n";
		$css .= '.quote-posts .wp-block-quote, .quote-posts blockquote { color: #eee}' . "\n";
		$css .= '.quote-posts .wp-block-quote cite, .quote-posts blockquote cite, .quote-posts blockquote cite a { color: #ddd}' . "\n";
		$css .= '.quote-posts .entry-meta a:hover, .quote-posts .entry-meta a:focus { color: #eee}' . "\n";
		$css .= '.quote-posts .entry-title a:hover, .quote-posts .entry-title a:focus { color: #eee}' . "\n";
		$css .= '.quote-posts blockquote cite a:hover, .quote-posts blockquote cite a:focus { color: #eee}' . "\n";
	}

	if ( $contact_section_background_color )
	$css .= '.contact-section { background-color: ' . $contact_section_background_color . '}' . "\n";

	if ( bassist_relative_luminance( $contact_section_background_color ) <= 0.324 )
	$css .= '.contact-section { color: #ccc}' . "\n";

	if ( $contact_section_background_image ) {
		$css .= '.contact-section { background-image: url(' . $contact_section_background_image . ')}' . "\n";
		$css .= '.contact-section { color: ' . $contact_section_text_color . '}' . "\n";
	}

	// CSS styles
	if ( isset( $css ) && $css != '' ) {
		$css = strip_tags( $css );
		$css = "<!--Custom Styling-->\n<style media=\"screen\" type=\"text/css\">\n" . esc_html($css) . "</style>\n";
		echo $css;
	}
}
add_action('wp_head','bassist_theme_custom_styling');


function bassist_sanitize_checkbox( $input ) {
	if ( $input ) {
		$output = true;
	} else {
		$output = false;
	}
	return $output;
}

/**
 * Sanitization for navigation choice
 */
function bassist_sanitize_blog_nav( $value ) {
	$recognized = bassist_blog_nav();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'bassist_blog_nav', current( $recognized ) );
}

function bassist_blog_nav() {
	$default = array(
		'navigation'	=> 'navigation',
		'pagination'	=> 'pagination',
	);
	return apply_filters( 'bassist_blog_nav', $default );
}

/**
 * Theme defaults
 */
function bassist_get_option_defaults() {
	$defaults = array(
		'show_site_title'	=> 1,
		'show_site_description'	=> 1,
		'site_description_color' => '#111111',
		'front_page_entry_meta' => 0,
		'blog_page_entry_meta' => 0,
		'about_section_font_size' => '1.125em',
		'about_section_background_color' => '#aa0000',
		'hide_about_section' => false,
		'audio_section_background_color' => '#971598',
		'audio_section_title' => 'Music',
		'hide_audio_section' => false,
		'video_section_background_color' => '#1258a8',
		'video_section_title' => 'Videos',
		'hide_video_section' => false,
		'image_section_background_color' => '#004f6f',
		'image_section_title' => 'Images',
		'hide_image_section' => false,
		'quote_section_background_color' => '#078587',
		'quote_section_title' => 'Quotes',
		'hide_quote_section' => false,
		'about_page' => '',
		'contributors_page' => '',
		'featured_articles_page' => '',
		'blog_navigation' => 'navigation',	
		'parallax_background_image_1' => '',
		'parallax_background_image_2' => '',
		'parallax_background_image_3' => '',
		'parallax_background_image_4' => '',
		'contact_section_background_color' => '#02cc94',
		'contact_section_background_image' => '',
		'contact_section_text_color' => '#000000',
		'contact_page' => '',
		'hide_contact_section' => false,
	);
	return apply_filters( 'bassist_get_option_defaults', $defaults );
}

function bassist_get_options() {
	// Options API
	return wp_parse_args( 
		get_option( 'bassist_theme_options', array() ), 
		bassist_get_option_defaults() 
	);
}

