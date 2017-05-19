<?php
$p = !empty($_GET['p']) ? $_GET['p'] : "front";  //确定当前使用的平台

define("PLAT",$p);

define("DS",DIRECTORY_SEPARATOR); //DIRECTORY_SEPARATOR表示目录分割符"/"或"\"
define("ROOT",__DIR__ . DS); //当前MVC框架的根目录
define("APP",ROOT . 'Application' . DS); //application的完整路径
define("FRAMEWORK",ROOT . 'Framework' . DS); //框架基础类所在路径
define("PLAT_PATH",APP.PLAT.DS); //当前平台所在目录
define("CTRL_PATH",PLAT_PATH . "Controllers" . DS);//当前控制器所在目录
define("MODEL_PATH",PLAT_PATH . "Models" . DS); //当前模型所在目录
define("VIEW_PATH",PLAT_PATH . "Views" . DS); //当前视图所在目录

$c = !empty($_GET['c']) ? $_GET['c'] : "User";
//这里User为默认控制器
function __autoload($class){
	$base_class = array('MySQLDB','BaseModel','ModelFactory','BaseController');
	if(in_array($class,$base_class))
	{
		require FRAMEWORK . $class . '.class.php'; //加载框架基础类(共4个)
	}
	else if(substr($class,-5) == "Model")
	{
		require MODEL_PATH . $class . ".class.php"; //加载模型类文件
	}
	else if(substr($class,-10) == "Controller")
	{
		require CTRL_PATH . $class . '.class.php'; //加载控制器类文件
	
	}
}

$controller_name = $c . "Controller";

$ctrl = new $controller_name(); //实例化控制器类

//Index 为当前所确定的控制器中默认的动作
$act = !empty($_GET['a']) ? $_GET['a'] : "Index";
$action = $act . "Action";
$ctrl->$action();  //这里调用控制器中的动作