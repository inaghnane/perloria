<?php
/**
 * Fired during plugin activation
 *
 * @package    eCommerce Companion
 */

/**
 * This class defines all code necessary to run during the plugin's activation.
 *
 */
class eCommerce_Comapnion_Activator {

	public static function activate() {

        $item_details_page = get_option('item_details_page'); 
		$theme = wp_get_theme(); // gets the current theme
		if(!$item_details_page){
			if ( 'Storely' == $theme->name  || 'Shoply' == $theme->name  || 'Storess' == $theme->name || 'Storezia' == $theme->name  ||  'Shopiva' == $theme->name  ||  'Shopient' == $theme->name){
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/pages-widget/upload-media.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/pages-widget/home-page.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/pages-widget/default-widget.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/storely/pages-widget/default-post.php';
			}
			
			if ( 'Aromatic' == $theme->name || 'Ayroma' == $theme->name  ||	'Feauty' == $theme->name){
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/pages-widget/upload-media.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/pages-widget/home-page.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/pages-widget/default-widget.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/aromatic/pages-widget/default-post.php';
			}
			
			if ( 'Retailsy' == $theme->name || 'Express Store' == $theme->name || 'Storefit' == $theme->name){
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/pages-widget/upload-media.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/pages-widget/home-page.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/pages-widget/default-widget.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/retailsy/pages-widget/default-post.php';
			}
				
			if ( 'Flossy' == $theme->name || 'Flexi Mart' == $theme->name || 'Flow Store' == $theme->name  ){
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/pages-widget/upload-media.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/pages-widget/home-page.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/pages-widget/default-widget.php';
				require ECOMMERCE_COMP_PLUGIN_DIR . 'inc/themes/flossy/pages-widget/default-post.php';
			}
						
			update_option( 'item_details_page', 'Done' );
		}
	}

}