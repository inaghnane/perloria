<?php
/*
 *
 * Slider 2 Default
 */
 function storely_get_slider2_default() {
	return apply_filters(
		'storely_get_slider2_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shoply/assets/images/slider/banner.png',
					'title'           => esc_html__( 'Find the boundries', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Couple Collect', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'ion', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( 'Starting At', 'ecommerce-companion' ),
					'subtitle4'            => esc_html__( '$99.00', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "left", 
					'id'              => 'customizer_repeater_slider2_001',
				),
				array(
					'image_url'       =>  ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shoply/assets/images/slider/girl.png',
					'title'           => esc_html__( 'Find the boundries', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Couple Collect', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'ion', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( 'Starting At', 'ecommerce-companion' ),
					'subtitle4'            => esc_html__( '$99.00', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "center", 
					'id'              => 'customizer_repeater_slider2_002',
				),
				array(
					'image_url'       =>  ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shoply/assets/images/slider/banner.png',
					'title'           => esc_html__( 'Find the boundries', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Couple Collect', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( 'ion', 'ecommerce-companion' ),
					'subtitle3'         => esc_html__( 'Starting At', 'ecommerce-companion' ),
					'subtitle4'            => esc_html__( '$99.00', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "right", 
					'id'              => 'customizer_repeater_slider2_003',
				)
			)
		)
	);
}

/*
 *
 * Slider Info Default
 */
 function storely_get_slider_info_default() {
	return apply_filters(
		'storely_get_slider_info_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shoply/assets/images/slider/side2.png',
					'title'           => esc_html__( 'Apple Watch', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( '20%', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '40% OFF', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider_info_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/shoply/assets/images/slider/side1.png',
					'title'           => esc_html__( 'Headphones', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( '20%', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '60% OFF', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider_info_002',
				)
			)
		)
	);
}