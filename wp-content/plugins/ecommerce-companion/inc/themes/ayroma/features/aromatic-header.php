<?php
function ayroma_lite_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
   /*=========================================
	Header Support
	=========================================*/
	// Head // 
	$wp_customize->add_setting(
    	'hdr_support_head',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 1,
		)
	);	

	$wp_customize->add_control( 
		'hdr_support_head',
		array(
		    'label'   		=> __('Support','ecommerce-companion'),
		    'section'		=> 'above_header',
			'type' 			=> 'hidden',
		)  
	);	
	
	// Hide / Show
	$wp_customize->add_setting( 
		'hs_hdr_support' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_hdr_support', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'ecommerce-companion' ),
			'section'     => 'above_header',
			'type'        => 'checkbox'
		) 
	);
	
	
	// icon // 
	$wp_customize->add_setting(
    	'hdr_support_icon',
    	array(
	        'default' => 'ja-customer-support',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		)
	);	

	$wp_customize->add_control(
		'hdr_support_icon',
		array(
		    'label'   		=> __('Icon','ecommerce-companion'),
		    'section' 		=> 'above_header',
			'type' => 'text',
			
		)  
	);	
	
	// Content // 
	$wp_customize->add_setting(
    	'hdr_support_content',
    	array(
			'default'	      => __('Support: <a href="tel:+91 123 456 7890">+91 123 456 7890</a>','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'priority' => 4,
		)
	);	

	$wp_customize->add_control( 
		'hdr_support_content',
		array(
		    'label'   		=> __('Content','ecommerce-companion'),
		    'section'		=> 'above_header',
			'type' 			=> 'textarea',
		)  
	);			
	
	
	/*=========================================
	Login
	=========================================*/
	// Head // 
	$wp_customize->add_setting(
    	'hdr_login_head',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 4,
		)
	);	

	$wp_customize->add_control( 
		'hdr_login_head',
		array(
		    'label'   		=> __('Login','ecommerce-companion'),
		    'section'		=> 'above_header',
			'type' 			=> 'hidden',
		)  
	);	
	
	// Hide / Show
	$wp_customize->add_setting( 
		'hs_hdr_login' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_checkbox',
			'priority' => 5,
		) 
	);
	
	$wp_customize->add_control(
	'hs_hdr_login', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'ecommerce-companion' ),
			'section'     => 'above_header',
			'type'        => 'checkbox'
		) 
	);
	
	// icon // 
	$wp_customize->add_setting(
    	'hdr_login_icon',
    	array(
	        'default' => 'ja-secure-payment',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
			'priority' => 5,
		)
	);	

	$wp_customize->add_control( 
		'hdr_login_icon',
		array(
		    'label'   		=> __('Icon','ecommerce-companion'),
		    'section' 		=> 'above_header',
			'iconset' => 'text',
			
		)  
	);	
	
	// Button Label // 
	$wp_customize->add_setting(
    	'hdr_login_btn_lbl',
    	array(
			'default'	      => esc_html__( 'Login', 'ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'priority' => 7,
		)
	);	

	$wp_customize->add_control( 
		'hdr_login_btn_lbl',
		array(
		    'label'   		=> __('Button Label','ecommerce-companion'),
		    'section'		=> 'above_header',
			'type' 			=> 'text',
		)  
	);	
	
	// Button Link // 
	$wp_customize->add_setting(
    	'hdr_login_btn_link',
    	array(
			'default'	      => '#',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_url',
			'priority' => 8,
		)
	);	

	$wp_customize->add_control( 
		'hdr_login_btn_link',
		array(
		    'label'   		=> __('Button Link','ecommerce-companion'),
		    'section'		=> 'above_header',
			'type' 			=> 'text',
		)  
	);	
}
add_action( 'customize_register', 'ayroma_lite_header_settings' );

