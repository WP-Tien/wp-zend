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

register_activation_hook(__FILE__, 'zendvn_active_plugin');

function zendvn_active_plugin()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "zendvn_mp_test";

    if ($wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") != $table_name) {
        $sql = "CREATE TABLE `" . $table_name . "` (
		`myid` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
		`my_name` varchar(50) DEFAULT NULL,
		PRIMARY KEY (`myid`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta($sql);
    }
}


// check table exists
// global $wpdb;
// $table_name = $wpdb->prefix . "zendvn_mp_test";
// echo $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'");
