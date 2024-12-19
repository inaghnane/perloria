<?php  
if ( ! function_exists( 'ecommerce_comp_storely_service' ) ) :
	function ecommerce_comp_storely_service() {
	$service_hs 			= get_theme_mod('service_hs','1');		
	$service_contents 		= get_theme_mod('service_contents',storely_get_shoply_service_default());
	if($service_hs=='1'):
?>	
<div id="infoservice-section" class="infoservice-section infoservice-home st-py-default">
	<div class="container wow fadeInUp">
		<div class="row">
			<?php
				if ( ! empty( $service_contents ) ) {
				$service_contents = json_decode( $service_contents );
				foreach ( $service_contents as $service_item ) {
					$title = ! empty( $service_item->title ) ? apply_filters( 'storely_translate_single_string', $service_item->title, 'Service section' ) : '';
					$text = ! empty( $service_item->text ) ? apply_filters( 'storely_translate_single_string', $service_item->text, 'Service section' ) : '';
					$link = ! empty( $service_item->link ) ? apply_filters( 'storely_translate_single_string', $service_item->link, 'Service section' ) : '';
					$icon = ! empty( $service_item->icon_value ) ? apply_filters( 'storely_translate_single_string', $service_item->icon_value, 'Service section' ) : '';
					$image = ! empty( $service_item->image_url ) ? apply_filters( 'storely_translate_single_string', $service_item->image_url, 'Service section' ) : '';
			?>
				<div class="col-lg-3 col-md-6 col-12 mb-4">
					<div class="infoservice-item">
						<?php if ( ! empty( $image ) ) : ?>
							<div class="infoservice-icon">
								<img src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?>alt="<?php echo esc_html($title); ?>"<?php endif; ?>>
							</div>
						<?php else: ?>	
							<div class="infoservice-icon">
								<i class="fa <?php echo esc_attr($icon); ?>"></i>
							</div>
						<?php endif; ?>	
						
						<?php if ( ! empty( $title )  || ! empty( $text )) : ?>
							<div class="infoservice-content">
								<?php if(!empty($link)): ?>
									<h6><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h6>
								<?php else: ?>	
									<h6><?php echo esc_html($title); ?></h6>
								<?php endif; ?>	
								<p><?php echo esc_html($text); ?></p>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php } } ?>
		</div>
	</div>
</div>
<?php endif; }
endif;
if ( function_exists( 'ecommerce_comp_storely_service' ) ) {
$section_priority = apply_filters( 'storely_section_priority', 11, 'ecommerce_comp_storely_service' );
add_action( 'storely_sections', 'ecommerce_comp_storely_service', absint( $section_priority ) );
}
?>