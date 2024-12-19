<?php
function ecommerce_storely_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'ecommerce-companion'),
		) 
	);

	/*=========================================
	Footer Above
	=========================================*/	
	$wp_customize->add_section(
        'footer_above',
        array(
            'title' 		=> __('Footer Above','ecommerce-companion'),
			'panel'  		=> 'footer_section',
			'priority'      => 2,
		)
    );
	
	// Head
	$wp_customize->add_setting( 
		'above_footer_head' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	'above_footer_head', 
		array(
			'label'	      => esc_html__( 'Setting', 'ecommerce-companion' ),
			'section'     => 'footer_above',
			'type'        => 'hidden'
		) 
	);	
	
	// hide/show
	$wp_customize->add_setting( 
		'hs_above_footer' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	'hs_above_footer', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'ecommerce-companion' ),
			'section'     => 'footer_above',
			'type'        => 'checkbox'
		) 
	);	
	
	// Left Content
	$wp_customize->add_setting( 
		'above_footer_left_content' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 1,
		) 
	);
	
	$wp_customize->add_control(
	'above_footer_left_content', 
		array(
			'label'	      => esc_html__( 'Left Content', 'ecommerce-companion' ),
			'section'     => 'footer_above',
			'type'        => 'hidden'
		) 
	);	
	
	// Text
	$wp_customize->add_setting( 
		'above_footer_left_text' , 
			array(
			'default'	      => esc_html__( 'We’re Always Here To Help', 'ecommerce-companion' ),
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_html',
			 'transport'         => $selective_refresh,
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'above_footer_left_text', 
		array(
			'label'	      => esc_html__( 'Text', 'ecommerce-companion' ),
			'section'     => 'footer_above',
			'type'        => 'text'
		) 
	);
	
	
	// Right Content
	$wp_customize->add_setting( 
		'above_footer_right_content' , 
			array(
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 3,
		) 
	);
	
	$wp_customize->add_control(
	'above_footer_right_content', 
		array(
			'label'	      => esc_html__( 'Right Content', 'ecommerce-companion' ),
			'section'     => 'footer_above',
			'type'        => 'hidden'
		) 
	);	
	
	//content
	$wp_customize->add_setting( 'footer_above_content', 
		array(
			 'sanitize_callback' => 'storely_repeater_sanitize',
			 'default' => storely_get_footer_above_default(),
			 'transport'         => $selective_refresh,
			 'priority' => 5,
			)
		);
		
		$wp_customize->add_control( 
			new STORELY_Repeater( $wp_customize, 
				'footer_above_content', 
					array(
						'label'   => esc_html__('Information','ecommerce-companion'),
						'section' => 'footer_above',
						'add_field_label'                   => esc_html__( 'Add New Information', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Information', 'ecommerce-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);	
			
		//Pro feature
		class storely_footer_above_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_footer_above_premium up-to-pro" href="<?php echo esc_url(storely_premium_links()); ?>" target="_blank" style="display: none;"><?php _e('More Info Available in the Premium Version','ecommerce-companion'); ?></a>
			<?php
			}
		}
		
		$wp_customize->add_setting( 'storely_footer_above_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new storely_footer_above_premium(
			$wp_customize,
			'storely_footer_above_premium',
				array(
					'section'				=> 'footer_above',
				)
			)
		);	
	
	/*=========================================
	Footer Widget
	=========================================*/
	$wp_customize->add_section(
        'footer_widget',
        array(
            'title' 		=> __('Footer Widget Area','ecommerce-companion'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Widget Left Content
	$wp_customize->add_setting(
		'footer_widget_left'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'footer_widget_left',
		array(
			'type' => 'hidden',
			'label' => __('Left Content','ecommerce-companion'),
			'section' => 'footer_widget',
			'priority'  => 1,
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting(
		'footer_widget_left_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
	'footer_widget_left_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'footer_widget',
			'priority'  => 2,
		)
	);
	
	//  Logo Image // 
    $wp_customize->add_setting( 
    	'footer_widget_left_logo' , 
    	array(
			'default' 			=> esc_url(ECOMMERCE_COMP_PLUGIN_URL .'/inc/themes/storely/assets/images/logo_2.png'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_url',	
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'footer_widget_left_logo' ,
		array(
			'label'          => esc_html__( 'Logo', 'ecommerce-companion'),
			'section'        => 'footer_widget',
			'priority'  => 3,
		) 
	));
	
	
	//  Title // 
	$wp_customize->add_setting(
    	'footer_widget_left_ttl',
    	array(
	        'default'			=> __('Contact Us','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'footer_widget_left_ttl',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'footer_widget',
			'type'           => 'text',
			'priority'  => 4,
		)  
	);
	
	
	//content
	$wp_customize->add_setting( 'footer_widget_left_content', 
		array(
			 'sanitize_callback' => 'storely_repeater_sanitize',
			 'default' => storely_get_footer_widet_left_content_default(),
			 'transport'         => $selective_refresh,
			)
		);
		
		$wp_customize->add_control( 
			new STORELY_Repeater( $wp_customize, 
				'footer_widget_left_content', 
					array(
						'label'   => esc_html__('Content','ecommerce-companion'),
						'section' => 'footer_widget',
						'priority' => 5,
						'add_field_label'                   => esc_html__( 'Add New Address', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Address', 'ecommerce-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);

		//Pro feature
		class storely_footer_address_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_footer_address_premium up-to-pro" href="<?php echo esc_url(storely_premium_links()); ?>" target="_blank" style="display: none;"><?php _e('More Address Available in the Premium Version','ecommerce-companion'); ?></a>
			<?php
			}
		}
		
		$wp_customize->add_setting( 'storely_footer_address_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new storely_footer_address_premium(
			$wp_customize,
			'storely_footer_address_premium',
				array(
					'section'				=> 'footer_widget',
				)
			)
		);			
			
}
add_action( 'customize_register', 'ecommerce_storely_footer' );
// Footer selective refresh
function ecommerce_storely_footer_partials( $wp_customize ){		
	//above_footer_left_text
	$wp_customize->selective_refresh->add_partial( 'above_footer_left_text', array(
		'selector'            => '.footer-top .left-content h6',
		'settings'            => 'above_footer_left_text',
		'render_callback'  => 'storely_above_footer_left_text_render_callback',
	) );
	
	//footer_above_content
	$wp_customize->selective_refresh->add_partial( 'footer_above_content', array(
		'selector'            => '.footer-top .right-content',
	) );
	
	//footer_widget_left_ttl
	$wp_customize->selective_refresh->add_partial( 'footer_widget_left_ttl', array(
		'selector'            => '.footer-widgets .left-content .heads h4',
		'settings'            => 'footer_widget_left_ttl',
		'render_callback'  => 'storely_footer_widget_left_ttl_render_callback',
	) );
	
	//footer_widget_left_content
	$wp_customize->selective_refresh->add_partial( 'footer_widget_left_content', array(
		'selector'            => '.footer-widgets .left-content',
	) );
	}

add_action( 'customize_register', 'ecommerce_storely_footer_partials' );



// above_footer_left_text
function storely_above_footer_left_text_render_callback() {
	return get_theme_mod( 'above_footer_left_text' );
}


// footer_widget_left_ttl
function storely_footer_widget_left_ttl_render_callback() {
	return get_theme_mod( 'footer_widget_left_ttl' );
}