<?php  
if ( ! function_exists( 'ecommerce_comp_storely_pproducts' ) ) :
	function ecommerce_comp_storely_pproducts() {
	$pproduct_hs 					= get_theme_mod('pproduct_hs','1');
	$popular_product_ttl 			= get_theme_mod('popular_product_ttl',__('Popular Product','ecommerce-companion'));
	$popular_product_hs_tab			= get_theme_mod('popular_product_hs_tab','1'); 
	$popular_product_cat			= get_theme_mod('popular_product_cat');
	if($pproduct_hs=='1'):
?>	
<?php 
//echo print_r($popular_product_cat);
	if ( class_exists( 'woocommerce' ) ) {
	$args                   = array(
		'post_type' => 'product',
		'posts_per_page' => 500,
	);
	if(!empty($popular_product_cat) && !is_customize_preview()):
	$args['tax_query'] = array(
		array(
			'taxonomy' => 'product_cat',
			'field' => 'slug',
			'terms' => $popular_product_cat,
		),
	);
	endif;
?>
<div id="popular-products" class="product-section popular-products popular-products-carousel popular-products-home st-py-default">
	<div class="container">
		<div class="row">
			<?php if(!empty($popular_product_ttl) || $popular_product_hs_tab=='1'): ?>
			<div class="col-lg-12 col-12 mx-lg-auto mb-5 wow fadeInUp">
				<div class="heading-default">
					<?php if(!empty($popular_product_ttl)): ?>
						<div class="title">
							<h5><?php echo wp_kses_post($popular_product_ttl); ?></h5>
						</div>
					<?php endif; ?>
					
					<?php if($popular_product_hs_tab=='1'  && !empty($popular_product_cat) && !is_customize_preview()):
							$count = count($popular_product_cat);
							if ( $count > 0 ){
					?>
						<div class="heading-right">
							<nav class="owl-filter-bar">
								<?php foreach ( $popular_product_cat as $product_category ) { 
								$product_cat_name = get_term_by( 'slug', $product_category, 'product_cat' );
								?>
									<?php if($product_cat_name->name == 'All'){ ?>
										<a href="javascript:void(0);" class="item current" data-owl-filter=".<?php echo esc_attr('product_cat-'.$product_category); ?>"><?php  echo esc_html($product_cat_name->name); ?></a>
									<?php }else{ ?>		
										<a href="javascript:void(0);" class="item" data-owl-filter=".<?php echo esc_attr('product_cat-'.$product_category); ?>"><?php  echo esc_html($product_cat_name->name); ?></a>
								<?php }} ?>	
							</nav>
						</div>
					<?php } endif; ?>
				</div>
			</div>
			<?php endif; ?>
			<div class="col-lg-12 col-12 wow fadeInUp">
				<div class="woocommerce columns-4 ">
					<ul class="products columns-4">
						<?php
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
						<?php get_template_part('woocommerce/content','product'); ?>
						<?php endwhile; ?>
						<?php  wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } endif; }
endif;
if ( function_exists( 'ecommerce_comp_storely_pproducts' ) ) {
$section_priority = apply_filters( 'storely_section_priority', 12, 'ecommerce_comp_storely_pproducts' );
add_action( 'storely_sections', 'ecommerce_comp_storely_pproducts', absint( $section_priority ) );
}
?>