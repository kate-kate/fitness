<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 * 
 * @cmsms_package 	Yoga Fit
 * @cmsms_version 	1.0.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;


// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

?>
<li <?php post_class(); ?>>
	<article class="product_inner">
		<?php 
			woocommerce_show_product_loop_sale_flash();
			
			$availability = $product->get_availability();

			if (esc_attr($availability['class']) == 'out-of-stock') {
				echo apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</span>', $availability['availability']);
			}
		?>	
		<div class="cmsms_product_img_wrap">
			<div class="cmsms_product_footer entry-meta">
				<div class="cmsms_product_footer_inner">
				<?php 
					cmsms_woocommerce_add_to_cart_button();
					
					cmsms_woocommerce_rating('cmsms_theme_icon_star_empty', 'cmsms_theme_icon_star_full');
				?>
				</div>
			</div>
			<figure class="cmsms_product_img preloader">
				<?php woocommerce_template_loop_product_thumbnail(); ?>
				<span class="product_hover"></span>
			</figure>
		</div>
		<header class="entry-header cmsms_product_header">
			<h4 class="entry-title cmsms_product_title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h4>
		</header>
		<div class="cmsms_product_info">
		<?php
			woocommerce_template_loop_price();
		?>
		</div>
	</article>
</li>