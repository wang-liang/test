<?php
class AdminModel extends BaseModel{
	function CheckAdmin($user,$pass){
		$sql = "select count(*) from admin_user where admin_name = '$user' and admin_pass = md5('$pass');";
		//echo $sql;
		//echo "<br />" . md5($pass);
		//die();
		$result = $this->db->GetOneData($sql); //返回一个数据值，表示找到的行数
		if($result == 1){
			//登录成功，应该去修改该条数据
			$sql = "update admin_user set login_times = login_times+1,last_login_time = now() ";
			$sql .= "where admin_name = '$user' and admin_pass = md5('$pass')";
			$result = $this->db->exec($sql);
			return true;
		}
		else
		{
			return false;  //否则找到0条记录
		}
	}
}