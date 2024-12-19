<?php
function flossy_sales_info2_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Banner Info  Section
	=========================================*/
	$wp_customize->add_section(
		'sales_info2_setting', array(
			'title' => esc_html__( 'Sales Info 2 Section', 'ecommerce-companion' ),
			'priority' => 6,
			'panel' => 'flossy_frontpage_sections',
		)
	);

	// Banner Info content Section // 
	$wp_customize->add_setting(
		'sales_info2_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 7,
		)
	);
	
	// Hide / Show
	$wp_customize->add_setting(
		'sale2_hs'
			,array(
			'default' => '1',	
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_checkbox',
			'priority' => 2,
		)
	);

	$wp_customize->add_control(
	'sale2_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','ecommerce-companion'),
			'section' => 'sales_info2_setting',
		)
	);
	

	$wp_customize->add_control(
	'sales_info2_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'sales_info2_setting',
		)
	);
	
	
	//  Image // 
    $wp_customize->add_setting( 
    	'sales_info2_bg_img' , 
    	array(
			'default' 			=> esc_url(ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/flow-store/assets/images/sales-info2/banner.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_url',	
			'priority' => 35,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'sales_info2_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'ecommerce-companion'),
			'section'        => 'sales_info2_setting',
		) 
	));
	
	/**
	 * Customizer Repeater for add Info
	 */
	
		$wp_customize->add_setting( 'sales_info2_contents', 
			array(
			 'sanitize_callback' => 'flossy_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => flossy_get_sales_info2_default()
			)
		);
		
		$wp_customize->add_control( 
			new Flossy_Repeater( $wp_customize, 
				'sales_info2_contents', 
					array(
						'label'   => esc_html__('Sales Info','ecommerce-companion'),
						'section' => 'sales_info2_setting',
						'add_field_label'                   => esc_html__( 'Add New Sal2', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Sale2', 'ecommerce-companion' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text2_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
			
		//Pro feature
		class flossy_saleinfo2__section_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_saleinformation_section_premium up-to-pro" href="#" target="_blank" style="display: none;"><?php esc_html_e('More SaleInformation Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'flossy_saleinfo2_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new flossy_saleinfo2__section_premium(
			$wp_customize,
			'flossy_saleinfo2_premium',
				array(
					'section'				=> 'sales_info2_setting',
				)
			)
		);
}

add_action( 'customize_register', 'flossy_sales_info2_setting' );

//selective refresh
function flossy_sales_info2_section_partials( $wp_customize ){	
	
	// sales_info2_contents
	$wp_customize->selective_refresh->add_partial( 'sales_info2_contents', array(
		'selector'            => '.salesinfo-home2 .banner-product-wrapper .product-categ-1'
	) );
	
}
add_action( 'customize_register', 'flossy_sales_info2_section_partials' );