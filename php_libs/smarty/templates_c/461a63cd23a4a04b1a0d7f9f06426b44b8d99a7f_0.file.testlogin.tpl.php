<?php
/* Smarty version 3.1.30, created on 2021-04-13 11:16:15
  from "C:\Users\yoshida\xampp\htdocs\MemberManage\php_libs\smarty\templates\testlogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6074feef85cc23_58932483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '461a63cd23a4a04b1a0d7f9f06426b44b8d99a7f' => 
    array (
      0 => 'C:\\Users\\yoshida\\xampp\\htdocs\\MemberManage\\php_libs\\smarty\\templates\\testlogin.tpl',
      1 => 1618275269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6074feef85cc23_58932483 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['title']->value;?>

<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['username']['label'];?>
:<br>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['username']['html'];?>
<br>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['password']['label'];?>
:<br>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['password']['html'];?>

    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>

</form>
<?php }
}
