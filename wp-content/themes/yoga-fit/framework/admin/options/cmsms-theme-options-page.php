<?php 
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.1
 * 
 * Page Options Functions
 * Created by CMSMasters
 * 
 */


if (!function_exists('get_custom_page_meta_fields')) {
function get_custom_page_meta_fields() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$cmsms_global_layout = (isset($cmsms_option[CMSMS_SHORTNAME . '_layout']) && $cmsms_option[CMSMS_SHORTNAME . '_layout'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_layout'] : 'r_sidebar';
	
	$cmsms_global_bottom_sidebar = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar']) && $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsms_global_bottom_sidebar_layout = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';
	
	$cmsms_global_bg = (isset($cmsms_option[CMSMS_SHORTNAME . '_theme_layout']) && $cmsms_option[CMSMS_SHORTNAME . '_theme_layout'] === 'boxed') ? true : false;
	
	
	$cmsms_option_name = 'cmsms_page_';
	
	
	$tabs_array = array();
	
	
	$tabs_array['cmsms_layout'] = array( 
		'label' => esc_html__('Layout', 'yoga-fit'), 
		'value'	=> 'cmsms_layout' 
	);
	
	
	if ($cmsms_global_bg) {
		$tabs_array['cmsms_bg'] = array( 
			'label' => esc_html__('Background', 'yoga-fit'),  
			'value'	=> 'cmsms_bg' 
		);
	}
	
	
	$tabs_array['cmsms_heading'] = array( 
		'label' => esc_html__('Heading', 'yoga-fit'), 
		'value'	=> 'cmsms_heading' 
	);
	
	
	$custom_page_meta_fields = array( 
		array( 
			'id'	=> $cmsms_option_name . 'tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsms_layout', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsms_layout', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> __('Page Color Scheme', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_page_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'false', 
			'std'	=> 'default' 
		), 
		array( 
			'label'	=> __('Page Layout', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_layout', 
			'type'	=> 'radio_img', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_layout, 
			'options' => array( 
				'r_sidebar' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg', 
					'label' => __('Right Sidebar', 'yoga-fit'), 
					'value'	=> 'r_sidebar' 
				), 
				'l_sidebar' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg', 
					'label' => __('Left Sidebar', 'yoga-fit'), 
					'value'	=> 'l_sidebar' 
				), 
				'fullwidth' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg', 
					'label' => __('Full Width', 'yoga-fit'), 
					'value'	=> 'fullwidth' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Choose Right\Left Sidebar', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Bottom Sidebar', 'yoga-fit'), 
			'desc'	=> __('Show', 'yoga-fit'), 
			'id'	=> 'cmsms_bottom_sidebar', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_bottom_sidebar 
		), 
		array( 
			'label'	=> __('Choose Bottom Sidebar', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bottom_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Choose Bottom Sidebar Layout', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_bottom_sidebar_layout', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsms_global_bottom_sidebar_layout, 
			'options' => array( 
				'11' => array( 
					'label' => '1/1',
					'value'	=> '11' 
				), 
				'1212' => array( 
					'label' => '1/2 + 1/2',
					'value'	=> '1212' 
				), 
				'1323' => array( 
					'label' => '1/3 + 2/3',
					'value'	=> '1323' 
				), 
				'2313' => array( 
					'label' => '2/3 + 1/3',
					'value'	=> '2313' 
				), 
				'1434' => array( 
					'label' => '1/4 + 3/4',
					'value'	=> '1434' 
				), 
				'3414' => array( 
					'label' => '3/4 + 1/4',
					'value'	=> '3414' 
				), 
				'131313' => array( 
					'label' => '1/3 + 1/3 + 1/3',
					'value'	=> '131313' 
				), 
				'121414' => array( 
					'label' => '1/2 + 1/4 + 1/4',
					'value'	=> '121414' 
				), 
				'141214' => array( 
					'label' => '1/4 + 1/2 + 1/4',
					'value'	=> '141214' 
				), 
				'141412' => array( 
					'label' => '1/4 + 1/4 + 1/2',
					'value'	=> '141412' 
				), 
				'14141414' => array( 
					'label' => '1/4 + 1/4 + 1/4 + 1/4',
					'value'	=> '14141414' 
				) 
			) 
		), 
		array( 
			'id'	=> 'cmsms_layout', 
			'type'	=> 'tab_finish' 
		) 
	);
	
	
	return $custom_page_meta_fields;
}
}

