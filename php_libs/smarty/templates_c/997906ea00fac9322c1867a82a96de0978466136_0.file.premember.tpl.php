<?php
/* Smarty version 3.1.30, created on 2021-04-08 13:29:58
  from "C:\Users\yoshida\xampp\htdocs\MemberManage\php_libs\smarty\templates\premember.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_606e86c6ac0ee3_01542483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '997906ea00fac9322c1867a82a96de0978466136' => 
    array (
      0 => 'C:\\Users\\yoshida\\xampp\\htdocs\\MemberManage\\php_libs\\smarty\\templates\\premember.tpl',
      1 => 1617842711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606e86c6ac0ee3_01542483 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<div style="text-align:center;">
<hr>
<strong><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</strong>
<hr>
    <table>
      <tr>
        
      <td> <a href="index.php">トップページへ</a>
      </td>
        
      <td>
  		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>


        </td>
      </tr>
    </table>
</div>
<?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?><pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre><?php }?>
</body>
</html>
<?php }
}
