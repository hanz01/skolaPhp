<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 12.4.2018
 * Time: 10:14
 */

class LoginControler extends Controler
{

        public function make($param) {
            $userSerice = new UserService($this->db, $this->config);
            if($userSerice->islogin()) {
                $this->redirect("?page=administrace");
            }
            if($_POST) {
                if($_POST['login'] != "" && $_POST['heslo'] != "") {
                    if($userSerice->login($_POST['login'], $_POST['heslo'])) {
                        $this->redirect("?page=administrace");
                    }
                    else {
                        //echo($lang['cs']['login_ok']);
                    }

                } else {
                    echo("Vyplňte obě pole.");
                }
            }
            $this->wiev = "login/login";
        }
}