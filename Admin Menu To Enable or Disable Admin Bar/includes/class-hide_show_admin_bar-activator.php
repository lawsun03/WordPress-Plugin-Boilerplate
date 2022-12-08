<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Hide_Show_Admin_Bar
 * @subpackage Hide_Show_Admin_Bar/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Hide_Show_Admin_Bar
 * @subpackage Hide_Show_Admin_Bar/includes
 * @author     Lawrence Sun <alawrencesun@gmail.com>
 */
class Hide_Show_Admin_Bar_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// initialize wpdb option
		add_option('wp_admin_bar_disabled');
	}

}
