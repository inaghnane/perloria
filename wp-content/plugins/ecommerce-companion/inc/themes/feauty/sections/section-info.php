<?php  
if ( ! function_exists( 'ecommerce_comp_feauty_info' ) ) :
	function ecommerce_comp_feauty_info() {
	$info3_setting_hs			= get_theme_mod('info3_setting_hs','1');	
	$info3_contents 			= get_theme_mod('info3_contents',aromatic_get_info_default());
	if($info3_setting_hs=='1'):
?>	
<section class="info-section wow slideInRight slow info-home3" id="info-section">
	<div class="container-fluid"
		style="background-color:rgba(var(--color-primary),0.1); background-image:none;">
		<div class="container">
			<div class="row info-service-flex align-items-center">
				<?php
					if ( ! empty( $info3_contents ) ) {
					$info3_contents = json_decode( $info3_contents );
					foreach ( $info3_contents as $info3_item ) {
						$title = ! empty( $info3_item->title ) ? apply_filters( 'aromatic_translate_single_string', $info3_item->title, 'Info 3 section' ) : '';
						$text = ! empty( $info3_item->text ) ? apply_filters( 'aromatic_translate_single_string', $info3_item->text, 'Info 3 section' ) : '';
						$link = ! empty( $info3_item->link ) ? apply_filters( 'aromatic_translate_single_string', $info3_item->link, 'Info 3 section' ) : '';
						$icon = ! empty( $info3_item->icon_value ) ? apply_filters( 'aromatic_translate_single_string', $info3_item->icon_value, 'Info 3 section' ) : '';
				?>
					<div class="col-12 col-sm-6 col-lg-3 info-service">
						<div class="d-flex section-type">
							<?php if(!empty($image) || !empty($icon)): ?>
								<div class="">
									<div class="section-icon">
										<?php if(!empty($icon)): ?>
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
if ( function_exists( 'ecommerce_comp_feauty_info' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 12, 'ecommerce_comp_feauty_info' );
add_action( 'aromatic_sections', 'ecommerce_comp_feauty_info', absint( $section_priority ) );
}
?>