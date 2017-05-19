<?php
require './BaseModel.class.php';

class UserModel extends BaseModel{
	function GetUserAll(){
		//这里$config参数被删除了
		$sql = "select * from info";
		$data = $this->db->GetRows($sql);
		return $data;
	}
	function GetUserCount(){
		$sql = "select count(*) from info";
		$data = $this->db->GetOneData($sql);
		return $data;
	}
	function delUserByid($id){
		$sql = "delete from info where id = $id";
		$data = $this->db->exec($sql);
		return $data;
	}
	function showInfo($id){
		$sql = "select * from info where id = $id";
		$data = $this->db->GetOneRow($sql);
		return $data;
	}
	function insertUserInfo($username,$pwd,$age,$edu,$fav,$from){
		//获取表单提交的用户信息，其中$fav是处理后的数据结果
		$sql = "insert into info(username,pwd,age,edu,fav,from2,addate) values('$username',$pwd,$age,'$edu','$fav','$from',now())";
		$data = $this->db->exec($sql);
		return $data;
	}
	function GetUserInfoById($id){
		$sql = "select * from info where id = $id";
		$data = $this->db->GetOneRow($sql);
		return $data;
	}
	function UpdateUser($id,$username,$pwd,$age,$edu,$aihao,$from){
		$sql = "update info set username='$username'";
		if(!empty($pwd)){
			$sql .= ",pwd='$pwd'";
		}
		$sql .= ",age='$age'";
		$sql .= ",edu='$edu'";
		$sql .= ",fav='$aihao'";
		$sql .= ",from2='$from'";
		$sql .= "where id=$id";
		$result = $this->db->exec($sql);
		return $result;
	}
	
}