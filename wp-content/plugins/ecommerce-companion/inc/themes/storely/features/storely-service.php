<?php
function storely_service_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Service  Section
	=========================================*/
	$wp_customize->add_section(
		'service_setting', array(
			'title' => esc_html__( 'Service Section', 'ecommerce-companion' ),
			'priority' => 2,
			'panel' => 'storely_frontpage_sections',
		)
	);
	
	// Settings
	$wp_customize->add_setting(
		'service_settings_heading'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'service_settings_heading',
		array(
			'type' => 'hidden',
			'label' => __('Settings','ecommerce-companion'),
			'section' => 'service_setting',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting(
		'service_hs'
			,array(
			'default' => '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'service_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'service_setting',
		)
	);
	
	// Service content Section // 
	$wp_customize->add_setting(
		'service_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'service_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'service_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add service
	 */
	$theme = wp_get_theme(); // gets the current theme
	if( 'Shoply' == $theme->name  || 'Storess' == $theme->name  || 'Shopiva' == $theme->name){	
		$default = storely_get_shoply_service_default();
	}else{
		$default = storely_get_service_default();
	}	
		$wp_customize->add_setting( 'service_contents', 
			array(
			 'sanitize_callback' => 'storely_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => $default
			)
		);
		
		$wp_customize->add_control( 
			new Storely_Repeater( $wp_customize, 
				'service_contents', 
					array(
						'label'   => esc_html__('Service','ecommerce-companion'),
						'section' => 'service_setting',
						'add_field_label'                   => esc_html__( 'Add New Service', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Service', 'ecommerce-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
	//Pro feature
		class storely_service__section_premium extends WP_Customize_Control {
			public function render_content() { 	
			?>
				<a class="customizer_service_section_premium up-to-pro" href="<?php echo esc_url(storely_premium_links()); ?>" target="_blank" style="display: none;"><?php _e('More Service Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'storely_service_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 9,
		));
		$wp_customize->add_control(
			new storely_service__section_premium(
			$wp_customize,
			'storely_service_premium',
				array(
					'section'				=> 'service_setting',
				)
			)
		);		
}

add_action( 'customize_register', 'storely_service_setting' );

//selective refresh
function storely_service_section_partials( $wp_customize ){	
	
	// service content
	$wp_customize->selective_refresh->add_partial( 'service_contents', array(
		'selector'            => '.infoservice-home .row'
	) );
	
}
add_action( 'customize_register', 'storely_service_section_partials' );