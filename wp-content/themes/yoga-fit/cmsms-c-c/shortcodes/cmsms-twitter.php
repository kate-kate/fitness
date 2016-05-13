<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version 	1.0.0
 * 
 * Content Composer Twitter Stripe Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$out = '';


$unique_id = uniqid();


if ($user != '') {
	$out .= '<div class="cmsms_twitter_wrap">' . 
		'<div>' . 
			'<script type="text/javascript">' . 
				'jQuery(document).ready(function () { ' . 
					'jQuery("#cmsms_twitter_' . $unique_id . '").owlCarousel( { ' . 
						'singleItem : true, ' . 
						'transitionStyle: "fade", ' . 
						'stopOnHover: true, ' . 
						'autoHeight : true, ' . 
						'pagination: false, ' . 
						(($control == 'true') ? 'navigation : true, ' : '') . 
						(($autoplay != 'true') ? 'autoPlay : false, ' : 'autoPlay : ' . ($speed * 1000) . ',') . 
						'navigationText : 	[ ' . 
							'"<span class=\"cmsms_prev_arrow\"><span></span></span>", ' . 
							'"<span class=\"cmsms_next_arrow\"><span></span></span>" ' . 
						'] ' . 
					'} );' . 
				'} );' . 
			'</script>' . 
		'</div>' . "\n" . 
		'<div class="cmsms_theme_icon_user_twitter twr_icon"></div>' . "\n" . 
		'<div id="cmsms_twitter_' . $unique_id . '" class="owl-carousel cmsms_twitter' . 
		(($classes != '') ? ' ' . $classes : '') . 
		'"' . 
		(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
		(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . 
		'>' . "\n";
		
			$tweets = cmsms_get_tweets($user, $count);
			
			if ($tweets != '') {
				foreach ($tweets as $t) {
					$out .= '<div class="cmsms_twitter_item">' . "\n" . 
						(($date == 'true') ? '<abbr title="" class="published">' . human_time_diff( $t['time'], current_time('timestamp') ) . ' ' . __('ago', 'cmsms_content_composer') . '</abbr>' : '') . 
						'<span class="cmsms_twitter_item_content">' . "\n" . $t['text'] . '</span>' . "\n" . 
					'</div>' . "\n";
				}
			} else {
				echo '<div class="cmsms_notice cmsms_notice_error cmsms_theme_icon_cancel">' . "\n" . 
					'<div class="notice_content">' . "\n" . 
						'<p>' . __('Please add your Twitter API keys', 'yoga-fit') . ', ' . '<a target="_blank" href="http://docs.cmsmasters.net/admin2/twitter-functionality/">' . __('read more how', 'yoga-fit') . '</a></p>' . "\n" . 
					'</div>' . "\n" . 
				'</div>' . "\n";
			}
		
		$out .= '</div>' . 
	'</div>';
}

