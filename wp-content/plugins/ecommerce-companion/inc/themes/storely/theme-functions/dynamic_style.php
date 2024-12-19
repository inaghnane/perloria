<?php
if( ! function_exists( 'ecommerce_comp_storely_dynamic_style' ) ):
    function ecommerce_comp_storely_dynamic_style() {

		$output_css = '';
		/**
		 * Logo Width 
		 */
		$output_css   .= storely_customizer_value( 'logo_width', '.logo img, .mobile-logo img', array( 'max-width' ), array( 140, 140, 140 ), 'px !important' );
		
		/**
		 * Slider
		 */
		$slider_overlay_enable 				 = get_theme_mod('slider_overlay_enable');
		$slide_overlay_color 				 = get_theme_mod('slide_overlay_color','#000000');
		$slider_opacity						 = get_theme_mod('slider_opacity','0.12');
		list($br, $bg, $bb) = sscanf($slide_overlay_color, "#%02x%02x%02x");
		if($slider_overlay_enable == '1') { 
				$output_css .=".home-slider-info-wrapper {
					background: rgba($br, $bg, $bb, $slider_opacity);
				}.slider5 .home-slider-info-wrapper{
					background: none;
				}.slider5 div.slider-overlay {
						opacity: " .esc_attr($slider_opacity). ";
				}\n";
			}


		/**
		 *  Typography Body
		 */
		 $storely_body_font_weight	 	 = get_theme_mod('storely_body_font_weight','inherit');
		 $storely_body_text_transform	 = get_theme_mod('storely_body_text_transform','inherit');
		 $storely_body_font_style	 	 = get_theme_mod('storely_body_font_style','inherit');
		 $storely_body_txt_decoration	 = get_theme_mod('storely_body_txt_decoration','none');
		
		 $output_css   .= storely_customizer_value( 'storely_body_font_size', 'body', array( 'font-size' ), array( 16, 16, 16 ), 'px' );
		 $output_css   .= storely_customizer_value( 'storely_body_line_height', 'body', array( 'line-height' ), array( 1.6, 1.6, 1.6 ) );
		 $output_css   .= storely_customizer_value( 'storely_body_ltr_space', 'body', array( 'letter-spacing' ), array( 0, 0, 0 ), 'px' );
		 $output_css .=" body{ 
			font-weight: " .esc_attr($storely_body_font_weight). ";
			text-transform: " .esc_attr($storely_body_text_transform). ";
			font-style: " .esc_attr($storely_body_font_style). ";
			text-decoration: " .esc_attr($storely_body_txt_decoration). ";
		}\n";		 
		
		/**
		 *  Typography Heading
		 */
		 for ( $i = 1; $i <= 6; $i++ ) {
			 $storely_heading_font_weight	 	= get_theme_mod('storely_h' . $i . '_font_weight','700');
			 $storely_heading_text_transform 	= get_theme_mod('storely_h' . $i . '_text_transform','inherit');
			 $storely_heading_font_style	 	= get_theme_mod('storely_h' . $i . '_font_style','inherit');
			 $storely_heading_txt_decoration	= get_theme_mod('storely_h' . $i . '_text_decoration','inherit');
			 
			 $output_css   .= storely_customizer_value( 'storely_h' . $i . '_font_size', 'h' . $i .'', array( 'font-size' ), array( 36, 36, 36 ), 'px' );
			 $output_css   .= storely_customizer_value( 'storely_h' . $i . '_line_height', 'h' . $i . '', array( 'line-height' ), array( 1.2, 1.2, 1.2 ) );
			 $output_css   .= storely_customizer_value( 'storely_h' . $i . '_ltr_spacing', 'h' . $i . '', array( 'letter-spacing' ), array( 0, 0, 0 ), 'px' );
			 $output_css .=" h" . $i . "{ 
				font-weight: " .esc_attr($storely_heading_font_weight). ";
				text-transform: " .esc_attr($storely_heading_text_transform). ";
				font-style: " .esc_attr($storely_heading_font_style). ";
				text-decoration: " .esc_attr($storely_heading_txt_decoration). ";
			}\n";
		 }
		
        wp_add_inline_style( 'storely-style', $output_css );
    }
endif;
add_action( 'wp_enqueue_scripts', 'ecommerce_comp_storely_dynamic_style' );