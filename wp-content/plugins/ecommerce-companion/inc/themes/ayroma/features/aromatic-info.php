<?php
function aromatic_info_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Info  Section
	=========================================*/
	$wp_customize->add_section(
		'info_setting', array(
			'title' => esc_html__( 'Info Section', 'ecommerce-companion' ),
			'priority' => 3,
			'panel' => 'aromatic_frontpage2_sections',
		)
	);
	
	// Setting
	$wp_customize->add_setting(
		'info_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'info_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','ecommerce-companion'),
			'section' => 'info_setting',
		)
	);
	
	// Hide/Show
	$wp_customize->add_setting(
		'info_setting_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'info_setting_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show','ecommerce-companion'),
			'section' => 'info_setting',
		)
	);
	
	// Info content Section // 
	$wp_customize->add_setting(
		'info_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'info_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'info_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add info
	 */
	
		$wp_customize->add_setting( 'info_contents', 
			array(
			 'sanitize_callback' => 'aromatic_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => aromatic_get_info_default()
			)
		);
		
		$wp_customize->add_control( 
			new Aromatic_Repeater( $wp_customize, 
				'info_contents', 
					array(
						'label'   => esc_html__('Information','ecommerce-companion'),
						'section' => 'info_setting',
						'add_field_label'                   => esc_html__( 'Add New Information', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Information', 'ecommerce-companion' ),
						'customizer_repeater_icon_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
	//Pro feature
		class aromatic_info__section_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_info_section_premium up-to-pro" href="<?php echo esc_url(aromatic_premium_links()); ?>" target="_blank" style="display: none;"><?php _e('More Info Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'aromatic_info_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 6,
		));
		$wp_customize->add_control(
			new aromatic_info__section_premium(
			$wp_customize,
			'aromatic_info_premium',
				array(
					'section'				=> 'info_setting',
				)
			)
		);		
}

add_action( 'customize_register', 'aromatic_info_setting' );

//selective refresh
function aromatic_info_section_partials( $wp_customize ){	
	
	// info content
	$wp_customize->selective_refresh->add_partial( 'info_contents', array(
		'selector'            => '.info-home .info-service-flex'
	) );
	
}
add_action( 'customize_register', 'aromatic_info_section_partials' );