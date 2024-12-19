<?php 
	if ( ! function_exists( 'ecommerce_comp_flossy_cta' ) ) :
	function ecommerce_comp_flossy_cta(){
	$cta_hs			= get_theme_mod( 'cta_hs','1');
	$cta_ttl		= get_theme_mod( 'cta_ttl',__('Free Shipping','ecommerce-companion'));
	$cta_subttl		= get_theme_mod( 'cta_subttl',__('Free Delivery Now On Your First Order and over $200','ecommerce-companion'));
	$cta_btn_lbl	= get_theme_mod( 'cta_btn_lbl',__('ONLY $200*','ecommerce-companion'));
	$cta_btn_link	= get_theme_mod( 'cta_btn_link','#');
	$cta_bg_img		= get_theme_mod( 'cta_bg_img',esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/flossy/assets/images/cta/cta_bg.jpg'));	
	if($cta_hs == '1'):
?>	

<!-- START:SALE BANNER -->
<section class="frontpage-cta offer-sale" id="offer-sale1">
	<div class="container-fluid jquery-ripples" <?php if(!empty($cta_bg_img)): ?> style="background:url('<?php echo esc_url($cta_bg_img); ?>') fixed center top / cover;background-blend-mode:multiply;" <?php endif; ?>	>
		<div class="container">
			<div class="banner-container">
				<div class="banner-offer-text">
					<?php if(!empty($cta_ttl)): ?>
						<div class="offer-title">
							<?php echo esc_html($cta_ttl); ?>
						</div>
					<?php endif; ?>
					
					<?php if(!empty($cta_subttl)): ?>
						<span class="focus">
							<?php echo esc_html($cta_subttl); ?>
						</span>
					<?php endif; ?>
				</div>
				
				<?php if(!empty($cta_btn_lbl)): ?>
					<a href="<?php echo esc_url($cta_btn_link); ?>" class="fl-btn1 text-center"><span><?php echo esc_html($cta_btn_lbl); ?></span></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- END:SALE BANNER -->
<?php endif; }
endif;
if ( function_exists( 'ecommerce_comp_flossy_cta' ) ) {
$section_priority = apply_filters( 'flossy_section_priority', 13, 'ecommerce_comp_flossy_cta' );
add_action( 'flossy_sections', 'ecommerce_comp_flossy_cta', absint( $section_priority ) );
}?>