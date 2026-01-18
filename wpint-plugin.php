<?php
/**
 * Plugin Name:     WPINT Framework
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


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

define('WPINT_PLUGIN_PATH', dirname(__FILE__));

define('WPINT_PLUGIN_URI', plugin_dir_url(__FILE__));

add_action('plugins_loaded', function(){
    $app = require_once dirname(__FILE__) . "/bootstrap/app.php";
    $app->handleRequest(Request::capture());
}, 1);


// Your code starts here.
function wpint_plugin_activation() 
{
  
} 
register_activation_hook( __FILE__, 'wpint_plugin_activation' );

function wpint_plugin_deactivation() 
{
    Artisan::call('optimize:clear');
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'wpint_plugin_deactivation' );
