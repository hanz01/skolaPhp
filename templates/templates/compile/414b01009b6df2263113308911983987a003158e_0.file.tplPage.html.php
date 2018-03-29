<?php
/* Smarty version 3.1.32-dev-42, created on 2018-03-29 09:44:35
  from 'G:\xampp\htdocs\skola\templates\tplPage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-42',
  'unifunc' => 'content_5abc9963889936_58477971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '414b01009b6df2263113308911983987a003158e' => 
    array (
      0 => 'G:\\xampp\\htdocs\\skola\\templates\\tplPage.html',
      1 => 1521713857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abc9963889936_58477971 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h2>Záznamy</h2>
    <table>
        <?php
$__section_items_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['jmeno']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_items_0_total = $__section_items_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_items'] = new Smarty_Variable(array());
if ($__section_items_0_total !== 0) {
for ($__section_items_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_items']->value['index'] = 0; $__section_items_0_iteration <= $__section_items_0_total; $__section_items_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_items']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_items']->value['rownum'] = $__section_items_0_iteration;
?>
        <tr>
            <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_items']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_items']->value['rownum'] : null);?>
</td>
            <td><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_items']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_items']->value['rownum'] : null) > 2) {?>*<?php }
echo $_smarty_tpl->tpl_vars['jmeno']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_items']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_items']->value['index'] : null)];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['prijmeni']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_items']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_items']->value['index'] : null)];?>
</td>
        </tr>
        <?php
}
}
?>
    </table
</body>
</html><?php }
}
