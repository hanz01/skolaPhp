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
        if(!$userService->islogin()) {
            $this->redirect("?page=intro");
        }
        $this->data['userName'] =  $_SESSION['userName'];
        if($param[1] == "logout") {
            session_destroy();
            $this->redirect("?page=intro");
        }
        $this->wiev = "administrace/administrace";
    }
}