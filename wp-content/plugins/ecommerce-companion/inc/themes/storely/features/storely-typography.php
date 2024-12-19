<?php
function storely_typography( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

	$wp_customize->add_panel(
		'storely_typography', array(
			'priority' => 38,
			'title' => esc_html__( 'Typography', 'ecommerce-companion' ),
		)
	);	
	
	/*=========================================
	Storely Typography
	=========================================*/
	$wp_customize->add_section(
        'storely_typography',
        array(
        	'priority'      => 1,
            'title' 		=> __('Body Typography','ecommerce-companion'),
			'panel'  		=> 'storely_typography',
		)
    );
	
	// Body Font Size // 
	if ( class_exists( 'Ecommerce_Comp_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'storely_body_font_size',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'ecommerce_comp_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Ecommerce_Comp_Customizer_Range_Control( $wp_customize, 'storely_body_font_size', 
			array(
				'label'      => __( 'Size', 'ecommerce-companion' ),
				'section'  => 'storely_typography',
				'priority'      => 2,
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 1,
                        'max'           => 50,
                        'step'          => 1,
                        'default_value' => 16,
                    ),
                    'tablet'  => array(
                        'min'           => 0,
                        'max'           => 50,
                        'step'          => 1,
                        'default_value' => 16,
                    ),
                    'desktop' => array(
                        'min'           => 0,
                        'max'           => 50,
                        'step'          => 1,
                        'default_value' => 16,
                    ),
                ),
			) ) 
		);
	}
	
	// Body Font Size // 
	if ( class_exists( 'Ecommerce_Comp_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'storely_body_line_height',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'ecommerce_comp_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Ecommerce_Comp_Customizer_Range_Control( $wp_customize, 'storely_body_line_height', 
			array(
				'label'      => __( 'Line Height', 'ecommerce-companion' ),
				'section'  => 'storely_typography',
				'priority'      => 3,
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.6,
                    ),
                    'tablet'  => array(
                        'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.6,
                    ),
                    'desktop' => array(
                       'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.6,
                    ),
				)	
			) ) 
		);
	}
	
	// Body Font Size // 
	if ( class_exists( 'Ecommerce_Comp_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'storely_body_ltr_space',
			array(
                'default'           => '0.1',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'ecommerce_comp_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Ecommerce_Comp_Customizer_Range_Control( $wp_customize, 'storely_body_ltr_space', 
			array(
				'label'      => __( 'Letter Spacing', 'ecommerce-companion' ),
				'section'  => 'storely_typography',
				'priority'      => 4,
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0,
                    ),
                    'tablet'  => array(
                       'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0,
                    ),
                    'desktop' => array(
                       'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0,
                    ),
				)	
			) ) 
		);
	}
	
	// Body Font weight // 
	 $wp_customize->add_setting( 'storely_body_font_weight', array(
      'capability'        => 'edit_theme_options',
      'default'           => 'inherit',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'storely_sanitize_select',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control(
                $wp_customize, 'storely_body_font_weight', array(
            'label'       => __( 'Weight', 'ecommerce-companion' ),
            'section'     => 'storely_typography',
            'type'        =>  'select',
            'priority'    => 5,
            'choices'     =>  array(
                'inherit'   =>  __( 'Default', 'ecommerce-companion' ),
                '100'       =>  __( 'Thin: 100', 'ecommerce-companion' ),
                '200'       =>  __( 'Light: 200', 'ecommerce-companion' ),
                '300'       =>  __( 'Book: 300', 'ecommerce-companion' ),
                '400'       =>  __( 'Normal: 400', 'ecommerce-companion' ),
                '500'       =>  __( 'Medium: 500', 'ecommerce-companion' ),
                '600'       =>  __( 'Semibold: 600', 'ecommerce-companion' ),
                '700'       =>  __( 'Bold: 700', 'ecommerce-companion' ),
                '800'       =>  __( 'Extra Bold: 800', 'ecommerce-companion' ),
                '900'       =>  __( 'Black: 900', 'ecommerce-companion' ),
                ),
            )
        )
    );
	
	// Body Font style // 
	 $wp_customize->add_setting( 'storely_body_font_style', array(
      'capability'        => 'edit_theme_options',
      'default'           => 'inherit',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'storely_sanitize_select',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control(
                $wp_customize, 'storely_body_font_style', array(
            'label'       => __( 'Font Style', 'ecommerce-companion' ),
            'section'     => 'storely_typography',
            'type'        =>  'select',
            'priority'    => 6,
            'choices'     =>  array(
                'inherit'   =>  __( 'Inherit', 'ecommerce-companion' ),
                'normal'       =>  __( 'Normal', 'ecommerce-companion' ),
                'italic'       =>  __( 'Italic', 'ecommerce-companion' ),
                'oblique'       =>  __( 'oblique', 'ecommerce-companion' ),
                ),
            )
        )
    );
	// Body Text Transform // 
	 $wp_customize->add_setting( 'storely_body_text_transform', array(
      'capability'        => 'edit_theme_options',
      'default'           => 'inherit',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'storely_sanitize_select',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'storely_body_text_transform', array(
                'label'       => __( 'Transform', 'ecommerce-companion' ),
                'section'     => 'storely_typography',
                'type'        => 'select',
                'priority'    => 7,
                'choices'     => array(
                    'inherit'       =>  __( 'Default', 'ecommerce-companion' ),
                    'uppercase'     =>  __( 'Uppercase', 'ecommerce-companion' ),
                    'lowercase'     =>  __( 'Lowercase', 'ecommerce-companion' ),
                    'capitalize'    =>  __( 'Capitalize', 'ecommerce-companion' ),
                ),
            )
        )
    );
	
	// Body Text Decoration // 
	 $wp_customize->add_setting( 'storely_body_txt_decoration', array(
      'capability'        => 'edit_theme_options',
      'default'           => 'inherit',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'storely_sanitize_select',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'storely_body_txt_decoration', array(
                'label'       => __( 'Text Decoration', 'ecommerce-companion' ),
                'section'     => 'storely_typography',
                'type'        => 'select',
                'priority'    => 8,
                'choices'     => array(
                    'inherit'       =>  __( 'Inherit', 'ecommerce-companion' ),
                    'underline'     =>  __( 'Underline', 'ecommerce-companion' ),
                    'overline'     =>  __( 'Overline', 'ecommerce-companion' ),
                    'line-through'    =>  __( 'Line Through', 'ecommerce-companion' ),
					'none'    =>  __( 'None', 'ecommerce-companion' ),
                ),
            )
        )
    );
	/*=========================================
	 Storely Typography Headings
	=========================================*/
	$wp_customize->add_section(
        'storely_headings_typography',
        array(
        	'priority'      => 2,
            'title' 		=> __('Headings','ecommerce-companion'),
			'panel'  		=> 'storely_typography',
		)
    );
	
	/*=========================================
	 Storely Typography H1
	=========================================*/
	for ( $i = 1; $i <= 6; $i++ ) {
	if($i  == '1'){$j=36;}elseif($i  == '2'){$j=32;}elseif($i  == '3'){$j=28;}elseif($i  == '4'){$j=24;}elseif($i  == '5'){$j=20;}else{$j=16;}
	$wp_customize->add_setting(
		'h' . $i . '_typography'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'h' . $i . '_typography',
		array(
			'type' => 'hidden',
			'label' => esc_html('H' . $i .'','ecommerce-companion'),
			'section' => 'storely_headings_typography',
		)
	);
	

	// Heading Font Size // 
	if ( class_exists( 'Ecommerce_Comp_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'storely_h' . $i . '_font_size',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'ecommerce_comp_sanitize_range_value',
				'transport'         => 'postMessage'
			)
		);
		$wp_customize->add_control( 
		new Ecommerce_Comp_Customizer_Range_Control( $wp_customize, 'storely_h' . $i . '_font_size', 
			array(
				'label'      => __( 'Font Size', 'ecommerce-companion' ),
				'section'  => 'storely_headings_typography',
				'media_query'   => true,
				'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 1,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => $j,
                    ),
                    'tablet'  => array(
                        'min'           => 1,
                        'max'           => 100,
                        'step'          => 1,
                        'default_value' => $j,
                    ),
                    'desktop' => array(
                       'min'           => 1,
                        'max'           => 100,
                        'step'          => 1,
					    'default_value' => $j,
                    ),
				)	
			) ) 
		);
	}
	
	// Heading Font Size // 
	if ( class_exists( 'Ecommerce_Comp_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'storely_h' . $i . '_line_height',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'ecommerce_comp_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Ecommerce_Comp_Customizer_Range_Control( $wp_customize, 'storely_h' . $i . '_line_height', 
			array(
				'label'      => __( 'Line Height', 'ecommerce-companion' ),
				'section'  => 'storely_headings_typography',
				'media_query'   => true,
				'input_attrs' => array(
					'min'    => 0,
					'max'    => 5,
					'step'   => 0.1,
					//'suffix' => 'px', //optional suffix
				),
				 'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.2,
                    ),
                    'tablet'  => array(
                        'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.2,
                    ),
                    'desktop' => array(
                       'min'           => 0,
                        'max'           => 3,
                        'step'          => 0.1,
                        'default_value' => 1.2,
                    ),
				)	
			) ) 
		);
		}
	// Heading Letter Spacing // 
	if ( class_exists( 'Ecommerce_Comp_Customizer_Range_Control' ) ) {
		$wp_customize->add_setting(
			'storely_h' . $i . '_ltr_spacing',
			array(
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'ecommerce_comp_sanitize_range_value',
				'transport'         => 'postMessage',
			)
		);
		$wp_customize->add_control( 
		new Ecommerce_Comp_Customizer_Range_Control( $wp_customize, 'storely_h' . $i . '_ltr_spacing', 
			array(
				'label'      => __( 'Letter Spacing', 'ecommerce-companion' ),
				'section'  => 'storely_headings_typography',
				 'media_query'   => true,
                'input_attr'    => array(
                    'mobile'  => array(
                        'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0.1,
                    ),
                    'tablet'  => array(
                       'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0.1,
                    ),
                    'desktop' => array(
                       'min'           => -10,
                        'max'           => 10,
                        'step'          => 1,
                        'default_value' => 0.1,
                    ),
				)	
			) ) 
		);
	}
	
	// Heading Font weight // 
	 $wp_customize->add_setting( 'storely_h' . $i . '_font_weight', array(
		  'capability'        => 'edit_theme_options',
		  'default'           => '700',
		  'transport'         => 'postMessage',
		  'sanitize_callback' => 'storely_sanitize_select',
		) );

    $wp_customize->add_control(
        new WP_Customize_Control(
                $wp_customize, 'storely_h' . $i . '_font_weight', array(
            'label'       => __( 'Font Weight', 'ecommerce-companion' ),
            'section'     => 'storely_headings_typography',
            'type'        =>  'select',
            'choices'     =>  array(
                'inherit'   =>  __( 'Inherit', 'ecommerce-companion' ),
                '100'       =>  __( 'Thin: 100', 'ecommerce-companion' ),
                '200'       =>  __( 'Light: 200', 'ecommerce-companion' ),
                '300'       =>  __( 'Book: 300', 'ecommerce-companion' ),
                '400'       =>  __( 'Normal: 400', 'ecommerce-companion' ),
                '500'       =>  __( 'Medium: 500', 'ecommerce-companion' ),
                '600'       =>  __( 'Semibold: 600', 'ecommerce-companion' ),
                '700'       =>  __( 'Bold: 700', 'ecommerce-companion' ),
                '800'       =>  __( 'Extra Bold: 800', 'ecommerce-companion' ),
                '900'       =>  __( 'Black: 900', 'ecommerce-companion' ),
                ),
            )
        )
    );
	
	// Heading Font style // 
	 $wp_customize->add_setting( 'storely_h' . $i . '_font_style', array(
      'capability'        => 'edit_theme_options',
      'default'           => 'inherit',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'storely_sanitize_select',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control(
                $wp_customize, 'storely_h' . $i . '_font_style', array(
            'label'       => __( 'Font Style', 'ecommerce-companion' ),
            'section'     => 'storely_headings_typography',
            'type'        =>  'select',
            'choices'     =>  array(
                'inherit'   =>  __( 'Inherit', 'ecommerce-companion' ),
                'normal'       =>  __( 'Normal', 'ecommerce-companion' ),
                'italic'       =>  __( 'Italic', 'ecommerce-companion' ),
                'oblique'       =>  __( 'oblique', 'ecommerce-companion' ),
                ),
            )
        )
    );
	
	// Heading Text Transform // 
	 $wp_customize->add_setting( 'storely_h' . $i . '_text_transform', array(
      'capability'        => 'edit_theme_options',
      'default'           => 'inherit',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'storely_sanitize_select',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'storely_h' . $i . '_text_transform', array(
                'label'       => __( 'Text Transform', 'ecommerce-companion' ),
                'section'     => 'storely_headings_typography',
                'type'        => 'select',
                'choices'     => array(
                    'inherit'       =>  __( 'Default', 'ecommerce-companion' ),
                    'uppercase'     =>  __( 'Uppercase', 'ecommerce-companion' ),
                    'lowercase'     =>  __( 'Lowercase', 'ecommerce-companion' ),
                    'capitalize'    =>  __( 'Capitalize', 'ecommerce-companion' ),
                ),
            )
        )
    );
	
	// Heading Text Decoration // 
	 $wp_customize->add_setting( 'storely_h' . $i . '_text_decoration', array(
      'capability'        => 'edit_theme_options',
      'default'           => 'inherit',
      'transport'         => 'postMessage',
      'sanitize_callback' => 'storely_sanitize_select',
    ) );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'storely_h' . $i . '_text_decoration', array(
                'label'       => __( 'Text Decoration', 'ecommerce-companion' ),
                'section'     => 'storely_headings_typography',
                'type'        => 'select',
                'choices'     => array(
                    'inherit'       =>  __( 'Inherit', 'ecommerce-companion' ),
                    'underline'     =>  __( 'Underline', 'ecommerce-companion' ),
                    'overline'     =>  __( 'Overline', 'ecommerce-companion' ),
                    'line-through'    =>  __( 'Line Through', 'ecommerce-companion' ),
					'none'    =>  __( 'None', 'ecommerce-companion' ),
                ),
            )
        )
    );
}
}
add_action( 'customize_register', 'storely_typography' );