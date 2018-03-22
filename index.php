<?php
error_reporting(E_ERROR);
require "inc/config.inc.php";
require "inc/class.db.php";
require("templates/templateConfig.php");

$db=new Db($cfg['DBServer'],$cfg['DBUSer'],$cfg['DBPasswd'],$cfg['DBName']);

$users = $db->select("SELECT * FROM " . $cfg['tbl_user']);

 for($i=0; $i<count($users); $i++) {
     $jmeno[] = $users[$i]['jmeno'];
     $prijmeni[] = $users[$i]['prijmeni'];
 }
 $myTpl = new MyTemplate();

 $myTpl->caching = false;

 $myTpl->force_compile = true;

$myTpl->assign("jmeno", $jmeno);
$myTpl->assign("prijmeni", $prijmeni);

$menu="<ul><li><a href=\"\">Prvni</a></li><li><a href=\"\">Druha</a></li><li><a href=\"\">Treti</a></li></ul>";
$myTpl->assign("menu", $menu);

$whole_page=$myTpl->fetch("templates/tplPage.html");
$myTpl->assign("maincontent",$whole_page);
$myTpl->display("templates/tplMainPage.html");

?>
