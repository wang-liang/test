  
<?php
$p = !empty($_GET['p']) ? $_GET['p'] : "front"; //确定使用哪个平台
define("PLAT",$p);

$c = !empty($_GET['c']) ? $_GET['c'] : "User";//它也可能是"User","Product",或其它
	//这里把“User”当作默认要使用的控制器
define('CONTROLLER',$c);

$a = !empty($_GET['a']) ? $_GET['a'] : "Index";
define('ACTION',$a);

//这里定义了一堆常量，以供后续使用
define("DS",DIRECTORY_SEPARATOR); //DIRECTORY_SEPARATOR表示“目录分隔符”
							//只有2个：'/'(unix系统)，'\'(window系统)
define("ROOT",__DIR__ . DS); //当前mvc框架的根目录：
//echo ROOT;
define("APP",ROOT . 'Application' . DS); //application的完整路径
define("FRAMEWORK",ROOT . 'Framework' . DS);//框架基础类所在路径
define("PLAT_PATH",APP . PLAT.DS);//当前平台所在目录
define("CTRL_PATH",PLAT_PATH . "Controllers" . DS);//当前控制器所在目录
define("MODEL_PATH",PLAT_PATH . "Models" . DS);//当前模型所在目录
define("VIEW_PATH",PLAT_PATH . "Views" . DS);//当前视图所在目录


function __autoload($class){
	$base_class = array('MySQLDB','BaseModel','ModelFactory','BaseController');
	if( in_array($class,$base_class))
	{
		require FRAMEWORK . $class . '.class.php'; //加载基础模型类
	}
	else if( substr($class,-5) == "Model") //所需要的类名最后5个字符是“Model”时
	{
		require MODEL_PATH .$class . ".class.php"; 
	}
	else if( substr($class,-10) == "Controller") //所需要的类名最后10个字符是“Controller”时
	{
		require CTRL_PATH . $class . ".class.php";
	}
}
//以下6行被上面自动加载函数所代替
/*
require FRAMEWORK . 'MySQLDB.class.php';
require FRAMEWORK . 'BaseModel.class.php';
require FRAMEWORK . './ModelFactory.class.php';
require FRAMEWORK . './BaseController.class.php';

//require "./" . $c . "Model.class.php";  //加载模型类文件
require MODEL_PATH . $c . "Model.class.php"; //这一行代替上一行

//这里才是要载入的“当前控制器类”
//require "./" . $c . "Controller.class.php";  //加载控制器类文件
require CTRL_PATH . $c . "Controller.class.php"; //这一行代替上一行
//*/

//构建控制器类名并实例化控制器类
$controller_name = $c . "Controller";  //构建控制器的类名
$ctrl = new $controller_name(); //可变类

//构建动作名并调用控制器中对应的动作
$action = $a . "Action";
$ctrl->$action();  //这里调用控制器中方法