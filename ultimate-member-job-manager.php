<?php
/*
Plugin Name: Ultimate Member Job Manager
Plugin URI: http://opentuteplus.com/
Description: This plugin integrated WP Job Manager and its extensions into your Ultimate Member user profiles. This plugin needs Ultimate Member and WP Job Manager to be installed. Ultimate Member Job Manager is compatible with the following WP Job Manager extensions: Applications, Resume Manager, Bookmarks and Job Alerts.
Author: Kishore Sahoo
Author URI: http://blog.kishorechandra.co.in/
Version: 1.0.0
Requires at least: WP 3.8, Ultimate Member 1.3.11
Tested up to: WP 4.1.1, Ultimate Member 1.3.11
Network: true
Text Domain: ultimate-member-job-manager
Domain Path: /languages/

Copyright: 2015 Kishore Sahoo
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;


if ( ! defined( 'ULTIMATE_MEMBER_WP_JOB_MANAGER_PLUGIN_DIR ' ) ) {
	define( 'ULTIMATE_MEMBER_WP_JOB_MANAGER_PLUGIN_DIR',  untrailingslashit( plugin_dir_path( __FILE__ ) ) );
}

if ( ! defined( 'ULTIMATE_MEMBER_WP_JOB_MANAGER ' ) ) {
	define( 'ULTIMATE_MEMBER_WP_JOB_MANAGER', plugin_dir_path( __FILE__ ) . 'ultimate-member-components/wp-job-manager/' );
}

// I18n
add_action( 'plugins_loaded', 'ultimate_member_job_manager_load_textdomain' );
function ultimate_member_job_manager_load_textdomain() {
	load_plugin_textdomain( 'ultimate-member-job-manager', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

function init_wp_job_manager_component(){
    include( ULTIMATE_MEMBER_WP_JOB_MANAGER .'class-um-wp-job-manager.php' );
}

add_action( 'init', 'init_wp_job_manager_component', 40 );
