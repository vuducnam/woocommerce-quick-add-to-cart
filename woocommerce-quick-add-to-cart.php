<?php
/*
 * @wordpress-plugin
 * Plugin Name:       Woocommerce quick add to cart
 * Plugin URI:        http://vuducnam.com
 * Description:       Shortcode by Comfythemes for Tasty theme
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
define('WQATC_PLUGIN_FOLDER', basename(dirname(__FILE__)));
define('WQATC_PLUGIN_URL', plugin_dir_url(WQATC_PLUGIN_FOLDER).WQATC_PLUGIN_FOLDER.'/');
define('WQATC_PLUGIN_CSS', TASTY_PLUGIN_URL.'assets/css');
define('WQATC_PLUGIN_JS', TASTY_PLUGIN_URL.'assets/js');
define('WQATC_PLUGIN_IMG', TASTY_PLUGIN_URL.'assets/images');


/**
* Load text domain
*
* @author Vu Duc Nam
* @since 1.0
*/
$path = dirname(plugin_basename(__FILE__)) . '/languages';
load_plugin_textdomain('nam', false, $path);



?>