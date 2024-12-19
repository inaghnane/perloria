<?php  
if ( ! function_exists( 'ecommerce_comp_retailsy_slider' ) ) :
	function ecommerce_comp_retailsy_slider() {
	$slider 						= get_theme_mod('slider',retailsy_get_slider_default());	
?>	
<section class="banner banner1">
	<div class="page2-slider">
		<?php
			if ( ! empty( $slider ) ) {
			$slider = json_decode( $slider );
			foreach ( $slider as $slide_item ) {
				$title = ! empty( $slide_item->title ) ? apply_filters( 'retailsy_translate_single_string', $slide_item->title, 'slider section' ) : '';
				$subtitle = ! empty( $slide_item->subtitle ) ? apply_filters( 'retailsy_translate_single_string', $slide_item->subtitle, 'slider section' ) : '';
				$button = ! empty( $slide_item->text2) ? apply_filters( 'retailsy_translate_single_string', $slide_item->text2,'slider section' ) : '';
				$link = ! empty( $slide_item->link ) ? apply_filters( 'retailsy_translate_single_string', $slide_item->link, 'slider section' ) : '';
				$image = ! empty( $slide_item->image_url ) ? apply_filters( 'retailsy_translate_single_string', $slide_item->image_url, 'slider section' ) : '';
				$image2 = ! empty( $slide_item->image_url2 ) ? apply_filters( 'retailsy_translate_single_string', $slide_item->image_url2, 'slider section' ) : '';
				$align = ! empty( $slide_item->slide_align ) ? apply_filters( 'retailsy_translate_single_string', $slide_item->slide_align, 'slider section' ) : '';
		?>
			<div class="page2-slider-wrapper">
				<?php if ( ! empty( $image ) ) : ?>
					<img src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?>alt="<?php echo esc_html($title); ?>"<?php endif; ?>>
				<?php endif; ?>	
				<div class="jcs-container">
					<div class="jcs-row">
						<div class="banner-text-section">
							<?php if(!empty($title)): ?>
								<div class="offer down animate seven"><?php echo esc_html($title); ?></div>
							<?php endif; ?>
							
							<?php if(!empty($subtitle)): ?>
								<div class="banner-main-content down animate seven"><?php echo esc_html($subtitle); ?></div>
							<?php endif; ?>
							
							<div class="bubble-flex item-wrapper gap10">
								<?php if(!empty($button)): ?>
									<a href="<?php echo esc_url($link); ?>" class="cbb blue"><span><?php echo esc_html($button); ?></span> <i class="fa fa-chevron-right"></i></a>
								<?php endif; ?>
							</div>
						</div>
						
						<?php if ( ! empty( $image2 ) ) : ?>
							<div class="page2-image-slider"><img
									src="<?php echo esc_url($image2); ?>" alt="">
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php } } ?>
	</div>
	<!--<div class="jcs-container">
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
				<div id="nav-wrapper">
					<a href="javascript:void(0)" class="prev1 prev navigator"><i class="fa fa-chevron-left"></i>
					</a>
					<a href="javascript:void(0)" class="next1 next navigator"><i
							class="fa fa-chevron-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>-->
</section>
<?php
}
endif;
if ( function_exists( 'ecommerce_comp_retailsy_slider' ) ) {
$section_priority = apply_filters( 'retailsy_section_priority', 11, 'ecommerce_comp_retailsy_slider' );
add_action( 'retailsy_sections', 'ecommerce_comp_retailsy_slider', absint( $section_priority ) );
}
?>