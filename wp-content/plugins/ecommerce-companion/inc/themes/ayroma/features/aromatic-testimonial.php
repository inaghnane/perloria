<?php
function aromatic_testimonial_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Testimonial  Section
	=========================================*/
	$wp_customize->add_section(
		'testimonial_setting', array(
			'title' => esc_html__( 'Testimonial Section', 'ecommerce-companion' ),
			'priority' => 8,
			'panel' => 'aromatic_frontpage2_sections',
		)
	);
	
	// Setting
	$wp_customize->add_setting(
		'testimonial_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'testimonial_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','ecommerce-companion'),
			'section' => 'testimonial_setting',
		)
	);
	
	// Hide/Show
	$wp_customize->add_setting(
		'testimonial_setting_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_checkbox',
			'priority' => 4,
		)
	);

	$wp_customize->add_control(
	'testimonial_setting_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide/Show','ecommerce-companion'),
			'section' => 'testimonial_setting',
		)
	);
	
	// Testimonial content Section // 
	$wp_customize->add_setting(
		'testimonial_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aromatic_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'testimonial_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'testimonial_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add testimonial
	 */
	
		$wp_customize->add_setting( 'testimonial_contents', 
			array(
			 'sanitize_callback' => 'aromatic_repeater_sanitize',
			 'priority' => 8,
			 'default' => aromatic_get_testimonial_default()
			)
		);
		
		$wp_customize->add_control( 
			new Aromatic_Repeater( $wp_customize, 
				'testimonial_contents', 
					array(
						'label'   => esc_html__('Testimonial','ecommerce-companion'),
						'section' => 'testimonial_setting',
						'add_field_label'                   => esc_html__( 'Add New Testimonial', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Testimonial', 'ecommerce-companion' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_subtitle2_control' => true,
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
					'section'				=> 'testimonial_setting',
				)
			)
		);			
}

add_action( 'customize_register', 'aromatic_testimonial_setting' );