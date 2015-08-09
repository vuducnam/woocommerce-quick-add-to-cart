<?php 
/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @link       http://vuducnam.com/
 * @since      1.0
 *
 * @package    woocommerce-quick-add-to-cart
 * @subpackage woocommerce-quick-add-to-cart/classes
 * @author     Vu Duc Nam <vuduc.nam64@gmail.com>
 */
defined( 'ABSPATH' ) OR exit;

/**
* 
*/
class WQATC_Admin
{
	/**
	* The ID of this plugin.
	*
	* @since    1.0
	* @access   private
	* @var      string    $plugin_name    The ID of this plugin.
	*/
	private $plugin_name;

	/**
	* The version of this plugin.
	*
	* @since    1.0
	* @access   private
	* @var      string    $version    The current version of this plugin.
	*/
	private $version;


	function __construct( $plugin_name, $version )
	{
		# code...
		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action( 'admin_menu', array($this, 'admin_menu') );
		add_action( 'admin_enqueue_scripts', array($this, 'enqueue_styles') );
		add_action( 'admin_enqueue_scripts', array($this, 'enqueue_scripts') );
	}

	/**
	* Add submenu option page
	*
	* @author Vu Duc Nam
	* @since 1.0
	*/
	public function admin_menu()
	{
		add_submenu_page('woocommerce', __('Quick add to cart', 'nam'), __('Quick add to cart', 'nam'), 'manage_options', 'wqatc-options', array($this, 'settings_page'));
	}

	/**
	* Options page
	*
	* @author Vu Duc Nam
	* @since 1.0
	*/
	public function settings_page()
	{
		require_once( WQATC_PLUGIN_DIR . 'public/admin/options-page.php' );
	}

	/**
	* Add style option page
	*
	* @author Vu Duc Nam
	* @since 1.0
	*/
	public function enqueue_styles()
	{
		if( isset($_GET['page']) && $_GET['page'] == 'wqatc-options' ){
			wp_enqueue_style( 'wqatc-plugin-boostrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css', array(), $this->version, 'all' );
		}
	}

	/**
	* Add script option page
	*
	* @author Vu Duc Nam
	* @since 1.0
	*/
	public function enqueue_scripts()
	{
		if( isset($_GET['page']) && $_GET['page'] == 'wqatc-options' ){
			wp_enqueue_script( 'wqatc-plugin-boostrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array( 'jquery' ), $this->version, true );
		}
	}

	/**
	* Get attribute taxonomies.
	* @return array
	* @since    1.0
	*/
	public static function _get_attribute(){
		include_once( ABSPATH . 'wp-content/plugins/woocommerce/woocommerce.php' );
		$attribute_taxonomies = wc_get_attribute_taxonomies();
		$taxonomy_terms = array();

		if ( $attribute_taxonomies ) :
		    foreach ($attribute_taxonomies as $tax) :
			   	if (taxonomy_exists(wc_attribute_taxonomy_name($tax->attribute_name))) :
			        $taxonomy_terms[$tax->attribute_name] = get_terms( wc_attribute_taxonomy_name($tax->attribute_name), 'orderby=name&hide_empty=0' );
			    endif;
			endforeach;
		endif;

		return $taxonomy_terms;
	}
}

/**
* Run class
* @since 1.0
*/
new WQATC_Admin( WQATC_PLUGIN_FOLDER, WQATC_PLUGIN_VER );
?>
