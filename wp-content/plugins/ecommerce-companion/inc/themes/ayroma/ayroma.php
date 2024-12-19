<?php
/**
 * @package   Aromatic
 */

require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/theme-functions/extras.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/functions-style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/theme-functions/dynamic_style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/features/aromatic-header.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-header.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/features/aromatic-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/features/aromatic-info.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/features/aromatic-exclusive-product.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/features/aromatic-testimonial.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/features/aromatic-grab.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-typography.php';

if ( ! function_exists( 'ecommerce_comp_aromatic_frontpage_sections' ) ) :
	function ecommerce_comp_aromatic_frontpage_sections() {	
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/sections/section-slider.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/sections/section-info.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/sections/section-exclusive-product.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/sections/section-testimonial.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/ayroma/sections/section-product-grab.php';
    }
	add_action( 'aromatic_sections', 'ecommerce_comp_aromatic_frontpage_sections' );
endif;