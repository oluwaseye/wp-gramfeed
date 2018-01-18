<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://linkedin.com/in/oluwaseye
 * @since      1.0.0
 *
 * @package    Wp_Gramfeed
 * @subpackage Wp_Gramfeed/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Gramfeed
 * @subpackage Wp_Gramfeed/includes
 * @author     Oluwaseye Ogunkoya <seyz4all@gmail.com>
 */
class Wp_Gramfeed_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-gramfeed',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
