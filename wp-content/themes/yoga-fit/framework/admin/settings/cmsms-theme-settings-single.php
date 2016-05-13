<?php 
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Admin Panel Post, Project & Profile Options
 * Created by CMSMasters
 * 
 */


function cmsms_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'yoga-fit');
	
	if (class_exists('Cmsms_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'yoga-fit');
	}
	
	if (class_exists('Cmsms_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'yoga-fit');
	}
	
	if (CMSMS_DONATIONS) {
		$tabs['campaign'] = esc_attr__('Campaign', 'yoga-fit');
	}
	
	if (CMSMS_TIMETABLE) {
		$tabs['tt_event'] = esc_attr__('Timetable Event', 'yoga-fit');
	}
	
	
	return $tabs;
}


function cmsms_options_single_sections() {
	$tab = cmsms_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'yoga-fit');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'yoga-fit');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'yoga-fit');
		
		
		break;
	case 'campaign':
		$sections = array();
		
		$sections['campaign_section'] = esc_attr__('Donations Campaign Options', 'yoga-fit');
		
		
		break;
	case 'tt_event':
		$sections = array();
		
		$sections['tt_event_section'] = esc_attr__('Timetable Event Options', 'yoga-fit');
		
		
		break;
	}
	
	
	return $sections;
} 


function cmsms_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_layout', 
			'title' => __('Layout Type', 'yoga-fit'), 
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
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_title', 
			'title' => __('Post Title', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_date', 
			'title' => __('Post Date', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_cat', 
			'title' => __('Post Categories', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_author', 
			'title' => __('Post Author', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_comment', 
			'title' => __('Post Comments', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_tag', 
			'title' => __('Post Tags', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_like', 
			'title' => __('Post Likes', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_nav_box', 
			'title' => __('Posts Navigation Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_share_box', 
			'title' => __('Sharing Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_author_box', 
			'title' => __('About Author Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_more_posts_box', 
			'title' => __('More Posts Box', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'yoga-fit') . '|related', 
				__('Show Popular Tab', 'yoga-fit') . '|popular', 
				__('Show Recent Tab', 'yoga-fit') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => CMSMS_SHORTNAME . '_blog_post_r_p_l_number', 
			'title' => __('Related, Popular & Latest Posts Boxes Items Number', 'yoga-fit'), 
			'desc' => __('posts', 'yoga-fit'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_title', 
			'title' => __('Project Title', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_details_title', 
			'title' => __('Project Details Title', 'yoga-fit'), 
			'desc' => __('Enter a project details block title', 'yoga-fit'), 
			'type' => 'text', 
			'std' => 'Project details', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_date', 
			'title' => __('Project Date', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_cat', 
			'title' => __('Project Categories', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_author', 
			'title' => __('Project Author', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_comment', 
			'title' => __('Project Comments', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_tag', 
			'title' => __('Project Tags', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_like', 
			'title' => __('Project Likes', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_link', 
			'title' => __('Project Link', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_share_box', 
			'title' => __('Sharing Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_nav_box', 
			'title' => __('Projects Navigation Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_author_box', 
			'title' => __('About Author Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_more_projects_box', 
			'title' => __('More Projects Box', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'yoga-fit') . '|related', 
				__('Show Popular Tab', 'yoga-fit') . '|popular', 
				__('Show Recent Tab', 'yoga-fit') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_r_p_l_number', 
			'title' => __('Related, Popular & Latest Projects Boxes Items Number', 'yoga-fit'), 
			'desc' => __('projects', 'yoga-fit'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => CMSMS_SHORTNAME . '_portfolio_project_slug', 
			'title' => __('Project Slug', 'yoga-fit'), 
			'desc' => __('Enter a page slug that should be used for your projects single item', 'yoga-fit'), 
			'type' => 'text', 
			'std' => 'project', 
			'class' => ''
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_title', 
			'title' => __('Profile Title', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_details_title', 
			'title' => __('Profile Details Title', 'yoga-fit'), 
			'desc' => __('Enter a profile details block title', 'yoga-fit'), 
			'type' => 'text', 
			'std' => 'Profile details', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_cat', 
			'title' => __('Profile Categories', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_comment', 
			'title' => __('Profile Comments', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_nav_box', 
			'title' => __('Profiles Navigation Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_share_box', 
			'title' => __('Sharing Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => CMSMS_SHORTNAME . '_profile_post_slug', 
			'title' => __('Profile Slug', 'yoga-fit'), 
			'desc' => __('Enter a page slug that should be used for your profiles single item', 'yoga-fit'), 
			'type' => 'text',  
			'std' => 'profile', 
			'class' => '' 
		);
		
		
		break;
	case 'campaign':
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_title', 
			'title' => __('Campaign Title', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_date', 
			'title' => __('Campaign Date', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_cat', 
			'title' => __('Campaign Categories', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_comment', 
			'title' => __('Campaign Comments', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_tag', 
			'title' => __('Campaign Tags', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_like', 
			'title' => __('Campaign Likes', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_share_box', 
			'title' => __('Sharing Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_nav_box', 
			'title' => __('Campaign Navigation Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_author_box', 
			'title' => __('About Author Box', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_more_campaigns_box', 
			'title' => __('More Campaigns Box', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'multi-checkbox', 
			'std' => array( 
				'related' => 'true', 
				'popular' => 'true', 
				'recent' => 'true' 
			), 
			'choices' => array( 
				__('Show Related Tab', 'yoga-fit') . '|related', 
				__('Show Popular Tab', 'yoga-fit') . '|popular', 
				__('Show Recent Tab', 'yoga-fit') . '|recent' 
			) 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_r_p_l_number', 
			'title' => __('Related, Popular & Latest Campaigns Boxes Items Number', 'yoga-fit'), 
			'desc' => __('campaigns', 'yoga-fit'), 
			'type' => 'number', 
			'std' => '4', 
			'min' => '2', 
			'max' => '10', 
			'step' => '2' 
		);
		
		$options[] = array( 
			'section' => 'campaign_section', 
			'id' => CMSMS_SHORTNAME . '_donations_campaign_slug', 
			'title' => __('Campaign Slug', 'yoga-fit'), 
			'desc' => __('Enter a page slug that should be used for your donations campaign single item', 'yoga-fit'), 
			'type' => 'text', 
			'std' => 'campaign', 
			'class' => '' 
		);
		
		
		break;
	case 'tt_event':
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => CMSMS_SHORTNAME . '_tt_event_hours', 
			'title' => __('Event Hours', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => CMSMS_SHORTNAME . '_tt_event_hours_title', 
			'title' => __('Event Hours Title', 'yoga-fit'), 
			'desc' => __('Enter a event hours block title', 'yoga-fit'), 
			'type' => 'text', 
			'std' => 'Event Hours', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => CMSMS_SHORTNAME . '_tt_event_details_title', 
			'title' => __('Event Details Title', 'yoga-fit'), 
			'desc' => __('Enter a event details block title', 'yoga-fit'), 
			'type' => 'text', 
			'std' => 'Event Details', 
			'class' => ''
		);
		
		$options[] = array( 
			'section' => 'tt_event_section', 
			'id' => CMSMS_SHORTNAME . '_tt_event_cat', 
			'title' => __('Event Categories', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		
		break;
	}
	
	
	return $options;	
}

