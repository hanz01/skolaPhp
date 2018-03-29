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
        $this->setTemplateDir(__DIR__."/templates/");
        $this->setCompileDir(__DIR__."/compile");
        $this->setConfigDir(__DIR__."/templates/");
        $this->setCacheDir(__DIR__."/cache");
    }
}