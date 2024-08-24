<?php 
/*
 * Plugin Name:       WPSA
 * Description:       This is my first plugin WPSA (WordPress Subhan Ahmad)
 * Version:           1.0.0
 * Author:            Subhan Ahmad
 * Author URI:        https://www.linkedin.com/in/subhan-ahmad-8822b8244/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */ 

if (!defined('WPINC')) {
    die;
}

if (!defined("SA_plugin_VERSION")) {
    define("SA_plugin_VERSION", "1.0.0");
}

if (!defined("SA_plugin_DIR")) {
    define("SA_plugin_DIR", plugin_dir_url(__FILE__));
}

if (!function_exists('SA_plugin_scripts')) {
    function SA_plugin_scripts() {
        wp_enqueue_style('main-style', SA_plugin_DIR . 'assets/css/style.css');
        wp_enqueue_script('main-script', SA_plugin_DIR . 'assets/js/script.js');
    }
    add_action('wp_enqueue_scripts', 'SA_plugin_scripts');
}

function SA_setting_page_html(){
    echo '<h1>SA Setting Page</h1>';
}

function SA_submenu_page_html(){
    echo '<h1>SA Submenu Page</h1>';
}

function SA_register_menu_page() {
    add_menu_page(
        'SA Like System',             // Page title
        'SA Settings',                // Menu title
        'manage_options',             // Capability
        'sa-settings',                // Menu slug
        'SA_setting_page_html',       // Function to display the page content
        'dashicons-superhero',        // Icon
        30                            // Position
    );

    add_submenu_page(
        'sa-settings',                // Parent slug
        'SA Submenu',                 // Page title
        'SA Submenu',                 // Menu title
        'manage_options',             // Capability
        'sa-submenu',                 // Menu slug
        'SA_submenu_page_html'        // Function to display the page content
    );
}
add_action('admin_menu', 'SA_register_menu_page');

function SA_plugin_settings(){
    register_setting('sa_option_group', 'sa_option_name');
    
    add_settings_section(
        'sa_settings_section',        // ID
        'SA Settings Section',        // Title
        null,                         // Callback
        'sa-settings'                 // Page
    );
    
    add_settings_field(
        'sa_field',                   // ID
        'SA Field',                   // Title
        'sa_field_callback',          // Callback
        'sa-settings',                // Page
        'sa_settings_section'         // Section
    );
}

function sa_field_callback() {
    echo '<input type="text" name="sa_option_name" value="' . get_option('sa_option_name') . '">';
}

add_action('admin_init', 'SA_plugin_settings');
