<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Blog Post with Sidebar Gallery Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsms_option = cmsms_get_global_options();


$cmsms_post_title = get_post_meta(get_the_ID(), 'cmsms_post_title', true);

$cmsms_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsms_post_images', true))));

$uniqid = uniqid();

?>

<!--_________________________ Start Gallery Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
	if (!post_password_required()) {
		if (sizeof($cmsms_post_images) > 1) {
	?>
			<script type="text/javascript">
				jQuery(document).ready(function () {
					jQuery('.cmsms_slider_<?php echo esc_attr($uniqid); ?>').owlCarousel( { 
						singleItem : 		true, 
						transitionStyle : 	false, 
						rewindNav : 		true, 
						slideSpeed : 		200, 
						paginationSpeed : 	800, 
						rewindSpeed : 		1000, 
						autoPlay : 			false, 
						stopOnHover : 		false, 
						pagination : 		true, 
						navigation : 		false, 
						navigationText : 	[ 
							'<span></span>', 
							'<span></span>' 
						] 
					} );
				} );
			</script>
			<div id="cmsms_owl_carousel_<?php the_ID(); ?>" class="cmsms_slider_<?php echo esc_attr($uniqid); ?> cmsms_owl_slider">
			<?php 
				foreach ($cmsms_post_images as $cmsms_post_image) {
					echo '<div>' . 
						'<figure>' . 
							wp_get_attachment_image($cmsms_post_image, 'post-thumbnail', false, array( 
								'class' => 	'full-width', 
								'alt' => 	cmsms_title(get_the_ID(), false), 
								'title' => 	cmsms_title(get_the_ID(), false) 
							)) . 
						'</figure>' . 
					'</div>';
				}
			?>
			</div>
		<?php 
		} elseif (sizeof($cmsms_post_images) == 1 && $cmsms_post_images[0] != '') {
			cmsms_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, true, true, true, $cmsms_post_images[0]);
		} elseif (has_post_thumbnail()) {
			cmsms_thumb(get_the_ID(), 'post-thumbnail', false, 'img_' . get_the_ID(), true, true, true, true, false);
		}
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
<!--_________________________ Finish Gallery Article _________________________ -->

