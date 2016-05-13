<?php 
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.1
 * 
 * Post, Page, Project & Profile General Options
 * Created by CMSMasters
 * 
 */


if (!function_exists('get_custom_general_meta_fields')) {
function get_custom_general_meta_fields() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$cmsms_global_bg_col = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_col']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_col'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_col'] : '#fefefe';
	$cmsms_global_bg_img_enable = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bg_img_enable'] == 1) ? 'true' : 'false') : 'true';
	$cmsms_global_bg_img = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_img']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_img'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_img'] : '';
	$cmsms_global_bg_rep = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_rep']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_rep'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_rep'] : 'repeat';
	$cmsms_global_bg_pos = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_pos']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_pos'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_pos'] : 'top center';
	$cmsms_global_bg_att = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_att']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_att'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_att'] : 'scroll';
	$cmsms_global_bg_size = (isset($cmsms_option[CMSMS_SHORTNAME . '_bg_size']) && $cmsms_option[CMSMS_SHORTNAME . '_bg_size'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_bg_size'] : 'auto';
	
	
	$cmsms_global_heading_scheme = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_scheme']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'] : 'first';
	$cmsms_global_heading_bg_img_enable = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] == 1) ? 'true' : 'false') : 'true';
	$cmsms_global_heading_bg_img = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'] : '';
	$cmsms_global_heading_bg_rep = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'] : 'repeat';
	$cmsms_global_heading_bg_att = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'] : 'scroll';
	$cmsms_global_heading_bg_size = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'] : 'cover';
	$cmsms_global_heading_bg_color = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'] : '';
	$cmsms_global_heading_height = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_height']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_heading_height'] : '';
	
	
	$cmsms_global_heading_standard_title = (isset($cmsms_option[CMSMS_SHORTNAME . '_heading_standard_title']) && $cmsms_option[CMSMS_SHORTNAME . '_heading_standard_title'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_heading_standard_title'] == 1) ? 'true' : 'false') : 'true';
	$cmsms_global_breadcrumbs = (isset($cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs']) && $cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] == 1) ? 'true' : 'false') : 'true';
	
	
	$custom_general_meta_fields = array( 
		array( 
			'id'	=> 'cmsms_bg', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Background', 'yoga-fit'), 
			'desc'	=> __('Use Default', 'yoga-fit'), 
			'id'	=> 'cmsms_bg_default', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> __('Background Color', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_col', 
			'type'	=> 'color', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_col 
		), 
		array( 
			'label'	=> __('Background Image Visibility', 'yoga-fit'), 
			'desc'	=> __('Show', 'yoga-fit'), 
			'id'	=> 'cmsms_bg_img_enable', 
			'type'	=> 'checkbox', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_img_enable 
		), 
		array( 
			'label'	=> __('Background Image', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_img', 
			'type'	=> 'image', 
			'hide'	=> 'true', 
			'cancel' => '', 
			'std'	=> $cmsms_global_bg_img, 
			'frame' => 'select', 
			'multiple' => false 
		), 
		array( 
			'label'	=> __('Background Repeat', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_rep', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_rep, 
			'options' => array( 
				'no-repeat' => array( 
					'label' => __('No Repeat', 'yoga-fit'), 
					'value'	=> 'no-repeat' 
				), 
				'repeat-x' => array( 
					'label' => __('Repeat Horizontally', 'yoga-fit'), 
					'value'	=> 'repeat-x' 
				), 
				'repeat-y' => array( 
					'label' => __('Repeat Vertically', 'yoga-fit'), 
					'value'	=> 'repeat-y' 
				), 
				'repeat' => array( 
					'label' => __('Repeat', 'yoga-fit'), 
					'value'	=> 'repeat' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Background Position', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_pos', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_pos, 
			'options' => array( 
				'top left' => array( 
					'label' => __('Top Left', 'yoga-fit'), 
					'value'	=> 'top left' 
				), 
				'top center' => array( 
					'label' => __('Top Center', 'yoga-fit'), 
					'value'	=> 'top center' 
				), 
				'top right' => array( 
					'label' => __('Top Right', 'yoga-fit'), 
					'value'	=> 'top right' 
				), 
				'center left' => array( 
					'label' => __('Center Left', 'yoga-fit'), 
					'value'	=> 'center left' 
				), 
				'center center' => array( 
					'label' => __('Center Center', 'yoga-fit'), 
					'value'	=> 'center center' 
				), 
				'center right' => array( 
					'label' => __('Center Right', 'yoga-fit'), 
					'value'	=> 'center right' 
				), 
				'bottom left' => array( 
					'label' => __('Bottom Left', 'yoga-fit'), 
					'value'	=> 'bottom left' 
				), 
				'bottom center' => array( 
					'label' => __('Bottom Center', 'yoga-fit'), 
					'value'	=> 'bottom center' 
				), 
				'bottom right' => array( 
					'label' => __('Bottom Right', 'yoga-fit'), 
					'value'	=> 'bottom right' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Background Attachment', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_att', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_att, 
			'options' => array( 
				'scroll' => array( 
					'label' => __('Scroll', 'yoga-fit'), 
					'value'	=> 'scroll' 
				), 
				'fixed' => array( 
					'label' => __('Fixed', 'yoga-fit'), 
					'value'	=> 'fixed' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Background Size', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bg_size', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bg_size, 
			'options' => array( 
				'auto' => array( 
					'label' => __('Auto', 'yoga-fit'), 
					'value'	=> 'auto' 
				), 
				'cover' => array( 
					'label' => __('Cover', 'yoga-fit'), 
					'value'	=> 'cover' 
				), 
				'contain' => array( 
					'label' => __('Contain', 'yoga-fit'), 
					'value'	=> 'contain' 
				)
			) 
		), 
		array( 
			'id'	=> 'cmsms_bg', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsms_heading', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Heading', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading', 
			'type'	=> 'radio', 
			'hide'	=> '', 
			'std'	=> 'default', 
			'options' => array( 
				'default' => array( 
					'label' => __('Default', 'yoga-fit'), 
					'value'	=> 'default' 
				), 
				'custom' => array( 
					'label' => __('Custom', 'yoga-fit'), 
					'value'	=> 'custom' 
				), 
				'disabled' => array( 
					'label' => __('Disabled', 'yoga-fit'), 
					'value'	=> 'disabled' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Heading Title', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_title', 
			'type'	=> 'text_long', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Heading Subtitle', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_subtitle', 
			'type'	=> 'textarea', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Heading Icon', 'yoga-fit'), 
			'desc'	=> __('Choose your custom icon for this heading', 'yoga-fit'), 
			'id'	=> 'cmsms_heading_icon', 
			'type'	=> 'icon', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Heading Color Scheme', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_scheme 
		), 
		array( 
			'label'	=> __('Heading Background Image Visibility', 'yoga-fit'), 
			'desc'	=> __('Show', 'yoga-fit'), 
			'id'	=> 'cmsms_heading_bg_img_enable', 
			'type'	=> 'checkbox', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_bg_img_enable 
		), 
		array( 
			'label'	=> __('Heading Background Image', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_bg_img', 
			'type'	=> 'image', 
			'hide'	=> 'true', 
			'cancel' => '', 
			'std'	=> $cmsms_global_heading_bg_img, 
			'frame' => 'select', 
			'multiple' => false 
		), 
		array( 
			'label'	=> __('Heading Background Repeat', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_bg_rep', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_bg_rep, 
			'options' => array( 
				'no-repeat' => array( 
					'label' => __('No Repeat', 'yoga-fit'), 
					'value'	=> 'no-repeat' 
				), 
				'repeat-x' => array( 
					'label' => __('Repeat Horizontally', 'yoga-fit'), 
					'value'	=> 'repeat-x' 
				), 
				'repeat-y' => array( 
					'label' => __('Repeat Vertically', 'yoga-fit'), 
					'value'	=> 'repeat-y' 
				), 
				'repeat' => array( 
					'label' => __('Repeat', 'yoga-fit'), 
					'value'	=> 'repeat' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Heading Background Attachment', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_bg_att', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_bg_att, 
			'options' => array( 
				'scroll' => array( 
					'label' => __('Scroll', 'yoga-fit'), 
					'value'	=> 'scroll' 
				), 
				'fixed' => array( 
					'label' => __('Fixed', 'yoga-fit'), 
					'value'	=> 'fixed' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Heading Background Size', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_bg_size', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_bg_size, 
			'options' => array( 
				'auto' => array( 
					'label' => __('Auto', 'yoga-fit'), 
					'value'	=> 'auto' 
				), 
				'cover' => array( 
					'label' => __('Cover', 'yoga-fit'), 
					'value'	=> 'cover' 
				), 
				'contain' => array( 
					'label' => __('Contain', 'yoga-fit'), 
					'value'	=> 'contain' 
				)
			) 
		),
		array( 
			'label'	=> __('Heading Title Background Color Overlay', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_heading_bg_color', 
			'type'	=> 'rgba', 
			'hide'	=> 'false', 
			'std'	=> $cmsms_global_heading_bg_color 
		), 
		array( 
			'label'	=> __('Heading Title Height', 'yoga-fit'), 
			'desc'	=> __('pixels', 'yoga-fit'), 
			'id'	=> 'cmsms_heading_height', 
			'type'	=> 'number', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_heading_height, 
			'min' 	=> '0', 
			'max' 	=> '', 
			'step' 	=> '' 
		), 
		array( 
			'label'	=> __('Standard Heading Title', 'yoga-fit'), 
			'desc'	=> __('Show', 'yoga-fit'), 
			'id'	=> 'cmsms_heading_standard_title', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_heading_standard_title, 
		), 
		array( 
			'label'	=> __('Breadcrumbs', 'yoga-fit'), 
			'desc'	=> __('Show', 'yoga-fit'), 
			'id'	=> 'cmsms_breadcrumbs', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_breadcrumbs 
		), 
		array( 
			'id'	=> 'cmsms_heading', 
			'type'	=> 'tab_finish' 
		) 
	);
	
	
	return $custom_general_meta_fields;
}
}

