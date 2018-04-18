<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 11.4.2018
 * Time: 15:13
 */

class IntroModel extends Model
{
    public function __construct($db_conf, $config)
    {
        parent::__construct($db_conf, $config);
    }

    public function getHomePage($url) {
        $result=$this->db->select("SELECT * FROM ".$this->cfg['tbl_pages']." WHERE titulek='{$url}'");
        return $result[0];
    }
}