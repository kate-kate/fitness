<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Content Composer Theme Shortcodes
 * Created by CMSMasters
 * 
 */


$cmsms_add = 'add_';

$cmsms_add_shcd = $cmsms_add . 'shortcode';

/**
 * Menu
 */
function cmsms_menu_items($atts, $content = null) {
    $new_atts = apply_filters('cmsms_menu_items_atts_filter', array( 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
    ) );
	
	
	$shortcode_name = 'menu-items';
	
	$shortcode_path = CMSMS_CONTENT_COMPOSER_TEMPLATE_DIR . '/cmsms-' . $shortcode_name . '.php';
	
	
	if (locate_template($shortcode_path)) {
		$template_out = cmsms_composer_load_template($shortcode_path, array( 
			'atts' => 		$atts, 
			'new_atts' => 	$new_atts, 
			'content' => 	$content 
		) );
		
		
		return $template_out;
	}
	
	
	extract(shortcode_atts($new_atts, $atts));
	
	
	global $style_menu;
	
	
	$out = '';
	
	
	$menu_out = do_shortcode($content);
	
	
	$out .= (($style_menu != '') ? '<style type="text/css">' . "\n" . $style_menu . '</style> ' . "\n" : '') . 
	'<div class="cmsms_menu' . 
	(($classes != '') ? ' ' . $classes : '') . 
	'"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
		$menu_out . 
	'</div>' . "\n";
	
	
	return $out;
}

$cmsms_add_shcd('cmsms_menu_items', 'cmsms_menu_items');

/**
 * Menu Item
 */
function cmsms_menu_item($atts, $content = null) {
    $new_atts = apply_filters('cmsms_menu_item_atts_filter', array( 
		'price' => 					'100', 
		'currency' => 				'$', 
		'features' => 				'', 
		'best' => 					'', 
		'best_feature' => 			'', 
		'best_bd_color' => 			'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
    ) );
	
	
	$shortcode_name = 'menu-item';
	
	$shortcode_path = CMSMS_CONTENT_COMPOSER_TEMPLATE_DIR . '/cmsms-' . $shortcode_name . '.php';
	
	
	if (locate_template($shortcode_path)) {
		$template_out = cmsms_composer_load_template($shortcode_path, array( 
			'atts' => 		$atts, 
			'new_atts' => 	$new_atts, 
			'content' => 	$content 
		) );
		
		
		return $template_out;
	}
	
	
	extract(shortcode_atts($new_atts, $atts));
	
	
	$unique_id = uniqid();
	
	
	$feature_array = explode('||', $features);
	
	
	global $style_menu;
	
	
	if ($best == 'true') {
		if ($best_bd_color != '') {
			$style_menu .= '#cmsms_menu_item_' . $unique_id . ' { ' . 
				"\n\t" . cmsms_color_css('border-color', $best_bd_color) . 
			"\n" . '} ' . "\n";
		}
	}
	
	
	$menu_out = '<div id="cmsms_menu_item_' . $unique_id . '" class="cmsms_menu_item' . 
	(($best == 'true') ? ' menu_best' : '') . 
	(($classes != '') ? ' ' . $classes : '') . 
	'"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
		'<div class="cmsms_menu_item_inner">' . "\n" . 
			'<div class="menu_title_wrap">' . "\n" . 
				'<div class="cmsms_menu_price_wrap">' . "\n" . 
					'<span class="cmsms_menu_currency">' . $currency . '</span>' . "\n" . 
					'<span class="cmsms_menu_price">' . $price . '</span>' . "\n" . 
				'</div>' . "\n" . 
				'<h4 class="menu_title">' . $content . '</h4>' . "\n" . 
			'</div>' . "\n";
			
			
			if (!empty($feature_array) || $best_feature != '') {
				$menu_out .= '<div class="menu_feature_list_wrap">' . "\n";
				
				if ($best_feature != '') {
					$menu_out .= '<div class="cmsms_menu_best_feature">' . $best_feature . '</div>' . "\n";
				}
				
				
				if (!empty($feature_array)) {
					$menu_out .= '<ul class="menu_feature_list">' . "\n";
				}
				
				
				foreach ($feature_array as $feature) { 
					$feature_atts = explode('|', $feature);
					
					
					$feature_atts = preg_replace('/^title\{([^\}]*)\}/','$1', $feature_atts);
					
					$feature_atts = preg_replace('/^link\{([^\}]*)\}/','$1', $feature_atts);
					
					$feature_atts = preg_replace('/^icon\{([^\}]*)\}/','$1', $feature_atts);
					 
					$menu_out .= '<li>' . 
					((isset($feature_atts[2]) && $feature_atts[2] != '') ? '<span class="feature_icon ' . $feature_atts[2] . '">' : '') . 
					((isset($feature_atts[1]) && $feature_atts[1] != '') ? '<a href="' . esc_url($feature_atts[1]) . '" class="feature_link">' : '') . 
					$feature_atts[0] . 
					((isset($feature_atts[1]) && $feature_atts[1] != '') ? '</a>' : '') . 
					((isset($feature_atts[2]) && $feature_atts[2] != '') ? '</span>' : '') . 
					'</li>' . "\n";
				}
				
				
				if (!empty($feature_array)) { 
					$menu_out .= '</ul>' . "\n";
				}
				
				$menu_out .= '</div>' . "\n";
			}
		
		$menu_out .= '</div>' . "\n" . 
	'</div>' . "\n";
	
	
	return $menu_out;
}

$cmsms_add_shcd('cmsms_menu_item', 'cmsms_menu_item');

