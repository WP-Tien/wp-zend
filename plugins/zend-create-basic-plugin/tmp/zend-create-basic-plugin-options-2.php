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

// add option
// https://developer.wordpress.org/reference/functions/add_option/

// Look up in databse wp_options

add_option(
    'zend_mp_wp_version', 
    '4.0',
    '',
    'yes'
); 

// update option
update_option(
    'zend_mp_wp_version',
    '10.0'
);

// delete option
delete_option(
    'zend_mp_wp_version', // option bị xóa trong db nhưng có default value nó get default
);

// get option
echo get_option(
    'zend_mp_wp_version',
    '3.0' // default value
);

