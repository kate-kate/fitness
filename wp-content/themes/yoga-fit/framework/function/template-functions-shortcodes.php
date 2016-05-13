<?php 
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Template Functions for Shortcodes
 * Created by CMSMasters
 * 
 */


/**
 * Posts Slider Functions
 */

/* Get Posts Slider Heading Function */
function cmsms_slider_post_heading($cmsms_id, $type = 'post', $tag = 'h1', $show = true, $link_redirect = false, $link_url = false) { 
	if ($type == 'post') {
		$out = '<header class="cmsms_slider_post_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsms_slider_post_title entry-title">' . 
				'<a href="' . esc_url(get_permalink()) . '">' . cmsms_title($cmsms_id, false) . '</a>' . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	} elseif ($type == 'project') {
		$out = '<header class="cmsms_slider_project_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsms_slider_project_title entry-title">' . 
				'<a href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink())) . '">' . cmsms_title($cmsms_id, false) . '</a>' . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Slider Content/Excerpt Function */
function cmsms_slider_post_exc_cont($type = 'post', $show = true) {
	$out = '';
	
	$post_excerpt = wpautop(theme_excerpt(15, false));
	
	if ($post_excerpt != '') {
		if ($type == 'post') {
			$out = cmsms_divpdel('<div class="cmsms_slider_post_content entry-content">' . "\n" . 
				wpautop(theme_excerpt(15, false)) . 
			'</div>' . "\n");
		} elseif ($type == 'project') {
			$out = cmsms_divpdel('<div class="cmsms_slider_project_content entry-content">' . "\n" . 
				wpautop(theme_excerpt(15, false)) . 
			'</div>' . "\n");
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Slider Date Function */
function cmsms_slider_post_date($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = '<abbr class="published cmsms_slider_post_date" title="' . esc_attr(get_the_date()) . '">' . 
				esc_html(get_the_date()) . 
			'</abbr>' . 
		'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
			esc_html(get_the_modified_date()) . 
		'</abbr>';
	} elseif ($type == 'project') {
		$out = '<abbr class="published cmsms_slider_project_date cmsms_theme_icon_calendar" title="' . esc_attr(get_the_date()) . '">' . 
			esc_html(get_the_date()) . 
		'</abbr>' . 
		'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
			esc_html(get_the_modified_date()) . 
		'</abbr>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Slider Author Function */
function cmsms_slider_post_author($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = '<span class="cmsms_slider_post_user_name">' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'yoga-fit') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($type == 'project') {
		$out = '<span class="cmsms_slider_project_user_name">' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'yoga-fit') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Slider Category Function */
function cmsms_slider_post_category($type = 'post', $cmsms_id = false, $taxonomy = false, $show = true) {
	if (get_the_category() || get_the_terms($cmsms_id, $taxonomy)) {
		if ($type == 'post') {
			$out = '<span class="cmsms_slider_post_category">' . 
				get_the_category_list(', ') . 
			'</span>';
		} elseif ($type == 'project') {
			$out = '<span class="cmsms_slider_project_category">' . 
				get_the_term_list($cmsms_id, $taxonomy, '', ', ', '') . 
			'</span>';
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Slider Like Function */
function cmsms_slider_post_like($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = cmsmsLike(false);
	} elseif ($type == 'project') {
		$out = cmsmsLike(false);
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Slider Comments Function */
function cmsms_slider_post_comments($type = 'post', $show = true) {
	if (comments_open()) {
		if ($type == 'post') {
			$out = '<a class="cmsms_slider_post_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'yoga-fit') . ' ' . esc_attr(get_the_title()) . '">' . esc_html(get_comments_number()) . '</a>';
		} elseif ($type == 'project') {
			$out = '<a class="cmsms_slider_project_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'yoga-fit') . ' ' . esc_attr(get_the_title()) . '">' . esc_html(get_comments_number()) . '</a>';
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}

