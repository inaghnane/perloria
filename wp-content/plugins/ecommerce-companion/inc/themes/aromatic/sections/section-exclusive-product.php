<?php  
if ( ! function_exists( 'ecommerce_comp_aromatic_product' ) ) :
	function ecommerce_comp_aromatic_product() {
	$exclusive_product2_setting_hs		= get_theme_mod('exclusive_product2_setting_hs','1');		
	$exclusive_product2_ttl 			= get_theme_mod('exclusive_product2_ttl',__('Exclusive Product','ecommerce-companion'));
	$exclusive_product2_cat				= get_theme_mod('exclusive_product2_cat'); 
	if($exclusive_product2_setting_hs=='1'):
if ( class_exists( 'woocommerce' ) ) {
$args                   = array(
	'post_type' => 'product',
	'posts_per_page' => 20,
);
if(!empty($exclusive_product2_cat)):
$args['tax_query'] = array(
	array(
		'taxonomy' => 'product_cat',
		'field' => 'slug',
		'terms' => $exclusive_product2_cat,
	),
);	
endif;
?>	
<section class="our-product-section pt-default exclusive-products-home2" id="our-product-section">
	<!-- <div class="container-fluid"> -->
	<div class="container">
		<div class="row">
			<?php if(!empty($exclusive_product2_ttl)): ?>
				<div class="col-12">
					<div class="title title-text wow " data-splitting><?php echo wp_kses_post($exclusive_product2_ttl); ?><span class=""></span></div>
				</div>
			<?php endif; ?>
			<?php
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
			<div class="col-12 col-md-6 col-lg-4 col-xxl-3 wow slow fadeInLeft">
				<ul class="products">
					<?php get_template_part('woocommerce/content','product'); ?>
				</ul>
			</div>
			<?php endwhile; ?>
			<?php  wp_reset_postdata(); ?>
			<!-- </div> -->
		</div>
	</div>
</section>
<?php } endif; }
endif;
if ( function_exists( 'ecommerce_comp_aromatic_product' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 13, 'ecommerce_comp_aromatic_product' );
add_action( 'aromatic_sections', 'ecommerce_comp_aromatic_product', absint( $section_priority ) );
}
?>