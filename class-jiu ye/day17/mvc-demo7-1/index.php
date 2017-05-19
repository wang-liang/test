<?php

$c = !empty($_GET['c']) ? $_GET['c'] : "User";

require "./" . $c . "Model.class.php";
require './ModelFactory.class.php';
require './BaseController.class.php';

//这里才是要载入的“当前控制器类”
require "./" . $c . "Controller.class.php";

$controller_name = $c . "Controller"; //构建控制器的类名
$ctrl = new $controller_name(); //可变类

$act = !empty($_GET['a']) ? $_GET['a'] : "Index";
$action = $act . "Action";
$ctrl->$action();  //这里调用控制器中的方法