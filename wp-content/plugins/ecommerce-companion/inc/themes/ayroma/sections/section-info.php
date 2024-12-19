<?php  
if ( ! function_exists( 'ecommerce_comp_ayroma_info' ) ) :
	function ecommerce_comp_ayroma_info() {
	$info_setting_hs			= get_theme_mod('info_setting_hs','1');	
	$info_contents 				= get_theme_mod('info_contents',aromatic_get_info_default());
	if($info_setting_hs=='1'):
?>	
<section class="info-section wow fadeInLeft slower info-home info-home1" id="info-section">
	<div class="container-fluid">
		<div class="container">
			<div class="row info-service-flex align-items-center">
				<?php
					if ( ! empty( $info_contents ) ) {
					$info_contents = json_decode( $info_contents );
					foreach ( $info_contents as $info_item ) {
						$title = ! empty( $info_item->title ) ? apply_filters( 'aromatic_translate_single_string', $info_item->title, 'Info section' ) : '';
						$text = ! empty( $info_item->text ) ? apply_filters( 'aromatic_translate_single_string', $info_item->text, 'Info section' ) : '';
						$link = ! empty( $info_item->link ) ? apply_filters( 'aromatic_translate_single_string', $info_item->link, 'Info section' ) : '';
						$icon = ! empty( $info_item->icon_value ) ? apply_filters( 'aromatic_translate_single_string', $info_item->icon_value, 'Info section' ) : '';
						$image = ! empty( $info_item->image_url ) ? apply_filters( 'aromatic_translate_single_string', $info_item->image_url, 'Info section' ) : '';
				?>
					<div class="col-12 col-sm-6 col-lg-3 info-service">
						<div class="d-flex  section-type">
							<?php if(!empty($image) || !empty($icon)): ?>
								<div class="">
									<div class="section-icon">
										<?php if(!empty($image)): ?>
											<img width="60" height="60" src="<?php echo esc_url($image); ?>" alt="">
										<?php else: ?>	
											<i class="<?php echo esc_attr(aromatic_theme_icon($icon)); ?>"></i>
										<?php endif; ?>
									</div>
								</div>
							<?php endif; ?>
							<div class="">
								<div class="service-action">
									<?php if(!empty($title)): ?>
										<a href="<?php echo esc_url($link); ?>" class="service-title"><?php echo esc_html($title); ?></a>
									<?php endif; ?>	
									
									<?php if(!empty($text)): ?>
										<div class="reverse-support"><?php echo esc_html($text); ?></div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				<?php } } ?>
			</div>
		</div>
	</div>
</section>
<?php
endif; }
endif;
if ( function_exists( 'ecommerce_comp_ayroma_info' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 12, 'ecommerce_comp_ayroma_info' );
add_action( 'aromatic_sections', 'ecommerce_comp_ayroma_info', absint( $section_priority ) );
}
?>