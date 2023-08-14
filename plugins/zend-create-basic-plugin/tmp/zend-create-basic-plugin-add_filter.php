<?php
/*
 Plugin Name: ZendVN MyPlugin
Plugin URI: http://www.zend.vn
Description: Tim hieu ve qua trinh chuan xay dung Plugin.
Author: ZendVN group
Version: 1.0
Author URI: http://www.zend.vn
*/

define('ZENDVN_MP_PLUGIN_URL', plugin_dir_url(__FILE__));
define('ZENDVN_MP_PLUGIN_DIR', plugin_dir_path(__FILE__));

if (!is_admin()) {
    require_once ZENDVN_MP_PLUGIN_DIR . '/inc/public.php';
    new ZendVN();
} else {
    // Basic add filter
    add_filter('something_cool_here', 'func_callback_filter', 10, 1);
    function func_callback_filter($args) {
        $args .= ' 2 ';
        return $args;
    }

    echo '<h2>' . apply_filters('something_cool_here', 'Vincent Nguyen') . 'writes something </h2>';
    // and basic add filter
}