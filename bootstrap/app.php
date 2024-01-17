<?php

/**
 * Register Packages
 */

include_once  dirname(__FILE__, 2)."/vendor/autoload.php";


/**
 * New Application
 */
return new \WPINT\Framework\Foundation\Application(WPINT_PLUGIN_PATH);