<?php
require './MySQLDB.class.php';

class UserModel{
	function GetUserAll(){
		$config = array(
		'host' =>"localhost",
		'port' => 3306,
		'user' => "root",
		'pass' => "root",
		'charset' => "utf8",
		'dbname' => "php39"
	);
		$sql ="select * from info";
		$db = MySQLDB::GetInstance($config);
		$data = $db->GetRows($sql);
		return $data;
	}
	function GetUserCount(){
		$config = array(
		'host' =>"localhost",
		'port' => 3306,
		'user' => "root",
		'pass' => "root",
		'charset' => "utf8",
		'dbname' => "php39"
	);
		$sql = "select count(*) from info";
		$db = MySQLDB::GetInstance($config);
		$data = $db->GetOneData($sql);
		return $data;
	}
}