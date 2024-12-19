<?php  
if ( ! function_exists( 'ecommerce_comp_storely_slider' ) ) :
	function ecommerce_comp_storely_slider() {
	$slider_hs 				= get_theme_mod('slider_hs','1');	
	$slider 				= get_theme_mod('slider3',storely_get_slider3_default());
	$slider_info_hs 		= get_theme_mod('slider_info_hs','1');
	$slider_info 			= get_theme_mod('slider_info2',storely_get_slider_info2_default());
	$slider_info_left_hs 		= get_theme_mod('slider_info_left_hs','1');
	$slider_info_left_img 		= get_theme_mod('slider_info_left_img',storely_get_slider_info_left_img_default());
	$slider_info_left_ttl 		= get_theme_mod('slider_info_left_ttl',__('Women Fashion','ecommerce-companion'));
	$slider_info_left_subttl 	= get_theme_mod('slider_info_left_subttl',__('50% OFF','ecommerce-companion'));
	$slider_info_left_btn_lbl 	= get_theme_mod('slider_info_left_btn_lbl',__('Shop Now','ecommerce-companion'));
	$slider_info_left_btn_url 	= get_theme_mod('slider_info_left_btn_url','#');
	if($slider_hs=='1'):	
?>	
<div id="slider-section" class="slider-section st-pb-default">
	<div class="slider-overlay"></div>
	<div class="container">
		<div class="row">
			<?php if($slider_info_left_hs=='1'): ?>
			<div class="col-lg-3 col-12 d-none d-lg-block">
				<!-- <div class="slider-left-banner-img-wrapper">
					<div class="banner-img-wrap"><img src="assets/images/slider/home3/curling-style.png" alt=""></div> -->
				<div class="row gy-3 side-slide-left">
					<div class="col-lg-12 col-md-6">
						<aside class="slider-info">
							<div class="cycle-image-wrapper">
								<?php
								if ( ! empty( $slider_info_left_img ) ) {
								$slider_info_left_img = json_decode( $slider_info_left_img );
								foreach ( $slider_info_left_img as $slide_item ) {
									$image = ! empty( $slide_item->image_url ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
								?>	
									<img src="<?php echo esc_url($image); ?>" >
								<?php }} ?>
							</div>
							<div class="slider-area">
								<div class="slider-info-content">
									<?php if ( ! empty( $slider_info_left_ttl ) ) : ?>
										<h5 class="slide-text slide-text-title text-white ttl" data-delay="200ms"><?php echo wp_kses_post($slider_info_left_ttl); ?></h5>
									<?php endif; ?>
									
									<?php if ( ! empty( $slider_info_left_subttl ) ) : ?>
										<h5 class="slide-text slide-text-description" data-delay="500ms">
											<span class="text-white subttl"><?php echo wp_kses_post($slider_info_left_subttl); ?></span>
										</h5>
									<?php endif; ?>
									
									<?php if ( ! empty( $slider_info_left_btn_lbl ) ) : ?>
										<a href="<?php echo esc_url($slider_info_left_btn_url); ?>"
										class="slide-text slide-text-btn btn btn-primary"
										data-delay="800ms"><?php echo wp_kses_post($slider_info_left_btn_lbl); ?> </a>
									<?php endif; ?>	
								</div>
							</div>
						</aside>
					</div>
				</div>
				<!-- </div> -->
			</div>
			<?php endif; 
			 if($slider_info_left_hs !=='1' && $slider_info_hs !=='1'):
				$column='col-lg-12';
			elseif($slider_info_left_hs !=='1' || $slider_info_hs !=='1'):
				$column='col-lg-9';
			else:
				$column='col-lg-6';
			endif;	
			?>
			<div class="<?php echo esc_attr($column);?> col-12 slider3-main">
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
								$button = ! empty( $slide_item->text2) ? apply_filters( 'storely_translate_single_string', $slide_item->text2,'slider section' ) : '';
								$link = ! empty( $slide_item->link ) ? apply_filters( 'storely_translate_single_string', $slide_item->link, 'slider section' ) : '';
								$image = ! empty( $slide_item->image_url ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
								$image2 = ! empty( $slide_item->image_url2 ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url2, 'slider section' ) : '';
								$open_new_tab = ! empty( $slide_item->open_new_tab ) ? apply_filters( 'storely_translate_single_string', $slide_item->open_new_tab, 'slider section' ) : '';
								$align = ! empty( $slide_item->slide_align ) ? apply_filters( 'storely_translate_single_string', $slide_item->slide_align, 'slider section' ) : '';
						?>
						<div class="home-slider-info-wrap">
								<?php if ( ! empty( $image ) ) : ?>
									<img class="home-slider-image side-item-image" src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?>alt="<?php echo esc_html($title); ?>"<?php endif; ?>>
								<?php endif; ?>	
								<div class="home-slider-info-wrapper">
									<div class="home-slider-vertical">
										<div class="home-slider-align">
											<div class="container">
												<div class="row slider-silde-info align-items-lg-center">
													<div class="col-lg-7 col-12">
														<?php if ( ! empty( $title ) ) : ?>
															<h6 class="slide-subtitle" data-animation="fadeInDown"
															data-delay="150ms"><span class="text-primary"><?php echo esc_html($title); ?></span></h6>
														<?php endif; ?>												
														<div class="slide-text-wrapper">
															<?php if ( ! empty( $subtitle ) ) : ?>
																<h2 class="slide-text slide-text-title"
																	data-animation="fadeInDown" data-delay="200ms">
																	<?php echo esc_html($subtitle); ?>
																</h2>
															<?php endif; ?>

															<?php if ( ! empty( $subtitle2 ) || ! empty( $subtitle3 ) ) : ?>
																<p class="slide-text slide-text-description"
																	data-animation="fadeInUp" data-delay="500ms">
																	<?php echo esc_html($subtitle2); ?> <strong class="text-primary"
																		style="font-size:2em;"><sub><?php echo esc_html($subtitle3); ?></sub></strong>
																</p>
															<?php endif; ?>
															
															<?php if ( ! empty( $button ) ) : ?>
																<a href="<?php echo esc_url($link); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?>
																class="slide-text slide-text-btn btn btn-white"
																data-animation="fadeInUp" data-delay="800ms"><?php echo esc_html($button); ?>
																<i class="fa fa-angle-right"></i></a>
															<?php endif; ?>	
									
														</div>
													</div>
													<div class="col-lg-5 col-12 mb-av-0 mx-auto my-auto">
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
			<?php if($slider_info_hs=='1'): ?>
				<div class="col-lg-3 col-12 pt-4 pt-lg-0">
					<div class="row gy-3 side-slide">
						<?php
							if ( ! empty( $slider_info ) ) {
							$slider_info = json_decode( $slider_info );
							foreach ( $slider_info as $slide_item ) {
								$title = ! empty( $slide_item->title ) ? apply_filters( 'storely_translate_single_string', $slide_item->title, 'slider section' ) : '';
								$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
								$subtitle2 = ! empty( $slide_item->subtitle2 ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle2, 'slider section' ) : '';
								$button = ! empty( $slide_item->text2) ? apply_filters( 'storely_translate_single_string', $slide_item->text2,'slider section' ) : '';
								$link = ! empty( $slide_item->link ) ? apply_filters( 'storely_translate_single_string', $slide_item->link, 'slider section' ) : '';
								$image = ! empty( $slide_item->image_url ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
						?>
						<div class="col-lg-12 col-md-6">
							<aside class="slider-info">
								<?php if ( ! empty( $image ) ) : ?>
									<img src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?>alt="<?php echo esc_html($title); ?>"<?php endif; ?>>
								<?php endif; ?>	
								<div class="slider-area">
									<div class="slider-info-content">
										<?php if ( ! empty( $title ) ) : ?>
											<h5 class="slide-text slide-text-title text-white" data-animation="fadeInUp"
											data-delay="200ms"><?php echo esc_html($title); ?></h5>
										<?php endif; ?>
										
										<?php if ( ! empty( $subtitle ) ||  ! empty( $subtitle2 ) ) : ?>
										<h5 class="slide-text slide-text-description" data-animation="fadeInUp" data-delay="500ms" style="animation-delay: 500ms;"><?php echo esc_html($subtitle); ?>
											<span class="text-white"><?php echo esc_html($subtitle2); ?></span>
										</h5>
										<?php endif; ?>
										
										<?php if ( ! empty( $button ) ) : ?>
											<a href="<?php echo esc_url($link); ?>" class="slide-text slide-text-btn btn btn-secondary" data-animation="fadeInUp" data-delay="800ms"><?php echo esc_html($button); ?></h2> <i class="fa fa-angle-right"></i></a>
										<?php endif; ?>
									</div>
								</div>
							</aside>
						</div>
						<?php } } ?>
					</div>
				</div>
			<?php endif; ?>
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

