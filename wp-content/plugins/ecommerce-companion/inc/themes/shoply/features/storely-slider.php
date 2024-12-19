<?php
function storely_slider_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Slider Section Panel
	=========================================*/
	$wp_customize->add_panel(
		'storely_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'ecommerce-companion' ),
		)
	);
	
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'ecommerce-companion' ),
			'panel' => 'storely_frontpage_sections',
			'priority' => 1,
		)
	);
	
	// Settings
	$wp_customize->add_setting(
		'slider_settings_heading'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'slider_settings_heading',
		array(
			'type' => 'hidden',
			'label' => __('Settings','ecommerce-companion'),
			'section' => 'slider_setting',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting(
		'slider_hs'
			,array(
			'default' => '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'slider_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'slider_setting',
		)
	);
	
	// slider Contents
	$wp_customize->add_setting(
		'slider_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'slider_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Contents','ecommerce-companion'),
			'section' => 'slider_setting',
		)
	);
	
	// Slider 2		
	$wp_customize->add_setting( 'slider2', 
			array(
			 'sanitize_callback' => 'storely_repeater_sanitize',
			 'priority' => 5,
			  'default' => storely_get_slider2_default()
			)
		);
		
		$wp_customize->add_control( 
			new Storely_Repeater( $wp_customize, 
				'slider2', 
					array(
						'label'   => esc_html__('Slide','ecommerce-companion'),
						'section' => 'slider_setting',
						'add_field_label'                   => esc_html__( 'Add New Slider', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Slider', 'ecommerce-companion' ),
						
						
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_subtitle3_control' => true,
						'customizer_repeater_subtitle4_control' => true,
						'customizer_repeater_text2_control'=> true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_image_control' => true,
					) 
				) 
			);	
			
		//Pro feature
		class storely_slider__section_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_slider_section_premium up-to-pro" href="https://sellerthemes.com/shoply-premium/" target="_blank" style="display: none;"><?php _e('More Slides Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'storely_slider_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new storely_slider__section_premium(
			$wp_customize,
			'storely_slider_premium',
				array(
					'section'				=> 'slider_setting',
				)
			)
		);
		
	//Overlay Enable //
	$wp_customize->add_setting( 
		'slider_overlay_enable' , 
			array(
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 6,
		) 
	);
	
	$wp_customize->add_control(
	'slider_overlay_enable', 
		array(
			'label'	      => esc_html__( 'Overlay Enable?', 'ecommerce-companion' ),
			'section'     => 'slider_setting',
			'type'        => 'checkbox'
		) 
	);	
	
	
	// slider opacity
	if ( class_exists( 'Ecommerce_Comp_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'slider_opacity',
			array(
				'default'	      => '0.6',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'ecommerce_comp_sanitize_range_value',
				'priority' => 7,
			)
		);
		$wp_customize->add_control( 
		new Ecommerce_Comp_Customizer_Range_Control( $wp_customize, 'slider_opacity', 
			array(
				'label'      => __( 'opacity', 'ecommerce-companion' ),
				'section'  => 'slider_setting',
				 'media_query'   => false,
					'input_attr'    => array(
						'desktop' => array(
							'min'           => 0,
							'max'           => 0.9,
							'step'          => 0.1,
							'default_value' => 0.6,
						),
					),
			) ) 
		);
	}
	
	// Slider Info
	$wp_customize->add_setting(
		'slider_info_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 15,
		)
	);

	$wp_customize->add_control(
	'slider_info_head',
		array(
			'type' => 'hidden',
			'label' => __('Slider Info','ecommerce-companion'),
			'section' => 'slider_setting',
		)
	);
	
	
	// Hide / Show
	$wp_customize->add_setting(
		'slider_info_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 15,
		)
	);

	$wp_customize->add_control(
	'slider_info_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'slider_setting',
		)
	);
	
	
	// Slider Info
	$wp_customize->add_setting( 'slider_info', 
			array(
			 'sanitize_callback' => 'storely_repeater_sanitize',
			 'priority' => 16,
			  'default' => storely_get_slider_info_default()
			)
		);
		
		$wp_customize->add_control( 
			new Storely_Repeater( $wp_customize, 
				'slider_info', 
					array(
						'label'   => esc_html__('Slider Info','ecommerce-companion'),
						'section' => 'slider_setting',
						'add_field_label'                   => esc_html__( 'Add New Content', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Content', 'ecommerce-companion' ),
						
						
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
						'customizer_repeater_text2_control'=> true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_image_control' => true,
					) 
				) 
			);	
			
		//Pro feature
		class storely_slider_info_section_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_slider_info_section_premium up-to-pro" href="https://sellerthemes.com/shoply-premium/" target="_blank" style="display: none;"><?php _e('More Info Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'storely_slider_info_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 16,
		));
		$wp_customize->add_control(
			new storely_slider_info_section_premium(
			$wp_customize,
			'storely_slider_info_premium',
				array(
					'section'				=> 'slider_setting',
				)
			)
		);
}

add_action( 'customize_register', 'storely_slider_setting' );