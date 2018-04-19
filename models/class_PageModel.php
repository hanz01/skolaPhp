<?php

class PageModel extends Model{

    public function __construct($db_conf, $config)
    {
        parent::__construct($db_conf, $config);
    }

    public function getAllPage(){

        $result=$this->db->select("SELECT * FROM ".$this->cfg['tbl_pages']);
        return $result;
    }

    public function getConcretePage($id){
        $result=$this->db->select("SELECT * FROM ".$this->cfg['tbl_pages']." WHERE id='{$id}'");
        return $result;
    }

    public function editPage($page) {
        $sql = 'UPDATE `pages` SET `nazev`="'.$page['nazev'].'",`anotace`="'.$page['anotace'].'",`obsah`="'.$page['obsah'].'" WHERE `id` ='. $page['id'];
        $r = $this->db->query($sql);
        return $r;
    }
}