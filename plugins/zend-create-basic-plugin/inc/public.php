<?php

class ZendVN
{
    public function __construct()
    {
        echo __CLASS__;
        echo '<br/>' . __METHOD__;
        add_filter('the_title', [$this, 'function_callback_the_title']);
    }

    public function function_callback_the_title() {
        $str = "Thay doi tieu de bai viet";
        
        return $str;
    }
}
