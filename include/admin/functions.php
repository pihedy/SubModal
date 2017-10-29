<?php

// no direct access
defined( 'ABSPATH' ) or die;

class gSubModalAdmin
{
    public function __construct()
    {
        $this->setHooks();
    }

    public function setHooks()
    {
        add_action('admin_menu', array($this, 'subModalAdminMenu'));
    }

    public function subModalAdminMenu()
    {
        $pageTitle = 'SubModal';
        $menuTitle = 'SubModal';
        $capability = 'manage_options';
        $menuSlug  = 'submodal';
        $function   = array(
            $this,
            'subModalAdmin',
        );
      
        add_options_page (
            $pageTitle,
            $menuTitle, 
            $capability, 
            $menuSlug, 
            $function
        );

        add_action('admin_init', array($this, 'subModalRegisterOptions'));
    }

    public function subModalRegisterOptions()
    {
        register_setting('subModalSettingsGroup', 'showText' );
    }

    public function subModalAdmin()
    {
        $pluginData = get_plugin_data(G_SUB_MODAL_ROOT);
        require G_SUB_MODAL_INC_ADMIN . '/menu.php';
    }
}
