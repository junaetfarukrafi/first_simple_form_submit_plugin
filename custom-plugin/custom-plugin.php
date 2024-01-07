<?php
/**
 * Plugin Name: My awesome plugin
 * Plugin URI: http://yourgroovydomain.com/my-awesome-plugin/
 * Description: Your plugin's description text.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: http://yourgroovydomain.com/
 * Developer: Your Name
 * Developer URI: http://yourgroovydomain.com/
 * Text Domain: my-awesome-plugin
 * Domain Path: /languages
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

define("PLUGIN_DIR_PATH",plugin_dir_path( __FILE__ ));
define("PLUGIN_URL",plugins_url( ));
 
function add_custom_menu(){
   add_menu_page(
    'customplugin',
    'Custom Plugin',
    'manage_options',
    'custom_plugin',
    'custom_plugin_function',
    'dashicons-insert',
    9
   );
   
   add_submenu_page( 
    'custom_plugin',
    'Add New',
    'Add New',
    'manage_options',
    'custom_plugin',
    'custom_plugin_function'
   );

   add_submenu_page( 
    'custom_plugin',
    'All Pages',
    'All Pages',
    'manage_options',
    'all_page',
    'custom_plugin_function2'
   );
   
}
 add_action( 'admin_menu', 'add_custom_menu');

 function custom_plugin_function(){
   //  echo "Custom Plugin";
   include_once PLUGIN_DIR_PATH.'/views/add-new.php';
     
 }

 function custom_plugin_function2(){
   //  echo "Custom Plugin2";
   include_once PLUGIN_DIR_PATH.'/views/all-page.php';
 }

 function custom_plugin_assets(){
  wp_enqueue_style( 'style',PLUGIN_URL.'/custom-plugin/assets/css/style.css','','1.0');
  wp_enqueue_script( 'script',PLUGIN_URL.'/custom-plugin/assets/js/script.js','','1.0');
 wp_localize_script( 'script', 'ajaxurl', admin_url( 'admin-ajax.php'));

 }
 add_action('init','custom_plugin_assets');

if(isset($_REQUEST['action'])){
  switch($_REQUEST['action']){
    case "custom_plugin":
      add_action( 'admin_init','ajax_handler_file_add' );
      function ajax_handler_file_add(){
        global $wpdb;
        include_once PLUGIN_DIR_PATH.'/views/ajax-handler.php';
      }
      break;
  }
  
}

 function custom_plugin_create_table(){
  global $wpdb;
  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  $sql = "CREATE TABLE `wp_custom_table` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `address` varchar(255) NOT NULL,
    PRIMARY KEY  (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

  dbDelta( $sql );
 }
 register_activation_hook( __FILE__, 'custom_plugin_create_table' );

 register_deactivation_hook( __FILE__, 'custom_plugin_deactivate_table' );

 register_uninstall_hook( __FILE__, 'custom_plugin_delete_table' );


 function custom_plugin_deactivate_table(){
  global $wpdb;
  $wpdb->query("DROP table IF Exists wp_custom_table");
 }

 function custom_plugin_delete_table(){
  global $wpdb;
  $wpdb->query("DROP table IF Exists wp_custom_table");
 }

 register_activation_hook( __FILE__, 'custom_plugin_create_page' );

 function custom_plugin_create_page(){
  // global $wpdb;
  // $wpdb->query("DROP table IF Exists wp_custom_table");
 }

 add_action( "wp_ajax_custom_ajax_req","custom_plugin_ajax_req");
 function custom_plugin_ajax_req(){
  print_r($_REQUEST);
  die();
 }

?>