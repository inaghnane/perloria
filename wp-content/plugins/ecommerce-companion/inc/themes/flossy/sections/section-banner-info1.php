<?php 
	if ( ! function_exists( 'ecommerce_comp_flossy_bannerinfo' ) ) :
	function ecommerce_comp_flossy_bannerinfo(){
	$bannerinfo_hs				= get_theme_mod('bannerinfo_hs','1');
	$banner_info_contents 	= get_theme_mod('banner_info_1_contents',flossy_get_banner_info_1_default());
	if($bannerinfo_hs == '1'):
?>
<!-- Start: Banner-section -->
<section class="product-grid  pt-default bannerinfo-home" id="product-grid11" style="padding-bottom: 24px;">
	<div class="bg-banner-1 bg-elements"><img src="<?php echo ECOMMERCE_COMP_PLUGIN_URL.'inc/themes/flossy/assets/images/bg-elements/element-5.png'; ?>" alt="<?php echo esc_html__('bg-elements','ecommerce-companion'); ?>">
	</div>
	<div class="bg-banner-2 bg-elements"><img src="<?php echo ECOMMERCE_COMP_PLUGIN_URL.'inc/themes/flossy/assets/images/bg-elements/element-7.png'; ?>" alt="<?php echo esc_html__('bg-elements','ecommerce-companion'); ?>">
	</div>
	<div class="bg-banner-3 bg-elements"><img src="<?php echo ECOMMERCE_COMP_PLUGIN_URL.'inc/themes/flossy/assets/images/bg-elements/element-13.png'; ?>" alt="<?php echo esc_html__('bg-elements','ecommerce-companion'); ?>">
	</div>
	<div class="container p-3 p-sm-0">
		<div class="grid">
			<?php 
				if ( ! empty( $banner_info_contents ) ) {
				$banner_info_contents = json_decode( $banner_info_contents );
				$count = 1;
				foreach ( $banner_info_contents as $info_item ) {
					$title = ! empty( $info_item->title ) ? apply_filters( 'flossy_translate_single_string', $info_item->title, 'Banner Info section' ) : '';
					$subtitle = ! empty( $info_item->subtitle ) ? apply_filters( 'flossy_translate_single_string', $info_item->subtitle, 'Banner Info section' ) : '';
					$button = ! empty( $info_item->text2 ) ? apply_filters( 'flossy_translate_single_string', $info_item->text2, 'Banner Info section' ) : '';
					$link = ! empty( $info_item->link ) ? apply_filters( 'flossy_translate_single_string', $info_item->link, 'Banner Info section' ) : '';
					$image = ! empty( $info_item->image_url ) ? apply_filters( 'flossy_translate_single_string', $info_item->image_url, 'Banner Info section' ) : '';
					
					$countarr	= array(1=>'first11 first',2=>'second11 second',3=>'third11 third',4=>'fourth11 fourth',5=>'fifth11 fifth');
			?>
				<div class="<?php echo esc_attr($countarr[$count]); ?> wow fadeInDown slow">
					<?php if ( ! empty( $image ) ) : ?>
						<a href="<?php echo esc_url($link); ?>" class="image-hover-wrapper">
							<img src="<?php echo esc_url($image); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_html($title); ?>" <?php endif; ?>>
						</a>
					<?php endif; ?>
					
					
					<div class="meta-box">
						<?php if ( ! empty( $subtitle ) ) : ?>
							<div class="grid-name product-text1 product-text">
								<?php echo esc_html($subtitle); ?>
							</div>
						<?php endif; ?>
						
						<?php if ( ! empty( $title ) ) : ?>
							<div class="product-text2 product-text">
								<?php echo wp_kses_post($title); ?>
							</div>
						<?php endif; ?>
						
						<?php if ( ! empty( $button ) ) : ?>
							<a href="<?php echo esc_url($link); ?>" class="shop-now fl-btn1"><?php echo esc_html($button); ?></a>
						<?php endif; ?>	
					</div>
				</div>
			<?php ++$count;}  } ?>
		</div>
	</div>
</section>
<!-- End: Banner-section -->
<?php endif; }
endif;
if ( function_exists( 'ecommerce_comp_flossy_bannerinfo' ) ) {
$section_priority = apply_filters( 'flossy_section_priority', 11, 'ecommerce_comp_flossy_bannerinfo' );
add_action( 'flossy_sections', 'ecommerce_comp_flossy_bannerinfo', absint( $section_priority ) );
}?>