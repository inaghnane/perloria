<?php  
if ( ! function_exists( 'ecommerce_comp_feauty_product' ) ) :
	function ecommerce_comp_feauty_product() {
	$exclusive_product3_setting_hs		= get_theme_mod('exclusive_product3_setting_hs','1');
	$exclusive_product3_ttl 			= get_theme_mod('exclusive_product3_ttl',__('Exclusive Product','ecommerce-companion'));
	$exclusive_product3_desc 			= get_theme_mod('exclusive_product3_desc',__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ratione!','ecommerce-companion'));
	$exclusive_product3_cat				= get_theme_mod('exclusive_product3_cat'); 
if($exclusive_product3_setting_hs=='1'):	
if ( class_exists( 'woocommerce' ) ) {
$args                   = array(
	'post_type' => 'product',
	'posts_per_page' => 20,
);
if(!empty($exclusive_product3_cat)):
$args['tax_query'] = array(
	array(
		'taxonomy' => 'product_cat',
		'field' => 'slug',
		'terms' => $exclusive_product3_cat,
	),
);	
endif;
?>	
<section class="our-exclusive-products pt-default exclusive-products-home3" id="our-exclusive-products">
	<div class="container">
		<div class="row">
			<?php if(!empty($exclusive_product3_ttl)  || !empty($exclusive_product3_desc)): ?>
				<div class="heading">
					<?php if(!empty($exclusive_product3_ttl)): ?>
						<div class="title" ><?php echo wp_kses_post($exclusive_product3_ttl); ?></div>
					<?php endif; ?>
					<?php if(!empty($exclusive_product3_desc)): ?>
						<p><?php echo wp_kses_post($exclusive_product3_desc); ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<?php
				$loop = new WP_Query( $args );
				$i=0;
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				<?php
				$i=$i+1;
				if ($i % 2 == 0){
					 $class="slideInRight"; 
				}else{ 
					 $class="slideInLeft"; 
				}
			?>
				<div class="col-md-6 col-lg-3 col-xxl-3 wow <?php echo $class; ?>  slow" data-wow-delay="1.5s">
					<ul class="products">
						<?php get_template_part('woocommerce/content','product'); ?>
					</ul>
				</div>
			<?php endwhile; ?>
			<?php  wp_reset_postdata(); ?>
		</div>
</section>
<?php } endif; }
endif;
if ( function_exists( 'ecommerce_comp_feauty_product' ) ) {
$section_priority = apply_filters( 'aromatic_section_priority', 13, 'ecommerce_comp_feauty_product' );
add_action( 'aromatic_sections', 'ecommerce_comp_feauty_product', absint( $section_priority ) );
}
?>