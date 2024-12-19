<?php
function flossy_cta_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Sales Info  Section
	=========================================*/
	$wp_customize->add_section(
		'cta_setting', array(
			'title' => esc_html__( 'CTA Section', 'ecommerce-companion' ),
			'priority' => 7,
			'panel' => 'flossy_frontpage_sections',
		)
	);	
	
	// Hide / Show
	$wp_customize->add_setting(
		'cta_hs'
			,array(
			'default' => '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_checkbox',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'cta_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'cta_setting',
		)
	);
	
	
	/*=========================================
	Info First
	=========================================*/
	$wp_customize->add_setting(
		'cta_first_data'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'cta_first_data',
		array(
			'type' => 'hidden',
			'label' => __('First','ecommerce-companion'),
			'section' => 'cta_setting',
		)
	);
	
	//  Title // 
	$wp_customize->add_setting(
    	'cta_ttl',
    	array(
	        'default'			=> __('Free Shipping','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_ttl',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'cta_setting',
			'type'           => 'text',
		)  
	);
	
	//  Subtitle // 
	$wp_customize->add_setting(
    	'cta_subttl',
    	array(
	        'default'			=> __('Free Delivery Now On Your First Order and over $200','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 3,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_subttl',
		array(
		    'label'   => __('Subtitle','ecommerce-companion'),
		    'section' => 'cta_setting',
			'type'           => 'text',
		)  
	);
	
	//  Text // 
	$wp_customize->add_setting(
    	'cta_btn_lbl',
    	array(
	        'default'			=> __('ONLY $200*','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_btn_lbl',
		array(
		    'label'   => __('Button Label','ecommerce-companion'),
		    'section' => 'cta_setting',
			'type'    => 'text',
		)  
	);
	
	//  Link // 
	$wp_customize->add_setting(
    	'cta_btn_link',
    	array(
	        'default'			=> __('#','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'cta_btn_link',
		array(
		    'label'   => __('Button Link','ecommerce-companion'),
		    'section' => 'cta_setting',
			'type'           => 'text',
		)  
	);
	
	//  Image // 
    $wp_customize->add_setting( 
    	'cta_bg_img' , 
    	array(
			'default' 			=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/flossy/assets/images/cta/cta_bg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_url',	
			'priority' => 5,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'cta_bg_img' ,
		array(
			'label'          => __( 'Background Image', 'ecommerce-companion' ),
			'section'        => 'cta_setting',
		) 
	));

}

add_action( 'customize_register', 'flossy_cta_setting' );

// Sales Info selective refresh
function flossy_cta_section_partials( $wp_customize ){
	
	// cta_ttl
	$wp_customize->selective_refresh->add_partial( 'cta_ttl', array(
		'selector'            => '.frontpage-cta .banner-offer-text .offer-title',
		'settings'            => 'cta_ttl',
		'render_callback'  => 'flossy_cta_ttl_render_callback',
	) );
	
	// cta_subttl
	$wp_customize->selective_refresh->add_partial( 'cta_subttl', array(
		'selector'            => '.frontpage-cta .banner-offer-text span.focus',
		'settings'            => 'cta_subttl',
		'render_callback'  => 'flossy_cta_subttl_render_callback',
	) );
	
	// cta_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'cta_btn_lbl', array(
		'selector'            => '.frontpage-cta .fl-btn1',
		'settings'            => 'cta_btn_lbl',
		'render_callback'  => 'flossy_cta_btn_lbl_render_callback',
	) );
	
	}

add_action( 'customize_register', 'flossy_cta_section_partials' );

// cta_ttl
function flossy_cta_ttl_render_callback() {
	return get_theme_mod( 'cta_ttl' );
}

// cta_subttl
function flossy_cta_subttl_render_callback() {
	return get_theme_mod( 'cta_subttl' );
}

// cta_btn_lbl
function flossy_cta_btn_lbl_render_callback() {
	return get_theme_mod( 'cta_btn_lbl' );
}