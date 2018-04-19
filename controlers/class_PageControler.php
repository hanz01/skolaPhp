<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 29.3.2018
 * Time: 11:02
 */

class PageControler extends Controler
{
    public function __construct($db, $config, $messages)
    {
        parent::__construct($db, $config, $messages);
    }

    public function make($param) {

        $pages=new pageModel($this->db,$this->config);
        $userServices = new UserService($this->db, $this->config);
        $w = '';
        if(empty($param[1])) {
           $content = $pages->getAllPage();
           $this->data['stranky'] = $content;
           if($userServices->islogin()) {
               $this->data['edit'] = 'E';
           }
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