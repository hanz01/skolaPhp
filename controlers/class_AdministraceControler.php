<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 12.4.2018
 * Time: 10:27
 */

class AdministraceControler extends Controler
{

    public function make($param) {
        $userService = new UserService($this->db, $this->config);
        $pageMode = new PageModel($this->db, $this->config);
        $w = '';
        if($param[1] == "") {
            $w = "administrace/administrace";
        }
        if($param[1] == 'edit' && $param[2] > 0) {
            $content=$pageMode->getConcretePage($param[2]);

            $this->data['nazev']=$content[0]['nazev'];
            $this->data['titulek']=$content[0]['titulek'];
            $this->data['anotace']=$content[0]['anotace'];
            $this->data['obsah']=$content[0]['obsah'];
            if($_POST) {
                $page = $_POST;
                $page['id'] = $param[2];
                $pageMode->editPage($page);
                $this->redirect("?page=page");

                print_r($_POST);
            }

            $w = "administrace/edit";
        }
        if(!$userService->islogin()) {
            $this->redirect("?page=intro");
        }
        $this->data['userName'] =  $_SESSION['userName'];
        if($param[1] == "logout") {
            session_destroy();
            $this->setMessage($this->messages['loguot_ok']);
            $this->redirect("?page=intro");
        }
        $this->wiev = $w;
    }
}