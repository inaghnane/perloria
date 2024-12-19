<?php  
	if ( ! function_exists( 'ecommerce_comp_flossy_slider' ) ) :
	function ecommerce_comp_flossy_slider(){
	$slider_hs 						= get_theme_mod('slider_hs','1');
	$slider 						= get_theme_mod('slider',flossy_get_slider_default());
	if($slider_hs=='1'):
?>

<!--Start: Banner Slider  -->
<section class="banner " id="banner">
	<div class="page-slider">
		<?php
			if ( ! empty( $slider ) ) {
			$slider = json_decode( $slider );
			foreach ( $slider as $slide_item ) {
				$title = ! empty( $slide_item->title ) ? apply_filters( 'flossy_translate_single_string', $slide_item->title, 'slider section' ) : '';
				$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'flossy_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
				$subtitle2 = ! empty( $slide_item->subtitle2 ) ? apply_filters( 'flossy_translate_single_string', $slide_item->subtitle2, 'slider section' ) : '';
				$subtitle3 = ! empty( $slide_item->subtitle3 ) ? apply_filters( 'flossy_translate_single_string', $slide_item->subtitle3, 'slider section' ) : '';
				$text = ! empty( $slide_item->text ) ? apply_filters( 'flossy_translate_single_string', $slide_item->text, 'slider section' ) : '';
				$button = ! empty( $slide_item->text2) ? apply_filters( 'flossy_translate_single_string', $slide_item->text2,'slider section' ) : '';
				$link = ! empty( $slide_item->link ) ? apply_filters( 'flossy_translate_single_string', $slide_item->link, 'slider section' ) : '';
				$image = ! empty( $slide_item->image_url ) ? apply_filters( 'flossy_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
		?>
		<div class="page-slider-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex flex-wrap align-items-center justify-content-center">
						<div class="banner-text-section">
							<?php if(!empty($title) || !empty($subtitle)  || !empty($subtitle2) || !empty($subtitle3)): ?>
								<div class=" slide-text subtitle" <?php if(!empty($slide_subttl_color)): ?> style="color:<?php echo esc_attr($slide_subttl_color); ?>" <?php endif; ?>><?php echo esc_html($subtitle); ?></div>
								<h1 class=" slide-text banner-main-content"><?php echo esc_html($title); ?></h1>
								<p class=" slide-text offer1"><?php echo esc_html($subtitle2); ?></p>
								<p class=" slide-text offer2"><?php echo wp_kses_post($subtitle3); ?></p>
							<?php endif; ?>
							
							<div class="d-flex gap-3 slide-text slider-btn align-items-center justify-content-center">
								<?php if ( ! empty( $button ) ) : ?>
									<a href="<?php echo esc_url($link); ?>" target='_blank' class="fl-btn1"><span><?php echo esc_html($button); ?></span></a>
								<?php endif; ?>
								
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<?php if ( ! empty( $image ) ) : ?>
							<div class="page-image-slider">
								<img src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_html($title); ?>" <?php endif; ?>>
							</div>
						<?php endif; ?>							
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