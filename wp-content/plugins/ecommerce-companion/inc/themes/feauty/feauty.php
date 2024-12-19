<?php
/**
 * @package   Aromatic
 */

require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/theme-functions/extras.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/functions-style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/theme-functions/dynamic_style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/features/aromatic-header.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-header.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/features/aromatic-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/features/aromatic-info.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/features/aromatic-exclusive-product.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/features/aromatic-testimonial.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/features/aromatic-grab.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-typography.php';

if ( ! function_exists( 'ecommerce_comp_aromatic_frontpage_sections' ) ) :
	function ecommerce_comp_aromatic_frontpage_sections() {	
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/sections/section-slider.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/sections/section-info.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/sections/section-exclusive-product.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/sections/section-testimonial.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/feauty/sections/section-product-grab.php';
    }
	add_action( 'aromatic_sections', 'ecommerce_comp_aromatic_frontpage_sections' );
endif;


/**
 * Remove Customize Panel from parent theme
 */
function feauty_remove_parent_setting( $wp_customize ) {
	$wp_customize->remove_control('hdr_social_head');	
	$wp_customize->remove_control('hs_hdr_social');	
	$wp_customize->remove_control('hdr_social_ttl');	
	$wp_customize->remove_control('social_icons');		
}
add_action( 'customize_register', 'feauty_remove_parent_setting',99 );