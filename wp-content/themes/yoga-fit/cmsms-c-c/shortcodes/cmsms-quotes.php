<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.0
 * 
 * Content Composer Quotes Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));
	
	
if ($columns == '4') {
	$new_columns = 'quote_four';
} elseif ($columns == '3') {
	$new_columns = 'quote_three';
} elseif ($columns == '2') {
	$new_columns = 'quote_two';
} else {
	$new_columns = 'quote_one';
}


global $quote_mode,
	$quote_counter,
	$column_count;


$column_count = $columns;

$unique_id = uniqid();

$quote_mode = $mode;

$quotes_out = '';

$quote_counter = 0;


$quote_out = do_shortcode($content);


if ($quote_mode == 'slider') {
	$quotes_out .= '<div class="cmsms_quotes_slider_wrap"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
		'<script type="text/javascript">' . 
			'jQuery(document).ready(function () { ' . 
				'jQuery("#cmsms_quotes_slider_' . $unique_id . '").owlCarousel( { ' . 
					'singleItem : true, ' . 
					(($speed == 0) ? 'autoPlay : false, ' : 'autoPlay : ' . ($speed * 1000) . ',') . 
					'stopOnHover: true, ' . 
					'pagination: true, ' . 
					'autoHeight : true, ' . 
					'navigation : false, ' . 
					'navigationText : 	[ ' . 
						'"<span class=\"cmsms_prev_arrow\"><span></span></span>", ' . 
						'"<span class=\"cmsms_next_arrow\"><span></span></span>" ' . 
					'] ' . 
				'} );' . 
			'} );' . 
		'</script>' . "\n" . 
		'<div id="cmsms_quotes_slider_' . $unique_id . '" class="cmsms_quotes cmsms_quotes_slider owl-carousel' . 
		(($classes != '') ? ' ' . $classes : '') . 
		'">' . "\n" . 
			$quote_out . 
		'</div>' . "\n" . 
	'</div>';
} else if ($quote_mode == 'slider_full') {
	$quotes_out .= '<div class="cmsms_quotes_slider_full_wrap"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
		'<script type="text/javascript">' . 
			'jQuery(document).ready(function () { ' . 
				'jQuery("#cmsms_quotes_slider_' . $unique_id . '").owlCarousel( { ' . 
					'singleItem : true, ' . 
					(($speed_full == 0) ? 'autoPlay : false, ' : 'autoPlay : ' . ($speed_full * 1000) . ',') . 
					'stopOnHover: true, ' . 
					'pagination: true, ' . 
					'transitionStyle:"fade", ' . 
					'navigation : true, ' . 
					'navigationText : 	[ ' . 
						'"<span class=\"cmsms_prev_arrow\"><span></span></span>", ' . 
						'"<span class=\"cmsms_next_arrow\"><span></span></span>" ' . 
					'] ' . 
				'} );' . 
			'} );' . 
		'</script>' . "\n" . 
		'<div id="cmsms_quotes_slider_' . $unique_id . '" class="cmsms_quotes cmsms_quotes_slider_full owl-carousel' . 
		(($classes != '') ? ' ' . $classes : '') . 
		'">' . "\n" . 
			$quote_out . 
		'</div>' . "\n" . 
	'</div>';
} else {
	$quotes_out .= '<div class="cmsms_quotes quote_grid' . ' ' . $new_columns . 
	(($classes != '') ? ' ' . $classes : '') . 
	'"' . 
	(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
	'>' . "\n" . 
	'<div class="quote_vert"></div>' . 
		'<div class="quotes_list">' . "\n" . 
			$quote_out . 
		'</div>' . "\n" . 
	'</div>';
}

$out = $quotes_out;
