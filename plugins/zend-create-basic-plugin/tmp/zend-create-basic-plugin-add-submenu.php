<?php

/**
 * @package Basic Plugin
 * @version 1.7.2
 */
/*
Plugin Name: Basic Plugin
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Basic plugin.
Author: Vincent
Version: 1.7.2
Author URI: http://ma.tt/
*/

/**
 * Example add menu to existed menu
 * 
 * add_dashboard_page() https://developer.wordpress.org/reference/functions/add_dashboard_page/
 * media
 * pages
 * comments
 * theme
 * plugins
 * users
 * management
 * options
 * ...
 */

function plugin_menu() {
    add_dashboard_page(
        __( 'Demo add page', 'textdomain' ),
        __( 'WPDocs Plugin', 'textdomain' ), 
        'read',
        'menu-slug',
        'callback_function'
    );
}

function callback_function() {
    echo "<h2> Dashboard here </h2>";
}

add_action( 'admin_menu', 'plugin_menu' );