<?php
//引入smarty类
include "libs/Smarty.class.php";
//实例化对象
$smarty = new Smarty();
//设置相关属性，需要两个目录，模板目录和编译目录
$smarty->template_dir = "templates"; //模板目录
$smarty->compile_dir = "templates_c"; //编译目录
//调用assign方法分配数据
$smarty->assign('title','smarty模板');
$smarty->assign('content','smarty模板是一个功能非常强大的模板引擎');
//调用display方法载入模板
$smarty->display('index.html');