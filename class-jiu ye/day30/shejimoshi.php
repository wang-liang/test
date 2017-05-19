
<?php
class A{}
class B{}

class Gongchang{
	static function GetObject($className){
		$obj = new $className();
		return $obj;
	}
}
$o1 = Gongchang::GetObject("A");
$o2 = Gongchang::GetObject("B");


class{
	static function Gongchang($className){
		$obj = new $className();
		return $obj;
	}
}

class Single{
	private function __construct(){
		
	}
	static private $instance = null;
	private function __clone(){
	
	}
	static function GetObject(){
		if(!(self::$instance instanceof self)){
			self::$instance = new self();	
		}
		return self::$instance;
	}
}
$obj1 = Single::Getobj();















