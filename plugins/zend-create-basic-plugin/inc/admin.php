<?php

class ZendVNMyAdmin
{
    private $_menuSlug = 'zendvn-my-settings';

    private $_setting_options;

    public function __construct()
    {
        $this->_setting_options = get_option('zendvn_mp_name', []);

        add_action('admin_menu', [$this, 'settingMenu']);
        add_action('admin_init', [$this, 'register_settings_and_field']);
    }

    public function register_settings_and_field()
    {
        // option value is zendvn_mp_name
        register_setting('zendvn_mp_options', 'zendvn_mp_name', [$this, 'validate_setting']);
        // settings fields

        add_settings_section('zendvn_mp_main_section', 'Main setting', [$this, 'main_section_view'], $this->_menuSlug);
        // Do settings sections
        add_settings_field('zendvn_mp_new_title', 'Site title', [$this, 'new_title_input'], $this->_menuSlug, 'zendvn_mp_main_section');


        add_settings_section('zendvn_mp_slogan_section', 'Slogan', [$this, 'main_section_view'], $this->_menuSlug);
        add_settings_field('zendvn_mp_logo', 'Logo', [$this, 'logo_input'], $this->_menuSlug, 'zendvn_mp_slogan_section');
        // add_settings_field('zendvn_mp_security_code', '', [$this, 'security_code_input'], $this->_menuSlug, 'abc');
    }

    public function new_title_input()
    {
        echo '<input type="text" name="zendvn_mp_name[zendvn_mp_new_title]" value="' . $this->_setting_options['zendvn_mp_new_title'] . '" />';
    }

    public function logo_input()
    {
        echo '<input type="file" name="zendvn_mp_logo" />';

        if (!empty($this->_setting_options['zendvn_mp_logo'])) {
            echo "<img src='" . $this->_setting_options['zendvn_mp_logo']['url'] . "' width='200'>";
        }
    }

    // public function security_code_input()
    // {
    //     echo "Security code: <br/>";
    //     echo '<input type="text" name="zendvn_mp_name[zendvn_mp_security_code]" value="" />';
    // }

    public function validate_setting($data_input)
    {
        // echo "<pre>";
        // print_r($data_input);
        // echo "</pre>";

        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";

        // echo '<pre>';
        // print_r($this->_setting_options['zendvn_mp_logo']);
        // echo '</pre>';

        // die();

        if (!empty($_FILES['zendvn_mp_logo']['name'])) {
            if (!empty($this->_setting_options['zendvn_mp_logo']['file'])) {
                // an^~ loi^~ ne^'u ta^p tin ko to^`n ta.i
                @unlink($this->_setting_options['zendvn_mp_logo']['file']);
            }
            // echo 'Upload tap tin';
            $override = ['test_form' => false];
            // $override = false;
            // $override = true;
            $time = null;
            // $time = '2001/12'; // yyyy/mm
            $fileInfo = wp_handle_upload($_FILES['zendvn_mp_logo'], $override, $time);
            $data_input['zendvn_mp_logo'] = $fileInfo;
        }

        // die();

        return $data_input;
    }

    public function main_section_view()
    {
    }

    public function settingMenu()
    {
        // add_menu_page(
        //     'My Setting title',
        //     'My Settings',
        //     'manage_options',
        //     $this->_menuSlug,
        //     [$this, 'callback_func_my_settings']
        // );

        add_options_page(
            'My Setting title',
            'My Settings',
            'manage_options',
            $this->_menuSlug,
            [$this, 'callback_func_my_settings']
        );
    }

    public function callback_func_my_settings()
    {
        require_once ZENDVN_MP_PLUGIN_DIR . 'views/setting-page.php';
    }
}
