<?php
/* Smarty version 3.1.32-dev-42, created on 2018-03-29 09:44:35
  from 'G:\xampp\htdocs\skola\templates\tplMainPage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-42',
  'unifunc' => 'content_5abc9963981575_78138998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bafc54fd81c9b139fe96c7ec739bc533520604a0' => 
    array (
      0 => 'G:\\xampp\\htdocs\\skola\\templates\\tplMainPage.html',
      1 => 1522309472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abc9963981575_78138998 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        
        ul{list-style: none;}
        li{float: left; padding-right: 6px;}
        hr{display: block; clear: both; width: 100%; border: none; background: #fff;}
        
    </style>

</head>
<body>
    <header>
        <h1>Nadpis</h1>
    </header>
    <nav>
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    </nav>
    <hr />
    <main>
    <?php echo $_smarty_tpl->tpl_vars['maincontent']->value;?>

    </main>
</body>
</html><?php }
}
