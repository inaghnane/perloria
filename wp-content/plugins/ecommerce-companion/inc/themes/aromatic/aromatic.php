<?php
/**
 * @package   Aromatic
 */

require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/theme-functions/extras.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/functions-style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/theme-functions/dynamic_style.php';
//require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/sections/section-header.php';
//require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/sections/section-above-footer.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-header.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-info.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-exclusive-product.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-grab.php';
//require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-footer.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/features/aromatic-typography.php';

if ( ! function_exists( 'ecommerce_comp_aromatic_frontpage_sections' ) ) :
	function ecommerce_comp_aromatic_frontpage_sections() {	
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/sections/section-slider.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/sections/section-info.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/sections/section-exclusive-product.php';
		 require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/sections/section-product-grab.php';
    }
	add_action( 'aromatic_sections', 'ecommerce_comp_aromatic_frontpage_sections' );
endif;