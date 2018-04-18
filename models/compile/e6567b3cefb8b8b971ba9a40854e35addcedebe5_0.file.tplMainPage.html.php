<?php
/* Smarty version 3.1.32-dev-42, created on 2018-04-11 14:28:06
  from 'G:\skola_mvc\templates\tplMainPage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-42',
  'unifunc' => 'content_5acdff5610a0c3_39869668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6567b3cefb8b8b971ba9a40854e35addcedebe5' => 
    array (
      0 => 'G:\\skola_mvc\\templates\\tplMainPage.html',
      1 => 1523449305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acdff5610a0c3_39869668 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

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
