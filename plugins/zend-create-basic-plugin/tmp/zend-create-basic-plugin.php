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

if (is_admin()) {
    require_once dirname(__FILE__) . '/inc/admin.php';
} else {
    require_once dirname(__FILE__) . '/inc/public.php';
}

$path = dirname(__FILE__) . '/inc/admin.php';
echo $path;

$plugin_dir_path = plugin_dir_path(__FILE__);
echo "<br>" . $plugin_dir_path;

$plugin_url = plugins_url('css/styles.css', __FILE__);
echo "</br>" . $plugin_url;

$include_url = includes_url('/css/button-rtl.css');
echo "</br>" . $include_url;

$content_url = content_url('/themes/twentytwentyone/assets/css/ie.css');
echo "</br>" . $content_url;

$admin_url = admin_url();
echo "</br>" . $admin_url;
