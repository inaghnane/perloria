<?php
function flossy_sales_info_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Banner Info  Section
	=========================================*/
	$wp_customize->add_section(
		'sales_info_setting', array(
			'title' => esc_html__( 'Sales Info Section', 'ecommerce-companion' ),
			'priority' => 6,
			'panel' => 'flossy_frontpage_sections',
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting(
		'sale1_hs'
			,array(
			'default' => '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_checkbox',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'sale1_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'sales_info_setting',
		)
	);

	// Banner Info content Section // 
	$wp_customize->add_setting(
		'sales_info_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'sales_info_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'sales_info_setting',
		)
	);
	
	
	
	/**
	 * Customizer Repeater for add Info
	 */
	
		$wp_customize->add_setting( 'sales_info_contents', 
			array(
			 'sanitize_callback' => 'flossy_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => flossy_get_sales_info_default()
			)
		);
		
		$wp_customize->add_control( 
			new Flossy_Repeater( $wp_customize, 
				'sales_info_contents', 
					array(
						'label'   => esc_html__('Sales Info','ecommerce-companion'),
						'section' => 'sales_info_setting',
						'add_field_label'                   => esc_html__( 'Add New Sal1', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Sale1', 'ecommerce-companion' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
			//Pro feature
		class flossy_saleinfo__section_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_info_section_premium up-to-pro" href="#" target="_blank" style="display: none;"><?php esc_html_e('More Information Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'flossy_saleinfo_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new flossy_saleinfo__section_premium(
			$wp_customize,
			'flossy_saleinfo_premium',
				array(
					'section'				=> 'sales_info_setting',
				)
			)
		);
}

add_action( 'customize_register', 'flossy_sales_info_setting' );

//selective refresh
function flossy_sales_info_section_partials( $wp_customize ){	
	
	// sales_info_contents
	$wp_customize->selective_refresh->add_partial( 'sales_info_contents', array(
		'selector'            => '.salesinfo-home .content .reverse-support-2'
	) );
	
}
add_action( 'customize_register', 'flossy_sales_info_section_partials' );