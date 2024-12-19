<?php  
	if ( ! function_exists( 'ecommerce_comp_flossy_saleinfo2' ) ) :
	function ecommerce_comp_flossy_saleinfo2(){
	$sale2_hs				= get_theme_mod('sale2_hs','1');
	$sales_info2_contents 	= get_theme_mod('sales_info2_contents',flossy_get_sales_info2_default());
	$sales_info2_bg_img			= get_theme_mod('sales_info2_bg_img', ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/flow-store/assets/images/sales-info2/banner.jpg');
	if($sale2_hs == '1'){
?>
<!-- START: PRODUCT-BANNER -->
<section class="salesinfo-home2 product-banner mt-5" id="product-banner2">
	<div class="container-fluid " <?php if(!empty($sales_info2_bg_img)){ ?> style="background:url('<?php echo esc_url($sales_info2_bg_img); ?>') fixed no-repeat center top / cover rgb(255 255 255 / 0.25);background-blend-mode:multiply;" <?php } ?>>
	   
		<div class="container">
			<div class="row">
				<?php 
					if ( ! empty( $sales_info2_contents ) ) {
					$sales_info2_contents = json_decode( $sales_info2_contents );
					foreach ( $sales_info2_contents as $info_item ) {
						$title = ! empty( $info_item->title ) ? apply_filters( 'flossy_translate_single_string', $info_item->title, 'Banner Info section' ) : '';
						$subtitle = ! empty( $info_item->subtitle ) ? apply_filters( 'flossy_translate_single_string', $info_item->subtitle, 'Banner Info section' ) : '';
						$button = ! empty( $info_item->text2 ) ? apply_filters( 'flossy_translate_single_string', $info_item->text2, 'Banner Info section' ) : '';
						$link = ! empty( $info_item->link ) ? apply_filters( 'flossy_translate_single_string', $info_item->link, 'Banner Info section' ) : '';
						$image = ! empty( $info_item->image_url ) ? apply_filters( 'flossy_translate_single_string', $info_item->image_url, 'Banner Info section' ) : '';
				?>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="banner-product-wrapper d-flex align-items-center">
							<div id="circle-small"></div>
							<div id="circle-medium"></div>
							<div id="circle-large"></div>
							<div class="product-info">
								<?php if ( ! empty( $title ) ) : ?>
									<h4 class="product-categ-1">
										<?php echo wp_kses_post($title); ?>
									</h4>
								<?php endif; ?>
								
								<?php if ( ! empty( $subtitle ) ) : ?>
									<h4 class="product-categ-2">
										<?php echo esc_html($subtitle); ?>
									</h4>
								<?php endif; ?>
								
								<?php if ( ! empty( $button ) ) : ?>
									<a href="<?php echo esc_url($link); ?>" class="fl-btn2"><?php echo esc_html($button); ?></a>
								<?php endif; ?>
							</div>
							<?php if ( ! empty( $image ) ) : ?>
								<div class="product-image">
									<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr__('Image','ecommerce-companion'); ?>"> 
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php }} ?>
			</div>
		</div>
	</div>
</section>
<!-- END: PRODUCT-BANNER -->
	<?php }} endif;
	
if ( function_exists( 'ecommerce_comp_flossy_saleinfo2' ) ) {
$section_priority = apply_filters( 'flossy_section_priority', 12, 'ecommerce_comp_flossy_saleinfo2' );
add_action( 'flossy_sections', 'ecommerce_comp_flossy_saleinfo2', absint( $section_priority ) );
}?>