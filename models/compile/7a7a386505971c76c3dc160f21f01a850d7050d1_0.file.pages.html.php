<?php
/* Smarty version 3.1.32-dev-42, created on 2018-04-11 14:28:05
  from 'G:\skola_mvc\templates\pages\pages.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-42',
  'unifunc' => 'content_5acdff55dbbe26_11614413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a7a386505971c76c3dc160f21f01a850d7050d1' => 
    array (
      0 => 'G:\\skola_mvc\\templates\\pages\\pages.html',
      1 => 1523449603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acdff55dbbe26_11614413 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stranky']->value, 'stranka', false, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value => $_smarty_tpl->tpl_vars['stranka']->value) {
?>
    <h2><?php echo $_smarty_tpl->tpl_vars['p']->value['nazev'];?>
</h2>
    <em><?php echo $_smarty_tpl->tpl_vars['stranka']->value['anotace'];?>
</em>
    <a href="?page=/pages/<?php echo $_smarty_tpl->tpl_vars['stranka']->value['id'];?>
">vice info</a>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo $_smarty_tpl->tpl_vars['test']->value;?>

<?php }
}
