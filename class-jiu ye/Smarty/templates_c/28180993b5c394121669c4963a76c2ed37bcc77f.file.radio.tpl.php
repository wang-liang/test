<?php /* Smarty version Smarty-3.1.16, created on 2015-08-29 20:15:49
         compiled from "templates\radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1946655e1a1f27431e3-60526543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28180993b5c394121669c4963a76c2ed37bcc77f' => 
    array (
      0 => 'templates\\radio.tpl',
      1 => 1440850547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1946655e1a1f27431e3-60526543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55e1a1f27893d5_45315832',
  'variables' => 
  array (
    'beauty' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e1a1f27893d5_45315832')) {function content_55e1a1f27893d5_45315832($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\myinfo\\Smarty\\libs\\plugins\\function.html_radios.php';
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	请选择你喜欢的类型
	<?php echo smarty_function_html_radios(array('name'=>'beauty','values'=>$_smarty_tpl->tpl_vars['beauty']->value,'output'=>$_smarty_tpl->tpl_vars['beauty']->value,'selected'=>'貂蝉'),$_smarty_tpl);?>

</body>
</html><?php }} ?>
