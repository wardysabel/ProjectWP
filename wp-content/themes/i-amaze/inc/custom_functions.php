<?php 
/*-----------------------------------------------------------------------------------*/
/* Social icons																		*/
/*-----------------------------------------------------------------------------------*/
function iamaze_social_icons () {
	
	$socio_list = '';
	$siciocount = 0;
	$services = array ('facebook','twitter','flickr','feed','instagram','googleplus','youtube','pinterest','linkedin');
    
		$socio_list .= '<ul class="social">';	
		foreach ( $services as $service ) :
			
			if( $service == 'facebook' ) {
				$active[$service] = esc_url( get_theme_mod('itrans_social_'.$service, esc_url('https://www.facebook.com/')) );
			} elseif( $service == 'twitter' ) {
				$active[$service] = esc_url( get_theme_mod('itrans_social_'.$service, esc_url('https://www.twitter.com/')) );
			} elseif( $service == 'youtube' ) {
				$active[$service] = esc_url( get_theme_mod('itrans_social_'.$service, esc_url('https://www.youtube.com/')) );
			} elseif( $service == 'instagram' ) {
				$active[$service] = esc_url( get_theme_mod('itrans_social_'.$service, esc_url('https://www.instagram.com/')) );
			} else {
				$active[$service] = esc_url( get_theme_mod('itrans_social_'.$service, '') );
			} 
						
			//$active[$service] = esc_url( get_theme_mod('itrans_social_'.$service, '#') );
			if ($active[$service]) { 
				$socio_list .= '<li><a href="'.$active[$service].'" title="'.esc_attr($service).'" target="_blank"><i class="genericon socico genericon-'.esc_attr($service).'"></i></a></li>';
				$siciocount++;
			}
			
		endforeach;
		$socio_list .= '</ul>';
		
		if( $siciocount > 0 ) {	
			return $socio_list;
		} else {
			return;
		}
}

/*-----------------------------------------------------------------------------------*/
/* ibanner Slider																		*/
/*-----------------------------------------------------------------------------------*/
function iamaze_ibanner_slider () { 
  
	$slide_no = 1; 
	$tx_svg_style = '';
	$arrslidestxt = array();
	
	$template_dir = get_template_directory_uri();
	$banner_text = esc_attr(get_theme_mod('banner_text', ''));
	$slider_height = intval(get_theme_mod('slider_height', 100));
	$slider_reduct = intval(get_theme_mod('slider_reduction', 0));	
	$nxs_class = esc_attr(get_theme_mod('itrans_style', 'nxs-amaze18'));
	$slider_transition = esc_attr(get_theme_mod('slider_transition', 'fadeUp'));		
	
	
	$upload_dir = wp_upload_dir();
	$upload_base_dir = $upload_dir['basedir'];
	$upload_base_url = $upload_dir['baseurl'];
	
	$itrans_sliderparallax = get_theme_mod('itrans_sliderparallax', 1);
	$itrans_slideroverlay = get_theme_mod('slider_overlay', 0);
	$ubar_stat = get_theme_mod('slider_ubar', 0);
	$shortcut_text = esc_attr__('Edit Slides', 'i-amaze');
	
	$svg_file_name = get_theme_mod('slider_sp_divider', '0');
	if ( $svg_file_name != '0' ) {	
		$svg_file = wp_remote_get( get_template_directory_uri() . '/inc/separators/'.$svg_file_name.'.svg' );
		$find_string   = '<svg';
		$position = strpos($svg_file['body'], $find_string);	
		$svg_file_new = substr($svg_file['body'], $position);
	}
	$slider_sp_height = get_theme_mod('slider_sp_height', 100);
	$slider_sp_flip = get_theme_mod('slider_sp_flip', 0);
	$slider_sp_flip_v = get_theme_mod('slider_sp_flip_v', 0);	
	$slider_sp_color = get_theme_mod('slider_sp_color', '#FFFFFF');
	
	$pattern_bg = get_template_directory_uri() . '/images/homepage-banner-bg3.png';
	$iamage18_bg =  get_template_directory_uri() . '/images/nxs-design-18-overlay.png';
	$slider_overlay = get_theme_mod('slider_overlay', '0');
	$slider_overlay_color = get_theme_mod('slider_overlay_color', 'rgba(0,0,0,.48)');
	$slider_overlay_color_1 = get_theme_mod('slider_overlay_color_1', 'rgba(231,14,119,.72)');
	$slider_overlay_color_2 = get_theme_mod('slider_overlay_color_2', 'rgba(250,162,20,.72)');
	$slider_overlay_gradient_angle = get_theme_mod('slider_overlay_gradient_angle', '135');							
								
			
	if( $itrans_slideroverlay == 1 )
	{
		$overlayclass = "overlay";
	} else
	{
		$overlayclass = "";
	}	
	
	if( $ubar_stat == 0 )
	{
		$ubarclass = "hideubar";
	} else
	{
		$ubarclass = "showubar";
	}		
	
	$slides_preset = array (
        array(
            'itrans_slide_title' => esc_attr__( 'Welcome To i-AMAZE', 'i-amaze' ),
            'itrans_slide_desc' => esc_attr__( 'To start setting up I-AMAZe go to appearance > customize.', 'i-amaze' ),
            'itrans_slide_linktext' => esc_attr__( 'Know More', 'i-amaze' ),
            'itrans_slide_linkurl' => '',
            'itrans_slide_image' => esc_url( get_template_directory_uri() . '/images/slide1.jpg' ),
        ),
        array(
            'itrans_slide_title' => esc_attr__( 'Responsive & Touch Ready', 'i-amaze' ),
            'itrans_slide_desc' => esc_attr__( 'i-AMAZE is 100% responsive and touch ready.', 'i-amaze' ),
            'itrans_slide_linktext' => esc_attr__( 'Know More', 'i-amaze' ),
            'itrans_slide_linkurl' => '',
            'itrans_slide_image' => esc_url( get_template_directory_uri() . '/images/slide2.jpg' ),
        ),
        array(
            'itrans_slide_title' => esc_attr__( 'One Page WordPress Theme', 'i-amaze' ),
            'itrans_slide_desc' => esc_attr__( 'Extremely powerful and flexible one-page multi-purpose WordPress theme', 'i-amaze' ),
            'itrans_slide_linktext' => esc_attr__( 'Know More', 'i-amaze' ),
            'itrans_slide_linkurl' => '',
            'itrans_slide_image' => esc_url( get_template_directory_uri() . '/images/slide3.jpg' ),
        ),
		/*
        array(
            'itrans_slide_title' => esc_attr__( 'Easy to Customize', 'i-amaze' ),
            'itrans_slide_desc' => esc_attr__( 'All controls in one place, Setup your busines website in minutes..', 'i-amaze' ),
            'itrans_slide_linktext' => esc_attr__( 'Know More', 'i-amaze' ),
            'itrans_slide_linkurl' => '',
            'itrans_slide_image' => esc_url( get_template_directory_uri() . '/images/slide4.jpg' ),
        ),
		*/

	);
	
	$slides = get_theme_mod('iamaze_slides', $slides_preset);

	foreach( $slides as $slide ) {
		If ( $slide_no <= 4 )
		{
			$strret = '';
			
			$slide_title = esc_attr($slide['itrans_slide_title']);
			$slide_desc = esc_attr($slide['itrans_slide_desc']);
			$slide_linktext = esc_attr($slide['itrans_slide_linktext']);
			$slide_linkurl = esc_url($slide['itrans_slide_linkurl']);
			$slide_image = $slide['itrans_slide_image'];
			
			if ( false !== strpos( $slide_image, $template_dir ) ) {
				$slide_image_url = $slide_image;
			} else
			{
				$slide_image_url = wp_get_attachment_image_src( $slide_image, 'iamaze-slider-thumb' );
				$slide_image_url = $slide_image_url[0];
			}

			
			if ( $slide_title ) {

				if( $slide_image != '' ){
					$strret .= '<div class="da-img" style="background-image:URL(' . $slide_image_url .');"><div class="nx-tscreen"></div></div>';
				}
				$strret .= '<div class="slider-content-wrap"><div class="nx-slider-container">';
				$strret .= '<h2>'.do_shortcode(wp_specialchars_decode($slide_title, $quote_style = ENT_QUOTES)).'</h2>';
				if( !empty($slide_desc) ){$strret .= '<p>'.do_shortcode(wp_specialchars_decode($slide_desc, $quote_style = ENT_QUOTES)).'</p>';}
				if( !empty($slide_linktext) ){$strret .= '<a href="'.$slide_linkurl.'" class="da-link">'.$slide_linktext.'</a>';}
				$strret .= '</div></div>';
			}
			
			if ( $strret != '' ){
				$arrslidestxt[$slide_no] = $strret;
			}				
			
			$slide_no++;
									
		}
	}	
	
	$sliderscpeed = intval(esc_attr(get_theme_mod('itrans_sliderspeed', '6'))) * 1000 ;		
	
	if( count( $arrslidestxt) > 0 ){
		echo '<div class="ibanner ' . esc_attr($overlayclass) . ' ' . esc_attr($ubarclass) . ' ' . $nxs_class . '">';
		echo '	<div id="da-slider" class="da-slider" role="banner" data-slider-transition="'.$slider_transition.'" data-slider-speed="'.esc_attr($sliderscpeed).'" data-slider-parallax="'.esc_attr($itrans_sliderparallax).'" data-edit-slides="'.esc_attr($shortcut_text).'" data-slider-height="'.esc_attr($slider_height).'" data-slider-reduct="'.esc_attr($slider_reduct).'">';
			
		foreach ( $arrslidestxt as $slidetxt ) :
			echo '<div class="nx-slider">';	
			echo	$slidetxt;
			echo '</div>';
		endforeach;
		
		echo '	</div>';
		if ( $svg_file_name != '0' ) {
			echo '  <div class="tx-sp-divider">'.$svg_file_new.'</div>';
		}		
		echo '</div>';
	} else
	{
        echo '<div class="iheader front">';
        echo '    <div class="titlebar">';
        echo '        <h1>';
		
		if ($banner_text) {
			echo htmlspecialchars_decode($banner_text);
		} 
        echo '        </h1>';
		echo ' 		  <h2>';

		echo '		</h2>';
        echo '    </div>';
        echo '</div>';
	}
	
	$tx_svg_style .= '.ibanner .tx-sp-divider { bottom: 0px; left: 0px; z-index: 1; height: '.$slider_sp_height.'px; }';
	if ( $slider_sp_flip != 0 ) {
		$tx_svg_style .= '.ibanner .tx-sp-divider { transform: scale(-1,1); }';
	}
	$tx_svg_style .= '.ibanner .tx-sp-divider svg { height: '.$slider_sp_height.'px; transform: rotate(-180deg);}';
	if ( $slider_sp_flip_v != 0 ) {
		$tx_svg_style .= '.ibanner .tx-sp-divider svg { transform: rotate(0deg);}';
	}	
	$tx_svg_style .= '.ibanner .tx-sp-divider .tx-svg-fill { fill: '.$slider_sp_color.'; }';
	
	
	if( $slider_overlay == '1' ) {
		$tx_svg_style .= '.ibanner.overlay .da-slider .nx-slider .da-img:after { background-image: url('.$pattern_bg.'); }';
		$tx_svg_style .= '#ibanner .nxs-amaze18 .da-slider .nx-slider .da-img:after { background-image: url('.$pattern_bg.'); background-repeat: repeat; }';		
	} elseif( $slider_overlay == '2' )	{
		$tx_svg_style .= '#ibanner .nxs-default .da-slider .nx-slider .da-img:after { background-image: none; background-color : '.$slider_overlay_color.' }';
		$tx_svg_style .= '#ibanner .nxs-amaze18 .da-slider .nx-slider .da-img:after { background-image: none; background-color : '.$slider_overlay_color.' }';		
	} elseif( $slider_overlay == '3' )	{
		$tx_svg_style .= '#ibanner .nxs-default .da-slider .nx-slider .da-img:after { background-image: none; background: '.$slider_overlay_color_1.'; background: linear-gradient('.$slider_overlay_gradient_angle.'deg, '.$slider_overlay_color_1.' 0%, '.$slider_overlay_color_2.' 100%); }';
		$tx_svg_style .= '#ibanner .nxs-amaze18 .da-slider .nx-slider .da-img:after { background-image: none; background: '.$slider_overlay_color_1.'; background: linear-gradient('.$slider_overlay_gradient_angle.'deg, '.$slider_overlay_color_1.' 0%, '.$slider_overlay_color_2.' 100%); }';		
	}		

	wp_enqueue_style( 'dynamic-style' );
	wp_add_inline_style( 'dynamic-style', $tx_svg_style );	
}

/*-----------------------------------------------------------------------------------*/
/* find attachment id from url																	*/
/*-----------------------------------------------------------------------------------*/
function iamaze_get_attachment_id_from_url( $attachment_url = '' ) {

    global $wpdb;
    $attachment_id = false;

    // If there is no url, return.
    if ( '' == $attachment_url )
        return;

    // Get the upload directory paths
    $upload_dir_paths = wp_upload_dir();

    // Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
    if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {

        // If this is the URL of an auto-generated thumbnail, get the URL of the original image
        $attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );

        // Remove the upload path base directory from the attachment URL
        $attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );

        // Finally, run a custom database query to get the attachment ID from the modified attachment URL
        $attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );

    }

    return $attachment_id;
}


function iamaze_get_video_id( $video_url ){
	
	if( (preg_match('/http:\/\/(www\.)*youtube\.com\/.*/',$video_url)) || (preg_match('/http:\/\/(www\.)*youtu\.be\/.*/',$video_url)) )
	{
		$video_id = ( preg_match( '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_url, $match ) ) ? $match[1] : false;
		return $video_id;
	} else
	{
		return false;
	}
}


/* Demo import by One Click Demo Import */
// include get_template_directory() . '/inc/one-click-demo-import/one-click-demo-import.php';

function iamaze_import_files() {
  return array(
  	/**/
    array(
      'import_file_name'             	=> 'Business 1',
      'import_file_url'            		=> 'http://wp-demos.com/downloads/demos/i-amaze/business-1.xml',
      //'import_widget_file_url'     		=> 'https://raw.githubusercontent.com/TemplatesNext/i-excel-demo/master/i-excel-widgets.wie',
      'import_customizer_file_url' 		=> 'http://wp-demos.com/downloads/demos/i-amaze/business-1.dat',
      'import_preview_image_url'     	=> trailingslashit( get_template_directory_uri() ) . 'inc/txoc/small-images/business-1.jpg',
      'import_notice'                	=> __( 'Please make sure you have plugin "TemplatesNext OnePagert" installed and active before you start the import process. <br> This process involves transfer of data and media from server to server and might take some time.', 'i-amaze' ),
	  'preview_url'                		=> 'http://www.wp-demos.com/i-amaze/',
		  'required_plugin'					=> array(),
		  'categories'                 		=> array( 'Free' ),	  
    ),

    array(
      'import_file_name'             	=> 'WooCommere 1',
      'import_file_url'            		=> 'http://wp-demos.com/downloads/demos/i-amaze/woocommerce-1.xml',
      //'import_widget_file_url'     		=> 'https://raw.githubusercontent.com/TemplatesNext/i-excel-demo/master/i-excel-widgets.wie',
      'import_customizer_file_url' 		=> 'http://wp-demos.com/downloads/demos/i-amaze/woocommerce-1.dat',
      'import_preview_image_url'     	=> trailingslashit( get_template_directory_uri() ) . 'inc/txoc/small-images/woocommerce-1.jpg',
      'import_notice'                	=> __( 'Please make sure you have plugin "TemplatesNext OnePagert" installed and active before you start the import process. <br> This process involves transfer of data and media from server to server and might take some time.', 'i-amaze' ),
	  'preview_url'                		=> 'http://www.wp-demos.com/i-amaze/woocommerce-1/',
		  'required_plugin'					=> array(
												'woocommerce',
											),
		  'categories'                 		=> array( 'Free', 'WooCommerce' ),	  
    ),
	
    array(
      'import_file_name'             	=> 'Business 2',
      'import_file_url'            		=> 'http://wp-demos.com/downloads/demos/i-amaze/business-2.xml',
      //'import_widget_file_url'     		=> 'https://raw.githubusercontent.com/TemplatesNext/i-excel-demo/master/i-excel-widgets.wie',
      'import_customizer_file_url' 		=> 'http://wp-demos.com/downloads/demos/i-amaze/business-2.dat',
      'import_preview_image_url'     	=> trailingslashit( get_template_directory_uri() ) . 'inc/txoc/small-images/business-2.jpg',
      'import_notice'                	=> __( 'Please make sure you have plugin "TemplatesNext OnePagert" installed and active before you start the import process. <br> This process involves transfer of data and media from server to server and might take some time.', 'i-amaze' ),
	  'preview_url'                		=> 'http://www.wp-demos.com/i-amaze/business-2/',
		  'required_plugin'					=> array(),
		  'categories'                 		=> array( 'Free' )	  
    ),
	
    array(
      'import_file_name'             	=> 'Consulting',
      'import_file_url'            		=> 'http://wp-demos.com/downloads/demos/i-amaze/consulting.xml',
      'import_widget_file_url'     		=> 'http://wp-demos.com/downloads/demos/i-amaze/consulting.wie',
      'import_customizer_file_url' 		=> 'http://wp-demos.com/downloads/demos/i-amaze/consulting.dat',
      'import_preview_image_url'     	=> trailingslashit( get_template_directory_uri() ) . 'inc/txoc/small-images/consulting.jpg',
      'import_notice'                	=> __( 'Please make sure you have plugin "TemplatesNext OnePagert" installed and active before you start the import process. <br> This process involves transfer of data and media from server to server and might take some time.', 'i-amaze' ),
	  'preview_url'                		=> 'http://www.wp-demos.com/i-amaze/consulting/',
		  'required_plugin'					=> array(),
		  'categories'                 		=> array( 'Free' )	  
    ),		
  );
}
add_filter( 'pt-ocdi/import_files', 'iamaze_import_files' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );


function iamaze_after_import_setup($selected_import) {
	if ( 'Business 1' === $selected_import['import_file_name'] ) {

		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'i-amaze Menu', 'nav_menu' );	
		set_theme_mod( 'nav_menu_locations', array(
				'primary' => $main_menu->term_id,
			)
		);
		
	} elseif ( 'WooCommere 1' === $selected_import['import_file_name'] ) {
	
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'i-amaze Menu', 'nav_menu' );
		set_theme_mod( 'nav_menu_locations', array(
				'primary' => $main_menu->term_id,
			)
		);
	} elseif ( 'Consulting' === $selected_import['import_file_name'] ) {
	
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
		set_theme_mod( 'nav_menu_locations', array(
				'primary' => $main_menu->term_id,
			)
		);
	} else {
	
		// Assign menus to their locations.
		$main_menu = get_term_by( 'name', 'i-amaze Menu', 'nav_menu' );
		set_theme_mod( 'nav_menu_locations', array(
				'primary' => $main_menu->term_id,
			)
		);
	}

}
add_action( 'pt-ocdi/after_import', 'iamaze_after_import_setup' );

//add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

/* Delete The default Hello World Post before import */
/* Resetting default Widgets */
function iamaze_before_content_import( $selected_import ) {
	wp_delete_post(1);
	update_option( 'sidebars_widgets', array() );
}
add_action( 'pt-ocdi/before_content_import', 'iamaze_before_content_import' );

/* change title for page and menu */
function iamaze_plugin_page_setup( $default_settings ) {
    $default_settings['page_title']  = esc_html__( 'i-amaze One Click Demo Setup', 'i-amaze' );
    $default_settings['menu_title']  = esc_html__( 'i-AMAZE Demo Setup' ,'i-amaze' );
    return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'iamaze_plugin_page_setup' );

require_once( get_template_directory() . '/inc/txoc/txoc.php' );
