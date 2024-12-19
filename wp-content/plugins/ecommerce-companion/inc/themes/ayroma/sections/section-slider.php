 <!--===// Start: Slider
    =================================--> 
<?php  
if ( ! function_exists( 'ecommerce_comp_ayroma_slider' ) ) :
	function ecommerce_comp_ayroma_slider() {
	$slider_setting_hs				= get_theme_mod('slider_setting_hs','1');		
	$slider 						= get_theme_mod('slider',aromatic_get_slider_default());
	if($slider_setting_hs=='1'):
?>	
<section class="banner slider1">
	<div class="page-slider">
		<?php
			if ( ! empty( $slider ) ) {
			$slider = json_decode( $slider );
			foreach ( $slider as $slide_item ) {
				$title = ! empty( $slide_item->title ) ? apply_filters( 'aromatic_translate_single_string', $slide_item->title, 'slider section' ) : '';
				$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'aromatic_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
				$subtitle2 = ! empty( $slide_item->subtitle2 ) ? apply_filters( 'aromatic_translate_single_string', $slide_item->subtitle2, 'slider section' ) : '';
				$text = ! empty( $slide_item->text ) ? apply_filters( 'aromatic_translate_single_string', $slide_item->text, 'slider section' ) : '';
				$button = ! empty( $slide_item->text2) ? apply_filters( 'aromatic_translate_single_string', $slide_item->text2,'slider section' ) : '';
				$link = ! empty( $slide_item->link ) ? apply_filters( 'aromatic_translate_single_string', $slide_item->link, 'slider section' ) : '';
				$image = ! empty( $slide_item->image_url ) ? apply_filters( 'aromatic_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
				$image2 = ! empty( $slide_item->image_url2 ) ? apply_filters( 'aromatic_translate_single_string', $slide_item->image_url2, 'slider section' ) : '';
				$open_new_tab = ! empty( $slide_item->open_new_tab ) ? apply_filters( 'aromatic_translate_single_string', $slide_item->open_new_tab, 'slider section' ) : '';
				$align = ! empty( $slide_item->slide_align ) ? apply_filters( 'aromatic_translate_single_string', $slide_item->slide_align, 'slider section' ) : '';
		?>
			<div class="page-slider-wrapper slider-content-<?php echo esc_attr($align); ?>">
				<?php if(!empty($image)): ?>
					<img src="<?php echo esc_url($image); ?>" alt="">
				<?php endif; ?>
				<div class="container">
					<div class="row">
						<div class="col-md-6 d-flex align-items-center">
							<div class="banner-text-section">
								<?php if(!empty($title)): ?>
									<div class="offer down" <?php if(!empty($slide_ttl_color)): ?> style="color:<?php echo esc_attr($slide_ttl_color); ?>" <?php endif; ?>><?php echo esc_html($title); ?></div>
								<?php endif; ?>
								
								<?php if(!empty($subtitle)): ?>
									<h1 class="banner-main-content down " <?php if(!empty($slide_subttl_color)): ?> style="color:<?php echo esc_attr($slide_subttl_color); ?>" <?php endif; ?>><?php echo esc_html($subtitle); ?></h1>
								<?php endif; ?>
								
								<?php if(!empty($text)): ?>
									<p class="banner-item-desc" <?php if(!empty($slide_desc_color)): ?> style="color:<?php echo esc_attr($slide_desc_color); ?>" <?php endif; ?>><?php echo esc_html($text); ?></p>
								<?php endif; ?>	
								
								
								<div class="d-flex slider-btn align-items-center bt" role="button">
									<?php if(!empty($button)): ?>
										<a href="<?php echo esc_url($link); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="cta-01"><span><?php echo esc_html($button); ?></span></a>
									<?php endif; ?>	
									
									<?php if(!empty($subtitle2)): ?>
										<span class="slider-price-text" <?php if(!empty($slide_subttl2_color)): ?> style="color:<?php echo esc_attr($slide_subttl2_color); ?>" <?php endif; ?>><?php echo esc_html($subtitle2); ?></span>
									<?php endif; ?>		
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<?php if(!empty($image2)): ?>
								<div class="page-image-slider"><img width="780" height="460"
										src="<?php echo esc_url($image2); ?>" alt="">
								</div>
							<?php endif; ?>	
						</div>
					</div>
				</div>
			</div>
		<?php } } ?>
	</div>
	<div class="jcs-container">
		<div class="outer-bullet-wrapper in2">
			<div id="bullet-wrapper">
				<div class="bullets"> </div>
				<div class="bullets"> </div>
				<div class="bullets"> </div>
			</div>
		</div>
	</div>
	<div class="slider-arrows">
		<div class="jcs-container">
			<div class="outer-nav-wrapper in2 active">
				<div id="nav-wrapper" class="bt">
					<a href="javascript:void(0)" class="prev1 prev navigator cta-01"><span><i
								class="fa fa-chevron-left"></i>
						</span></a>
					<a href="javascript:void(0)" class="next1 next navigator cta-01"><span><i
								class="fa fa-chevron-right"></span></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
endif; }
endif;
if ( function_exists( 'ecommerce_comp_ayroma_slider' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 11, 'ecommerce_comp_ayroma_slider' );
add_action( 'aromatic_sections', 'ecommerce_comp_ayroma_slider', absint( $section_priority ) );
}
?>