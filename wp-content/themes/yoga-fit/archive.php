<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.0
 * 
 * Blog Archives Page Template
 * Created by CMSMasters
 * 
 */


get_header();


list($cmsms_layout) = cmsms_theme_page_layout_scheme();


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsms_layout == 'r_sidebar') {
	echo '<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsms_layout == 'l_sidebar') {
	echo '<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry" role="main">' . "\n\t";
}


echo '<div class="blog">' . "\n";


if (!have_posts()) : 
	echo '<h2>' . esc_html__('No posts found', 'yoga-fit') . '</h2>';
else : 
	while (have_posts()) : the_post();
		if (get_post_type() == 'post') {
			if (get_post_format() != '') {
				get_template_part('framework/postType/blog/page/default/' . get_post_format());
			} else {
				get_template_part('framework/postType/blog/page/default/standard');
			}
		} else {
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('post cmsms_default_type'); ?>>
				<div class="cmsms_post_info entry-meta">
					<?php 
					echo '<abbr class="published cmsms_post_date" title="' . esc_attr(get_the_date()) . '">' . 
						'<span class="cmsms_day">' . get_the_date('j') . '</span>' . 
						'<span class="cmsms_month">' . get_the_date('F') . '</span>' . 
					'</abbr>'; 
					?>
				</div>
				<div class="cmsms_post_cont_wrap">
				<?php
					if (!post_password_required() && has_post_thumbnail()) {
						cmsms_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
					}
					
					
					echo '<header class="cmsms_post_header entry-header">' . 
						'<h2 class="cmsms_post_title entry-title">' . 
							'<a href="' . esc_url(get_permalink()) . '">' . cmsms_title(get_the_ID(), false) . '</a>' . 
						'</h2>' . 
					'</header>' . 
					'<div class="cmsms_post_cont_info entry-meta">' . 
						'<span class="cmsms_post_user_name">' . 
							esc_html__('by', 'yoga-fit') . ' ' . 
							'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" rel="author" title="' . esc_attr__('Posts by', 'yoga-fit') . ' ' . esc_attr(get_the_author_meta('display_name')) . '">' . esc_html(get_the_author_meta('display_name')) . '</a>' . 
						'</span>';
					
					
					if (get_post_type() == 'project' && get_the_terms(get_the_ID(), 'pj-categs')) {
						echo '<span class="cmsms_post_category">' . 
							esc_html__('in', 'yoga-fit') . ' ' . 
							get_the_term_list(get_the_ID(), 'pj-categs', '', ', ', '') . 
						'</span>';
					} elseif (get_post_type() == 'profile' && get_the_terms(get_the_ID(), 'pl-categs')) {
						echo '<span class="cmsms_post_category">' . 
							esc_html__('in', 'yoga-fit') . ' ' . 
							get_the_term_list(get_the_ID(), 'pl-categs', '', ', ', '') . 
						'</span>';
					}
					
					
					if (get_post_type() == 'project' && get_the_terms(get_the_ID(), 'pj-tags')) {
						echo '<span class="cmsms_post_tags">' . 
							esc_html__('tags', 'yoga-fit') . ' ' . 
							get_the_term_list(get_the_ID(), 'pj-tags', '', ', ', '') . 
						'</span>';
					}
					
					echo  (get_post_type() == 'project' ? cmsmsLike(false) : '') . 
						(comments_open() ? '<a class="cmsms_post_comments cmsms_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'yoga-fit') . ' ' . esc_attr(get_the_title()) . '">' . esc_html(get_comments_number()) . '</a>' : '') . 
					'</div>';
						
					echo  cmsms_divpdel('<div class="cmsms_post_content entry-content">' . "\n" . 
						wpautop(theme_excerpt(20, false)) . 
					'</div>' . "\n") . 
					'<footer class="cmsms_post_footer entry-meta">' . 
						'<a class="button cmsms_post_read_more" href="' . esc_url(get_permalink(get_the_ID())) . '">' . esc_html__('Read More', 'yoga-fit') . '</a>' . 
					'</footer>';
				?>
				</div>
			</article>
			<?php
		}
	endwhile;
	
	
	echo pagination();
endif;


echo '</div>' . "\n" . 
'</div>' . "\n" . 
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

