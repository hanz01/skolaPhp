<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 8.3.2018
 * Time: 10:22
 */
require "inc/config.inc.php";
require "inc/class.db.php";
require "inc/class.userService.php";
print_r($_SESSION);
$db=new Db($cfg['DBServer'],$cfg['DBUser'],$cfg['DBPasswd'],$cfg['DBName']);
$userservice = new userService($db, $cfg);
$s = false;
if($_POST) {

  if($_POST['jmeno'] != "" && $_POST['prijmeni'] != "" && $_POST['login'] != "" && $_POST['heslo'] != "" && $_POST['hesloZ'] != "") {
        if($_POST['heslo'] == $_POST['hesloZ']) {
            $login = $_POST['login'];
            $jmeno = $_POST['jmeno'];
            $prijmeni = $_POST['prijmeni'];
            $heslo = $_POST['heslo'];
            $add = $userservice->addUser($jmeno, $prijmeni, $login, $heslo);
            if($add == 1) {
                $zprava = "Uživatel byl zaregistrován";
            }
        }
        else {
            $zprava = "Hesla se neschodují";
        }
      //$s = $userservice->login($_POST['login'], $_POST['heslo']);
  }
  else
      $zprava = "Vyplňte všechna pole";
}
?>
<!DOCTYPE html>
<html lang="cs">
   <head>
     <meta charset="utf-8" />
     <meta name="description" content="Stručný popis stránky (SEO)" />
     <meta name="keywords" content="Klíčová slova stránky (SEO)" />
     <meta name="author" content="all: jméno; e-mail" />
     <meta name="robots" content="index, follow" />
     <meta name="googlebot" content="index, follow, snippet, archive" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />

     <title>Stránka</title>



   </head>

   <body>
   <?php if(isset($zprava)) : ?>
      <p><?= $zprava; ?></p>
   <?php endif; ?>
      <h1>Registrace</h1>
      <form method="post" action="#">
        <label for="login">Jméno:</label><input id="login" type="text" name="jmeno" /><br />
        <label for="heslo">Příjmení:</label><input type="text" id="heslo" name="prijmeni" /><br />
        <label for="login">Login:</label><input id="login" type="text" name="login" /><br />
        <label for="heslo">Heslo:</label><input type="password" id="heslo" name="heslo" /><br />
          <label for="heslo">Heslo znovu:</label><input type="password" id="heslo" name="hesloZ" /><br />

        <input type="submit" />
      </form>
     </body>

</html>