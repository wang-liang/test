<?php
class AdminModel extends BaseModel{
	public function CheckAdminInfo($user,$pass){
		$sql = "select * from admin_user where admin_name = '$user' and admin_pass = md5('$pass')";
		return $this->db->getOneRow($sql);
	}
	public function CheckCookieInfo($id,$pass){
		//比较时，按照加密的方式进行比较！
		$sql = "select * from admin_user where md5(concat(id,'ABCD'))='$id' and md5(concat(admin_pass,'ABCD'))='$pass'";
		//返回一行数据
		return $this->db->getOneRow($sql);
	}
}