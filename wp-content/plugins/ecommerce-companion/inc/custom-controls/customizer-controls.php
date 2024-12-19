<?php
/**
 * eCommerce Companion Theme Customizer Controls.
 *
 * @package     eCommerce Companion
 * @since       eCommerce Companion 1.0
 */

$ecommerce_comp_control_dir =  ECOMMERCE_COMP_PLUGIN_DIR . 'inc/custom-controls';

require $ecommerce_comp_control_dir . '/range-value-control.php';
if(class_exists( 'woocommerce' )):
	require $ecommerce_comp_control_dir . '/product-category-control.php';
endif;
if ( ! class_exists( 'Ecommerce_Comp_Customizer' ) ) {

	/**
	 * Customizer Loader
	 *
	 * @since 1.0
	 */
	class Ecommerce_Comp_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			/**
			 * Customizer
			 */
			add_action( 'customize_register',                      array( $this, 'ecommerce_comp_customizer_register' ) );
		}
		
		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function ecommerce_comp_customizer_register( $wp_customize ) {
			
			/**
			 * Register controls
			 */
			$wp_customize->register_control_type( 'Ecommerce_Comp_Customizer_Range_Control' );
		}

	}
}// End if().

/**
 *  Kicking this off by calling 'get_instance()' method
 */
Ecommerce_Comp_Customizer::get_instance();