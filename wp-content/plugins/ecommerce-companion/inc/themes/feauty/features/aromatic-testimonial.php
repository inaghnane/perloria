<?php
function aromatic_testimonial3_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Testimonial  Section
	=========================================*/
	$wp_customize->add_section(
		'testimonial3_setting', array(
			'title' => esc_html__( 'Testimonial Section', 'ecommerce-companion' ),
			'priority' => 8,
			'panel' => 'aromatic_frontpage2_sections',
		)
	);
	
	// Setting
	$wp_customize->add_setting(
		'testimonial3_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'testimonial3_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','ecommerce-companion'),
			'section' => 'testimonial3_setting',
		)
	);
	
	// Hide/Show
	$wp_customize->add_setting(
		'testimonial3_setting_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'testimonial3_setting_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show','ecommerce-companion'),
			'section' => 'testimonial3_setting',
		)
	);
	
	// Testimonial Head // 
	$wp_customize->add_setting(
		'testimonial3_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'testimonial3_head',
		array(
			'type' => 'hidden',
			'label' => __('Header','ecommerce-companion'),
			'section' => 'testimonial3_setting',
		)
	);
	
	
	// Title // 
	$wp_customize->add_setting(
    	'testimonial3_title',
    	array(
			'default'	      => esc_html__( 'Client Testimonial', 'ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 7,
		)
	);	

	$wp_customize->add_control( 
		'testimonial3_title',
		array(
		    'label'   		=> __('Title','ecommerce-companion'),
		    'section'		=> 'testimonial3_setting',
			'type' 			=> 'text',
		)  
	);	
	
	
	// Description // 
	$wp_customize->add_setting(
    	'testimonial3_desc',
    	array(
			'default'	      => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, reiciendis.', 'ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 7,
		)
	);	

	$wp_customize->add_control( 
		'testimonial3_desc',
		array(
		    'label'   		=> __('Description','ecommerce-companion'),
		    'section'		=> 'testimonial3_setting',
			'type' 			=> 'textarea',
		)  
	);	
	
	// Testimonial content Section // 
	$wp_customize->add_setting(
		'testimonial3_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'testimonial3_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'testimonial3_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add testimonial
	 */
	
		$wp_customize->add_setting( 'testimonial3_contents', 
			array(
			 'sanitize_callback' => 'aromatic_repeater_sanitize',
			 'priority' => 8,
			 'default' => aromatic_get_testimonial3_default()
			)
		);
		
		$wp_customize->add_control( 
			new Aromatic_Repeater( $wp_customize, 
				'testimonial3_contents', 
					array(
						'label'   => esc_html__('Testimonial','ecommerce-companion'),
						'section' => 'testimonial3_setting',
						'add_field_label'                   => esc_html__( 'Add New Testimonial', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Testimonial', 'ecommerce-companion' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
	
	//Pro feature
		class aromatic_testimonial__section_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_testimonial_section_premium up-to-pro" href="<?php echo esc_url(aromatic_premium_links()); ?>" target="_blank" style="display: none;"><?php _e('More Testimonial Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'aromatic_tesimonial_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 8,
		));
		$wp_customize->add_control(
			new aromatic_testimonial__section_premium(
			$wp_customize,
			'aromatic_tesimonial_premium',
				array(
					'section'				=> 'testimonial3_setting',
				)
			)
		);
		
			
	// Background // 
	$wp_customize->add_setting(
		'testimonial3_bg_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 8,
		)
	);

	$wp_customize->add_control(
	'testimonial3_bg_head',
		array(
			'type' => 'hidden',
			'label' => __('Background','ecommerce-companion'),
			'section' => 'testimonial3_setting',
		)
	);		
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'testimonial3_bg_img' , 
    	array(
			'default' 			=> ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/feauty/assets/images/testimonial/back.jpg',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'testimonial3_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'ecommerce-companion'),
			'section'        => 'testimonial3_setting',
		) 
	));
}

add_action( 'customize_register', 'aromatic_testimonial3_setting' );



// selective refresh
function aromatic_testimonial3_section_partials( $wp_customize ){
	// testimonial3_title
	$wp_customize->selective_refresh->add_partial( 'testimonial3_title', array(
		'selector'            => '.testimonial3 .heading .title',
		'settings'            => 'testimonial3_title',
		'render_callback'  => 'aromatic_testimonial3_title_render_callback',
	) );
	
	// testimonial3_desc
	$wp_customize->selective_refresh->add_partial( 'testimonial3_desc', array(
		'selector'            => '.testimonial3 .heading p',
		'settings'            => 'testimonial3_desc',
		'render_callback'  => 'aromatic_testimonial3_desc_render_callback',
	) );
	
	}

add_action( 'customize_register', 'aromatic_testimonial3_section_partials' );

// testimonial3_title
function aromatic_testimonial3_title_render_callback() {
	return get_theme_mod( 'testimonial3_title' );
}

// testimonial3_desc
function aromatic_testimonial3_desc_render_callback() {
	return get_theme_mod( 'testimonial3_desc' );
}