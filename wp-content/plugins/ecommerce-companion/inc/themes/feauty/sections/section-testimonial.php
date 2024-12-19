<?php  
if ( ! function_exists( 'ecommerce_comp_feauty_testimonial' ) ) :
	function ecommerce_comp_feauty_testimonial() {
	$testimonial3_setting_hs	= get_theme_mod('testimonial3_setting_hs','1');	
	$testimonial3_title 		= get_theme_mod('testimonial3_title',__('Client Testimonial','ecommerce-companion'));	
	$testimonial3_desc 			= get_theme_mod('testimonial3_desc',__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, reiciendis.','ecommerce-companion'));	
	$testimonial_contents 		= get_theme_mod('testimonial3_contents',aromatic_get_testimonial3_default());
	$testimonial3_bg_img 		= get_theme_mod('testimonial3_bg_img',ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/feauty/assets/images/testimonial/back.jpg');	
	if($testimonial3_setting_hs=='1'):
?>	
<section class="testimonial-section pt-default wow bounceInLeft slow testimonial3" id="testimonial-section">
	<?php if(!empty($testimonial3_title)  || !empty($testimonial3_desc)): ?>
		<div class="container">
			<div class="heading">
				<h2 class="title" data-splitting><?php echo wp_kses_post($testimonial3_title); ?> <span class=""></span></h2>
				<p><?php echo wp_kses_post($testimonial3_desc); ?></p>
			</div>
		</div>	
	<?php endif; ?>
	<div class="slider-wrapper"
		style="background: url('<?php echo esc_url($testimonial3_bg_img); ?>') no-repeat; background-attachment: fixed; background-size: cover;">
		<div class="container">
			<div class="testimonial-slider">
				<?php
					if ( ! empty( $testimonial_contents ) ) { 
				   $testimonial_contents = json_decode( $testimonial_contents );
					foreach ( $testimonial_contents as $testimonial_item ) {
						$title = ! empty( $testimonial_item->title ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->title, 'Testimonial 2 section' ) : '';
						$subtitle = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->subtitle, 'Testimonial 2 section' ) : '';						
						$text = ! empty( $testimonial_item->text ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->text, 'Testimonial 2 section' ) : '';
						$link = ! empty( $testimonial_item->link ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->link, 'Testimonial 2 section' ) : '';
						$image = ! empty( $testimonial_item->image_url ) ? apply_filters( 'aromatic_translate_single_string', $testimonial_item->image_url, 'Testimonial 2 section' ) : '';
				?>
				<div class="page-slider-wrapper">
					<div class="testimonial-slider-1">
						<?php if(!empty($image)): ?>
							<div class="page-image-slider"><img width="auto" height="530"
									src="<?php echo esc_url($image); ?>" alt="">
							</div>
						<?php endif; ?>
						
						<div class="member-profile">
							<?php if(!empty($title)): ?>
								<?php if(!empty($link)): ?>
									<h2 class="member-name"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h2>
								<?php else: ?>	
									<h2 class="member-name"><?php echo esc_html($title); ?></h2>
								<?php endif; ?>
							<?php endif; ?>
							
							<?php if(!empty($subtitle)): ?>
								<p class="memeber-degination"><?php echo esc_html($subtitle); ?></p>
							<?php endif; ?>	
						</div>
						
						<?php if(!empty($text)): ?>
							<div class="slide">
								<p class="memeber-detail"><?php echo esc_html($text); ?></p>
							</div>
						<?php endif; ?>	
					</div>
				</div>
				<?php } } ?>
			</div>
		</div>
		<div class="container">
			<div class="outer-nav-wrapper in2 active">
				<div id="testimonial1-nav-wrapper" class="bt">
					<a href="javascript:void(0)" class="prev1 prev navigator cta-01"
						id="testimonial-prev"><span><i class="fa fa-chevron-left"></i></span>
					</a>
					<a href="javascript:void(0)" class="next1 next navigator cta-01"
						id="testimonial-next"><span><i class="fa fa-chevron-right"></i></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; }
endif;
if ( function_exists( 'ecommerce_comp_feauty_testimonial' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 13, 'ecommerce_comp_feauty_testimonial' );
add_action( 'aromatic_sections', 'ecommerce_comp_feauty_testimonial', absint( $section_priority ) );
}
?>