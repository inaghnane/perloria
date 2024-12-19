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
			'label' => __('Widget Left','flossy'),
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
	Widget Left
	=========================================*/	
	// Heading
	$wp_customize->add_setting(
		'hdr_right_widget'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'hdr_right_widget',
		array(
			'type' => 'hidden',
			'label' => __('Widget Right','flossy'),
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
			 'sanitize_callback' => 'flossy_repeater_sanitize',
			 'priority' => 4,
			 'default' => flossy_get_social_icon_default()
		)
		);
		
		$wp_customize->add_control( 
			new FLOSSY_Repeater( $wp_customize, 
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
		class flossy_header_social_premium extends WP_Customize_Control {
			public function render_content() {
			?>
				<a class="customizer_header_social_premium up-to-pro" href="#" target="_blank" style="display: none;"><?php _e('More Icons Available in the Premium Version','ecommerce-companion'); ?></a>			
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