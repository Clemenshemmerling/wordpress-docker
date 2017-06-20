<?php 
/*
* Plugin Name: WooEnhancer - Improve and customize WooCommerce
* Plugin URI: http://alborotado.com
* Description: Extends Woocommerce capabilities and lets you customize the design...
* Version: 1.08
* Author: Miguras
* Author URI: http://alborotado.com
* License: GPLv2 or later
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/
if ( ! defined( 'ABSPATH' ) ) {
exit; // Exit if accessed directly
}
define("MIGWOOPATH", plugin_dir_url( __FILE__ ));
		
		//========================= Variables ===================================
	
	
		/*======================== FUNCTIONS ==============================*/
		
		if ( file_exists( dirname( __FILE__ ) . '/inc/functions.php' ) ) {
			require_once( dirname( __FILE__ ) . '/inc/functions.php' );
		}
		
		
		
		// ========================== REDUX FRAMEWORK =========================================
		if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/admin/redux-framework/framework.php' ) ) {
			require_once( dirname( __FILE__ ) . '/admin/redux-framework/framework.php' );
		}
		if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/admin/wooenhancer-options.php' ) ) {
			require_once( dirname( __FILE__ ) . '/admin/wooenhancer-options.php' );
		}
		
		/*====================== TGM =========================*/
		if ( file_exists( dirname( __FILE__ ) . '/inc/plugins/plugin-activation.php' ) ) {
			require_once( dirname( __FILE__ ) . '/inc/plugins/plugin-activation.php' );
		}
		
		
		/*=========================== METABOXES ===================*/
		if ( file_exists( dirname( __FILE__ ) . '/metaboxes/plugin-metaboxes.php' ) ) {
			require_once( dirname( __FILE__ ) . '/metaboxes/plugin-metaboxes.php' );
		}
	

		
		/*=========================== DYNAMIC CSS ===================*/
		if ( file_exists( dirname( __FILE__ ) . '/assets/css/dynamic-styles.php' ) ) {
			require_once( dirname( __FILE__ ) . '/assets/css/dynamic-styles.php' );
		}
		
		if(!is_admin() && function_exists('wp_register_script')){
					add_action('wp_head', 'migwoo_enhancer_dynamic_styles');
		};
		
		//===================== STYLES AND SCRIPTS ===========================
		add_action( 'wp_enqueue_scripts', 'mig_wooenhancer_front_styles' );
		function mig_wooenhancer_front_styles(){
			wp_enqueue_script( 'jquery');
			wp_enqueue_style( 'basic-wooenhancer', plugin_dir_url( __FILE__ ) . 'assets/css/front-styles.css', rand(0, 100));
		};

	
	

?>