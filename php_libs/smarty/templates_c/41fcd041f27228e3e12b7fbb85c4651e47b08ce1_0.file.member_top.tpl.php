<?php
/* Smarty version 3.1.30, created on 2021-04-12 11:31:36
  from "C:\Users\yoshida\xampp\htdocs\MemberManage\php_libs\smarty\templates\member_top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6073b10811c4d0_80386627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41fcd041f27228e3e12b7fbb85c4651e47b08ce1' => 
    array (
      0 => 'C:\\Users\\yoshida\\xampp\\htdocs\\MemberManage\\php_libs\\smarty\\templates\\member_top.tpl',
      1 => 1618194692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6073b10811c4d0_80386627 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\Users\\yoshida\\xampp\\htdocs\\MemberManage\\php_libs\\smarty\\libs\\plugins\\modifier.date_format.php';
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
      <td style="vertical-align:top;">
            [ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=logout">ログアウト</a> ]
	<br>
	<br>
	<?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>


      </td>
        <td style="vertical-align:top;">
        <div style="text-align: left; margin-left:15px;">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['last_name']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_name']->value, ENT_QUOTES, 'UTF-8', true);?>
 さん、こんにちは！
          <br>
          <br>
          <?php if (($_smarty_tpl->tpl_vars['body']->value)) {?>
	        <div style="font-size: small; font-weight: bold;">お知らせ</div>
                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reg_date']->value,"%Y%m%d");
echo htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value, ENT_QUOTES, 'UTF-8', true);?>

                <div style="font-size: small;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['body']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
          <?php }?>
          <br>
          <br>
	        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=modify&action=form">会員登録情報の修正</a>
          <br>
          <br>
	        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=modify&action=form">お小遣い帳表示</a>
          <br>
          <br>
	        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=delete&action=confirm">退会する</a>
          <br>
	  
        </div>
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
