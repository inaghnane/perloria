<?php
function retailsy_feature_product_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Feature Product  Section
	=========================================*/
	$wp_customize->add_section(
		'feature_product_setting', array(
			'title' => esc_html__( 'Feature Product Section', 'ecommerce-companion' ),
			'priority' => 4,
			'panel' => 'retailsy_frontpage_sections',
		)
	);
	
	/*=========================================
	Header
	=========================================*/
	$wp_customize->add_setting(
		'feature_product_header'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'feature_product_header',
		array(
			'type' => 'hidden',
			'label' => __('Header','ecommerce-companion'),
			'section' => 'feature_product_setting',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'feature_product_ttl',
    	array(
	        'default'			=> __('Feature Product','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'feature_product_ttl',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'feature_product_setting',
			'type'           => 'text',
		)  
	);
	
	
	//  Button Label // 
	$wp_customize->add_setting(
    	'feature_product_btn_lbl',
    	array(
	        'default'			=> __('View All','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'feature_product_btn_lbl',
		array(
		    'label'   => __('Button Label','ecommerce-companion'),
		    'section' => 'feature_product_setting',
			'type'           => 'text',
		)  
	);
	
	//  Button Link // 
	$wp_customize->add_setting(
    	'feature_product_btn_url',
    	array(
	        'default'			=> '#',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_url',
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'feature_product_btn_url',
		array(
		    'label'   => __('Button Link','ecommerce-companion'),
		    'section' => 'feature_product_setting',
			'type'           => 'text',
		)  
	);
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		'feature_product_content'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'feature_product_content',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'feature_product_setting',
		)
	);
	
	
	// Hide / Show Tab
	$wp_customize->add_setting(
		'feature_product_hs_tab'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'retailsy_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'feature_product_hs_tab',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show Tab','ecommerce-companion'),
			'section' => 'feature_product_setting',
		)
	);
	
	// Product Category
	if(class_exists( 'woocommerce' )){
	$wp_customize->add_setting(
    'feature_product_cat',
		array(
		'capability' => 'edit_theme_options',
		'priority' => 5,
		)
	);	
	$wp_customize->add_control( new Ecommerce_Comp_Product_Category_Control( $wp_customize, 
	'feature_product_cat', 
		array(
		'label'   => __('Select category','ecommerce-companion'),
		'section' => 'feature_product_setting',
		) 
	) );
	}
	// No. of Products Display
	if ( class_exists( 'Ecommerce_Comp_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'feature_product_num',
			array(
				'default' => '20',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'ecommerce_comp_sanitize_range_value',
				'priority' => 6,
			)
		);
		$wp_customize->add_control( 
		new Ecommerce_Comp_Customizer_Range_Control( $wp_customize, 'feature_product_num', 
			array(
				'label'      => __( 'No of Products Display', 'ecommerce-companion' ),
				'section'  => 'feature_product_setting',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'    => 1,
							'max'    => 500,
							'step'   => 1,
							'default_value' => 20,
						),
					),
			) ) 
		);
	}

}

add_action( 'customize_register', 'retailsy_feature_product_setting' );

// selective refresh
function retailsy_feature_product_section_partials( $wp_customize ){
	
	// feature_product_ttl
	$wp_customize->selective_refresh->add_partial( 'feature_product_ttl', array(
		'selector'            => '.feature-products-home .section-title-name',
		'settings'            => 'feature_product_ttl',
		'render_callback'  => 'retailsy_feature_product_ttl_render_callback',
	) );
	
	// feature_product_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'feature_product_btn_lbl', array(
		'selector'            => '.feature-products-home .cbb.blue',
		'settings'            => 'feature_product_btn_lbl',
		'render_callback'  => 'retailsy_feature_product_btn_lbl_render_callback',
	) );
	
	}

add_action( 'customize_register', 'retailsy_feature_product_section_partials' );

// feature_product_ttl
function retailsy_feature_product_ttl_render_callback() {
	return get_theme_mod( 'feature_product_ttl' );
}

// feature_product_btn_lbl
function retailsy_feature_product_btn_lbl_render_callback() {
	return get_theme_mod( 'feature_product_btn_lbl' );
}