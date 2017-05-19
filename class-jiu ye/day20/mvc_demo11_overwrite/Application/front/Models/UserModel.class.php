<?php
class UserModel extends BaseModel{
	function GetUserAll(){   //显示所有用户信息
		$sql = "select * from info";
		return $this->db->GetRows($sql);
	}
	function GetUserCount(){  //显示用户数量
		$sql = "select count(*) from info";
		return $this->db->GetOneData($sql);
	} 
	function showInfo($id){  //显示指定ID的用户信息
		$sql = "select * from info where id=$id";
		$data = $this->db->GetOneRow($sql);
		return $data;
	}
	function deleteInfo($id){   //删除用户信息
		$sql = "delete from info where id=$id";
		return $this->db->exec($sql);
	}
	function insertUserInfo($username,$pwd,$age,$edu,$fav,$from){  //添加用户信息
		$sql = "insert into info(username,pwd,age,edu,fav,from2,addate) values('$username',$pwd,'$age','$edu','$fav','$from',now())";
		$data = $this->db->exec($sql);
		return $data;
	}
	function GetUserById($id){  //获取指定ID的用户信息，以便修改用户信息
		
	}
	function UpdateUserInfo(){   //更新用户信息
		
	}
}