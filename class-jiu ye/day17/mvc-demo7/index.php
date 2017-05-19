<?php

$c = !empty($_GET['c']) ? $_GET['c'] : "User";//它也可能是"User","Product",或其它
	//这里把“User”当作默认要使用的控制器

require "./" . $c . "Model.class.php";  //加载模型类文件
require './ModelFactory.class.php';
require './BaseController.class.php';

//这里才是要载入的“当前控制器类”
require "./" . $c . "Controller.class.php";  //加载控制器类文件

$controller_name = $c . "Controller";  //构建控制器的类名
$ctrl = new $controller_name(); //可变类

$act = !empty($_GET['a']) ? $_GET['a'] : "Index";
$action = $act . "Action";
$ctrl->$action();  //这里调用控制器中方法