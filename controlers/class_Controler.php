<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 29.3.2018
 * Time: 10:28
 */

abstract class Controler
{

    public $data = array();
    protected  $wiev="";
    protected $db;
    protected $config;
    protected $lang;

    public function __construct($db, $config)
    {
        $this->db = $db;
        $this->config = $config;
    }

    abstract function make($par);

    public function listWiew() {
        if($this->wiev != "") {
            $myTpl = new MyTemplate();
            $myTpl->caching = false;
            $myTpl->force_compile = true;
            foreach($this->data as $key => $value) {
                $myTpl->assign($key, $value);
            }
            $whole_page=$myTpl->fetch("templates/".$this->wiev.".html");
            $myTpl->assign("maincontent",$whole_page);
            $myTpl->display("templates/tplMainPage.html");
        }
    }

    public function redirect($url){
        header("Location: {$url}");
        header("Connection: close");
        exit;
    }



}