<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Blog Page Default Image Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_metadata;


$cmsms_post_metadata = explode(',', $cmsms_metadata);

$date = (in_array('date', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$author = (in_array('author', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$likes = (in_array('likes', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$tags = (get_the_tags() && (in_array('tags', $cmsms_post_metadata) || is_home() || is_archive() || is_search())) ? true : false;
$more = (in_array('more', $cmsms_post_metadata) || is_home() || is_archive() || is_search()) ? true : false;


$cmsms_post_image_link = get_post_meta(get_the_ID(), 'cmsms_post_image_link', true);

?>

<!--_________________________ Start Image Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_default_type'); ?>>
	<?php 
	if ($date) {
		echo '<div class="cmsms_post_info entry-meta">';
			cmsms_post_date('page', 'default');
		echo '</div>';
	}
	?>
	<div class="cmsms_post_cont_wrap">
		<?php
			if (!post_password_required()) {
				if ($cmsms_post_image_link != '') {
					cmsms_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, true, true, true, $cmsms_post_image_link);
				} elseif (has_post_thumbnail()) {
					cmsms_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, true, true, true, false);
				}
			}
			
			cmsms_post_heading(get_the_ID(), 'h2');
		?>
		<div class="cmsms_post_cont">
			<?php
				cmsms_post_exc_cont(); 
				
				if ($more) {
					echo '<footer class="cmsms_post_footer entry-meta">';
					
						$more ? cmsms_post_more(get_the_ID()) : '';
				
					echo '</footer>';
				}
			?>
		</div>
		<?php
			if ($author || $categories || $tags || $likes || $comments) {
				echo '<div class="cmsms_post_cont_info entry-meta">';
					
					$author ? cmsms_post_author('page') : '';
					
					$categories ? cmsms_post_category('page') : '';
					
					$tags ? cmsms_post_tags('page') : '';
					
					$comments ? cmsms_post_comments('page') : '';
					
					$likes ? cmsms_post_like('page') : '';
					
				echo '</div>';
			} 
		?>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Image Article _________________________ -->

