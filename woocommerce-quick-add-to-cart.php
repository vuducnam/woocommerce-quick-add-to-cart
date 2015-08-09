<?php
/*
 * @wordpress-plugin
 * Plugin Name:       Woocommerce quick add to cart
 * Plugin URI:        http://vuducnam.com
 * Description:       Woocommerce quick add to cart
 * Version:           1.0
 * Author:            Vu Duc Nam
 * Author URI:        http://vuducnam.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nam
 * Domain Path:       /languages
 */
defined( 'ABSPATH' ) OR exit; 

/**
* Define plugin
* @since 1.0
*/
define('WQATC_PLUGIN_VER', '1.0');
define('WQATC_PLUGIN_NAME', 'Woocommerce quick add to cart');
define('WQATC_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WQATC_PLUGIN_FOLDER', basename(dirname(__FILE__)));
define('WQATC_PLUGIN_URL', plugin_dir_url(WQATC_PLUGIN_FOLDER).WQATC_PLUGIN_FOLDER.'/');
define('WQATC_PLUGIN_CSS', WQATC_PLUGIN_URL.'assets/css');
define('WQATC_PLUGIN_JS', WQATC_PLUGIN_URL.'assets/js');
define('WQATC_PLUGIN_IMG', WQATC_PLUGIN_URL.'assets/images');


/**
* Load text domain
*
* @author Vu Duc Nam
* @since 1.0
*/
$path = dirname(plugin_basename(__FILE__)) . '/languages';
load_plugin_textdomain('nam', false, $path);

/**
* Include required files to checke woocommerce is active or not
* @since 1.0
*/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if (is_plugin_active( 'woocommerce/woocommerce.php' ) ) {

	/*
	* Backend
	*/
	require 'classes/class_wqatc_admin.php';

	/*
	* Frontend
	*/
	require 'classes/class_wqatc_woo.php';
}

?>