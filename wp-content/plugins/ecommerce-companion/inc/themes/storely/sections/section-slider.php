<?php  
if ( ! function_exists( 'ecommerce_comp_storely_slider' ) ) :
	function ecommerce_comp_storely_slider() {
	$slider_hs 						= get_theme_mod('slider_hs','1');	
	$slider 						= get_theme_mod('slider',storely_get_slider_default());
	if($slider_hs=='1'):	
?>	
<div id="slider-section" class="slider-section st-pb-default">
	<div class="container">
		<div class="row justify-content-end">
			<!--div class="col-lg-3 col-12"></div-->
			<div class="canvas">
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
							$text = ! empty( $slide_item->text ) ? apply_filters( 'storely_translate_single_string', $slide_item->text, 'slider section' ) : '';
							$button = ! empty( $slide_item->text2) ? apply_filters( 'storely_translate_single_string', $slide_item->text2,'slider section' ) : '';
							$link = ! empty( $slide_item->link ) ? apply_filters( 'storely_translate_single_string', $slide_item->link, 'slider section' ) : '';
							$image = ! empty( $slide_item->image_url ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
							$image2 = ! empty( $slide_item->image_url2 ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url2, 'slider section' ) : '';
							$align = ! empty( $slide_item->slide_align ) ? apply_filters( 'storely_translate_single_string', $slide_item->slide_align, 'slider section' ) : '';
					?>
						<div class="home-slider-info-wrap">
							<?php if ( ! empty( $image ) ) : ?>
								<img class="home-slider-image <?php if(!empty($image2)): echo esc_attr_e('side-item-image'); endif; ?>" src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?>alt="<?php echo esc_attr($title); ?>"<?php endif; ?>>
							<?php endif; ?>	
							<div class="home-slider-info-wrapper">
								<div class="home-slider-vertical">
									<div class="home-slider-align">
										<div class="container">
										<div class="row slider-silde-info">
											<?php if(!empty($image2)): ?>
											<div class="col-lg-7 col-12 my-auto">
											<?php else: ?>
											<div class="col-lg-12 col-12">
											<?php endif; ?>
													<?php if(!empty($title) || !empty($subtitle)  || !empty($subtitle2)): ?>
														<h6 class="slide-subtitle" data-animation="fadeInUp" data-delay="150ms"><?php echo esc_html($title); ?> <span class="text-primary"><?php echo esc_html($subtitle); ?></span> <?php echo esc_html($subtitle2); ?></h6>
													<?php endif; ?>
													
													<div class="slide-text-wrapper">
														<?php if(!empty($subtitle3)): ?>
															<h2 class="slide-text slide-text-title" data-animation="fadeInUp" data-delay="200ms"><?php echo esc_html($subtitle3); ?></h2>
														<?php endif; ?>	
														
														<?php if(!empty($text)): ?>
															<p class="slide-text slide-text-description" data-animation="fadeInUp" data-delay="500ms">
																<?php echo esc_html($text); ?></h2>                       
															</p>
														<?php endif; ?>
														
														<?php if ( ! empty( $button ) ) : ?>
															<a href="<?php echo esc_url($link); ?>" class="slide-text slide-text-btn btn btn-primary" data-animation="fadeInUp" data-delay="800ms"><?php echo esc_html($button); ?></h2> <i class="fa fa-angle-right"></i></a>
														<?php endif; ?>
														
													</div>
											</div>
											<?php if(!empty($image2)): ?>
												<div class="col-lg-5 col-12 mb-av-0 mx-auto my-auto">
													<div class="side-img">
														<img src="<?php echo esc_url($image2); ?>" />
													</div>	
												</div>
											<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php } } ?>
					</div>
					<div class="tns-nav">
						<button type="button" role="presentation" class="tns-prev"><i
								class="fa fa-angle-left"></i></button>
						<button type="button" role="presentation" class="tns-next"><i
								class="fa fa-angle-right"></i></button>
					</div>
				</div>
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

