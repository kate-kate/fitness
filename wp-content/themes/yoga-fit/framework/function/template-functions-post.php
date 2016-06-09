<?php 
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.0
 * 
 * Template Functions for Blog & Post
 * Created by CMSMasters
 * 
 */

 

/* Get Posts Heading Function */
function cmsms_post_heading($cmsms_id, $tag = 'h1', $show = true) { 
	$out = '<header class="cmsms_post_header entry-header">' . 
		'<' . esc_html($tag) . ' class="cmsms_post_title entry-title">' . 
			'<a href="' . esc_url(get_permalink()) . '">' . cmsms_title($cmsms_id, false) . '</a>' . 
		'</' . esc_html($tag) . '>' . 
	'</header>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Heading Without Link Function */
function cmsms_post_title_nolink($cmsms_id, $tag = 'h1', $show = true) { 
	$out = '<' . esc_html($tag) . ' class="cmsms_post_title entry-title">' . 
		cmsms_title($cmsms_id, false) . 
	'</' . esc_html($tag) . '>';
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Date Function */
function cmsms_post_date($template_type = 'page', $layout_type = 'default', $show = true) {
	if ($template_type == 'page') {
		if ($layout_type == 'default') {
			$out = '<abbr class="published cmsms_post_date" title="' . esc_attr(get_the_date()) . '">' . 
				'<span class="cmsms_day">' . esc_html(get_the_date('d')) . '</span>' . 
				'<span class="cmsms_month">' . esc_html(get_the_date('F')) . '</span>' . 
			'</abbr>';
			//'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
			//	esc_html(get_the_modified_date()) . 
			//'</abbr>';
		} elseif ($layout_type == 'masonry') {
			$out = '<abbr class="published cmsms_post_date" title="' . esc_attr(get_the_date()) . '">' . 
				esc_html(get_the_date()) . 
			'</abbr>' . 
			'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
				esc_html(get_the_modified_date()) . 
			'</abbr>';
		} elseif ($layout_type == 'timeline') {
			$out = '<abbr class="published cmsms_post_date" title="' . esc_attr(get_the_date()) . '">' . 
				'<span class="cmsms_day">' . esc_html(get_the_date('j')) . '</span>' . 
				'<span class="cmsms_month">' . esc_html(get_the_date('F')) . '</span>' . 
			'</abbr>' . 
			'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
				esc_html(get_the_modified_date()) . 
			'</abbr>';
		}
	} elseif ($template_type == 'post') {
		$cmsms_option = cmsms_get_global_options();
		
		$out = '';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_date']) {
			$out .= '<abbr class="published cmsms_post_date" title="' . esc_attr(get_the_date()) . '">' . 
				esc_html(get_the_date()) . 
			'</abbr>' . 
			'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
				esc_html(get_the_modified_date()) . 
			'</abbr>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Author Function */
function cmsms_post_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsms_post_user_name">' . 
			esc_html__('by', 'yoga-fit') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'yoga-fit') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsms_option = cmsms_get_global_options();
		$out = '';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_author']) {
			$out .= '<span class="cmsms_post_user_name">' . 
				esc_html__('by', 'yoga-fit') . ' ' . 
				'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'yoga-fit') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Category Function */
function cmsms_post_category($template_type = 'page', $show = true) {
	if (get_the_category()) {
		if ($template_type == 'page') {
			$out = '<span class="cmsms_post_category">' . 
				//esc_html__('in', 'yoga-fit') . ' ' . 
				get_the_category_list(', ') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsms_option = cmsms_get_global_options();
			$out = '';
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_cat']) {
				$out .= '<span class="cmsms_post_category">' . 
					//esc_html__('in', 'yoga-fit') . ' ' . 
					get_the_category_list(', ') . 
				'</span>';
			}
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Tags Function */
function cmsms_post_tags($template_type = 'page', $show = true) {
	if (get_the_tags()) {
		if ($template_type == 'page') {
			$out = '<span class="cmsms_post_tags">' . 
				get_the_tag_list(__('Tags', 'yoga-fit') . ' ', ', ', '') . 
			'</span>';
		} else if ($template_type == 'post') {
			$cmsms_option = cmsms_get_global_options();
			$out = '';
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_tag']) {
				$out .= '<span class="cmsms_post_tags">' . 
					get_the_tag_list(__('Tags', 'yoga-fit') . ' ', ', ', '') . 
				'</span>';
			}
		}
		
		
		if ($show) {
			echo $out;
		} else {
			return $out;
		}
	}
}



/* Get Posts Content/Excerpt Function */
function cmsms_post_exc_cont($show = true) {
	$out = '';
	
	$post_excerpt = wpautop(theme_excerpt(20, false));
	
	if ($post_excerpt != '') {
		$out = cmsms_divpdel('<div class="cmsms_post_content entry-content">' . "\n" . 
			wpautop(theme_excerpt(20, false)) . 
		'</div>' . "\n");
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Like Function */
function cmsms_post_like($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = cmsmsLike(false);
	} elseif ($template_type == 'post') {
		$cmsms_option = cmsms_get_global_options();
		$out = '';
		
		if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_like']) {
			$out = cmsmsLike(false);
		}
	}
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}



/* Get Posts Comments Function */
function cmsms_post_comments($template_type = 'page') {
	if (comments_open()) {
		if ($template_type == 'page') {
			echo '<a class="cmsms_post_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'yoga-fit') . ' ' . esc_attr(get_the_title()) . '">' . esc_html(get_comments_number()) . '</a>';
		} elseif ($template_type == 'post') {
			$cmsms_option = cmsms_get_global_options();
			
			if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_comment']) {
				echo '<a class="cmsms_post_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'yoga-fit') . ' ' . esc_attr(get_the_title()) . '">' . esc_html(get_comments_number()) . '</a>';
			}
		}
	}
}



/* Get Posts More Button/Link Function */
function cmsms_post_more($cmsms_id, $layout_type = 'default', $show = true) {
	$cmsms_post_read_more = get_post_meta($cmsms_id, 'cmsms_post_read_more', true);
	
	
	if ($cmsms_post_read_more == '') {
		$cmsms_post_read_more = esc_attr__('Read More', 'yoga-fit');
	}
	
	
	$out = '<a class="cmsms_post_read_more' . ($layout_type == 'default' ? ' button' : '') . '" href="' . esc_url(get_permalink($cmsms_id)) . '">' . esc_html($cmsms_post_read_more) . '</a>';
	//esc_html($cmsms_post_read_more)
	
	
	if ($show) {
		echo $out;
	} else {
		return $out;
	}
}

