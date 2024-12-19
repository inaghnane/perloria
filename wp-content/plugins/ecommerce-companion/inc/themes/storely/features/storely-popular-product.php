<?php
function storely_popular_product_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Popular Product  Section
	=========================================*/
	$wp_customize->add_section(
		'popular_product_setting', array(
			'title' => esc_html__( 'Popular Product Section', 'ecommerce-companion' ),
			'priority' => 3,
			'panel' => 'storely_frontpage_sections',
		)
	);
	
	// Settings
	$wp_customize->add_setting(
		'pproduct_settings_heading'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'pproduct_settings_heading',
		array(
			'type' => 'hidden',
			'label' => __('Settings','ecommerce-companion'),
			'section' => 'popular_product_setting',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting(
		'pproduct_hs'
			,array(
			'default' => '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'pproduct_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'popular_product_setting',
		)
	);
	
	/*=========================================
	Header
	=========================================*/
	$wp_customize->add_setting(
		'popular_product_header'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'popular_product_header',
		array(
			'type' => 'hidden',
			'label' => __('Header','ecommerce-companion'),
			'section' => 'popular_product_setting',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'popular_product_ttl',
    	array(
	        'default'			=> __('Popular Product','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'popular_product_ttl',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'popular_product_setting',
			'type'           => 'text',
		)  
	);
	
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		'popular_product_content'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'popular_product_content',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'popular_product_setting',
		)
	);
	
	
	// Hide / Show Tab
	$wp_customize->add_setting(
		'popular_product_hs_tab'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'popular_product_hs_tab',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show Tab','ecommerce-companion'),
			'section' => 'popular_product_setting',
		)
	);
	
	
	// Product Category
	if(class_exists( 'woocommerce' )){
		$wp_customize->add_setting(
		'popular_product_cat',
			array(
			'capability' => 'edit_theme_options',
			'default' => 1,
			'priority' => 5,
			)
		);	
		$wp_customize->add_control( new Ecommerce_Comp_Product_Category_Control( $wp_customize, 
		'popular_product_cat', 
			array(
			'label'   => __('Select category','ecommerce-companion'),
			'section' => 'popular_product_setting',
			) 
		) );
	}
}

add_action( 'customize_register', 'storely_popular_product_setting' );

// selective refresh
function storely_popular_product_section_partials( $wp_customize ){
	
	// popular_product_ttl
	$wp_customize->selective_refresh->add_partial( 'popular_product_ttl', array(
		'selector'            => '.popular-products-home .heading-default h5',
		'settings'            => 'popular_product_ttl',
		'render_callback'  => 'storely_popular_product_ttl_render_callback',
	) );
	
	}

add_action( 'customize_register', 'storely_popular_product_section_partials' );

// popular_product_ttl
function storely_popular_product_ttl_render_callback() {
	return get_theme_mod( 'popular_product_ttl' );
}