<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 29.3.2018
 * Time: 11:02
 */

class PageControler extends Controler
{
    public function __construct($db, $config)
    {
        parent::__construct($db, $config);
    }

    public function make($param) {

        $pages=new pageModel($this->db,$this->config);
        $w = '';
        if(empty($param[1])) {
           $content = $pages->getAllPage();
           $this->data['stranky'] = $content;
           $w = "pages/pages";
        }
        else if(!empty($param[1] && $param[1] > 0)) {
            $content=$pages->getConcretePage($param[1]);

            $this->data['nazev']=$content[0]['nazev'];
            $this->data['titulek']=$content[0]['titulek'];
            $this->data['anotace']=$content[0]['anotace'];
            $this->data['obsah']=$content[0]['obsah'];
            $w = "pages/page";

        }
        $this->wiev = $w;

    }

}