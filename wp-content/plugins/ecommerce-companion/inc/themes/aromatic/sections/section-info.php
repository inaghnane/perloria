<?php  
if ( ! function_exists( 'ecommerce_comp_aromatic_info' ) ) :
	function ecommerce_comp_aromatic_info() {
	$info2_setting_hs			= get_theme_mod('info2_setting_hs','1');	
	$info_contents 				= get_theme_mod('info2_contents',aromatic_get_info2_default());
	if($info2_setting_hs=='1'):
?>	
<section class="info-section pt-default wow fadeInLeft slower info-home2" id="info-section">
	<div class="container-fluid">
		<div class="container">
			<div class="row info-service-flex align-items-center">
				<?php
					if ( ! empty( $info_contents ) ) {
					$info_contents = json_decode( $info_contents );
					foreach ( $info_contents as $info_item ) {
						$title = ! empty( $info_item->title ) ? apply_filters( 'aromatic_translate_single_string', $info_item->title, 'Info 2 section' ) : '';
						$text = ! empty( $info_item->text ) ? apply_filters( 'aromatic_translate_single_string', $info_item->text, 'Info 2 section' ) : '';
						$link = ! empty( $info_item->link ) ? apply_filters( 'aromatic_translate_single_string', $info_item->link, 'Info 2 section' ) : '';
						$icon = ! empty( $info_item->icon_value ) ? apply_filters( 'aromatic_translate_single_string', $info_item->icon_value, 'Info 2 section' ) : '';
				?>
					<div class="col-12 col-sm-6 col-lg-3 info-service">
						<div class="d-flex  flex-column section-type">
							<div class="">
								<div class="section-icon">
									<i class="<?php echo esc_attr(aromatic_theme_icon($icon)); ?>"></i>
								</div>
							</div>
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
endif;
}
endif;
if ( function_exists( 'ecommerce_comp_aromatic_info' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 12, 'ecommerce_comp_aromatic_info' );
add_action( 'aromatic_sections', 'ecommerce_comp_aromatic_info', absint( $section_priority ) );
}
?>