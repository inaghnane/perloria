<?php
function retailsy_slider_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
/*=========================================
	Retailsy Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','ecommerce-companion'),
			'panel'  		=> 'header_section',
		)
    );

	// Logo Width // 
	if ( class_exists( 'Ecommerce_Comp_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'logo_width',
			array(
				'default'			=> '140',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'ecommerce_comp_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Ecommerce_Comp_Customizer_Range_Control( $wp_customize, 'logo_width', 
			array(
				'label'      => __( 'Logo Width', 'ecommerce-companion' ),
				'section'  => 'title_tagline',
				 'media_query'   => true,
					'input_attr'    => array(
						'mobile'  => array(
							'min'           => 0,
							'max'           => 500,
							'step'          => 1,
							'default_value' => 140,
						),
						'tablet'  => array(
							'min'           => 0,
							'max'           => 500,
							'step'          => 1,
							'default_value' => 140,
						),
						'desktop' => array(
							'min'           => 0,
							'max'           => 500,
							'step'          => 1,
							'default_value' => 140,
						),
					),
			) ) 
		);
	}
	/*=========================================
	Slider Section Panel
	=========================================*/
	
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Welcome Banner Section', 'ecommerce-companion' ),
			'panel' => 'retailsy_frontpage_sections',
			'priority' => 1,
		)
	);
	
	// slider Contents
	$wp_customize->add_setting(
		'slider_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'slider_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Contents','ecommerce-companion'),
			'section' => 'slider_setting',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'slider_ttl',
    	array(
	        'default'			=> __('Exclusive Offers 30% Off','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'slider_ttl',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'slider_setting',
			'type'           => 'text',
		)  
	);
	
	// Subtitle // 
	$wp_customize->add_setting(
    	'slider_subttl',
    	array(
	        'default'			=> __('Hot Trending Collection 2023','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'slider_subttl',
		array(
		    'label'   => __('Subtitle','ecommerce-companion'),
		    'section' => 'slider_setting',
			'type'           => 'text',
		)  
	);
	
	//  Button Label // 
	$wp_customize->add_setting(
    	'slider_btn_lbl',
    	array(
	        'default'			=> __('Shop Now','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'slider_btn_lbl',
		array(
		    'label'   => __('Button Label','ecommerce-companion'),
		    'section' => 'slider_setting',
			'type'           => 'text',
		)  
	);
	
	//  Button Link // 
	$wp_customize->add_setting(
    	'slider_btn_url',
    	array(
	        'default'			=> '#',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_url',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'slider_btn_url',
		array(
		    'label'   => __('Button Link','ecommerce-companion'),
		    'section' => 'slider_setting',
			'type'           => 'text',
		)  
	);
	
	// Slider Image // 
    $wp_customize->add_setting( 
    	'slider_bg_img' , 
    	array(
			'default' 			=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storefit/assets/images/homepage1/page-slider/slider.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'slider_bg_img' ,
		array(
			'label'          => esc_html__( 'Slider Image', 'ecommerce-companion'),
			'section'        => 'slider_setting',
		) 
	));
	
	// Slider Product Image // 
    $wp_customize->add_setting( 
    	'slider_product_img' , 
    	array(
			'default' 			=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/storefit/assets/images/homepage1/page-slider/product.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_url',	
			'priority' => 11,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'slider_product_img' ,
		array(
			'label'          => esc_html__( 'Product Image', 'ecommerce-companion'),
			'section'        => 'slider_setting',
		) 
	));
	
}

add_action( 'customize_register', 'retailsy_slider_setting' );

// selective refresh
function retailsy_slider_section_partials( $wp_customize ){
	
	// slider_ttl
	$wp_customize->selective_refresh->add_partial( 'slider_ttl', array(
		'selector'            => '.banner-text-section .offer',
		'settings'            => 'slider_ttl',
		'render_callback'  => 'retailsy_slider_ttl_render_callback',
	) );
	
	// slider_subttl
	$wp_customize->selective_refresh->add_partial( 'slider_subttl', array(
		'selector'            => '.banner-text-section .banner-main-content',
		'settings'            => 'slider_subttl',
		'render_callback'  => 'retailsy_slider_subttl_render_callback',
	) );
	
	// slider_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'slider_btn_lbl', array(
		'selector'            => '.banner-text-section .bubble-flex > .cbb > span',
		'settings'            => 'slider_btn_lbl',
		'render_callback'  => 'retailsy_slider_btn_lbl_render_callback',
	) );
	
	}

add_action( 'customize_register', 'retailsy_slider_section_partials' );

// slider_ttl
function retailsy_slider_ttl_render_callback() {
	return get_theme_mod( 'slider_ttl' );
}

// slider_subttl
function retailsy_slider_subttl_render_callback() {
	return get_theme_mod( 'slider_subttl' );
}

// slider_btn_lbl
function retailsy_slider_btn_lbl_render_callback() {
	return get_theme_mod( 'slider_btn_lbl' );
}