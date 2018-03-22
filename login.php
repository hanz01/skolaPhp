<?php
require "inc/config.inc.php";
require "inc/class.db.php";
require "inc/class.userService.php";
$db=new Db($cfg['DBServer'],$cfg['DBUser'],$cfg['DBPasswd'],$cfg['DBName']);
$userservice = new userService($db, $cfg);
$s = false;
if($userservice->islogin()) {
    $s = true;
}
if($_POST) {
  if(isset($_POST['login']) && isset($_POST['heslo'])) {
    $s = $userservice->login($_POST['login'], $_POST['heslo']);
  }
}
if(isset($_GET['logout'])) {
    session_destroy();
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>     
<p lang="cs">
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


   <?php if($s) : ?>
   <h3>Uživatelé</h3>
   <?php
   $users = $db->select("SELECT * FROM " . $cfg['tbl_user']);
   ?>
       <?php for($i=0; $i<count($users); $i++) : ?>

            <p><?= $users[$i]['jmeno'] ?> <?= $users[$i]['prijmeni'] ?> <?= $users[$i]['un'] ?>
   <?= $users[$i]['pw'] ?></p>


        <?php endfor; ?>
    <a href="?logout">Odhlásit se!</a>

       <?php else : ?>
      <h1>Login</h1>
      <form method="post">
        <label for="login">Jméno:</label><input id="login" type="text" name="login" /><br />
        <label for="heslo">Heslo:</label><input type="password" id="heslo" name="heslo" /><br />
        <input type="submit" />
      </form>
       <a href="register.php">Registrace</a>
  <?php endif; ?>     
   </body>

</html> 