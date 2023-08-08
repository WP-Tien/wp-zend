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

register_activation_hook(__FILE__, 'zend_active_plugin');

function zend_active_plugin()
{
    $zend_mp_option = [
        'course'  => 'Wordpress Pro',
        'author'  => 'ZendVN group',
        'website' => 'www.zend.vn'
    ];

    add_option('zend_option_version2', $zend_mp_option, '', 'yes');



    // $zend_option_version = "1.0";
    // add_option('zend_option_version', $zend_option_version, '', 'yes');
}

$str = 'a:3:{s:6:"course";s:13:"Wordpress Pro";s:6:"author";s:12:"ZendVN group";s:7:"website";s:11:"www.zend.vn";}';

echo '<pre>';
print_r(unserialize($str));
echo '</pre>';
