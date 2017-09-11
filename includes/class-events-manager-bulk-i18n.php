<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/eugeis/
 * @since      1.0.0
 *
 * @package    Events_Manager_Bulk
 * @subpackage Events_Manager_Bulk/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Events_Manager_Bulk
 * @subpackage Events_Manager_Bulk/includes
 * @author     Eugen Eisler <eoeisler@gmail.com>
 */
class Events_Manager_Bulk_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'events-manager-bulk',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
