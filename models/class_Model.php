<?php

abstract class Model{
    protected $db;
    protected $cfg;

    public function __construct($db_conf, $config){
        $this->db=$db_conf;
        $this->cfg=$config;
    }

}