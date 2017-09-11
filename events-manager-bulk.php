<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/eugeis/
 * @since             1.0.0
 * @package           Events_Manager_Bulk
 *
 * @wordpress-plugin
 * Plugin Name:       Events Manager Bulk
 * Plugin URI:        https://github.com/eugeis/events-manager-bulk
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Eugen Eisler
 * Author URI:        https://github.com/eugeis/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       events-manager-bulk
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( PLUGIN_VERSION, '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-events-manager-bulk-activator.php
 */
function activate_events_manager_bulk() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-events-manager-bulk-activator.php';
	Events_Manager_Bulk_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-events-manager-bulk-deactivator.php
 */
function deactivate_events_manager_bulk() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-events-manager-bulk-deactivator.php';
	Events_Manager_Bulk_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_events_manager_bulk' );
register_deactivation_hook( __FILE__, 'deactivate_events_manager_bulk' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-events-manager-bulk.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_events_manager_bulk() {

	$plugin = new Events_Manager_Bulk();
	$plugin->run();

}
run_events_manager_bulk();
