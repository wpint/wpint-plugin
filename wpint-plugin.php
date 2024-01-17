<?php
/**
 * Plugin Name:     WPINT Plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     This is for using wpcf framwork
 * Author:          Ali Barzegar Rahimi
 * Author URI:      YOUR SITE HERE
 * Text Domain:     wpcf-plugin
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         WPINT_Plugin
 */

use Wpint\Support\Facades\Migration;

define('WPINT_PLUGIN_PATH', dirname(__FILE__));

define('WPINT_PLUGIN_URI', plugin_dir_url(__FILE__));

$app = require_once dirname(__FILE__) . "/bootstrap/app.php";

// Your code starts here.
function wpdf_plugin_activation() 
{
    // create tables
    // Migration::up();
} 
register_activation_hook( __FILE__, 'wpdf_plugin_activation' );


function wpdf_plugin_deactivation() 
{
    // remove all created tables
    // Migration::down();

    // Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();

}
register_deactivation_hook( __FILE__, 'wpdf_plugin_deactivation' );

