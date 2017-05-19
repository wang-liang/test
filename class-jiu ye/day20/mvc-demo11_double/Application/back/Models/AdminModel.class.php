<?php
class AdminModel extends BaseModel{
	function CheckAdminInfo($user,$pass){
		$sql = "select * from admin_user where admin_user='$user' and admin_pass=md5('$pass')";
		return $this->db->GetOneRow($sql);
	}
}