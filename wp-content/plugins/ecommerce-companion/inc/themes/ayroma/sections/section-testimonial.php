<?php  
if ( ! function_exists( 'ecommerce_comp_ayroma_testimonial' ) ) :
	function ecommerce_comp_ayroma_testimonial() {
	$testimonial_setting_hs	= get_theme_mod('testimonial_setting_hs','1');	
	$testimonial_contents = get_theme_mod('testimonial_contents',aromatic_get_testimonial_default());	
	if($testimonial_setting_hs=='1'):
?>	
<section class="testimonial-1 pt-default wow bounceInRight slower container" id="testimonial-1">
	<div class="testimonial-slider">
		<?php
			if ( ! empty( $testimonial_contents ) ) {
			$testimonial_contents = json_decode( $testimonial_contents );
			foreach ( $testimonial_contents as $testimonial_item ) {
				$title = ! empty( $testimonial_item->title ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->title, 'Testimonial section' ) : '';
				$subtitle = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->subtitle, 'Testimonial section' ) : '';
				$subtitle2 = ! empty( $testimonial_item->subtitle2 ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->subtitle2, 'Testimonial section' ) : '';
				$text = ! empty( $testimonial_item->text ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->text, 'Testimonial section' ) : '';
				$link = ! empty( $testimonial_item->link ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->link, 'Testimonial section' ) : '';
				$image = ! empty( $testimonial_item->image_url ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->image_url, 'Testimonial section' ) : '';
		?>
			<div class="page-slider-wrapper">
				
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<?php if(!empty($image)): ?>
								<div class="page-image-slider"><img src="<?php echo esc_url($image); ?>"
										alt="">
								</div>
							<?php endif; ?>
						</div>
						<div class="col-md-6 d-flex align-items-center">
							<div class="wrap">
								<div class="testimonial-slider-1">
									<div class="slide">
										<?php if(!empty($title)): ?>
											<?php if(!empty($link)): ?>
												<h1 class="title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h1>
											<?php else: ?>	
												<h1 class="title"><?php echo esc_html($title); ?></h1>
											<?php endif; ?>
										<?php endif; ?>
										
										<?php if(!empty($text)): ?>
											<p class="memeber-detail"><?php echo esc_html($text); ?></p>
										<?php endif; ?>	
										
										<?php if(!empty($subtitle)): ?>
											<h2 class="member-name"><?php echo esc_html($subtitle); ?></h2>
										<?php endif; ?>
										
										<?php if(!empty($subtitle2)): ?>
											<p class="memeber-degination"><?php echo esc_html($subtitle2); ?></p>
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
	<div class="container">
		<div class="outer-nav-wrapper in2 active">
			<div id="testimonial1-nav-wrapper" class="bt">
				<a href="javascript:void(0)" class="prev1 prev navigator cta-01" id="testimonial-prev"><span><i
							class="fa fa-chevron-left"></i></span>
				</a>
				<a href="javascript:void(0)" class="next1 next navigator cta-01" id="testimonial-next"><span><i
							class="fa fa-chevron-right"></i></span>
				</a>
			</div>
		</div>
	</div>
</section>
<?php endif; }
endif;
if ( function_exists( 'ecommerce_comp_ayroma_testimonial' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 13, 'ecommerce_comp_ayroma_testimonial' );
add_action( 'aromatic_sections', 'ecommerce_comp_ayroma_testimonial', absint( $section_priority ) );
}
?>