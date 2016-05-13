<?php 
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.4
 * 
 * Profile Options Functions
 * Created by CMSMasters
 * 
 */


if (!function_exists('get_custom_profile_meta_fields')) {
function get_custom_profile_meta_fields() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$cmsms_global_bottom_sidebar = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar']) && $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsms_global_bottom_sidebar_layout = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';
	
	$cmsms_global_profile_post_title = (isset($cmsms_option[CMSMS_SHORTNAME . '_profile_post_title']) && $cmsms_option[CMSMS_SHORTNAME . '_profile_post_title'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_profile_post_title'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsms_global_profile_post_details_title = (isset($cmsms_option[CMSMS_SHORTNAME . '_profile_post_details_title']) && $cmsms_option[CMSMS_SHORTNAME . '_profile_post_details_title'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_profile_post_details_title'] : '';
	
	$cmsms_global_profile_post_share_box = (isset($cmsms_option[CMSMS_SHORTNAME . '_profile_post_share_box']) && $cmsms_option[CMSMS_SHORTNAME . '_profile_post_share_box'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_profile_post_share_box'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsms_global_bg = (isset($cmsms_option[CMSMS_SHORTNAME . '_theme_layout']) && $cmsms_option[CMSMS_SHORTNAME . '_theme_layout'] === 'boxed') ? true : false;
	
	
	$cmsms_option_name = 'cmsms_profile_';
	
	
	$tabs_array = array();
	
	
	$tabs_array['cmsms_profile'] = array( 
		'label' => esc_html__('Profile', 'yoga-fit'), 
		'value'	=> 'cmsms_profile' 
	);
	
	
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
	
	
	$custom_profile_meta_fields = array( 
		array( 
			'id'	=> $cmsms_option_name . 'tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsms_profile', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsms_profile', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> __('Profile Title', 'yoga-fit'), 
			'desc'	=> __('Show', 'yoga-fit'), 
			'id'	=> $cmsms_option_name . 'title', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_profile_post_title 
		), 
		array( 
			'label'	=> __('Subtitle', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'subtitle', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Profile Details Title', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'details_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_profile_post_details_title 
		), 
		array( 
			'label'	=> __('Social Icons', 'yoga-fit'), 
			'desc'	=> __('Add social icons for this profile', 'yoga-fit'), 
			'id'	=> $cmsms_option_name . 'social', 
			'type'	=> 'social', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Profile Info', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Profile Features 1 Title', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_one_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Profile Features 1', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_one', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Profile Features 2 Title', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_two_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Profile Features 2', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_two', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Profile Features 3 Title', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_three_title', 
			'type'	=> 'text_long', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Profile Features 3', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> $cmsms_option_name . 'features_three', 
			'type'	=> 'repeatable_multiple', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Sharing Box', 'yoga-fit'), 
			'desc'	=> __('Show', 'yoga-fit'), 
			'id'	=> $cmsms_option_name . 'sharing_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsms_global_profile_post_share_box 
		), 
		array( 
			'label'	=> __("'Read More' Buttons Text", 'yoga-fit'), 
			'desc'	=> __("Enter the 'Read More' button text that should be used in you blog shortcode", 'yoga-fit'), 
			'id'	=> $cmsms_option_name . 'read_more', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> __('Read More', 'yoga-fit') 
		), 
		array( 
			'id'	=> 'cmsms_profile', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsms_layout', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
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
	
	
	return $custom_profile_meta_fields;
}
}

