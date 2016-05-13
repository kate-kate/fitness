<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.0
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


get_header();

$cmsms_option = cmsms_get_global_options();

?>

</div>

<!-- _________________________ Start Content _________________________ -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="error_inner">
				<section class="content_wrap fullwidth">
					<?php 
					echo '<h1 class="error_title">404</h1>' . 

					'<h2 class="error_subtitle">' . esc_html__("We're sorry, but the page you were looking for doesn't exist.", 'yoga-fit') . '</h2>';
					
					
					if ($cmsms_option[CMSMS_SHORTNAME . '_error_search']) { 
						get_search_form(); 
					}
					
					
					if ($cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_button'] && $cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_link'] != '') {
						echo '<div class="error_button_wrap"><a href="' . esc_url($cmsms_option[CMSMS_SHORTNAME . '_error_sitemap_link']) . '" class="button">' . esc_html__('Sitemap', 'yoga-fit') . '</a></div>';
					}
					?>
				</section>
			</div>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
<!-- _________________________ Finish Content _________________________ -->


<?php 
get_footer();

