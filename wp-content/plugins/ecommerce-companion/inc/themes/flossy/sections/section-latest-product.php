<?php
	if ( ! function_exists( 'ecommerce_comp_flossy_lproducts' ) ) :
	function ecommerce_comp_flossy_lproducts() {
		$lproduct_hs 				= get_theme_mod('lproduct_hs','1');
		$latest_product_ttl 		= get_theme_mod('latest_product_ttl',__('Latest <span class="text-primar">Stock</span><div class="title-animation"></div>','ecommerce-companion')); 
		$latest_product_subttl 		= get_theme_mod('latest_product_subttl',__('Free Shipping & Return','ecommerce-companion'));
		$latest_product_desc 		= get_theme_mod('latest_product_desc',__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque asperiores porro.','ecommerce-companion'));
		$latest_product_hs_tab		= get_theme_mod('latest_product_hs_tab','1'); 
		$latest_product_cat			= get_theme_mod('latest_product_cat');
		if($lproduct_hs=='1'):
?>	
<?php 
	if ( class_exists( 'woocommerce' ) ) {
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 500,
		);
	
	if(!empty($latest_product_cat) && !is_customize_preview()):
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
				'terms' => $latest_product_cat,
			),
		);
	endif;
?>
<!-- New Collections -->
<section class="latest-product-home py-default new-collection1 collection">
	<div class="bg-droduct-gr-1 bg-elements"><img src="<?php echo esc_url(ECOMMERCE_COMP_PLUGIN_URL.'inc/themes/flossy/assets/images/bg-elements/element-1.png'); ?>"
			alt="<?php echo esc_html__('bg-elements','ecommerce-companion'); ?>"></div>
	<div class="bg-droduct-gr-2 bg-elements"><img src="<?php echo esc_url(ECOMMERCE_COMP_PLUGIN_URL.'inc/themes/flossy/assets/images/bg-elements/element-14.png'); ?>"
			alt="<?php echo esc_html__('bg-elements','ecommerce-companion'); ?>"></div>
	<div class="bg-droduct-gr-3 bg-elements"><img src="<?php echo esc_url(ECOMMERCE_COMP_PLUGIN_URL.'inc/themes/flossy/assets/images/bg-elements/element-10.png'); ?>"
			alt="<?php echo esc_html__('bg-elements','ecommerce-companion'); ?>"></div>
	<div class="container">
		<div class="row">
			<?php if(!empty($latest_product_ttl) || !empty($latest_product_subttl) || !empty($latest_product_desc)){ ?>
				<div class="heading-1 text-center">
					<?php if(!empty($latest_product_subttl)): ?>
						<span class="badge title">
							<?php echo esc_html($latest_product_subttl); ?>
						</span>
					<?php endif; ?>
					
					<?php if(!empty($latest_product_ttl)): ?>
						<h2>
							<?php echo wp_kses_post($latest_product_ttl); ?>
						</h2>
					<?php endif; ?>
					
					<?php if(!empty($latest_product_desc)): ?>
						<p>
							<?php echo esc_html($latest_product_desc); ?>
						</p>
					<?php endif; ?>
				</div>
			<?php } ?>
				
			
			<?php 
				if($latest_product_hs_tab=='1'  && !empty($latest_product_cat) && is_array($latest_product_cat) ):
				$count = count($latest_product_cat);
				if ( $count > 0 ){
			?>
				<div class="col-12">
					<nav class="owl-filter-bar filter-buttons  text-center">
						<?php foreach ( $latest_product_cat as $product_category ) { 
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
		<div class="woocommerce columns-4">
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
<!-- New collection End -->
<?php  } endif; }
endif;
if ( function_exists( 'ecommerce_comp_flossy_lproducts' ) ) {
$section_priority = apply_filters( 'flossy_section_priority', 12, 'ecommerce_comp_flossy_lproducts' );
add_action( 'flossy_sections', 'ecommerce_comp_flossy_lproducts', absint( $section_priority ) );
}
?>
