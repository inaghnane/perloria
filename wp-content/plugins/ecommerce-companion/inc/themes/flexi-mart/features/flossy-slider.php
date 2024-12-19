<?php
function flexi_mart_slider_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
		
	/**
	 * Customizer Repeater for add slides
	 */
	
		$wp_customize->add_setting( 'slider', 
			array(
			 'sanitize_callback' => 'flossy_repeater_sanitize',
			 'priority' => 5,
			  'default' => flossy_get_slider_default()
			)
		);
		
		$wp_customize->add_control( 
			new Flossy_Repeater( $wp_customize, 
				'slider', 
					array(
						'label'   => esc_html__('Slide','ecommerce-companion'),
						'section' => 'slider_setting',
						'add_field_label'                   => esc_html__( 'Add New Slide', 'ecommerce-companion' ),
						'item_name'                         => esc_html__( 'Slide', 'ecommerce-companion' ),					
						'customizer_repeater_title_control' => true,
						'customizer_repeater_text2_control'=> true,
						'customizer_repeater_text_control'=> true,
						'customizer_repeater_link_control' => true,
						'customizer_repeater_image_control' => true,
					) 
				) 
			);
			
					
	//Pro feature
		class fchild1_slider__section_premium extends WP_Customize_Control {
			public function render_content() { 
			?>
				<a class="customizer_slider_section_premium up-to-pro" href="#" target="_blank" style="display: none;"><?php _e('More Slides Available in the Premium Version','ecommerce-companion'); ?></a>
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'flossy_slider_premium', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'priority' => 5,
		));
		$wp_customize->add_control(
			new fchild1_slider__section_premium(
			$wp_customize,
			'flossy_slider_premium',
				array(
					'section'				=> 'slider_setting',
				)
			)
		);
}

add_action( 'customize_register', 'flexi_mart_slider_setting' );