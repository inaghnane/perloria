<?php 
if ( ! function_exists( 'ecommerce_comp_ayroma_grab' ) ) :
	function ecommerce_comp_ayroma_grab() {
	$product_grab_setting_hs= get_theme_mod('product_grab_setting_hs','1');	
	$product_grab_ttl 		=	get_theme_mod('product_grab_ttl',__('Grab Our Products Now','ecommerce-companion'));	
	$product_grab_desc 		=	get_theme_mod('product_grab_desc',__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nobis totam veritatis dolorum fugiat, molestias officiis','ecommerce-companion'));
	$product_grab_btn_lbl1 =	get_theme_mod('product_grab_btn_lbl1',__('Contact Us','ecommerce-companion'));	
	$product_grab_link1 	=	get_theme_mod('product_grab_link1','#');	
	$product_grab_btn_lbl2 	=	get_theme_mod('product_grab_btn_lbl2',__('Go To Shop','ecommerce-companion'));
	$product_grab_link2 	=	get_theme_mod('product_grab_link2','#');
	$product_grab_img 		=	get_theme_mod('product_grab_img',esc_url(ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/aromatic/assets/images/grab.png'));	
	if($product_grab_setting_hs=='1'):
?>	
<section class="grab1 pt-default grab1-home" id="grab">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-md-<?php if(!empty($product_grab_img)): echo '6'; else: echo '12'; endif; ?> wow slideInLeft">
				<?php if(!empty($product_grab_ttl)): ?>
					<div class="title wow slideInLeft" data-wow-delay="1s"><?php echo wp_kses_post($product_grab_ttl); ?></div>
				<?php endif; ?>
				
				<?php if(!empty($product_grab_desc)): ?>
					<p class="text"><?php echo wp_kses_post($product_grab_desc); ?></p>
				<?php endif; ?>
				
				<?php if(!empty($product_grab_btn_lbl1)): ?>
					<div class="bt"><a href="<?php echo esc_url($product_grab_link1); ?>" class="grab-contact cta-01"><span><?php echo wp_kses_post($product_grab_btn_lbl1); ?></span></a></div>
				<?php endif; ?>
				
				<?php if(!empty($product_grab_btn_lbl2)): ?>
					<div class="bt"><a href="<?php echo esc_url($product_grab_link2); ?>" class="grab-contact cta-02"><span><?php echo wp_kses_post($product_grab_btn_lbl2); ?></span></a></div>
				<?php endif; ?>	
			</div>
			<?php if(!empty($product_grab_img)): ?>
				<div class="col-12 col-md-6 wow slideInRight"><img width="400"
					src="<?php echo esc_url($product_grab_img); ?>" alt=""></div>
				<?php endif; ?>			
		</div>
	</div>
</section>
<?php
endif; }
endif;
if ( function_exists( 'ecommerce_comp_ayroma_grab' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 15, 'ecommerce_comp_ayroma_grab' );
add_action( 'aromatic_sections', 'ecommerce_comp_ayroma_grab', absint( $section_priority ) );
}
?>