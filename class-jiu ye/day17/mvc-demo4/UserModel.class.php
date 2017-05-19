<?php
require './BaseModel.class.php';  //加载父类BaseModel

class UserModel extends BaseModel{  //
	function GetUserAll(){
		//这里由于继承了父类BaseModel，因此这里的$config参数被删除了
		$sql ="select * from info";   //构建sql语句
		//$db = MySQLDB::GetInstance($config);
		//这里$this代表$obj_user这个实例对象，它在控制器其中被实例化
		//db是父类继承过来的一个属性(子类中没有构造方法，自动调用父类的)
		//它存储的是MySQL工具类的实例
		$data = $this->db->GetRows($sql);  //调用数据库类中方法，执行sql语句
		return $data;   //将结果返回给实例化对象(在控制器中)
	}
	function GetUserCount(){
		$sql = "select count(*) from info";  //构建sql语句显示用户数量，只有一个数据
		//MySQLDB已经有实例化的对象，下面这一行被注释掉
		//$db = MySQLDB::GetInstance($config); //实例化MySQLDB数据库类
		$data = $this->db->GetOneData($sql);  //调用数据库类中方法，执行sql语句
		return $data;
	}
	function delUserByid($id){
		$sql = "delete from info where id = $id";    //构建sql语句删除指定id记录
		$data = $this->db->exec($sql);   //调用数据库类中删除方法，执行sql语句
		return $data;
	}

	function showInfo($id){
		$sql = "select * from info where id = $id";  //构建sql语句查找指定id记录用于显示详细信息
		$data = $this->db->GetOneRow($sql);
		return $data;
	}
	function insertUserInfo($username,$pwd,$age,$edu,$fav,$from){  //插入数据
		//获取表单提交的用户信息，其中$fav是处理后的数据结果
		$sql = "insert into info(username,pwd,age,edu,fav,from2,addate) values('$username',$pwd,$age,'$edu','$fav','$from',now())"; 
		$data = $this->db->exec($sql);
		return $data;
	}
	function GetUserInfoById($id){  //这里获取指定id的用户信息
		$sql = "select * from info where id = $id";
		$data = $this->db->GetOneRow($sql); //获取一行数据
		return $data;
	}
	function UpdateUser($id,$username,$pwd,$age,$edu,$aihao,$from){
		$sql = "update info set username='$username'";  //
		if(!empty($pwd)){
			$sql .= ",pwd='$pwd'";
		}
		$sql .= ", age='$age'";
		$sql .= ", edu='$edu'";
		$sql .= ", fav='$aihao'";
		$sql .= ", from2='$from'";
		$sql .= " where id = $id";
		$result = $this->db->exec($sql);
		return $result;
	}
}