<?php
function flossy_banner_info_1_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Banner Info  Section
	=========================================*/
	$wp_customize->add_section(
		'banner_info_1_setting', array(
			'title' => esc_html__( 'Banner Info Section', 'ecommerce-companion' ),
			'priority' => 6,
			'panel' => 'flossy_frontpage_sections',
		)
	);
	
	
	// Hide / Show
	$wp_customize->add_setting(
		'bannerinfo_hs'
			,array(
			'default' => '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_checkbox',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'bannerinfo_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'banner_info_1_setting',
		)
	);
	

	// Banner Info content Section // 
	$wp_customize->add_setting(
		'banner_info_1_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'banner_info_1_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'banner_info_1_setting',
		)
	);
	
	/**
	 * Customizer Repeater for add Info
	 */
	
		$wp_customize->add_setting( 'banner_info_1_contents', 
			array(
			 'sanitize_callback' => 'flossy_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => flossy_get_banner_info_1_default()
			)
		);
		
		$wp_customize->add_control( 
			new Flossy_Repeater( $wp_customize, 
				'banner_info_1_contents', 
					array(
						'label'   => esc_html__('Banner Info','ecommerce-companion'),
						'section' => 'banner_info_1_setting',
						'add_field_label'                   => esc_html__( 'Add New Information', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Information', 'ecommerce-companion' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);		
			
					
	//Pro feature
		class flossy_bannerinfo__section_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_information_section_premium up-to-pro" href="#" target="_blank" style="display: none;"><?php _e('More Information Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'flossy_bannerinfo_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new flossy_bannerinfo__section_premium(
			$wp_customize,
			'flossy_bannerinfo_premium',
				array(
					'section'				=> 'banner_info_1_setting',
				)
			)
		);
}

add_action( 'customize_register', 'flossy_banner_info_1_setting' );

//selective refresh
function flossy_banner_info_1_section_partials( $wp_customize ){	
	
	// banner_info_1_contents
	$wp_customize->selective_refresh->add_partial( 'banner_info_1_contents', array(
		'selector'            => '.bannerinfo-home .meta-box .product-text'
	) );	
}
add_action( 'customize_register', 'flossy_banner_info_1_section_partials' );