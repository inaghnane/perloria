<?php  
if ( ! function_exists( 'ecommerce_comp_storely_binfo' ) ) :
	function ecommerce_comp_storely_binfo() {
	$banner_info_hs 		= get_theme_mod('banner_info_hs','1');
	$banner_info_contents 	= get_theme_mod('banner_info_contents',storely_get_banner_info_default());
	if($banner_info_hs=='1'):
?>	
<div id="bannerinfo-section" class="bannerinfo-section bannerinfo-home st-py-default">
	<div class="container wow fadeInUp">
		<div class="row">
			<?php
				if ( ! empty( $banner_info_contents ) ) {
				$banner_info_contents = json_decode( $banner_info_contents );
				foreach ( $banner_info_contents as $info_item ) {
					$title = ! empty( $info_item->title ) ? apply_filters( 'storely_translate_single_string', $info_item->title, 'Banner Info section' ) : '';
					$subtitle = ! empty( $info_item->subtitle ) ? apply_filters( 'storely_translate_single_string', $info_item->subtitle, 'Banner Info section' ) : '';
					$text = ! empty( $info_item->text ) ? apply_filters( 'storely_translate_single_string', $info_item->text, 'Banner Info section' ) : '';
					$button = ! empty( $info_item->text2 ) ? apply_filters( 'storely_translate_single_string', $info_item->text2, 'Banner Info section' ) : '';
					$link = ! empty( $info_item->link ) ? apply_filters( 'storely_translate_single_string', $info_item->link, 'Banner Info section' ) : '';
					$image = ! empty( $info_item->image_url ) ? apply_filters( 'storely_translate_single_string', $info_item->image_url, 'Banner Info section' ) : '';
			?>
				<div class="col-lg-4 col-md-12 col-12  mb-4">
					<aside class="bannerinfo">
						<?php if ( ! empty( $image ) ) : ?>
							<div class="bannerinfo-img">
								<img src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr($title); ?>"<?php endif; ?>>
							</div>
						<?php endif; ?>
					
						<div class="info-content">
							<?php if ( ! empty( $title ) ) : ?>
								<span><?php echo esc_html($title); ?></span>
							<?php endif; ?>
							
							<?php if ( ! empty( $subtitle ) ) : ?>
								<h4><?php echo esc_html($subtitle); ?></h4>
							<?php endif; ?>
							
							<?php if ( ! empty( $text ) ) : ?>
								<p><?php echo esc_html($text); ?></p>
							<?php endif; ?>
							
							<?php if ( ! empty( $button ) ) : ?>
								<a href="<?php echo esc_url($link); ?>" class="more-link"><?php echo esc_html($button); ?> <i class="fa fa-long-arrow-right"></i></a>
							<?php endif; ?>	
						</div>
					</aside>
				</div>
			<?php } } ?>
		</div>
	</div>
</div>
<?php
endif; }
endif;
if ( function_exists( 'ecommerce_comp_storely_binfo' ) ) {
$section_priority = apply_filters( 'storely_section_priority', 11, 'ecommerce_comp_storely_binfo' );
add_action( 'storely_sections', 'ecommerce_comp_storely_binfo', absint( $section_priority ) );
}
?>