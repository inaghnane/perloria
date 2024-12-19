<?php
function flossy_latest_product_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Latest Product  Section
	=========================================*/
	$wp_customize->add_section(
		'latest_product_setting', array(
			'title' => esc_html__( 'Latest Product Section', 'ecommerce-companion' ),
			'priority' => 6,
			'panel' => 'flossy_frontpage_sections',
		)
	);
	
	// Settings
	$wp_customize->add_setting(
		'lproduct_settings_heading'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'lproduct_settings_heading',
		array(
			'type' => 'hidden',
			'label' => __('Settings','ecommerce-companion'),
			'section' => 'latest_product_setting',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting(
		'lproduct_hs'
			,array(
			'default' => '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_checkbox',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'lproduct_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'latest_product_setting',
		)
	);
	
	/*=========================================
	Header
	=========================================*/
	$wp_customize->add_setting(
		'latest_product_header'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'latest_product_header',
		array(
			'type' => 'hidden',
			'label' => __('Header','ecommerce-companion'),
			'section' => 'latest_product_setting',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'latest_product_ttl',
    	array(
	        'default'			=> __('Latest Product','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'latest_product_ttl',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'latest_product_setting',
			'type'           => 'text',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	'latest_product_subttl',
    	array(
	        'default'			=> __('Free Shipping & Return','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'latest_product_subttl',
		array(
		    'label'   => __('Subtitle','ecommerce-companion'),
		    'section' => 'latest_product_setting',
			'type'           => 'text',
		)  
	);
	
	//  Description // 
	$wp_customize->add_setting(
    	'latest_product_desc',
    	array(
	        'default'			=> __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque asperiores porro.','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'latest_product_desc',
		array(
		    'label'   => __('Description','ecommerce-companion'),
		    'section' => 'latest_product_setting',
			'type'           => 'text',
		)  
	);
	
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		'latest_product_content'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'latest_product_content',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'latest_product_setting',
		)
	);
	
	
	// Hide / Show Tab
	$wp_customize->add_setting(
		'latest_product_hs_tab'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'latest_product_hs_tab',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show Tab','ecommerce-companion'),
			'section' => 'latest_product_setting',
		)
	);
	
	
	// Product Category
	if(class_exists( 'woocommerce' )){
		$wp_customize->add_setting(
		'latest_product_cat',
			array(
			'capability' => 'edit_theme_options',
			'priority' => 5,
			)
		);	
		$wp_customize->add_control( new Ecommerce_Comp_Product_Category_Control( $wp_customize, 
		'latest_product_cat', 
			array(
			'label'   => __('Select category','ecommerce-companion'),
			'section' => 'latest_product_setting',
			) 
		) );
	}	
}

add_action( 'customize_register', 'flossy_latest_product_setting' );

// selective refresh
function flossy_latest_product_section_partials( $wp_customize ){
	
	// latest_product_ttl
	$wp_customize->selective_refresh->add_partial( 'latest_product_ttl', array(
		'selector'            => '.latest-product-home .heading-1 h2',
		'settings'            => 'latest_product_ttl',
		'render_callback'  => 'flossy_latest_product_ttl_render_callback',
	) );
	
	// latest_product_subttl
	$wp_customize->selective_refresh->add_partial( 'latest_product_subttl', array(
		'selector'            => '.latest-product-home .heading-1 span.badge',
		'settings'            => 'latest_product_subttl',
		'render_callback'  => 'flossy_latest_product_subttl_render_callback',
	) );
	
	// latest_product_desc
	$wp_customize->selective_refresh->add_partial( 'latest_product_desc', array(
		'selector'            => '.latest-product-home .heading-1 p',
		'settings'            => 'latest_product_desc',
		'render_callback'  => 'flossy_latest_product_desc_render_callback',
	) );
	
}

add_action( 'customize_register', 'flossy_latest_product_section_partials' );

// latest_product_ttl
function flossy_latest_product_ttl_render_callback() {
	return get_theme_mod( 'latest_product_ttl' );
}

// latest_product_subttl
function flossy_latest_product_subttl_render_callback() {
	return get_theme_mod( 'latest_product_subttl' );
}

// latest_product_desc
function flossy_latest_product_desc_render_callback() {
	return get_theme_mod( 'latest_product_desc' );
}