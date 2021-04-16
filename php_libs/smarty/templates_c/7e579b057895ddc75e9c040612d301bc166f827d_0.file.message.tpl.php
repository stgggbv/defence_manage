<?php
/* Smarty version 3.1.30, created on 2021-04-12 11:17:25
  from "C:\Users\yoshida\xampp\htdocs\MemberManage\php_libs\smarty\templates\message.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6073adb58fa099_17188982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e579b057895ddc75e9c040612d301bc166f827d' => 
    array (
      0 => 'C:\\Users\\yoshida\\xampp\\htdocs\\MemberManage\\php_libs\\smarty\\templates\\message.tpl',
      1 => 1618188333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6073adb58fa099_17188982 (Smarty_Internal_Template $_smarty_tpl) {
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
        
      <td style="vertical-align: top;">
	[ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
">トップページへ</a> ]
<?php if (($_smarty_tpl->tpl_vars['is_system']->value)) {?>
	<br>
	<br>
      	[ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=list&action=form<?php echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">会員一覧</a> ]
<?php }?>
	<br>
	<br>
	<?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

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
