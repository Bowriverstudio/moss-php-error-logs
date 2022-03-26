<?php
/**
 * Plugin Name: Moss PHP Error Logs
 * Plugin URI: https://github.com/Bowriverstudio/moss-php-error-logs
 * GitHub Plugin URI: https://github.com/Bowriverstudio/moss-php-error-logs
 * Description: Writes the php error log file in Moss.sh
 * Author: Maurice Tadros 
 * Author URI: http://www.bowriverstudio.com
 * Version: 1.0
 * Domain Path: /languages/
 * Requires PHP: 7.1
 * License: GPL-3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$path_array = explode('/', dirname(__FILE__));

// Adjust Path from plugin directory
$path_array = array_splice($path_array, 0, count($path_array) - 5);

$error_log_path = implode('/', $path_array)  .'/logs/php/php-error.log';

ini_set("log_errors", 1);
ini_set("error_log", $error_log_path);

