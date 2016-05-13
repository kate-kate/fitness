<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Blog Page Default Standard Post Format Template
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


if (
	$author || 
	$categories || 
	$tags || 
	$likes || 
	$comments
) {
	$cmsms_post_cont_info = true;
} else {
	$cmsms_post_cont_info = false;
}
?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsms_default_type post'); ?>>
	<?php 
	echo '<div class="cmsms_post_info entry-meta yellow-bordered-info">';
	if ($date) {
		cmsms_post_date('page', 'default');
	}
	if (!post_password_required() && has_post_thumbnail()) {
		cmsms_thumb(get_the_ID(), 'post-thumbnail', true, false, true, false, true, true, false);
	}
	echo '</div>';
	?>
	<div class="cmsms_post_cont_wrap">
		<?php
			cmsms_post_heading(get_the_ID(), 'h2');
		?>
		<?php
			if ($cmsms_post_cont_info) {
				echo '<div class="cmsms_post_cont_info entry-meta">';
					
					$author ? cmsms_post_author('page') : '';
					
					$categories ? cmsms_post_category('page') : '';
					
					$tags ? cmsms_post_tags('page') : '';
					
					$comments ? cmsms_post_comments('page') : '';
					
					$likes ? cmsms_post_like('page') : '';
					
				echo '</div>';
			} 
		?>
		<div class="cmsms_post_cont<?php echo ($cmsms_post_cont_info ? '' : ' cmsms_no_cont_info'); ?>">
			<?php
				cmsms_post_exc_cont(); 
				
				if ($more) {
					echo '<footer class="cmsms_post_footer entry-meta">';
					
						$more ? cmsms_post_more(get_the_ID()) : '';
				
					echo '</footer>';
				}
			?>
		</div>
		<div class="cl"></div>
	</div>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

