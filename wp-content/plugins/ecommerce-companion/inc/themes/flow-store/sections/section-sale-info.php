<?php 
	if ( ! function_exists( 'ecommerce_comp_flossy_saleinfo' ) ) :
	function ecommerce_comp_flossy_saleinfo(){
	$sale1_hs				= get_theme_mod('sale1_hs','1');
	$sales_info_contents 	= get_theme_mod('sales_info_contents',flossy_get_sales_info_default());
	if($sale1_hs == '1'){
?>
	<!-- INFO SECTION -->
        <section class="salesinfo-home info-section  wow fadeInLeft slower" id="info-section2">
            <div class="container">
                <div class="row info-service-flex align-items-center justify-content-between">
                    <?php 
						if ( ! empty( $sales_info_contents ) ) {
						$sales_info_contents = json_decode( $sales_info_contents );
						foreach ( $sales_info_contents as $info_item ) {
							$title = ! empty( $info_item->title ) ? apply_filters( 'flossy_translate_single_string', $info_item->title, 'Banner Info section' ) : '';
							$subtitle = ! empty( $info_item->subtitle ) ? apply_filters( 'flossy_translate_single_string', $info_item->subtitle, 'Banner Info section' ) : '';
							$button = ! empty( $info_item->text2 ) ? apply_filters( 'flossy_translate_single_string', $info_item->text2, 'Banner Info section' ) : '';
							$link = ! empty( $info_item->link ) ? apply_filters( 'flossy_translate_single_string', $info_item->link, 'Banner Info section' ) : '';
							$image = ! empty( $info_item->image_url ) ? apply_filters( 'flossy_translate_single_string', $info_item->image_url, 'Banner Info section' ) : '';
					?>
						<div class="col-12 col-md-6 col-xl-4 info-service">
								<div class="box-info" <?php if ( ! empty( $image ) ) : ?>  style="background: url('<?php echo esc_url($image); ?>') no-repeat; background-position:center;background-size:cover; background-color: rgba(var(--pr), 0.5);" <?php endif; ?>>
									<span></span>
									<span></span>
									<span></span>
									<span></span>
									<div class="content">
										<?php if ( ! empty( $subtitle ) ) : ?>
											<h3 class="reverse-support-1">
												<?php echo esc_html($subtitle); ?>
											</h3>
										<?php endif; ?>
										
										<?php if ( ! empty( $title ) ) : ?>
											<h3 class="reverse-support-2">
												<?php echo wp_kses_post($title); ?>
											</h3>
										<?php endif; ?>
										<?php if ( ! empty( $button ) ) : ?>
											<a href="<?php echo esc_url($link); ?>" class="fl-btn2"><?php echo esc_html($button); ?></a>
										<?php endif; ?>	                         
									</div>
								</div>
						</div>
						<?php }} ?>
					</div>
				</div>
			</section>
        <!--END: INFO SECTION -->
	<?php }} endif;
	
if ( function_exists( 'ecommerce_comp_flossy_saleinfo' ) ) {
$section_priority = apply_filters( 'flossy_section_priority', 12, 'ecommerce_comp_flossy_saleinfo' );
add_action( 'flossy_sections', 'ecommerce_comp_flossy_saleinfo', absint( $section_priority ) );
}?>