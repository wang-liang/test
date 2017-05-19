<?php
session_start();
echo "<pre>";
class Student{
	private $_name;
	public function __construct($n){
		$this->_name = $n;
	}
}
$_SESSION['object'] = new Student('张三');
var_dump($_SESSION);