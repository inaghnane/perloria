<?php
function aromatic_product_grab2_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Product Grab Section
	=========================================*/
	$wp_customize->add_section(
		'product_grab2_setting', array(
			'title' => esc_html__( 'Product Grab Section', 'ecommerce-companion' ),
			'priority' => 10,
			'panel' => 'aromatic_frontpage2_sections',
		)
	);
	
	// Setting
	$wp_customize->add_setting(
		'product_grab2_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'product_grab2_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','ecommerce-companion'),
			'section' => 'product_grab2_setting',
		)
	);
	
	// Hide/Show
	$wp_customize->add_setting(
		'product_grab2_setting_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_checkbox',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'product_grab2_setting_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show','ecommerce-companion'),
			'section' => 'product_grab2_setting',
		)
	);
	
	/*=========================================
	Left Content
	=========================================*/
	$wp_customize->add_setting(
		'product_grab2_left_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'product_grab2_left_head',
		array(
			'type' => 'hidden',
			'label' => __('Left Content','ecommerce-companion'),
			'section' => 'product_grab2_setting',
		)
	);

	
	// Title // 
	$wp_customize->add_setting(
    	'product_grab2_ttl',
    	array(
			'default'	      => esc_html__( 'Grab Our Products Now', 'ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 5,
		)
	);	

	$wp_customize->add_control( 
		'product_grab2_ttl',
		array(
		    'label'   		=> __('Title','ecommerce-companion'),
		    'section'		=> 'product_grab2_setting',
			'type' 			=> 'text',
		)  
	);	
	
	// Desciption // 
	$wp_customize->add_setting(
    	'product_grab2_desc',
    	array(
			'default'	      => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nobis totam veritatis dolorum fugiat, molestias officiis', 'ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 5,
		)
	);	

	$wp_customize->add_control( 
		'product_grab2_desc',
		array(
		    'label'   		=> __('Desciption','ecommerce-companion'),
		    'section'		=> 'product_grab2_setting',
			'type' 			=> 'textarea',
		)  
	);	
	
	
	//  Button Label  // 
	$wp_customize->add_setting(
    	'product_grab2_btn_lbl1',
    	array(
			'default'	      => __('Contact Us','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	

	$wp_customize->add_control( 
		'product_grab2_btn_lbl1',
		array(
		    'label'   		=> __('Button Label 1','ecommerce-companion'),
		    'section'		=> 'product_grab2_setting',
			'type' 			=> 'text',
		)  
	);	
	
	//  Link // 
	$wp_customize->add_setting(
    	'product_grab2_link1',
    	array(
			'default'	      => '#',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_url',
			'priority' => 6,
		)
	);	

	$wp_customize->add_control( 
		'product_grab2_link1',
		array(
		    'label'   		=> __('Link 1','ecommerce-companion'),
		    'section'		=> 'product_grab2_setting',
			'type' 			=> 'text',
		)  
	);	
	
	//  Button Label  // 
	$wp_customize->add_setting(
    	'product_grab2_btn_lbl2',
    	array(
			'default'	      => __('Go To Shop','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 7,
		)
	);	

	$wp_customize->add_control( 
		'product_grab2_btn_lbl2',
		array(
		    'label'   		=> __('Button Label 2','ecommerce-companion'),
		    'section'		=> 'product_grab2_setting',
			'type' 			=> 'text',
		)  
	);	
	
	//  Link // 
	$wp_customize->add_setting(
    	'product_grab2_link2',
    	array(
			'default'	      => '#',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_url',
			'priority' => 8,
		)
	);	

	$wp_customize->add_control( 
		'product_grab2_link2',
		array(
		    'label'   		=> __('Link 2','ecommerce-companion'),
		    'section'		=> 'product_grab2_setting',
			'type' 			=> 'text',
		)  
	);	
	
	
	/*=========================================
	Right Content
	=========================================*/
	$wp_customize->add_setting(
		'product_grab2_right_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 9,
		)
	);

	$wp_customize->add_control(
	'product_grab2_right_head',
		array(
			'type' => 'hidden',
			'label' => __('Right Content','ecommerce-companion'),
			'section' => 'product_grab2_setting',
		)
	);
	
		
	//  Image // 
    $wp_customize->add_setting( 
    	'product_grab2_img' , 
    	array(
			'default' 			=> esc_url(ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/aromatic/assets/images/grab.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'product_grab2_img' ,
		array(
			'label'          => esc_html__( 'Image', 'ecommerce-companion'),
			'section'        => 'product_grab2_setting',
		) 
	));
}
add_action( 'customize_register', 'aromatic_product_grab2_setting' );

// custom selective refresh
function aromatic_product_grab2_section_partials( $wp_customize ){
	// product_grab2_ttl
	$wp_customize->selective_refresh->add_partial( 'product_grab2_ttl', array(
		'selector'            => '.grab2-home .title',
		'settings'            => 'product_grab2_ttl',
		'render_callback'  => 'aromatic_product_grab2_ttl_render_callback',
	) );
	
	// product_grab2_desc
	$wp_customize->selective_refresh->add_partial( 'product_grab2_desc', array(
		'selector'            => '.grab2-home p.text',
		'settings'            => 'product_grab2_desc',
		'render_callback'  => 'aromatic_product_grab2_desc_render_callback',
	) );
	
	// product_grab2_btn_lbl1
	$wp_customize->selective_refresh->add_partial( 'product_grab2_btn_lbl1', array(
		'selector'            => '.grab2-home .grab-contact.cta-01 span',
		'settings'            => 'product_grab2_btn_lbl1',
		'render_callback'  => 'aromatic_product_grab2_btn_lbl1_render_callback',
	) );
	
	// product_grab2_btn_lbl2
	$wp_customize->selective_refresh->add_partial( 'product_grab2_btn_lbl2', array(
		'selector'            => '.grab2-home .grab-contact.cta-02 span',
		'settings'            => 'product_grab2_btn_lbl2',
		'render_callback'  => 'aromatic_product_grab2_btn_lbl2_render_callback',
	) );
	}
add_action( 'customize_register', 'aromatic_product_grab2_section_partials' );

// product_grab2_ttl
function aromatic_product_grab2_ttl_render_callback() {
	return get_theme_mod( 'product_grab2_ttl' );
}

// product_grab2_desc
function aromatic_product_grab2_desc_render_callback() {
	return get_theme_mod( 'product_grab2_desc' );
}

// product_grab2_btn_lbl1
function aromatic_product_grab2_btn_lbl1_render_callback() {
	return get_theme_mod( 'product_grab2_btn_lbl1' );
}

// product_grab2_btn_lbl2
function aromatic_product_grab2_btn_lbl2_render_callback() {
	return get_theme_mod( 'product_grab2_btn_lbl2' );
}
