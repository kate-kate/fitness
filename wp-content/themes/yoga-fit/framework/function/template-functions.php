<?php 
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.3
 * 
 * Template Functions
 * Created by CMSMasters
 * 
 */


/* Get Logo Function */
function cmsms_logo() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$header_mid_height = (($cmsms_option[CMSMS_SHORTNAME . '_header_mid_height'] !== '') ? $cmsms_option[CMSMS_SHORTNAME . '_header_mid_height'] : '95');
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_logo_type'] == 'text') {
		if ($cmsms_option[CMSMS_SHORTNAME . '_logo_title'] != '') {
			$blog_title = $cmsms_option[CMSMS_SHORTNAME . '_logo_title'];
		} else {
			$blog_title = (get_bloginfo('name')) ? get_bloginfo('name') : CMSMS_FULLNAME;
		}
		
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_logo_subtitle'] != '') {
			$blog_descr = $cmsms_option[CMSMS_SHORTNAME . '_logo_subtitle'];
		} else {
			$blog_descr = (get_bloginfo('description')) ? get_bloginfo('description') : esc_html__('Default Logo Subtitle', 'yoga-fit');
		}
		
		
		echo '<a href="' . esc_url(home_url('/')) . '/" title="' . esc_attr($blog_title) . '" class="logo">' . "\n\t" . 
			'<span class="logo_aligner"></span>' . 
			'<span class="logo_text_wrap">' . 
				'<span class="title">' . esc_html($blog_title) . '</span>' . "\n" . 
				($cmsms_option[CMSMS_SHORTNAME . '_logo_subtitle'] ? '<span class="title_text">' . esc_html($blog_descr) . '</span>' : '') . 
			'</span>' . 
		'</a>';
	} else {
		if ($cmsms_option[CMSMS_SHORTNAME . '_logo_url'] == '') {
			echo '<a href="' . esc_url(home_url('/')) . '/" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . esc_url(get_template_directory_uri()) . '/img/logo.png" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\n\t" . 
				'<img class="logo_retina" src="' . esc_url(get_template_directory_uri()) . '/img/logo_retina.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="182" height="54" />' . "\r" . 
			'</a>' . "\n";
			
			
			$logo_def_style_width = (int) ($header_mid_height * (182 / 54));
			
			
			echo "
<style type=\"text/css\">
	#header .header_mid .logo_wrap {
		width : {$logo_def_style_width}px;
	}
</style>
";
			
			
			echo "
<style type=\"text/css\">
	#header .header_mid .logo_wrap .logo .logo_retina {
		width : 182px;
	}
	
	#header.navi_scrolled .header_mid .logo_wrap .logo .logo_retina {
		width:auto;
	}
</style>
";
		} else {
			$logo_img = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_logo_url']);
			
			if (is_numeric($logo_img[0])) {
				$logo_img_url = wp_get_attachment_image_src((int) $logo_img[0], 'full');
			}
			
			$logo_img_width = ((is_numeric($logo_img[0])) ? (int) $logo_img_url[1] : '182');
			
			$logo_img_height = ((is_numeric($logo_img[0])) ? (int) $logo_img_url[2] : '54');
			
			if ($logo_img_height >= $header_mid_height) {
				$logo_style_width = (int) ($header_mid_height * ($logo_img_width / $logo_img_height));
			} else {
				$logo_style_width = $logo_img_width;
			}
			
			
			echo "
<style type=\"text/css\">
	#header .header_mid .logo_wrap {
		width : {$logo_style_width}px;
	}
</style>
";
			
			
			echo '<a href="' . esc_url(home_url('/')) . '/" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
				'<img src="' . ((is_numeric($logo_img[0])) ? esc_url($logo_img_url[0]) : esc_url($logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_logo_url_retina'] != '') {
				$logo_img_retina = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_logo_url_retina']);
			
				if (is_numeric($logo_img_retina[0])) {
					$logo_img_retina_url = wp_get_attachment_image_src((int) $logo_img_retina[0], 'full');
				}
				
				$logo_img_retina_width = ((is_numeric($logo_img_retina[0])) ? ((int) $logo_img_retina_url[1] / 2) : '182');
				
				$logo_img_retina_height = ((is_numeric($logo_img_retina[0])) ? ((int) $logo_img_retina_url[2] / 2) : '54');
				
				
				echo "
<style type=\"text/css\">
	#header .header_mid .logo_wrap .logo .logo_retina {
		width : {$logo_img_retina_width}px;
	}
</style>
";
				
				
				echo '<img class="logo_retina" src="' . 
				((is_numeric($logo_img_retina[0])) ? esc_url($logo_img_retina_url[0]) : esc_url($logo_img_retina[1])) . 
				'" alt="' . esc_attr(get_bloginfo('name')) . 
				'" width="' . esc_attr($logo_img_retina_width) . 
				'" height="' . esc_attr($logo_img_retina_height) . 
				'" />' . "\r";
			} else {
				echo '<img class="logo_retina" src="' . ((is_numeric($logo_img[0])) ? esc_url($logo_img_url[0]) : esc_url($logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
			}
			
			
			echo '</a>' . "\n";
		}
	}
}



/* Get Footer Logo Function */
function cmsms_footer_logo() {
	$cmsms_option = cmsms_get_global_options();
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_footer_logo_url'] == '') {
		echo '<a href="' . esc_url(home_url('/')) . '/" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
			'<img src="' . esc_url(get_template_directory_uri()) . '/img/logo_footer.png" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\n\t" . 
			'<img class="footer_logo_retina" src="' . esc_url(get_template_directory_uri()) . '/img/logo_footer_retina.png" alt="' . esc_attr(get_bloginfo('name')) . '" width="136" height="154" />' . "\r" . 
		'</a>' . "\n";
		
		
		echo "
<style type=\"text/css\">
.footer_inner .logo .footer_logo_retina {
	width : 136px;
}
</style>
";
	} else {
		$footer_logo_img = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_footer_logo_url']);
		
		if (is_numeric($footer_logo_img[0])) {
			$footer_logo_img_url = wp_get_attachment_image_src((int) $footer_logo_img[0], 'full');
		}
		
		
		echo '<a href="' . esc_url(home_url('/')) . '/" title="' . esc_attr(get_bloginfo('name')) . '" class="logo">' . "\n\t" . 
			'<img src="' . ((is_numeric($footer_logo_img[0])) ? esc_url($footer_logo_img_url[0]) : esc_url($footer_logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
		
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_footer_logo_url_retina'] != '') {
			$footer_logo_img_retina = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_footer_logo_url_retina']);
		
			if (is_numeric($footer_logo_img_retina[0])) {
				$footer_logo_img_retina_url = wp_get_attachment_image_src((int) $footer_logo_img_retina[0], 'full');
			}
			
			$footer_logo_img_retina_width = ((is_numeric($footer_logo_img_retina[0])) ? ((int) $footer_logo_img_retina_url[1] / 2) : '136');
			
			$footer_logo_img_retina_height = ((is_numeric($footer_logo_img_retina[0])) ? ((int) $footer_logo_img_retina_url[2] / 2) : '154');
			
			
			echo '<img class="footer_logo_retina" src="' . 
			((is_numeric($footer_logo_img_retina[0])) ? esc_url($footer_logo_img_retina_url[0]) : esc_url($footer_logo_img_retina[1])) . 
			'" alt="' . esc_attr(get_bloginfo('name')) . 
			'" width="' . esc_attr($footer_logo_img_retina_width) . 
			'" height="' . esc_attr($footer_logo_img_retina_height) . 
			'" />' . "\r";
		} else {
			echo '<img class="footer_logo_retina" src="' . ((is_numeric($footer_logo_img[0])) ? esc_url($footer_logo_img_url[0]) : esc_url($footer_logo_img[1])) . '" alt="' . esc_attr(get_bloginfo('name')) . '" />' . "\r";
		}
		
		
		echo '</a>' . "\n";
	}
}



/* Get Favicon Function */
function cmsms_favicon() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$favicon_img = explode('|', $cmsms_option[CMSMS_SHORTNAME . '_favicon_url']);
	
	if (is_numeric($favicon_img[0])) {
		$favicon_img_url = wp_get_attachment_image_src((int) $favicon_img[0], 'full');
	}
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_favicon']) {
		if (is_numeric($favicon_img[0])) {
			echo '<link rel="shortcut icon" href="' . esc_url($favicon_img_url[0]) . '" type="image/x-icon" />';
		} else {
			echo '<link rel="shortcut icon" href="' . esc_url(get_template_directory_uri()) . '/img/favicon.ico" type="image/x-icon" />';
		}
	}
}



/* Get Page Heading Function */
function cmsms_page_heading() {
	if (CMSMS_WOOCOMMERCE && is_shop()) {
		$cmsms_page_id = wc_get_page_id('shop');
	} elseif (
		!is_404() && 
		!is_archive() && 
		!is_search()
	) {
		$cmsms_page_id = get_the_ID();
	}
	
	
	$cmsms_option = cmsms_get_global_options();
	
	
	if (
		((
			(
				CMSMS_WOOCOMMERCE && 
				!is_shop()
			) || 
			!CMSMS_WOOCOMMERCE
		) && (
			is_archive() || 
			is_search()
		)) || 
		(
			CMSMS_EVENTS_CALENDAR && 
			(
				tribe_is_list_view() || 
				tribe_is_month() || 
				tribe_is_day() || 
				(function_exists('tribe_is_past') && tribe_is_past()) || 
				(function_exists('tribe_is_upcoming') && tribe_is_upcoming()) || 
				(function_exists('tribe_is_week') && tribe_is_week()) || 
				(function_exists('tribe_is_map') && tribe_is_map()) || 
				(function_exists('tribe_is_photo') && tribe_is_photo()) 
			)
		)
	) {
		$cmsms_heading = 'default';
		
		$cmsms_heading_scheme = $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'];
		$cmsms_heading_bg_img_enable = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] ? 'true' : 'false';
		$cmsms_heading_bg_img = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'];
		$cmsms_heading_bg_rep = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'];
		$cmsms_heading_bg_att = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'];
		$cmsms_heading_bg_size = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'];
		$cmsms_heading_bg_color = $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'];
		$cmsms_heading_height = $cmsms_option[CMSMS_SHORTNAME . '_heading_height'];
		
		$cmsms_heading_standard_title = $cmsms_option[CMSMS_SHORTNAME . '_heading_standard_title'] == 1 ? 'true' : 'false';
		$cmsms_breadcrumbs = $cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] == 1 ? 'true' : 'false';
	} else {
		$cmsms_heading = get_post_meta($cmsms_page_id, 'cmsms_heading', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_heading', true) : 'default';
		
		$cmsms_heading_scheme = get_post_meta($cmsms_page_id, 'cmsms_heading_scheme', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_heading_scheme', true) : $cmsms_option[CMSMS_SHORTNAME . '_heading_scheme'];
		
		$cmsms_heading_bg_img_enable = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_img_enable', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_heading_bg_img_enable', true) : ($cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image_enable'] ? 'true' : 'false');
		
		$cmsms_heading_bg_img = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_img', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_heading_bg_img', true) : $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_image'];
		
		$cmsms_heading_bg_rep = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_rep', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_heading_bg_rep', true) : $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_repeat'];
		
		$cmsms_heading_bg_att = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_att', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_heading_bg_att', true) : $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_attachment'];
		
		$cmsms_heading_bg_size = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_size', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_heading_bg_size', true) : $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_size'];
		
		$cmsms_heading_bg_color = get_post_meta($cmsms_page_id, 'cmsms_heading_bg_color', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_heading_bg_color', true) : $cmsms_option[CMSMS_SHORTNAME . '_heading_bg_color'];

		$cmsms_heading_height = get_post_meta($cmsms_page_id, 'cmsms_heading_height', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_heading_height', true) : $cmsms_option[CMSMS_SHORTNAME . '_heading_height'];
		
		
		$cmsms_heading_title = get_post_meta($cmsms_page_id, 'cmsms_heading_title', true);
		
		$cmsms_heading_subtitle = get_post_meta($cmsms_page_id, 'cmsms_heading_subtitle', true);
		
		$cmsms_heading_icon = get_post_meta($cmsms_page_id, 'cmsms_heading_icon', true);
		

		$cmsms_heading_standard_title = get_post_meta($cmsms_page_id, 'cmsms_heading_standard_title', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_heading_standard_title', true) : ($cmsms_option[CMSMS_SHORTNAME . '_heading_standard_title'] == 1 ? 'true' : 'false');
		
		$cmsms_breadcrumbs = get_post_meta($cmsms_page_id, 'cmsms_breadcrumbs', true) !== '' ? get_post_meta($cmsms_page_id, 'cmsms_breadcrumbs', true) : ($cmsms_option[CMSMS_SHORTNAME . '_breadcrumbs'] == 1 ? 'true' : 'false');
		
		
		if ($cmsms_heading == '') {
			$cmsms_heading = 'default';
		}
	}
	
	
	$options_img = explode('|', $cmsms_heading_bg_img);
	
	
	if (is_numeric($options_img[0])) {
		$options_img_url = wp_get_attachment_image_src((int) $options_img[0], 'full');
	}
	
	
	echo "
	<style type=\"text/css\">";
	
	
	if ($cmsms_heading_bg_img_enable == 'true' && $cmsms_heading_bg_img != '') {
		echo "
		.top_img, 
		.headline.cmsms_headline_disabled {
			background-image:url(" . ((is_numeric($options_img[0])) ? esc_url($options_img_url[0]) : esc_url($options_img[0])) . ");
			background-repeat:{$cmsms_heading_bg_rep};
			background-attachment:{$cmsms_heading_bg_att};
			background-size:{$cmsms_heading_bg_size};
		}
		
		";
	}
	
	if ($cmsms_heading_bg_color) {
	echo ".headline_color {
			background-color:{$cmsms_heading_bg_color};
		}
		
		";
	}
	
	echo ".headline_inner {
			min-height:{$cmsms_heading_height}px;
		}
	</style>
	";
	
	
	if ($cmsms_heading != 'disabled' && !is_home()) {
		echo "<div class=\"top_img cmsms_color_scheme_{$cmsms_heading_scheme}\">
			<div class=\"top_img_height\"></div>
			<div class=\"headline\">
				<div class=\"headline_outer\">
					<div class=\"headline_color\"></div>
					<div class=\"headline_inner\">
						<div class=\"headline_table\">" . 
							'<div class="headline_text' . (($cmsms_heading == 'custom') ? (($cmsms_heading_icon != '') ? ' headline_icon ' . $cmsms_heading_icon : '') . (($cmsms_heading_subtitle != '') ? ' headline_subtitle' : '') : '') . '">';
					
					
							if ($cmsms_heading == 'custom') {
								if ($cmsms_heading_subtitle == '') {
									echo '<h1 class="entry-title">' . (($cmsms_heading_title != '') ? esc_html($cmsms_heading_title) : esc_html(get_the_title())) . '</h1>';
								} else {
									echo '<h1 class="entry-title">' . (($cmsms_heading_title != '') ? esc_html($cmsms_heading_title) : esc_html(get_the_title())) . '</h1>' . 
										'<h5>' . esc_html(str_replace("\n", "<br />", $cmsms_heading_subtitle)) . '</h5>';
								}
							} elseif (CMSMS_WOOCOMMERCE && is_woocommerce()) {
								echo '<h1 class="entry-title">';
								
									esc_html(woocommerce_page_title());
									
								echo '</h1>'; 
							}elseif (CMSMS_EVENTS_CALENDAR && tribe_is_event_query() && !is_singular()) {
								echo '<h1 class="entry-title">';
								
									echo esc_html__('Events Calendar', 'yoga-fit');
									
								echo '</h1>';
							} elseif (is_archive() || is_search()) {
								echo '<h1 class="entry-title">';
								
								if (is_search()) {
									global $wp_query;
									
									if (!empty($wp_query->found_posts)) {
										if ($wp_query->found_posts > 1) {
											echo esc_html($wp_query->found_posts) . ' ' . esc_html__('search results for', 'yoga-fit') . ': ' . esc_attr(get_search_query());
										} else {
											echo esc_html($wp_query->found_posts) . ' ' . esc_html__('search result for', 'yoga-fit') . ': ' . esc_attr(get_search_query());
										}
									} else {
										echo esc_html__('Search results for', 'yoga-fit') . ': ' . esc_attr(get_search_query());
									}
								} elseif (is_archive()) {
									if (is_day()) {
										echo esc_html__('Archive for date', 'yoga-fit') . ': ' . esc_html(get_the_date());
									} elseif (is_month()) {
										echo esc_html__('Archive for month', 'yoga-fit') . ': ' . esc_html(get_the_date('F Y'));
									} elseif (is_year()) {
										echo esc_html__('Archive for year', 'yoga-fit') . ': ' . esc_html(get_the_date('Y'));
									} elseif (is_category()) {
										echo single_cat_title(esc_html__('Archive for category', 'yoga-fit') . ': ', false);
									} elseif (is_tag()) {
										echo single_tag_title(esc_html__('Archive for tag', 'yoga-fit') . ': ', false);
									} elseif (is_author()) {
										$archive_author = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
										
										esc_html_e('Author archive', 'yoga-fit');
										
										if (isset($archive_author->nickname)) {
											echo ' ' . esc_html__('for', 'yoga-fit') . ': ' . esc_html($archive_author->nickname);
										}
									} elseif (is_tax()) {
										$archive_taxonomy = get_taxonomy(get_query_var('taxonomy'));
										
										esc_html_e('Archive for', 'yoga-fit');
										
										if (isset($archive_taxonomy->singular_label) && $archive_taxonomy->singular_label != '') {
											echo ' <span class="low_case">' . esc_html($archive_taxonomy->singular_label) . '</span>';
										}
										
										echo ': ' . single_term_title('', false);
									} elseif (is_post_type_archive()) {
										echo post_type_archive_title('', false) . ' ' . esc_html__('archive', 'yoga-fit');
									} else {
										esc_html_e('Archives', 'yoga-fit');
									}
								}
								
								
								echo '</h1>';
							} elseif ($cmsms_heading == 'default' && $cmsms_heading_standard_title == 'true') {
								echo the_title('<h1 class="entry-title">', '</h1>', false);
							}
				
				
							echo "</div>";
				
							if ( 
								!is_front_page() && 
								$cmsms_breadcrumbs == 'true' && 
								!(
									CMSMS_EVENTS_CALENDAR && 
									(
										tribe_is_list_view() || 
										tribe_is_month() || 
										tribe_is_day() || 
										(function_exists('tribe_is_past') && tribe_is_past()) || 
										(function_exists('tribe_is_upcoming') && tribe_is_upcoming()) || 
										(function_exists('tribe_is_week') && tribe_is_week()) || 
										(function_exists('tribe_is_map') && tribe_is_map()) || 
										(function_exists('tribe_is_photo') && tribe_is_photo()) 
									)
								)
							) {
								echo '<div class="cmsms_breadcrumbs">' . 
									'<div class="cmsms_breadcrumbs_inner">';
								
								if (CMSMS_WOOCOMMERCE && is_woocommerce()) {
									woocommerce_breadcrumb();
								} elseif (function_exists('yoast_breadcrumb')) {
									$yoast_enable = get_option('wpseo_internallinks');
									
									
									if ($yoast_enable['breadcrumbs-enable']) {
										yoast_breadcrumb();
									} else {
										breadcrumbs();
									}
								} else {
									breadcrumbs();
								}
								
								echo '</div>' . 
								'</div>';
							}
					echo "</div>
					</div>
				</div>
			</div>
		</div>";
	} else if ($cmsms_heading == 'disabled') {
		echo '';
	} else {
		echo "<div class=\"headline cmsms_headline_disabled\">
			<div class=\"headline_outer\"></div>
		</div>";
	}
}



/* Get Social Icons Function */
function cmsms_social_icons() {
	$cmsms_option = cmsms_get_global_options();
	
	
	echo '<div class="social_wrap">' . "\n" . 
			'<ul>' . "\n";
	
	
	foreach ($cmsms_option[CMSMS_SHORTNAME . '_social_icons'] as $cmsms_social_icons) {
		$cmsms_social_icon = explode('|', str_replace(' ', '', $cmsms_social_icons));
		
		
		echo '<li>' . "\n\t" . 
			'<a href="' . esc_url($cmsms_social_icon[1]) . '" class="' . esc_attr($cmsms_social_icon[0]) . '" title="' . esc_attr($cmsms_social_icon[2]) . '"' . (($cmsms_social_icon[3] == 'true') ? ' target="_blank"' : '') . '></a>' . "\r" . 
		'</li>' . "\n";
	}
	
	
	echo '</ul>' . "\r" . 
	'</div>' . "\r";
}



/* Get Posts Thumbnail Function */
function cmsms_thumb($cmsms_id, $type = 'post-thumbnail', $link = true, $group = false, $preload = true, $highImg = false, $fullwidth = true, $show = true, $attachment = false) {
	$args = array( 
		'class' => (($fullwidth) ? 'full-width' : ''), 
		'alt' => cmsms_title($cmsms_id, false), 
		'title' => cmsms_title($cmsms_id, false) 
	);
	
	
	$link_href = ($attachment) ? wp_get_attachment_image_src((int) $attachment, 'full') : wp_get_attachment_image_src((int) get_post_thumbnail_id($cmsms_id), 'full');
	
	$unique_id = uniqid();
	
	
	$out = '<figure>' . 
		'<a href="' . (($link) ? esc_url(get_permalink()) : esc_url($link_href[0])) . '"' .  
		' title="' . cmsms_title($cmsms_id, false) . '"' . 
		' class="cmsms_img_link' . 
		(($preload) ? ' preloader' . (($highImg) ? ' highImg' : '') : '') . 
		'"' . 
		(($group) ? ' rel="ilightbox[' . esc_attr($group) . '_' . $unique_id . ']"' : '') . 
		'>';
	
	
	if ($attachment) {
		$out .= wp_get_attachment_image($attachment, (($type) ? $type : 'full'), false, $args);
	} else {
		$out .= get_the_post_thumbnail($cmsms_id, (($type) ? $type : 'full'), $args);
	}
	
	
	$out .= '</a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Thumbnail With Rollover Function */
function cmsms_thumb_rollover($cmsms_id, $type = 'post-thumbnail', $rollover = true, $open_link = true, $group = false, $attachment_images = false, $attachment_video_type = false, $attachment_video_link = false, $attachment_video_links = false, $highImg = false, $show = true, $link_redirect = false, $link_url = false, $read_more = false) {
	$cmsms_title = cmsms_title($cmsms_id, false);

	$args = array( 
		'class' => 'full-width', 
		'alt' => $cmsms_title, 
		'title' => $cmsms_title 
	);
	
	$unique_id = uniqid();
	
	
	$out = '<figure class="cmsms_img_rollover_wrap preloader' . (($highImg) ? ' highImg' : '') . '">';
	
	
	if (has_post_thumbnail($cmsms_id)) {
		$out .= get_the_post_thumbnail($cmsms_id, (($type) ? $type : 'full'), $args);
		
		$cmsms_image_link = wp_get_attachment_image_src((int) get_post_thumbnail_id($cmsms_id), 'full');
	} elseif ($attachment_images && $attachment_images[0] != '' && sizeof($attachment_images) > 0) {
		$out .= wp_get_attachment_image($attachment_images[0], (($type) ? $type : 'full'), false, $args);
		
		$cmsms_image_link = wp_get_attachment_image_src((int) $attachment_images[0], 'full');
	} else {
		$out .= '<span class="img_placeholder cmsms_theme_icon_photo"></span>';
		
		$cmsms_image_link = '';
	}
	
	
	$is_video_selfhosted = false;
	
	
	if (
		$attachment_video_type == 'selfhosted' && 
		!empty($attachment_video_links) && 
		sizeof($attachment_video_links) > 0
	) {
		$is_video_selfhosted = true;
		
		
		$shv_out = 'href="' . esc_url($attachment_video_links[0]) . '"';
		
		
		$shvl_out = '';
		
		
		unset($attachment_video_links[0]);
		
		
		foreach($attachment_video_links as $attachment_video_link_url) {
			$video_format = substr(strrchr($attachment_video_link_url, '.'), 1);
			
			$shvl_out .= $video_format . ":'{$attachment_video_link_url}', ";
		}
		
		
		$shv_out .= ' data-options="' . 
			'html5video: {' . 
				substr($shvl_out, 0, -2) . 
			'}' . 
		'"';
	}
	
	
	$out .= '<div class="cmsms_img_rollover' . ($rollover || $read_more ? '' : ' cmsms_img_rollover_no_bg') . '">';
	
	
	if ($rollover) {
		if (
			$group && 
			(
				(
					$attachment_video_type == 'embedded' && 
					$attachment_video_link != ''
				) || 
				$is_video_selfhosted || 
				$cmsms_image_link != ''
			)
		) {
			$out .= '<a ' . ($is_video_selfhosted ? $shv_out : 'href="' . ((!$attachment_video_link) ? esc_url($cmsms_image_link[0]) : embedConvert($attachment_video_link)) . '"') . ' rel="ilightbox[' . esc_attr($cmsms_id) . '_' . $unique_id . ']" title="' . esc_attr($cmsms_title) . '" class="cmsms_image_link' . (($open_link) ? '' : ' no_open_link') . '"><span class="cmsms_theme_icon_item_link"></span></a>';
		}
		
		
		if ($open_link) {
			$out .= '<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink($cmsms_id))) . '" title="' . esc_attr($cmsms_title) . '" class="cmsms_open_link"><span class="cmsms_theme_icon_lightbox"></span></a>';
		} else {
			$out .= '<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink($cmsms_id))) . '" title="' . esc_attr($cmsms_title) . '" class="cmsms_open_post_link"></a>';
		}
	} else if ($read_more == true) {
		$cmsms_post_read_more = get_post_meta($cmsms_id, 'cmsms_post_read_more', true);
	
	
		if ($cmsms_post_read_more == '') {
			$cmsms_post_read_more = esc_attr__('Read More', 'yoga-fit');
		}
		
		
		$out .= '<a class="cmsms_post_read_more" href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink($cmsms_id))) . '"><span>' . esc_html($cmsms_post_read_more) . '</span></a>';
	} else {
		$out .= '<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink($cmsms_id))) . '" title="' . esc_attr($cmsms_title) . '" class="cmsms_open_post_link"></a>';
	}
	
	
	$out .= '</div>' . 
	'</figure>';
	
	
	if ($group && $attachment_images && sizeof($attachment_images) > 1) {
		if (!has_post_thumbnail($cmsms_id)) {
			unset($attachment_images[0]);
		}
		
		$out .= '<div class="dn">';
		
		foreach ($attachment_images as $attachment_image) {
			$attachment_image_link = wp_get_attachment_image_src((int) $attachment_image, 'full');
			
			$out .= '<figure>' . 
				'<a href="' . esc_url($attachment_image_link[0]) . '" rel="ilightbox[' . esc_attr($cmsms_id) . '_' . $unique_id . ']" title="' . esc_attr($cmsms_title) . '" class="preloader highImg">' . 
					wp_get_attachment_image($attachment_image, 'full', false, $args) . 
				'</a>' . 
			'</figure>';
		}
		
		$out .= '</div>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Small Thumbnail Function */
function cmsms_thumb_small($cmsms_id, $type = 'post', $w = 100, $h = 100, $show = true) {
	$out = '<figure class="alignleft">' . 
		'<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsms_title($cmsms_id, false) . '">';

		$args = array( 
			'alt' => cmsms_title($cmsms_id, false), 
			'title' => cmsms_title($cmsms_id, false), 
			'style' => 'width:' . $w . 'px; height:' . $h . 'px;' 
		);
		
		
		if (has_post_thumbnail()) {
			$out .= get_the_post_thumbnail($cmsms_id, 'square-thumb', $args);
		} elseif ($type == 'post') { // Post type - post
			if (get_post_format() == 'audio') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_audio_post"></span>';
			} elseif (get_post_format() == 'gallery') {
				$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsms_id, 'cmsms_post_images', true))));
				
				$cmsms_post_image = $cmsms_post_images[0];
				
				if (isset($cmsms_post_image) && $cmsms_post_image != '') {
					$out .= wp_get_attachment_image($cmsms_post_image, 'square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsms_theme_icon_gallery_post"></span>';
				}
			} elseif (get_post_format() == 'image') {
				$cmsms_post_image = get_post_meta($cmsms_id, 'cmsms_post_image_link', true);
				
				if (isset($cmsms_post_image) && $cmsms_post_image != '') {
					$out .= wp_get_attachment_image($cmsms_post_image, 'square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsms_theme_icon_image_post"></span>';
				}
			} elseif (get_post_format() == 'video') {
				$out .= '<span class="img_placeholder cmsms_theme_icon_video_post"></span>';
			} else {
				$out .= '<span class="img_placeholder cmsms_theme_icon_standard_post"></span>';
			}
		} elseif ($type == 'project') { // Post type - project
			if (get_post_format() == 'gallery' || get_post_format() == 'standard') {
				$cmsms_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta($cmsms_id, 'cmsms_project_images', true))));
				
				$cmsms_project_image = $cmsms_project_images[0];
				
				if (isset($cmsms_project_image) && $cmsms_project_image != '') {
					$out .= wp_get_attachment_image($cmsms_project_image, 'square-thumb', false, $args);
				} else {
					$out .= '<span class="img_placeholder cmsms_theme_icon_gallery_project"></span>';
				}
			} else {
				$out .= '<span class="img_placeholder cmsms_theme_icon_video_project"></span>';
			}
		} elseif ($type == 'profile') { // Post type - profile
			$out .= '<span class="img_placeholder cmsms_theme_icon_profile_format"></span>';
		}
		
		$out .= '</a>' . 
	'</figure>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Title Function */
function cmsms_title($cmsms_id, $show = true) { 
	$cmsms_heading = get_post_meta($cmsms_id, 'cmsms_heading', true);
	
	$cmsms_heading_title = get_post_meta($cmsms_id, 'cmsms_heading_title', true);
	
	$out = '';
	
	if ($cmsms_heading == 'custom' && $cmsms_heading_title != '') {
		$out .= esc_attr($cmsms_heading_title);
	} else {
		$out .= esc_attr(strip_tags(get_the_title($cmsms_id) ? get_the_title($cmsms_id) : $cmsms_id));
	} 
    
	
    if ($show) {
        echo $out;
    } else {
        return $out;
    }
}





/****************************** Blog, Portfolio, Profiles Single Functions ******************************/

/* Get Previous & Next Post Links Function */
function cmsms_prev_next_posts() {
	$cmsms_post_type = get_post_type();
	
	$published_posts = wp_count_posts($cmsms_post_type)->publish;
	
	$cmsms_option = cmsms_get_global_options();
	
	
	if ($published_posts > 1) {
		echo '<aside class="post_nav">';
		
			if (
				$cmsms_post_type == 'post' && 
				(
					$cmsms_option[CMSMS_SHORTNAME . '_blog_post_like'] || 
					($cmsms_option[CMSMS_SHORTNAME . '_blog_post_comment'] && comments_open())
				)
			) {
				echo '<span class="cmsms_post_meta">';
					cmsms_post_comments('post');
					
					cmsms_post_like('post');
				echo '</span>';
			} else if (
				$cmsms_post_type == 'project' && 
				(
					$cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_like'] || 
					($cmsms_option[CMSMS_SHORTNAME . '_portfolio_project_comment'] && comments_open())
				)
			) {
				echo '<span class="cmsms_post_meta">';
					cmsms_project_comments('post');
					
					cmsms_project_like('post');
				echo '</span>';
			} else if (
				$cmsms_post_type == 'profile' && 
				$cmsms_option[CMSMS_SHORTNAME . '_profile_post_comment'] && 
				comments_open()
			) {
				echo '<span class="cmsms_post_meta">';
					cmsms_profile_comments('post');
				echo '</span>';
			}
			
			
			echo '<span class="cmsms_prev_post">';
				previous_post_link('%link<span class="cmsms_prev_arrow"><span></span></span>');
			echo '</span>';
			
			
			echo '<span class="cmsms_next_post">';
				next_post_link('%link<span class="cmsms_next_arrow"><span></span></span>');
			echo '</span>';
		
		echo '</aside>';
	}
}



/* Get Sharing Box Function */
function cmsms_sharing_box($title_box = false, $tag = 'h3') {
	echo '<aside class="share_posts">';
		if ($title_box) {
			echo '<' . esc_html($tag) . ' class="share_posts_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
		}
?>	
		<div class="fl share_posts_item">
			<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en"><?php esc_html_e('Tweet', 'yoga-fit'); ?></a>
			<script type="text/javascript">
				!function (d, s, id) { 
					var js = undefined, 
						fjs = d.getElementsByTagName(s)[0];
					
					if (d.getElementById(id)) { 
						d.getElementById(id).parentNode.removeChild(d.getElementById(id));
					}
					
					js = d.createElement(s);
					js.id = id;
					js.src = '//platform.twitter.com/widgets.js';
					
					fjs.parentNode.insertBefore(js, fjs);
				} (document, 'script', 'twitter-wjs');
			</script>
		</div>
		<div class="fl share_posts_item">
			<div class="g-plusone" data-size="medium"></div>
			<script type="text/javascript">
				(function () { 
					var po = document.createElement('script'), 
						s = document.getElementsByTagName('script')[0];
					
					po.type = 'text/javascript';
					po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
					
					s.parentNode.insertBefore(po, s);
				} )();
			</script>
		</div>
		<div class="fl share_posts_item">
			<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink(get_the_ID())); ?>" class="pin-it-button" count-layout="horizontal">
				<img border="0" src="//assets.pinterest.com/images/PinExt.png" title="<?php esc_attr_e('Pin It', 'yoga-fit'); ?>" />
			</a>
			<script type="text/javascript">
				(function (d, s, id) { 
					var js = undefined, 
						fjs = d.getElementsByTagName(s)[0];
					
					if (d.getElementById(id)) { 
						d.getElementById(id).parentNode.removeChild(d.getElementById(id));
					}
					
					js = d.createElement(s);
					js.id = id;
					js.src = '//assets.pinterest.com/js/pinit.js';
					
					fjs.parentNode.insertBefore(js, fjs);
				} (document, 'script', 'pinterest-wjs'));
			</script>
		</div>
		<div class="fl share_posts_item">
			<div class="fb-like" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false" data-font="arial"></div>
			<script type="text/javascript">
				(function (d, s, id) { 
					var js = undefined, 
						fjs = d.getElementsByTagName(s)[0];
					
					if (d.getElementById(id)) { 
						d.getElementById(id).parentNode.removeChild(d.getElementById(id));
					}
					
					js = d.createElement(s);
					js.id = id;
					js.src = '//connect.facebook.net/en_US/all.js#xfbml=1';
					
					fjs.parentNode.insertBefore(js, fjs);
				} (document, 'script', 'facebook-jssdk'));
			</script>
		</div>
		<div class="cl"></div>
<?php 
	echo '</aside>' . "\n";
}



/* Get Author Box Function */
function cmsms_author_box($title_box = false, $tag = 'h3') {
	$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
	$user_first_name = get_the_author_meta('first_name') ? get_the_author_meta('first_name') : false;
	$user_last_name = get_the_author_meta('last_name') ? get_the_author_meta('last_name') : false;
	$user_url = get_the_author_meta('url') ? get_the_author_meta('url') : false;
	$user_description = get_the_author_meta('description') ? get_the_author_meta('description') : false;
	
	$user_googleplus = get_the_author_meta('googleplus') ? get_the_author_meta('googleplus') : false;
	$user_twitter = get_the_author_meta('twitter') ? get_the_author_meta('twitter') : false;
	$user_facebook = get_the_author_meta('facebook') ? get_the_author_meta('facebook') : false;
	
	echo '<aside class="about_author">';
	
	if ($title_box) {
		echo '<' . esc_html($tag) . ' class="about_author_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
	}
	
	echo '<div class="about_author_inner">';
	
	$out = '';
	
	if ($user_first_name) {
		$out .= $user_first_name;
	}
	
	if ($user_first_name && $user_last_name) {
		$out .= ' ' . $user_last_name;
	} elseif ($user_last_name) {
		$out .= $user_last_name;
	}
	
	if (get_the_author() && ($user_first_name || $user_last_name)) {
		$out .= ' (';
	}
	
	if (get_the_author()) {
		$out .= get_the_author();
	}
	
	if (get_the_author() && ($user_first_name || $user_last_name)) {
		$out .= ')';
	}
	
	echo '<figure class="alignleft">' . 
		get_avatar($user_email, 125, get_option('avatar_default')) . 
	'</figure>' . 
	'<div class="ovh">';
	
	if ($out != '') {
		echo '<h4 class="vcard author"><span class="fn" rel="author">' . esc_html($out) . '</span></h4>';
	}
	
	if ($user_description) {
		echo '<p>' . str_replace("\n", '<br />', $user_description) . '</p>';
	}
	
	echo '<div class="social_wrap">' . 
		'<div class="social_wrap_inner">' . 
			'<ul>';
	
	if ($user_email) {
		echo '<li>' . 
			'<a href="mailto:' . $user_email . '" class="cmsms_theme_icon_user_mail" title="' . esc_attr__('Email', 'yoga-fit') . '" target="_blank"></a>' . 
		'</li>';
	}
	
	if ($user_url) {
		echo '<li>' . 
			'<a href="' . esc_url($user_url) . '" class="cmsms_theme_icon_user_website" title="' . esc_attr__('Website', 'yoga-fit') . '" target="_blank"></a>' . 
		'</li>';
	}
	
	if ($user_googleplus) {
		echo '<li>' . 
			'<a href="https://plus.google.com/+' . $user_googleplus . '" class="cmsms_theme_icon_user_gplus" title="' . esc_attr__('Website', 'yoga-fit') . '" target="_blank"></a>' . 
		'</li>';
	}
	
	if ($user_twitter) {
		echo '<li>' . 
			'<a href="https://twitter.com/' . $user_twitter . '" class="cmsms_theme_icon_user_twitter" title="' . esc_attr__('Twitter', 'yoga-fit') . '" target="_blank"></a>' . 
		'</li>';
	}
	
	if ($user_facebook) {
		echo '<li>' . 
			'<a href="' . esc_url($user_facebook) . '" class="cmsms_theme_icon_user_facebook" title="' . esc_attr__('Facebook', 'yoga-fit') . '" target="_blank"></a>' . 
		'</li>';
	}
	
	echo '</ul>' . 
					'</div>' . 
				'</div>' . 
			'</div>' . 
		'</div>' . 
	'</aside>';
}



/* Get Related, Popular & Recent Posts Function */
function cmsms_related($tag = 'h3', $related_box = false, $tgsarray = null, $popular_box = false, $recent_box = false, $related_number = 4, $type = 'post', $taxonomy = null) {
	if (($related_box && !empty($tgsarray)) || $recent_box || $popular_box) {
		if ($type == 'post') {
			$r = new WP_Query(array( 
				'posts_per_page' => $related_number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'tag__in' => $tgsarray, 
				'post__not_in' => array(get_the_ID()), 
				'post_type' => $type 
			));
		} elseif ($type != 'post' && $taxonomy) {
			$r = new WP_Query(array( 
				'posts_per_page' => $related_number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'tax_query' => array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				), 
				'post__not_in' => array(get_the_ID()), 
				'post_type' => $type 
			));
		}
		
		echo '<aside class="related_posts">' . 
			'<' . esc_html($tag) . '>';
		
		if ($type == 'post') {
			echo esc_attr__('More posts', 'yoga-fit');
		} else {
			echo esc_attr__('More projects', 'yoga-fit');
		}
		
		echo '</' . esc_html($tag) . '>' . 
			'<ul>';
		
		if ($related_box && !empty($tgsarray) && $r->have_posts()) {
			echo '<li>' . 
				'<a href="#" class="current">' . esc_html__('Related', 'yoga-fit') . '</a>' . 
			'</li>';
		}
		
		if ($popular_box) {
			echo '<li>' . 
				'<a href="#"';
			
			if (!$related_box || empty($tgsarray) || !$r->have_posts()) {
				echo ' class="current"';
			}
			
			echo '>' . esc_html__('Popular', 'yoga-fit') . '</a>' . 
			'</li>';
		}
		
		if ($recent_box) {
			echo '<li>' . 
				'<a href="#"';
			
			if ((!$related_box || empty($tgsarray) || !$r->have_posts()) && !$popular_box) {
				echo ' class="current"';
			}
			
			echo '>' . esc_html__('Latest', 'yoga-fit') . '</a>' . 
			'</li>';
		}
		
		echo '</ul>' . 
		'<div class="related_posts_content">';
		
		if ($related_box && !empty($tgsarray) && $r->have_posts()) {
			echo '<div class="related_posts_content_tab" style="display:block;">';
			
			if ($type == 'post') {
				$related = new WP_Query(array( 
					'posts_per_page' => $related_number, 
					'post_status' => 'publish', 
					'ignore_sticky_posts' => 1, 
					'tag__in' => $tgsarray, 
					'post__not_in' => array(get_the_ID()), 
					'post_type' => $type 
				));
			} elseif ($type != 'post' && $taxonomy) {
				$related = new WP_Query(array( 
					'posts_per_page' => $related_number, 
					'post_status' => 'publish', 
					'ignore_sticky_posts' => 1, 
					'tax_query' => array( 
						array( 
							'taxonomy' => $taxonomy, 
							'field' => 'term_id', 
							'terms' => $tgsarray 
						) 
					), 
					'post__not_in' => array(get_the_ID()), 
					'post_type' => $type 
				));
			}
			
			if ($related->have_posts()) :
				$numb = 0;
				
				while ($related->have_posts()) : $related->the_post();
					$numb++;
					
					if ($numb % 2) {
						echo '<div class="one_half">';
					} else {
						echo '<div class="one_half last">';
					}
					
					echo '<div class="rel_post_content">';
					
					cmsms_thumb_small(get_the_ID(), $type);
					
					echo '<h5 class="rel_post_title">' . 
							'<a href="' . esc_url(get_permalink()) . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
						'</h5>' . 
					'</div>';
					
					if ($numb % 2) {
						echo '</div>';
					} else {
						echo '</div>' . 
						'<div class="cl"></div>'; 
					}
				endwhile;
			else :
				echo '<h5 class="rel_post_title">';
				if ($type == 'post') {
					echo esc_html__('No related posts found', 'yoga-fit');
				} else {
					echo esc_html__('No related projects found', 'yoga-fit');
				}
				echo '</h5>';
			endif;
			
			wp_reset_postdata();
			
			echo '</div>';
		} 
		
		if ($popular_box) {
			echo '<div class="related_posts_content_tab"';
			
			if (!$related_box || empty($tgsarray) || !$r->have_posts()) {
				echo ' style="display:block;"';
			}
			
			echo '>';
			
			$popular = new WP_Query(array( 
				'posts_per_page' => $related_number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'order' => 'DESC', 
				'orderby' => 'meta_value', 
				'meta_key' => 'cmsms_likes', 
				'post__not_in' => array(get_the_ID()), 
				'post_type' => $type 
			));
			
			if ($popular->have_posts()) :
				$numb = 0;
				
				while ($popular->have_posts()) : $popular->the_post();
					$numb++;
					
					if ($numb % 2) {
						echo '<div class="one_half">';
					} else {
						echo '<div class="one_half last">';
					}
					
					echo '<div class="rel_post_content">';
					
					cmsms_thumb_small(get_the_ID(), $type);
					
					echo '<h5 class="rel_post_title">' . 
							'<a href="' . esc_url(get_permalink()) . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
						'</h5>' . 
					'</div>';
					
					if ($numb % 2) {
						echo '</div>';
					} else {
						echo '</div>' . 
						'<div class="cl"></div>';
					}
				endwhile;
			else :
				echo '<h5 class="rel_post_title">';
				if ($type == 'post') {
					echo esc_html__('No popular posts found', 'yoga-fit');
				} else {
					echo esc_html__('No popular projects found', 'yoga-fit');
				}
				echo '</h5>';
			endif;
			
			wp_reset_postdata();
			
			echo '</div>';
		}
		
		if ($recent_box) { 
			echo '<div class="related_posts_content_tab"';
			
			if ((!$related_box || empty($tgsarray) || !$r->have_posts()) && !$popular_box) {
				echo ' style="display:block;"';
			}
			
			echo '>';
			
			$recent = new WP_Query(array( 
				'posts_per_page' => $related_number, 
				'post_status' => 'publish', 
				'ignore_sticky_posts' => 1, 
				'post__not_in' => array(get_the_ID()), 
				'post_type' => $type 
			));
			
			if ($recent->have_posts()) :
				$numb = 0;
				
				while ($recent->have_posts()) : $recent->the_post();
					$numb++;
					
					if ($numb % 2) {
						echo '<div class="one_half">';
					} else {
						echo '<div class="one_half last">';
					}
					
					echo '<div class="rel_post_content">';
					
					cmsms_thumb_small(get_the_ID(), $type);
					
					echo '<h5 class="rel_post_title">' . 
							'<a href="' . esc_url(get_permalink()) . '" title="' . cmsms_title(get_the_ID(), false) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
						'</h5>' . 
					'</div>';
					
					if ($numb % 2) {
						echo '</div>';
					} else {
						echo '</div><div class="cl"></div>'; 
					}
				endwhile;
			else :
				echo '<h5 class="rel_post_title">';
				if ($type == 'post') {
					echo esc_html__('No latest posts found', 'yoga-fit');
				} else {
					echo esc_html__('No latest projects found', 'yoga-fit');
				}
				echo '</h5>';
			endif;
			
			wp_reset_postdata(); 
			
			echo '</div>';
		}
		
		echo '</div>' . 
		'</aside>';
	}
}



/* Get Posts Author Avatar Function */
function cmsms_author_avatar($template_type = 'page') {
	$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
	
	
	if ($template_type == 'page') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	} else if ($template_type == 'post') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	}
}

