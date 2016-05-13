<?php 
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_general_tabs() {
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'yoga-fit');
	$tabs['sidebar'] = esc_attr__('Sidebars', 'yoga-fit');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'yoga-fit');
	$tabs['error'] = esc_attr__('404', 'yoga-fit');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'yoga-fit');
	$tabs['code'] = esc_attr__('Custom Codes', 'yoga-fit');
	//WPML Installer handler
	$tabs['wpml'] = __('WPML Installer', 'yoga-fit');
	
	if (class_exists('Cmsms_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'yoga-fit');
	}
	
	return $tabs;
}


function cmsms_options_general_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'yoga-fit');
		
		break;
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'yoga-fit');
	//WPML Installer
		break;

	case 'wpml':
		$sections = array();
		
		$sections['wpml_section'] = __('WPML Installer', 'yoga-fit');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'yoga-fit');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'yoga-fit');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'yoga-fit');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'yoga-fit');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'yoga-fit');
		
		break;
	}
	
	return $sections;	
} 


function cmsms_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_theme_layout', 
			'title' => __('Theme Layout', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'liquid', 
			'choices' => array( 
				__('Liquid', 'yoga-fit') . '|liquid', 
				__('Boxed', 'yoga-fit') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_responsive', 
			'title' => __('Responsive Layout', 'yoga-fit'), 
			'desc' => __('enable', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_retina', 
			'title' => __('High Resolution', 'yoga-fit'), 
			'desc' => __('enable', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload', 
			'title' => __('Ajax Preloader', 'yoga-fit'), 
			'desc' => __('enable', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_bg', 
			'title' => __('Preloader Background Color', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_color', 
			'title' => __('Preloader Bar Color', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#dadada' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_effect', 
			'title' => __('Preloader Animation Effect', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'grow', 
			'choices' => array( 
				__('Grow', 'yoga-fit') . '|grow', 
				__('Fade', 'yoga-fit') . '|fade', 
				__('Minimal', 'yoga-fit') . '|minimal', 
				__('Flash', 'yoga-fit') . '|flash', 
				__('Barber Shop', 'yoga-fit') . '|barber-shop', 
				__('Mac OSX', 'yoga-fit') . '|mac-osx', 
				__('Fill Left', 'yoga-fit') . '|fill-left', 
				__('Flat Top', 'yoga-fit') . '|flat-top', 
				__('Big Counter', 'yoga-fit') . '|big-counter', 
				__('Corner Indicator', 'yoga-fit') . '|corner-indicator', 
				__('Bounce', 'yoga-fit') . '|bounce', 
				__('Loading Bar', 'yoga-fit') . '|loading-bar', 
				__('Center Circle', 'yoga-fit') . '|center-circle', 
				__('Center Atom', 'yoga-fit') . '|center-atom', 
				__('Center Radar', 'yoga-fit') . '|center-radar', 
				__('Center Simple', 'yoga-fit') . '|center-simple' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => CMSMS_SHORTNAME . '_preload_percentage', 
			'title' => __('Preloader Percentage', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => CMSMS_SHORTNAME . '_sidebar', 
			'title' => __('Custom Sidebars', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	//WPML 
	case 'wpml':
		$options[] = array( 
			'section' => 'wpml_section', 
			'id' => CMSMS_SHORTNAME . '_wpml', 
			'title' => __('Add WPML Plugin', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'wpml', 
			'std' => '' 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_nav', 
			'title' => __('Website Pages', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_categs', 
			'title' => __('Blog Archives by Categories', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_tags', 
			'title' => __('Blog Archives by Tags', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_month', 
			'title' => __('Blog Archives by Month', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_categs', 
			'title' => __('Portfolio Archives by Categories', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => CMSMS_SHORTNAME . '_sitemap_pj_tags', 
			'title' => __('Portfolio Archives by Tags', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_color', 
			'title' => __('Text Color', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_color', 
			'title' => __('Background Color', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_color', 
			'title' => __('Background Color', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_img_enable', 
			'title' => __('Background Image Visibility', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_image', 
			'title' => __('Background Image', 'yoga-fit'), 
			'desc' => __('Choose your custom error page background image.', 'yoga-fit'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/heading_bg.jpg', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_rep', 
			'title' => __('Background Repeat', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				__('No Repeat', 'yoga-fit') . '|no-repeat', 
				__('Repeat Horizontally', 'yoga-fit') . '|repeat-x', 
				__('Repeat Vertically', 'yoga-fit') . '|repeat-y', 
				__('Repeat', 'yoga-fit') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_pos', 
			'title' => __('Background Position', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				__('Top Left', 'yoga-fit') . '|top left', 
				__('Top Center', 'yoga-fit') . '|top center', 
				__('Top Right', 'yoga-fit') . '|top right', 
				__('Center Left', 'yoga-fit') . '|center left', 
				__('Center Center', 'yoga-fit') . '|center center', 
				__('Center Right', 'yoga-fit') . '|center right', 
				__('Bottom Left', 'yoga-fit') . '|bottom left', 
				__('Bottom Center', 'yoga-fit') . '|bottom center', 
				__('Bottom Right', 'yoga-fit') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_att', 
			'title' => __('Background Attachment', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				__('Scroll', 'yoga-fit') . '|scroll', 
				__('Fixed', 'yoga-fit') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_bg_size', 
			'title' => __('Background Size', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				__('Auto', 'yoga-fit') . '|auto', 
				__('Cover', 'yoga-fit') . '|cover', 
				__('Contain', 'yoga-fit') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_search', 
			'title' => __('Search Line', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_button', 
			'title' => __('Sitemap Button', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => CMSMS_SHORTNAME . '_error_sitemap_link', 
			'title' => __('Sitemap Page URL', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => ''
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_skin', 
			'title' => __('Skin', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				__('Dark', 'yoga-fit') . '|dark', 
				__('Light', 'yoga-fit') . '|light', 
				__('Mac', 'yoga-fit') . '|mac', 
				__('Metro Black', 'yoga-fit') . '|metro-black', 
				__('Metro White', 'yoga-fit') . '|metro-white', 
				__('Parade', 'yoga-fit') . '|parade', 
				__('Smooth', 'yoga-fit') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_path', 
			'title' => __('Path', 'yoga-fit'), 
			'desc' => __('Sets path for switching windows', 'yoga-fit'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				__('Vertical', 'yoga-fit') . '|vertical', 
				__('Horizontal', 'yoga-fit') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_infinite', 
			'title' => __('Infinite', 'yoga-fit'), 
			'desc' => __('Sets the ability to infinite the group', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_aspect_ratio', 
			'title' => __('Keep Aspect Ratio', 'yoga-fit'), 
			'desc' => __('Sets the resizing method used to keep aspect ratio within the viewport', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_mobile_optimizer', 
			'title' => __('Mobile Optimizer', 'yoga-fit'), 
			'desc' => __('Make lightboxes optimized for giving better experience with mobile devices', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_max_scale', 
			'title' => __('Max Scale', 'yoga-fit'), 
			'desc' => __('Sets the maximum viewport scale of the content', 'yoga-fit'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_min_scale', 
			'title' => __('Min Scale', 'yoga-fit'), 
			'desc' => __('Sets the minimum viewport scale of the content', 'yoga-fit'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_inner_toolbar', 
			'title' => __('Inner Toolbar', 'yoga-fit'), 
			'desc' => __('Bring buttons into windows, or let them be over the overlay', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_smart_recognition', 
			'title' => __('Smart Recognition', 'yoga-fit'), 
			'desc' => __('Sets content auto recognize from web pages', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_fullscreen_one_slide', 
			'title' => __('Fullscreen One Slide', 'yoga-fit'), 
			'desc' => __('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_fullscreen_viewport', 
			'title' => __('Fullscreen Viewport', 'yoga-fit'), 
			'desc' => __('Sets the resizing method used to fit content within the fullscreen mode', 'yoga-fit'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				__('Center', 'yoga-fit') . '|center', 
				__('Fit', 'yoga-fit') . '|fit', 
				__('Fill', 'yoga-fit') . '|fill', 
				__('Stretch', 'yoga-fit') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_toolbar', 
			'title' => __('Toolbar Controls', 'yoga-fit'), 
			'desc' => __('Sets buttons be available or not', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_arrows', 
			'title' => __('Arrow Controls', 'yoga-fit'), 
			'desc' => __('Enable the arrow buttons', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_fullscreen', 
			'title' => __('Fullscreen Controls', 'yoga-fit'), 
			'desc' => __('Sets the fullscreen button', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_thumbnail', 
			'title' => __('Thumbnails Controls', 'yoga-fit'), 
			'desc' => __('Sets the thumbnail navigation', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_keyboard', 
			'title' => __('Keyboard Controls', 'yoga-fit'), 
			'desc' => __('Sets the keyboard navigation', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_mousewheel', 
			'title' => __('Mouse Wheel Controls', 'yoga-fit'), 
			'desc' => __('Sets the mousewheel navigation', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_swipe', 
			'title' => __('Swipe Controls', 'yoga-fit'), 
			'desc' => __('Sets the swipe navigation', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => CMSMS_SHORTNAME . '_ilightbox_controls_slideshow', 
			'title' => __('Slideshow Controls', 'yoga-fit'), 
			'desc' => __('Enable the slideshow feature and button', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_css', 
			'title' => __('Custom CSS', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_custom_js', 
			'title' => __('Custom JavaScript', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_api_key', 
			'title' => __('Twitter API key', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_api_secret', 
			'title' => __('Twitter API secret', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_access_token', 
			'title' => __('Twitter Access token', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => CMSMS_SHORTNAME . '_access_token_secret', 
			'title' => __('Twitter Access token secret', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMS_SHORTNAME . '_recaptcha_public_key', 
			'title' => __('reCAPTCHA Public Key', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => CMSMS_SHORTNAME . '_recaptcha_private_key', 
			'title' => __('reCAPTCHA Private Key', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

