<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.0
 * 
 * Sidebar Template
 * Created by CMSMasters
 * 
 */


if (is_singular()) {
	$sidebar_id = get_post_meta(get_the_ID(), 'cmsms_sidebar_id', true);
} elseif (CMSMS_WOOCOMMERCE && is_shop()) {
	$sidebar_id = get_post_meta(wc_get_page_id('shop'), 'cmsms_sidebar_id', true);
}


if (isset($sidebar_id) && is_dynamic_sidebar($sidebar_id) && is_active_sidebar($sidebar_id)) {
	dynamic_sidebar($sidebar_id);
} else if (is_active_sidebar('sidebar_default')) {
	dynamic_sidebar('sidebar_default');
} else {
	sidebarDefaultText();
}

