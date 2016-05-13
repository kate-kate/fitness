<?php 
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Admin Panel Colors Options
 * Created by CMSMasters
 * 
 */

 
 
function cmsms_options_color_tabs() {
	$tabs = array();
	
	
	foreach (cmsms_all_color_schemes_list() as $key => $value) {
		$tabs[$key] = $value;
	}
	
	
	return $tabs;
}



function cmsms_options_color_sections() {
	$tab = cmsms_get_the_tab();
	
	
	$schemes = cmsms_all_color_schemes_list();
	
	
	$sections = array();
	
	
	$sections[$tab . '_section'] = $schemes[$tab] . ' ' . __('Color Scheme Options', 'yoga-fit');
	
	
	return $sections;
} 



function cmsms_options_color_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cmsms_get_the_tab();
	}
	
	$cmsms_option = cmsms_get_global_options();
	
	$defaults = cmsms_color_schemes_defaults();
	
	
	$options = array();
	
	
	if ($tab == 'header' || $tab == 'header_bottom') { // Header & Header Bottom
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_color', 
			'title' => __('Text Font Color', 'yoga-fit'), 
			'desc' => __('Font color for header text', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_link', 
			'title' => __('Primary Font Color', 'yoga-fit'), 
			'desc' => __('Font color for header headings, links, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => __('Rollover Font Color', 'yoga-fit'), 
			'desc' => __('Font color for header links rollovers, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_subtitle', 
			'title' => __('Subtitle Font Color', 'yoga-fit'), 
			'desc' => __('Font color for navigation subtitle, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => __('Background Color', 'yoga-fit'), 
			'desc' => __('Header block background color', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_border', 
			'title' => __('Border Color', 'yoga-fit'), 
			'desc' => __('Header block border color', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_link', 
			'title' => __('Dropdown Links Color', 'yoga-fit'), 
			'desc' => __('Links color for header main navigation dropdown', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_hover', 
			'title' => __('Dropdown Rollover Font Color', 'yoga-fit'), 
			'desc' => __('Font color for header links rollovers in main navigation dropdown, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_subtitle', 
			'title' => __('Dropdown Subtitle Font Color', 'yoga-fit'), 
			'desc' => __('Font color for navigation dropdown subtitle, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_subtitle'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_bg', 
			'title' => __('Dropdown Background Color', 'yoga-fit'), 
			'desc' => __('Header block background color for main navigation dropdown', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_border', 
			'title' => __('Dropdown Border Color', 'yoga-fit'), 
			'desc' => __('Header block border color for main navigation dropdown', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_shadow', 
			'title' => __('Dropdown Shadow', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_shadow_opacity', 
			'title' => __('Dropdown Shadow Opacity', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'number', 
			'std' => '0', 
			'min' => '0', 
			'max' => '100' 
		);
		
		if ($tab == 'header') {
			$options[] = array( 
				'section' => $tab . '_section', 
				'id' => CMSMS_SHORTNAME . '_' . $tab . '_scrolled_link', 
				'title' => __('Scrolled Primary Font Color', 'yoga-fit'), 
				'desc' => __('Scrolled font color for header headings, links, etc', 'yoga-fit'), 
				'type' => 'rgba', 
				'std' => $defaults[$tab]['scrolled_link'] 
			);
			
			$options[] = array( 
				'section' => $tab . '_section', 
				'id' => CMSMS_SHORTNAME . '_' . $tab . '_scrolled_hover', 
				'title' => __('Scrolled Rollover Font Color', 'yoga-fit'), 
				'desc' => __('Scrolled  font color for header links rollovers, etc', 'yoga-fit'), 
				'type' => 'rgba', 
				'std' => $defaults[$tab]['scrolled_hover'] 
			);
			
			$options[] = array( 
				'section' => $tab . '_section', 
				'id' => CMSMS_SHORTNAME . '_' . $tab . '_scrolled_subtitle', 
				'title' => __('Scrolled Subtitle Font Color', 'yoga-fit'), 
				'desc' => __('Scrolled font color for navigation subtitle, etc', 'yoga-fit'), 
				'type' => 'rgba', 
				'std' => $defaults[$tab]['scrolled_subtitle'] 
			);
			
			$options[] = array( 
				'section' => $tab . '_section', 
				'id' => CMSMS_SHORTNAME . '_' . $tab . '_scrolled_bg', 
				'title' => __('Scrolled Background Color', 'yoga-fit'), 
				'desc' => __('Scrolled header block background color', 'yoga-fit'), 
				'type' => 'rgba', 
				'std' => $defaults[$tab]['scrolled_bg'] 
			);
		}
	} elseif ($tab == 'header_top') { // Header Top
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_color', 
			'title' => __('Content Font Color', 'yoga-fit'), 
			'desc' => __('Font color for header top main content, headings, links, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_link', 
			'title' => __('Primary Font Color', 'yoga-fit'), 
			'desc' => __('Font color for header top headings, links, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => __('Rollover Font Color', 'yoga-fit'), 
			'desc' => __('Font color for header top links rollovers, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => __('Background Color', 'yoga-fit'), 
			'desc' => __('Header top block background color', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_border', 
			'title' => __('Border Color', 'yoga-fit'), 
			'desc' => __('Header top block border color', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_link', 
			'title' => __('Dropdown Links Color', 'yoga-fit'), 
			'desc' => __('Links color for header top main navigation dropdown', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_hover', 
			'title' => __('Dropdown Rollover Font Color', 'yoga-fit'), 
			'desc' => __('Font color for header top links rollovers in main navigation dropdown, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_bg', 
			'title' => __('Dropdown Background Color', 'yoga-fit'), 
			'desc' => __('Header top block background color for main navigation dropdown', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_border', 
			'title' => __('Dropdown border Color', 'yoga-fit'), 
			'desc' => __('Header top block border color for main navigation dropdown', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['dropdown_border'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_shadow', 
			'title' => __('Dropdown Shadow', 'yoga-fit'), 
			'desc' => __('show', 'yoga-fit'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_dropdown_shadow_opacity', 
			'title' => __('Dropdown Shadow Opacity', 'yoga-fit'), 
			'desc' => '', 
			'type' => 'number', 
			'std' => '0', 
			'min' => '0', 
			'max' => '100' 
		);
	} else { // Other
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_color', 
			'title' => __('Main Content Font Color', 'yoga-fit'), 
			'desc' => __('Font color for main content', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['color'] : $defaults['default']['color'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_link', 
			'title' => __('Primary Color', 'yoga-fit'), 
			'desc' => __('Color for links and some other elements (e.g. buttons, icon boxes, ets.)', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['link'] : $defaults['default']['link'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_hover', 
			'title' => __('Highlight Color', 'yoga-fit'), 
			'desc' => __('Color for links rollovers, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['hover'] : $defaults['default']['hover'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_second', 
			'title' => __('Secondary Color', 'yoga-fit'), 
			'desc' => __('Color for links rollovers, etc', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['second'] : $defaults['default']['second'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_heading', 
			'title' => __('Headings Color', 'yoga-fit'), 
			'desc' => __('Color for headings and some other elements', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['heading'] : $defaults['default']['heading'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_bg', 
			'title' => __('Main Background Color', 'yoga-fit'), 
			'desc' => __('Main background color for some elements (e.g. tabs, toggles, ets.)', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['bg'] : $defaults['default']['bg'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_alternate', 
			'title' => __('Alternate Background Color', 'yoga-fit'), 
			'desc' => __('Alternate background color for some elements (e.g. quotes, form fields, ets.)', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['alternate'] : $defaults['default']['alternate'] 
		);
		
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => CMSMS_SHORTNAME . '_' . $tab . '_border', 
			'title' => __('Borders Color', 'yoga-fit'), 
			'desc' => __('Color for borders (e.g. dividers, form fields, ets.)', 'yoga-fit'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['border'] : $defaults['default']['border'] 
		);
	}
	
	
	return $options;	
}

