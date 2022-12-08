<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Hide_Show_Admin_Bar
 * @subpackage Hide_Show_Admin_Bar/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Hide_Show_Admin_Bar
 * @subpackage Hide_Show_Admin_Bar/includes
 * @author     Lawrence Sun <alawrencesun@gmail.com>
 */
class Hide_Show_Admin_Bar_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		delete_option('wp_admin_bar_disabled');
	}

}
