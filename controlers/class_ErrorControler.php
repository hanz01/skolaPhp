<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 4.4.2018
 * Time: 8:30
 */

class ErrorControler extends Controler
{
    public function make($param) {
        $this->wiev = 'error/404';
    }

}