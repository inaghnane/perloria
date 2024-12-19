<?php
/**
 * @package   Storely
 */

require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/extras.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/functions-style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/theme-functions/dynamic_style.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/sections/section-header.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/sections/section-above-footer.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/features/storely-header.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/features/storely-slider.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/features/storely-service.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/features/storely-popular-product.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/features/storely-banner-info.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/features/storely-footer.php';
require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/features/storely-typography.php';

if ( ! function_exists( 'ecommerce_comp_storely_frontpage_sections' ) ) :
	function ecommerce_comp_storely_frontpage_sections() {	
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/sections/section-slider.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/sections/section-service.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/sections/section-popular-product.php';
		require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/sections/section-banner-info.php';
    }
	add_action( 'storely_sections', 'ecommerce_comp_storely_frontpage_sections' );
endif;