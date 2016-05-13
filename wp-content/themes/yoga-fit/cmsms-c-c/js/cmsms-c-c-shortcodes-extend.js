/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Visual Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */
 

/* 
// For Change Fields in Shortcodes

var sc_name_new_fields = {};


for (var id in cmsmsShortcodes.sc_name.fields) {
	if (id === 'field_name') { // Delete Field
		delete cmsmsShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Delete Field Attribute
		delete cmsmsShortcodes.sc_name.fields[id]['field_attribute'];  
		
		
		sc_name_new_fields[id] = cmsmsShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Add/Change Field Attribute
		cmsmsShortcodes.sc_name.fields[id]['field_attribute'] = 'value';
		
		
		sc_name_new_fields[id] = cmsmsShortcodes.sc_name.fields[id];
	} else if (id === 'field_name') { // Add Field (after the field as found, add new field)
		sc_name_new_fields['field_name'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.sc_name_field_custom_bg_color, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half' 
		};
		
		
		sc_name_new_fields[id] = cmsmsShortcodes.sc_name.fields[id];
	} else { // Allways add this in the bottom
		sc_name_new_fields[id] = cmsmsShortcodes.sc_name.fields[id];
	}
}


cmsmsShortcodes.sc_name.fields = sc_name_new_fields; 
*/


/**
 * Heading Extend
 */

var heading_new_fields = {};


for (var id in cmsmsShortcodes.cmsms_heading.fields) {
	if (id === 'font_weight') {
		heading_new_fields['tablet_check'] = { 
			type : 		'checkbox', 
			title : 	composer_shortcodes_extend.heading_tablet_check, 
			descr : 	'', 
			def : 		'false', 
			required : 	false, 
			width : 	'half',  
			choises : { 
				'true' : cmsms_shortcodes.choice_enable 
			} 
		};
		heading_new_fields['tablet_font_size'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.heading_tablet_font_size, 
			descr : 	"<span>" + cmsms_shortcodes.note + ' ' + cmsms_shortcodes.size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'tablet_check:true' 
		};
		heading_new_fields['tablet_line_height'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.heading_tablet_line_height, 
			descr : 	"<span>" + cmsms_shortcodes.note + ' ' + cmsms_shortcodes.size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'tablet_check:true' 
		};
		
		heading_new_fields[id] = cmsmsShortcodes.cmsms_heading.fields[id];
	} else {
		heading_new_fields[id] = cmsmsShortcodes.cmsms_heading.fields[id];
	}
}


cmsmsShortcodes.cmsms_heading.fields = heading_new_fields;



/**
 * Posts Slider Extend
 */

var posts_slider_new_fields = {};


for (var id in cmsmsShortcodes.cmsms_posts_slider.fields) {
	if (id === 'amount') {
		delete cmsmsShortcodes.cmsms_posts_slider.fields[id];
	} else if (id === 'columns') {
		delete cmsmsShortcodes.cmsms_posts_slider.fields[id]['depend'];
		
		
		posts_slider_new_fields[id] = cmsmsShortcodes.cmsms_posts_slider.fields[id];
	} else if (id === 'portfolio_metadata') {
		cmsmsShortcodes.cmsms_posts_slider.fields[id]['def'] = 'title,categories,likes,more';
		
		cmsmsShortcodes.cmsms_posts_slider.fields[id]['choises']['more'] = cmsms_shortcodes.choice_more;
		
		posts_slider_new_fields[id] = cmsmsShortcodes.cmsms_posts_slider.fields[id];
	} else {
		posts_slider_new_fields[id] = cmsmsShortcodes.cmsms_posts_slider.fields[id];
	}
}


cmsmsShortcodes.cmsms_posts_slider.fields = posts_slider_new_fields;



/**
 * Quotes Extend
 */

var cmsms_quotes_new_fields = {};


for (var id in cmsmsShortcodes.cmsms_quotes.fields) {
	if (id === 'animation') {
		cmsms_quotes_new_fields['speed_full'] = { 
			type : 		'input', 
			title : 	cmsms_shortcodes.pause_time, 
			descr : 	cmsms_shortcodes.quotes_field_slideshow_speed_descr + " <br /><span>" + cmsms_shortcodes.note + ' ' + cmsms_shortcodes.quotes_field_slideshow_speed_descr_note + "</span>", 
			def : 		'5', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'mode:slider_full' 
		};
	}
	
	if (id === 'mode') {
		cmsmsShortcodes.cmsms_quotes.fields[id]['choises']['slider_full'] = composer_shortcodes_extend.quotes_slider_full;
		
		cmsms_quotes_new_fields[id] = cmsmsShortcodes.cmsms_quotes.fields[id];
	} else {
		cmsms_quotes_new_fields[id] = cmsmsShortcodes.cmsms_quotes.fields[id];
	}
}


cmsmsShortcodes.cmsms_quotes.fields = cmsms_quotes_new_fields;



/**
 * Counters Extend
 */

var cmsms_counters_new_fields = {};


for (var id in cmsmsShortcodes.cmsms_counters.fields) {
	if (id === 'count') {
		cmsmsShortcodes.cmsms_counters.fields[id]['def'] = '4';
		
		cmsms_counters_new_fields[id] = cmsmsShortcodes.cmsms_counters.fields[id];
	} else if (id === 'icon_size') {
		cmsmsShortcodes.cmsms_counters.fields[id]['def'] = '50';
		
		cmsms_counters_new_fields[id] = cmsmsShortcodes.cmsms_counters.fields[id];
	} else if (id === 'icon_space') {
		cmsmsShortcodes.cmsms_counters.fields[id]['def'] = '100';
		
		cmsms_counters_new_fields[id] = cmsmsShortcodes.cmsms_counters.fields[id];
	} else {
		cmsms_counters_new_fields[id] = cmsmsShortcodes.cmsms_counters.fields[id];
	}
}


cmsmsShortcodes.cmsms_counters.fields = cmsms_counters_new_fields;



/**
 * Counter Extend
 */

var counter_new_fields = {};


for (var id in cmsmsMultipleShortcodes.cmsms_counter.fields) {
	if (id === 'subtitle') {
		counter_new_fields['title_custom_check'] = { 
			type : 		'checkbox', 
			title : 	composer_shortcodes_extend.title_custom_check, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half',  
			choises : { 
				'true' : cmsms_shortcodes.choice_enable 
			} 
		};
		
		counter_new_fields['title_font_family'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.counter_title_family, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsms_composer_fonts(), 
			depend : 	'title_custom_check:true' 
		};
		
		counter_new_fields['title_font_size'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.counter_title_font_size, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'title_custom_check:true'  
		};
		
		counter_new_fields['title_font_weight'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.counter_title_font_weight, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsms_composer_font_weight(), 
			depend : 	'title_custom_check:true'  
		};
		
		counter_new_fields['title_font_style'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.counter_title_font_style, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsms_composer_font_style(), 
			depend : 	'title_custom_check:true' 
		};
		
		counter_new_fields['title_font_color'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.counter_title_color, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			depend : 	'title_custom_check:true' 
		}; 
		
		counter_new_fields[id] = cmsmsMultipleShortcodes.cmsms_counter.fields[id];
	} else if (id === 'color') {
		counter_new_fields['counter_custom_check'] = { 
			type : 		'checkbox', 
			title : 	composer_shortcodes_extend.counter_custom_check, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half',  
			choises : { 
				'true' : cmsms_shortcodes.choice_enable 
			} 
		};
		
		counter_new_fields['counter_font_family'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.counter_family, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsms_composer_fonts(), 
			depend : 	'counter_custom_check:true' 
		};
		
		counter_new_fields['counter_font_size'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.counter_font_size, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'counter_custom_check:true'  
		};
		
		counter_new_fields['counter_font_weight'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.counter_font_weight, 
			descr : 	'', 
			def : 		'normal', 
			required : 	false, 
			width : 	'half', 
			choises : 	cmsms_composer_font_weight(), 
			depend : 	'counter_custom_check:true'  
		};
		
		cmsmsMultipleShortcodes.cmsms_counter.fields[id]['depend'] = 'counter_custom_check:true';
		
		counter_new_fields[id] = cmsmsMultipleShortcodes.cmsms_counter.fields[id];
	} else {
		counter_new_fields[id] = cmsmsMultipleShortcodes.cmsms_counter.fields[id];
	}
}


cmsmsMultipleShortcodes.cmsms_counter.fields = counter_new_fields;



/**
 * Timetable Extend
 */

if (cmsms_composer_timetable() === 'true') {
	var timetable_new_fields = {};


	for (var id in cmsmsShortcodes.cmsms_timetable.fields) {
		if (id === 'box_bg_color') {
			cmsmsShortcodes.cmsms_timetable.fields[id]['def'] = composer_shortcodes_extend.box_bg_color;
			
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		} else if (id === 'box_hover_bg_color') {
			cmsmsShortcodes.cmsms_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hover_bg_color;
			
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		} else if (id === 'box_txt_color') {
			cmsmsShortcodes.cmsms_timetable.fields[id]['def'] = composer_shortcodes_extend.box_txt_color;
			
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		} else if (id === 'box_hover_txt_color') {
			cmsmsShortcodes.cmsms_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hover_txt_color;
			
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		} else if (id === 'box_hours_txt_color') {
			cmsmsShortcodes.cmsms_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hours_txt_color;
			
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		} else if (id === 'box_hours_hover_txt_color') {
			cmsmsShortcodes.cmsms_timetable.fields[id]['def'] = composer_shortcodes_extend.box_hours_hover_txt_color;
			
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		} else if (id === 'row1_bg_color') {
			cmsmsShortcodes.cmsms_timetable.fields[id]['def'] = composer_shortcodes_extend.row1_bg_color;
			
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		} else if (id === 'row1_txt_color') {
			cmsmsShortcodes.cmsms_timetable.fields[id]['def'] = composer_shortcodes_extend.row1_txt_color;
			
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		} else if (id === 'row2_bg_color') {
			cmsmsShortcodes.cmsms_timetable.fields[id]['def'] = composer_shortcodes_extend.row2_bg_color;
			
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		} else if (id === 'row2_txt_color') {
			cmsmsShortcodes.cmsms_timetable.fields[id]['def'] = composer_shortcodes_extend.row2_txt_color;
			
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		} else {
			timetable_new_fields[id] = cmsmsShortcodes.cmsms_timetable.fields[id];
		}
	}


	cmsmsShortcodes.cmsms_timetable.fields = timetable_new_fields;
}



/**
 * Theme Shortcodes
 */
 
var cmsmsShortcodes_new_shortcode = {};


for (var id in cmsmsShortcodes) {
	if (id === 'cmsms_notice') {
		/* Menu */
		cmsmsShortcodes_new_shortcode['cmsms_menu_items'] = { 
			title : 	composer_shortcodes_extend.menu_title, 
			icon : 		'admin-icon-menu', 
			pair : 		true, 
			content : 	'offers', 
			visual : 	false, 
			multiple : 	true, 
			def : 		'[cmsms_menu_item currency="$" price="99"]' + cmsms_shortcodes.title + '[/cmsms_menu_item]', 
			fields : { 
				// Offers
				offers : { 
					type : 		'multiple', 
					title : 	composer_shortcodes_extend.menu_offers_title, 
					descr : 	composer_shortcodes_extend.menu_offers_descr, 
					def : 		'[cmsms_menu_item currency="$" price="99"]' + cmsms_shortcodes.title + '[/cmsms_menu_item]', 
					required : 	true, 
					width : 	'half' 
				}, 
				// CSS3 Animation
				animation : { 
					type : 		'select', 
					title : 	cmsms_shortcodes.animation_title, 
					descr : 	cmsms_shortcodes.animation_descr + " <br /><span>" + cmsms_shortcodes.note + ' ' + cmsms_shortcodes.animation_descr_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : 	get_animations() 
				}, 
				// Animation Delay
				animation_delay : { 
					type : 		'input', 
					title : 	cmsms_shortcodes.animation_delay_title, 
					descr : 	cmsms_shortcodes.animation_delay_descr + " <br /><span>" + cmsms_shortcodes.note + ' ' + cmsms_shortcodes.animation_delay_descr_note + "</span>", 
					def : 		'0', 
					required : 	false, 
					width : 	'number', 
					min : 		'0', 
					step : 		'50' 
				}, 
				// Additional Classes
				classes : { 
					type : 		'input', 
					title : 	cmsms_shortcodes.classes_title, 
					descr : 	cmsms_shortcodes.classes_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half' 
				} 
			} 
		};
		
		
		cmsmsShortcodes_new_shortcode[id] = cmsmsShortcodes[id];
	} else {
		cmsmsShortcodes_new_shortcode[id] = cmsmsShortcodes[id];
	}
}


cmsmsShortcodes = cmsmsShortcodes_new_shortcode;



/**
 * Theme Multiple Shortcodes
 */

var cmsmsMultipleShortcodes_new_shortcode = {};


for (var id in cmsmsMultipleShortcodes) {
	if (id === 'cmsms_video') {
		/* Menu Item */
		cmsmsMultipleShortcodes_new_shortcode['cmsms_menu_item'] = { 
			title : 	composer_shortcodes_extend.menu_item_title, 
			pair : 		true, 
			content : 	'title', 
			visual : 	'<span class="cmsms_multiple_text">{{ data.title }} &nbsp; {{ data.currency }}{{ data.price }}</span>', 
			def : 		"", 
			fields : { 
				// Title
				title : { 
					type : 		'input', 
					title : 	cmsms_shortcodes.title, 
					descr : 	composer_shortcodes_extend.menu_item_title_descr, 
					def : 		'', 
					required : 	true, 
					width : 	'half' 
				}, 
				// Price
				price : { 
					type : 		'input', 
					title : 	composer_shortcodes_extend.menu_item_price_title, 
					descr : 	composer_shortcodes_extend.menu_item_price_descr, 
					def : 		'', 
					required : 	true, 
					width : 	'small' 
				}, 
				// Currency
				currency : { 
					type : 		'input', 
					title : 	composer_shortcodes_extend.menu_item_currency_title, 
					descr : 	composer_shortcodes_extend.menu_item_currency_descr, 
					def : 		'', 
					required : 	true, 
					width : 	'small' 
				},  
				// Features
				features : { 
					type : 		'link', 
					title : 	composer_shortcodes_extend.menu_item_features_title, 
					descr : 	composer_shortcodes_extend.menu_item_features_descr, 
					def : 		"", 
					required : 	false, 
					width : 	'full' 
				}, 
				// Best Offer
				best : { 
					type : 		'checkbox', 
					title : 	composer_shortcodes_extend.menu_item_best_offer_title, 
					descr : 	composer_shortcodes_extend.menu_item_best_offer_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : { 
								'true' : 	cmsms_shortcodes.choice_enable
					} 
				}, 
				// Best Offer Text
				best_feature : { 
					type : 		'input', 
					title : 	composer_shortcodes_extend.menu_item_best_feature_title, 
					descr : 	composer_shortcodes_extend.menu_item_best_feature_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'small', 
					depend : 	'best:true' 
				}, 
				// Best offer Border Color
				best_bd_color : { 
					type : 		'rgba', 
					title : 	composer_shortcodes_extend.menu_item_best_offer_bd_title, 
					descr : 	composer_shortcodes_extend.menu_item_best_offer_bd_descr + "<br /><span>" + cmsms_shortcodes.note + ' ' + cmsms_shortcodes.clear_color_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					depend : 	'best:true' 
				}, 
				// CSS3 Animation
				animation : { 
					type : 		'select', 
					title : 	cmsms_shortcodes.animation_title, 
					descr : 	cmsms_shortcodes.animation_descr + " <br /><span>" + cmsms_shortcodes.note + ' ' + cmsms_shortcodes.animation_descr_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : 	get_animations() 
				}, 
				// Animation Delay
				animation_delay : { 
					type : 		'input', 
					title : 	cmsms_shortcodes.animation_delay_title, 
					descr : 	cmsms_shortcodes.animation_delay_descr + " <br /><span>" + cmsms_shortcodes.note + ' ' + cmsms_shortcodes.animation_delay_descr_note + "</span>", 
					def : 		'0', 
					required : 	false, 
					width : 	'number', 
					min : 		'0', 
					step : 		'50' 
				}, 
				// Additional Classes
				classes : { 
					type : 		'input', 
					title : 	cmsms_shortcodes.classes_title, 
					descr : 	cmsms_shortcodes.classes_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half' 
				} 
			} 
		};
		
		
		cmsmsMultipleShortcodes_new_shortcode[id] = cmsmsMultipleShortcodes[id];
	} else {
		cmsmsMultipleShortcodes_new_shortcode[id] = cmsmsMultipleShortcodes[id];
	}
}


cmsmsMultipleShortcodes = cmsmsMultipleShortcodes_new_shortcode;

