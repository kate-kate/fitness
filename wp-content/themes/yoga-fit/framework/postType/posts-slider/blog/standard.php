<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Posts Slider Standard Post Format Template
 * Created by CMSMasters
 * 
 */


global $cmsms_post_metadata;


$cmsms_metadata = explode(',', $cmsms_post_metadata);

$excerpt = in_array('excerpt', $cmsms_metadata) ? true : false;
$date = in_array('date', $cmsms_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsms_metadata))) ? true : false;
$author = in_array('author', $cmsms_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsms_metadata))) ? true : false;
$likes = in_array('likes', $cmsms_metadata) ? true : false;
$more = in_array('more', $cmsms_metadata) ? true : false;

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsms_slider_post_cont">
	<?php
		if (!post_password_required()) {
			cmsms_thumb_rollover(get_the_ID(), 'blog-masonry-thumb', false, true, true, false, false, false, false, false, true, false, false, $more);
		}
		
		
		cmsms_slider_post_heading(get_the_ID(), 'post', 'h4');
		
		
		if ($author || $categories) {
			echo '<div class="cmsms_slider_post_cont_info entry-meta">';
			
				$author ? cmsms_slider_post_author('post') : '';
				
				$categories ? cmsms_slider_post_category('post') : '';
				
			echo '</div>';
		}
		
		
		$excerpt ? cmsms_slider_post_exc_cont('post') : '';
		
		
		if ($likes || $comments || $date) {
			echo '<footer class="cmsms_slider_post_footer entry-meta">';
				
				$comments ? cmsms_slider_post_comments('post') : '';
				
				$likes ? cmsms_slider_post_like('post') : '';
				
				$date ? cmsms_slider_post_date('post') : '';
				
			echo '</footer>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

