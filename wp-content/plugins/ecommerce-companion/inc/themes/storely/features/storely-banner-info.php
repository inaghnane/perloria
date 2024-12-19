<?php
function storely_banner_info_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Banner Info  Section
	=========================================*/
	$wp_customize->add_section(
		'banner_info_setting', array(
			'title' => esc_html__( 'Banner Info Section', 'ecommerce-companion' ),
			'priority' => 6,
			'panel' => 'storely_frontpage_sections',
		)
	);
	
	// Settings
	$wp_customize->add_setting(
		'banner_info_settings_heading'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'banner_info_settings_heading',
		array(
			'type' => 'hidden',
			'label' => __('Settings','ecommerce-companion'),
			'section' => 'banner_info_setting',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting(
		'banner_info_hs'
			,array(
			'default' => '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_checkbox',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'banner_info_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'banner_info_setting',
		)
	);
	
	// Banner Info content Section // 
	$wp_customize->add_setting(
		'banner_info_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'storely_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'banner_info_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'banner_info_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add Info
	 */
	
		$wp_customize->add_setting( 'banner_info_contents', 
			array(
			 'sanitize_callback' => 'storely_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => storely_get_banner_info_default()
			)
		);
		
		$wp_customize->add_control( 
			new Storely_Repeater( $wp_customize, 
				'banner_info_contents', 
					array(
						'label'   => esc_html__('Banner Info','ecommerce-companion'),
						'section' => 'banner_info_setting',
						'add_field_label'                   => esc_html__( 'Add New Banner', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Banner', 'ecommerce-companion' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
			//Pro feature
		class storely_banner_info__section_premium extends WP_Customize_Control {
			public function render_content() {
			?>
				<a class="customizer_banner_info_section_premium up-to-pro" href="<?php echo esc_url(storely_premium_links()); ?>" target="_blank" style="display: none;"><?php _e('More Banner Info Available in the Premium Version','ecommerce-companion'); ?></a>
			<?php
			}
		}
		
		$wp_customize->add_setting( 'storely_banner_info_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 8,
		));
		$wp_customize->add_control(
			new storely_banner_info__section_premium(
			$wp_customize,
			'storely_banner_info_premium',
				array(
					'section'				=> 'banner_info_setting',
				)
			)
		);
}

add_action( 'customize_register', 'storely_banner_info_setting' );

//selective refresh
function storely_banner_info_section_partials( $wp_customize ){	
	
	// banner_info_contents
	$wp_customize->selective_refresh->add_partial( 'banner_info_contents', array(
		'selector'            => '.bannerinfo-home .row'
	) );
	
}
add_action( 'customize_register', 'storely_banner_info_section_partials' );