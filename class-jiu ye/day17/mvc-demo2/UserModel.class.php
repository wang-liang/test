<?php
require './BaseModel.class.php';

class UserModel extends BaseModel{
	function GetUserAll(){
		//这里由于继承了父类BaseModel，因此这里的$config参数被删除了
		$sql ="select * from info";
		//$db = MySQLDB::GetInstance($config);
		//这里$this代表$obj_user这个实例对象，它在控制器其中被实例化
		//db是父类继承过来的一个属性(子类中没有构造方法，自动调用父类的)
		//它存储的是MySQL工具类的实例
		$data = $this->db->GetRows($sql);
		return $data;
	}
	function GetUserCount(){
		$sql = "select count(*) from info";
		//MySQLDB已经有实例化的对象，下面这一行被注释掉
		//$db = MySQLDB::GetInstance($config); //实例化MySQLDB数据库类
		$data = $this->db->GetOneData($sql);
		return $data;
	}
}