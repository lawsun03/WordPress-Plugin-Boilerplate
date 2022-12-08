<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Hide_Show_Admin_Bar
 * @subpackage Hide_Show_Admin_Bar/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Hide_Show_Admin_Bar
 * @subpackage Hide_Show_Admin_Bar/admin
 * @author     Lawrence Sun <alawrencesun@gmail.com>
 */

class Hide_Show_Admin_Bar_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		add_action('admin_menu', 'enable_disable_admin_menu');

		function enable_disable_admin_menu() {
			add_menu_page('Admin Bar', 'Admin Bar', 'manage_options', 'toggle-admin-bar', 'toggle_admin_menu', null, 4);
		}

		function toggle_admin_menu() {
				echo 
				"<div class='wrap'> 
					<h2>Enable/Disable Admin Bar For " . strval(get_bloginfo('name', 'raw')) . "</h2>
					<form method='post'> 
						<input type='submit' name='toggle_menu_on' id='toggle_menu_on' value='Enable Admin Bar'/> 
						<input type='submit' name='toggle_menu_off' id='toggle_menu_off' value='Disable Admin Bar'/> 
					</form>
				</div>";
		}


	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hide_Show_Admin_Bar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hide_Show_Admin_Bar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-name-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hide_Show_Admin_Bar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hide_Show_Admin_Bar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-admin.js', array( 'jquery' ), $this->version, false );

	}

}


