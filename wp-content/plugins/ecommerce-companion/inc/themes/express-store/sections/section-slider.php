<?php  
if ( ! function_exists( 'ecommerce_comp_retailsy_slider' ) ) :
	function ecommerce_comp_retailsy_slider() {
	$slider_ttl 			= get_theme_mod('slider_ttl',__('Exclusive Offers 30% Off','ecommerce-companion'));
	$slider_subttl 			= get_theme_mod('slider_subttl',__('Hot Trending Collection 2023','ecommerce-companion'));
	$slider_desc 			= get_theme_mod('slider_desc',__('Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus omnis laborum nulla aut eaque, quidem, atque eum at incidunt, nesciunt officiis  mollitia voluptas saepe quae neque? Optio dicta aliquid ipsa?','ecommerce-companion'));
	$slider_bg_img 			= get_theme_mod('slider_bg_img');
	$slider_product_img		= get_theme_mod('slider_product_img', esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/express-store/assets/images/homepage1/page-slider/product.png'));
	$slider_btn_lbl 		= get_theme_mod('slider_btn_lbl',__('Shop Now','ecommerce-companion'));
	$slider_btn_url 		= get_theme_mod('slider_btn_url','#');
?>	
<section class="banner no_slider banner2">
	<div class="page2-slider">		
			<div class="page2-slider-wrapper">
				<?php if ( ! empty( $slider_bg_img ) ) : ?>
					<img src="<?php echo esc_url($slider_bg_img); ?>" <?php if ( ! empty( $slider_ttl ) ) : ?>alt="<?php echo esc_html($slider_ttl); ?>"<?php endif; ?>>
				<?php endif; ?>	
				<div class="jcs-container">
					<div class="jcs-row gap30 ais" style="width: 100%;">
					<?php if ( ! empty( $slider_product_img ) ) : ?>
							<div class="page2-image-slider"><img
									src="<?php echo esc_url($slider_product_img); ?>" alt="">
							</div>
						<?php endif; ?>

						<div class="banner-text-section">
							<?php if(!empty($slider_ttl)): ?>
								<div class="offer down animate seven"><?php echo esc_html($slider_ttl); ?></div>
							<?php endif; ?>
							
							<?php if(!empty($slider_subttl)): ?>
								<div class="banner-main-content down animate seven"><?php echo esc_html($slider_subttl); ?></div>
							<?php endif; ?>
							
							<div class="banner-item-desc animate seven down"><?php echo esc_html($slider_desc); ?></div>							
							<div class="bubble-flex item-wrapper gap10">
								<?php if(!empty($slider_btn_lbl)): ?>
									<a href="<?php echo esc_url($slider_btn_url); ?>" class="cbb orange"><span><?php echo esc_html($slider_btn_lbl); ?></span> <i class="fa fa-chevron-right"></i></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>	
</section>
<?php
}
endif;
if ( function_exists( 'ecommerce_comp_retailsy_slider' ) ) {
$section_priority = apply_filters( 'retailsy_section_priority', 11, 'ecommerce_comp_retailsy_slider' );
add_action( 'retailsy_sections', 'ecommerce_comp_retailsy_slider', absint( $section_priority ) );
}
?>