<?php  
if ( ! function_exists( 'ecommerce_comp_retailsy_banner' ) ) :
	function ecommerce_comp_retailsy_banner() {
	$banner_contents 		= get_theme_mod('banner_contents',retailsy_get_banner_default());
?>	
<section class="jcs-section-2 pb-default banner-home">
	<div class="jcs-container">
		<div class="jcs-row banner-cards">
			<?php
				if ( ! empty( $banner_contents ) ) {
				$banner_contents = json_decode( $banner_contents );
				foreach ( $banner_contents as $banner_item ) {
					$title = ! empty( $banner_item->title ) ? apply_filters( 'retailsy_translate_single_string', $banner_item->title, 'Banner section' ) : '';
					$text = ! empty( $banner_item->text ) ? apply_filters( 'retailsy_translate_single_string', $banner_item->text, 'Banner section' ) : '';
					$button = ! empty( $banner_item->text2 ) ? apply_filters( 'retailsy_translate_single_string', $banner_item->text2, 'Banner section' ) : '';
					$link = ! empty( $banner_item->link ) ? apply_filters( 'retailsy_translate_single_string', $banner_item->link, 'Banner section' ) : '';
					$image = ! empty( $banner_item->image_url) ? apply_filters( 'retailsy_translate_single_string', $banner_item->image_url,'Banner section' ) : '';
			?>
				<div class="col-12 col-md-6 col-lg-4 product-banner-card">
					<div class="card-display">
						<div class="item-wrapper card-overlay">
							<div class="image-shine">
								<?php if(!empty($image)): ?>
									<img src="<?php echo esc_url($image); ?>" />
								<?php endif; ?>
								
								<div class="section-2-left">
								
									<?php if(!empty($title)): ?>
										<div class="section-2-name"><?php echo esc_html($title); ?></div>
									<?php endif; ?>
									
									<?php if(!empty($text)): ?>
										<div class="section-2-discount"><?php echo esc_html($text); ?></div>
									<?php endif; ?>
									
									<?php if(!empty($button)): ?>
										<div class="card-button-bubble-container">
											<a href="<?php echo esc_url($link); ?>" class="cbb smoke"><?php echo esc_html($button); ?><i
													class="fa fa-chevron-right"></i>
											</a>
										</div>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } } ?>
		</div>
	</div>
</section>
<?php
}
endif;
if ( function_exists( 'ecommerce_comp_retailsy_banner' ) ) {
$section_priority = apply_filters( 'retailsy_section_priority', 13, 'ecommerce_comp_retailsy_banner' );
add_action( 'retailsy_sections', 'ecommerce_comp_retailsy_banner', absint( $section_priority ) );
}
?>