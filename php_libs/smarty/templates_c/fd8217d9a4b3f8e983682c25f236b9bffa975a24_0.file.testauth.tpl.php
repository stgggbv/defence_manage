<?php
/* Smarty version 3.1.30, created on 2021-04-07 14:20:31
  from "C:\Users\yoshida\xampp\htdocs\MemberManage\php_libs\smarty\templates\testauth.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_606d411f3ba4d6_91072734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd8217d9a4b3f8e983682c25f236b9bffa975a24' => 
    array (
      0 => 'C:\\Users\\yoshida\\xampp\\htdocs\\MemberManage\\php_libs\\smarty\\templates\\testauth.tpl',
      1 => 1617772660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606d411f3ba4d6_91072734 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['title']->value;?>


<table border='1'>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
</table>
[<a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=logout">ログアウト</a>]
<?php }
}
