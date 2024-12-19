<?php
function flossy_sponsor2_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Sponsor  Section
	=========================================*/
	$wp_customize->add_section(
		'sponsor2_setting', array(
			'title' => esc_html__( 'Sponsor 2 Section', 'ecommerce-companion' ),
			'priority' => 7,
			'panel' => 'flossy_frontpage_sections',
		)
	);

	// Sponsor content Section // 
	$wp_customize->add_setting(
		'sponsor2_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'sponsor2_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','ecommerce-companion'),
			'section' => 'sponsor2_setting',
		)
	);
	
	
	//  Title // 
	$wp_customize->add_setting(
    	'sponsor2_ttl',
    	array(
	        'default'			=> 'Our <span>Partner</span>',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'sponsor2_ttl',
		array(
		    'label'   => __('Title','ecommerce-companion'),
		    'section' => 'sponsor2_setting',
			'type'           => 'text',
		)  
	);
	
	//  Description // 
	$wp_customize->add_setting(
    	'sponsor2_desc',
    	array(
	        'default'			=> __('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque asperiores porro.','ecommerce-companion'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'flossy_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 2,
		)
	);	
	
	$wp_customize->add_control( 
		'sponsor2_desc',
		array(
		    'label'   => __('Description','ecommerce-companion'),
		    'section' => 'sponsor2_setting',
			'type'           => 'text',
		)  
	);
	
	/**
	 * Customizer Repeater for add sponsor2
	 */
	
		$wp_customize->add_setting( 'sponsor2_contents', 
			array(
			 'sanitize_callback' => 'flossy_repeater_sanitize',
			 'transport'         => $selective_refresh,
			 'priority' => 8,
			 'default' => flossy_get_sponsor2_default()
			)
		);
		
		$wp_customize->add_control( 
			new Flossy_Repeater( $wp_customize, 
				'sponsor2_contents', 
					array(
						'label'   => esc_html__('Sponsor','ecommerce-companion'),
						'section' => 'sponsor2_setting',
						'add_field_label'                   => esc_html__( 'Add New Client', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Client', 'ecommerce-companion' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_link_control' => true,
					) 
				) 
			);
	
	//Pro feature
		class flossy_sponsor__section_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_client_section_premium up-to-pro" href="#" target="_blank" style="display: none;"><?php esc_html_e('More Sponsor Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'flossy_sponsor_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new flossy_sponsor__section_premium(
			$wp_customize,
			'flossy_sponsor_premium',
				array(
					'section'				=> 'sponsor2_setting',
				)
			)
		);
}

add_action( 'customize_register', 'flossy_sponsor2_setting' );

//selective refresh
function flossy_sponsor2_section_partials( $wp_customize ){	
	
	// sponsor2_ttl
	$wp_customize->selective_refresh->add_partial( 'sponsor2_ttl', array(
		'selector'            => '.sponsor-home2 .section-title',
		'settings'            => 'sponsor2_ttl',
		'render_callback'  => 'flossy_sponsor2_ttl_render_callback',
	) );
	
	// sponsor2_desc
	$wp_customize->selective_refresh->add_partial( 'sponsor2_desc', array(
		'selector'            => '.sponsor-home2 .title-black p',
		'settings'            => 'sponsor2_desc',
		'render_callback'  => 'flossy_sponsor2_desc_render_callback',
	) );
	
	// sponsor2 content
	$wp_customize->selective_refresh->add_partial( 'sponsor2_contents', array(
		'selector'            => '.sponsor-home2 .sponser-logo-wrapper'
	) );
	
}
add_action( 'customize_register', 'flossy_sponsor2_section_partials' );


// sponsor2_ttl
function flossy_sponsor2_ttl_render_callback() {
	return get_theme_mod( 'sponsor2_ttl' );
}

// sponsor2_desc
function flossy_sponsor2_desc_render_callback() {
	return get_theme_mod( 'sponsor2_desc' );
}