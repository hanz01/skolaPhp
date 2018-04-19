<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 29.3.2018
 * Time: 10:27
 */
include "class_Controler.php";
class RouterControler extends Controler
{
    protected $controler;

    public function __construct($db, $config, $messages)
    {
        parent::__construct($db, $config, $messages);
    }

    public function doParseUrl($url) {
        $parseUrl=parse_url($url);
        $parseUrl['path']=ltrim($parseUrl['path'],"/"); // odstrani lomitko z leve strany
        $parseUrl['path']=trim($parseUrl['path']);
        $parseUrl=explode("/",$parseUrl['path']);
        return $parseUrl;
    }

    public function make($param) {
        $parsedUrl = $this->doParseUrl($param);
        if(empty($parsedUrl[0])) {
            $this->redirect("?page=intro");
        }
        $classControler = ucfirst($parsedUrl[0]) . "Controler";
        if(!file_exists("controlers/class_" . $classControler . ".php")) {
            $this->redirect("?page=error");

        }
        $this->controler = new $classControler($this->db, $this->config, $this->messages);
        $this->controler->make($parsedUrl);
        if($this->messages != "")
            $this->controler->listMessage();
        $this->controler->listWiew();

    }
}