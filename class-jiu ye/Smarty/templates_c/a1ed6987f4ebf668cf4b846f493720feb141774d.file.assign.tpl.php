<?php /* Smarty version Smarty-3.1.16, created on 2015-08-29 19:48:52
         compiled from "templates\assign.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2270655e192cc979d56-66694505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1ed6987f4ebf668cf4b846f493720feb141774d' => 
    array (
      0 => 'templates\\assign.tpl',
      1 => 1440848853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2270655e192cc979d56-66694505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e192cc9c3f56_03950305',
  'variables' => 
  array (
    'star' => 0,
    'k' => 0,
    'v' => 0,
    'level' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e192cc9c3f56_03950305')) {function content_55e192cc9c3f56_03950305($_smarty_tpl) {?><?php echo time();?>

<?php echo 'Smarty-3.1.16';?>

<?php echo $_SERVER['SERVER_NAME'];?>

<?php echo @constant('ROOT');?>


<?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<br />
<?php echo $_smarty_tpl->getConfigVariable('copyright');?>

<?php echo $_smarty_tpl->getConfigVariable('police');?>


<ul>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['star']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
---<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
	<?php } ?>
</ul>

<p><?php echo str_repeat('hello',$_smarty_tpl->tpl_vars['level']->value);?>
</p><?php }} ?>
