<?php
function ecommerce_flossy_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
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
	Above Header
	=========================================*/	
	$wp_customize->add_section(
        'above_header',
        array(
        	'priority'      => 1,
            'title' 		=> __('Above Header','flossy'),
			'panel'  		=> 'header_section',
		)
    );
	
	/*=========================================
	Widget Left
	=========================================*/	
	// Heading
	$wp_customize->add_setting(
		'hdr_left_widget'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'hdr_left_widget',
		array(
			'type' => 'hidden',
			'label' => __('Widget Left','ecommerce-companion'),
			'section' => 'above_header',
		)
	);
	
	$wp_customize->add_setting( 
		'hide_show_typerite_text' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_typerite_text', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'ecommerce-companion' ),
			'section'     => 'above_header',
			'type'        => 'checkbox'
		) 
	);
		
	//  Typerite
	$wp_customize->add_setting( 
		'hdr_typerite_text' , 
			array(
			'default' => __('["Free shipping all order of $150","Allow users to easily register","filter products by price","Product previews available"]','ecommerce-companion'),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hdr_typerite_text', 
		array(
			'label'	      => esc_html__( 'Title', 'ecommerce-companion' ),
			'section'     => 'above_header',
			'type'        => 'text'
		) 
	);
	
	
	/*=========================================
	Widget Right
	=========================================*/	
	// Heading
	// $wp_customize->add_setting(
		// 'hdr_right_widget'
			// ,array(
			// 'capability'     	=> 'edit_theme_options',
			// 'sanitize_callback' => 'flossy_sanitize_text',
			// 'priority' => 1,
		// )
	// );

	// $wp_customize->add_control(
	// 'hdr_right_widget',
		// array(
			// 'type' => 'hidden',
			// 'label' => __('Widget Right','ecommerce-companion'),
			// 'section' => 'above_header',
		// )
	// );
	
	// Header Contact Us
	$wp_customize->add_setting(
		'hdr_contact_us'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 9,
		)
	);

	$wp_customize->add_control(
	'hdr_contact_us',
		array(
			'type' => 'hidden',
			'label' => __('Contact Us','ecommerce-companion'),
			'section' => 'header_navigation',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_contact_us' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_checkbox',
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_contact_us', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'ecommerce-companion' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	
	
	// hdr_contact_us_title // 
	$wp_customize->add_setting(
    	'hdr_contact_us_title',
    	array(
	        'default'			=> __('Call Us:','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			//'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'hdr_contact_us_title',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'header_navigation',
			'type'           => 'text',
		)  
	);
	// hdr_contact_us_number
	$wp_customize->add_setting( 
		'hdr_contact_us_number' , 
			array(
			'default' => '+70 975 975 70',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'priority' => 11,
		) 
	);
	
	$wp_customize->add_control(
	'hdr_contact_us_number', 
		array(
			'label'	      => esc_html__( 'Contact Number', 'ecommerce-companion' ),
			'section'     => 'header_navigation',
			'type'        => 'text'
		) 
	);
	// Offer Code
	$wp_customize->add_setting(
		'hdr_offer_code'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 9,
		)
	);

	$wp_customize->add_control(
	'hdr_offer_code',
		array(
			'type' => 'hidden',
			'label' => __('Offer Code','ecommerce-companion'),
			'section' => 'header_navigation',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_offer_code' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_checkbox',
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_offer_code', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'ecommerce-companion' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	
	
	
	// Offer
	$wp_customize->add_setting( 
		'hdr_offer_code_lbl' , 
			array(
			'default' => 'Click Button',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'priority' => 11,
		) 
	);
	
	$wp_customize->add_control(
	'hdr_offer_code_lbl', 
		array(
			'label'	      => esc_html__( 'Offer', 'ecommerce-companion' ),
			'section'     => 'header_navigation',
			'type'        => 'text'
		) 
	);	
		//Pro feature
		class flossy_header_social_premium extends WP_Customize_Control {
			public function render_content() {
			?>
				<a class="customizer_header_social_premium up-to-pro" href="#" target="_blank" style="display: none;"><?php esc_html_e('More Icons Available in the Premium Version','ecommerce-companion'); ?></a>			
			<?php
			}
		}
		
		$wp_customize->add_setting( 'flossy_hdr_social_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new flossy_header_social_premium(
			$wp_customize,
			'flossy_hdr_social_premium',
				array(
					'section'				=> 'above_header',
				)
			)
		);
}
add_action( 'customize_register', 'ecommerce_flossy_header_settings' );