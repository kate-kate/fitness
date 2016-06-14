<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit 
 * @version		1.0.4
 * 
 * Theme Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function register_css_styles() {
	if (!is_admin()) {
		global $post, 
			$wp_styles;
		
		
		$cmsms_option = cmsms_get_global_options();
		
		
		wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '1.0.0', 'screen, print');
		
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_responsive']) {
			wp_enqueue_style('theme-adapt', get_template_directory_uri() . '/css/adaptive.css', array(), '1.0.0', 'screen, print');
		}
		
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_retina']) {
			wp_enqueue_style('theme-retina', get_template_directory_uri() . '/css/retina.css', array(), '1.0.0', 'screen');
		}
		
		
		if (is_rtl()) {
			wp_enqueue_style('theme-rtl', get_template_directory_uri() . '/css/rtl.css', array(), '1.0.0', 'screen, print');
		}
		
		
		wp_enqueue_style('theme-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('theme-icons-set', get_template_directory_uri() . '/css/cmsms-theme-icons-set.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'screen');
		
		wp_register_style('isotope', get_template_directory_uri() . '/css/jquery.isotope.css', array(), '1.5.26', 'screen');
		
		wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');

		if ( 
			is_a($post, 'WP_Post') && 
			strpos($post->post_content, '[cmsms_portfolio ') 
		) {
			wp_enqueue_style('isotope');
		}
		
		
		// WooCommerce styles
		if (CMSMS_WOOCOMMERCE) {
			wp_enqueue_style('theme-cmsms-woo-style', get_template_directory_uri() . '/css/cmsms-woo-style.css', array(), '1.0.0', 'screen');
			
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_responsive']) {
				wp_enqueue_style('theme-cmsms-woo-adaptive', get_template_directory_uri() . '/css/cmsms-woo-adaptive.css', array(), '1.0.0', 'screen');
			}
			
			
			if (is_rtl()) {
				wp_enqueue_style('theme-cmsms-woo-rtl', get_template_directory_uri() . '/css/cmsms-woo-rtl.css', array(), '1.0.0', 'screen');
			}
		}
		
		
		// Events styles
		if (CMSMS_EVENTS_CALENDAR) {
			wp_enqueue_style('theme-cmsms-events-style', get_template_directory_uri() . '/css/cmsms-events-style.css', array(), '1.0.0', 'screen');
			
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_responsive']) {
				wp_enqueue_style('theme-cmsms-events-adaptive', get_template_directory_uri() . '/css/cmsms-events-adaptive.css', array(), '1.0.0', 'screen');
			}
			
			
			if (is_rtl()) {
				wp_enqueue_style('theme-cmsms-events-rtl', get_template_directory_uri() .
				'/css/cmsms-events-rtl.css', array(), '1.0.0', 'screen');
			}
		}
		
		
		// Timetable styles
		if (CMSMS_TIMETABLE) {
			wp_dequeue_style('timetable_sf_style');
			
			wp_dequeue_style('timetable_style');
			
			wp_dequeue_style('timetable_event_template');
			
			wp_dequeue_style('timetable_responsive_style');
			
			
			wp_enqueue_style('theme-cmsms-timetable-style', get_template_directory_uri() . '/css/cmsms-timetable-style.css', array(), '1.0.0', 'screen');
			
			wp_enqueue_style('theme-cmsms-timetable-adaptive', get_template_directory_uri() . '/css/cmsms-timetable-adaptive.css', array(), '1.0.0', 'screen');
			
			
			if (is_rtl()) {
				wp_enqueue_style('theme-cmsms-timetable-rtl', get_template_directory_uri() . '/css/cmsms-timetable-rtl.css', array(), '1.0.0', 'screen');
			}
		}
		
		
		// iLightBox skins
		$ilightbox_skin = $cmsms_option[CMSMS_SHORTNAME . '_ilightbox_skin'];
		
		wp_enqueue_style('ilightbox', get_template_directory_uri() . '/css/ilightbox.css', array(), '2.2.0', 'screen');
		
		wp_enqueue_style('ilightbox-skin-' . $ilightbox_skin, get_template_directory_uri() . '/css/ilightbox-skins/' . $ilightbox_skin . '-skin.css', array(), '2.2.0', 'screen');
		
		
		// Pace preloader themes
		if ( 
			$cmsms_option[CMSMS_SHORTNAME . '_preload'] && 
			$cmsms_option[CMSMS_SHORTNAME . '_preload_effect'] != 'grow' && 
			$cmsms_option[CMSMS_SHORTNAME . '_preload_effect'] != 'fade' 
		) {
			$preload_effect = $cmsms_option[CMSMS_SHORTNAME . '_preload_effect'];
			
			wp_enqueue_style('pace-theme-' . $preload_effect, get_template_directory_uri() . '/css/pace-themes/' . $preload_effect . '.css', array(), '0.5.1', 'screen');
		}
		
		
		if (get_option('cmsms_style_exists_' . CMSMS_SHORTNAME)) {
			$upload_dir = wp_upload_dir();
			
			
			if (preg_match('/(?i)msie [6-9]\.0/', $_SERVER['HTTP_USER_AGENT'])) {
				wp_enqueue_style('theme-fonts', $upload_dir['baseurl'] . '/cmsms_styles/' . CMSMS_SHORTNAME . '_fonts.css', array(), '1.0.0', 'screen');
				
				wp_enqueue_style('theme-schemes-primary', $upload_dir['baseurl'] . '/cmsms_styles/' . CMSMS_SHORTNAME . '_colors_primary.css', array(), '1.0.0', 'screen');
				
				wp_enqueue_style('theme-schemes-secondary', $upload_dir['baseurl'] . '/cmsms_styles/' . CMSMS_SHORTNAME . '_colors_secondary.css', array(), '1.0.0', 'screen');
			} else {
				wp_enqueue_style('theme-fonts-schemes', $upload_dir['baseurl'] . '/cmsms_styles/' . CMSMS_SHORTNAME . '.css', array(), '1.0.0', 'screen');
			}
		} else {
			$custom_css = '';
			
			$custom_css .= cmsms_theme_fonts();
			
			$custom_css .= cmsms_theme_colors_primary();
			
			$custom_css .= cmsms_theme_colors_secondary();
			
			
			wp_add_inline_style('theme-fonts-schemes', $custom_css);
		}
		
		
		wp_enqueue_style('theme-ie', get_template_directory_uri() . '/css/ie.css', array(), '1.0.0', 'screen');
		
		
		$wp_styles->add_data('theme-ie', 'conditional', 'lt IE 9');
	}
}

add_action('wp_enqueue_scripts', 'register_css_styles');



/* Register JS Scripts */
function register_js_scripts() {
	if (!is_admin()) {
		global $post;
		
		
		$cmsms_option = cmsms_get_global_options();
		
		
		// wp_enqueue_script('less', get_template_directory_uri() . '/js/less.min.js', array(), '2.0.0', false);
		
		wp_enqueue_script('libs', get_template_directory_uri() . '/js/jsLibraries.min.js', array('jquery'), '1.0.0', false);
		
		wp_enqueue_script('jLibs', get_template_directory_uri() . '/js/jqueryLibraries.min.js', array('jquery'), '1.0.0', true);
		
		wp_enqueue_script('iLightBox', get_template_directory_uri() . '/js/jquery.iLightBox.min.js', array('jquery'), '2.2.0', false);
		
		wp_enqueue_script('script', get_template_directory_uri() . '/js/jquery.script.js', array('jquery'), '1.0.0', true);
		
		wp_localize_script('script', 'cmsms_script', array( 
			'theme_url' => 							get_template_directory_uri(), 
			'site_url' => 							get_site_url() . '/', 
			'ilightbox_skin' => 					$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_skin'], 
			'ilightbox_path' => 					$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_path'], 
			'ilightbox_infinite' => 				$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_infinite'], 
			'ilightbox_aspect_ratio' => 			$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_aspect_ratio'], 
			'ilightbox_mobile_optimizer' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_mobile_optimizer'], 
			'ilightbox_max_scale' => 				$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_max_scale'], 
			'ilightbox_min_scale' => 				$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_min_scale'], 
			'ilightbox_inner_toolbar' => 			$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_inner_toolbar'], 
			'ilightbox_smart_recognition' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_smart_recognition'], 
			'ilightbox_fullscreen_one_slide' => 	$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_fullscreen_one_slide'], 
			'ilightbox_fullscreen_viewport' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_fullscreen_viewport'], 
			'ilightbox_controls_toolbar' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_toolbar'], 
			'ilightbox_controls_arrows' => 			$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_arrows'], 
			'ilightbox_controls_fullscreen' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_fullscreen'], 
			'ilightbox_controls_thumbnail' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_thumbnail'], 
			'ilightbox_controls_keyboard' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_keyboard'], 
			'ilightbox_controls_mousewheel' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_mousewheel'], 
			'ilightbox_controls_swipe' => 			$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_swipe'], 
			'ilightbox_controls_slideshow' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_slideshow'], 
			'ilightbox_close_text' => 				__('Close', 'yoga-fit'), 
			'ilightbox_enter_fullscreen_text' => 	__('Enter Fullscreen (Shift+Enter)', 'yoga-fit'), 
			'ilightbox_exit_fullscreen_text' => 	__('Exit Fullscreen (Shift+Enter)', 'yoga-fit'), 
			'ilightbox_slideshow_text' => 			__('Slideshow', 'yoga-fit'), 
			'ilightbox_next_text' => 				__('Next', 'yoga-fit'), 
			'ilightbox_previous_text' => 			__('Previous', 'yoga-fit'), 
			'ilightbox_load_image_error' => 		__('An error occurred when trying to load photo.', 'yoga-fit'), 
			'ilightbox_load_contents_error' => 		__('An error occurred when trying to load contents.', 'yoga-fit'), 
			'ilightbox_missing_plugin_error' => 	__("The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\/a>.", 'yoga-fit') 
		));
		
		
		wp_enqueue_script('twitter', get_template_directory_uri() . '/js/jquery.tweet.min.js', array('jquery'), '1.3.1', true);
		
		
		if ( 
			$cmsms_option[CMSMS_SHORTNAME . '_preload'] && 
			$cmsms_option[CMSMS_SHORTNAME . '_preload_effect'] != 'grow' && 
			$cmsms_option[CMSMS_SHORTNAME . '_preload_effect'] != 'fade' 
		) {
			wp_enqueue_script('pace', get_template_directory_uri() . '/js/pace.min.js', array(), '0.5.1', false);
		}
		
		
		wp_register_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array('jquery'), '1.5.19', true);
		
		wp_register_script('isotopeMode', get_template_directory_uri() . '/js/jquery.isotope.mode.js', array('jquery', 'isotope'), '1.0.0', true);
		
		wp_localize_script('isotopeMode', 'cmsms_isotope_mode', array( 
			'ilightbox_skin' => 					$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_skin'], 
			'ilightbox_path' => 					$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_path'], 
			'ilightbox_infinite' => 				$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_infinite'], 
			'ilightbox_aspect_ratio' => 			$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_aspect_ratio'], 
			'ilightbox_mobile_optimizer' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_mobile_optimizer'], 
			'ilightbox_max_scale' => 				$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_max_scale'], 
			'ilightbox_min_scale' => 				$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_min_scale'], 
			'ilightbox_inner_toolbar' => 			$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_inner_toolbar'], 
			'ilightbox_smart_recognition' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_smart_recognition'], 
			'ilightbox_fullscreen_one_slide' => 	$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_fullscreen_one_slide'], 
			'ilightbox_fullscreen_viewport' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_fullscreen_viewport'], 
			'ilightbox_controls_toolbar' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_toolbar'], 
			'ilightbox_controls_arrows' => 			$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_arrows'], 
			'ilightbox_controls_fullscreen' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_fullscreen'], 
			'ilightbox_controls_thumbnail' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_thumbnail'], 
			'ilightbox_controls_keyboard' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_keyboard'], 
			'ilightbox_controls_mousewheel' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_mousewheel'], 
			'ilightbox_controls_swipe' => 			$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_swipe'], 
			'ilightbox_controls_slideshow' => 		$cmsms_option[CMSMS_SHORTNAME . '_ilightbox_controls_slideshow'], 
			'ilightbox_close_text' => 				__('Close', 'yoga-fit'), 
			'ilightbox_enter_fullscreen_text' => 	__('Enter Fullscreen (Shift+Enter)', 'yoga-fit'), 
			'ilightbox_exit_fullscreen_text' => 	__('Exit Fullscreen (Shift+Enter)', 'yoga-fit'), 
			'ilightbox_slideshow_text' => 			__('Slideshow', 'yoga-fit'), 
			'ilightbox_next_text' => 				__('Next', 'yoga-fit'), 
			'ilightbox_previous_text' => 			__('Previous', 'yoga-fit'), 
			'ilightbox_load_image_error' => 		__('An error occurred when trying to load photo.', 'yoga-fit'), 
			'ilightbox_load_contents_error' => 		__('An error occurred when trying to load contents.', 'yoga-fit'), 
			'ilightbox_missing_plugin_error' => 	__("The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\/a>.", 'yoga-fit') 
		));
		
		
		if ( 
			is_a($post, 'WP_Post') && 
			strpos($post->post_content, '[cmsms_portfolio ') 
		) {
			wp_enqueue_script('isotope');
			
			wp_enqueue_script('isotopeMode');
		}
		
		
		// if ( 
		// 	is_a($post, 'WP_Post') && 
		// 	strpos($post->post_content, '[/cmsms_google_map_markers]') 
		// ) {
			wp_enqueue_script('gMapAPI', '//maps.google.com/maps/api/js?sensor=false', array('jquery'), '1.0.0', true);
			
			wp_enqueue_script('gMap', get_template_directory_uri() . '/js/jquery.gMap.min.js', array('jquery', 'gMapAPI'), '3.2.0', true);
		// }
		wp_enqueue_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '0.9.9', true);
		
		// WooCommerce scripts
		if (CMSMS_WOOCOMMERCE) {
			wp_enqueue_script('cmsms-woo-script', get_template_directory_uri() . '/js/jquery.cmsms-woo-script.js', array('jquery'), '1.0.0', true);
			
			
			$cart_currency_symbol = get_woocommerce_currency_symbol();
			
			$cart_currency_symbol_pos = get_option('woocommerce_currency_pos');
			
			$currency_symbol = $cart_currency_symbol;
			
			
			if ($cart_currency_symbol_pos == 'left_space') {
				$currency_symbol = $cart_currency_symbol . ' ';
			} elseif ($cart_currency_symbol_pos == 'right_space') {
				$currency_symbol = ' ' . $cart_currency_symbol;
			}
			
			
			$shop_thumbnail_image_size = get_option('shop_thumbnail_image_size');
			
			
			wp_localize_script('cmsms-woo-script', 'cmsms_woo_script', array( 
				'currency_symbol' => 			$currency_symbol, 
				'thumbnail_image_width' => 		$shop_thumbnail_image_size['width'], 
				'thumbnail_image_height' => 	$shop_thumbnail_image_size['height'] 
			));
		}
	}
}

add_action('wp_enqueue_scripts', 'register_js_scripts');



/* Google Fonts Generate Function */
function cmsms_theme_google_fonts_generate() {
	$cmsms_option = cmsms_get_global_options();
	
	
	global $cmsms_google_font_keys;
	
	
	$cmsms_google_font_keys = array();
	
	$keys = array();
	
	$fonts = '';
	
	
	foreach (cmsms_google_fonts_list() as $key => $value) {
		if ( 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_button_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_button_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_input_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_input_font_google_font'] && $key != '') || 
			(isset($cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font']) && $key == $cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font'] && $key != '') 
		) {
			$keys[] = $key;
		}
	}
	
	
	foreach ($keys as $key) {
		$fonts .= $key . '|';
		
		
		$font_array = explode(':', $key);
		
		
		$cmsms_google_font_keys[] = str_replace('+', ' ', $font_array[0]);
	}
	
	
	$fonts = substr($fonts, 0, -1);
	
	
	cmsms_theme_google_font($fonts);
}

add_action('wp_enqueue_scripts', 'cmsms_theme_google_fonts_generate');



/* Google Fonts Enqueue Function */
function cmsms_theme_google_font($fonts, $font_name = '') {
	global $cmsms_google_font_keys;
	
	
	if ( 
		$font_name == '' || 
		($font_name != '' && !in_array($font_name, $cmsms_google_font_keys)) 
	) {
		wp_enqueue_style('cmsms-google-fonts' . (($font_name != '') ? '-' . str_replace('+', '-', strtolower($font_name)) : ''), '//fonts.googleapis.com/css?family=' . $fonts);
	}
}



/* Google Fonts Font Family Substing Generate Function */
function cmsms_get_google_font($font) {
	if ($font != '') {
		if (strpos($font, ':')) {
			$google_font_array = explode(':', $font);
			
			
			$google_font = "'" . str_replace('+', ' ', $google_font_array[0]) . "', ";
		} elseif (strpos($font, '&')) {
			$google_font_array = explode('&', $font);
			
			
			$google_font = "'" . str_replace('+', ' ', $google_font_array[0]) . "', ";
		} else {
			$google_font = "'" . str_replace('+', ' ', $font) . "', ";
		}
	} else {
		$google_font = '';
	}
	
	
	return $google_font;
}



/* Register Admin Panel Favicon */
add_action('admin_head', 'cmsms_favicon');



/* Register Default Theme Sidebars */
function the_widgets_init() {
    if (!function_exists('register_sidebars')) {
        return;
    }
    
    register_sidebar(
        array(
            'name' => esc_attr__('Sidebar', 'yoga-fit'), 
            'id' => 'sidebar_default', 
            'description' => esc_attr__('Widgets in this area will be shown in all left and right sidebars till you don\'t use custom sidebar.', 'yoga-fit'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_attr__('Bottom Sidebar', 'yoga-fit'), 
            'id' => 'sidebar_bottom', 
            'description' => esc_attr__('Widgets in this area will be shown at the bottom of middle block below the content and middle sidebar, but above footer.', 'yoga-fit'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
	
    register_sidebar(
        array(
            'name' => esc_attr__('Archive Sidebar', 'yoga-fit'), 
            'id' => 'sidebar_archive', 
            'description' => esc_attr__('Widgets in this area will be shown in all left and right sidebars on archives pages.', 'yoga-fit'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );
    
    register_sidebar(
        array(
            'name' => esc_attr__('Search Sidebar', 'yoga-fit'), 
            'id' => 'sidebar_search', 
            'description' => esc_attr__('Widgets in this area will be shown in left or right sidebar on search page.', 'yoga-fit'), 
            'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
            'after_widget' => '</aside>', 
            'before_title' => '<h3 class="widgettitle">', 
            'after_title' => '</h3>'
        )
    );

    register_sidebar(
    	array(
    		'name' => 'Footer area 1',
    		'id' => 'footer1'
    	)
    );
    register_sidebar(
    	array(
    		'name' => 'Footer area 2',
    		'id' => 'footer2'
    	)
    );
    register_sidebar(
    	array(
    		'name' => 'Footer area 3',
    		'id' => 'footer3'
    	)
    );


    register_sidebar(
    	array(
    		'name' => 'Sign in form',
    		'id' => 'sign-in-form'
    	)
    );
	
	
	$cmsms_option = cmsms_get_global_options();
	
	
	if (isset($cmsms_option[CMSMS_SHORTNAME . '_sidebar']) && sizeof($cmsms_option[CMSMS_SHORTNAME . '_sidebar']) > 0) {
		foreach ($cmsms_option[CMSMS_SHORTNAME . '_sidebar'] as $sidebar) {
			register_sidebar(array( 
				'name' => $sidebar, 
				'id' => generateSlug($sidebar, 45), 
				'description' => esc_attr__('Custom sidebar created with cmsmasters admin panel.', 'yoga-fit'), 
				'before_widget' => '<aside id="%1$s" class="widget %2$s">', 
				'after_widget' => '</aside>', 
				'before_title' => '<h3 class="widgettitle">', 
				'after_title' => '</h3>' 
			) );
		}
	}
	
	
	if (CMSMS_TIMETABLE) {
		unregister_sidebar('sidebar-event');
	}
}

add_action('widgets_init', 'the_widgets_init');



/* Register Theme Navigations */
register_nav_menus(array( 
    'primary' => 	 esc_attr__('Primary Navigation', 'yoga-fit'), 
    'footer' => 	 esc_attr__('Footer Navigation', 'yoga-fit'), 
	'top_line' => 	 esc_attr__('Top Line Navigation', 'yoga-fit'),
	'short_post_menu' => esc_attr__('Short Post Menu', 'yoga-fit'),
));



/* Register Showing Home Page on Default Wordpress Pages Menu */
function cmsmasters_page_menu_args($args) {
    $args['show_home'] = true;
    
	
    return $args;
}

add_filter('wp_page_menu_args', 'cmsmasters_page_menu_args');



/* Register Showing Home Page on Default Wordpress Pages Menu */
function cmsms_custom_mega_munu_item_output($args) {
	$shcd_args = $args['args'];
	
	$shcd_attrs = $args['attrs'];
	
	$shcd_depth = $args['depth'];
	
	$shcd_item = $args['item'];
	
	$shcd_cols_count = $args['cols_count'];
	
	
	$item_output = $shcd_args->before . 
		'<a' . $shcd_attrs;
	
	
	if (!empty($shcd_item->tag)) {
		$item_output .= ' data-tag="' . $shcd_item->tag . '"';
	}
	
	
	if ($shcd_depth > 0 && !empty($shcd_item->highlight) && !empty($shcd_item->color)) {
		$item_output .= ' style="color:' . $shcd_item->color . ';"';
	}
	
	
	$item_output .= '>';
	
	
	if ($shcd_depth == 0) {
		$item_output .= '<span class="nav_bg_clr"';
		
		
		if (!empty($shcd_item->color) && !empty($shcd_item->highlight)) {
			$item_output .= ' style="background-color:' . $shcd_item->color . ';"';
		}
		
		$item_output .= '></span>';
	}
	
	
	$item_output .= $shcd_args->link_before;
	
	
	if ( 
		($shcd_depth <= 1 && empty($shcd_item->hide_text)) || 
		($shcd_depth == 0 && !empty($shcd_item->hide_text) && !empty($shcd_item->icon)) || 
		($shcd_depth == 1 && $shcd_cols_count == NULL && !empty($shcd_item->hide_text)) || 
		($shcd_depth == 1 && $shcd_cols_count != NULL && !empty($shcd_item->hide_text) && !empty($shcd_item->icon)) || 
		($shcd_depth > 1) 
	) {
		$item_output .= '<span';
		
		
		if (!empty($shcd_item->icon)) {
			$item_output .= ' class="' . $shcd_item->icon . '"';
		}
		
		
		$item_output .= '>' . 
			apply_filters('the_title', $shcd_item->title, $shcd_item->ID);
		
		
		if ( 
			($shcd_depth == 0 && !empty($shcd_item->subtitle)) || 
			($shcd_depth == 1 && $shcd_cols_count != NULL && !empty($shcd_item->subtitle)) 
		) {
			$item_output .= '<span class="nav_subtitle"';
			
			
			if (!empty($shcd_item->color)) {
				$item_output .= ' style="color:' . $shcd_item->color . ';"';
			}
			
			
			$item_output .= '>' . 
				$shcd_item->subtitle . 
			'</span>';
		}
		
		
		$item_output .= '</span>';
	}
	
	
	$item_output .= $shcd_args->link_after . 
		'</a>' . 
	$shcd_args->after;
	
	
	return $item_output;
}

add_filter('cmsms_mega_item_output', 'cmsms_custom_mega_munu_item_output');



/* Register wp_title() Home Function */
function cmsms_wp_title_for_home($title) {
	$title = preg_replace('/ &raquo; /', '', $title, 1);
	
	
	if (empty($title) && (is_home() || is_front_page())) {
		return esc_html(get_bloginfo('name')) . ' | ' . esc_html(get_bloginfo('description'));
	}
	
	
	return esc_html($title) . ' | ' . esc_html(get_bloginfo('name'));
}



/* Register wp_nav_menu() Fallback Function */
function cmsms_fallback_menu($args) {
	echo '<div class="navigation_wrap">' . "\n" . 
		'<ul id="navigation">' . "\n";
	
	
	wp_list_pages(array( 
		'title_li' => '', 
		'link_before' => '<span class="nav_bg_clr"></span><span>', 
		'link_after' => '</span>' 
	));
	
	
	echo '</ul>' . "\r" . 
	'</div>' . "\n";
}



/* Register Post Formats, Feed Links, Post Thumbnails and Set Image Sizes*/
if (function_exists('add_theme_support')) {
	add_theme_support('post-formats', array( 
		'image', 
		'gallery', 
		'video', 
		'audio' 
	));
	
	
	function add_post_type_support_project($post) {
		$screen = get_current_screen();
		
		$post_type = $screen->post_type;
		
		
		if ($post_type == 'project') {
			add_theme_support('post-formats', array( 
				'gallery', 
				'video' 
			));
		}
	}
	
	add_action('load-post.php', 'add_post_type_support_project');
	
	add_action('load-post-new.php', 'add_post_type_support_project');
	
	
	add_theme_support('post-thumbnails');
	
	
	if (version_compare(get_bloginfo('version'), '4.1', '>=')) {
		add_theme_support('title-tag');
	} else {
		add_filter('wp_title', 'cmsms_wp_title_for_home');
	}
	
	
	add_theme_support('automatic-feed-links');
	
	
	add_theme_support('html5', array( 
		'comment-list', 
		'comment-form', 
		'search-form', 
		'gallery', 
		'caption' 
	));
	
	
	$thumbnail_list = cmsms_image_thumbnail_list();
	
	
	if (!isset($content_width)) {
		$content_width = $thumbnail_list['full-thumb']['width'];
	}
	
	
	set_post_thumbnail_size($thumbnail_list['post-thumbnail']['width'], $thumbnail_list['post-thumbnail']['height'], $thumbnail_list['post-thumbnail']['crop']);
	
	
	if (function_exists('add_image_size')) {
		foreach ($thumbnail_list as $key => $image_size) {
			if ($key != 'post-thumbnail') {
				add_image_size($key, $image_size['width'], $image_size['height'], (isset($image_size['crop']) ? isset($image_size['crop']) : false));
			}
		}
	}
	
	
	add_filter('image_size_names_choose', 'cmsms_select_image_size');
}



/* Add Image Thumbnails Size to the List */
function cmsms_select_image_size($sizes) {
	$thumbnail_list = cmsms_image_thumbnail_list();
	
	
	$new_sizes = array();
	
	
	foreach ($thumbnail_list as $key => $image_size) {
		if (isset($image_size['title'])) {
			$new_sizes[$key] = $image_size['title'];
		}
	}
	
	
	$sizes = array_merge($sizes, $new_sizes);
	
	
	return $sizes;
}



/* Register Visual Content Editor CSS Stylesheet */
function cmsms_add_editor_styles() {
	add_editor_style('framework/admin/inc/css/custom-editor-style.css');
	
	
	add_editor_style('//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext');
}

add_action('init', 'cmsms_add_editor_styles');



/* Register Shortcodes for Excerpts and Widgets */
add_filter('the_excerpt', 'do_shortcode');

add_filter('widget_text', 'do_shortcode');



/* Register Removing 'More Text' From Excerpt */
function new_excerpt_more($more) {
	return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');



/* Register Custom Excerpt Length Function */
class Excerpt {
	var $length = 55;
	
	function __construct($length) {
		$this->length = $length;
		
		add_filter('excerpt_length', array($this, 'new_length'), 999);
	}
	
	public function new_length() {
		return $this->length;
	}
	
	function output() {
		the_excerpt();
	}
	
	function return_out() {
		return get_the_excerpt();
	}
}

function theme_excerpt($length = 55, $show = true) {
	if ($show) {
		$result = new Excerpt($length);
		
		$result->output();
	} else {
		$result = new Excerpt($length);
		
		return $result->return_out();
	}
}



/* Register Removing 'p' Tags that Wrap Rows */
function cmsms_rowpdel($content) {
    $content = str_replace('[/cmsms_row]</p>', '[/cmsms_row]', $content);
    $content = str_replace('<p>[cmsms_row', '[cmsms_row', $content);
	
	
    return $content;
}

add_filter('the_content', 'cmsms_rowpdel');



/* Register Removing 'p' Tags that Wrap Divs */
function cmsms_divpdel($content) {
	$block = '(address|article|aside|audio|blockquote|canvas|dd|div|dl|fieldset|figcaption|figure|footer|form|h1|h2|h3|h4|h5|h6|header|hgroup|hr|noscript|ol|output|pre|section|table|tfoot|ul|video|style|iframe)';
	
	
	$content = preg_replace('/^<\/p>/', '', $content);
	$content = preg_replace('/<p>$/', '', $content);
	$content = preg_replace('/<\/' . $block . '>(\s*)<\/p>/', '</\1>', $content);
	$content = preg_replace('/<' . $block . '([^>]+)>(\s+)<\/p>/', '<\1\2>', $content);
	$content = preg_replace('/<p>\s+<' . $block . '([^>]+)>/', '<\1\2>', $content);
	$content = preg_replace('/<p>\s+<\/' . $block . '>/', '</\1>', $content);
	$content = preg_replace('/<p><' . $block . '/', '<\1', $content);
	$content = preg_replace('/(<a\shref="[^"]*"\sid="[^"]*"\sclass="button[^"]*"[^>]*>[^<]+<\/a>\s*)<\/p>/', '\1', $content);
	
	
    return $content;
}



/* Unregister PayPal Donations Widget */
if (CMSMS_PAYPALDONATIONS) {
	function unregister_paypaldonations_widget() {
		unregister_widget('PayPalDonations_Widget');
	}

	add_action('widgets_init', 'unregister_paypaldonations_widget');
}



/* Remove Timetable Settings and Documentation */
if (CMSMS_TIMETABLE && is_admin()) {
	$plugin = 'timetable/timetable.php'; 
	
	remove_filter("plugin_action_links_$plugin", 'timetable_settings_link');
	
	remove_filter("plugin_action_links_$plugin", 'timetable_documentation_link');
	
	
	function timetable_settings_page_removing() {
		remove_submenu_page('options-general.php', 'timetable_admin');
	}
	
	add_action('admin_menu', 'timetable_settings_page_removing');
}



/* Generate Slug Function */
function generateSlug($phrase, $maxLength) {
	$result = strtolower($phrase);
	
	
	$result = preg_replace("/[^a-z0-9\s-]/", "", $result);
	$result = trim(preg_replace("/[\s-]+/", " ", $result));
	$result = trim(substr($result, 0, $maxLength));
	$result = preg_replace("/\s/", "-", $result);
	
	
	return $result;
}



/* Add Icons List to Database */
function cmsms_add_global_icons() {
	$file = 'file_';
	
	$file_gc = $file . 'get_contents';
	
	
	$icons = $file_gc(CMSMS_ADMIN . '/inc/fonts/config.json');
	
	
	$arr = json_decode($icons, true);
	
	
	if (get_option('cmsms_' . CMSMS_SHORTNAME . '_icons')) {
		update_option('cmsms_' . CMSMS_SHORTNAME . '_icons', serialize($arr));
	} else {
		add_option('cmsms_' . CMSMS_SHORTNAME . '_icons', serialize($arr), '', 'yes');
	}
}



/* Generate Icons List */
function cmsms_composer_icons() {
	$icons = get_option('cmsms_' . CMSMS_SHORTNAME . '_icons');
	
	$arr = unserialize($icons);
	
	$new_icons = '';
	
	
	$out = "\n" . '<script type="text/javascript"> ' . "\n" . 
	'/* <![CDATA[ */' . "\n\t" . 
		'function cmsms_composer_icons() { ' . "\n\t\t" . 
			'return { ' . "\n\t\t\t";
	
	
	if ($arr) {
		foreach ($arr['glyphs'] as $item) {
			if ($new_icons != $item['src']) {
				if ($new_icons != '') {
					$out = substr($out, 0, -4);
					
					$out .= ' ' . "\n\t\t\t" . '}, ' . "\n\t\t\t";
				}
				
				
				$out .= "'" . $item['src'] . "' : { \n\t";
				
				
				$new_icons = $item['src'];
			}
			
			
			$out .= "\t\t\t'" . $item['css'] . "' : '" . $arr['css_prefix_text'] . $item['css'] . "', \n\t";
		}
		
		
		$out = substr($out, 0, -4);
	}
	
	
	$out .= ' ' . "\n\t\t\t" . '} ' . "\n\t\t" . 
			'}; ' . "\n\t" . 
		'} ' . "\n" . 
	'/* ]]> */' . "\n" . 
	'</script>' . "\n\n";
	
	
	echo $out;
}



/* Generate CSS Rules */
function cmsms_color_css($rule, $color) {
	return $rule . ':' . $color . ';';
}



/* Generate RGB from HEX/RGBA Color */
function color2rgb($color) {
	return (preg_match('/^#[a-f0-9]{3}$/i', $color) || preg_match('/^#[a-f0-9]{6}$/i', $color)) ? hex2rgb($color) : rgba2rgb($color);
}



/* Generate RGB Color from HEX */
function hex2rgb($color) {
	$new_color = substr($color, 1);
	
	$color_len = strlen($new_color);
	
	
	$result = '';
	
	
	if ($color_len == 6) {
		$rgb = str_split($new_color, 2);
	} elseif ($color_len == 3) {
		$rgb = str_split($new_color, 1);
	}
	
	
	foreach ($rgb as $number) {
		$result .= hexdec((strlen($number) == 2) ? $number : $number . $number) . ', ';
	}
	
	
	$rgb_color = substr($result, 0, -2);
	
	
	return $rgb_color;
}



/* Generate HEX Color from RGB */
function rgb2hex($rgb) {
	$newRGBs = explode(',', $rgb);
	
	
	$r = trim($newRGBs[0]);
	$g = trim($newRGBs[1]);
	$b = trim($newRGBs[2]);
	
	
	$hex_color = '#' . dechex($r) . dechex($g) . dechex($b);
	
	
	return $hex_color;
}



/* Generate RGB Color from RGBA */
function rgba2rgb($rgba) {
	$newRGBAs = explode(',', $rgba);
	
	$r = trim(substr($newRGBAs[0], 5));
	$g = trim($newRGBAs[1]);
	$b = trim($newRGBAs[2]);
	
	
	$rgb_color = "rgb({$r}, {$g}, {$b})";
	
	
	return $rgb_color;
}



/* Generate HSL Color from RGB */
function rgb2hsl($rgb) {
	$newRGBs = explode(',', $rgb);
	
	
	$r = trim($newRGBs[0]);
	$g = trim($newRGBs[1]);
	$b = trim($newRGBs[2]);
	
	
	$oldR = $r;
	$oldG = $g;
	$oldB = $b;
	
	
	$r /= 255;
	$g /= 255;
	$b /= 255;
	
	
	$max = max($r, $g, $b);
	$min = min($r, $g, $b);
	
	
	$h;
	$s;
	
	
	$l = ($max + $min) / 2;
	$d = $max - $min;
	
	
	if ($d == 0) {
		$h = $s = 0;
	} else {
		$s = $d / (1 - abs(2 * $l - 1));
		
		
		switch ($max) {
		case $r:
			$h = 60 * fmod((($g - $b) / $d), 6);
			
			
			if ($b > $g) {
				$h += 360;
			}
			
			
			break;
		case $g:
			$h = 60 * (($b - $r) / $d + 2);
			
			
			break;
		case $b:
			$h = 60 * (($r - $g) / $d + 4);
			
			
			break;
		}
	}
	
	
	return array(round($h, 2), round($s, 2), round($l, 2));
}



/* Generate RGB Color from HSL */
function hsl2rgb($h, $s, $l) {
	$r;
	$g;
	$b;
	
	
	$c = (1 - abs(2 * $l - 1)) * $s;
	$x = $c * (1 - abs(fmod(($h / 60), 2) - 1));
	$m = $l - ($c / 2);
	
	
	if ($h < 60) {
		$r = $c;
		$g = $x;
		$b = 0;
	} else if ($h < 120) {
		$r = $x;
		$g = $c;
		$b = 0;	
	} else if ($h < 180) {
		$r = 0;
		$g = $c;
		$b = $x;	
	} else if ($h < 240) {
		$r = 0;
		$g = $x;
		$b = $c;
	} else if ($h < 300) {
		$r = $x;
		$g = 0;
		$b = $c;
	} else {
		$r = $c;
		$g = 0;
		$b = $x;
	}
	
	
	$r = ($r + $m) * 255;
	$g = ($g + $m) * 255;
	$b = ($b + $m) * 255;
	
	
	return floor($r) . ', ' . floor($g) . ', ' . floor($b);
}



/* Convert Embedded Video URL Function */
function embedConvert($url) {
	if (str_replace('youtube', '', $url) !== $url) {
		parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
		
		$result = 'http://www.youtube.com/embed/' . $my_array_of_vars['v'] . '?autoplay=1&autohide=1&border=0&egm=0&showinfo=0';
	} elseif (str_replace('vimeo', '', $url) !== $url) {
		$video_id = substr(parse_url($url, PHP_URL_PATH), 1);
		
		$result = 'http://player.vimeo.com/video/' . $video_id . '?autoplay=1';
	} else {
		$result = '';
	}
	
	
	return $result;
}



/* Return of get_template_part() */
function load_template_part($template_name, $part_name = null) {
    ob_start();
	
	
    get_template_part($template_name, $part_name);
	
	
    $out = ob_get_contents();
	
	
    ob_end_clean();
	
	
    return $out;
}



/* Return of get_template_part() File Function */
function return_template_part($post_format = 'standard', $post_layout = 'default', $post_page = 'page', $post_type = 'blog') {
    get_template_part('framework/postType/' . $post_type . '/' . (($post_page) ? $post_page . '/' : '') . (($post_layout) ? $post_layout . '/' : '') . $post_format);
	
	
	$out = $post_type . '_' . (($post_page) ? $post_page . '_' : '') . (($post_layout) ? $post_layout . '_' : '') . $post_format;
	
	
	return $out();
}



/* Regenerate Custom Styles Function */
function cmsms_regenerate_styles() {
	$custom_css_fonts = cmsms_theme_fonts();
	
	$custom_css_colors_primary = cmsms_theme_colors_primary();
	
	$custom_css_colors_secondary = cmsms_theme_colors_secondary();
	
	
	$custom_css = $custom_css_fonts . $custom_css_colors_primary . $custom_css_colors_secondary;
	
	
	cmsms_write_styles($custom_css_fonts, CMSMS_SHORTNAME . '_fonts');
	
	cmsms_write_styles($custom_css_colors_primary, CMSMS_SHORTNAME . '_colors_primary');
	
	cmsms_write_styles($custom_css_colors_secondary, CMSMS_SHORTNAME . '_colors_secondary');
	
	
	cmsms_write_styles($custom_css);
}



/* Write Custom Styles to File Function */
function cmsms_write_styles($styles, $filename = '') {
	$upload_dir = wp_upload_dir();
	
	
	$style_dir = str_replace('\\', '/', $upload_dir['basedir'] . '/cmsms_styles');
	
	
	$is_dir = cmsms_create_folder($style_dir);
	
	
	if ($is_dir === false) {
		update_option('cmsms_style_dir_writable_' . CMSMS_SHORTNAME, 'false');
		
		update_option('cmsms_style_exists_' . CMSMS_SHORTNAME, 'false');
		
		
		return;
	}
	
	
	$file = trailingslashit($style_dir) . (($filename != '') ? $filename : CMSMS_SHORTNAME) . '.css';
	
	
	$created = cmsms_create_file($file, $styles);
	
	
	if ($created === true) {
		update_option('cmsms_style_dir_writable_' . CMSMS_SHORTNAME, 'true');
		
		update_option('cmsms_style_exists_' . CMSMS_SHORTNAME, 'true');
	}
}



/* Create Folder Function */
function cmsms_create_folder(&$folder, $addindex = true) {
	$f = 'f';
	
	$f_o = $f . 'open';
	
	$f_w = $f . 'write';
	
	$f_c = $f . 'close';
	
	
	if (is_dir($folder) && $addindex == false) {
		return true;
	}
	
	
	$created = wp_mkdir_p(trailingslashit($folder));
	
	
	@chmod($folder, 0755);
	
	
	if ($addindex == false) {
		return $created;
	}
	
	
	$index_file = trailingslashit($folder) . 'index.php';
	
	
	if (file_exists($index_file)) {
		return $created;
	}
	
	
	$handle = @$f_o($index_file, 'w');
	
	
	if ($handle) {
		$f_w($handle, "<?php\n// Silence is golden.\n");
		
		
		$f_c($handle);
	}
	
	
	return $created;
}



/* Create File Function */
function cmsms_create_file($file, $content = '', $verifycontent = true) {
	$f = 'f';
	
	$f_o = $f . 'open';
	
	$f_r = $f . 'read';
	
	$f_w = $f . 'write';
	
	$f_c = $f . 'close';
	
	
	$handle = @$f_o($file, 'w');
	
	
	if ($handle) {
		$created = $f_w($handle, $content);
		
		
		$f_c($handle);
		
		
		if ($verifycontent === true) {
			$handle = $f_o($file, 'r');
			
			
			$filecontent = $f_r($handle, filesize($file));
			
			
			$created = ($filecontent == $content) ? true : false;
			
			
			$f_c($handle);
		}
	} else {
		$created = false;
	}
	
	
	if ($created !== false) {
		$created = true;
	}
	
	
	return $created;
}



/* Twitter Shortcode Function */
function cmsms_get_tweets($username, $count) {
	$cmsms_option = cmsms_get_global_options();
	
	
	load_template(CMSMS_CLASS . '/OAuth.php', true);
	
	
	$excludeReplies = 1;
	$name = $username;
	$numTweets = $count;
	$cacheTime = 1;
	$backupName = 'cmsms_' . CMSMS_SHORTNAME . '_tweets_list_backup';
	
	
	$connection = new TwitterOAuth( 
		(($cmsms_option[CMSMS_SHORTNAME . '_api_key'] != '') ? $cmsms_option[CMSMS_SHORTNAME . '_api_key'] : ''), 
		(($cmsms_option[CMSMS_SHORTNAME . '_api_secret'] != '') ? $cmsms_option[CMSMS_SHORTNAME . '_api_secret'] : ''), 
		(($cmsms_option[CMSMS_SHORTNAME . '_access_token'] != '') ? $cmsms_option[CMSMS_SHORTNAME . '_access_token'] : ''), 
		(($cmsms_option[CMSMS_SHORTNAME . '_access_token_secret'] != '') ? $cmsms_option[CMSMS_SHORTNAME . '_access_token_secret'] : '')
	);
	
	
	$totalToFetch = ($excludeReplies) ? max(50, $numTweets * 3) : $numTweets;
	
	
	$fetchedTweets = $connection->get( 
		'https://api.twitter.com/1.1/statuses/user_timeline.json', 
		array( 
			'screen_name' => $name, 
			'count' => $totalToFetch,
			'exclude_replies' => true 
		) 
	);
	
	
	if ($connection->http_code != 200) {
		$tweets = get_option($backupName);
	} else {
		$limitToDisplay = min($numTweets, count($fetchedTweets));
		
		
		for ($i = 0; $i < $limitToDisplay; $i++) {
			$tweet = $fetchedTweets[$i];
			
			$name = $tweet->user->name;
			
			$permalink = 'http://twitter.com/' . $name . '/status/' . $tweet->id_str;
			
			$image = $tweet->user->profile_image_url;
			
			$pattern = '/(http|https):(\S)+/';
			
			$replace = '<a href="${0}" target="_blank" rel="nofollow">${0}</a>';
			
			$text = preg_replace($pattern, $replace, $tweet->text);
			
			$time = $tweet->created_at;
			$time = date_parse($time);
			
			$uTime = mktime($time['hour'], $time['minute'], $time['second'], $time['month'], $time['day'], $time['year']);
			
			
			$tweets[] = array( 
				'text' => $text, 
				'name' => $name, 
				'permalink' => $permalink, 
				'image' => $image, 
				'time' => $uTime 
			);
		}
		
		
		update_option($backupName, $tweets);
	}
	
	
	return $tweets;
}



/* Default Sidebar Content Function */
function sidebarDefaultText() {
	echo '<aside class="widget widget_search">' . "\n";
	
	
	get_search_form();

	
	echo '</aside>' . "\n" . 
	'<aside id="archives" class="widget widget_archive">' . "\n" . 
		'<h3 class="widgettitle">' . esc_html__('Archives', 'yoga-fit') . '</h3>' . "\n" . 
		'<ul>' . "\n";
	
	
	wp_get_archives(array( 
		'type' => 'monthly' 
	));
	
	
	echo '</ul>' . "\n" . 
	'</aside>' . "\n" . 
	'<aside id="meta" class="widget widget_meta">' . "\n" . 
		'<h3 class="widgettitle">' . esc_html__('Meta', 'yoga-fit') . '</h3>' . "\n" . 
		'<ul>' . "\n\t";
	
	
	wp_register();
	
	
	echo "\n\t" . '<li>';
	
	
	wp_loginout();
	
	
	echo '</li>' . "\n\t";
	
	
	wp_meta();
	
	
	echo '<li>' . 
		'<a href="';
	
	
	bloginfo('rss2_url');
	
	
	echo '" title="' . esc_attr__('Syndicate this site using RSS 2.0', 'yoga-fit') . '">' . esc_html__('Entries', 'yoga-fit') . ' ' . 
			'<abbr title="' . esc_attr__('Really Simple Syndication', 'yoga-fit') . '">' . esc_html__('RSS', 'yoga-fit') . '</abbr>' . 
		'</a>' . 
	'</li>' . "\n\t" . 
	'<li>' . 
		'<a href="';
	
	
	bloginfo('comments_rss2_url');
	
	
	echo '" title="' . esc_attr__('The latest comments to all posts in RSS', 'yoga-fit') . '">' . esc_html__('Comments', 'yoga-fit') . ' ' . 
					'<abbr title="' . esc_attr__('Really Simple Syndication', 'yoga-fit') . '">' . esc_html__('RSS', 'yoga-fit') . '</abbr>' . 
				'</a>' . 
			'</li>' . "\n\t" . 
			'<li>' . 
				'<a href="http://wordpress.org/" title="' . esc_attr__('Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'yoga-fit') . '">WordPress.org</a>' . 
			'</li>' . "\r" . 
		'</ul>' . "\n" . 
	'</aside>' . "\n";
}



/* Theme Header Styles & Custom CSS Function */
function cmsms_theme_header_styles() {
	$cmsms_option = cmsms_get_global_options();
	
	$header_top_height = (($cmsms_option[CMSMS_SHORTNAME . '_header_top_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_header_top_height'] : '30');
	
	$header_mid_height = (($cmsms_option[CMSMS_SHORTNAME . '_header_mid_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_header_mid_height'] : '100');
	
	$header_bot_height = (($cmsms_option[CMSMS_SHORTNAME . '_header_bot_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_header_bot_height'] : '70');
	
	
	$out = "
	.header_top,
	.header_top_outer,
	.header_top_inner, 
	.header_top_aligner {
		height : {$header_top_height}px;
	}
	
	.header_mid,
	.header_mid_outer,
	.header_mid .header_mid_inner .social_wrap,
	.header_mid .header_mid_inner .social_but_wrap,
	.header_mid .header_mid_inner .search_wrap_in_inner,
	.header_mid .header_mid_inner .slogan_wrap_inner,
	.header_mid .header_mid_inner .side_logo_nav_wrap,
	.header_mid .header_mid_inner .logo,
	.header_mid .header_mid_inner .resp_nav_wrap_inner {
		height : {$header_mid_height}px;
	}
	
	.enable_logo_side #header.navi_scrolled .header_mid,
	.enable_logo_side #header.navi_scrolled .header_mid_outer,
	.enable_logo_side #header.navi_scrolled .header_mid .header_mid_inner .social_wrap,
	.enable_logo_side #header.navi_scrolled .header_mid .header_mid_inner .social_but_wrap,
	.enable_logo_side #header.navi_scrolled .header_mid .header_mid_inner .search_wrap_in_inner,
	.enable_logo_side #header.navi_scrolled .header_mid .header_mid_inner .side_logo_nav_wrap,
	#header.navi_scrolled .search_wrap,
	#header.navi_scrolled .logo_wrap,
	.navi_scrolled nav > div > ul,
	.navi_scrolled nav > div > ul > li,
	.navi_scrolled nav > div > ul > li > a,
	.header_bot,
	.header_line_wrap,
	.header_line,
	.search_but_align,
	.header_bot_outer,
	.enable_logo_side #header #navigation > li > a,
	.header_bot .header_bot_inner nav > div > ul,
	.header_bot .header_bot_inner nav > div > ul > li,
	.header_bot .header_bot_inner nav > div > ul > li > a {
		height : {$header_bot_height}px;
	}
	
	.enable_logo_side #header.navi_scrolled {
		padding-top : {$header_mid_height}px !important;
	}
	
	#page .top_img_height {
		height : {$header_mid_height}px;
	}
	
	#page.enable_header_top .top_img_height {
		height : " . ($header_mid_height + $header_top_height) . "px;
	}
	
	#page.enable_header_bottom .top_img_height {
		height : " . ($header_mid_height + $header_bot_height) . "px;
	}
	
	#page.enable_header_top.enable_header_bottom .top_img_height {
		height : " . ($header_mid_height + $header_top_height + $header_bot_height) . "px;
	}
	
	#page .headline.cmsms_headline_disabled {
		padding-top : {$header_mid_height}px;
	}
	
	#page.enable_header_top .error_inner, 
	#page.enable_header_top .headline.cmsms_headline_disabled {
		padding-top : " . ($header_mid_height + $header_top_height) . "px;
	}
	
	#page.enable_header_bottom .error_inner, 
	#page.enable_header_bottom .headline.cmsms_headline_disabled {
		padding-top : " . ($header_mid_height + $header_bot_height) . "px;
	}
	
	#page.enable_header_top.enable_header_bottom .error_inner, 
	#page.enable_header_top.enable_header_bottom .headline.cmsms_headline_disabled {
		padding-top : " . ($header_mid_height + $header_top_height + $header_bot_height) . "px;
	}";
	
if ($cmsms_option[CMSMS_SHORTNAME . '_responsive']) { 
	$out .= "@media only screen and (max-width: 1024px) {
		.header_top,
		.header_top_outer,
		.header_top_inner,
		.header_top_aligner,
		.header_mid,
		.header_mid_outer,
		.header_mid .header_mid_inner .social_wrap,
		.header_mid .header_mid_inner .social_but_wrap,
		.header_mid .header_mid_inner .search_wrap_in_inner,
		.header_mid .header_mid_inner .slogan_wrap_inner,
		.header_mid .header_mid_inner .side_logo_nav_wrap,
		.header_bot,
		.header_line_wrap,
		.header_line,
		.search_but_align,
		.header_bot_outer,
		.enable_logo_side #header #navigation > li > a,
		.header_bot .header_bot_inner nav > div > ul,
		.header_bot .header_bot_inner nav > div > ul > li,
		.header_bot .header_bot_inner nav > div > ul > li > a {
			height : auto;
		}
		
		#page.fixed_header #middle,
		#page.fixed_header.enable_header_top #middle,
		#page.fixed_header.enable_header_bottom #middle,
		#page.fixed_header.enable_header_top.enable_header_bottom #middle {
			padding-top : 0px !important;
		}
	}
	
	@media only screen and (max-width: 767px) {
		.header_mid .header_mid_inner .resp_nav_wrap_inner {
			height : auto;
		}
	}";
}
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_logo_type'] == 'text' && $cmsms_option[CMSMS_SHORTNAME . '_logo_custom_color']) {
		$out .= "
	#header a.logo span.title {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_logo_title_color']) . "
	}
	
	#header a.logo span.title_text {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_logo_subtitle_color']) . "
	}
";
	}
	
	
	if (is_404()) {
		if (
			$cmsms_option[CMSMS_SHORTNAME . '_error_bg_img_enable'] && 
			$cmsms_option[CMSMS_SHORTNAME . '_error_bg_image'] != ''
		) {
			$error_bg_image = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_error_bg_image']);
			
			
			if (is_numeric($error_bg_image[0])) {
				$error_bg_image_url = wp_get_attachment_image_src((int) $error_bg_image[0], 'full');
			}
			
			
			$out .= "
	.error .error_bg {
		background-image : " . (!empty($cmsms_option[CMSMS_SHORTNAME . '_error_bg_image']) ? 'url(' . ((is_numeric($error_bg_image[0])) ? $error_bg_image_url[0] : $error_bg_image[1]) . ')' : 'none') . ";
		background-position : " . (!empty($cmsms_option[CMSMS_SHORTNAME . '_error_bg_pos']) ? $cmsms_option[CMSMS_SHORTNAME . '_error_bg_pos'] : 'top center') . ";
		background-repeat : " . (!empty($cmsms_option[CMSMS_SHORTNAME . '_error_bg_rep']) ? $cmsms_option[CMSMS_SHORTNAME . '_error_bg_rep'] : 'repeat') . ";
		background-attachment : " . (!empty($cmsms_option[CMSMS_SHORTNAME . '_error_bg_att']) ? $cmsms_option[CMSMS_SHORTNAME . '_error_bg_att'] : 'scroll') . ";
		background-size : " . (!empty($cmsms_option[CMSMS_SHORTNAME . '_error_bg_size']) ? $cmsms_option[CMSMS_SHORTNAME . '_error_bg_size'] : 'auto') . ";
	}
";
		}
		
		
		$out .= "
	.error .error_bg {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_error_bg_color']) . "
	}
	
	.error .error_title {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_error_color']) . "
	}
";
	}
	
	
	if ( 
		$cmsms_option[CMSMS_SHORTNAME . '_preload'] && 
		($cmsms_option[CMSMS_SHORTNAME . '_preload_effect'] != 'grow' || $cmsms_option[CMSMS_SHORTNAME . '_preload_effect'] != 'fade') 
	) {
		$hsl = rgb2hsl(hex2rgb($cmsms_option[CMSMS_SHORTNAME . '_preload_color']));
		
		
	$out .= "
	body.cmsms-pace-theme {
		background-color: " . $cmsms_option[CMSMS_SHORTNAME . '_preload_bg'] . ";
	}
	
	body.cmsms-pace-theme-loading-bar .pace, 
	body.cmsms-pace-theme-center-simple .pace {
		border-color: " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ";
	}
	
	body.cmsms-pace-theme-minimal .pace .pace-progress, 
	body.cmsms-pace-theme-flash .pace .pace-progress, 
	body.cmsms-pace-theme-barber-shop .pace .pace-progress, 
	body.cmsms-pace-theme-mac-osx .pace .pace-progress, 
	body.cmsms-pace-theme-flat-top .pace .pace-progress, 
	body.cmsms-pace-theme-corner-indicator .pace .pace-activity, 
	body.cmsms-pace-theme-bounce .pace .pace-activity, 
	body.cmsms-pace-theme-loading-bar .pace .pace-progress, 
	body.cmsms-pace-theme-center-simple .pace .pace-progress, 
	body.cmsms-pace-theme-center-atom .pace .pace-progress:before {
		background: " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ";
	}
	
	body.cmsms-pace-theme-fill-left .pace .pace-progress {
		background-color: rgba(" . hex2rgb($cmsms_option[CMSMS_SHORTNAME . '_preload_color']) . ", 0.2);
	}
	
	body.cmsms-pace-theme-loading-bar .pace .pace-progress {
		color: " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ";
	}
	
	body.cmsms-pace-theme-center-circle .pace .pace-progress {
		background-color: rgba(" . hex2rgb($cmsms_option[CMSMS_SHORTNAME . '_preload_color']) . ", 0.8);
	}
	
	body.cmsms-pace-theme-big-counter .pace .pace-progress:after {
		color: rgba(" . hex2rgb($cmsms_option[CMSMS_SHORTNAME . '_preload_color']) . ", 0.5);
	}
	
	body.cmsms-pace-theme-center-atom .pace .pace-progress:after, 
	body.cmsms-pace-theme-center-atom .pace .pace-activity:before, 
	body.cmsms-pace-theme-center-atom .pace .pace-activity:after {
		border-color: " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ";
	}
	
	body.cmsms-pace-theme-center-radar .pace .pace-activity, 
	body.cmsms-pace-theme-center-radar .pace .pace-activity:before {
		border-color: " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . " transparent transparent;
	}
	
	body.cmsms-pace-theme-flash .pace .pace-progress-inner {
		-webkit-box-shadow: 0 0 10px " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ", 0 0 5px " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ";
		-moz-box-shadow: 0 0 10px " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ", 0 0 5px " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ";
		box-shadow: 0 0 10px " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ", 0 0 5px " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ";
	}
	
	body.cmsms-pace-theme-mac-osx .pace .pace-progress-inner {
		background-image: -o-radial-gradient(rgba(" . hsl2rgb($hsl[0], $hsl[1], (($hsl[2] <= 0.1) ? 0 : $hsl[2] - 0.1)) . ", 0.6) 0%, rgba(" . hex2rgb($cmsms_option[CMSMS_SHORTNAME . '_preload_color']) . ", 0) 100%);
		background-image: -moz-radial-gradient(rgba(" . hsl2rgb($hsl[0], $hsl[1], (($hsl[2] <= 0.1) ? 0 : $hsl[2] - 0.1)) . ", 0.6) 0%, rgba(" . hex2rgb($cmsms_option[CMSMS_SHORTNAME . '_preload_color']) . ", 0) 100%);
		background-image: -webkit-radial-gradient(rgba(" . hsl2rgb($hsl[0], $hsl[1], (($hsl[2] <= 0.1) ? 0 : $hsl[2] - 0.1)) . ", 0.6) 0%, rgba(" . hex2rgb($cmsms_option[CMSMS_SHORTNAME . '_preload_color']) . ", 0) 100%);
		background-image: radial-gradient(rgba(" . hsl2rgb($hsl[0], $hsl[1], (($hsl[2] <= 0.1) ? 0 : $hsl[2] - 0.1)) . ", 0.6) 0%, rgba(" . hex2rgb($cmsms_option[CMSMS_SHORTNAME . '_preload_color']) . ", 0) 100%);
	}
	
	body.cmsms-pace-theme-flash .pace .pace-activity {
		border-top-color: " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ";
		border-left-color: " . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . ";
	}
";
	}
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_custom_css'] != '') {
		$out .= stripslashes($cmsms_option[CMSMS_SHORTNAME . '_custom_css']);
	}
	
	
	return $out;
}



/* Theme Background Styles Function */
function cmsms_theme_bg_styles() {
	global $post;
	
	
	$cmsms_option = cmsms_get_global_options();
	
	
	if (is_singular()) {
		$cmsms_page_id = $post->ID;
	} elseif (CMSMS_WOOCOMMERCE && is_shop()) {
		$cmsms_page_id = wc_get_page_id('shop');
	}
	
	
	$out = "";
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_theme_layout'] == 'boxed') {
		$cmsms_bg_default = 'true';
		
		
		if (
			is_singular() || 
			(CMSMS_WOOCOMMERCE && is_shop())
		) {
			$cmsms_bg_default = get_post_meta($cmsms_page_id, 'cmsms_bg_default', true);
		}
		
		
		if ($cmsms_bg_default == 'false') {
			$cmsms_bg_col = get_post_meta($cmsms_page_id, 'cmsms_bg_col', true);
			$cmsms_bg_img_enable = get_post_meta($cmsms_page_id, 'cmsms_bg_img_enable', true);
			$cmsms_bg_img_str = get_post_meta($cmsms_page_id, 'cmsms_bg_img', true);
			$cmsms_bg_pos = get_post_meta($cmsms_page_id, 'cmsms_bg_pos', true);
			$cmsms_bg_rep = get_post_meta($cmsms_page_id, 'cmsms_bg_rep', true);
			$cmsms_bg_att = get_post_meta($cmsms_page_id, 'cmsms_bg_att', true);
			$cmsms_bg_size = get_post_meta($cmsms_page_id, 'cmsms_bg_size', true);
		} else {
			$cmsms_bg_col = $cmsms_option[CMSMS_SHORTNAME . '_bg_col'];
			$cmsms_bg_img_enable = $cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable'];
			$cmsms_bg_img_str = $cmsms_option[CMSMS_SHORTNAME . '_bg_img'];
			$cmsms_bg_pos = $cmsms_option[CMSMS_SHORTNAME . '_bg_pos'];
			$cmsms_bg_rep = $cmsms_option[CMSMS_SHORTNAME . '_bg_rep'];
			$cmsms_bg_att = $cmsms_option[CMSMS_SHORTNAME . '_bg_att'];
			$cmsms_bg_size = $cmsms_option[CMSMS_SHORTNAME . '_bg_size'];
		}
		
		
		$cmsms_bg_img = (!empty($cmsms_bg_img_str) ? explode('|', $cmsms_bg_img_str) : $cmsms_bg_img_str);
		$cmsms_bg_img_url = (isset($cmsms_bg_img[0]) && is_numeric($cmsms_bg_img[0]) ? wp_get_attachment_image_src((int) $cmsms_bg_img[0], 'full') : '');
		$cmsms_bg_img_src = (is_array($cmsms_bg_img) ? 'url(' . ((is_numeric($cmsms_bg_img[0])) ? $cmsms_bg_img_url[0] : $cmsms_bg_img[1]) . ')' : 'none');
		
		
		$out .= "
	body {
		background-color : {$cmsms_bg_col};";
		
		if ($cmsms_bg_img_enable) {
			$out .= "
		background-image : {$cmsms_bg_img_src};
		background-position : {$cmsms_bg_pos};
		background-repeat : {$cmsms_bg_rep};
		background-attachment : {$cmsms_bg_att};
		background-size : {$cmsms_bg_size};
		";
		}
		
		$out .= "
	}";
	}
	
	
	return $out;
}



/* Theme Footer Styles */
function cmsms_theme_footer_styles() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$footer_height = (($cmsms_option[CMSMS_SHORTNAME . '_footer_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_footer_height'] : '450');
	
	
	$out = "
	#footer.cmsms_footer_default .footer_inner {
		min-height:{$footer_height}px;
	}
	
	.fixed_footer #main {
		margin-bottom:{$footer_height}px;
	}
";


	return $out;
}



/* Theme Header Body Footer Styles */
function cmsms_header_body_footer_styles() {
	$out = '<style type="text/css">' . 
		cmsms_theme_header_styles() . 
		cmsms_theme_bg_styles() . 
		cmsms_theme_footer_styles() . 
	'</style>';
	
	
	echo $out;
}

add_action('wp_head', 'cmsms_header_body_footer_styles');



/* Theme Footer Scripts Function */
function cmsms_theme_footer_scripts() {
	$cmsms_option = cmsms_get_global_options();
	
	
	if ( 
		$cmsms_option[CMSMS_SHORTNAME . '_preload'] && 
		($cmsms_option[CMSMS_SHORTNAME . '_preload_effect'] == 'grow' || $cmsms_option[CMSMS_SHORTNAME . '_preload_effect'] == 'fade') 
	) {
		echo "
<script type=\"text/javascript\">
	/* Page Preload */
	(function ($) { 
		if ( 
			!checker.os.iphone && 
			!checker.os.ipod && 
			!checker.os.ipad && 
			!checker.os.blackberry && 
			!checker.os.android 
		) {
			$(document).ready(function () { 
				$('body.cmsms_page_invisible').queryLoader2( { 
					backgroundColor : 		'" . $cmsms_option[CMSMS_SHORTNAME . '_preload_bg'] . "',
					barColor : 				'" . $cmsms_option[CMSMS_SHORTNAME . '_preload_color'] . "', 
					barHeight : 			3,
					minimumTime : 			500, 
					completeAnimation : 	'" . $cmsms_option[CMSMS_SHORTNAME . '_preload_effect'] . "', 
					percentage : 			" . ($cmsms_option[CMSMS_SHORTNAME . '_preload_percentage'] ? 'true' : 'false') . ", 
					onLoadComplete : function () { 
						$('body').removeClass('cmsms_page_invisible');
					} 
				} );
			} );
		} else {
			$('body.cmsms_page_invisible').removeClass('cmsms_page_invisible');
		}
		
		
		$(window).load(function () { 
			setTimeout(function () { 
				$('body.cmsms_page_invisible').removeClass('cmsms_page_invisible');
				
				
				$('#qLoverlay').fadeOut('slow', function () { 
					$(this).remove();
				} );
			}, 500);
		} );
	} )(jQuery);
</script>
";
	}
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_custom_js'] != '') {
		echo "
<script type=\"text/javascript\">
	" . stripslashes($cmsms_option[CMSMS_SHORTNAME . '_custom_js']) . "
</script>
";
	}
}

add_action('wp_print_footer_scripts', 'cmsms_theme_footer_scripts');



/* Theme Page Layout and Scheme Function */
function cmsms_theme_page_layout_scheme() {
	$cmsms_option = cmsms_get_global_options();
	
	
	if (is_singular()) {
		$cmsms_page_id = get_the_ID();
	} elseif (CMSMS_WOOCOMMERCE && is_shop()) {
		$cmsms_page_id = wc_get_page_id('shop');
	}
	
	
	if (
		is_404() || 
		is_attachment() || 
		is_singular('project') || 
		is_singular('profile') || 
		is_singular('donation')
	) {
		$cmsms_layout = 'fullwidth';
	} elseif (
		is_singular() || 
		(CMSMS_WOOCOMMERCE && is_shop())
	) {
		$cmsms_layout = get_post_meta($cmsms_page_id, 'cmsms_layout', true);
	} elseif (CMSMS_EVENTS_CALENDAR && tribe_is_event_query()) {
		$cmsms_layout = $cmsms_option[CMSMS_SHORTNAME . '_events_layout'];
	} elseif (is_archive() || is_home()) {
		$cmsms_layout = $cmsms_option[CMSMS_SHORTNAME . '_archives_layout'];
	} elseif (is_search()) {
		$cmsms_layout = $cmsms_option[CMSMS_SHORTNAME . '_search_layout'];
	} else {
		$cmsms_layout = $cmsms_option[CMSMS_SHORTNAME . '_other_layout'];
	}
	
	
	if ($cmsms_layout == '') {
		$cmsms_layout = $cmsms_option[CMSMS_SHORTNAME . '_layout'];
	}
	
	
	if (
		is_singular() || 
		(CMSMS_WOOCOMMERCE && is_shop())
	) {
		$cmsms_page_scheme = get_post_meta($cmsms_page_id, 'cmsms_page_scheme', true);
	} else {
		$cmsms_page_scheme = 'default';
	}
	
	
	if (!isset($cmsms_page_scheme) || $cmsms_page_scheme == '') {
		$cmsms_page_scheme = 'default';
	}
	
	
	return array($cmsms_layout, $cmsms_page_scheme);
}



/* Register Moving 'style' Tags from Shortcodes to Content Start */
function cmsms_global_shortcodes_styles_move($content) {
	preg_match_all("/<style.*?>([^`]*?)<\/style>/", $content, $new_content);
	
	$nostyle_content = preg_replace("/<style.*?>([^`]*?)<\/style>/", '', $content);
	
	
	$style_content = '<style type="text/css">';
	
	
	foreach ($new_content[1] as $new_content_part) {
		$style_content .= $new_content_part;
	}
	
	
	$style_content .= '</style>';
	
	
    $content = $style_content . $nostyle_content;
	
	
    return $content;
}

add_filter('the_content', 'cmsms_global_shortcodes_styles_move', 11, 2);

