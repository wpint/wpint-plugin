<?php
/**
 * Plugin Name:     WPINT Plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     This is for using wpint framework
 * Author:          Ali Barzegar Rahimi
 * Author URI:      YOUR SITE HERE
 * Text Domain:     wpint-plugin
 * Domain Path:     /languages
 * Version:         1.0.1
 *
 * @package         WPINT_Plugin
 */


define('WPINT_PLUGIN_PATH', dirname(__FILE__));

define('WPINT_PLUGIN_URI', plugin_dir_url(__FILE__));

$app = require_once dirname(__FILE__) . "/bootstrap/app.php";

// Your code starts here.
function wpint_plugin_activation() 
{
    // create tables
    // Migration::up();
} 
register_activation_hook( __FILE__, 'wpint_plugin_activation' );

function wpint_plugin_deactivation() 
{
    // remove all created tables
    //Migration::down();

    // Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();

}
register_deactivation_hook( __FILE__, 'wpint_plugin_deactivation' );

