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
                        $this->setMessage($this->messages['login_ok']);
                        $this->redirect("?page=administrace");
                    }
                    else {
                        $this->setMessage($this->messages['login_fail']);
                    }

                } else {
                    $this->setMessage($this->messages['form_fail']);
                }
            }
            $this->wiev = "login/login";
        }
}