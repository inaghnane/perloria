<?php  
if ( ! function_exists( 'ecommerce_comp_storely_slider' ) ) :
	function ecommerce_comp_storely_slider() {
	$slider_hs 						= get_theme_mod('slider_hs','1');	
	$slider 						= get_theme_mod('slider5',storely_get_slider5_default());
	if($slider_hs=='1'):	
?>	
<div id="slider-section" class="slider-section">
	<div class="slider-area">
		<div class="home-slider">
			<?php
				if ( ! empty( $slider ) ) {
				$slider = json_decode( $slider );
				foreach ( $slider as $slide_item ) {
					$title = ! empty( $slide_item->title ) ? apply_filters( 'storely_translate_single_string', $slide_item->title, 'slider section' ) : '';
					$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
					$subtitle2 = ! empty( $slide_item->subtitle2 ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle2, 'slider section' ) : '';
					$subtitle3 = ! empty( $slide_item->subtitle3 ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle3, 'slider section' ) : '';
					$subtitle4 = ! empty( $slide_item->subtitle4 ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle4, 'slider section' ) : '';
					$text = ! empty( $slide_item->text ) ? apply_filters( 'storely_translate_single_string', $slide_item->text, 'slider section' ) : '';
					$button = ! empty( $slide_item->text2) ? apply_filters( 'storely_translate_single_string', $slide_item->text2,'slider section' ) : '';
					$link = ! empty( $slide_item->link ) ? apply_filters( 'storely_translate_single_string', $slide_item->link, 'slider section' ) : '';
					$image = ! empty( $slide_item->image_url ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
					$image2 = ! empty( $slide_item->image_url2 ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url2, 'slider section' ) : '';
					$open_new_tab = ! empty( $slide_item->open_new_tab ) ? apply_filters( 'storely_translate_single_string', $slide_item->open_new_tab, 'slider section' ) : '';
					$align = ! empty( $slide_item->slide_align ) ? apply_filters( 'storely_translate_single_string', $slide_item->slide_align, 'slider section' ) : '';
			?>
				<div class="home-slider-info-wrap" style="background-image:url('<?php echo esc_url($image); ?>'); background-size: cover;">
				<div class="slider-overlay"></div>
					 <div class="container">
                        <div class="canvas canvas75 float-lg-right">
							<div class="home-slider-info-wrapper">
								<div class="home-slider-vertical">
									<div class="home-slider-align">
										<div class="container">
											<div class="row slider-silde-info align-items-lg-center">
												<div class="col-lg-7 col-12">
													<?php if(!empty($title) || !empty($subtitle)): ?>
														<h6 class="slide-subtitle" data-animation="fadeInUp"
															data-delay="150ms">
															<div class="text-primary" <?php if(!empty($slide_ttl_color)): ?> style="color:<?php echo esc_attr($slide_ttl_color); ?>" <?php endif; ?>><?php echo esc_html($title); ?></div><span <?php if(!empty($slide_subttl_color)): ?> style="color:<?php echo esc_attr($slide_subttl_color); ?>" <?php endif; ?>><?php echo esc_html($subtitle); ?></span>
														</h6>
													<?php endif; ?>
													
													<div class="slide-text-wrapper">
														<?php if(!empty($subtitle2)): ?>
															<h2 class="slide-text slide-text-title"
																data-animation="fadeInUp" data-delay="200ms" <?php if(!empty($slide_subttl2_color)): ?> style="color:<?php echo esc_attr($slide_subttl2_color); ?>" <?php endif; ?>>
																<?php echo esc_html($subtitle2); ?>
															</h2>
														<?php endif; ?>
														
														<?php if(!empty($subtitle3) || !empty($subtitle4)): ?>
															<p class="slide-text slide-text-description"
																data-animation="fadeInUp" data-delay="500ms" <?php if(!empty($slide_subttl3_color)): ?> style="color:<?php echo esc_attr($slide_subttl3_color); ?>" <?php endif; ?>>
																<?php echo esc_html($subtitle3); ?> <span
																	class="text-primary" <?php if(!empty($slide_subttl4_color)): ?> style="color:<?php echo esc_attr($slide_subttl4_color); ?>" <?php endif; ?>><?php echo esc_html($subtitle4); ?></span>
															</p>
														<?php endif; ?>
														
														<?php if(!empty($button)): ?>
															<a href="<?php echo esc_url($link); ?>"
																class="slide-text slide-text-btn btn btn-white"
																data-animation="fadeInUp"
																data-delay="800ms"><?php echo esc_html($button); ?> <i class="fa fa-angle-right"></i>
															</a>
														<?php endif; ?>
													</div>
												</div>
												<div class="col-lg-5 col-12 mb-av-0 mx-auto my-auto">
													<div class="side-img">
														<?php if(!empty($image2)): ?>
															<img src="<?php echo esc_url($image2); ?>" />
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } } ?>
		</div>
		<div class="container">
			<div class="tns-nav">
				<button type="button" role="presentation" class="tns-prev"><i
						class="fa fa-angle-left"></i></button>
				<button type="button" role="presentation" class="tns-next"><i
						class="fa fa-angle-right"></i></button>
			</div>
		</div>
	</div>
</div>			
<?php
endif;}
endif;
if ( function_exists( 'ecommerce_comp_storely_slider' ) ) {
$section_priority = apply_filters( 'storely_section_priority', 11, 'ecommerce_comp_storely_slider' );
add_action( 'storely_sections', 'ecommerce_comp_storely_slider', absint( $section_priority ) );
}
?>