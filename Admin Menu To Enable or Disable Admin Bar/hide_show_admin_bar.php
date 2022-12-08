<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @since             1.0.0
 * @package           Hide_Show_Admin_Bar
 *
 * @wordpress-plugin
 * Plugin Name:       Admin Menu To Enable/Disable Admin Bar
 * Description:       Adds "Admin Bar Settings" to Admin Menu toolbar allowing for WordPress Users to enable/disable the Admin Bar 
 * Version:           1.0.0
 * Author:            Lawrence Sun
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hide-show-admin-bar
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'HIDE_SHOW_ADMIN_BAR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hide_show_admin_bar_activator.php
 */
function activate_hide_show_admin_bar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hide_show_admin_bar-activator.php';
	Hide_Show_Admin_Bar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hide_show_admin_bar_deactivator.php
 */
function deactivate_hide_show_admin_bar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hide_show_admin_bar-deactivator.php';
	Hide_Show_Admin_Bar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hide_show_admin_bar' );
register_deactivation_hook( __FILE__, 'deactivate_hide_show_admin_bar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hide_show_admin_bar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hide_show_admin_bar() {

	$plugin = new Hide_Show_Admin_Bar();
	$plugin->run();

}
run_hide_show_admin_bar();
