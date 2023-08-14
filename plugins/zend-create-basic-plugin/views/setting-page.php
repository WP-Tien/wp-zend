<div class="wrap">
    <h2>My Settings</h2>
    <p>This is config page of Zend</p>

    <form method="post" action="options.php" id="zendvn-mp-form-setting" enctype="multipart/form-data">
        <?php echo settings_fields('zendvn_mp_options'); ?>
        <?php echo do_settings_sections($this->_menuSlug); ?>

        <?php // echo do_settings_fields($this->_menuSlug, 'abc'); 
        ?>
        <p class="submit">
            <input type="submit" name="submit" class="button button-primary" value="Submit" />
        </p>
    </form>

</div>