<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 22.3.2018
 * Time: 10:30
 */
include("apps/smarty/Smarty.class.php");

class MyTemplate extends Smarty
{
    public function __construct()
    {
        parent::__construct();

        $this->setTemplateDir("../templates/");
        $this->setCompileDir("../compile");
        $this->setConfigDir("../templates/");
        $this->setCacheDir(__DIR__ . "/cache");
    }
}