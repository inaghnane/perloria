<?php  
if ( ! function_exists( 'ecommerce_comp_flossy_sponsor' ) ) :
	function ecommerce_comp_flossy_sponsor(){
	$sponsor2_ttl 			= get_theme_mod('sponsor2_ttl','Our <span>Partner</span>');
	$sponsor2_desc 			= get_theme_mod('sponsor2_desc','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque asperiores porro.');
	$sponsor2_contents 		= get_theme_mod('sponsor2_contents',flossy_get_sponsor2_default());
?>
<!-- START-SPONCERS -->
<section class="sponsor-home2 sponsers py-default" id="sponsers2">
	<div class="container">
		<div class="row">
			<?php if(!empty($sponsor2_ttl) || !empty($sponsor2_desc)){ ?>
				<div class="col-12 text-center wow fadeInLeft title-black">
					<?php if(!empty($sponsor2_ttl)): ?>
						<h1 class="section-title">
							<?php echo wp_kses_post($sponsor2_ttl); ?>
						</h1>
					<?php endif; ?>
					<div class="title-img1"><img src="<?php echo esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/flexi-mart/assets/images/sponsor/girlwear.png'); ?>" alt="<?php echo esc_attr__('Image','ecommerce-companion'); ?>"></div>
					<?php if(!empty($sponsor2_desc)): ?>
						<p>
							<?php echo esc_html($sponsor2_desc); ?>
						</p>
					<?php endif; ?>
				</div>
			<?php } ?>
			
			<?php
				if ( ! empty( $sponsor2_contents ) ) {
				$sponsor2_contents = json_decode( $sponsor2_contents );
				foreach ( $sponsor2_contents as $sponsor2_item ) {
					$link = ! empty( $sponsor2_item->link ) ? apply_filters( 'flossy_translate_single_string', $sponsor2_item->link, 'Sponsor section' ) : '';
					$image = ! empty( $sponsor2_item->image_url) ? apply_filters( 'flossy_translate_single_string', $sponsor2_item->image_url,'Sponsor section' ) : '';
			?>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="<?php echo esc_url($link); ?>" class="sponser-logo-wrapper"><img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html__('Image','ecommerce-companion'); ?>"></a>
				</div>
			<?php } } ?>
		</div>
	</div>
</section>
<!-- END: START-SPONCERS -->
	<?php } endif;
	if ( function_exists( 'ecommerce_comp_flossy_sponsor' ) ) {
$section_priority = apply_filters( 'flossy_section_priority', 14, 'ecommerce_comp_flossy_sponsor' );
add_action( 'flossy_sections', 'ecommerce_comp_flossy_sponsor', absint( $section_priority ) );
} ?>