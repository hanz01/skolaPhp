<?php
error_reporting(E_ERROR);
require "inc/config.inc.php";
require "inc/class.db.php";

$db=new Db($cfg['DBServer'],$cfg['DBUSer'],$cfg['DBPasswd'],$cfg['DBName']);

$_POST['jmeno']="Petr";
$_POST['prijmeni']="Hanzal";
$_POST['un']="aa@pf.jcu.cz";
$_POST['pw']="1234";

/*
$dot="INSERT INTO {$cfg['tbl_user']} 
        (jmeno, prijmeni, un, pw, datum) 
     VALUES 
        ('{$_POST['jmeno']}', '{$_POST['prijmeni']}', '{$_POST['un']}', '{$_POST['pw']}', NOW())";
 */
 $select = "SELECT * FROM " . $cfg['tbl_user'];
 $d = $db->select($select);

/*
$dot="
        DELETE FROM {$cfg['tbl_user']} WHERE id=3;
";
*/

//$result=$db->query($dot);
for($i=0; $i<count($d); $i++) {
  echo $d[$i]['jmeno'];
}
?>
