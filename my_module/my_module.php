<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class My_module extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'my_module';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'ircykk';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('my_module');
        $this->description = $this->l('my_module description');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
}
