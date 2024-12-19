<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Storely
 */
 
/**
 * Get registered sidebar name by sidebar ID.
 *
 * @since  1.0.0
 * @param  string $sidebar_id Sidebar ID.
 * @return string Sidebar name.
 */
function storely_lite_get_sidebar_name_by_id( $sidebar_id = '' ) {

	if ( ! $sidebar_id ) {
		return;
	}

	global $wp_registered_sidebars;
	$sidebar_name = '';

	if ( isset( $wp_registered_sidebars[ $sidebar_id ] ) ) {
		$sidebar_name = $wp_registered_sidebars[ $sidebar_id ]['name'];
	}

	return $sidebar_name;
}
 
/*
 *
 * Social Icon
 */
function storely_get_social_icon_default() {
	return apply_filters(
		'storely_get_social_icon_default', json_encode(
				 array(
				array(
					'icon_value'	  =>  esc_html__( 'fa-facebook', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_001',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-google-plus', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_002',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-twitter', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_003',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-linkedin', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_004',
				)
			)
		)
	);
}
 
/*
 *
 * Slider Default
 */
 function storely_get_slider_default() {
	return apply_filters(
		'storely_get_slider_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/slider/slide-bg1.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/slider/slide-img1.png',
					'title'           => esc_html__( 'Save Up to', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( '$700', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'on the Newest', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( 'iPhone', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elited do veniam.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/slider/slide-bg2.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/slider/slide-img2.png',
					'title'           => esc_html__( 'Save Up to', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( '$800', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'on the Newest', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( 'iPhone X2', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elited do veniam.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/slider/slide-bg3.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/slider/slide-img3.png',
					'title'           => esc_html__( 'Save Up to', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( '$1000', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'on the Newest', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( 'iPhone X3', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elited do veniam.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider_003',
				)
			)
		)
	);
}


/*
 *
 * Slider 5 Default
 */
 function storely_get_slider5_default() {
	return apply_filters(
		'storely_get_slider5_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shopiva/assets/images/slider/slider.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shopiva/assets/images/slider/slide-1.png',
					'title'           => esc_html__( 'New Season Dresses', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'UP TO', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '70% OFF', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( 'Starting At', 'ecommerce-companion' ),
					'subtitle4'         => esc_html__( '$40.00', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur  adipiscing elited do veniam.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "left", 
					'id'              => 'customizer_repeater_slider5_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shopiva/assets/images/slider/slider.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shopiva/assets/images/slider/slide-2.png',
					'title'           => esc_html__( 'New Season Dresses', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'UP TO', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '70% OFF', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( 'Starting At', 'ecommerce-companion' ),
					'subtitle4'         => esc_html__( '$40.00', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur  adipiscing elited do veniam.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "center", 
					'id'              => 'customizer_repeater_slider5_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shopiva/assets/images/slider/slider.png',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shopiva/assets/images/slider/slide-3.png',
					'title'           => esc_html__( 'New Season Dresses', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'UP TO', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '70% OFF', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( 'Starting At', 'ecommerce-companion' ),
					'subtitle4'         => esc_html__( '$40.00', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur  adipiscing elited do veniam.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
				)
			)
		)
	);
}

/*
 *
 * Banner Info Default
 */
if( 'Storezia' == $theme->name){ 
	 function storely_get_banner_info_default() {
		return apply_filters(
			'storely_get_banner_info_default', json_encode(
					 array(
					array(
						'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/banner_info/banner_info01.png',
						'title'           => esc_html__( 'Up 30% off', 'ecommerce-companion' ),
						'subtitle'            => esc_html__( 'Headphones Zone', 'ecommerce-companion' ),
						'text'            => esc_html__( 'New Collection 2021', 'ecommerce-companion' ),
						'text2'            => esc_html__( 'Shop Now', 'ecommerce-companion' ),
						'link'            => '#',
						'id'              => 'customizer_repeater_banner_info_001',
					),
					array(
						'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/banner_info/banner_info02.png',
						'title'           => esc_html__( 'Up 50% off', 'ecommerce-companion' ),
						'subtitle'            => esc_html__( 'New Apple Mobile', 'ecommerce-companion' ),
						'text'            => esc_html__( 'Wireless Headphones', 'ecommerce-companion' ),
						'text2'            => esc_html__( 'Shop Now', 'ecommerce-companion' ),
						'link'            => '#',
						'id'              => 'customizer_repeater_banner_info_002',
					),
					array(
						'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/banner_info/banner_info01.png',
						'title'           => esc_html__( 'Up 60% off', 'ecommerce-companion' ),
						'subtitle'            => esc_html__( 'Headphones Zone', 'ecommerce-companion' ),
						'text'            => esc_html__( 'New Collection 2021', 'ecommerce-companion' ),
						'text2'            => esc_html__( 'Shop Now', 'ecommerce-companion' ),
						'link'            => '#',
						'id'              => 'customizer_repeater_banner_info_003',
					),
				)
			)
		);
	}
}else{
	function storely_get_banner_info_default() {
		return apply_filters(
			'storely_get_banner_info_default', json_encode(
					 array(
					array(
						'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/banner_info/banner_info01.png',
						'title'           => esc_html__( 'Up 30% off', 'ecommerce-companion' ),
						'subtitle'            => esc_html__( 'New Apple Mobile', 'ecommerce-companion' ),
						'text'            => esc_html__( 'New Collection 2021', 'ecommerce-companion' ),
						'text2'            => esc_html__( 'Shop Now', 'ecommerce-companion' ),
						'link'            => '#',
						'id'              => 'customizer_repeater_banner_info_001',
					),
					array(
						'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storely/assets/images/banner_info/banner_info02.png',
						'title'           => esc_html__( 'Up 50% off', 'ecommerce-companion' ),
						'subtitle'            => esc_html__( 'Headphones Zone', 'ecommerce-companion' ),
						'text'            => esc_html__( 'Wireless Headphones', 'ecommerce-companion' ),
						'text2'            => esc_html__( 'Shop Now', 'ecommerce-companion' ),
						'link'            => '#',
						'id'              => 'customizer_repeater_banner_info_002',
					),
				)
			)
		);
	}
}


/*
 *
 * Footer Above Default
 */
 function storely_get_footer_above_default() {
	return apply_filters(
		'storely_get_footer_above_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-question-circle-o',
					'title'           => esc_html__( 'Help Center', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_footer_above_001',
				),
				array(
					'icon_value'       => 'fa-american-sign-language-interpreting',
					'title'           => esc_html__( 'Return & Refund', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_footer_above_002',
				),
				array(
					'icon_value'       => 'fa-phone-square',
					'title'           => esc_html__( 'Contact Us', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_footer_above_003',			
				),
				array(
					'icon_value'       => 'fa-tags',
					'title'           => esc_html__( 'Coupon Code', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_footer_above_004',			
				),
			)
		)
	);
}



/*
 *
 * Footer Widget Left Content Default
 */
 function storely_get_footer_widet_left_content_default() {
	return apply_filters(
		'storely_get_footer_widet_left_content_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-home',
					'title'           => esc_html__( 'Our Business Address Is 1063 Freelon San Francisco, CA 95108', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_footer_widget_left_001',
				),
				array(
					'icon_value'       => 'fa-mobile-phone',
					'title'           => esc_html__( '+020.566.6666', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_footer_widget_left_002',
				),
				array(
					'icon_value'       => 'fa-envelope-o',
					'title'           => esc_html__( 'Demo@example.com', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_footer_widget_left_003',			
				),
				array(
					'icon_value'       => 'fa-calculator',
					'title'           => esc_html__( 'Fax: 0484 565 2262', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_footer_widget_left_004',			
				),
			)
		)
	);
}

/*
 *
 * Service Default
 */
 function storely_get_service_default() {
	return apply_filters(
		'storely_get_service_default', json_encode(
				 array(
				array(
					'icon_value'       => 'fa-truck',
					'title'           => esc_html__( 'Free Shipping.', 'ecommerce-companion' ),
					'text'            => esc_html__( 'No one rejects, dislikes.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_service_001',
				),
				array(
					'icon_value'       => 'fa-shopping-cart',
					'title'           => esc_html__( 'Fast Delivery.', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Many desktop page now.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_service_002',
				),
				array(
					'icon_value'       => 'fa-image',
					'title'           => esc_html__( 'Online Payment.', 'ecommerce-companion' ),
					'text'            => esc_html__( 'All the Lorem Ipsum on.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_service_003',
				)
			)
		)
	);
}

/*
 *
 * Service Default
 */
 function storely_get_shoply_service_default() {
	 $theme = wp_get_theme(); // gets the current theme
	return apply_filters(
		'storely_get_shoply_service_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/'.strtolower($theme->name).'/assets/images/service/1.png',
					'title'           => esc_html__( 'Free Shipping.', 'ecommerce-companion' ),
					'text'            => esc_html__( 'No one rejects.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_service_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/'.strtolower($theme->name).'/assets/images/service/2.png',
					'title'           => esc_html__( 'Fast Delivery.', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Many desktop page.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_service_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/'.strtolower($theme->name).'/assets/images/service/3.png',
					'title'           => esc_html__( 'Online Payment.', 'ecommerce-companion' ),
					'text'            => esc_html__( 'All the Lorem Ipsum on.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_service_003',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/'.strtolower($theme->name).'/assets/images/service/4.png',
					'title'           => esc_html__( 'Help Support.', 'ecommerce-companion' ),
					'text'            => esc_html__( 'All the Lorem Ipsum on.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_service_003',
				)
			)
		)
	);
}



/**
 * 
 * Storely Premium Links
 * 
 */
 
 if ( ! function_exists( 'storely_premium_links' ) ) :
	function storely_premium_links() {
		
		$theme = wp_get_theme(); // gets the current theme
		if( 'Shoply' == $theme->name){
			$storely_premium_url= 'https://sellerthemes.com/shoply-premium/';
		}elseif('Storess' == $theme->name){
			$storely_premium_url= 'https://sellerthemes.com/storess-premium/';
		}elseif('Storezia' == $theme->name){
			$storely_premium_url= 'https://sellerthemes.com/storezia-premium/';	
		}elseif('Shopiva' == $theme->name){
			$storely_premium_url= 'https://sellerthemes.com/shopiva-premium/';
		}elseif('Shopient' == $theme->name){
			$storely_premium_url= 'https://sellerthemes.com/shopient-premium/';
		}else{
			$storely_premium_url= 'https://sellerthemes.com/storely-premium/';
		}	
		
		return $storely_premium_url;
	}
endif;