<?php
/**
 * @package 	WordPress
 * @subpackage 	Yoga Fit
 * @version		1.0.0
 * 
 * Quotes Grid Format Template
 * Created by CMSMasters
 * 
 */


global $quote_content,
	$quote_image,
	$quote_name,
	$quote_subtitle,
	$quote_link,
	$quote_website;

?>

<!--_________________________ Start Grid Article _________________________ -->

<article class="cmsms_quote_inner">
	<?php
	if ($quote_image != '') {
		echo '<div class="quote_image_wrap">' . "\n" . 
			'<figure class="quote_image">' . "\n" . 
				wp_get_attachment_image($quote_image, 'square-thumb') . 
			'</figure>' . "\n" . 
		'</div>' . "\n";
	}
	?>
	<div class="quote_content_wrap">
		<?php
		if ($quote_name != '') {
			echo '<h3 class="quote_title">' . $quote_name . '</h3>' . "\n";
		}
		
		if ($quote_subtitle != '') {
			echo '<span class="quote_subtitle">' . $quote_subtitle . '</span>' . "\n";
		}
	
		if ($quote_subtitle != '' && ($quote_link != '' || $quote_website != '')) {
			echo ' - ';
		}
		
		if ($quote_link != '' && $quote_website != '') {
			echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . $quote_website . '</a>' . "\n";
		} elseif ($quote_link == '' && $quote_website != '') {
			echo '<span class="quote_site">' . $quote_website . '</span>' . "\n";
		} elseif ($quote_link != '' && $quote_website == '') {
			echo '<a class="quote_link" target="_blank" href="' . esc_url($quote_link) . '">' . $quote_link . '</a>' . "\n";
		}
		
		echo cmsms_divpdel('<div class="quote_content">' . "\n" . 
			do_shortcode(wpautop($quote_content)) . 
		'</div>' . "\n");
		?>
	</div>
</article>
<!--_________________________ Finish Grid Article _________________________ -->

