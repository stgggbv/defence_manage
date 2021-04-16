<?php
/* Smarty version 3.1.30, created on 2021-04-12 11:01:46
  from "C:\Users\yoshida\xampp\htdocs\MemberManage\php_libs\smarty\templates\notice_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6073aa0a9ba207_85553975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2931d4a69d2e4085627b18f7dba312f76e51e54a' => 
    array (
      0 => 'C:\\Users\\yoshida\\xampp\\htdocs\\MemberManage\\php_libs\\smarty\\templates\\notice_form.tpl',
      1 => 1618188333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6073aa0a9ba207_85553975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo '<script'; ?>
 type="text/javascript" src="js/quickform.js" async><?php echo '</script'; ?>
>
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

	<br><br>
	<?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

      </td>
      <td>
	<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
          <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

          <table>
            <tr>
              <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['subject']['label'];?>
：</td>
              <td style="text-align:left;">
                <?php if (isset($_smarty_tpl->tpl_vars['form']->value['subject']['error'])) {?>
                  <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['subject']['error'];?>
</div>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['subject']['html'];?>
</td>
            </tr>
            <tr>
              <td style="vertical-align:top; text-align:right;"><?php echo $_smarty_tpl->tpl_vars['form']->value['body']['label'];?>
：</td>
              <td style="text-align:left;">
                <?php if (isset($_smarty_tpl->tpl_vars['form']->value['body']['error'])) {?>
                  <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['body']['error'];?>
</div>
                <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value['body']['html'];?>
</td>
            </tr>
            <tr>
            <td>&nbsp; </td>
            <td>
            <?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>

            <input type="hidden" name="type"   value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
            <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
            </td>
            </tr>
          </table>
          <br>
        </form>
        </td>
      </tr>
    </table>
</div>
<?php if ($_smarty_tpl->tpl_vars['form']->value['javascript']) {?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['javascript'];?>

<?php }
if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?><pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre><?php }?>
</body>
</html><?php }
}
