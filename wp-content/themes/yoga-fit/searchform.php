<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Search Form Template
 * Created by CMSMasters
 * 
 */
?>

<div class="search_bar_wrap">
	<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
		<p>
			<input name="s" placeholder="<?php esc_attr_e('Type Keywords...', 'yoga-fit'); ?>" value="" type="text" />
			<button type="submit" class="cmsms_theme_icon_search"></button>
		</p>
	</form>
</div>

