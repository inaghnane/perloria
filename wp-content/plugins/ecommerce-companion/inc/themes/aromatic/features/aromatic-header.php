<?php
function aromatic_lite_header_settings( $wp_customize ) {
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
	Above Header Section
	=========================================*/
	$wp_customize->add_section(
        'above_header',
        array(
        	'priority'      => 2,
            'title' 		=> __('Header','ecommerce-companion'),
			'panel'  		=> 'header_section',
		)
    );
	
	/*=========================================
	My Account
	=========================================*/
	// Head // 
	$wp_customize->add_setting(
    	'hdr_acc_head',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 9,
		)
	);	

	$wp_customize->add_control( 
		'hdr_acc_head',
		array(
		    'label'   		=> __('My Account','ecommerce-companion'),
		    'section'		=> 'above_header',
			'type' 			=> 'hidden',
		)  
	);	
	
	// Hide / Show
	$wp_customize->add_setting( 
		'hs_hdr_acc' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_checkbox',
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control(
	'hs_hdr_acc', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'ecommerce-companion' ),
			'section'     => 'above_header',
			'type'        => 'checkbox'
		) 
	);
	
	
	// Button Label // 
	$wp_customize->add_setting(
    	'hdr_acc_btn_lbl',
    	array(
			'default'	      => esc_html__( 'Logout', 'ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'priority' => 11,
		)
	);	

	$wp_customize->add_control( 
		'hdr_acc_btn_lbl',
		array(
		    'label'   		=> __('Logout Label','ecommerce-companion'),
		    'section'		=> 'above_header',
			'type' 			=> 'text',
		)  
	);	
	
	// Button Label // 
	$wp_customize->add_setting(
    	'hdr_acc_login_lbl',
    	array(
			'default'	      => esc_html__( 'Login', 'ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'priority' => 11,
		)
	);	

	$wp_customize->add_control( 
		'hdr_acc_login_lbl',
		array(
		    'label'   		=> __('Login Label','ecommerce-companion'),
		    'section'		=> 'above_header',
			'type' 			=> 'text',
		)  
	);
	
	
	/*=========================================
	Social
	=========================================*/	
	
	// Head // 
	$wp_customize->add_setting(
    	'hdr_social_head',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 12,
		)
	);	

	$wp_customize->add_control( 
		'hdr_social_head',
		array(
		    'label'   		=> __('Social Icons','ecommerce-companion'),
		    'section'		=> 'above_header',
			'type' 			=> 'hidden',
		)  
	);	
	
	// Hide / Show
	$wp_customize->add_setting( 
		'hs_hdr_social' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_checkbox',
			'priority' => 13,
		) 
	);
	
	$wp_customize->add_control(
	'hs_hdr_social', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'ecommerce-companion' ),
			'section'     => 'above_header',
			'type'        => 'checkbox'
		) 
	);
	
	
	// Title // 
	$wp_customize->add_setting(
    	'hdr_social_ttl',
    	array(
			'default'	      => esc_html__( 'Follow us:', 'ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'priority' => 13,
		)
	);	

	$wp_customize->add_control( 
		'hdr_social_ttl',
		array(
		    'label'   		=> __('Title','ecommerce-companion'),
		    'section'		=> 'above_header',
			'type' 			=> 'text',
		)  
	);	
	
	/**
	 * Customizer Repeater
	 */
		$wp_customize->add_setting( 'social_icons', 
			array(
			 'sanitize_callback' => 'aromatic_repeater_sanitize',
			 'priority' => 2,
			 'default' => aromatic_get_social_icon_default()
		)
		);
		
		$wp_customize->add_control( 
			new AROMATIC_Repeater( $wp_customize, 
				'social_icons', 
					array(
						'label'   => esc_html__('Social Icons','ecommerce-companion'),
						'section' => 'above_header',
						'add_field_label'                   => esc_html__( 'Add New Social', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Social', 'ecommerce-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
		//Pro feature
		class aromatic_social__section_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_social_section_premium up-to-pro" href="<?php echo esc_url(aromatic_premium_links()); ?>" target="_blank" style="display: none;"><?php _e('More Social Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'aromatic_social_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 3,
		));
		$wp_customize->add_control(
			new aromatic_social__section_premium(
			$wp_customize,
			'aromatic_social_premium',
				array(
					'section'				=> 'above_header',
				)
			)
		);			
}
add_action( 'customize_register', 'aromatic_lite_header_settings' );

