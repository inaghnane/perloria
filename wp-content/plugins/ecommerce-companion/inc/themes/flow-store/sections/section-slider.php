<!--===// Start: Slider
    =================================--> 
<?php  
	if ( ! function_exists( 'ecommerce_comp_flossy_slider' ) ) :
	function ecommerce_comp_flossy_slider(){
	$slider_hs 						= get_theme_mod('slider_hs','1');
	$slider 						= get_theme_mod('slider',flossy_get_slider_default());
	if($slider_hs=='1'):
?>
	
<!--Start: Banner Slider  -->
<section class="banner" id="banner2">
	<div class="page-slider">
		<?php
			if ( ! empty( $slider ) ) {
			$slider = json_decode( $slider );
			foreach ( $slider as $slide_item ) {
				$title = ! empty( $slide_item->title ) ? apply_filters( 'flossy_translate_single_string', $slide_item->title, 'slider section' ) : '';
				
				$text = ! empty( $slide_item->text ) ? apply_filters( 'flossy_translate_single_string', $slide_item->text, 'slider section' ) : '';
				$button = ! empty( $slide_item->text2) ? apply_filters( 'flossy_translate_single_string', $slide_item->text2,'slider section' ) : '';
				$link = ! empty( $slide_item->link ) ? apply_filters( 'flossy_translate_single_string', $slide_item->link, 'slider section' ) : '';
				
				$image = ! empty( $slide_item->image_url ) ? apply_filters( 'flossy_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
				$open_new_tab = ! empty( $slide_item->open_new_tab ) ? apply_filters( 'flossy_translate_single_string', $slide_item->open_new_tab, 'slider section' ) : '';
		?>
			<div class="page-slider-wrapper">
				<?php if ( ! empty( $image ) ) : ?>
					<img src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_html($title); ?>" <?php endif; ?>>
				<?php endif; ?>	
				
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-wrap align-items-center justify-content-center">
							<div class="banner-text-section text-center">								
								<?php if(!empty($title)): ?>
									<h1 class=" slide-text banner-main-content" <?php if(!empty($slide_ttl_color)): ?> style="color:<?php echo esc_attr($slide_ttl_color); ?>" <?php endif; ?>><?php echo esc_html($title); ?></h1>
								<?php endif; ?>
								
								<?php if(!empty($text)): ?>
									<p class=" slide-text offer1" <?php if(!empty($slide_desc_color)): ?> style="color:<?php echo esc_attr($slide_desc_color); ?>" <?php endif; ?>><?php echo esc_html($text); ?></p>
								<?php endif; ?>
								
								<div class="d-flex gap-3 slide-text slider-btn align-items-center justify-content-center"
									>
									<?php if ( ! empty( $button ) ) : ?>
										<a href="<?php echo esc_url($link); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="fl-btn2"><span><?php echo esc_html($button); ?></span></a>
									<?php endif; ?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		<?php } } ?>
	</div>
</section>
<!--End: Banner Slider  -->
<?php
endif;}
endif;
if ( function_exists( 'ecommerce_comp_flossy_slider' ) ) {
$section_priority = apply_filters( 'flossy_section_priority', 11, 'ecommerce_comp_flossy_slider' );
add_action( 'flossy_sections', 'ecommerce_comp_flossy_slider', absint( $section_priority ) );
}
?>