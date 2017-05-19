<?php
//引入smarty类
include "libs/Smarty.class.php";
//实例化对象
$smarty = new Smarty();
//设置相关属性，需要两个目录，模板目录和编译目录
$smarty->template_dir = "templates"; //模板目录
$smarty->compile_dir = "templates_c"; //编译目录
//调用assign方法分配数据
$smarty->assign('star',array('汪峰','那英','周杰伦','哈林'));
$smarty->assign('level',10);
//定义常量，常量需要定义，但无需分配
define('ROOT',getcwd());
$smarty->display('assign.tpl');