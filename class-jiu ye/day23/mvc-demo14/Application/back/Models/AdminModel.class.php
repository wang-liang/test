<?php
class AdminModel extends BaseModel{
	public function CheckCookieInfo($id,$pass){
		//比较时，要按照加密的方式进行比较！
		$sql = "select * from admin_user where md5(concat(id,'ABCDE'))='$id' and md5(concat(admin_pass,'ABCDE'))='$pass'";
		//一行
		return $this->db->getOneRow($sql);
	}
	public function CheckAdminInfo($user,$pass){
		$sql = "select * from admin_user where admin_name = '$user' and admin_pass = md5('$pass')";
		return $this->db->getOneRow($sql);
	}
	
}