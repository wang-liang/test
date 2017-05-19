<?php
//require './MySQLDB.class.php'; //加载数据库类文件
//已经在index.php中加载，这行不要了
class BaseModel{
	//定义一个变量，用于存储数据库类中的实例
	protected $db = null;
	//定义构造函数
	function __construct(){
		$config = array( //$config在这里是一个变量
		'host' =>"localhost",
		'port' => 3306,
		'user' => "root",
		'pass' => "root",
		'charset' => "utf8",
		'dbname' => "php44"
	);
	//这里db表示调用当前类的属性，用于存一个数据库类的实例，它是一个对象！！！
	//这里$this代表$obj_user这个实例对象，它在控制器其中被实例化
	$this->db = MySQLDB::GetInstance($config);
	}
}