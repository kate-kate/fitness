<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.3
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function cmsms_theme_colors_secondary() {
	$cmsms_option = cmsms_get_global_options();
	
	
	$cmsms_color_schemes = cmsms_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.3
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsms_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsms_color_scheme_{$scheme} " : '');
		
		
		if (CMSMS_WOOCOMMERCE) {
			$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Finish Stars Font Color */
	
	/* Start Main Content Font Color */
	{$rule}.product-categories .current-cat a, 
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.buttons_added, 
	{$rule}.buttons_added .text, 
	{$rule}.shop_table td.product-price, 
	{$rule}.shop_table td.product-price *, 
	{$rule}.checkout #order_review .shop_table tr.cart_item th, 
	{$rule}.checkout #order_review .shop_table tr.cart_item td, 
	{$rule}.shop_table.order_details tr.order_item th, 
	{$rule}.shop_table.order_details tr.order_item td, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_info .price {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .remove:hover,
	{$rule}.product_list_widget .remove:hover,
	{$rule}.comment-form-rating .stars > span a:hover, 
	{$rule}.comment-form-rating .stars > span a.active, 
	{$rule}.cmsms_star_rating .cmsms_star_color_wrap,
	{$rule}#shipping_method input[type=\"checkbox\"] + label:after, 
	{$rule}#ship-to-different-address input[type=\"checkbox\"] + label:after, 
	{$rule}.payment_methods input[type=\"checkbox\"] + label:after, 
	{$rule}.cmsms_single_product .cmsms_product_right_column .cart .single_add_to_cart_button:hover,
	{$rule}.woocommerce-error .button:hover, 
	{$rule}.woocommerce-message .button:hover, 
	{$rule}.woocommerce-info .button:hover,
	{$rule}.shop_table td.actions .button:hover,
	{$rule}.button.checkout-button:hover,
	{$rule}.cmsms_single_product .cmsms_product_right_column .price, 
	{$rule}.shop_table td.product-remove .remove:hover, 
	{$rule}.shop_table td.product-name a:hover, 
	{$rule}.shop_table td.product-subtotal, 
	{$rule}.shop_table td.product-subtotal *, 
	{$rule}.cart_totals table .amount, 
	{$rule}.checkout .required, 
	{$rule}.checkout #order_review .shop_table tr.order-total th, 
	{$rule}.checkout #order_review .shop_table tr.order-total td, 
	{$rule}.checkout #order_review .shop_table tr.order-total th *, 
	{$rule}.checkout #order_review .shop_table tr.order-total td *, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}.shop_table.order_details tfoot tr:last-child th *, 
	{$rule}.shop_table.order_details tfoot tr:last-child td *, 
	{$rule}.product_list_widget li > a:hover, 
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .total .amount, 
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content .total .amount, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_info .price ins {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_dynamic_cart_button:hover,
	{$rule}.cmsms_dynamic_cart:hover .cmsms_dynamic_cart_button,
	{$rule}.shop_table td.actions .button,
	{$rule}.button.checkout-button,
	{$rule}.woocommerce-error, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-info, 
	{$rule}.cmsms_single_product .cmsms_product_right_column .cart .single_add_to_cart_button,
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-range,
	{$rule}.onsale, 
	{$rule}.cmsms_single_product .cmsms_product_right_column .cart .single_add_to_cart_button, 
	{$rule}.shop_table td.actions .button.checkout-button, 
	{$rule}.shipping_calculator .shipping-calculator-form .button, 
	{$rule}#shipping_method input[type=\"radio\"] + label:after, 
	{$rule}#ship-to-different-address input[type=\"radio\"] + label:after, 
	{$rule}.payment_methods input[type=\"radio\"] + label:after {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsms_dynamic_cart_button:hover, 
	{$rule}.cmsms_dynamic_cart:hover .cmsms_dynamic_cart_button,
	{$rule}.cmsms_single_product .cmsms_product_right_column .cart .single_add_to_cart_button,
	{$rule}.shop_table td.product-remove .remove:hover, 
	{$rule}.shop_table td.actions .button, 
	{$rule}.button.checkout-button{
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.comment-form-rating .stars > span, 
	{$rule}.cmsms_single_product .cmsms_product_right_column .price del, 
	{$rule}.product_list_widget li del .amount {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	 
	{$rule}.out-of-stock {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Secondary Color */
	{$rule}.cmsms_products .product .product_inner .cmsms_product_img_wrap .cmsms_product_footer .added_to_cart:hover, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_img_wrap .cmsms_product_footer .cmsms_add_to_cart_button:hover, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_img_wrap .cmsms_product_footer .cmsms_add_to_cart_button.loading:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
	}
	
	{$rule}.cmsms_products .product .cmsms_product_img_wrap:hover .product_hover {
		background-color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . ", 0.9);
	}
	/* Finish Secondary Color */
	
	
	/* Start Headings Color */
	{$rule}.product_list_widget li > a, 
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li > a,
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .remove,
	{$rule}.product_list_widget li .remove,
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content .total,
	{$rule}.cmsms_added_product_info_text,
	{$rule}.shop_table th,
	{$rule}.woocommerce-error a:hover, 
	{$rule}.woocommerce-message a:hover, 
	{$rule}.woocommerce-info a:hover, 
	{$rule}.cmsms_single_product .cmsms_woo_tabs .shop_attributes th, 
	{$rule}.shop_table td.product-name, 
	{$rule}.shop_table td.product-name *, 
	{$rule}.cart_totals table tr.cart-subtotal th, 
	{$rule}.cart_totals table tr.order-total th, 
	{$rule}.shipping_calculator > h2 a, 
	{$rule}.shipping_calculator > h2 a:hover, 
	{$rule}.checkout #order_review .shop_table th, 
	{$rule}.checkout #order_review .shop_table td, 
	{$rule}.shop_table.order_details th, 
	{$rule}.shop_table.order_details td, 
	{$rule}ul.order_details li > span, 
	{$rule}.widget_shopping_cart .widget_shopping_cart_content .total {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider .ui-slider-handle {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list li .remove,
	{$rule}.product_list_widget li .remove,
	{$rule}.cmsms_woo_wrap_result select, 
	{$rule}.cmsms_woo_wrap_result select option, 
	{$rule}.cmsms_products .product .product_inner, 
	{$rule}.buttons_added, 
	{$rule}.shop_table, 
	{$rule}.shop_table td.actions .coupon .input-text, 
	{$rule}.cart_totals table, 
	{$rule}#shipping_method input[type=\"checkbox\"] + label:before, 
	{$rule}#ship-to-different-address input[type=\"checkbox\"] + label:before, 
	{$rule}.payment_methods input[type=\"checkbox\"] + label:before, 
	{$rule}#shipping_method input[type=\"radio\"] + label:before, 
	{$rule}#ship-to-different-address input[type=\"radio\"] + label:before, 
	{$rule}.payment_methods input[type=\"radio\"] + label:before, 
	{$rule}.checkout #order_review .shop_table th,
	{$rule}.checkout #order_review .shop_table td, 
	{$rule}.shop_table.order_details th,
	{$rule}.shop_table.order_details td, 
	{$rule}.checkout #order_review #payment, 
	{$rule}.checkout #order_review #payment .payment_methods .payment_box, 
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content, 
	{$rule}.cmsms_added_product_info,
	{$rule}.button.checkout-button:hover {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_added_product_info:after {
		" . cmsms_color_css('border-' . (is_rtl() ? 'right' : 'left') . '-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content:after,
	{$rule}.checkout #order_review #payment .payment_methods .payment_box:after {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.alternate_bg_color {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsms_products .product .product_inner:hover, 
	{$rule}.buttons_added, 
	{$rule}.buttons_added .text {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		{$rule}.cmsms_products .product .product_inner {
			" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
		}
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsms_star_rating .cmsms_star_trans_wrap, 
	{$rule}.woocommerce-error, 
	{$rule}.woocommerce-message, 
	{$rule}.woocommerce-info, 
	{$rule}.woocommerce-error a, 
	{$rule}.woocommerce-message a, 
	{$rule}.woocommerce-info a, 
	{$rule}.woocommerce-error .button, 
	{$rule}.woocommerce-message .button, 
	{$rule}.woocommerce-info .button,
	{$rule}.shop_table td.product-remove .remove, 
	{$rule}.border_color, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_img_wrap .cmsms_product_footer .added_to_cart, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_img_wrap .cmsms_product_footer .cmsms_add_to_cart_button, 
	{$rule}.cmsms_product_img_wrap .cmsms_star_rating .cmsms_star_color_wrap, 
	{$rule}.cmsms_single_product .cmsms_product_right_column .cart .single_add_to_cart_button,
	{$rule}.onsale, 
	{$rule}.shop_table td.actions .button, 
	{$rule}.button.checkout-button, 
	{$rule}.out-of-stock, 
	{$rule}.cmsms_dynamic_cart_button:before, 
	{$rule}.cmsms_dynamic_cart_button:hover:before,
	{$rule}.cmsms_dynamic_cart:hover .cmsms_dynamic_cart_button:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_product_img_wrap .cmsms_star_rating .cmsms_star_trans_wrap {
		color:rgba(" . color2rgb($cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . ", 0.4);
	}
	
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_img_wrap .cmsms_product_footer .added_to_cart:hover, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_img_wrap .cmsms_product_footer .cmsms_add_to_cart_button:hover, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_img_wrap .cmsms_product_footer .cmsms_add_to_cart_button.loading, 
	{$rule}.woocommerce-error .button:hover, 
	{$rule}.woocommerce-message .button:hover, 
	{$rule}.woocommerce-info .button:hover, 
	{$rule}.shop_table th, 
	{$rule}.shop_table td.actions, 
	{$rule}.cart_totals table tr.cart-subtotal th, 
	{$rule}.cart_totals table tr.cart-subtotal td, 
	{$rule}.cart_totals table tr.order-total th, 
	{$rule}.cart_totals table tr.order-total td, 
	{$rule}.checkout #order_review .shop_table thead th, 
	{$rule}.checkout #order_review .shop_table tr.cart-subtotal th, 
	{$rule}.checkout #order_review .shop_table tr.cart-subtotal td,
	{$rule}.checkout #order_review .shop_table tr.order-total th, 
	{$rule}.checkout #order_review .shop_table tr.order-total td, 
	{$rule}.shop_table.order_details thead th, 
	{$rule}.shop_table.order_details tfoot tr:last-child th, 
	{$rule}.shop_table.order_details tfoot tr:last-child td, 
	{$rule}.cmsms_single_product .cmsms_product_right_column .cart .single_add_to_cart_button:hover,
	{$rule}.shop_table td.actions .button:hover, 
	{$rule}ul.order_details li > span {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.cmsms_single_product .cmsms_woo_tabs #reviews #comments .commentlist,
	{$rule}.shop_table td.product-remove .remove, 
	{$rule}.checkout #order_review #payment .payment_methods .payment_box,
	{$rule}.shop_table th, 
	{$rule}.cmsms_added_product_info,
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content,
	{$rule}.cmsms_single_product .cmsms_woo_tabs .shop_attributes th, 
	{$rule}.cmsms_single_product .cmsms_woo_tabs .shop_attributes td, 
	{$rule}.cmsms_single_product .cmsms_woo_tabs #reviews #comments .commentlist .comment, 
	{$rule}.shop_table td, 
	{$rule}.cart_totals table tr th, 
	{$rule}.cart_totals table tr td, 
	{$rule}#shipping_method input[type=\"checkbox\"] + label:before, 
	{$rule}#ship-to-different-address input[type=\"checkbox\"] + label:before, 
	{$rule}.payment_methods input[type=\"checkbox\"] + label:before, 
	{$rule}#shipping_method input[type=\"radio\"] + label:before, 
	{$rule}#ship-to-different-address input[type=\"radio\"] + label:before, 
	{$rule}.payment_methods input[type=\"radio\"] + label:before, 
	{$rule}.checkout #order_review #payment, 
	{$rule}ul.order_details, 
	{$rule}ul.order_details li, 
	{$rule}ul.order_details li > span, 
	{$rule}.widget_price_filter .price_slider_wrapper .price_slider, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_img_wrap .cmsms_product_footer .added_to_cart, 
	{$rule}.cmsms_products .product .product_inner .cmsms_product_img_wrap .cmsms_product_footer .cmsms_add_to_cart_button, 
	{$rule}.woocommerce-error .button, 
	{$rule}.woocommerce-message .button, 
	{$rule}.woocommerce-info .button, 
	{$rule}.cmsms_dynamic_cart_button {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsms_added_product_info:before {
		" . cmsms_color_css('border-' . (is_rtl() ? 'right' : 'left') . '-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.checkout #order_review #payment .payment_methods .payment_box:before,
	{$rule}.cmsms_dynamic_cart .widget_shopping_cart_content:before {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/


";
		}
		
		
if (CMSMS_EVENTS_CALENDAR) {
			$custom_css .= "
/***************** Start {$title} Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.tribe-events-tooltip,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_left .tribe-events-schedule > h6.tribe-events-cost, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number .tribe-countdown-under, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events *, 
	{$rule}.cmsms_event_date .cmsms_event_month {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.widget.tribe_mini_calendar_widget .duration .date-start:before, 
	{$rule}.tribe-events-venue-details .author:before, 
	{$rule}.widget.tribe-events-list-widget .duration:before, 
	{$rule}.widget ol.vcalendar .vevent .cmsms_widget_event_info .date-start:before, 
	{$rule}.widget ul.vcalendar .vevent .cmsms_widget_event_info .date-start:before,
	{$rule}.widget ol.vcalendar .vevent .cmsms_widget_event_info .tribe-events-event-cost:before, 
	{$rule}.widget ul.vcalendar .vevent .cmsms_widget_event_info .tribe-events-event-cost:before,
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name:before,
	{$rule}#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_left .tribe-events-schedule > span.cmsms-tribe-events-time:before,
	{$rule}#tribe-events-content.tribe-events-photo #tribe-events-photo-events .tribe-events-photo-event .tribe-events-photo-event-wrap .tribe-events-event-details .tribe-events-event-meta .time-details:before,
	{$rule}#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_left .tribe-events-schedule > span.tribe-events-cost:before,
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsms_events_list_event_wrap .tribe-events-event-meta .time-details:before,
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsms_events_list_event_wrap .tribe-events-event-meta .tribe-events-address:before,
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a:hover,
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option.tribe-bar-active a, 
	{$rule}.tribe-related-event-info .date-start,
	{$rule}.tribe-related-event-info .date-end,
	{$rule}.tribe-related-event-info .end-time,
	{$rule}#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_left .tribe-events-schedule > h6, 
	{$rule}#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_right .tribe-events-cal-links a:hover, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"] a:hover, 
	{$rule}#tribe-events-footer > a:hover, 
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsms_events_list_event_wrap .cmsms_events_list_event_header .tribe-events-event-cost, 
	{$rule}.recurringinfo a:hover, 
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsms_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details a:hover, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsms_events_img_placeholder:hover, 
	{$rule}.tribe-events-venue .cmsms_events_venue_header .cmsms_events_venue_header_right a:hover, 
	{$rule}.tribe-events-organizer .cmsms_events_organizer_header .cmsms_events_organizer_header_right a:hover,  
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a:hover,  
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a:hover, 
	{$rule}.widget .vcalendar .vevent .entry-title a:hover, 
	{$rule}.widget .vcalendar .vevent .cmsms_widget_event_info .duration:before, 
	{$rule}.widget .vcalendar .vevent .cmsms_widget_event_venue_info_loc:before, 
	{$rule}.widget .tribe-events-widget-link a:hover, 
	{$rule}.widget .vcalendar .vevent .cmsms_widget_event_venue_info_loc .cmsms_widget_event_venue_info a:hover, 
	{$rule}.widget .vcalendar .vevent .cmsms_widget_event_venue_info_loc .cmsms_widget_event_venue_loc a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events:hover *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-info .date-start:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.tribe-bar-views-open label.button,  
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a:hover, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-present, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:hover, 
	{$rule}.widget.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.tribe-bar-views-open label.button,
	{$rule}.tribe-events-sub-nav li a:hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth:hover * {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		}
		
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.tribe-events-present {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
		}
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
		}
	}
	/* Finish Highlight Color */
	
	
	/* Start Secondary Color */
	{$rule}.cmsms_event_date .cmsms_event_day {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-mini-calendar-today, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-othermonth.tribe-mini-calendar-today {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.mobile-active, 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth.mobile-active {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
		}
	}
	/* Finish Secondary Color */
	
	
	/* Start Headings Color */
	{$rule}.tribe-events-month-event-title a, 
	{$rule}.tribe-events-month-event-title a:hover, 
	{$rule}#tribe-events-bar #tribe-bar-views .tribe-bar-views-inner ul.tribe-bar-views-list li.tribe-bar-views-option a,
	{$rule}.tribe-events-sub-nav li a:hover:before,
	{$rule}#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_left .tribe-events-schedule > span.tribe-events-cost,  
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-date span.list-daynumber,
	{$rule}#tribe-events-content.tribe-events-single .cmsms_single_event_header .cmsms_single_event_header_right .tribe-events-cal-links a, 
	{$rule}#tribe-events-content.tribe-events-single .cmsms_single_event_meta .tribe-events-meta-group .cmsms_event_meta_info .cmsms_event_meta_info_item .cmsms_event_meta_info_item_title, 
	{$rule}#tribe-events-content.tribe-events-single .cmsms_single_event_meta .tribe-events-meta-group .cmsms_event_meta_info .cmsms_event_meta_info_item dt, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-date-filter label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-search-filter label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-geoloc-filter label, 
	{$rule}#tribe-events-bar .tribe-bar-filters .tribe-bar-filters-inner .tribe-bar-submit label,  
	{$rule}#tribe-events-footer > a, 
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date, 
	{$rule}.recurringinfo a, 
	{$rule}.recurringinfo, 
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsms_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details .author, 
	{$rule}#tribe-events-content.tribe-events-list .vevent .cmsms_events_list_event_wrap .tribe-events-event-meta .tribe-events-venue-details a, 
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5, 
	{$rule}.tribe-events-notices, 
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsms_events_img_placeholder, 
	{$rule}.tribe-events-venue .cmsms_events_venue_header .cmsms_events_venue_header_right a, 
	{$rule}.tribe-events-organizer .cmsms_events_organizer_header .cmsms_events_organizer_header_right a, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child > .entry-title a, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-number, 
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time .tribe-countdown-timer .tribe-countdown-colon,  
	{$rule}.widget .vcalendar .vevent .entry-title, 
	{$rule}.widget .vcalendar .vevent .entry-title a, 
	{$rule}.widget .tribe-events-widget-link a, 
	{$rule}.widget .vcalendar .vevent .cmsms_widget_event_venue_info_loc .cmsms_widget_event_venue_info a, 
	{$rule}.widget .vcalendar .vevent .cmsms_widget_event_venue_info_loc .cmsms_widget_event_venue_loc a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	{$rule}.tribe-events-tooltip, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.tribe-events-tooltip:before {
		" . cmsms_color_css('border-top-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.recurringinfo .recurring-info-tooltip:before {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-tooltip:before {
		" . cmsms_color_css('border-right-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-body .tribe-events-right .tribe-events-tooltip:before {
		" . cmsms_color_css('border-left-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth * {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
		}
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */ 
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name, 
	{$rule}.widget.tribe-events-venue-widget .tribe-venue-widget-wrapper .tribe-venue-widget-venue .tribe-venue-widget-venue-name a, 
	{$rule}.tribe-events-tooltip .entry-title, 
	{$rule}.tribe-bar-views-open label.button,
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div .tribe-mini-calendar-nav-link:before,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar thead th, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present div[id*=\"tribe-events-daynum-\"] a:hover, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-header .tribe-grid-content-wrap .column a, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event:hover > div:first-child a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .tribe-mini-calendar-nav div, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th.tribe-mini-calendar-dayofweek {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-date,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid,  
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar, 
	{$rule}.cmsms_event_date, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours div {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.recurringinfo .recurring-info-tooltip:after {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.mobile-active *, 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth.tribe-events-present * {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		}
		
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-has-events.mobile-active:before, 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-present:before, 
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-thismonth {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
		}
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.tribe-events-sub-nav li a:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}ul.tribe-related-events > li .tribe-related-events-thumbnail .cmsms_events_img_placeholder, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-today, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-othermonth, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-has-events div .tribe-mini-calendar-day-link:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.tribe-events-sub-nav li a, 
	{$rule}#tribe-events-content.tribe-events-list .vevent, 
	{$rule}#tribe-events-content.tribe-events-single .cmsms_single_event_header, 
	{$rule}.widget .vcalendar .vevent, 
	{$rule}.widget.tribe-this-week-events-widget .tribe-this-week-widget-day {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
		}
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.bd_font_color, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-mini-calendar-today *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-mini-calendar-today:hover *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-othermonth, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-othermonth a, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-present *, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-present:hover *, 
	{$rule}.widget.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-separator-month, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-event-\"]:hover, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-heading, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-mobile-day-date, 
	{$rule}.tribe-events-notices, 
	{$rule}#tribe-events-content.tribe-events-day .tribe-events-day-time-slot > h5, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-mini-calendar-today div .tribe-mini-calendar-day-link:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-othermonth.tribe-events-has-events div .tribe-mini-calendar-day-link:before, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar .vcalendar td.tribe-events-present div .tribe-mini-calendar-day-link:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-list-wrapper .tribe-events-loop .vevent .tribe-mini-calendar-event .list-date,
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-event > div:first-child,
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td div[id*=\"tribe-events-daynum-\"], 
	{$rule}.tribe-events-notices, 
	{$rule}#tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td .tribe-events-viewmore, 
	{$rule}.tribe-events-venue .cmsms_events_venue_header, 
	{$rule}.tribe-events-organizer .cmsms_events_organizer_header, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-scroller, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-content-wrap .column, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-grid-allday, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-week-grid-outer-wrap .tribe-week-grid-inner-wrap .tribe-week-grid-block div, 
	{$rule}#tribe-events-content.tribe-events-week-grid .tribe-events-grid .tribe-week-grid-wrapper .tribe-grid-body .tribe-week-grid-hours div, 
	{$rule}#tribe-mobile-container .tribe-mobile-day .tribe-events-mobile, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar th, 
	{$rule}.widget.tribe_mini_calendar_widget .tribe-mini-calendar-wrapper .tribe-mini-calendar-grid-wrapper .tribe-mini-calendar td, 
	{$rule}.cmsms_event_date {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (max-width: 767px) {
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth * {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
		}
		
		{$rule}#main #tribe-events-content.tribe-events-month table.tribe-events-calendar tbody td.tribe-events-othermonth:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
		}
	}
	/* Finish Borders Color */

/***************** Finish {$title} Events Color Scheme Rules ******************/


";
		}
		
		
if (CMSMS_TIMETABLE) {
			$custom_css .= "
/***************** Start {$title} Timetable Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a:hover:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a:hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.hover_color {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Secondary Color */
	{$rule}.second_color {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
	}
	
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
	}
	
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
	}
	
	{$rule}ul.tt_upcoming_events li a.tt_upcoming_events_event_container {
		" . cmsms_color_css('border-' . (is_rtl() ? 'right' : 'left') . '-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_second']) . "
	}
	/* Finish Secondary Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsms_tt_event .cmsms_tt_event_hours .cmsms_tt_event_hours_item .cmsms_tt_event_hours_item_title, 
	{$rule}.cmsms_tt_event .cmsms_tt_event_details .cmsms_tt_event_details_item .cmsms_tt_event_details_item_title {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.bg_color {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	
	{$rule}ul.tt_upcoming_events li .tt_upcoming_events_event_container, 
	{$rule}.tt_upcoming_events_wrapper .tt_upcoming_event_controls > a {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} Timetable Color Scheme Rules ******************/


";
		}
		
	}
	
	
	$custom_css .= "
	

/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top,
	.header_top_outer .meta_wrap {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_color']) . "
	}
	/* Finish Header Top Content Color */
	
	
	/* Start Header Top Primary Color */
	.header_top a,
	.header_top .color_2,
	.header_top_inner .social_wrap a
	.header_top_outer nav > div > ul > li a,
	.header_top_outer .meta_wrap a,
	.header_top h1,
	.header_top h2,
	.header_top h3,
	.header_top h4,
	.header_top h5,
	.header_top h6,
	.header_top h1 a,
	.header_top h2 a,
	.header_top h3 a,
	.header_top h4 a,
	.header_top h5 a,
	.header_top h6 a,
	.header_top h1 a:hover,
	.header_top h2 a:hover,
	.header_top h3 a:hover,
	.header_top h4 a:hover,
	.header_top h5 a:hover,
	.header_top h6 a:hover,
	.header_top .search_bar_wrap button[type=submit][class^=\"cmsms-icon-\"],
	.header_top .search_bar_wrap button[type=submit][class*=\" cmsms-icon-\"], 
	.header_top .search_bar_wrap button[type=submit][class^=\"cmsms_theme_icon_\"],
	.header_top .search_bar_wrap button[type=submit][class*=\" cmsms_theme_icon_\"] {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
	}
	
	/* @media only screen and (max-width: 1024px) {
		html #page #header .header_top .header_top_outer .header_top_inner .header_top_right .nav_wrap nav #top_line_nav li > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
		}
	} */
	
	.header_top .cmsms_button,
	.header_top .button:hover,
	.header_top_outer nav > div > ul > li > a > span.cmsms_count,
	.header_top .button {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
	}
	
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=date]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top textarea:focus, 
	.header_top .header_top_inner nav > div > ul > li:before, 
	.header_top .header_top_inner nav > div > ul > li:after {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_link']) . "
	}
	/* Finish Header Top Primary Color */
	
	
	/* Start Header Top Rollover Color */
	.header_top a:hover,
	.header_top_outer nav > div > ul > li.current-menu-item > a,
	.header_top_outer nav > div > ul > li.current-menu-ancestor > a,
	.header_top .header_top_inner nav > div > ul > li > a:not([href]),
	.header_top_outer .meta_wrap a:hover,
	.header_top_inner .social_wrap a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
	}
	/* Finish Header Top Rollover Color */
	
	
	/* Start Header Top Background Color */
	.header_top_outer nav > div > ul > li > a > span.cmsms_count,
	.header_top .cmsms_button,
	.header_top .cmsms_button:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_bg']) . "
	}
	
	.header_top,
	.header_top input[type=text]:focus,
	.header_top input[type=number]:focus,
	.header_top input[type=date]:focus,
	.header_top input[type=email]:focus,
	.header_top input[type=password]:focus,
	.header_top textarea:focus,
	.header_top_outer {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_bg']) . "
	}
	/* Finish Header Top Background Color */
	
	
	/* Start Header Top Border Color */
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=date],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top textarea,
	.header_top select,
	.header_top option,
	.header_top .button {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_border']) . "
	}
	/* Finish Header Top Border Color */
	
	
	/* Start Header Top Dropdown Link Color */
	.header_top_outer nav > div > ul > li ul li > a,
	.header_top .button,
	.header_top .button:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_link']) . "
	}
	/* Finish Header Top Dropdown Link Color */
	
	
	/* Start Header Top Dropdown Rollover Color */
	.header_top_outer nav > div > ul > li ul li.current-menu-item > a,
	.header_top_outer nav > div > ul > li ul li.current-menu-ancestor > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_hover']) . "
	}
	
	
	@media only screen and (min-width: 1024px) {
		.header_top_outer nav > div > ul > li:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_hover']) . "
		}
		
		.header_top_outer nav > div > ul > li ul li:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_hover']) . "
		}
		
		.header_top_outer nav > div > ul > li ul {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_bg']) . "
		}
	}
	/* Finish Header Top Dropdown Rollover Color */
	
	
	/* Start Header Top Dropdown Background Color */
	.header_top input[type=text],
	.header_top input[type=number],
	.header_top input[type=date],
	.header_top input[type=email],
	.header_top input[type=password],
	.header_top input[type=submit],
	.header_top button,
	.header_top textarea,
	.header_top select,
	.header_top option,
	.header_top .search_bar_wrap,
	.header_top .search_bar_wrap input[type=text],
	.header_top .search_bar_wrap input[type=text]:focus {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_bg']) . "
	}
	/* Finish Header Top Dropdown Background Color */
	
	
	/* Start Header Top Custom Rules */
	";
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_shadow']) {
	$custom_css .= "
	.header_top_outer nav > div > ul > li ul {
		-webkit-box-shadow:0 0 3px rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 0 3px rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 0 3px rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/



/***************** Start Header Color Scheme Rules ******************/

	/* Start Header Content Color */
	#header .search_wrap input[type=text],
	.header_mid,
	.search_wrap .search_wrap_table .search_wrap_table_cell .search_bar_wrap .cmsms_theme_icon_search[type=submit]:before,
	.header_mid .logo_wrap a:hover,
	.header_mid .logo_wrap a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_color']) . "
	}
	
	.close_search_inner,
	.close_search_inner:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_color']) . "
	}
	
	#header .search_wrap input::-webkit-input-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_color']) . "
	}
	
	#header .search_wrap input::-moz-placeholder {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_color']) . "
	}
	/* Finish Header Content Color */
	
	
	/* Start Header Background Color */	
	.header_mid_outer {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bg']) . "
	}
	/* Finish Header Background Color */
	
	
	/* Start Header Border Color */
	.header_mid input[type=text],
	.header_mid input[type=number],
	.header_mid input[type=date],
	.header_mid input[type=email],
	.header_mid input[type=password],
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.header_mid .button {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_border']) . "
	}
	/* Finish Header Border Color */
	
	
	/* Start Header Primary Color */
	.header_mid a,
	.header_mid h1 a:hover,
	.header_mid h2 a:hover,
	.header_mid h3 a:hover,
	.header_mid h4 a:hover,
	.header_mid h5 a:hover,
	.header_mid h6 a:hover,
	.header_mid .color_2,
	.header_mid h1,
	.header_mid h2,
	.header_mid h3,
	.header_mid h4,
	.header_mid h5,
	.header_mid h6,
	.header_mid h1 a,
	.header_mid h2 a,
	.header_mid h3 a,
	.header_mid h4 a,
	.header_mid h5 a,
	.header_mid h6 a,
	.header_mid #navigation > li > a,
	#header .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children > a,
	.header_mid #navigation > li.menu-item-highlight > a span[class^=\"cmsms-icon-\"]:before,
	.header_mid #navigation > li.menu-item-highlight > a span[class*=\" cmsms-icon-\"]:before, 
	.header_mid #navigation > li.menu-item-highlight > a > span > span.nav_subtitle, 
	.header_mid #navigation > li.menu-item-highlight > a > span {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
	}
	
	.header_mid .cmsms_button,
	.header_mid .button:hover,
	.header_mid .button {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
	}
	/* Finish Header Primary Color */
	
	
	/* Start Header Rollover Color */
	.header_mid .search_but_wrap .search_but:after,
	.header_mid a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
	}
	
	.header_mid #navigation > li > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.cmsms_responsive .header_mid #navigation > li:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_hover']) . "
		}
		
		.cmsms_responsive .header_mid #navigation > li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_link']) . "
		}
	}
	/* Finish Header Rollover Color */
	
	
	/* Start Header Subtitle Color */
	.header_mid #navigation > li > a[data-tag]:before,
	.header_mid #navigation > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_subtitle']) . "
	}
	/* Finish Header Subtitle Color */
	
	
	/* Start Header Dropdown Link Color */
	.header_mid #navigation ul li a,
	.header_mid .button,
	.header_mid .button:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_link']) . "
	}
	
	.header_mid #navigation ul li > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_link']) . "
	}
	/* Finish Header Dropdown Link Color */
	
	
	/* Start Header Dropdown Rollover Color */
	.header_mid #navigation > li.menu-item-mega li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_mid #navigation ul li > a:hover,
	.header_mid #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega li.current-menu-ancestor > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_mid #navigation ul li.current-menu-item > a,
	.header_mid #navigation ul li.current-menu-ancestor > a,
	.header_mid #navigation > li.menu-item-mega li li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover,
	.header_mid #navigation > li li.menu-item-highlight > a,
	.header_mid #navigation > li li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
	}
	
	.header_mid #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_mid #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_mid #navigation > li:not(.menu-item-mega) ul li.current-menu-ancestor > a[data-tag]:before,
	.header_mid #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_mid #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.cmsms_responsive .header_mid #navigation > li.menu-item-mega li:hover > a,
		.cmsms_responsive .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a,
		.cmsms_responsive .header_mid #navigation ul li:hover > a,
		.cmsms_responsive .header_mid #navigation > li.menu-item-mega > ul > li:hover > a,
		.cmsms_responsive .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li:hover > a,
		.cmsms_responsive .header_mid #navigation > li li.menu-item-highlight:hover > a,
		.cmsms_responsive .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
	}
	/* Finish Header Dropdown Rollover Color */
	
	
	/* Start Header Dropdown Subtitle Color */
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_subtitle']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.cmsms_responsive .header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_subtitle']) . "
		}
	}
	/* Finish Header Dropdown Subtitle Color */
	
	
	/* Start Header Dropdown Background Color */
	.header_mid #navigation ul li > a[data-tag]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
	}
	
	.header_mid input[type=text],
	.header_mid input[type=number],
	.header_mid input[type=date],
	.header_mid input[type=email],
	.header_mid input[type=password],
	.header_mid input[type=submit],
	.header_mid button,
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.search_wrap,
	.header_mid #navigation ul > li > a,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
	}
	/* Finish Header Dropdown Background Color */
	
	
	/* Start Header Scrolled Primary Color */
	#header.navi_scrolled .search_but:before,
	#header.navi_scrolled #navigation > li > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_scrolled_link']) . "
	}
	/* Finish Scrolled Header Primary Color */
	
	
	/* Start Header Scrolled Rollover Color */
	#header.navi_scrolled #navigation > li:before,
	#header.navi_scrolled .search_but_wrap .search_but:after,
	#header.navi_scrolled a:hover,
	#header.navi_scrolled #navigation > li:hover > a {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_scrolled_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.cmsms_responsive #header.navi_scrolled #navigation > li:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_scrolled_hover']) . "
		}
	}
	
	#header.navi_scrolled #navigation > li > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_scrolled_hover']) . "
	}
	/* Finish Header Scrolled Rollover Color */
	
	
	/* Start Header Scrolled Subtitle Color */
	#header.navi_scrolled #navigation > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_scrolled_subtitle']) . "
	}
	/* Finish Header Scrolled Subtitle Color */
	
	
	/* Start Header Scrolled Background Color */
	.enable_logo_side #header.navi_scrolled .header_mid_outer,
	#header.navi_scrolled .header_bot_outer {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_scrolled_bg']) . "
	}
	/* Finish Header Scrolled Background Color */
	
	/* Start Header Custom Rules */
	";
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_shadow']) {
	$custom_css .= "
	.header_mid #navigation ul,
	.header_mid #navigation > li.menu-item-mega > div.menu-item-mega-container {
		-webkit-box-shadow:0 0 3px rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 0 3px rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 0 3px rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Header Custom Rules */

/***************** Finish Header Color Scheme Rules ******************/



/***************** Start Header Bottom Color Scheme Rules ******************/
	
	/* Start Header Bottom Content Color */
	.header_bot {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_color']) . "
	}
	/* Finish Header Bottom Content Color */
	
	
	/* Start Header Bottom Primary Color */
	.header_bot a,
	.header_bot h1 a:hover,
	.header_bot h2 a:hover,
	.header_bot h3 a:hover,
	.header_bot h4 a:hover,
	.header_bot h5 a:hover,
	.header_bot h6 a:hover,
	.header_bot .color_2,
	.header_bot h1,
	.header_bot h2,
	.header_bot h3,
	.header_bot h4,
	.header_bot h5,
	.header_bot h6,
	.header_bot h1 a,
	.header_bot h2 a,
	.header_bot h3 a,
	.header_bot h4 a,
	.header_bot h5 a,
	.header_bot h6 a,
	.header_bot #navigation > li > a,
	#header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children > a,
	.header_bot #navigation > li.menu-item-highlight > a span[class^=\"cmsms-icon-\"]:before,
	.header_bot #navigation > li.menu-item-highlight > a span[class*=\" cmsms-icon-\"]:before, 
	.header_bot #navigation > li.menu-item-highlight > a > span > span.nav_subtitle, 
	.header_bot #navigation > li.menu-item-highlight > a > span {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_link']) . "
	}
	
	.header_bot .cmsms_button,
	.header_bot .button:hover,
	.header_bot .button {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_link']) . "
	}
	/* Finish Header Bottom Primary Color */
	
	
	/* Start Header Bottom Rollover Color */
	.header_bot #navigation > li:before,
	.header_bot #navigation > li > a span[class^=\"cmsms-icon-\"]:before,
	.header_bot #navigation > li > a span[class*=\" cmsms-icon-\"]:before, 
	.header_bot .search_but_wrap .search_but:after,
	.header_bot a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_hover']) . "
	}
	
	.header_bot #navigation > li > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.cmsms_responsive .header_bot #navigation > li:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_hover']) . "
		}
		
		.cmsms_responsive .header_bot #navigation > li:hover > a[data-tag]:before { 
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_link']) . "
		}
	}
	/* Finish Header Bottom Rollover Color */
	
	
	/* Start Header Bottom Subtitle Color */
	.header_bot #navigation > li > a[data-tag]:before,
	.header_bot #navigation > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_subtitle']) . "
	}
	/* Finish Header Bottom Subtitle Color */
	
	
	/* Start Header Bottom Background Color */
	.header_bot {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_bg']) . "
	}
	/* Finish Header Bottom Background Color */
	
	
	/* Start Header Bottom Border Color */
	.header_bot input[type=text],
	.header_bot input[type=number],
	.header_bot input[type=date],
	.header_bot input[type=email],
	.header_bot input[type=password],
	.header_bot textarea,
	.header_bot select,
	.header_bot option,
	.header_bot .button {
		" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_border']) . "
	}
	
	.enable_logo_left .header_line_wrap {
		" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_border']) . "
	}
	
	.enable_logo_left .header_line_wrap:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_border']) . "
	}
	
	.enable_logo_centered .header_line_wrap:before,
	.enable_logo_centered .header_line_wrap {
		background-image: 
			-webkit-linear-gradient(0deg, rgba(255, 255, 255,0), rgba(255, 255, 255, 0.1) 5%, rgba(255, 255, 255, 0.1) 95%, rgba(255, 255, 255, 0)), 
			-webkit-radial-gradient(50% 100%, ellipse cover, rgba(255, 255, 255, 0), rgba(255, 255, 255,0) 50%);
		background-image: 
			-moz-linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.1) 5%, rgba(255, 255, 255, 0.1) 95%, rgba(255, 255, 255, 0)), 
			-moz-radial-gradient(50% 100%, ellipse cover, rgba(255, 255, 255, 0), rgba(255, 255, 255,0) 50%);
		background-image: 
			-ms-linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.1) 5%, rgba(255, 255, 255, .1) 95%, rgba(255, 255, 255, 0)), 
			-ms-radial-gradient(ellipse farthest-corner at 50% 100% , rgba(255, 255, 255, 0), rgba(255, 255, 255, 0) 50%);
		background-image: 
			-o-linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.1) 5%, rgba(255, 255, 255, 0.1) 95%, rgba(255, 255, 255, 0)), 
			-o-radial-gradient(50% 100%, ellipse cover, rgba(255, 255, 255, 0), rgba(255, 255, 255,0) 50%);
		background-image: 
			linear-gradient(0deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.1) 5%, rgba(255, 255, 255, 0.1) 95%, rgba(255, 255, 255, 0)), 
			radial-gradient(50% 100%, ellipse cover, rgba(255, 255, 255, 0), rgba(255, 255, 255,0) 50%);
	}
	
	/* Finish Header Border Border Color */
	
	
	/* Start Header Bottom Dropdown Link Color */
	.header_bot #navigation ul li a,
	.header_bot .button,
	.header_bot .button:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_link']) . "
	}
	
	.header_bot #navigation ul li > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_link']) . "
	}
	/* Finish Header Bottom Dropdown Link Color */
	
	
	/* Start Header Bottom Dropdown Rollover Color */
	.header_bot #navigation > li.menu-item-mega li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li > a:hover,
	.header_bot #navigation ul li > a:hover,
	.header_bot #navigation > li.menu-item-mega > ul > li > a:hover,
	.header_bot #navigation > li.menu-item-mega li.current-menu-ancestor > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.current-menu-item > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a[href]:hover,
	.header_bot #navigation ul li.current-menu-item > a,
	.header_bot #navigation ul li.current-menu-ancestor > a,
	.header_bot #navigation > li.menu-item-mega li li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a:hover,
	.header_bot #navigation > li li.menu-item-highlight > a,
	.header_bot #navigation > li li.menu-item-highlight > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight > a:hover,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a:hover {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
	}
	
	.header_bot #navigation > li:not(.menu-item-mega) ul li > a[data-tag]:hover:before, 
	.header_bot #navigation > li:not(.menu-item-mega) ul li.current-menu-item > a[data-tag]:before,
	.header_bot #navigation > li:not(.menu-item-mega) ul li.current-menu-ancestor > a[data-tag]:before,
	.header_bot #navigation > li.menu-item-mega li li:hover > a[data-tag]:hover:before,
	.header_bot #navigation > li.menu-item-mega li li.current-menu-item > a[data-tag]:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.cmsms_responsive .header_bot #navigation > li.menu-item-mega li:hover > a,
		.cmsms_responsive .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul li li:hover > a,
		.cmsms_responsive .header_bot #navigation ul li:hover > a,
		.cmsms_responsive .header_bot #navigation > li.menu-item-mega > ul > li:hover > a,
		.cmsms_responsive .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li:hover > a,
		.cmsms_responsive .header_bot #navigation > li li.menu-item-highlight:hover > a,
		.cmsms_responsive .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-highlight:hover > a {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
		
		.header_bot #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_hover']) . "
		}
	}
	/* Finish Header Bottom Dropdown Rollover Color */
	
	
	/* Start Header Bottom Dropdown Subtitle Color */
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a:hover > span > span.nav_subtitle,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li > a > span > span.nav_subtitle {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
	}
	
	@media only screen and (min-width: 1024px) {
		.cmsms_responsive .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container > ul > li:hover > a > span > span.nav_subtitle {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_subtitle']) . "
		}
	}
	/* Finish Header Bottom Dropdown Subtitle Color */
	
	
	/* Start Header Bottom Dropdown Background Color */
	.header_bot #navigation ul li > a[data-tag]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
	}
	
	.header_bot input[type=text],
	.header_bot input[type=number],
	.header_bot input[type=date],
	.header_bot input[type=email],
	.header_bot input[type=password],
	.header_bot input[type=submit],
	.header_bot button,
	.header_bot textarea,
	.header_bot select,
	.header_bot option,
	.header_bot #navigation ul > li > a,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_bg']) . "
	}
	/* Finish Header Bottom Dropdown Background Color */
	
	
	/* Start Header Bottom Dropdown Border Color */
	@media only screen and (max-width: 1024px) {
		html #page.cmsms_responsive  #header .header_mid .header_mid_outer .header_mid_inner .side_logo_nav_wrap .side_logo_nav nav,
		.cmsms_responsive .search_wrap .search_wrap_table,
		.cmsms_responsive .header_mid nav #navigation li,
		.cmsms_responsive .header_bot nav #navigation li {
			" . cmsms_color_css('border-top-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_border']) . "
		}
		
		html #page.cmsms_responsive #header .header_top .header_top_outer .header_top_inner .header_top_right,
		html #page.cmsms_responsive #header .header_top .header_top_outer .header_top_inner .header_top_left,
		html #page.cmsms_responsive #header .header_top .header_top_but,
		.cmsms_responsive .search_wrap .search_wrap_table {
			" . cmsms_color_css('border-bottom-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_border']) . "
		}
		
		.search_wrap .search_wrap_table {
			background-color:rgba(255, 255, 255, .05);
		}
	}
	/* Finish Header Bottom Dropdown Border Color */
	
	
	/* Start Header Bottom Custom Rules */
	";
	
	
	if ($cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_shadow']) {
	$custom_css .= "
	.header_bot #navigation ul,
	.header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container {
		-webkit-box-shadow:0 0 3px rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
		-moz-box-shadow:0 0 3px rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
		box-shadow:0 0 3px rgba(0, 0, 0, " . ((int) $cmsms_option[CMSMS_SHORTNAME . '_header_bottom_dropdown_shadow_opacity'] / 100) . ");
	}
	";
	}
	
	
	$custom_css .= "
	/* Finish Header Bottom Custom Rules */
	
/***************** Finish Header Bottom Color Scheme Rules ******************/


/***************** Start Small Header Resolutions Color Scheme Rules ******************/

	@media only screen and (max-width: 1024px) {
		.cmsms_responsive .responsive_top_nav,
		html #page.cmsms_responsive  #header .header_top .header_top_but .header_top_but_arrow:before,
		.cmsms_responsive .header_mid .responsive_nav {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_color']) . "
		}
		
		.cmsms_responsive .responsive_top_nav,
		.cmsms_responsive .header_mid .responsive_nav {
			" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_color']) . "
		}
		
		.cmsms_responsive .header_bot #navigation > li > a,
		.cmsms_responsive #header .header_bot #navigation > li.menu-item-mega > div.menu-item-mega-container li.menu-item-has-children > a,
		.cmsms_responsive .header_top,
		.cmsms_responsive .header_mid,
		.cmsms_responsive #header .search_wrap {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_link']) . "
		}
		
		.cmsms_responsive .responsive_top_nav.active,
		.cmsms_responsive .responsive_top_nav:hover,
		.cmsms_responsive .header_mid .responsive_nav.active,
		.cmsms_responsive .header_mid .responsive_nav:hover {
			" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
		}
		
		.cmsms_responsive .header_top,
		.cmsms_responsive .header_mid_outer,
		.cmsms_responsive #header .search_wrap,
		.cmsms_responsive .header_bot {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_bg']) . "
		}
		
		.cmsms_responsive .responsive_top_nav.active,
		.cmsms_responsive .responsive_top_nav:hover,
		.cmsms_responsive .header_mid .responsive_nav.active,
		.cmsms_responsive .header_mid .responsive_nav:hover,
		.cmsms_responsive .header_mid #navigation > li:not(.menu-item-mega) ul li:hover > a[data-tag]:before {
			" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
		
		.cmsms_responsive .responsive_top_nav.active,
		.cmsms_responsive .responsive_top_nav:hover,
		.cmsms_responsive .header_mid .responsive_nav.active,
		.cmsms_responsive .header_mid .responsive_nav:hover {
			" . cmsms_color_css('border-color', $cmsms_option[CMSMS_SHORTNAME . '_header_dropdown_hover']) . "
		}
		
		html #page.cmsms_responsive #header .header_top .header_top_outer .header_top_inner .header_top_right .nav_wrap nav #top_line_nav li a {
			" . cmsms_color_css('border-top-color', $cmsms_option[CMSMS_SHORTNAME . '_header_top_dropdown_border']) . "
		}
	}
/***************** Finish Small Header Resolutions Color Scheme Rules ******************/


/***************** Start Small Header Resolutions Color Scheme Rules ******************/
	#footer .footer_inner .footer_nav > li:before {
		" . cmsms_color_css('background-color', $cmsms_option[CMSMS_SHORTNAME . '_footer_hover']) . "
	}
	
	#footer .footer_inner .social_wrap a[class^=\"cmsms-icon-\"]:before, 
	#footer .footer_inner .social_wrap a[class*=\" cmsms-icon-\"]:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_footer_hover']) . "
	}
	
	#footer .footer_inner .social_wrap a[class^=\"cmsms-icon-\"]:hover:before, 
	#footer .footer_inner .social_wrap a[class*=\" cmsms-icon-\"]:hover:before {
		" . cmsms_color_css('color', $cmsms_option[CMSMS_SHORTNAME . '_footer_link']) . "
	}
";
	
	
	return $custom_css;
}

