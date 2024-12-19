<?php
function ecommerce_storely_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	/*=========================================
	Storely Site Identity
	=========================================*/
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
            'title' 		=> __('Above Header','ecommerce-companion'),
			'panel'  		=> 'header_section',
		)
    );

	/*=========================================
	Header First
	=========================================*/
	// Header First
	$wp_customize->add_setting(
		'hdr_left_widget'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 1,
		)
	);
	
	$wp_customize->add_control(
	'hdr_left_widget',
		array(
			'type' => 'hidden',
			'label' => __('Please Add Widget in Header Widget Area 1','ecommerce-companion'),
			'section' => 'above_header',
		)
	);
	
	/*=========================================
	Header Second
	=========================================*/
	// Header Second
	$wp_customize->add_setting(
		'hdr_right'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'hdr_right',
		array(
			'type' => 'hidden',
			'label' => __('Header Right','ecommerce-companion'),
			'section' => 'above_header',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting(
		'hdr_right_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'hdr_right_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'above_header',
		)
	);
	/*=========================================
	Social
	=========================================*/	
	/**
	 * Customizer Repeater
	 */
		$wp_customize->add_setting( 'social_icons', 
			array(
			 'sanitize_callback' => 'storely_repeater_sanitize',
			 'priority' => 4,
			 'default' => storely_get_social_icon_default()
		)
		);
		
		$wp_customize->add_control( 
			new STORELY_Repeater( $wp_customize, 
				'social_icons', 
					array(
						'label'   => esc_html__('Social Icons','ecommerce-companion'),
						'add_field_label'                   => esc_html__( 'Add New Social', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Social', 'ecommerce-companion' ),
						'section' => 'above_header',
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
		//Pro feature
		class storely_header_social_premium extends WP_Customize_Control {
			public function render_content() {
			?>
				<a class="customizer_header_social_premium up-to-pro" href="<?php echo esc_url(storely_premium_links()); ?>" target="_blank" style="display: none;"><?php _e('More Icons Available in the Premium Version','ecommerce-companion'); ?></a>			
			<?php
			}
		}
		
		$wp_customize->add_setting( 'storely_hdr_social_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new storely_header_social_premium(
			$wp_customize,
			'storely_hdr_social_premium',
				array(
					'section'				=> 'above_header',
				)
			)
		);
}
add_action( 'customize_register', 'ecommerce_storely_header_settings' );

