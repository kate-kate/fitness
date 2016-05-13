<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Blog Post with Sidebar Audio Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


$cmsms_post_title = get_post_meta(get_the_ID(), 'cmsms_post_title', true);

$cmsms_post_audio_links = get_post_meta(get_the_ID(), 'cmsms_post_audio_links', true);

?>

<!--_________________________ Start Audio Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
	if (!post_password_required() && !empty($cmsms_post_audio_links) && sizeof($cmsms_post_audio_links) > 0) {
		$attrs = array(
			'preload' => 'none'
		);
		
		
		foreach ($cmsms_post_audio_links as $cmsms_post_audio_link_url) {
			$attrs[substr(strrchr($cmsms_post_audio_link_url, '.'), 1)] = $cmsms_post_audio_link_url;
		}
		
		
		echo '<div class="cmsms_audio">' . 
			wp_audio_shortcode($attrs) . 
		'</div>';
	}
	
	
	if ($cmsms_post_title == 'true') {
		echo '<header class="cmsms_post_header entry-header">';
			cmsms_post_title_nolink(get_the_ID(), 'h2');
		echo '</header>';
	}
	
	
	if (
		$cmsms_option[CMSMS_SHORTNAME . '_blog_post_date'] ||  
		$cmsms_option[CMSMS_SHORTNAME . '_blog_post_author'] || 
		$cmsms_option[CMSMS_SHORTNAME . '_blog_post_cat'] || 
		$cmsms_option[CMSMS_SHORTNAME . '_blog_post_tag']
	) {
		echo '<footer class="cmsms_post_footer entry-meta">';
			cmsms_post_date('post');
		
			cmsms_post_author('post');
			
			cmsms_post_category('post');
			
			cmsms_post_tags('post');
		echo '</footer>';
	}
	
	
	echo '<div class="cmsms_post_content entry-content">' . "\n";
		
		the_content();
		
		wp_link_pages(array( 
			'before' => '<div class="subpage_nav" role="navigation">' . '<strong>' . esc_html__('Pages', 'yoga-fit') . ':</strong>', 
			'after' => '</div>', 
			'link_before' => ' [ ', 
			'link_after' => ' ] ' 
		));
		
		echo '<div class="cl"></div>' . 
	'</div>';
	?>
</article>
<!--_________________________ Finish Audio Article _________________________ -->

