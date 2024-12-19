<?php
/*
 *
 * Slider Default
 */
 function retailsy_get_slider_default() {
	return apply_filters(
		'retailsy_get_slider_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/slider.jpg',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/product.png',
					'title'           => esc_html__( 'Exclusive offers 30% Off', 'ecommerce-companion' ),
					'subtitle'           => esc_html__( 'A Different Kind of Ecommerce Store', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'button_second'	  =>  esc_html__( 'Add To Cart', 'ecommerce-companion' ),
					'link2'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "left", 
					'id'              => 'customizer_repeater_slider_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/slider2.jpg',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/product2.png',
					'title'           => esc_html__( 'Exclusive offers 30% Off', 'ecommerce-companion' ),
					'subtitle'           => esc_html__( 'Hot Trending Collection 2023', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'button_second'	  =>  esc_html__( 'Add To Cart', 'ecommerce-companion' ),
					'link2'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "center", 
					'id'              => 'customizer_repeater_slider_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/slider3.jpg',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/page-slider/product3.png',
					'title'           => esc_html__( 'Exclusive offers 30% Off', 'ecommerce-companion' ),
					'subtitle'           => esc_html__( 'Hot Trending Collection 2023', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'button_second'	  =>  esc_html__( 'Add To Cart', 'ecommerce-companion' ),
					'link2'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "right", 
					'id'              => 'customizer_repeater_slider_003',
				)
			)
		)
	);
}




/*
 *
 * Info Default
 */
 function retailsy_get_info_default() {
	return apply_filters(
		'retailsy_get_info_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-truck',
					'title'           => esc_html__( 'Free Delivery $100', 'ecommerce-companion' ),
					'text'           => esc_html__( 'For All Orders $100', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_info_001',
				),
				array(
					'icon_value'       => 'fa-money',
					'title'           => esc_html__( 'Money Back Guarantee', 'ecommerce-companion' ),
					'text'           => esc_html__( 'Money Back', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_info_002',
				),
				array(
					'icon_value'       => 'fa-link',
					'title'           => esc_html__( 'Return 15 Days', 'ecommerce-companion' ),
					'text'           => esc_html__( 'For Free Return', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_info_003',			
				),
				array(
					'icon_value'       => 'fa-users',
					'title'           => esc_html__( '24/7 Support', 'ecommerce-companion' ),
					'text'           => esc_html__( 'Online Support', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_info_004',		
				),
			)
		)
	);
}



/*
 *
 * Banner Default
 */
 function retailsy_get_banner_default() {
	return apply_filters(
		'retailsy_get_banner_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/shining-cards/vivocard.png',
					'title'           => esc_html__( 'Mobile & Tab', 'ecommerce-companion' ),
					'text'         => esc_html__( '25% Discount', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/shining-cards/speakercard.png',
					'title'           => esc_html__( 'Digital Speaker', 'ecommerce-companion' ),
					'text'         => esc_html__( '45% Discount', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/retailsy/assets/images/homepage1/shining-cards/cameracard.png',
					'title'           => esc_html__( 'Digital Camera', 'ecommerce-companion' ),
					'text'         => esc_html__( '35% Discount', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_banner_003'
				)
			)
		)
	);
}


/**
 * Retailsy Browse Category
 */
if ( ! function_exists( 'retailsy_hdr_browse_cat' ) ) {
	function retailsy_hdr_browse_cat() {
		$browse_cat_ttl		= get_theme_mod( 'browse_cat_ttl','<i class="fa fa-list-ul"></i> Browse Categories');
		$browse_product_cat			= get_theme_mod('browse_product_cat');
		
		if(class_exists( 'woocommerce' )): 
		?>
		<button type="button" class="product-category-btn">
			<span class="cat-left">
				<?php echo wp_kses_post($browse_cat_ttl); ?>
			</span>
			<i class="fa fa-spinner"></i>
		</button>
		<div class="product-category-menus">
			<div class="product-category-menus-list">
			<?php $theme = wp_get_theme(); ?>
				<ul class="main-menu">
						<?php
						$taxonomy     = 'product_cat';
						$orderby      = 'name';
						$show_count   = 0;
						$pad_counts   = 0;
						$hierarchical = 1;
						$title        = '';
						$empty        = 0;
						$args = array(
							'taxonomy'     => $taxonomy,
							'orderby'      => $orderby,
							'show_count'   => $show_count,
							'pad_counts'   => $pad_counts,
							'hierarchical' => $hierarchical,
							'title_li'     => $title,
							'hide_empty'   => $empty
						);
						
						$all_categories = get_categories( $args );
						foreach ($all_categories as $cat) {
							$retailsy_product_cat_icon = get_term_meta($cat->term_id, 'retailsy_product_cat_icon', true);
							if($cat->category_parent == 0) {
								$category_id = $cat->term_id;
								$child_class = (retailsy_has_Children($category_id))?'menu-item-has-children':'';
								
								echo '<li class="menu-item main-top-menu '.$child_class.'"><a href="'.get_term_link($cat->slug, 'product_cat').'">'.(!empty($retailsy_product_cat_icon) ? "<i class='fa {$retailsy_product_cat_icon}'></i>":''); echo $cat->name.'</a>';
								$args2 = array(
									'taxonomy'     => $taxonomy,
									'parent'       => $category_id,
									'hierarchical' => $hierarchical,
									'hide_empty'   => $empty
								);
								$sub_cats = get_categories( $args2 );
								if($sub_cats) {
									echo '<ul class="dropdown-menu 2-main-top-menu">';
									foreach($sub_cats as $sub_category) {
										$child_class = (retailsy_has_Children($sub_category->term_id))?'menu-item-has-children':'';
										
								
										$retailsy_product_cat_icon = get_term_meta($sub_category->term_id, 'retailsy_product_cat_icon', true);
										echo  '<li class="menu-item '.$child_class.'"><a class="nav-link" href="'. get_term_link($sub_category->slug, 'product_cat') .'">'.(!empty($retailsy_product_cat_icon) ? "<i class='fa {$retailsy_product_cat_icon}'></i>":''); echo $sub_category->name .'</a>';
										
										$args3 = array(
											'taxonomy'     => $taxonomy,
											'parent'       => $sub_category->term_id,
											'hierarchical' => $hierarchical,
											'hide_empty'   => $empty
										);
										$sub_cats3 = get_categories( $args3 );
									
										if($sub_cats3) {
											echo '<ul class="dropdown-menu 3-main-top-menu">';
											foreach($sub_cats3 as $sub_category3) {
												$child_class = (retailsy_has_Children($sub_category3->term_id))?'menu-item-has-children':'';
												
												$retailsy_product_cat_icon = get_term_meta($sub_category3->term_id, 'retailsy_product_cat_icon', true);
												echo  '<li class="menu-item '.$child_class.'"><a class="nav-link" href="'. get_term_link($sub_category3->slug, 'product_cat') .'">'.(!empty($retailsy_product_cat_icon) ? "<i class='fa {$retailsy_product_cat_icon}'></i>":''); echo $sub_category3->name .'</a>';
												
												$args4 = array(
													'taxonomy'     => $taxonomy,
													'parent'       => $sub_category3->term_id,
													'hierarchical' => $hierarchical,
													'hide_empty'   => $empty
												);
												$sub_cats4 = get_categories( $args4 );
												if($sub_cats4) {
													echo '<ul class="dropdown-menu 4-main-top-menu">';
													foreach($sub_cats4 as $sub_category4) {
														$child_class = (retailsy_has_Children($sub_category4->term_id))?'menu-item-has-children':'';
														
														$retailsy_product_cat_icon = get_term_meta($sub_category4->term_id, 'retailsy_product_cat_icon', true);
														echo  '<li class="menu-item '.$child_class.'"><a class="nav-link" href="'. get_term_link($sub_category4->slug, 'product_cat') .'">'.(!empty($retailsy_product_cat_icon) ? "<i class='fa {$retailsy_product_cat_icon}'></i>":''); echo $sub_category4->name .'</a>';
														
														$args5 = array(
															'taxonomy'     => $taxonomy,
															'parent'       => $sub_category4->term_id,
															'hierarchical' => $hierarchical,
															'hide_empty'   => $empty
														);
														
														$sub_cats5 = get_categories( $args5 );
														if($sub_cats5) {
															echo '<ul class="dropdown-menu 5-main-top-menu">';
															foreach($sub_cats5 as $sub_category5) {
																$child_class = (retailsy_has_Children($sub_category5->term_id))?'menu-item-has-children':'';
																
																$retailsy_product_cat_icon = get_term_meta($sub_category5->term_id, 'retailsy_product_cat_icon', true);
																echo  '<li class="menu-item '.$child_class.'"><a class="nav-link" href="'. get_term_link($sub_category5->slug, 'product_cat') .'">'.(!empty($retailsy_product_cat_icon) ? "<i class='fa {$retailsy_product_cat_icon}'></i>":''); echo $sub_category5->name .'</a>';
																
																$args6 = array(
																	'taxonomy'     => $taxonomy,
																	'parent'       => $sub_category5->term_id,
																	'hierarchical' => $hierarchical,
																	'hide_empty'   => $empty
																);
																
																$sub_cats6 = get_categories( $args6 );
																
																if($sub_cats6) {
																	echo '<ul class="dropdown-menu 6-main-top-menu">';
																	foreach($sub_cats6 as $sub_category6) {
																		$child_class = (retailsy_has_Children($sub_category6->term_id))?'menu-item-has-children':'';
																		
																		$retailsy_product_cat_icon = get_term_meta($sub_category6->term_id, 'retailsy_product_cat_icon', true);
																		echo  '<li class="menu-item '.$child_class.'"><a class="nav-link" href="'. get_term_link($sub_category6->slug, 'product_cat') .'">'.(!empty($retailsy_product_cat_icon) ? "<i class='fa {$retailsy_product_cat_icon}'></i>":''); echo $sub_category6->name .'</a></li>';
																	}
																	echo '</ul>';
																}
																echo '</li>';
															}
															echo '</ul>';
														}
														echo '</li>';
													}
													echo '</ul>';
												}
												echo '</li>';
											}
											echo '</ul>';
										}	
										echo '</li>';
										}
										echo '</ul>';
									}
									echo '</li>';
								}
							}
						?>
					</ul>
			</div>
		</div>
		<?php
		endif;
	}
}
add_action( 'retailsy_hdr_browse_cat', 'retailsy_hdr_browse_cat' );