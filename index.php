<?php
error_reporting(E_ERROR);
session_start();
require "langInc.php";
require "models/config.inc.php";

function autoload($class) {
    if(preg_match('/Controler/', $class)) {
        if(file_exists("controlers/class_" . $class . ".php")) {
            require "controlers/class_" . $class . ".php";
        }
    }
    else {
        if (file_exists("models/class_" . $class . ".php")) {
            require "models/class_" . $class . ".php";
        }
    }
}

spl_autoload_register ("autoload");

$db=new Db($cfg['DBServer'],$cfg['DBUSer'],$cfg['DBPasswd'],$cfg['DBName']);
$routerControler = new RouterControler($db, $cfg);
//$routerControler->make($_SERVER['REQUEST_URI']);
$routerControler->make($_GET['page']);
$routerControler->listWiew();



?>
