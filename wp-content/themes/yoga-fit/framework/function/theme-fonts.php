<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.3
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function cmsms_theme_fonts() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.3
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body, 
	.cmsms_breadcrumbs .cmsms_breadcrumbs_inner, 
	.cmsms_breadcrumbs .cmsms_breadcrumbs_inner a, 
	.cmsms_menu_item .menu_feature_list li:before, 
	.post.cmsms_default_type .cmsms_post_cont_info > span, 
	.post.cmsms_default_type .cmsms_post_cont_info > span a, 
	.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_cont_info > span, 
	.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_cont_info > span a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	#wp-calendar thead th,
	.cmsms_posts_slider .post .cmsms_slider_post_date, 
	.cmsms_posts_slider .post .cmsms_slider_post_footer > a, 
	.cmsms_posts_slider .project .cmsms_slider_project_footer > a, 
	.post.cmsms_default_type .cmsms_post_cont_info > span, 
	.post.cmsms_default_type .cmsms_post_cont_info > span a, 
	.post.cmsms_default_type .cmsms_post_cont_info .cmsms_post_comments, 
	.post.cmsms_default_type .cmsms_post_cont_info .cmsmsLike, 
	.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_cont_info > span, 
	.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_cont_info > span a, 
	.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_footer > *, 
	.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_cont_info > span, 
	.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_cont_info > span a, 
	.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_footer > *, 
	.opened-article .post .cmsms_post_footer > *, 
	.post_nav .cmsms_post_meta > a, 
	.portfolio .project .project_outer .project_inner .cmsms_project_footer > a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.header_top a,
	.header_top {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	.contact_widget_name:before, 
	.contact_widget_email:before, 
	.contact_widget_phone:before, 
	.adress_wrap:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 3) . "px;
	}
	
	.quote_grid .quote_image:before {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:65px;
		line-height:86px;
		font-weight:normal;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a,
	#cancel-comment-reply-link {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_link_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_text_decoration'] . ";
	}

	a:hover {
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */

	#navigation > li > a, 
	#footer .footer_inner .footer_nav > li a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_text_transform'] . ";
	}
	
	#header #navigation [class^=\"cmsms-icon-\"]:before,
	#header #navigation [class*=\" cmsms-icon-\"]:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] + 5) . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_line_height'] . "px;
	}
	
	#footer .footer_inner .footer_nav > li a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_nav_title_font_font_size'] - 1) . "px;
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	#navigation ul li a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
	}
	
	@media only screen and (max-width: 1024px) {
		#navigation > li > a,
		html #header .search_wrap input[type=text] {
			font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
			font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] . "px;
			line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] . "px;
			font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight'] . ";
			font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
			text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
		}
		
		html .search_wrap input::-webkit-input-placeholder{
			font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
			font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] . "px;
			line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] . "px;
			font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight'] . ";
			font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
			text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
		}
		
		html .search_wrap input::-moz-placeholder{
			font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_system_font'] . ";
			font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_size'] . "px;
			line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_line_height'] . "px;
			font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_weight'] . ";
			font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_font_style'] . ";
			text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_nav_dropdown_font_text_transform'] . ";
		}
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.cmsms_search_post_title a,
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_counter_wrap,
	#header .logo .title {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsms_dropcap {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_counter_wrap {
		font-weight:normal;
		line-height:1em;
	}
	
	.cmsms_dropcap {
		font-size:40px; /* static */
		font-weight:normal;
	}
	
	.cmsms_dropcap.type2 {
		font-size:30px; /* static */
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.cmsms_stats.stats_mode_bars.stats_type_vertical .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap, 
	.cmsms_pricing_table .pricing_title, 
	.post.cmsms_default_type .cmsms_post_date .cmsms_day, 
	.post.cmsms_timeline_type .cmsms_post_date .cmsms_day {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	
	.cmsms_pricing_table .pricing_title {
		font-size:" . ((int)$cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] - 2) . "px;
	}
	
	.post.cmsms_default_type .cmsms_post_date .cmsms_day, 
	.post.cmsms_timeline_type .cmsms_post_date .cmsms_day {
		font-size:32px;
		line-height:38px;
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap,
	.cmsms_pricing_table .cmsms_price,
	.cmsms_pricing_table .cmsms_coins,
	.cmsms_pricing_table .cmsms_currency,
	.cmsms_sitemap_wrap .cmsms_sitemap > li > a,
	.cmsms_search .cmsms_search_post .cmsms_search_post_number {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	 
	.cmsms_pricing_table .cmsms_coins,
	.cmsms_pricing_table .cmsms_currency {
		font-size:" . ((int)$cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] + 2) . "px;
	}
	
	.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap {
		font-size:36px;
		line-height:36px;
	}
	
	.cmsms_pricing_table .cmsms_price {
		font-size:80px;
		line-height:80px;
	}
	
	.cmsms_pricing_table .cmsms_coins,
	.cmsms_pricing_table .cmsms_currency {
		line-height:76px;
	}
	
	.cmsms_search .cmsms_search_post .cmsms_search_post_number {
		line-height:52px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a,
	.comment-reply-title,
	#header .search_wrap input[type=text],
	.cmsms_img_rollover_wrap .cmsms_post_read_more, 
	.cmsms_stats.stats_mode_bars .cmsms_stat_title, 
	.cmsms_stats.stats_mode_bars.stats_type_horizontal .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap, 
	.cmsms_menu_item .cmsms_menu_price_wrap {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	.search_wrap input::-webkit-input-placeholder {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:uppercase;
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	.search_wrap input::-moz-placeholder {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:uppercase;
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	
	.cmsms_stats.stats_mode_bars .cmsms_stat_title, 
	.cmsms_stats.stats_mode_bars.stats_type_horizontal .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_counter_wrap {
		font-size:20px;
		line-height:26px;
		margin-top:-6px;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a,
	.cmsms_stats.stats_mode_counters.stats_type_numbers .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_title,
	.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a,
	.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a, 
	.cmsms_pricing_table .cmsms_period, 
	.cmsms_table caption, 
	.cmsms_table .cmsms_table_row_header th, 
	.cmsms_table .cmsms_table_row_header td, 
	.cmsms_table .cmsms_table_row_footer th, 
	.cmsms_table .cmsms_table_row_footer td, 
	.cmsms_twitter .cmsms_twitter_item .cmsms_twitter_item_content, 
	.cmsms_twitter .cmsms_twitter_item .cmsms_twitter_item_content a, 
	.post_nav .cmsms_prev_post a,
	.post_nav .cmsms_next_post a, 
	.cmsms_project_filter_wrap .cmsms_project_filter .cmsms_project_filter_block .cmsms_project_filter_list li .button, 
	.cmsms_post_filter_wrap .cmsms_post_filter .cmsms_post_filter_block .cmsms_post_filter_list li .button {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.cmsms_pricing_table .cmsms_period {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] - 2) . "px;
	}
	
	.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a,
	.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] + 2) . "px;
	}
	
	.cmsms_toggles .cmsms_toggle_wrap .cmsms_toggle_title > a,
	.cmsms_tabs .cmsms_tabs_list .cmsms_tabs_list_item > a {
		line-height:20px;
	}
	
	.cmsms_pricing_table .cmsms_period {
		text-transform:uppercase;
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	.related_posts > ul li > a,
	.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_title,
	.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > a,
	.cmsms_sitemap_category > li > a,
	.cmsms_sitemap_archive > li > a,
	.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > ul > li > a,
	.quote_link,
	.quote_site,
	.quote_subtitle,
	dl dt, 
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_title, 
	.post.cmsms_default_type .cmsms_post_date .cmsms_month, 
	.post.cmsms_timeline_type .cmsms_post_date .cmsms_month {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	.widget_nav_menu ul li > a,
	.cmsms_quotes_slider .quote_link,
	.cmsms_quotes_slider .quote_site,
	.cmsms_quotes_slider .quote_subtitle {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 2) . "px;
	}
	
	.cmsms_quotes_slider_full .quote_link, 
	.cmsms_quotes_slider_full .quote_site, 
	.cmsms_quotes_slider_full .quote_subtitle {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 1) . "px;
	}
	
	.cmsms_stats.stats_mode_circles .cmsms_stat_wrap .cmsms_stat .cmsms_stat_inner .cmsms_stat_title, 
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_title {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] + 2) . "px;
	}
	
	.post.cmsms_default_type .cmsms_post_date .cmsms_month, 
	.post.cmsms_timeline_type .cmsms_post_date .cmsms_month {
		font-size:14px;
		line-height:20px;
	}
	
	.cmsms_sitemap_category > li > a,
	.cmsms_sitemap_archive > li > a,
	.cmsms_sitemap_wrap .cmsms_sitemap > li > ul > li > ul > li > a {
		font-size:13px;
	}
	
	.cmsms_counters .cmsms_counter_wrap .cmsms_counter .cmsms_counter_inner .cmsms_counter_title {
		line-height:1em;
	}
	
	@media only screen and (min-width: 1024px) and (max-width: 1440px) {
		.cmsms_tabs.lpr .cmsms_tabs_list .cmsms_tabs_list_item > a {
			font-size:9px;
		}
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.button,
	.cmsms_button, 
	.cmsms_button.mont_btn > span, 
	.cmsms_post_loader, 
	.cmsms_project_loader, 
	#cancel-comment-reply-link, 
	input[type='submit'], 
	input[type='button'], 
	button {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_button_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.post.cmsms_masonry_type .cmsms_post_cont .cmsms_post_read_more, 
	.post.cmsms_timeline_type .cmsms_post_cont .cmsms_post_read_more {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_button_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.button, 
	.cmsms_post_loader, 
	.cmsms_project_loader, 
	#cancel-comment-reply-link, 
	input[type='submit'], 
	input[type='button'], 
	button {
		font-size:12px;
		line-height:20px;
	}
	
	.cmsms_button.mont_btn > span {
		line-height:44px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] . "px !important;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_text_transform'] . ";
	}

	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'] . " !important;
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input[type=text],
	input[type=email],
	input[type=password],
	input[type=number],
	input[type=date],
	input[type=url],
	input[type=tel],
	textarea,
	select,
	option, 
	code {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_input_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_input_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_style'] . ";
	}
	
	.ie_only input[type=text],
	.ie_only input[type=email],
	.ie_only input[type=password],
	.ie_only input[type=number],
	.ie_only input[type=date],
	.ie_only input[type=url],
	.ie_only input[type=tel],
	.ie_only select,
	.ie_only option {
		height:" . ($cmsms_option[CMSMS_SHORTNAME . '_input_font_line_height'] + 22) . "px;
	}
	
	.gform_wrapper input[type=text], 
	.gform_wrapper input[type=url], 
	.gform_wrapper input[type=email], 
	.gform_wrapper input[type=tel], 
	.gform_wrapper input[type=number], 
	.gform_wrapper input[type=date], 
	.gform_wrapper input[type=password], 
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	.cmsms_quotes_slider_full .cmsms_quote_inner .quote_content,
	.cmsms_quotes_slider .quote_content_inner,
	q,
	blockquote {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	
	.cmsms_quotes_slider .quote_content_inner:before,
	q:before,
	blockquote:before,
	q:after,
	blockquote:after  {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_system_font'] . ";
		font-size:80px;
		line-height:40px;
		font-weight:normal;
	}
	
	.cmsms_quotes_slider_full .cmsms_quote_inner .quote_content {
		font-size:" . ((int)$cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_size'] + 4) . "px;
		line-height:36px;
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";


if (CMSMS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	.checkout #order_review .shop_table th, 
	.checkout #order_review .shop_table td, 
	.checkout #order_review .shop_table th *, 
	.checkout #order_review .shop_table td *,
	.cmsms_dynamic_cart .widget_shopping_cart_content .total strong,
	.checkout #order_review .shop_table tr.cart_item th, 
	.checkout #order_review .shop_table tr.cart_item td, 
	.checkout #order_review .shop_table tr.cart_item th *, 
	.checkout #order_review .shop_table tr.cart_item td *, 
	.shop_table.order_details tr.order_item th, 
	.shop_table.order_details tr.order_item td, 
	.shop_table.order_details tr.order_item th *, 
	.shop_table.order_details tr.order_item td *, 
	ul.order_details li > strong {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	.checkout #order_review .shop_table th, 
	.checkout #order_review .shop_table td, 
	.checkout #order_review .shop_table th *, 
	.checkout #order_review .shop_table td * {
		text-transform:none;
	}
	/* Finish Content Font */
	
	/* Start H3 Font */
	div.products > h2,
	.cmsms_single_product .cmsms_product_right_column .product_title, 
	.cmsms_single_product .cmsms_product_right_column .price, 
	.cmsms_single_product .cmsms_woo_tabs .cmsms_tabs_wrap .cmsms_tab .cmsms_tab_inner > h2, 
	.cmsms_single_product .cmsms_woo_tabs #reviews #comments > h2 {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	.cmsms_single_product .cmsms_product_right_column .price del {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] - 4) . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsms_products .product .product_inner .cmsms_product_info .price, 
	#order_review_heading,
	.cart_totals > h2, 
	.cart_totals > h2 *, 
	.shipping_calculator > h2, 
	.shipping_calculator > h2 *, 
	.checkout .woocommerce-billing-fields > h3, 
	.checkout .woocommerce-shipping-fields > h3 {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.cmsms_products .product .product_inner .cmsms_product_info .price del {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.cmsms_products .product .product_inner .cmsms_product_info .price del {
		text-decoration:line-through;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.shop_table th, 
	.shop_table.order_details th, 
	.shop_table.order_details td, 
	.shop_table.order_details th *, 
	.shop_table.order_details td *, 
	ul.order_details li > span, 
	.product_list_widget li > a, 
	.cmsms_added_product_info_text,
	.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	.product_list_widget li > a, 
	.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li a,
	.cmsms_added_product_info_text,
	.shop_table.order_details th, 
	.shop_table.order_details td, 
	.shop_table.order_details th *, 
	.shop_table.order_details td *, 
	ul.order_details li > span {
		font-size:" . ((int)$cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 1) . "px;
	}
	
	.onsale, 
	.out-of-stock {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'] . ";
	}
	
	.shop_table td.product-price, 
	.shop_table td.product-price * {
		font-weight:normal;
	}
	/* Finish H6 Font */
	
	/* Start Button Font */
	.added_to_cart {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_button_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.added_to_cart, 
	.cmsms_add_to_cart_button {
		font-size:12px;
		line-height:20px;
	}
	/* Finish Button Font */
/***************** Finish WooCommerce Font Styles ******************/


";

}


if (CMSMS_EVENTS_CALENDAR) {

	$custom_css .= "
/***************** Start Events Font Styles ******************/

	/* Start Content Font */
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a, 
	.recurringinfo, 
	.recurringinfo *, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-event-\"] .tribe-events-month-event-title, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-event-\"] .tribe-events-month-event-title a, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details, 
	#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details *, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours, 
	#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .time-details, 
	.widget .vcalendar .vevent .cmsms_widget_event_ovh *, 
	.widget .tribe-events-widget-link a, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td *, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info .tribe-mini-calendar-event-venue a, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info .recurringinfo *, 
	.widget.tribe-this-week-events-widget .tribe-events-page-title {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under, 
	.tribe-events-tooltip {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td * {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 2) . "px;
	}
	
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday .column.first span {
		height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 3) . "px;
	}
	
	.widget.tribe-events-adv-list-widget {
		padding-bottom:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
	}
	
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under {
		text-transform:uppercase;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
	.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon {
		line-height:1em;
		font-weight:normal;
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-date span.list-daynumber, 
	#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_left .tribe-events-single-event-title, 
	.cmsms_event_date .cmsms_event_day {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	
	.cmsms_event_date .cmsms_event_day {
		font-size:32px;
		line-height:38px;
	}
	
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-date span.list-daynumber, 
	#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_left .tribe-events-single-event-title {
		font-weight:normal;
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */ 
	.tribe-events-list .tribe-events-list-event-title,
	.tribe-events-list .tribe-events-list-event-title a,
	.tribe-events-related-events-title,
	.tribe-events-page-title, 
	.widget .vcalendar .vevent .entry-title, 
	.widget .vcalendar .vevent .entry-title a, 
	.tribe-events-adv-list-widget .vcalendar .vevent .entry-title,
	.tribe-events-adv-list-widget .vcalendar .vevent .entry-title a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	
	.tribe-events-related-events-title {
		text-transform:uppercase;
	}
	@media only screen and (min-width: 1024px) and (max-width: 1440px) {
		.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
		.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon {
			font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
			line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
		}
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5,
	#tribe-events-content.tribe-events-list .tribe-events-list-separator-month, 
	ul.tribe-related-events > li .tribe-related-event-info .tribe-related-events-title a,
	ul.tribe-related-events > li .tribe-related-event-info .tribe-related-events-title,
	#tribe-events-content.tribe-events-list .vevent .cmsms_events_list_event_wrap .cmsms_events_list_event_header .tribe-events-event-cost,
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-date-filter label, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-search-filter label, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-geoloc-filter label, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-submit label,
	.tribe-events-week-grid .tribe-events-mobile h2 a,
	#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.tribe_mini_calendar_widget .vcalendar .vevent .entry-title,
	.tribe_mini_calendar_widget .vcalendar .vevent .entry-title a,
	.widget.tribe-events-list-widget .vcalendar .vevent .entry-title,
	.widget.tribe-events-list-widget .vcalendar .vevent .entry-title a,
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a, 
	.tribe-events-countdown-widget .tribe-countdown-text a, 
	#tribe-events-content.tribe-events-single .cmsms_single_event_meta .tribe-events-meta-group .tribe-events-single-section-title,  
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-date-filter label, #tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-search-filter label, #tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-geoloc-filter label, #tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-submit label,
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info h2, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info h2 a, 
	.widget.tribe-this-week-events-widget .tribe-this-week-event .entry-title, 
	.widget.tribe-this-week-events-widget .tribe-this-week-event .entry-title a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] - 1) . "px;
	}
	
	#tribe-events-content.tribe-events-single .cmsms_single_event_meta .tribe-events-meta-group .tribe-events-single-section-title, 
	#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-date-filter label, #tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-search-filter label, #tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-geoloc-filter label, #tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-submit label {
		text-transform:uppercase;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.tribe-events-venue-widget .vcalendar .vevent .entry-title,
	.tribe-events-venue-widget .vcalendar .vevent .entry-title a,
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column *, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th, 
	#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a,
	.tribe-events-tooltip .entry-title, 
	.tribe-events-tooltip .entry-title a,
	#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_right .tribe-events-cal-links a, 
	#tribe-events-footer > a, 
	#tribe-events-content.tribe-events-list .vevent .cmsms_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more, 
	.tribe-events-venue .cmsms_events_venue_header .cmsms_events_venue_header_left .tribe-events-event-meta .venue-address span, 
	.tribe-events-venue .cmsms_events_venue_header .cmsms_events_venue_header_left .tribe-events-event-meta .venue-address span a, 
	.tribe-events-venue .cmsms_events_venue_header .cmsms_events_venue_header_right a, 
	.tribe-events-organizer .cmsms_events_organizer_header .cmsms_events_organizer_header_left .tribe-events-event-meta .organizer-address span, 
	.tribe-events-organizer .cmsms_events_organizer_header .cmsms_events_organizer_header_left .tribe-events-event-meta .organizer-address span a, 
	.tribe-events-organizer .cmsms_events_organizer_header .cmsms_events_organizer_header_right a, 
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-date span.list-dayname, 
	.cmsms_event_date .cmsms_event_month {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	
	#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_right .tribe-events-back a, 
	#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_right .tribe-events-cal-links a, 
	#tribe-events-footer > a,  
	.tribe-events-venue .cmsms_events_venue_header .cmsms_events_venue_header_right a, 
	.tribe-events-organizer .cmsms_events_organizer_header .cmsms_events_organizer_header_right a {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 2) . "px;
	}
	 
	.tribe-events-venue .cmsms_events_venue_header .cmsms_events_venue_header_right a:before, 
	.tribe-events-organizer .cmsms_events_organizer_header .cmsms_events_organizer_header_right a:before {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] + 1) . "px;
	}
	
	#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a,
	#tribe-events-content.tribe-events-list .vevent .cmsms_events_list_event_wrap .tribe-events-list-event-description .tribe-events-read-more,
	#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile .tribe-events-event-body .tribe-events-read-more {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] - 1) . "px;
	}
	
	.cmsms_event_date .cmsms_event_month {
		font-size:14px;
		line-height:20px;
	}
	
	.tribe-events-tooltip .entry-title, 
	.tribe-events-tooltip .entry-title a,
	#tribe-events-footer > a, 
	.tribe-events-venue .cmsms_events_venue_header .cmsms_events_venue_header_right a, 
	.tribe-events-organizer .cmsms_events_organizer_header .cmsms_events_organizer_header_right a, 
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a {
		font-weight:normal;
	}
	
	.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column *, 
	#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th {
		text-transform:uppercase;
	}
	/* Finish H6 Font */
	

/***************** Finish Events Font Styles ******************/


";

}


if (CMSMS_TIMETABLE) {

	$custom_css .= "
/***************** Start Timetable Font Styles ******************/

	/* Start Content Font */
	table.tt_timetable .event, 
	table.tt_timetable .event a, 
	table.tt_timetable .event .event_header, 
	table.tt_timetable .event .hours, 
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_content_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_content_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_style'] . ";
	}
	
	table.tt_timetable .event, 
	ul.tt_upcoming_events li .tt_upcoming_events_event_container * {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] - 1) . "px;
	}
	
	table.tt_timetable .event a, 
	table.tt_timetable .event .event_header {
		font-size:" . ((int) $cmsms_option[CMSMS_SHORTNAME . '_content_font_font_size'] + 1) . "px;
	}
	
	table.tt_timetable .event a, 
	table.tt_timetable .event .event_header, 
	table.tt_timetable .event .hours {
		font-weight:bold;
	}
	/* Finish Content Font */


	/* Start Link Font */
	.link_font {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_link_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_link_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_link_font_text_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start H1 Font */
	.h1_font {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h1_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h1_font_text_decoration'] . ";
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	.h2_font {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h2_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	.event_layout_4 table.tt_timetable .event .hours {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h3_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	ul.tt_upcoming_events li .tt_upcoming_events_event_container {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h4_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	.tt_tabs_navigation li a {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h5_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	.h6_font {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_h6_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsms_option[CMSMS_SHORTNAME . '_h6_font_text_decoration'] . ";
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.tabs_box_navigation .tabs_box_navigation_selected {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_button_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_button_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_button_font_text_transform'] . ";
	}
	
	.tabs_box_navigation .tabs_box_navigation_selected {
		line-height:20px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	.small_font {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_small_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_small_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_font_style'] . ";
		text-transform:" . $cmsms_option[CMSMS_SHORTNAME . '_small_font_text_transform'] . ";
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	.input_font {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_input_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_input_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	.blockquote_font {
		font-family:" . cmsms_get_google_font($cmsms_option[CMSMS_SHORTNAME . '_quote_font_google_font']) . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_system_font'] . ";
		font-size:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_size'] . "px;
		line-height:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_weight'] . ";
		font-style:" . $cmsms_option[CMSMS_SHORTNAME . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */
	

/***************** Finish Timetable Font Styles ******************/


";

}
	
	return $custom_css;
}

