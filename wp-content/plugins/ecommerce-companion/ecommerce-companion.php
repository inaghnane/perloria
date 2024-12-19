<?php
/*
Plugin Name: eCommerce Companion
Description: Introducing the eCommerce Companion Plugin, the essential tool for effortless setup of Seller Themes with full WooCommerce support. With our plugin, sellers can streamline their online store setup process in just a few clicks. We ensure seamless integration of all themes with WooCommerce, eliminating compatibility issues. Experience enhanced functionality tailored for sellers, from customizable product pages to smooth checkout processes. Our plugin guarantees optimal performance, delivering lightning-fast load times for an exceptional shopping experience. Responsive design ensures your store looks stunning on any device. Stay ahead with regular updates and dedicated support from our expert team. Elevate your eCommerce game with the eCommerce Companion Plugin today! https://www.sellerthemes.com/themes
Version: 8.1.27
Requires: 4.6 or higher
Author: sellerthemes
Author URI: https://sellerthemes.com
Text Domain: ecommerce-companion
Requires PHP: 5.6
*/
define( 'ECOMMERCE_COMP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'ECOMMERCE_COMP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

function ecommerce_companion_activate() {
	
	/**
	 * Load Custom control in Customizer
	 */
	 require_once('inc/custom-controls/customizer-controls.php');
	
	/**
	 * Load Theme
	 */
	 require_once('inc/themes.php');
		
	}
add_action( 'init', 'ecommerce_companion_activate' );

/**
 * The code during plugin activation.
 */
function ecommerce_companion_activates() {
	require_once plugin_dir_path( __FILE__ ) . 'inc/activator.php';
	eCommerce_Comapnion_Activator::activate();
}
register_activation_hook( __FILE__, 'ecommerce_companion_activates' );

//Added Widget
require_once('inc/widget/social-widget.php');			
require_once('inc/widget/info-widget.php');			
add_action('widgets_init', function(){ register_widget('ecommerce_companion_social_icon_widget'); });
add_action('widgets_init', function(){ register_widget('ecommerce_companion_info_widget'); });