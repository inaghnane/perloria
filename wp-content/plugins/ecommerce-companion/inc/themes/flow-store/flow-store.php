<?php
/**
 * @package   Flossy
 */

require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/theme-functions/extras.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flow-store/sections/above-header.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/features/flossy-header.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/functions-style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/theme-functions/dynamic_style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/features/flossy-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flow-store/features/flossy-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flow-store/features/flossy-sale-info.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flow-store/features/flossy-sales-info2.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/features/flossy-cta.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/features/flossy-latest-product.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/features/flossy-typography.php';

if ( ! function_exists( 'ecommerce_comp_flossy_frontpage_sections' ) ) :
	function ecommerce_comp_flossy_frontpage_sections() {	
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flow-store/sections/section-slider.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flow-store/sections/section-sale-info.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flow-store/sections/section-sales-info2.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/sections/section-latest-product.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/sections/section-cta.php';
    }
	add_action( 'flossy_sections', 'ecommerce_comp_flossy_frontpage_sections' );
endif;