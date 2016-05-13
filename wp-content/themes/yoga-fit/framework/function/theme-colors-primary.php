<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.0
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function cmsms_theme_colors_primary() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$cmsms_color_schemes = cmsms_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Theme Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsms_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsms_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsms_color_scheme_{$scheme}," : '') . "
	{$rule}input[type=text],
	{$rule}input[type=tel],
	{$rule}input[type=search],
	{$rule}input[type=number],
	{$rule}input[type=date],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}input[type=submit],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	" . (($scheme == 'default') ? "{$rule}.widget ul li a," : '') . "
	{$rule}.img_placeholder_small:before,
	{$rule}.cmsms_icon_list_type_list .cmsms_icon_list_item:before,
	{$rule}.cmsmsLike, 
	{$rule}.cmsmsLike:hover, 
	{$rule}.cmsms_search_post_comments, 
	{$rule}.cmsms_slider_post_comments, 
	{$rule}.cmsms_project_comments, 
	{$rule}.cmsms_slider_project_comments, 
	{$rule}.cmsms_profile_comments,
	{$rule}.cmsms_post_comments,
	{$rule}.cmsms_search_post_comments:hover, 
	{$rule}.cmsms_slider_post_comments:hover, 
	{$rule}.cmsms_project_comments:hover, 
	{$rule}.cmsms_slider_project_comments:hover, 
	{$rule}.cmsms_profile_comments:hover,
	{$rule}.cmsms_twitter .cmsms_twitter_item,
	{$rule}.search_bar_wrap .cmsms_theme_icon_search:before,
	{$rule}.cmsms_post_comments:hover, 
	{$rule}.cmsms_quotes_slider .quote_subtitle,
	{$rule}.cmsms_quotes_slider_full .quote_subtitle, 
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_title, 
	{$rule}.cmsms_twitter .cmsms_twitter_item .published, 
	{$rule}.cmsms_menu_item .menu_feature_list li:before, 
	{$rule}.profiles.opened-article .profile .cmsms_profile_header .cmsms_profile_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}abbr,
	{$rule}acronym {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	{$rule}input::-moz-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	" . (($scheme != 'default') ? "{$rule}.widget ul li a," : '') . "
	" . (($scheme == 'default') ? "{$rule}.widget ul li a:hover," : '') . "
	{$rule}.color_2,
	{$rule}.cmsmsLike.active:before, 
	{$rule}.cmsmsLike:hover:before, 
	{$rule}.cmsms_post_comments:hover:before,
	{$rule}.cmsms_search_post_comments:hover:before, 
	{$rule}.cmsms_slider_post_comments:hover:before, 
	{$rule}.cmsms_project_comments:hover:before, 
	{$rule}.cmsms_slider_project_comments:hover:before, 
	{$rule}.cmsms_profile_comments:hover:before,
	{$rule}.post_nav .cmsms_prev_post a:hover, 
	{$rule}.post_nav .cmsms_next_post a:hover, 
	{$rule}.post_comments .commentlist > li.bypostauthor > .comment-body .fn:before, 
	{$rule}.cmsms_post_filter_wrap .cmsms_post_filter .cmsms_post_filter_block .cmsms_post_filter_list li .button:hover,
	{$rule}.cmsms_post_filter_wrap .cmsms_post_filter .cmsms_post_filter_block .cmsms_post_filter_list li.current .button,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_filter_block .cmsms_project_filter_list li .button:hover,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_filter_block .cmsms_project_filter_list li.current .button,
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner:before,
	{$rule}.cmsms_quotes_slider .quote_content_inner:before,
	{$rule}#wp-calendar #today,
	{$rule}.contact_widget_name:before,
	{$rule}.contact_widget_email:before,
	{$rule}.contact_widget_phone:before,
	{$rule}.adress_wrap:before,
	{$rule}.quote_grid .quote_image:before,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title a,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title:hover a,
	{$rule}.quote_subtitle,
	{$rule}.quote_link,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type='checkbox'] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsms-form-builder .check_parent input[type='checkbox'] + label:after,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_price,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_currency,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap .cmsms_coins,
	{$rule}.cmsms_profile .pl_subtitle,
	{$rule}.widget_nav_menu ul li > a:hover,
	{$rule}.widget_nav_menu ul li.current-menu-item > a, 
	{$rule}.cmsms_quotes_slider .quote_title,
	{$rule}.cmsms_quotes_slider_full .quote_title, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button:hover, 
	{$rule}.cmsms_profile.vertical .pl_social_list li a:hover:before, 
	{$rule}.cmsms_menu_item .cmsms_menu_price_wrap, 
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_read_more:hover, 
	{$rule}.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_read_more:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.button:hover, 
	{$rule}.cmsms_button:hover, 
	{$rule}.cmsms_button.mont_btn:hover > span, 
	{$rule}.cmsms_button.mont_btn:hover .mont_left:after, 
	{$rule}.cmsms_button.mont_btn:hover .mont_left:before,
	{$rule}.cmsms_button.mont_btn:hover .mont_right:after, 
	{$rule}.cmsms_button.mont_btn:hover .mont_right:before,
	{$rule}.cmsms_button.mont_btn:hover:after, 
	{$rule}.cmsms_button.mont_btn:hover:before,
	{$rule}.cmsms_post_loader:hover, 
	{$rule}.cmsms_project_loader:hover, 
	{$rule}#cancel-comment-reply-link:hover, 
	{$rule}input[type='submit']:hover, 
	{$rule}input[type='button']:hover, 
	{$rule}button:hover, 
	{$rule}.related_posts > ul li > a.current,
	{$rule}.related_posts > ul li > a:hover,
	{$rule}.cmsms_post_filter_wrap .cmsms_post_filter .cmsms_post_filter_block .cmsms_post_filter_but.current,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_filter_block .cmsms_project_filter_but.current,
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.owl-buttons .owl-prev:hover, 
	{$rule}.owl-buttons .owl-next:hover, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item > a:hover,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a:hover,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item > a:hover,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap .cmsms_toggle_title:hover,
	{$rule}.cmsms_toggles.toggles_mode_toggle .cmsms_toggle_wrap.current_toggle .cmsms_toggle_plus,
	{$rule}.cmsms_toggles.toggles_mode_toggle .cmsms_toggle_wrap .cmsms_toggle_title:hover .cmsms_toggle_plus,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item.current_tab a,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item a:hover,
	{$rule}.tweet_list .tweet_time:before,
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers.current, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers:hover, 
	{$rule}.cmsms_project_sort_but.current,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_bg .cmsms_icon_list_item .cmsms_icon_list_icon,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_item:hover .cmsms_icon_list_icon,
	{$rule}.cmsms-form-builder .check_parent input[type='radio'] + label:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type='radio'] + span.wpcf7-list-item-label:after,
	{$rule}.cmsms_search .cmsms_search_post .cmsms_search_post_number,
	{$rule}.cmsms_dropcap.type2, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.button:hover, 
	{$rule}.cmsms_button:hover, 
	{$rule}.cmsms_button.mont_btn:hover > span, 
	{$rule}.cmsms_button.mont_btn:hover .mont_left:after, 
	{$rule}.cmsms_button.mont_btn:hover .mont_left:before,
	{$rule}.cmsms_button.mont_btn:hover .mont_right:after, 
	{$rule}.cmsms_button.mont_btn:hover .mont_right:before,
	{$rule}.cmsms_button.mont_btn:hover > span:after, 
	{$rule}.cmsms_button.mont_btn:hover > span:before,
	{$rule}.cmsms_button.mont_btn:hover:after, 
	{$rule}.cmsms_button.mont_btn:hover:before,
	{$rule}.cmsms_post_loader:hover, 
	{$rule}.cmsms_project_loader:hover, 
	{$rule}#cancel-comment-reply-link:hover, 
	{$rule}input[type='submit']:hover, 
	{$rule}input[type='button']:hover, 
	{$rule}button:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button,
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}input[type=text]:focus,
	{$rule}input[type=tel]:focus,
	{$rule}input[type=search]:focus,
	{$rule}input[type=number]:focus,
	{$rule}input[type=date]:focus,
	{$rule}input[type=email]:focus,
	{$rule}input[type=password]:focus,
	{$rule}textarea:focus, 
	{$rule}select:focus,
	{$rule}.related_posts > ul li > a.current,
	{$rule}.related_posts > ul li > a:hover,
	{$rule}.cmsms_post_filter_wrap .cmsms_post_filter .cmsms_post_filter_block .cmsms_post_filter_but.current,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_filter_block .cmsms_project_filter_but.current,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_sort_block .cmsms_project_sort_but.current,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item > a:hover,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item > a:hover,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item.current_tab:first-child > a,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item:first-child > a:hover,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item.current_tab:last-child > a,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item:last-child > a:hover,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap .cmsms_toggle_title:hover,
	{$rule}.cmsms_toggles.toggles_mode_toggle .cmsms_toggle_wrap.current_toggle .cmsms_toggle_plus,
	{$rule}.cmsms_toggles.toggles_mode_toggle .cmsms_toggle_wrap .cmsms_toggle_title:hover .cmsms_toggle_plus,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item.current_tab a,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item a:hover,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_border .cmsms_icon_list_item .cmsms_icon_list_icon:after, 
	{$rule}.cmsms_menu_item.menu_best, 
	{$rule}.post.cmsms_default_type.sticky .cmsms_post_date, 
	{$rule}.post.cmsms_timeline_type.sticky .cmsms_post_date {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.sidebar.fl .widget_nav_menu ul li > a:hover,
	{$rule}.sidebar.fl .widget_nav_menu ul li.current-menu-item > a {
		" . cmsms_color_css('border-' . (is_rtl() ? 'left' : 'right') . '-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.widget_nav_menu ul li > a:hover,
	{$rule}.widget_nav_menu ul li.current-menu-item > a {
		" . cmsms_color_css('border-' . (is_rtl() ? 'right' : 'left') . '-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_img_rollover_wrap:hover .cmsms_img_rollover,
	{$rule}.cmsms_profile.horizontal .pl_img:hover .pl_social {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . ", 0.9);
	}
	
	{$rule}.cmsms_img_rollover_wrap:hover .cmsms_img_rollover.cmsms_img_rollover_no_bg {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . ", 0.4);
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}a:hover, 
	" . (($scheme != 'default') ? "{$rule}.widget ul li a:hover," : '') . "
	{$rule}.tweet_list li:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Secondary Color */
	{$rule}.twr_icon:before, 
	{$rule}.post.cmsms_default_type .cmsms_post_date .cmsms_day, 
	{$rule}.post.cmsms_timeline_type .cmsms_post_date .cmsms_day, 
	{$rule}.profiles.opened-article .profile .cmsms_profile_header .cmsms_profile_title, 
	{$rule}.portfolio.opened-article .project .cmsms_project_header .cmsms_project_header_inner .cmsms_project_title {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
	}
	
	{$rule}.portfolio.puzzle .project .project_outer:hover .cmsms_img_rollover_wrap .cmsms_img_rollover {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . ", 0.9);
	}
	/* Finish Secondary Color */
	
	
	/* Start Headings Color */
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}dl dt, 
	{$rule}.button, 
	{$rule}.cmsms_button, 
	{$rule}.cmsms_post_loader, 
	{$rule}.cmsms_project_loader, 
	{$rule}#cancel-comment-reply-link, 
	{$rule}input[type='submit'], 
	{$rule}button,
	{$rule}input[type='button'],
	{$rule}.related_posts .related_posts_content .related_posts_content_tab .rel_post_content figure.alignleft .img_placeholder:before,
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_horizontal .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_title,
	{$rule}.cmsms_clients_slider .owl-buttons > div.owl-prev:hover .cmsms_prev_arrow:before,
	{$rule}.cmsms_clients_slider .owl-buttons > div.owl-next:hover .cmsms_next_arrow:before,
	{$rule}.cmsms_posts_slider .owl-controls .owl-buttons div:hover span:before,
	{$rule}#wp-calendar thead th, 
	{$rule}.tweet_list .tweet_time,
	{$rule}.cmsms_table caption,
	{$rule}.cmsms_dropcap.type1, 
	{$rule}.post_nav .cmsms_prev_post a, 
	{$rule}.post_nav .cmsms_next_post a,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers .cmsms_prev_arrow:before, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers .cmsms_next_arrow:before, 
	{$rule}.related_posts > ul li > a, 
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap, 
	{$rule}.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a, 
	{$rule}.cmsms_icon_list_items.cmsms_color_type_border .cmsms_icon_list_item .cmsms_icon_list_icon:before,
	{$rule}.owl-buttons .cmsms_prev_arrow:before, 
	{$rule}.owl-buttons .cmsms_next_arrow:before,
	{$rule}.widget_nav_menu ul li > a,
	{$rule}#wp-calendar caption,
	{$rule}.widget_custom_popular_projects_entries .owl-buttons > div:hover .cmsms_prev_arrow:before,
	{$rule}.widget_custom_popular_projects_entries .owl-buttons > div:hover .cmsms_next_arrow:before,
	{$rule}.widget_custom_latest_projects_entries .owl-buttons > div:hover .cmsms_prev_arrow:before,
	{$rule}.widget_custom_latest_projects_entries .owl-buttons > div:hover .cmsms_next_arrow:before,
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > a,
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li > a,
	{$rule}.cmsms_notice .notice_close:hover:before, 
	{$rule}.cmsms_quotes_slider .quote_content,
	{$rule}.cmsms_quotes_slider_full .quote_content, 
	{$rule}.cmsms_stats.stats_mode_bars .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap, 
	{$rule}.cmsms_stats.stats_mode_bars .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner[class^='cmsms-icon-']:before, 
	{$rule}.cmsms_stats.stats_mode_bars .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner[class*=' cmsms-icon-']:before, 
	{$rule}.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_counter_wrap, 
	{$rule}.cmsms_table .cmsms_table_row_header th, 
	{$rule}.cmsms_table .cmsms_table_row_header td, 
	{$rule}.cmsms_table .cmsms_table_row_footer th, 
	{$rule}.cmsms_table .cmsms_table_row_footer td, 
	{$rule}.cmsms_twitter .owl-buttons > div:hover .cmsms_prev_arrow:before, 
	{$rule}.cmsms_twitter .owl-buttons > div:hover .cmsms_next_arrow:before, 
	{$rule}.cmsms_twitter .cmsms_twitter_item .cmsms_twitter_item_content, 
	{$rule}.cmsms_menu_item .menu_feature_list_wrap .cmsms_menu_best_feature, 
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_read_more, 
	{$rule}.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_read_more, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_details .profile_details_item .profile_details_item_title, 
	{$rule}.profiles.opened-article .profile .profile_sidebar .profile_features .profile_features_item .profile_features_item_title, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_details .project_details_item .project_details_item_title, 
	{$rule}.portfolio.opened-article .project .project_sidebar .project_features .project_features_item .project_features_item_title, 
	{$rule}code,
	{$rule}kbd,
	{$rule}pre,
	{$rule}samp {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsms_quotes_slider_full .owl-buttons .cmsms_prev_arrow:hover:before,
	{$rule}.cmsms_quotes_slider_full .owl-buttons .cmsms_prev_arrow:hover:after,
	{$rule}.cmsms_quotes_slider_full .owl-buttons .cmsms_next_arrow:hover:before,
	{$rule}.cmsms_quotes_slider_full .owl-buttons .cmsms_next_arrow:hover:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.button:hover, 
	{$rule}.cmsms_button:hover, 
	{$rule}.cmsms_post_loader:hover, 
	{$rule}.cmsms_project_loader:hover, 
	{$rule}#cancel-comment-reply-link:hover, 
	{$rule}input[type='submit']:hover, 
	{$rule}input[type='button']:hover, 
	{$rule}button:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button,
	{$rule}.related_posts > ul li > a:hover, 
	{$rule}.related_posts > ul li > a.current,
	{$rule}.cmsms_post_filter_wrap .cmsms_post_filter .cmsms_post_filter_block .cmsms_post_filter_but.current,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_filter_block .cmsms_project_filter_but.current,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_sort_block .cmsms_project_sort_but.current,
	{$rule}.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_sort_block .cmsms_project_sort_but.current:before,
	{$rule}.owl-buttons .cmsms_prev_arrow:before,
	{$rule}.owl-buttons .cmsms_next_arrow:before,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item > a:hover,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item.current_tab > a,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item > a:hover,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title a,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap .cmsms_toggle_title:hover a,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item.current_tab a,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item a:hover,
	{$rule}.tweet_list .tweet_time:before,
	{$rule}.cmsms_dropcap.type2,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_bg .cmsms_icon_list_item .cmsms_icon_list_icon:before,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_item:hover .cmsms_icon_list_icon:before,
	{$rule}.cmsms_search .cmsms_search_post .cmsms_search_post_number {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . (($scheme != 'default') ? ".cmsms_color_scheme_{$scheme}," : '') . "
	{$rule}.button, 
	{$rule}.cmsms_button, 
	{$rule}.cmsms_button.mont_btn > span, 
	{$rule}.cmsms_button.mont_btn .mont_left:after, 
	{$rule}.cmsms_button.mont_btn .mont_left:before,
	{$rule}.cmsms_button.mont_btn .mont_right:after, 
	{$rule}.cmsms_button.mont_btn .mont_right:before,
	{$rule}.cmsms_button.mont_btn:after, 
	{$rule}.cmsms_button.mont_btn:before,
	{$rule}.cmsms_post_loader, 
	{$rule}.cmsms_project_loader, 
	{$rule}#cancel-comment-reply-link, 
	{$rule}input[type=text],
	{$rule}input[type=tel],
	{$rule}input[type=number],
	{$rule}input[type=date],
	{$rule}input[type=search],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}input[type='submit'], 
	{$rule}input[type='button'], 
	{$rule}button,
	{$rule}.post.cmsms_default_type .cmsms_post_date, 
	{$rule}.post.cmsms_timeline_type .cmsms_post_date, 
	{$rule}.related_posts > ul li > a,
	{$rule}.related_posts .related_posts_content,
	{$rule}.search_bar_wrap,
	{$rule}.owl-pagination .owl-page:before,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item > a,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_wrap,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item a,
	{$rule}.middle_inner,
	{$rule}.bottom_bg,
	{$rule}.cmsms_quotes_slider .quote_content,
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner,
	{$rule}.cmsms_img.with_caption,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap .cmsms_toggle_title,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item,
	{$rule}.cmsms_profile.vertical .profile .pl_img .pl_noimg,
	{$rule}.cmsms_img_rollover_wrap .img_placeholder,
	{$rule}.tweet_list li:before,
	{$rule}.img_placeholder_small,
	{$rule}.wp-caption, 
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont, 
	{$rule}.post.cmsms_timeline_type .cmsms_post_cont, 
	{$rule}.post_nav, 
	{$rule}.about_author .about_author_inner, 
	{$rule}.commentlist .comment-body {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.owl-pagination .owl-page:before, 
	{$rule}.quote_grid .quote_image:before {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_quotes_slider .quote_content:after {
		" . cmsms_color_css('border-top-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title > .cmsms_toggle_plus,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_title:hover > .cmsms_toggle_plus {
		border-" . (is_rtl() ? 'right' : 'left') . "-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . ", .2);
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsms_posts_slider .owl-controls .owl-buttons span:before, 
	{$rule}.cmsms_notice .notice_close:before, 
	{$rule}.cmsms_clients_slider .owl-buttons > div.owl-prev .cmsms_prev_arrow:before,
	{$rule}.cmsms_clients_slider .owl-buttons > div.owl-next .cmsms_next_arrow:before, 
	{$rule}.cmsms_twitter .owl-buttons > div .cmsms_prev_arrow:before, 
	{$rule}.cmsms_twitter .owl-buttons > div .cmsms_next_arrow:before, 
	{$rule}.post_nav .cmsms_prev_arrow:before,
	{$rule}.post_nav .cmsms_next_arrow:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_item .cmsms_icon_list_icon,
	{$rule}.cmsms_icon_list_items.cmsms_icon_list_type_block .cmsms_icon_list_item:before,
	{$rule}.cmsms_posts_slider .owl-controls:before, 
	{$rule}.cmsms_quotes_slider_full .owl-buttons .cmsms_prev_arrow:before,
	{$rule}.cmsms_quotes_slider_full .owl-buttons .cmsms_prev_arrow:after,
	{$rule}.cmsms_quotes_slider_full .owl-buttons .cmsms_next_arrow:before,
	{$rule}.cmsms_quotes_slider_full .owl-buttons .cmsms_next_arrow:after,
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_hor, 
	{$rule}.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_hor:before, 
	{$rule}.cmsms_twitter .owl-buttons:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsms_icon_list_items.cmsms_color_type_bg .cmsms_icon_list_item .cmsms_icon_list_icon:after, 
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_item .cmsms_icon_list_icon:after, 
	{$rule}.tweet_list li:before, 
	{$rule}.tweet_list li, 
	{$rule}.cmsms_posts_slider .owl-controls .owl-buttons:before, 
	{$rule}.cmsms_posts_slider .owl-controls .owl-buttons:after, 
	{$rule}.cmsms_posts_slider .project .cmsms_slider_project_footer,  
	{$rule}.cmsms_posts_slider .post .cmsms_slider_post_footer, 
	{$rule}.quote_grid .quotes_list,
	{$rule}.quote_grid.quote_four:after, 
	{$rule}.quote_grid.quote_four:before, 
	{$rule}.quote_grid.quote_three:before,
	{$rule}.quote_grid .quote_vert, 
	{$rule}.cmsms_table tbody tr td, 
	{$rule}.cmsms_menu_item .menu_feature_list_wrap, 
	{$rule}.post.cmsms_default_type, 
	{$rule}.blog.timeline:before, 
	{$rule}.post.cmsms_timeline_type:before, 
	{$rule}.portfolio .project .project_outer .project_inner .cmsms_project_footer {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}ul li:before, 
	{$rule}q:before,
	{$rule}q:after,
	{$rule}blockquote:before,
	{$rule}blockquote:after, 
	{$rule}#wp-calendar caption::before,
	" . (($scheme == 'default') ? "#slide_top:before," : '') . "
	" . (($scheme == 'default') ? "#slide_top:hover:before," : '') . "
	{$rule}.widget_custom_popular_projects_entries .owl-buttons > div .cmsms_prev_arrow:before,
	{$rule}.widget_custom_popular_projects_entries .owl-buttons > div .cmsms_next_arrow:before,
	{$rule}.widget_custom_latest_projects_entries .owl-buttons > div .cmsms_prev_arrow:before,
	{$rule}.widget_custom_latest_projects_entries .owl-buttons > div .cmsms_next_arrow:before,
	{$rule}.widget_custom_popular_projects_entries .owl-buttons:before,
	{$rule}.widget_custom_latest_projects_entries .owl-buttons:before,
	{$rule}.cmsms_img_rollover_wrap .cmsms_post_read_more, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best a,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_currency,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_coins,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .pricing_title, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button, 
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap, 
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner[class^='cmsms-icon-']:before, 
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner[class*=' cmsms-icon-']:before, 
	{$rule}.cmsms_profile .pl_social_list li a:before, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_header .cmsms_project_title, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_header .cmsms_project_title a, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_cont_info, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_cont_info a, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_content > *, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_footer > a, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_footer > a:before, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers.current,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers:hover,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers:hover .cmsms_prev_arrow:before,
	{$rule}.cmsms_wrap_pagination ul li .page-numbers:hover .cmsms_next_arrow:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_stats.stats_mode_bars.stats_type_horizontal:before,
	{$rule}.cmsms_quotes_slider .owl-pagination .owl-page:before,
	{$rule}.cmsms_quotes_slider_full .owl-pagination .owl-page:before,
	{$rule}.cmsms_clients_slider.owl-carousel .owl-controls .owl-pagination .owl-page:before,
	{$rule}.cmsms_sitemap_wrap .cmsms_sitemap > li:before,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_border .cmsms_icon_list_item .cmsms_icon_list_icon,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap .cmsms_toggle_title:hover > .cmsms_toggle_plus .cmsms_toggle_plus_hor,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_hor,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap .cmsms_toggle_title:hover > .cmsms_toggle_plus .cmsms_toggle_plus_hor:before,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_hor:before,
	{$rule}.cmsms_toggles.toggles_mode_toggle .cmsms_toggle_wrap .cmsms_toggle_title:hover > .cmsms_toggle_plus .cmsms_toggle_plus_hor,
	{$rule}.cmsms_toggles.toggles_mode_toggle .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_hor,
	{$rule}.cmsms_toggles.toggles_mode_toggle .cmsms_toggle_wrap .cmsms_toggle_title:hover > .cmsms_toggle_plus .cmsms_toggle_plus_hor:before,
	{$rule}.cmsms_toggles.toggles_mode_toggle .cmsms_toggle_wrap.current_toggle .cmsms_toggle_title > .cmsms_toggle_plus .cmsms_toggle_plus_hor:before, 
	{$rule}.cmsms_notice .notice_close, 
	{$rule}.quote_grid .quote_image:before, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button:hover, 
	{$rule}.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat canvas, 
	{$rule}.cmsms_table .cmsms_table_row_header th, 
	{$rule}.cmsms_table .cmsms_table_row_header td, 
	{$rule}.cmsms_table .cmsms_table_row_footer th, 
	{$rule}.cmsms_table .cmsms_table_row_footer td, 
	{$rule}.related_posts .related_posts_content .related_posts_content_tab .rel_post_content figure.alignleft .img_placeholder, 
	{$rule}.cmsms_wrap_pagination ul li .page-numbers, 
	{$rule}code,
	{$rule}kbd,
	{$rule}pre,
	{$rule}samp {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.button, 
	{$rule}.cmsms_button, 
	{$rule}.cmsms_button.mont_btn > span, 
	{$rule}.cmsms_button.mont_btn .mont_left:after, 
	{$rule}.cmsms_button.mont_btn .mont_left:before,
	{$rule}.cmsms_button.mont_btn .mont_right:after, 
	{$rule}.cmsms_button.mont_btn .mont_right:before,
	{$rule}.cmsms_button.mont_btn > span:after, 
	{$rule}.cmsms_button.mont_btn > span:before,
	{$rule}.cmsms_button.mont_btn:after, 
	{$rule}.cmsms_button.mont_btn:before,
	{$rule}.cmsms_post_loader, 
	{$rule}.cmsms_project_loader, 
	{$rule}#cancel-comment-reply-link, 
	{$rule}input[type='submit'], 
	{$rule}button,
	{$rule}input[type='button'],
	{$rule}.post.cmsms_default_type .cmsms_post_date, 
	{$rule}.post.cmsms_timeline_type .cmsms_post_date, 
	{$rule}.wp-caption, 
	{$rule}.cmsms_img.with_caption,
	{$rule}.commentlist .comment-body, 
	{$rule}.about_author .about_author_inner,
	{$rule}.related_posts .related_posts_content, 
	{$rule}.related_posts > ul li > a, 
	{$rule}.cmsms_img_rollover_wrap .img_placeholder,
	{$rule}.widget_custom_popular_projects_entries .img_placeholder, 
	{$rule}.widget_custom_latest_projects_entries .img_placeholder,
	{$rule}.img_placeholder_small,
	{$rule}.cmsms_profile.horizontal .profile,
	{$rule}.cmsms_profile.vertical .profile .pl_img .pl_noimg,
	{$rule}.cmsms_profile.vertical .profile,
	{$rule}.cmsms_quotes_slider .quote_content,
	{$rule}.cmsms_quotes_slider .owl-pagination .owl-page:before,
	{$rule}.cmsms_quotes_slider_full .owl-pagination .owl-page:before,
	{$rule}.cmsms_clients_slider.owl-carousel .owl-controls .owl-pagination .owl-page:before,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_wrap,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item > a,
	{$rule}.cmsms_tabs.tabs_mode_tab .cmsms_tabs_list .cmsms_tabs_list_item > a span,
	{$rule}.cmsms_toggles.toggles_mode_toggle .cmsms_toggle_wrap .cmsms_toggle_plus,
	{$rule}.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item a,
	{$rule}.cmsms_icon_list_items.cmsms_color_type_icon .cmsms_icon_list_item .cmsms_icon_list_icon:after,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_title,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type='checkbox'] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsms-form-builder .check_parent input[type='checkbox'] + label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type='radio'] + span.wpcf7-list-item-label:before,
	{$rule}.cmsms-form-builder .check_parent input[type='radio'] + label:before,
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}input[type=text],
	{$rule}input[type=tel],
	{$rule}input[type=number],
	{$rule}input[type=date],
	{$rule}input[type=search],
	{$rule}input[type=email],
	{$rule}input[type=password],
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}fieldset,
	{$rule}.post_nav, 
	{$rule}.cmsms_post_meta, 
	{$rule}.search_bar_wrap, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_button, 
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap:after,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item .cmsms_price_wrap:before, 
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont, 
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_cont_info, 
	{$rule}.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_footer, 
	{$rule}.post.cmsms_timeline_type .cmsms_post_cont, 
	{$rule}.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_cont_info, 
	{$rule}.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_footer, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner:before, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_quotes_slider .quote_content:before, 
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item:first-child > a,
	{$rule}.cmsms_search .cmsms_search_post .cmsms_search_post_cont .cmsms_search_post_footer,
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item > a,
	{$rule}.widget_nav_menu ul li > a {
		" . cmsms_color_css('border-top-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}hr,
	{$rule}.cmsms_divider,
	{$rule}.cmsms_widget_divider, 
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item:last-child > a,
	{$rule}.cmsms_heading_divider {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item > a {
		" . cmsms_color_css('border-left-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_tabs.tabs_mode_tour .cmsms_tabs_list .cmsms_tabs_list_item > a {
		" . cmsms_color_css('border-right-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget_nav_menu ul li > a,
	{$rule}.cmsms_toggles.toggles_mode_accordion .cmsms_toggle_title > .cmsms_toggle_plus {
		" . cmsms_color_css('border-' . (is_rtl() ? 'right' : 'left') . '-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.sidebar.fl .widget_nav_menu ul li > a {
		" . cmsms_color_css('border-' . (is_rtl() ? 'left' : 'right') . '-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_hover_slider .cmsms_hover_slider_thumbs > li a:hover:before, 
	{$rule}.cmsms_hover_slider .cmsms_hover_slider_thumbs > li.hovered_item a:before {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.4);
	}
	
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_header .cmsms_project_title a:hover, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_cont_info a:hover, 
	{$rule}.portfolio.puzzle .project .project_outer .project_inner .cmsms_project_footer > a:hover:before, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_image_link:hover, 
	{$rule}.cmsms_img_rollover_wrap .cmsms_img_rollover .cmsms_open_link:hover {
		color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.7);
	}
	
	{$rule}.cmsms_img_rollover_wrap .cmsms_post_read_more {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.1);
	}
	
	{$rule}.cmsms_img_rollover_wrap .cmsms_post_read_more:hover {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.2);
	}
	
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price_wrap:before,
	{$rule}.cmsms_pricing_table .cmsms_pricing_item.pricing_best .cmsms_price_wrap:after {
		border-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.3);
	}
	
	{$rule}.owl-buttons .owl-prev, 
	{$rule}.owl-buttons .owl-next {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.2);
	}
	
	{$rule}.portfolio.small_gap .project .project_outer {
		-webkit-box-shadow:0 0 0 1px rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 1);
		-moz-box-shadow:0 0 0 1px rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 1);
		box-shadow:0 0 0 1px rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 1);
	}
	/* Finish Borders Color */
	
	";
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsms_button.cmsms_but_bg_hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_hover:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_hor, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert:hover, 
	{$rule}.cmsms_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_right, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_top, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_slide_bottom, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_vert, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_hor, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_bg_expand_diag {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_bg_slide_left:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_right:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_top:after, 
	{$rule}.cmsms_button.cmsms_but_bg_slide_bottom:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_vert:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_hor:after, 
	{$rule}.cmsms_button.cmsms_but_bg_expand_diag:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_shadow {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_shadow:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_shadow {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_dark_bg, 
	{$rule}.cmsms_button.cmsms_but_icon_light_bg, 
	{$rule}.cmsms_button.cmsms_but_icon_divider {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_dark_bg:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_light_bg:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_divider:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_dark_bg, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_light_bg, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_divider {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_divider:after {
		" . cmsms_color_css('border-right-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover:before, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_inverse:hover:after, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_inverse:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_slide_left, 
	{$rule}.cmsms_button.cmsms_but_icon_slide_right {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_slide_right:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_slide_right {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_left, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_right, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_top, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_bottom {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_left:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_right:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_top:hover, 
	{$rule}.cmsms_button.cmsms_but_icon_hover_slide_bottom:hover, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_left, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_right, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_top, 
	{$rule}.cmsms_paypal_donations > form:hover + .cmsms_button.cmsms_but_icon_hover_slide_bottom {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return $custom_css;
}

