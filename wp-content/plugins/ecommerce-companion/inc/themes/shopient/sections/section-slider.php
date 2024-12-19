<?php  
if ( ! function_exists( 'ecommerce_comp_storely_slider' ) ) :
	function ecommerce_comp_storely_slider() {
	$slider_hs 				= get_theme_mod('slider_hs','1');	
	$slider 				= get_theme_mod('slider2',storely_get_slider2_default());
	$slider_info_hs 		= get_theme_mod('slider_info_hs','1');
	$slider_info 			= get_theme_mod('slider_info',storely_get_slider_info_default());
	$slider_info6_hs 		= get_theme_mod('slider_info6_hs','1');
	$slider_info6 			= get_theme_mod('slider_info6',storely_get_slider_info_default());
	if($slider_hs=='1'):	
?>	
<div id="slider-section" class="slider-section st-pb-default">
	<div class="slider-overlay"></div>
	<div class="container">
		<div class="row ">
			<!-- <div class="col-lg-3 col-12"></div> -->
			<div class="<?php if($slider_info_hs=='1'): echo 'col-lg-9'; else: echo 'col-lg-12'; endif; ?> col-12 ">
				<div class="slider-area">
					<div class="home-slider page2">
						<?php
							if ( ! empty( $slider ) ) {
							$slider = json_decode( $slider );
							foreach ( $slider as $slide_item ) {
								$title = ! empty( $slide_item->title ) ? apply_filters( 'storely_translate_single_string', $slide_item->title, 'slider section' ) : '';
								$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
								$subtitle2 = ! empty( $slide_item->subtitle2 ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle2, 'slider section' ) : '';
								$subtitle3 = ! empty( $slide_item->subtitle3 ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle3, 'slider section' ) : '';
								$subtitle4 = ! empty( $slide_item->subtitle4 ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle4, 'slider section' ) : '';
								$button = ! empty( $slide_item->text2) ? apply_filters( 'storely_translate_single_string', $slide_item->text2,'slider section' ) : '';
								$link = ! empty( $slide_item->link ) ? apply_filters( 'storely_translate_single_string', $slide_item->link, 'slider section' ) : '';
								$image = ! empty( $slide_item->image_url ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
								$image2 = ! empty( $slide_item->image_url2 ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url2, 'slider section' ) : '';
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
															<h6 class="slide-subtitle" data-animation="fadeInLeft"
															data-delay="150ms"><span class="text-primary"><?php echo esc_html($title); ?> </span> </h6>
														<?php endif; ?>	
														<div class="slide-text-wrapper">
															<?php if ( ! empty( $subtitle )  || ! empty($subtitle2)) : ?>
																<h2 class="slide-text slide-text-title"
																	data-animation="fadeInLeft" data-delay="200ms"><?php echo esc_html($subtitle); ?><span class="text-primary"><?php echo esc_html($subtitle2); ?></span>
																</h2>
															<?php endif; ?>
															
															<?php if ( ! empty( $subtitle3 )  || ! empty($subtitle4)) : ?>
																<p class="slide-text slide-text-description"
																	data-animation="fadeInLeft" data-delay="500ms">
																	<?php echo esc_html($subtitle3); ?> <span class="high-bg"><?php echo esc_html($subtitle4); ?></span>
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
				<?php if($slider_info6_hs=='1'):  ?>
				<div class="row gy-3 side-slide slider-bottom-info">
					<?php
						if ( ! empty( $slider_info6 ) ) {
						$slider_info6 = json_decode( $slider_info6 );
						foreach ( $slider_info6 as $slide_item ) {
							$title = ! empty( $slide_item->title ) ? apply_filters( 'storely_translate_single_string', $slide_item->title, 'slider section' ) : '';
							$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
							$subtitle2 = ! empty( $slide_item->subtitle2 ) ? apply_filters( 'storely_translate_single_string', $slide_item->subtitle2, 'slider section' ) : '';
							$button = ! empty( $slide_item->text2) ? apply_filters( 'storely_translate_single_string', $slide_item->text2,'slider section' ) : '';
							$link = ! empty( $slide_item->link ) ? apply_filters( 'storely_translate_single_string', $slide_item->link, 'slider section' ) : '';
							$image = ! empty( $slide_item->image_url ) ? apply_filters( 'storely_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
					?>
						<div class="col-lg-6 col-md-6 mt-4">
							<aside class="slider-info">
								<?php if ( ! empty( $image ) ) : ?>
									<img src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?>alt="<?php echo esc_html($title); ?>"<?php endif; ?>>
								<?php endif; ?>	
								<div class="slider-area">
									<div class="slider-info-content">
									
										<?php if ( ! empty( $title ) ) : ?>
											<h5 class="slide-text slide-text-title" data-animation="fadeInUp"><?php echo esc_html($title); ?></h5>
										<?php endif; ?>	
										
										<?php if ( ! empty( $subtitle ) ) : ?>	
											<del class="slide-text " data-animation="fadeInUp"
											data-delay="300ms"><?php echo esc_html($subtitle); ?></del>
										<?php endif; ?>	
										
										<?php if ( ! empty( $subtitle2 ) ) : ?>	
											<h5 class="slide-text slide-text-description" data-animation="fadeInUp" data-delay="500ms">
												<span class="text-primary"><?php echo esc_html($subtitle2); ?></span>
											</h5>
										<?php endif; ?>	
										
										<?php if ( ! empty( $button ) ) : ?>
											<a href="<?php echo esc_url($link); ?>" class="slide-text slide-text-btn btn btn-primary" data-animation="fadeInUp" data-delay="800ms"><?php echo esc_html($button); ?></h2> <i class="fa fa-angle-right"></i></a>
										<?php endif; ?>
									</div>
								</div>
							</aside>
						</div>
					<?php } } ?>
				</div>
				<?php endif; ?>
			</div>
			<?php if($slider_info_hs=='1'): ?>
				<div class="col-lg-3 col-12 pt-4 pt-lg-0 slider-right-info">
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
							<div class="col-lg-12 col-md-12">
								<aside class="slider-info">
									<?php if ( ! empty( $image ) ) : ?>
										<img src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?>alt="<?php echo esc_html($title); ?>"<?php endif; ?>>
									<?php endif; ?>	
									<div class="slider-area">
										<div class="slider-info-content">
										
											<?php if ( ! empty( $title ) ) : ?>
												<h5 class="slide-text slide-text-title" data-animation="fadeInUp"><?php echo esc_html($title); ?></h5>
											<?php endif; ?>	
											
											<?php if ( ! empty( $subtitle ) ) : ?>	
												<del class="slide-text " data-animation="fadeInUp"
												data-delay="300ms"><?php echo esc_html($subtitle); ?></del>
											<?php endif; ?>	
											
											<?php if ( ! empty( $subtitle2 ) ) : ?>	
												<h5 class="slide-text slide-text-description" data-animation="fadeInUp" data-delay="500ms">
													<span class="text-primary"><?php echo esc_html($subtitle2); ?></span>
												</h5>
											<?php endif; ?>	
											
											<?php if ( ! empty( $button ) ) : ?>
												<a href="<?php echo esc_url($link); ?>" class="slide-text slide-text-btn btn btn-primary" data-animation="fadeInUp" data-delay="800ms"><?php echo esc_html($button); ?></h2> <i class="fa fa-angle-right"></i></a>
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

