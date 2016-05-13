<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Admin Panel Appearance
 * Created by CMSMasters
 * 
 */


function cmsms_options_style_tabs() {
	$cmsms_option = cmsms_get_global_options();
	
	$tabs = array();
	
	$tabs['logo'] = esc_attr__('Logo', 'yoga-fit');
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'yoga-fit');
	}
	
	$tabs['header'] = esc_attr__('Header', 'yoga-fit');
	$tabs['content'] = esc_attr__('Content', 'yoga-fit');
	$tabs['footer'] = esc_attr__('Footer', 'yoga-fit');
	$tabs['icon'] = esc_attr__('Social Icons', 'yoga-fit');
	
	return $tabs;
}


function cmsms_options_style_sections() {
	$tab = cmsms_get_the_tab();
	
	switch ($tab) {
	case 'logo':
		$sections = array();
		
		$sections['logo_section'] = esc_attr__('Logo Options', 'yoga-fit');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'yoga-fit');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'yoga-fit');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'yoga-fit');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'yoga-fit');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'yoga-fit');
		
		break;
	}
	
	return $sections;
} 


function cmsms_options_style_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'logo':
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_type', 
			'title' => __('Logo Type', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				__('Image', 'yoga-fit') . '|image', 
				__('Text', 'yoga-fit') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_url', 
			'title' => __('Logo Image', 'yoga-fit'), 
			'desc' => __('Choose your website logo image.', 'yoga-fit'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_url_retina', 
			'title' => __('Retina Logo Image', 'yoga-fit'), 
			'desc' => __('Choose logo image for retina displays.', 'yoga-fit'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_title', 
			'title' => __('Logo Title', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : CMSMS_FULLNAME), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_subtitle', 
			'title' => __('Logo Subtitle', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_custom_color', 
			'title' => __('Custom Text Colors', 'yoga-fit'), 
			'desc' => __('enable', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_title_color', 
			'title' => __('Logo Title Color', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_logo_subtitle_color', 
			'title' => __('Logo Subtitle Color', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_favicon', 
			'title' => __('Favicon', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'logo_section', 
			'id' => CMSMS_SHORTNAME . '_favicon_url', 
			'title' => __('Favicon URL', 'yoga-fit'), 
			'desc' => __('Choose your website favicon image url.', 'yoga-fit'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/favicon.ico', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_col', 
			'title' => __('Background Color', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_img_enable', 
			'title' => __('Background Image Visibility', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_img', 
			'title' => __('Background Image', 'yoga-fit'), 
			'desc' => __('Choose your custom website background image url.', 'yoga-fit'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_rep', 
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
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_pos', 
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
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_att', 
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
			'section' => 'bg_section', 
			'id' => CMSMS_SHORTNAME . '_bg_size', 
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
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_fixed_header', 
			'title' => __('Fixed Header', 'yoga-fit'), 
			'desc' => __('enable', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line', 
			'title' => __('Top Line', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_height', 
			'title' => __('Top Height', 'yoga-fit'), 
			'desc' => __('pixels', 'yoga-fit'), 
			'type' => 'number', 
			'std' => '23', 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_short_info', 
			'title' => __('Top Short Info', 'yoga-fit'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'yoga-fit') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_top_line_add_cont', 
			'title' => __('Top Additional Content', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'nav', 
			'choices' => array( 
				__('None', 'yoga-fit') . '|none', 
				__('Top Line Social Icons', 'yoga-fit') . '|social', 
				__('Top Line Navigation', 'yoga-fit') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_styles', 
			'title' => __('Header Styles', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 's_logo', 
			'choices' => array( 
				__('Left Logo', 'yoga-fit') . '|l_logo', 
				__('Centered Logo', 'yoga-fit') . '|c_logo', 
				__('Side Logo', 'yoga-fit') . '|s_logo'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_search', 
			'title' => __('Header Search', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_middle_html', 
			'title' => __('Header Middle Custom Html', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_middle_add_html', 
			'title' => __('Middle Header Custom HTML', 'yoga-fit'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'yoga-fit') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_mid_height', 
			'title' => __('Header Middle Height', 'yoga-fit'), 
			'desc' => __('pixels', 'yoga-fit'), 
			'type' => 'number', 
			'std' => '100', 
			'min' => '50' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => CMSMS_SHORTNAME . '_header_bot_height', 
			'title' => __('Header Bottom & Scrolled Navigation Height', 'yoga-fit'), 
			'desc' => __('pixels', 'yoga-fit'), 
			'type' => 'number', 
			'std' => '60', 
			'min' => '40' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_layout', 
			'title' => __('Layout Type by Default', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_archives_layout', 
			'title' => __('Archives Layout Type', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_search_layout', 
			'title' => __('Search Layout Type', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
	if (CMSMS_EVENTS_CALENDAR) {
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_events_layout', 
			'title' => __('Events Calendar Layout Type', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				__('Right Sidebar', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
	}
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_other_layout', 
			'title' => __('Other Layout Type', 'yoga-fit'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				__('Right Sidebar', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				__('Left Sidebar', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				__('Full Width', 'yoga-fit') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_scheme', 
			'title' => __('Heading Custom Color Scheme by Default', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'first', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_image_enable', 
			'title' => __('Heading Background Image Visibility by Default', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_image', 
			'title' => __('Heading Background Image by Default', 'yoga-fit'), 
			'desc' => __('Choose your custom heading background image by default.', 'yoga-fit'), 
			'type' => 'upload', 
			'std' => get_template_directory_uri() . '/img/heading_bg.jpg', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_repeat', 
			'title' => __('Heading Background Repeat by Default', 'yoga-fit'), 
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
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_attachment', 
			'title' => __('Heading Background Attachment by Default', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				__('Scroll', 'yoga-fit') . '|scroll', 
				__('Fixed', 'yoga-fit') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_size', 
			'title' => __('Heading Background Size by Default', 'yoga-fit'), 
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
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_bg_color', 
			'title' => __('Heading Title Background Color Overlay by Default', 'yoga-fit'),
			'desc' => '',
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_height', 
			'title' => __('Heading Title Height by Default', 'yoga-fit'), 
			'desc' => __('pixels', 'yoga-fit'), 
			'type' => 'number', 
			'std' => '90', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_heading_standard_title', 
			'title' => __('Standard Heading Title by Default', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_breadcrumbs', 
			'title' => __('Breadcrumbs Visibility by Default', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_scheme', 
			'title' => __('Bottom Custom Color Scheme', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'bottom', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_sidebar', 
			'title' => __('Bottom Sidebar Visibility by Default', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => CMSMS_SHORTNAME . '_bottom_sidebar_layout', 
			'title' => __('Bottom Sidebar Layout by Default', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '131313', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_scheme', 
			'title' => __('Footer Custom Color Scheme', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsms_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_type', 
			'title' => __('Footer Type', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				__('With logo', 'yoga-fit') . '|default', 
				__('Small', 'yoga-fit') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_additional_content', 
			'title' => __('Footer Additional Content', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'nav', 
			'choices' => array( 
				__('None', 'yoga-fit') . '|none', 
				__('Footer Navigation', 'yoga-fit') . '|nav', 
				__('Social Icons', 'yoga-fit') . '|social', 
				__('Custom HTML', 'yoga-fit') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_fixed_footer', 
			'title' => __('Fixed Footer', 'yoga-fit'), 
			'desc' => __('enable', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_height', 
			'title' => __('Footer Height', 'yoga-fit'), 
			'desc' => __('pixels', 'yoga-fit'), 
			'type' => 'number', 
			'std' => '520', 
			'min' => '200' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo', 
			'title' => __('Footer Logo', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo_url', 
			'title' => __('Footer Logo', 'yoga-fit'), 
			'desc' => __('Choose your website footer logo image.', 'yoga-fit'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_logo_url_retina', 
			'title' => __('Footer Logo for Retina', 'yoga-fit'), 
			'desc' => __('Choose your website footer logo image for retina.', 'yoga-fit'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_nav', 
			'title' => __('Footer Navigation', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_social', 
			'title' => __('Footer Social Icons', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_html', 
			'title' => __('Footer Custom HTML', 'yoga-fit'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'yoga-fit') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => CMSMS_SHORTNAME . '_footer_copyright', 
			'title' => __('Copyright Text', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => CMSMS_FULLNAME . ' &copy; 2015 | All Rights Reserved', 
			'class' => 'nohtml' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => CMSMS_SHORTNAME . '_social_icons', 
			'title' => __('Social Icons', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsms-icon-twitter-circled|#|' . __('Twitter', 'yoga-fit') . '|true', 
				'cmsms-icon-facebook-circled|#|' . __('Facebook', 'yoga-fit') . '|true', 
				'cmsms-icon-gplus-circled|#|' . __('Google+', 'yoga-fit') . '|true', 
				'cmsms-icon-vimeo-circled|#|' . __('Vimeo', 'yoga-fit') . '|true', 
				'cmsms-icon-skype-circled|#|' . __('Skype', 'yoga-fit') . '|true' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

