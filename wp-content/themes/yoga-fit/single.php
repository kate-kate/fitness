<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Single Post Template
 * Created by CMSMasters
 * 
 */


get_header();

$cmsms_option = cmsms_get_global_options();


list($cmsms_layout) = cmsms_theme_page_layout_scheme();


$cmsms_post_sharing_box = get_post_meta(get_the_ID(), 'cmsms_post_sharing_box', true);
$cmsms_post_author_box = get_post_meta(get_the_ID(), 'cmsms_post_author_box', true);
$cmsms_post_more_posts = get_post_meta(get_the_ID(), 'cmsms_post_more_posts', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsms_layout == 'r_sidebar') {
	echo '<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry" role="main">' . "\n\t";
}


if (have_posts()) : the_post();
	echo '<div class="blog opened-article">' . "\n";

    echo '<div id="thumbnail">';
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			echo '<div class="date">';
				echo '<div class="day">';
					echo get_the_date('d');
				echo '</div>';
				echo '<div class="month">';
					echo get_the_date('F');
				echo '</div>';
			echo '</div>';
			echo '<figure>';
			  	the_post_thumbnail();
			echo '</figure>';
		}
	echo '</div>';
	
	if ($cmsms_layout == 'fullwidth') {
		if (get_post_format() != '') {
			get_template_part('framework/postType/blog/post/fullwidth/' . get_post_format());
		} else {
			get_template_part('framework/postType/blog/post/fullwidth/standard');
		}
	} else {
		if (get_post_format() != '') {
			get_template_part('framework/postType/blog/post/sidebar/' . get_post_format());
		} else {
			get_template_part('framework/postType/blog/post/sidebar/standard');   
		}
	}
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_blog_post_nav_box']) {
		cmsms_prev_next_posts();
	}

	
	
	if ($cmsms_post_sharing_box == 'true') {
		cmsms_sharing_box(esc_html__('Share this post?', 'yoga-fit'), 'h4');
	}
	
	
	if ($cmsms_post_author_box == 'true') {
		cmsms_author_box(esc_html__('About author', 'yoga-fit'), 'h4');
	}
	
	
	if (get_the_tags()) {
		$tgsarray = array();
		
		foreach (get_the_tags() as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = '';
	}
	
	
	if (is_array($cmsms_post_more_posts)) {
		cmsms_related( 
			'h4', 
			in_array('related', $cmsms_post_more_posts), 
			$tgsarray, 
			in_array('popular', $cmsms_post_more_posts), 
			in_array('recent', $cmsms_post_more_posts), 
			$cmsms_option[CMSMS_SHORTNAME . '_blog_post_r_p_l_number'], 
			'post' 
		);
	}
	
	
	comments_template(); 
	
	echo '</div>';
endif;

echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsms_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" role="complementary">' . "\n";
	
	get_sidebar();
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

