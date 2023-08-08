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

register_deactivation_hook(__FILE__, 'zendvn_mp_deactive');

function zendvn_mp_deactive()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "options";


    $wpdb->update(
        $table_name,
        array('autoload' => 'no'),
        array('option_name' => 'zend_option_version'),
        array('%s'), // no
        array('%s') // zend_option_version
    );
}

// zend_option_version 1.0 no