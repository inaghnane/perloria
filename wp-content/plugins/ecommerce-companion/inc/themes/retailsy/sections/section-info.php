<?php  
if ( ! function_exists( 'ecommerce_comp_retailsy_info' ) ) :
	function ecommerce_comp_retailsy_info() {
	$info_contents 			= get_theme_mod('info_contents',retailsy_get_info_default());
?>	
<section class="jcs-section-1 py-default info-home">
	<div class="jcs-container">
		<div class="jcs-row info-service-flex">
			<?php
				if ( ! empty( $info_contents ) ) {
				$info_contents = json_decode( $info_contents );
				foreach ( $info_contents as $info_item ) {
					$title = ! empty( $info_item->title ) ? apply_filters( 'retailsy_translate_single_string', $info_item->title, 'Info section' ) : '';
					$text = ! empty( $info_item->text ) ? apply_filters( 'retailsy_translate_single_string', $info_item->text, 'Info section' ) : '';
					$link = ! empty( $info_item->link ) ? apply_filters( 'retailsy_translate_single_string', $info_item->link, 'Info section' ) : '';
					$icon = ! empty( $info_item->icon_value) ? apply_filters( 'retailsy_translate_single_string', $info_item->icon_value,'Info section' ) : '';
			?>
				<div class="col-12 col-sm-6 col-lg-3 info-service">
					<div class="item-wrapper section-1-type">
						<div class="">
							<div class="section-1-icon">
								<i class="fa <?php echo esc_attr($icon); ?>"></i>
							</div>
						</div>
						<div class="">
							<div class="service-1-action">
								<?php if(!empty($title)): ?>
									<a href="<?php echo esc_attr($link); ?>" class="service-1-title"><?php echo esc_html($title); ?></a>
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
</section>
<?php
}
endif;
if ( function_exists( 'ecommerce_comp_retailsy_info' ) ) {
$section_priority = apply_filters( 'retailsy_section_priority', 12, 'ecommerce_comp_retailsy_info' );
add_action( 'retailsy_sections', 'ecommerce_comp_retailsy_info', absint( $section_priority ) );
}
?>