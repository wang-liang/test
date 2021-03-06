<?php
//前端控制器

header('Content-Type:text/html;charset=utf-8');

//载入数据库操作类
require('MySQLPDO.calss.php');

//载入模型文件
require 'model.class.php';
require 'studentModel.class.php';

//得到控制器名
$c = !empty($_GET['c']) ? $_GET['c'] : 'student';

//载入控制器文件
require './' . $c . 'Controller.class.php';

//实例化控制器类
$controller_name = $c.'Controller';
$controller = new $controller_name;

//得到方法名
$action = !empty($_GET['a']) ? $_GET['a'] : 'list';

//调用方法（可变方法）
$action_name = $action.'Action';
$controller->$action_name();
