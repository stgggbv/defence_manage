<?php
/* Smarty version 3.1.30, created on 2021-04-12 11:03:59
  from "C:\Users\yoshida\xampp\htdocs\MemberManage\php_libs\smarty\templates\system_top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6073aa8f3f8060_12312034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ecc638e1fc2acf2362f8b0bb396b4a61f8a78db' => 
    array (
      0 => 'C:\\Users\\yoshida\\xampp\\htdocs\\MemberManage\\php_libs\\smarty\\templates\\system_top.tpl',
      1 => 1618193034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6073aa8f3f8060_12312034 (Smarty_Internal_Template $_smarty_tpl) {
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
?type=logout">ログアウト</a> ]
	<br>
	<br>
	<?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

      </td>
      
      <td>
[ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=list&action=form">会員一覧</a> ]   会員の検索・更新・削除を行います。<br><br>
      </td>
      </tr>
      <tr>
      <td>
[ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=notice&action=form">お知らせ</a> ]   会員の検索・更新・削除を行います。<br><br>
        <br>
        <br>

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
