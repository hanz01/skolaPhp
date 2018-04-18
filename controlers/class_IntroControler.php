<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 11.4.2018
 * Time: 15:05
 */

class IntroControler extends Controler
{
    public function __construct($db, $config)
    {
        parent::__construct($db, $config);
    }

    public function make($param) {
        $introModel = new IntroModel($this->db, $this->config);
        $article = $introModel->getHomePage('home');
        $this->data['nadpis'] = $article['nazev'];
        $this->data['obsah'] = $article['obsah'];
        $this->wiev = "intro/intro";

    }
}