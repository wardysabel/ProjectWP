<?php

function iamaze_customizer_config() {
	

    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'i-amaze' ),
        'background-image' => __( 'Background Image', 'i-amaze' ),
        'no-repeat' => __( 'No Repeat', 'i-amaze' ),
        'repeat-all' => __( 'Repeat All', 'i-amaze' ),
        'repeat-x' => __( 'Repeat Horizontally', 'i-amaze' ),
        'repeat-y' => __( 'Repeat Vertically', 'i-amaze' ),
        'inherit' => __( 'Inherit', 'i-amaze' ),
        'background-repeat' => __( 'Background Repeat', 'i-amaze' ),
        'cover' => __( 'Cover', 'i-amaze' ),
        'contain' => __( 'Contain', 'i-amaze' ),
        'background-size' => __( 'Background Size', 'i-amaze' ),
        'fixed' => __( 'Fixed', 'i-amaze' ),
        'scroll' => __( 'Scroll', 'i-amaze' ),
        'background-attachment' => __( 'Background Attachment', 'i-amaze' ),
        'left-top' => __( 'Left Top', 'i-amaze' ),
        'left-center' => __( 'Left Center', 'i-amaze' ),
        'left-bottom' => __( 'Left Bottom', 'i-amaze' ),
        'right-top' => __( 'Right Top', 'i-amaze' ),
        'right-center' => __( 'Right Center', 'i-amaze' ),
        'right-bottom' => __( 'Right Bottom', 'i-amaze' ),
        'center-top' => __( 'Center Top', 'i-amaze' ),
        'center-center' => __( 'Center Center', 'i-amaze' ),
        'center-bottom' => __( 'Center Bottom', 'i-amaze' ),
        'background-position' => __( 'Background Position', 'i-amaze' ),
        'background-opacity' => __( 'Background Opacity', 'i-amaze' ),
        'ON' => __( 'ON', 'i-amaze' ),
        'OFF' => __( 'OFF', 'i-amaze' ),
        'all' => __( 'All', 'i-amaze' ),
        'cyrillic' => __( 'Cyrillic', 'i-amaze' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'i-amaze' ),
        'devanagari' => __( 'Devanagari', 'i-amaze' ),
        'greek' => __( 'Greek', 'i-amaze' ),
        'greek-ext' => __( 'Greek Extended', 'i-amaze' ),
        'khmer' => __( 'Khmer', 'i-amaze' ),
        'latin' => __( 'Latin', 'i-amaze' ),
        'latin-ext' => __( 'Latin Extended', 'i-amaze' ),
        'vietnamese' => __( 'Vietnamese', 'i-amaze' ),
        'serif' => _x( 'Serif', 'font style', 'i-amaze' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'i-amaze' ),
        'monospace' => _x( 'Monospace', 'font style', 'i-amaze' ),
    );	

	$args = array(
  
        // Change the logo image. (URL) Point this to the path of the logo file in your theme directory
                // The developer recommends an image size of about 250 x 250
        'logo_image'   => get_template_directory_uri() . '/images/logo.png',
  
        // The color of active menu items, help bullets etc.
        'color_active' => '#95c837',
		
		// Color used on slider controls and image selects
		//'color_accent' => '#dd9933',
		
		// The generic background color
		//'color_back' => '#f7f7f7',
	
        // Color used for secondary elements and desable/inactive controls
        'color_light'  => '#e7e7e7',
  
        // Color used for button-set controls and other elements
        'color_select' => '#34495e',
		 
        
        // For the parameter here, use the handle of your stylesheet you use in wp_enqueue
        'stylesheet_id' => 'customize-styles', 
		
        // Only use this if you are bundling the plugin with your theme (see above)
        //'url_path'     => get_template_directory_uri() . '/inc/kirki/',

        'textdomain'   => 'i-amaze',
		
        'i18n'         => $strings,		
		
		
	);
	
	if ( !class_exists( 'Kirki' ) ) {
		$args['url_path'] = get_template_directory_uri() . '/inc/kirki/';
	}

	
	
	return $args;
}
add_filter( 'kirki/config', 'iamaze_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'iamaze_add_panels_and_sections' ); 
function iamaze_add_panels_and_sections( $wp_customize ) {
	
	/*
	* Add panels
	*/
	
	$wp_customize->add_panel( 'slider', array(
		'priority'    => 140,
		'title'       => __( 'Slider', 'i-amaze' ),
		'description' => __( 'Slides details', 'i-amaze' ),
	));
	
	$wp_customize->add_panel( 'rmenu', array(
		'priority'    => 130,
		'title'       => __( 'Responsive Menu', 'i-amaze' ),
		'description' => __( 'Responsive Menu Options', 'i-amaze' ),
	));	

    /**
     * Add Sections
     */
    $wp_customize->add_section('basic', array(
        'title'    => __('Basic Settings', 'i-amaze'),
        'description' => '',
        'priority' => 130,
    ));

	$wp_customize->add_section( 'topbar', array(
		'priority'    => 131,
		'title'       => __( 'Topbar Options', 'i-amaze' ),
		'description' => __( 'Topbar Options', 'i-amaze' ),
	));	
	
	$wp_customize->add_section( 'header', array(
		'priority'    => 132,
		'title'       => __( 'Header Options', 'i-amaze' ),
		'description' => __( 'Header Options', 'i-amaze' ),
	));			
	
	$wp_customize->add_section('slides', array(
        'title'    => __('Slides', 'i-amaze'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 140,
    ));		
	
    $wp_customize->add_section('layout', array(
        'title'    => __('Layout Options', 'i-amaze'),
        'description' => '',
        'priority' => 130,
    ));	
	
    $wp_customize->add_section('social', array(
        'title'    => __('Social Links', 'i-amaze'),
        'description' => __('Insert full URL of your social link including &#34;http://&#34; replacing #, Empty the fileld if not using the link.', 'i-amaze'),
        'priority' => 130,
    ));		
	
    $wp_customize->add_section('blogpage', array(
        'title'    => __('Default Blog/Front Page', 'i-amaze'),
        'description' => '',
        'priority' => 130,
    ));	
	
	// slider sections
	
	$wp_customize->add_section('slidersettings', array(
        'title'    => __('Slider Settings', 'i-amaze'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 140,
    ));	
	
	$wp_customize->add_section('slideradvanced', array(
        'title'    => __('Advanced Settings', 'i-amaze'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 141,
    ));			
	
	// promo sections
	
	$wp_customize->add_section('nxpromo', array(
        'title'    => __('More About i-amaze', 'i-amaze'),
        'description' => '',
        'priority' => 200,
    ));
	
	$wp_customize->add_section('demosetup', array(
        'title'    => __('Ready To Use Layouts', 'i-amaze'),
        'description' => '',
        'priority' => 199,
    ));		
	
	// Responsive Menu sections
	
	$wp_customize->add_section('rmgeneral', array(
        'title'    => __('General Options', 'i-amaze'),
        'panel' => 'rmenu',		
        'description' => '',
        'priority' => 170,
    ));	
	
    $wp_customize->add_section('rmsettings', array(
        'title'    => __('Menu Appearance', 'i-amaze'),
        'panel' => 'rmenu',
        'description' => '',
        'priority' => 180,
    ));	
	
    $wp_customize->add_section('fonts', array(
        'title'    => __('Fonts', 'i-amaze'),
        'description' => '',
        'priority' => 199,
    ));

	// WooCommerce Settings
    $wp_customize->add_section('woocomm', array(
        'title'    => __('WooCommerce Theme Options', 'i-amaze'),
        'description' => '',
        'priority' => 191,
    ));		
	
}


function iamaze_custom_setting( $controls ) {

	

	/**************************************
	Topbar section
	***************************************/	
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'wide_topbar',
		'label'       => __( 'Turn ON Wide Topbar', 'i-amaze' ),
		'description' => __( 'Increase topbar height', 'i-amaze' ),
		'section'     => 'topbar',
		'default'     => 0,
		'priority'    => 1,
	);
		
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'top_phone',
        'label'    => __( 'Phone Number', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => '1-000-123-4567',
        'priority' => 1,
		'description' => __( 'Phone number that appears on the topbar. Do not use space or + sign for clickable number.', 'i-amaze' ),
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'top_email',
        'label'    => __( 'Email Address', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => 'email@example.com',
        'priority' => 1,
		'description' => __( 'Email Id that appears on top bar.', 'i-amaze' ),		
    );
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'clickable_phnem',
		'label'       => __( 'Clickable Phone And Email', 'i-amaze' ),
		'description' => __( 'Phone will open in WhatsApp and email in email client.', 'i-amaze' ),
		'section'     => 'topbar',
		'default'     => 0,
		'priority'    => 1,
	);
		
	// social links
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_facebook',
        'label'    => __( 'Facebook', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => esc_url('https://www.facebook.com/'),
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_twitter',
        'label'    => __( 'Twitter', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => esc_url('https://www.twitter.com/'),
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_flickr',
        'label'    => __( 'Flickr', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => '',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_feed',
        'label'    => __( 'RSS', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => '',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_instagram',
        'label'    => __( 'Instagram', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => esc_url('https://www.instagram.com/'),
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_googleplus',
        'label'    => __( 'Google Plus', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => '',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_youtube',
        'label'    => __( 'YouTube', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => esc_url('https://www.youtube.com/'),
        'priority' => 1,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_pinterest',
        'label'    => __( 'Pinterest', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => '',
        'priority' => 1,
    );	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'itrans_social_linkedin',
        'label'    => __( 'Linkedin', 'i-amaze' ),
        'section'  => 'topbar',
        'default'  => '',
        'priority' => 1,
    );		

	/**************************************
	Header section
	***************************************/
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'show_search',
		'label'       => __( 'Show Search', 'i-amaze' ),
		'description' => __( 'Show search option on main navigation', 'i-amaze' ),
		'section'     => 'header',
		'default'     => 1,
		'priority'    => 3,
	);
	
	/********* Header ends ********/
		
	
	$controls[] = array(
		'type'        => 'upload',
		'settings'     => 'logo-trans',
		'label'       => __( 'Reverse Transparent logo', 'i-amaze' ),
		'description' => __( 'Transparent logo for the fullscreen slider and dark background. Width 280px, height 72px max.', 'i-amaze' ),
        'section'  => 'title_tagline',
		'default'     => '',		
		'priority'    => 3,
	);
	
	$controls[] = array(
		'type'        => 'color',
		'settings'     => 'primary_color',
		'label'       => __( 'Primary Color', 'i-amaze' ),
		'description' => __( 'Choose your theme color', 'i-amaze' ),
		'section'     => 'colors',
		'default'     => '#e57e26',
		'priority'    => 1,
	);	
	
	$controls[] = array(
		'type'        => 'radio-image',
		'settings'     => 'blog_layout',
		'label'       => __( 'Blog Posts Layout', 'i-amaze' ),
		'description' => __( '(Choose blog posts layout (one column/two column)', 'i-amaze' ),
		'section'     => 'layout',
		'default'     => '2',
		'priority'    => 2,
		'choices'     => array(
			'1' => get_template_directory_uri() . '/images/onecol.png',
			'2' => get_template_directory_uri() . '/images/twocol.png',
		),
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'show_full',
		'label'       => __( 'Show Full Content', 'i-amaze' ),
		'description' => __( 'Show full content on blog pages', 'i-amaze' ),
		'section'     => 'layout',
		'default'     => 0,
		'priority'    => 3,
	);		
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'wide_layout',
		'label'       => __( 'Wide layout', 'i-amaze' ),
		'description' => __( 'Check to have wide layout', 'i-amaze' ),
		'section'     => 'layout',
		'default'     => 1,
		'priority'    => 4,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'pre_loader',
		'label'       => __( 'Turn ON Page Preloader', 'i-amaze' ),
		'description' => __( 'Turn ON/OFF loding animation before page load', 'i-amaze' ),
		'section'     => 'layout',
		'default'     => 1,		
		'priority'    => 5,
	);		
	
	
	// Slider

	$controls[] = array(
		'type'        => 'slider',
		'settings'     => 'itrans_sliderspeed',
		'label'       => __( 'Slide Duration', 'i-amaze' ),
		'description' => __( 'Slide visibility in second', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => 6,
		'priority'    => 1,
		'choices'     => array(
			'min'  => 1,
			'max'  => 30,
			'step' => 1
		),
	);

	// Parallax Effect
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'itrans_sliderparallax',
		'label'       => __( 'Parallax Effect', 'i-amaze' ),
		'description' => __( 'Turn ON/OFF Parallax Effect', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => 1,			
		'priority'    => 4,
	);
	/*
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_overlay',
		'label'       => __( 'Turn Off Slider Overlay Layer', 'i-amaze' ),
		'description' => __( 'Turn Off/on the dotted slider overlay layer', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => 1,
		'priority'    => 4,
	);	
	*/
	$controls[] = array(
		'type'        => 'select',
		'settings'     => 'slider_transition',
		'label'       => __( 'Transition Effect', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => 'fadeUp',
		'priority'    => 2,
		'choices'     => array(
			'default' 		=> 'Default',
			'fade' 			=> 'Fade',
			'backSlide' 	=> 'Back Slide',
			'goDown' 		=> 'Go Down',
			'fadeUp' 		=> 'Fade Up',			
		),
		'priority'    => 4,			
	);	
	$controls[] = array(
		'type'        => 'radio-buttonset',
		'settings'     => 'slider_overlay',
		'label'       => __( 'Slider Overlay Layer', 'i-amaze' ),
		'section'     => 'slidersettings',
		'choices'     => array(
							'0' => esc_html__( 'None', 'i-amaze' ),	
							'1' => esc_html__( 'Pattern', 'i-amaze' ),
							'2' => esc_html__( 'colored', 'i-amaze' ),
							'3' => esc_html__( 'gradient', 'i-amaze' ),
		),		
		'default'     => '0',
		'priority'    => 4,				
	);
	$controls[] = array(
		'type'        	=> 'color',
		'settings'     	=> 'slider_overlay_color',
		'label'       	=> __( 'Overlay Color', 'i-amaze' ),
		'section'     	=> 'slidersettings',
		'default'     	=> 'rgba(0,0,0,.48)',
		'priority'    	=> 4,
		'choices'     	=> array(
							'alpha' => true,
						),		
		/*
		'active_callback' => array(
								array( 'setting' => 'itrans_overlay', 'operator' => '==', 'value' => 'nxs-gradient' ),
							),		
		*/
		'active_callback' => 'iamaze_nxs_colored',
	);				
	$controls[] = array(
		'type'        	=> 'color',
		'settings'     	=> 'slider_overlay_color_1',
		'label'       	=> __( 'Overlay Gradient Color 1', 'i-amaze' ),
		'section'     	=> 'slidersettings',
		'default'     	=> 'rgba(231,14,119,.72)',
		'priority'    	=> 4,
		'choices'     	=> array(
							'alpha' => true,
						),		
		/*
		'active_callback' => array(
								array( 'setting' => 'itrans_overlay', 'operator' => '==', 'value' => 'nxs-gradient' ),
							),		
		*/
		'active_callback' => 'iamaze_nxs_gradient',
	);		
	$controls[] = array(
		'type'        	=> 'color',
		'settings'     	=> 'slider_overlay_color_2',
		'label'       	=> __( 'Overlay Gradient Color 2', 'i-amaze' ),
		'section'     	=> 'slidersettings',
		'default'     	=> 'rgba(250,162,20,.72)',
		'priority'    	=> 4,
		'choices'     	=> array(
							'alpha' => true,
						),		
		/*
		'active_callback' => array(
								array( 'setting' => 'itrans_overlay', 'operator' => '==', 'value' => 'nxs-gradient' ),
							),		
		*/
		'active_callback' => 'iamaze_nxs_gradient',
	);	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'slider_overlay_gradient_angle',
		'label'       => __( 'Gradient Angle', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => 135,
		'choices'     => array(
						'min'  => '0',
						'max'  => '360',
						'step' => '1',
					),
		'active_callback' => 'iamaze_nxs_gradient',	
		'priority'    	=> 4,					
	);	
		
	
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_ubar',
		'label'       => __( 'Turn On/Off Top Utilitybar', 'i-amaze' ),
		'description' => __( 'Turn Off/on the top utilitybar containing email/phone and socoal icon links', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => 0,
		'priority'    => 5,
	);	
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'trans_header',
		'label'       => __( 'Turn On/Off Transparent Header On Front Slider', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => 1,
		'priority'    => 5,
	);		
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'slider_height',
		'label'       => __( 'Slider Height (in %)', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => 100,
		'choices'     => array(
			'min'  => '0',
			'max'  => '100',
			'step' => '1',
		),
	);
	
	$controls[] = array(
		'type'        => 'radio',
		'settings'    => 'itrans_style',
		'label'       => __( 'Slider Style', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => 'nxs-amaze18',
		'priority'    => 4,
		'choices'     => array(
			'nxs-default'   => esc_attr__( 'Default', 'i-amaze' ),
			'nxs-amaze18' => esc_attr__( 'Amaze 18', 'i-amaze' ),
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'slider_reduction',
		'label'       => __( 'Reduction In px', 'i-amaze' ),
		'section'     => 'slidersettings',
		'description' => __( 'Amount of pixels to be reduced from % of slider height', 'i-amaze' ),		
		'default'     => 0,
		'choices'     => array(
			'min'  => '0',
			'max'  => '240',
			'step' => '1',
		),
	);
	
	$controls[] = array(
		'type'        => 'typography',
		'settings'    => 'slider_title_font',
		'label'       => __( 'Slide Title Font', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => array(
			//'font-style'     => array( 'normal', 'bold', 'italic' ),
			'font-family'    => 'Roboto',
			'subsets'        => 'none',
			'variant'        => '600',
			'line-height'    => '1.2',
			'letter-spacing' => '0',
						
		),		
		'transport'   => 'auto',
		'choices' => array(
			'fonts' => array(
				'google'   => array( 'popularity', 24 ),
				'standard' => array(
					'Georgia,Times,"Times New Roman",serif',
					'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif'
				),
			),
		),	
		'output'     => array(
			array(
				'element' => '#ibanner .da-slider .owl-item h2, #ibanner .nxs-amaze18 .da-slider .owl-item h2', 
			),			
		),
	);
	$controls[] = array(
		'type'        => 'typography',
		'settings'    => 'slider_desc_font',
		'label'       => __( 'Slide Description Font', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => array(
			//'font-style'     => array( 'normal', 'bold', 'italic' ),
			'font-family'    => 'Roboto',
			'subsets'        => 'none',
			'variant'        => '400',
			'line-height'    => '1.2',
			'letter-spacing' => '0',
		),		
		'transport'   => 'auto',
		'choices' => array(
			'fonts' => array(
				'google'   => array( 'popularity', 24 ),
				'standard' => array(
					'Georgia,Times,"Times New Roman",serif',
					'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif'
				),
			),
		),	
		'output'     => array(
			array(
				'element' => '.ibanner .da-slider .owl-item.active p, #ibanner .nxs-amaze18 .da-slider .owl-item.active p', 
			),			
		),
	);
	$controls[] = array(
		'type'        => 'radio-buttonset',
		'settings'     => 'slide_text_alignment',
		'label'       => __( 'Content Alignment', 'i-amaze' ),
		'section'     => 'slidersettings',
		'choices'     => array(
							'' => esc_html__( 'Default', 'i-amaze' ),	
							'left' => esc_html__( 'left', 'i-amaze' ),
							'center' => esc_html__( 'Center', 'i-amaze' ),
							'right' => esc_html__( 'Right', 'i-amaze' ),
		),		
		'default'     => '',
		'output' => array(
			array(
				'element'  => '#ibanner .nxs-amaze18 .nx-slider-container, #ibanner .nx-slider-container, #ibanner .nxs-amaze18 .nx-slider-container p, #ibanner .nx-slider-container p',
				'property' => 'text-align',
				'units'	   => '',
			),
		),		
	);	
	/*
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_hide_bullets',
		'label'       => __( 'Hide Navigation Bullets', 'i-amaze' ),
		'section'     => 'slidersettings',
		'default'     => 'block',
		'choices'     => array(
							'inline-block' => esc_html__( 'Show', 'i-amaze' ),
							'none' => esc_html__( 'Hide', 'i-amaze' ),
		),			
		'output' => array(
			array(
				'element'  => '.ibanner .da-slider .owl-pagination, #ibanner .nxs-amaze18 .da-slider .owl-pagination',
				'property' => 'display',
				'units'	   => '',
			),
		),			
	);		
	*/
	// slider advanced Settings 		
	
	$controls[] = array(
		'type'        => 'select',
		'settings'    => 'slider_sp_divider',
		'label'       => __( 'Shape Divider', 'i-amaze' ),
		'section'     => 'slideradvanced',
		'description' => __( 'Shape Divider', 'i-amaze' ),		
		'default'     => 0,
		'choices'     => array(
						'0'  						=> 'None',
						'arrow'  					=> 'arrow',
						'arrow-negative'			=> 'arrow-negative',
						'book'  					=> 'book',
						'book-negative'				=> 'book-negative',						
						'clouds'  					=> 'clouds',
						'curve'  					=> 'curve',
						'curve-negative'			=> 'curve-negative',
						'drops'  					=> 'drops',
						'drops-negative'  			=> 'drops-negative',
						'opacity-fan'				=> 'opacity-fan',
						'opacity-tilt'				=> 'opacity-tilt',												
						'mountains'  				=> 'mountains',
						'pyramids'  				=> 'pyramids',
						'split'  					=> 'split',
						'tilt'  					=> 'tilt',
						'triangle-negative'  		=> 'triangle-negative',
						'triangle'  				=> 'triangle',						
						'wave-brush'  				=> 'wave-brush',
						'waves'  					=> 'waves',
						'zigzag'  					=> 'zigzag',
						'curve-asymmetrical'  		=> 'curve-asymmetrical',
						'triangle-asymmetrical'  	=> 'triangle-asymmetrical',
		),
	);
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'slider_sp_height',
		'label'       => __( 'Height', 'i-amaze' ),
		'section'     => 'slideradvanced',
		'default'     => 100,
		'choices'     => array(
			'min'  => '0',
			'max'  => '160',
			'step' => '1',
		),
	);
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_sp_flip',
		'label'       => __( 'Flip Horizontal', 'i-amaze' ),
		'section'     => 'slideradvanced',
		'default'     => 0,
	);
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_sp_flip_v',
		'label'       => __( 'Flip Vertical', 'i-amaze' ),
		'section'     => 'slideradvanced',
		'default'     => 0,
	);	
	$controls[] = array(
		'type'        => 'color',
		'settings'     => 'slider_sp_color',
		'label'       => __( 'Color', 'i-amaze' ),
		'section'     => 'slideradvanced',
		'default'     => '#FFFFFF',
	);		
		
	
	// slides 	
	$controls[] = array(
		'type'        => 'repeater',
		'label'       => __( 'Slides', 'i-amaze' ),
		'section'     => 'slides',
		'priority'    => 10,
		'settings'    => 'iamaze_slides',
		'row_label'   => array( 
			'type' => 'text', 
			'value' => __( 'Slide', 'i-amaze' ),
		),
		'choices' 	  => array(
			'limit' => 4,
		),		
		'default'     => array(
			array(
				'itrans_slide_title' => __( 'Welcome To i-AMAZE', 'i-amaze' ),
				'itrans_slide_desc'  => __( 'To start setting up I-AMAZE go to appearance &gt; customize.', 'i-amaze' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-amaze' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide1.jpg',												
			),
			array(
				'itrans_slide_title' => __( 'Responsive & Touch Ready', 'i-amaze' ),
				'itrans_slide_desc'  => __( 'I-AMAZE is 100% responsive and touch ready.', 'i-amaze' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-amaze' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide2.jpg',												
			),
			array(
				'itrans_slide_title' => __( 'One Page WordPress Theme', 'i-amaze' ),
				'itrans_slide_desc'  => __( 'Extremely powerful and flexible one-page multi-purpose WordPress theme', 'i-amaze' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-amaze' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide3.jpg',												
			),
			/*
			array(
				'itrans_slide_title' => __( 'Easy to Customize', 'i-amaze' ),
				'itrans_slide_desc'  => __( 'All controls in one place, Setup your busines website in minutes..', 'i-amaze' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-amaze' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide4.jpg',												
			),
			*/									
		),
		'fields' => array(
			'itrans_slide_title' => array(
				'type'     => 'text',
				'label'    => __( 'Title', 'i-amaze' ),
				'default'  => '',
				'description' => __( 'Supports [txo_themecolor] to apply theme color', 'i-amaze' ),
			),
			'itrans_slide_desc' => array(
				'type'     => 'textarea',
				'label'    => __( 'Description', 'i-amaze' ),
				'default'  => '',
				'description' => __( 'Supports [txo_themecolor] to apply theme color', 'i-amaze' ),				
			),
			'itrans_slide_linktext' => array(
				'type'     => 'text',
				'label'    => __( 'Link text', 'i-amaze' ),
				'default'  => '',
			),
			'itrans_slide_linkurl' => array(
				'type'     => 'text',
				'label'    => __( 'Link URL', 'i-amaze' ),
				'default'  => '',
			),
			'itrans_slide_image' => array(
				'type'     => 'image',
				'label'    => __( 'Image', 'i-amaze' ),
				'default'  => '',
			),		
				
		)
	);		

	
	// Blog page setting
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_stat',
		'label'       => __( 'Turn ON/OFF i-amaze Slider', 'i-amaze' ),
		'description' => __( 'Turn Off or On to hide/show default i-amaze slider', 'i-amaze' ),
		'section'     => 'blogpage',
		'default'     => 1,
		'priority'    => 0,
	);	
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'blogslide_scode',
        'label'    => __( 'Other Slider Shortcode', 'i-amaze' ),
        'section'  => 'blogpage',
        'default'  => '',
		'description' => __( 'Enter a 3rd party slider shortcode, ex. meta slider, smart slider 2, wow slider, etc.', 'i-amaze' ),
        'priority' => 2,
    );
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'banner_text',
        'label'    => __( 'Banner Text', 'i-amaze' ),
        'section'  => 'blogpage',
        'default'  => get_bloginfo( 'description' ),
        'priority' => 3,
		'description' => __( 'if you are using a logo and want your site title or slogan to appear on the header banner', 'i-amaze' ),		
    );
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'alt_menu',
		'label'       => __( 'Turn ON Alternate Navigation', 'i-amaze' ),
		'description' => __( 'Replaces main navigation with alternate navigation menu on front page.', 'i-amaze' ),
		'section'     => 'blogpage',
		'default'     => 0,
		'priority'    => 4,
	);		
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'blog_header_height',
		'label'       => __( 'Image/Videio Header Height (in %)', 'i-amaze' ),
		'section'     => 'header_image',
		'default'     => 100,
		'choices'     => array(
			'min'  => '0',
			'max'  => '100',
			'step' => '1',
		),
		'priority'    => 10,
	);
	
    $controls[] = array(
        'type'     => 'text',
        'settings'  => 'tagline_two',
        'label'    => __( 'Secondary Tagline', 'i-amaze' ),
        'section'  => 'title_tagline',
        'default'  => '',
        'priority' => 10,
    );	
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'header_overlay',
		'label'       => __( 'Turn ON/OFF Checkered Background', 'i-amaze' ),
		'description' => __( 'Turn ON or OF the image/videio header background', 'i-amaze' ),
		'section'     => 'header_image',
		'default'     => 1,
		'priority'    => 0,
	);		
	

	//rmgeneral
	//rmsettings

	$controls[] = array(
		'label' => __('Enable Mobile Navigation', 'i-amaze'),
		'description' => __('Check if you want to activate mobile navigation.', 'i-amaze'),
		'settings' => 'enabled',
		'default' => '1',
		'type' => 'checkbox',
        'section'  => 'rmgeneral',	
	);

	$controls[] = array(
		'label' => __('Elements to hide in mobile:', 'i-amaze'),
		'description' => __('Enter the css class/ids for different elements you want to hide on mobile separeted by a comma(,). Example: .nav,#main-menu ', 'i-amaze'),
		'settings' => 'hide',
		'default' => '',
		'type' => 'text',
        'section'  => 'rmgeneral',		
	);
	
	$controls[] = array(
		'label' => __('Enable Swipe', 'i-amaze'),
		'description' => __('Enable swipe gesture to open/close menus, Only applicable for left/right menu.', 'i-amaze'),
		'settings' => 'swipe',
		'default' => 'yes',
		'choices' => array('yes' => __('Yes', 'i-amaze'),'no' => __('No', 'i-amaze')),
		'type' => 'radio',
        'section'  => 'rmgeneral',		
	);
	
	$controls[] = array(
		'label' => __('Search Field Position', 'i-amaze'),
		'description' => __('Select the position of search box or simply hide the search box if you donot need it.', 'i-amaze'),
		'settings' => 'search_box',
		'default' => 'below_menu',
		'choices' => array('above_menu' => __('Above Menu', 'i-amaze'), 'below_menu' => __('Below Menu', 'i-amaze'), 'hide'=> __('Hide search box', 'i-amaze') ),
		'type' => 'select',
        'section'  => 'rmgeneral',		
	);
		
	$controls[] = array(
		'label' => __('Allow zoom on mobile devices', 'i-amaze'),
		'settings' => 'zooming',
		'default' => 'yes',
		'choices' => array('yes' => __('Yes', 'i-amaze'),'no' => __('No', 'i-amaze')),
		'type' => 'radio',
        'section'  => 'rmgeneral',	
	);
		

	// Responsive Menu Settings
	$controls[] = array(
		'label' => __('Menu Symbol Position', 'i-amaze'),
		'description' => __('Select menu icon position which will be displayed on the menu bar.', 'i-amaze'),
		'settings' => 'menu_symbol_pos',
		'default' => 'left',
		'choices' => array('left' => __('Left', 'i-amaze'),'right' => __('Right', 'i-amaze')),
		'type' => 'select',
        'section'  => 'rmsettings',	
	);

	$controls[] = array(
		'label' => __('Menu Text', 'i-amaze'),
		'description' => __('Entet the text you would like to display on the menu bar.', 'i-amaze'),
		'settings' => 'bar_title',
		'default' => __('MENU', 'i-amaze'),
		'type' => 'text',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Menu Open Direction', 'i-amaze'),
		'description' => __('Select the direction from where menu will open.', 'i-amaze'),
		'settings' => 'position',
		'default' => 'top',
		'choices' => array('left' => 'Left','right' => 'Right', 'top' => 'Top' ),
		'type' => 'select',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Display menu from width (in px)', 'i-amaze'),
		'description' => __(' Enter the width (in px) below which the responsive menu will be visible on screen', 'i-amaze'),
		'settings' => 'from_width',
		'default' => 1069,
		'type' => 'text',
        'section'  => 'rmsettings',			
	);

	$controls[] = array(
		'label' => __('Menu Width', 'i-amaze'),
		'description' => __('Enter menu width in (%) only applicable for left and right menu.', 'i-amaze'),
		'settings' => 'how_wide',
		'default' => '80',
		'type' => 'text',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu bar background color', 'i-amaze'),
		'description' => '',
		'settings' => 'bar_bgd',
		'default' => '#e57e26',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu bar text color', 'i-amaze'),
		'settings' => 'bar_color',
		'default' => '#F2F2F2',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu background color', 'i-amaze'),
		'settings' => 'menu_bgd',
		'default' => '#2E2E2E',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu text color', 'i-amaze'),
		'settings' => 'menu_color',
		'default' => '#CFCFCF',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu mouse over text color', 'i-amaze'),
		'settings' => 'menu_color_hover',
		'default' => '#606060',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu icon color', 'i-amaze'),
		'settings' => 'menu_icon_color',
		'default' => '#FFFFFF',
		'type' => 'color',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'label' => __('Menu borders(top & left) color', 'i-amaze'),
		'settings' => 'menu_border_top',
		'default' => '#0D0D0D',
		'type' => 'color',
        'section'  => 'rmsettings',		
	);
	
	$controls[] = array(
		'label' => __('Menu borders(bottom) color', 'i-amaze'),
		'settings' => 'menu_border_bottom',
		'default' => '#131212',
		'type' => 'color',
        'section'  => 'rmsettings',		
	);
	
	$controls[] = array(
		'label' => __('Enable borders for menu items', 'i-amaze'),
		'settings' => 'menu_border_bottom_show',
		'default' => 'yes',
		'choices' =>  array('yes' => __('Yes', 'i-amaze'),'no' => __('No', 'i-amaze')),
		'type' => 'radio',
        'section'  => 'rmsettings',			
	);
	
	$controls[] = array(
		'type'        => 'typography',
		'settings'    => 'body_font',
		'label'       => __( 'Body Font Style', 'i-amaze' ),
		'description' => __( 'Content font style (Variant and Subsets are not used). Default font "Roboto" Default font "Open Sans", size "14"', 'i-amaze' ),
		'section'     => 'fonts',
		'default'     => array(
			//'font-style'     => array( 'normal', 'bold', 'italic' ),
			'font-family'    => 'Open Sans',
			'font-size'      => '14',
			//'color'          => '#575757',			
			'subsets'        => 'none',
		),
		'priority'    => 1,
		'choices' => array(
			'fonts' => array(
				'google'   => array( 'popularity', 50 ),
				'standard' => array(
					'Georgia,Times,"Times New Roman",serif',
					'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif'
				),
			),
		),	
	);
	
	$controls[] = array(
		'type'        => 'typography',
		'settings'    => 'title_font',
		'label'       => __( 'Heading Font Style', 'i-amaze' ),
		'description' => __( 'Title font style (Variant and Subsets are not used). Default font "Roboto"', 'i-amaze' ),
		'section'     => 'fonts',
		'default'     => array(
			//'font-style'     => array( 'normal', 'bold', 'italic' ),
			'font-family'    => 'Roboto',
			'subsets'        => 'none',
			'variant'        => '600',			
		),
		'priority'    => 1,
		'choices' => array(
			'fonts' => array(
				'google'   => array( 'popularity', 50 ),
				'standard' => array(
					'Georgia,Times,"Times New Roman",serif',
					'Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif'
				),
			),
		),	
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'uppercase_nav',
		'label'       => __( 'All UPPERCASE Top Navigation', 'i-amaze' ),
		'description' => __( 'Change all menu item on top navigation to UPPERCASE', 'i-amaze' ),
		'section'     => 'fonts',
		'default'     => 0,
		'priority'    => 2,
	);				
	
	/* WooCommerce Settings */
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'show_login',
		'label'       => __( 'Hide/Show Topnav Login', 'i-amaze' ),
		'description' => __( 'Turn ON or OFF user login menu item on top nav', 'i-amaze' ),
		'section'     => 'woocomm',
		'default'  	  => 0,		
		'priority'    => 1,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'show_cart',
		'label'       => __( 'Show/Hide Topnav Cart', 'i-amaze' ),
		'description' => __( 'Turn ON or OFF cart from top nav', 'i-amaze' ),
		'section'     => 'woocomm',
		'default'     => 0,		
		'priority'    => 1,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'product_search',
		'label'       => __( 'Turn On/OFF Product Search', 'i-amaze' ),
		'description' => __( 'Turn ON/OFF product only search.', 'i-amaze' ),
		'section'     => 'woocomm',
		'default'  	  => 0,		
		'priority'    => 1,
	);
	
	/*	
	$controls[] = array(
		'type'        => 'radio',
		'settings'    => 'shop_header',
		'label'       => __( 'Default Shop Page Header Options', 'i-amaze' ),
		'section'     => 'woocomm',
		'default'     => 'nxs-default',
		'priority'    => 4,
		'choices'     => array(
			'nxs-default'   => esc_attr__( 'Default', 'i-amaze' ),
			'nxs-amaze18' => esc_attr__( 'Amaze 18', 'i-amaze' ),
		),
	);
		

	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'infi_scroll',
		'label'       => __( 'Turn On Infinite Scroll', 'i-amaze' ),
		'description' => __( 'Turn on infinite scroll on product listing and search result pages.', 'i-amaze' ),
		'section'     => 'woocomm',
		'default'  	  => 0,		
		'priority'    => 1,
	);	
	*/
	
	/*
	$controls[] = array(
		'type'        => 'custom',
		'settings'    => 'demo_setup',
		'section'     => 'demosetup',
		'default'	  => '<div class="promo-box"><div class="promo-2">' . iamaze_demo_lauoutsCustomizer () . '</div>',
		'priority' => 10,
	);
	*/
	$controls[] = array(
		'type'        => 'custom',
		'settings'    => 'custom_demo',
		'section'     => 'nxpromo',
		'default'	  => '<div class="promo-box">
        <div class="promo-2">
        	<div class="promo-wrap">
            	<a href="http://templatesnext.in/i-amaze-landing/" target="_blank">' . __('i-amaze Demo', 'i-amaze') . '</a>
                <a href="https://www.facebook.com/templatesnext" target="_blank">' . __('Facebook', 'i-amaze') . '</a> 
                <a href="http://templatesnext.org/ispirit/landing/forums/" target="_blank">' . __('Support', 'i-amaze') . '</a>                                 
                <a href="https://wordpress.org/support/view/theme-reviews/i-amaze#postform" target="_blank">' . __('Rate i-amaze', 'i-amaze') . '</a>                
            </div>
        </div>
		</div>',
		'priority' => 10,
	);
	
    return $controls;
}
add_filter( 'kirki/controls', 'iamaze_custom_setting' );

function iamaze_demo_lauoutsCustomizer ()
{
	
	$tgmpa_url = admin_url() . 'themes.php?page=tgmpa-install-plugins';
	$ocdi_url = admin_url() . 'themes.php?page=pt-one-click-demo-import';
	$return_string = '';	
	
	if ( (!function_exists( 'txo_sections_show' )) || (!class_exists( 'OCDI_Plugin' )) ) {
		$return_string .= sprintf( __( '<div class="tx-rednotice">Make sure you have all the <a href="%s" target="_blank">recommended plugins</a> installed and active before importing demo contents and settings.</div>', 'i-amaze' ), esc_url($tgmpa_url) );
	}
	
	if ( (!function_exists( 'txo_sections_show' )) ) {
		$return_string .= sprintf( __( '<div class="txo-red">Plugin <a href="%s" target="_blank">TemplatesNext OnePager</a> not active.</div>', 'i-amaze' ), esc_url($tgmpa_url) );
	}
	
	if ( (!class_exists( 'OCDI_Plugin' )) ) {
		$return_string .= sprintf( __( '<div class="txo-red">Plugin <a href="%s" target="_blank">One Click Demo Import</a> not active.</div>', 'i-amaze' ), esc_url($tgmpa_url) );
	}		
	
	$return_string .= '<div class="demo-wrap">';
	$return_string .= '<a href="' . esc_url(admin_url()) . 'themes.php?page=pt-one-click-demo-import" target="_blank" class="tx-layout-link">' . __('I-AMAZE Demo Layouts', 'i-amaze') . '</a>';	
	$return_string .= '</div>';
	
	return $return_string;
}

function iamaze_nxs_colored() {
	//'setting' => 'itrans_overlay', 'operator' => '==', 'value' => 'nxs-gradient'
	if ( get_theme_mod('slider_overlay') == '2' ) {
		return true;
	} else {
		return false;
	}
}

function iamaze_nxs_gradient() {
	//'setting' => 'itrans_overlay', 'operator' => '==', 'value' => 'nxs-gradient'
	if ( get_theme_mod('slider_overlay') == '3' ) {
		return true;
	} else {
		return false;
	}
}



