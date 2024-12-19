<?php  
if ( ! function_exists( 'ecommerce_comp_retailsy_fproduct' ) ) :
	function ecommerce_comp_retailsy_fproduct() {
	$feature_product_ttl 			= get_theme_mod('feature_product_ttl',__('Feature Product','ecommerce-companion'));
	$feature_product_btn_lbl 		= get_theme_mod('feature_product_btn_lbl',__('View All','ecommerce-companion'));
	$feature_product_btn_url 		= get_theme_mod('feature_product_btn_url','#');
	$feature_product_hs_tab			= get_theme_mod('feature_product_hs_tab','1'); 
	$feature_product_cat			= get_theme_mod('feature_product_cat');
	$feature_product_num			= get_theme_mod('feature_product_num','20');
?>	
<?php 
	if ( class_exists( 'woocommerce' ) ) {
	$args                   = array(
		'post_type' => 'product',
		'posts_per_page' => $feature_product_num,
	);
	if(!empty($feature_product_cat) && !is_customize_preview()):
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
				'terms' => $feature_product_cat,
			),
		);
	endif;
?>
<section class="jcs-section-3 pb-default feature-products-home">
	<div class="jcs-container">
		<?php if(!empty($feature_product_ttl) || $feature_product_hs_tab=='1' || !empty($feature_product_btn_lbl)): ?>
		<div class="section-3-up filter-container">
			<div id="feature-p-grid" class="jcs-row">
				<div class="section-title-name col-md-4 col-lg-3 pl-0"><?php echo wp_kses_post($feature_product_ttl); ?></div>
				<div class="jcs-row sec3feature col-md-8 col-lg-9 justify-content-between w-100 flex-md-row-reverse p-0">
					<?php if($feature_product_hs_tab=='1' && !empty($feature_product_cat)): 
					$count = count($feature_product_cat);
					if ( $count > 0 ){
					?>
						<div class="">
							<div class="section-categories">
								<div class="item-wrapper">
									<nav class="owl-filter-bar">
										<?php foreach ( $feature_product_cat as $i=> $product_category ) { 
											$product_cat_name = get_term_by( 'slug', $product_category, 'product_cat' );
											?>
										<?php if($i == '0'){  ?>
												<a href="javascript:void(0)" class="item orange-text"
											data-owl-filter=".<?php echo 'product_cat-'.$product_category; ?>"><?php  echo $product_cat_name->name; ?></a>
										
										<?php }else{ ?>		
												<a href="javascript:void(0)" class="item" data-owl-filter=".<?php echo 'product_cat-'.$product_category; ?>"><?php  echo $product_cat_name->name; ?></a>
										<?php }} ?>	
									</nav>
								</div>
							</div>
						</div>
					<?php } endif; ?>
					<?php if(!empty($feature_product_btn_lbl)):  ?>
						<div class="">
							<a href="<?php echo esc_url($feature_product_btn_url); ?>" class="cbb blue"><?php echo wp_kses_post($feature_product_btn_lbl); ?> <i class="fa fa-chevron-right"></i></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<div class="">
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
</section>
<?php } ?>
<?php
}
endif;
if ( function_exists( 'ecommerce_comp_retailsy_fproduct' ) ) {
$section_priority = apply_filters( 'retailsy_section_priority', 14, 'ecommerce_comp_retailsy_fproduct' );
add_action( 'retailsy_sections', 'ecommerce_comp_retailsy_fproduct', absint( $section_priority ) );
}
?>