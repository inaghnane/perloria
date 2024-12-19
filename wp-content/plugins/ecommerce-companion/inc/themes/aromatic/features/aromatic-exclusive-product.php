<?php
function aromatic_exclusive_product2_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Exclusive Product  Section
	=========================================*/
	$wp_customize->add_section(
		'exclusive_product2_setting', array(
			'title' => esc_html__( 'Exclusive Product Section', 'ecommerce-companion' ),
			'priority' => 5,
			'panel' => 'aromatic_frontpage2_sections',
		)
	);
	
	// Setting
	$wp_customize->add_setting(
		'exclusive_product2_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'exclusive_product2_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','ecommerce-companion'),
			'section' => 'exclusive_product2_setting',
		)
	);
	
	// Hide/Show
	$wp_customize->add_setting(
		'exclusive_product2_setting_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'exclusive_product2_setting_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show','ecommerce-companion'),
			'section' => 'exclusive_product2_setting',
		)
	);
	
	/*=========================================
	Header
	=========================================*/
	$wp_customize->add_setting(
		'exclusive_product2_header'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'exclusive_product2_header',
		array(
			'type' => 'hidden',
			'label' => __('Header','ecommerce-companion'),
			'section' => 'exclusive_product2_setting',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'exclusive_product2_ttl',
    	array(
	        'default'			=> __('Exclusive Product','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'exclusive_product2_ttl',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'exclusive_product2_setting',
			'type'           => 'text',
		)  
	);
	
	
	/*=========================================
	Content
	=========================================*/
	$wp_customize->add_setting(
		'exclusive_product2_content'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'exclusive_product2_content',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'exclusive_product2_setting',
		)
	);
	
	// Product Category
	if ( class_exists( 'woocommerce' ) ) {
		$wp_customize->add_setting(
		'exclusive_product2_cat',
			array(
			'capability' => 'edit_theme_options',
			'priority' => 5,
			)
		);	
		$wp_customize->add_control( new Ecommerce_Comp_Product_Category_Control( $wp_customize, 
		'exclusive_product2_cat', 
			array(
			'label'   => __('Select category','ecommerce-companion'),
			'section' => 'exclusive_product2_setting',
			) 
		) );
	}

}

add_action( 'customize_register', 'aromatic_exclusive_product2_setting' );

// selective refresh
function aromatic_exclusive_product2_section_partials( $wp_customize ){
	
	// exclusive_product2_ttl
	$wp_customize->selective_refresh->add_partial( 'exclusive_product2_ttl', array(
		'selector'            => '.exclusive-products-home2 .title-text',
		'settings'            => 'exclusive_product2_ttl',
		'render_callback'  => 'aromatic_exclusive_product2_ttl_render_callback',
	) );
	
	}

add_action( 'customize_register', 'aromatic_exclusive_product2_section_partials' );

// exclusive_product2_ttl
function aromatic_exclusive_product2_ttl_render_callback() {
	return get_theme_mod( 'exclusive_product2_ttl' );
}