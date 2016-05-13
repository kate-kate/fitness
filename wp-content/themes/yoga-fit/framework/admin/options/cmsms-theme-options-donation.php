<?php 
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.1
 * 
 * Donation Options Functions
 * Created by CMSMasters
 * 
 */


if (!function_exists('get_custom_donation_meta_fields')) {
function get_custom_donation_meta_fields() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$cmsms_global_layout = (isset($cmsms_option[CMSMS_SHORTNAME . '_layout']) && $cmsms_option[CMSMS_SHORTNAME . '_layout'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_layout'] : 'r_sidebar';
	
	$cmsms_global_bottom_sidebar = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar']) && $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] !== '') ? (($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsms_global_bottom_sidebar_layout = (isset($cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'])) ? $cmsms_option[CMSMS_SHORTNAME . '_bottom_sidebar_layout'] : '14141414';
	
	$cmsms_global_bg = (isset($cmsms_option[CMSMS_SHORTNAME . '_theme_layout']) && $cmsms_option[CMSMS_SHORTNAME . '_theme_layout'] === 'boxed') ? true : false;
	
	
	$tabs_array = array();
	
	
	$tabs_array['cmsms_donation'] = array( 
		'label' => esc_html__('Donation', 'yoga-fit'), 
		'value'	=> 'cmsms_donation' 
	);
	
	
	$tabs_array['cmsms_donator'] = array( 
		'label' => esc_html__('Donator', 'yoga-fit'), 
		'value'	=> 'cmsms_donator' 
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
	
	
	$custom_donation_meta_fields = array( 
		array( 
			'id'	=> 'cmsms_donation_tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsms_donation', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsms_donation', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> __('Amount', 'yoga-fit'), 
			'desc'	=> __('do not add currency symbol', 'yoga-fit'), 
			'id'	=> 'cmsms_donation_amount', 
			'type'	=> 'number', 
			'hide'	=> '', 
			'std'	=> '', 
			'min' 	=> '1', 
			'max' 	=> '', 
			'step' 	=> '1' 
		), 
		array( 
			'label'	=> __('Recurrence', 'yoga-fit'), 
			'desc'	=> __('Choose whether and how often you want to repeat this donation', 'yoga-fit'), 
			'id'	=> 'cmsms_recurrence_period', 
			'type'	=> 'radio', 
			'hide'	=> '', 
			'std'	=> '1', 
			'options' => array( 
				'1' => array( 
					'label' => __('Not recurring', 'yoga-fit'), 
					'value'	=> '1' 
				), 
				'7' => array( 
					'label' => __('Weekly', 'yoga-fit'), 
					'value'	=> '7' 
				), 
				'30' => array( 
					'label' => __('Monthly', 'yoga-fit'), 
					'value'	=> '30' 
				), 
				'365' => array( 
					'label' => __('Yearly', 'yoga-fit'), 
					'value'	=> '365' 
				) 
			) 
		), 
		array( 
			'label'	=> __('Campaign', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donation_campaign', 
			'type'	=> 'select', 
			'hide'	=> '', 
			'std'	=> '', 
			'options' => cmsms_get_donation_campaigns() 
		), 
		array( 
			'label'	=> __('Hide Donator Information?', 'yoga-fit'), 
			'desc'	=> __('Yes', 'yoga-fit'), 
			'id'	=> 'cmsms_anonymous_donation', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> 'false' 
		), 
		array( 
			'id'	=> 'cmsms_donation', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsms_donator', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('First Name', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_firstname', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Last Name', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_lastname', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Email', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_email', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Company', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_company', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Address', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_address', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('City', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_city', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('State / Province', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_state', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Postal / Zip Code', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_zip', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Country', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_country', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Phone Number', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_phone', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> __('Website', 'yoga-fit'), 
			'desc'	=> '', 
			'id'	=> 'cmsms_donator_website', 
			'type'	=> 'text', 
			'hide'	=> '', 
			'std'	=> '' 
		), 
		array( 
			'id'	=> 'cmsms_donator', 
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
			'label'	=> __('About Donator Box', 'yoga-fit'), 
			'desc'	=> __('Show', 'yoga-fit'), 
			'id'	=> 'cmsms_donator_box', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> 'true' 
		), 
		array( 
			'id'	=> 'cmsms_layout', 
			'type'	=> 'tab_finish' 
		) 
	);
	
	
	return $custom_donation_meta_fields;
}
}



/* Get Donation Campaigns Array For Select */
function cmsms_get_donation_campaigns() {
	$campaigns = get_posts(array( 
		'post_type' => 			'campaign', 
		'orderby' => 			'post_date', 
		'order' => 				'ASC', 
		'posts_per_page' => 	-1 
	) );
	
	
	$array = array();
	
	
	$array[''] = array( 
		'label' => 	__('No special campaign', 'yoga-fit'), 
		'value' => 	'' 
	);
	
	
	foreach ($campaigns as $campaign) {
		$array[$campaign->ID] = array( 
			'label' => 	$campaign->post_title, 
			'value' => 	$campaign->ID 
		);
	}
	
	
	return $array;
}

