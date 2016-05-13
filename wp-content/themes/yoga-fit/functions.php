<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


// Current Theme Constants
if (!defined('CMSMS_SHORTNAME')) {
	define('CMSMS_SHORTNAME', 'yoga-fit');
}

if (!defined('CMSMS_FULLNAME')) {
	define('CMSMS_FULLNAME', 'Yoga Fit');
}



/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
function cmsms_system_fonts_list() {
	$fonts = array( 
		"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
		"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
		"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
		"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
		"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
		"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
		"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
		"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
		"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
		"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
	);
	
	
	return $fonts;
}



// Theme Settings Google Fonts List
function cmsms_google_fonts_list() {
	$fonts = array( 
		'' => __('None', 'yoga-fit'), 
		'Poiret+One:400' => 'Poiret One', 
		'Catamaran:100,200,300,400,700' => 'Catamaran', 
		'Josefin+Sans:300,400,700,300italic,400italic,700italic' => 'Josefin Sans', 
		'Lato:300,400,700,300italic,400italic,700italic' => 'Lato', 
		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic' => 'Roboto', 
		'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
		'Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic' => 'Open Sans', 
		'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
		'Droid+Sans:400,700' => 'Droid Sans', 
		'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
		'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
		'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
		'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
		'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
		'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
		'Ubuntu+Condensed' => 'Ubuntu Condensed', 
		'Headland+One' => 'Headland One', 
		'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
		'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
		'Oswald:300,400,700' => 'Oswald', 
		'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
		'Lobster' => 'Lobster', 
		'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
		'Questrial' => 'Questrial', 
		'Raleway:300,400,500,600,700' => 'Raleway', 
		'Dosis:300,400,500,700' => 'Dosis', 
		'Cutive+Mono' => 'Cutive Mono', 
		'Quicksand:300,400,700' => 'Quicksand', 
		'Tangerine:400,700' => 'Tangerine', 
		'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
		'Montserrat:400,700' => 'Montserrat', 
		'Cookie' => 'Cookie', 
	);
	
	
	return $fonts;
}



// Theme Settings Font Weights List
function cmsms_font_weight_list() {
	$list = array( 
		'normal' => 	'normal', 
		'100' => 		'100', 
		'200' => 		'200', 
		'300' => 		'300', 
		'400' => 		'400', 
		'500' => 		'500', 
		'600' => 		'600', 
		'700' => 		'700', 
		'800' => 		'800', 
		'900' => 		'900', 
		'bold' => 		'bold', 
		'bolder' => 	'bolder', 
		'lighter' => 	'lighter', 
	);
	
	
	return $list;
}



// Theme Settings Font Styles List
function cmsms_font_style_list() {
	$list = array( 
		'normal' => 	'normal', 
		'italic' => 	'italic', 
		'oblique' => 	'oblique', 
		'inherit' => 	'inherit', 
	);
	
	
	return $list;
}



// Theme Settings Text Transforms List
function cmsms_text_transform_list() {
	$list = array( 
		'none' => 'none', 
		'uppercase' => 'uppercase', 
		'lowercase' => 'lowercase', 
		'capitalize' => 'capitalize', 
	);
	
	
	return $list;
}



// Theme Settings Text Decorations List
function cmsms_text_decoration_list() {
	$list = array( 
		'none' => 'none', 
		'underline' => 'underline', 
		'overline' => 'overline', 
		'line-through' => 'line-through', 
	);
	
	
	return $list;
}



// Theme Settings Custom Color Schemes
function cmsms_custom_color_schemes_list() {
	$list = array( 
		'first' => __('Custom 1', 'yoga-fit'), 
		'second' => __('Custom 2', 'yoga-fit'), 
		'third' => __('Custom 3', 'yoga-fit'), 
		'fourth' => __('Custom 4', 'yoga-fit'), 
		'fifth' => __('Custom 5', 'yoga-fit')
	);
	
	
	return $list;
}



// WP Color Picker Palettes
if (!function_exists('cmsms_color_picker_palettes')) {
	function cmsms_color_picker_palettes() {
		$palettes = array( 
			'#000000', 
			'#ffffff', 
			'#d43c18', 
			'#5173a6', 
			'#959595', 
			'#c0c0c0', 
			'#f4f4f4', 
			'#e1e1e1' 
		);
		
		
		return $palettes;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/



// Theme Plugin Support Constants
if (!defined('CMSMS_WOOCOMMERCE') && class_exists('woocommerce')) {
	define('CMSMS_WOOCOMMERCE', true);
} elseif (!defined('CMSMS_WOOCOMMERCE')) {
	define('CMSMS_WOOCOMMERCE', false);
}

if (!defined('CMSMS_EVENTS_CALENDAR') && class_exists('Tribe__Events__Main')) {
	define('CMSMS_EVENTS_CALENDAR', true);
} elseif (!defined('CMSMS_EVENTS_CALENDAR')) {
	define('CMSMS_EVENTS_CALENDAR', false);
}

if (!defined('CMSMS_PAYPALDONATIONS') && class_exists('PayPalDonations')) {
	define('CMSMS_PAYPALDONATIONS', true);
} elseif (!defined('CMSMS_PAYPALDONATIONS')) {
	define('CMSMS_PAYPALDONATIONS', false);
}

if (!defined('CMSMS_DONATIONS') && class_exists('Cmsms_Donations')) {
	define('CMSMS_DONATIONS', false);
} elseif (!defined('CMSMS_DONATIONS')) {
	define('CMSMS_DONATIONS', false);
}

if (!defined('CMSMS_TIMETABLE') && function_exists('timetable_events_init')) {
	define('CMSMS_TIMETABLE', true);
} elseif (!defined('CMSMS_TIMETABLE')) {
	define('CMSMS_TIMETABLE', false);
}



// Theme Image Thumbnails Size
function cmsms_image_thumbnail_list() {
	$list = array( 
		'small-thumb' => array( 
			'width' => 		55, 
			'height' => 	55, 
			'crop' => 		true 
		), 
		'square-thumb' => array( 
			'width' => 		250, 
			'height' => 	250, 
			'crop' => 		true, 
			'title' => 		__('Square', 'yoga-fit') 
		), 
		'blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	355, 
			'crop' => 		true, 
			'title' => 		__('Masonry Blog', 'yoga-fit') 
		), 
		'project-thumb' => array( 
			'width' => 		580, 
			'height' => 	400, 
			'crop' => 		true, 
			'title' => 		__('Project', 'yoga-fit') 
		), 
		'project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		__('Masonry Project', 'yoga-fit') 
		), 
		'post-thumbnail' => array( 
			'width' => 		820, 
			'height' => 	466, 
			'crop' => 		true, 
			'title' => 		__('Featured', 'yoga-fit') 
		), 
		'masonry-thumb' => array( 
			'width' => 		820, 
			'height' => 	9999, 
			'title' => 		__('Masonry', 'yoga-fit') 
		), 
		'full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	655, 
			'crop' => 		true, 
			'title' => 		__('Full', 'yoga-fit') 
		), 
		'project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	800, 
			'crop' => 		true, 
			'title' => 		__('Project Full', 'yoga-fit') 
		), 
		'full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		__('Masonry Full', 'yoga-fit') 
		) 
	);
	
	
	return $list;
}



// Theme Settings All Color Schemes List
function cmsms_all_color_schemes_list() {
	$list = array( 
		'default' => 		__('Default', 'yoga-fit'), 
		'header' => 		__('Header', 'yoga-fit'), 
		'header_top' => 	__('Header Top', 'yoga-fit'), 
		'header_bottom' => 	__('Header Bottom', 'yoga-fit'), 
		'footer' => 		__('Footer', 'yoga-fit') 
	);
	
	
	$out = array_merge($list, cmsms_custom_color_schemes_list());
	
	
	return $out;
}



// Theme Settings Color Schemes List
function cmsms_color_schemes_list() {
	$list = cmsms_all_color_schemes_list();
	
	
	unset($list['header']);
	
	unset($list['header_top']);
	
	unset($list['header_bottom']);
	
	
	$out = array_merge($list, cmsms_custom_color_schemes_list());
	
	
	return $out;
}



// Theme Settings Color Schemes Default Colors
function cmsms_color_schemes_defaults() {
	$list = array( 
		'default' => array( // content default color scheme
			'color' => 		'#878a9a', 
			'link' => 		'#cd7399', 
			'hover' => 		'#b1b1b8', 
			'second' => 	'#6592d7', 
			'heading' => 	'#3a4259', 
			'bg' => 		'#ebecf2', 
			'alternate' => 	'#b3b1b7', 
			'border' => 	'#ffffff' 
		), 
		'header' => array( // Header color scheme
			'color' => 				'#ffffff', 
			'link' => 				'#ffffff', 
			'hover' => 				'rgba(255,255,255,0.6)', 
			'subtitle' => 			'rgba(255,255,255,0.5)', 
			'bg' => 				'rgba(84,82,102,0)',  
			'border' => 			'rgba(255,255,255,0)',  
			'dropdown_link' => 		'#858291', 
			'dropdown_hover' => 	'#ffffff', 
			'dropdown_subtitle' => 	'#5a5865', 
			'dropdown_bg' => 		'rgba(43,39,55,0.95)',
			'dropdown_border' => 	'rgba(255,255,255,0)',
			'scrolled_link' => 		'#ffffff', 
			'scrolled_hover' => 	'rgba(255,255,255,0.6)', 
			'scrolled_subtitle' => 	'rgba(255,255,255,0.5)', 
			'scrolled_bg' => 		'rgba(78,75,102,0.6)' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 				'#8c8389', 
			'link' => 				'#8c8389', 
			'hover' => 				'#ffffff', 
			'bg' => 				'#232022', 
			'border' => 			'#656364',  
			'dropdown_link' => 		'#858291', 
			'dropdown_hover' => 	'#ffffff', 
			'dropdown_bg' => 		'#333040',
			'dropdown_border' => 	'rgba(255,255,255,0.08)' 
		), 
		'header_bottom' => array( // Header Bottom color scheme
			'color' => 				'#ffffff', 
			'link' => 				'#ffffff', 
			'hover' => 				'rgba(255,255,255,0.6)', 
			'subtitle' => 			'rgba(255,255,255,0.5)', 
			'bg' => 				'rgba(84,82,102,0.4)', 
			'border' => 			'rgba(255,255,255,0)', 
			'dropdown_link' => 		'#858291', 
			'dropdown_hover' => 	'#ffffff', 
			'dropdown_subtitle' => 	'#5a5865', 
			'dropdown_bg' => 		'rgba(43,39,55,0.95)',
			'dropdown_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'rgba(255,255,255,0.2)',
			'link' => 		'rgba(255,255,255,0.6)', 
			'hover' => 		'#eebb73', 
			'second' => 	'#6592d7', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#3e3039', 
			'alternate' => 	'#30282d', 
			'border' => 	'rgba(255,255,255,0)' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#ffffff', 
			'link' => 		'rgba(255,255,255,0.5)', 
			'hover' => 		'#ffffff', 
			'second' => 	'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#ffffff' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#878a9a', 
			'link' => 		'#cd7399', 
			'hover' => 		'#b1b1b8', 
			'second' => 	'#6592d7', 
			'heading' => 	'#3a4259', 
			'bg' => 		'#ebecf2', 
			'alternate' => 	'rgba(255,255,255,0.3)', 
			'border' => 	'#ffffff' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#8d8e94', 
			'link' => 		'#cd7399', 
			'hover' => 		'#b1b1b8', 
			'second' => 	'#6592d7', 
			'heading' => 	'#30282d', 
			'bg' => 		'#ebecf2', 
			'alternate' => 	'#b3b1b7', 
			'border' => 	'#ffffff' 
		), 
		'fourth' => array( // custom color scheme 4
			'color' => 		'#ffffff', 
			'link' => 		'#ffffff', 
			'hover' => 		'#b1b1b8', 
			'second' => 	'#6592d7', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'rgba(255,255,255,0.1)', 
			'border' => 	'rgba(255,255,255,0.5)' 
		), 
		'fifth' => array( // custom color scheme 5
			'color' => 		'#ffffff', 
			'link' => 		'#ffffff', 
			'hover' => 		'#b1b1b8', 
			'second' => 	'#6592d7', 
			'heading' => 	'#ffffff', 
			'bg' => 		'rgba(255,255,255,0)', 
			'alternate' => 	'rgba(255,255,255,0.3)', 
			'border' => 	'#ffffff' 
		) 
	);
	
	
	return $list;
}



// CMSMasters Framework Directories Constants
define('CMSMS_FRAMEWORK', get_template_directory() . '/framework');
define('CMSMS_ADMIN', CMSMS_FRAMEWORK . '/admin');
define('CMSMS_SETTINGS', CMSMS_ADMIN . '/settings');
define('CMSMS_OPTIONS', CMSMS_ADMIN . '/options');
define('CMSMS_ADMIN_INC', CMSMS_ADMIN . '/inc');
define('CMSMS_CLASS', CMSMS_FRAMEWORK . '/class');
define('CMSMS_FUNCTION', CMSMS_FRAMEWORK . '/function');


define('CMSMS_COMPOSER', get_template_directory() . '/cmsms-c-c');



// Load Framework Parts
require_once(CMSMS_SETTINGS . '/cmsms-theme-settings.php');

require_once(CMSMS_OPTIONS . '/cmsms-theme-options.php');

require_once(CMSMS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMS_ADMIN_INC . '/plugin-activator.php');

require_once(CMSMS_CLASS . '/likes-posttype.php');

require_once(CMSMS_CLASS . '/twitteroauth.php');

require_once(CMSMS_CLASS . '/widgets.php');

require_once(CMSMS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMS_FUNCTION . '/likes.php');

require_once(CMSMS_FUNCTION . '/pagination.php');

require_once(CMSMS_FUNCTION . '/single-comment.php');

require_once(CMSMS_FUNCTION . '/theme-functions.php');

require_once(CMSMS_FUNCTION . '/theme-fonts.php');

require_once(CMSMS_FUNCTION . '/theme-colors-primary.php');

require_once(CMSMS_FUNCTION . '/theme-colors-secondary.php');

require_once(CMSMS_FUNCTION . '/template-functions.php');

require_once(CMSMS_FUNCTION . '/template-functions-post.php');

require_once(CMSMS_FUNCTION . '/template-functions-project.php');

require_once(CMSMS_FUNCTION . '/template-functions-profile.php');

require_once(CMSMS_FUNCTION . '/template-functions-shortcodes.php');

require_once(CMSMS_FUNCTION . '/template-functions-widgets.php');



if (class_exists('Cmsms_Content_Composer')) {
	require_once(CMSMS_COMPOSER . '/filters/cmsms-c-c-atts-filters.php');
	
	require_once(CMSMS_COMPOSER . '/shortcodes/theme-shortcodes.php');
}



// Woocommerce functions
if (CMSMS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsms-woo-functions.php');
}



//include the WPML installer in the theme
include get_template_directory() . '/installer/loader.php';

WP_Installer_Setup($wp_installer_instance,  
    array(
        'plugins_install_tab' => 1,   // optional, default value: 1
        'affiliate_id' => '46196',   // optional, default value: empty
        'affiliate_key' => 'N9YfTTsunQtc',   // optional, default value: empty
        'src_name' => 'Yoga Fit',   // optional, default value: empty, needed for coupons
        'src_author' => 'Cmsmasters',// optional, default value: empty, needed for coupons
        'repositories_include' => array('wpml') // optional, default to empty (show all)
    )
); 



// Events functions
if (CMSMS_EVENTS_CALENDAR) {
	require_once(get_template_directory() . '/tribe-events/cmsms-events-functions.php');
}



// Load Theme Local File
function cmsms_load_theme_textdomain(){
    load_theme_textdomain('yoga-fit', CMSMS_FRAMEWORK . '/languages');
}

add_action('after_setup_theme', 'cmsms_load_theme_textdomain');



// Framework Activation & Data Import on theme activation
function cmsms_theme_activation() {
	if (get_option('cmsms_active_theme') != CMSMS_SHORTNAME) {
		add_option('cmsms_active_theme', CMSMS_SHORTNAME, '', 'yes');
		
		
		cmsms_add_global_options();
		
		cmsms_regenerate_styles();
		
		cmsms_add_global_icons();
		
		flush_rewrite_rules();
		
		
		wp_redirect(esc_url(admin_url('admin.php?page=cmsms-settings&upgraded=true')));
	}
}

add_action('after_switch_theme', 'cmsms_theme_activation');



// Framework Activation & Data Import on live preview
function cmsms_theme_live_preview() {
	cmsms_add_global_options();
	
	cmsms_regenerate_styles();
	
	cmsms_add_global_icons();
}

add_action('customize_controls_enqueue_scripts', 'cmsms_theme_live_preview');



// Framework Deactivation
function cmsms_theme_deactivation() {
	delete_option('cmsms_active_theme');
}

add_action('switch_theme', 'cmsms_theme_deactivation');

