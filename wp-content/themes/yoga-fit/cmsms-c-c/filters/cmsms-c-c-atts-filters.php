<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.0
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */

/* // Sc Name Shortcode Attributes Filter
add_filter('sc_name_atts_filter', 'sc_name_atts');

function sc_name_atts() { // copy default atts from shortcodes.php in plugin folder, paste here and add custom atts
	return array( 
		'attr_name_1' => 				'attr_std_val_1', 
		'attr_name_2' => 				'attr_std_val_2', 
		'attr_name_3' => 				'attr_std_val_3', 
		...
		'custom_attr_name_1' => 		'custom_attr_val_1', 
		'custom_attr_name_2' => 		'custom_attr_val_2', 
		'custom_attr_name_3' => 		'custom_attr_val_3' 
	);
} */



/* Register Admin Panel JS Scripts */
function register_admin_js_scripts() {
	global $pagenow;
	
	$cmsms_option = cmsms_get_global_options();
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('composer-shortcodes-extend', get_template_directory_uri() . '/cmsms-c-c/js/cmsms-c-c-shortcodes-extend.js', array('cmsms_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			'choice_disable' => 					esc_attr__('Disable', 'yoga-fit'), 
			'title_custom_check' => 				esc_attr__('Custom Title Font', 'yoga-fit'), 
			'counter_title_family' => 				esc_attr__('Custom Title Font Family', 'yoga-fit'), 
			'counter_title_font_size' => 			esc_attr__('Custom Title Font Size', 'yoga-fit'), 
			'counter_title_font_weight' => 			esc_attr__('Custom Title Font Weight', 'yoga-fit'), 
			'counter_title_font_style' => 			esc_attr__('Custom Title Font Style', 'yoga-fit'), 
			'counter_title_color' => 				esc_attr__('Custom Title Color', 'yoga-fit'), 
			'counter_custom_check' => 				esc_attr__('Custom Counter Font', 'yoga-fit'), 
			'counter_family' => 					esc_attr__('Custom Counter Font Family', 'yoga-fit'), 
			'counter_font_size' => 					esc_attr__('Custom Counter Font Size', 'yoga-fit'), 
			'counter_font_weight' => 				esc_attr__('Custom Counter Font Weight', 'yoga-fit'), 
			'quotes_slider_full' => 				esc_attr__('Fullwidth Slider mode', 'yoga-fit'),
			'menu_title' => 						esc_attr__('Menu', 'yoga-fit'),
			'menu_item_title' => 					esc_attr__('Menu Offer', 'yoga-fit'),
			'menu_offers_title' => 					esc_attr__('Menu offers', 'yoga-fit'),
			'menu_offers_descr' => 					esc_attr__('Here you can add, edit, remove or sort menu offers', 'yoga-fit'),
			'menu_item_title_descr' => 				esc_attr__('Enter this menu offer title', 'yoga-fit'),
			'menu_item_price_title' => 				esc_attr__('Price', 'yoga-fit'),
			'menu_item_price_descr' => 				esc_attr__('Enter this menu offer price', 'yoga-fit'),
			'menu_item_currency_title' => 			esc_attr__('Currency', 'yoga-fit'),
			'menu_item_currency_descr' => 			esc_attr__('Enter this menu offer currency', 'yoga-fit'),
			'menu_item_features_title' => 			esc_attr__('Ingredients', 'yoga-fit'),
			'menu_item_features_descr' => 			esc_attr__('Add menu offer ingredients', 'yoga-fit'),
			'menu_item_best_offer_title' => 		esc_attr__('Best Offer', 'yoga-fit'),
			'menu_item_best_offer_descr' => 		esc_attr__('If checked, this menu offer will be highlighted', 'yoga-fit'),
			'menu_item_best_feature_title' => 		esc_attr__('Best Offer recommendation', 'yoga-fit'),
			'menu_item_best_feature_descr' => 		esc_attr__('Enter this menu offer recommendation', 'yoga-fit'),
			'menu_item_best_offer_bd_title' => 		esc_attr__('Best Offer Border Color', 'yoga-fit'),
			'menu_item_best_offer_bd_descr' => 		esc_attr__('Choose border color for this menu best offer', 'yoga-fit'),
			'heading_tablet_check' => 				esc_attr__('Font size for small tablet', 'yoga-fit'),
			'heading_tablet_font_size' => 			esc_attr__('Tablet font size', 'yoga-fit'),
			'heading_tablet_line_height' => 		esc_attr__('Tablet line height', 'yoga-fit'), 
			
			
			/* Timetable Default Colors */
			'box_bg_color' => 					$cmsms_option[CMSMS_SHORTNAME . '_default' . '_link'], 
			'box_hover_bg_color' => 			$cmsms_option[CMSMS_SHORTNAME . '_default' . '_second'], 
			'box_txt_color' => 					$cmsms_option[CMSMS_SHORTNAME . '_default' . '_border'], 
			'box_hover_txt_color' => 			$cmsms_option[CMSMS_SHORTNAME . '_default' . '_border'], 
			'box_hours_txt_color' => 			$cmsms_option[CMSMS_SHORTNAME . '_default' . '_border'], 
			'box_hours_hover_txt_color' => 		$cmsms_option[CMSMS_SHORTNAME . '_default' . '_border'], 
			'row1_bg_color' => 					$cmsms_option[CMSMS_SHORTNAME . '_default' . '_border'], 
			'row1_txt_color' => 				$cmsms_option[CMSMS_SHORTNAME . '_default' . '_color'], 
			'row2_bg_color' => 					$cmsms_option[CMSMS_SHORTNAME . '_default' . '_bg'], 
			'row2_txt_color' => 				$cmsms_option[CMSMS_SHORTNAME . '_default' . '_color'] 
		));
	}
}

add_action('admin_enqueue_scripts', 'register_admin_js_scripts');



/**
* Heading
*/
add_filter('cmsms_custom_heading_atts_filter', 'cmsms_custom_heading_atts');

function cmsms_custom_heading_atts() {
	return array( 
		'type' => 					'h1', 
		'font_family' => 			'', 
		'font_size' => 				'', 
		'line_height' => 			'', 
		'tablet_check' =>  			'', 
		'tablet_font_size' => 		'', 
		'tablet_line_height' => 	'', 
		'font_weight' => 			'400', 
		'font_style' => 			'normal', 
		'icon' => 					'', 
		'text_align' => 			'left', 
		'color' => 					'', 
		'bg_color' => 				'', 
		'link' => 					'', 
		'target' => 				'', 
		'margin_top' => 			'0', 
		'margin_bottom' => 			'0', 
		'border_radius' => 			'', 
		'divider' => 				'', 
		'divider_type' => 			'short', 
		'divider_height' => 		'1', 
		'divider_style' => 			'solid', 
		'divider_color' => 			'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}



/**
* Single Counter
*/
add_filter('cmsms_counter_atts_filter', 'cmsms_counter_atts');

function cmsms_counter_atts() {
	return array( 
		'subtitle' => 				'', 
		'title_custom_check' => 	'', 
		'title_font_family' => 		'', 
		'title_font_size' => 		'', 
		'title_font_weight' => 		'', 
		'title_font_style' => 		'', 
		'title_font_color' => 		'',
		'value' => 					'0', 
		'value_prefix' => 			'', 
		'value_suffix' => 			'', 
		'counter_custom_check' => 	'', 
		'counter_font_family' => 	'', 
		'counter_font_size' => 		'', 
		'counter_font_weight' => 	'', 
		'color' => 					'', 
		'icon_type' => 				'icon', 
		'icon' => 					'', 
		'image' => 					'', 
		'icon_color' => 			'', 
		'icon_bg_color' => 			'', 
		'icon_bd_color' => 			'', 
		'classes' => 				'' 
	);
}



/**
* Quotes
*/
add_filter('cmsms_quotes_atts_filter', 'cmsms_quotes_atts');

function cmsms_quotes_atts() {
	return array( 
		'mode' => 				'grid', 
		'columns' => 			'2', 
		'speed' => 				'10', 
		'speed_full' => 		'10', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}

