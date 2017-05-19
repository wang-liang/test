<?php
//header("content-type:text/html;charset=utf-8");//有了基础控制器类，这一行不要了
require './ProductModel.class.php';
require './ModelFactory.class.php';
require './BaseController.class.php';

class ProductController extends BaseController{  //子类自动继承父类的构造方法
	function showAllProductAction(){
		//echo "aa";
		$obj = ModelFactory::M('productModel');
		$data = $obj->GetAllProduct(); //是一个二维数组
		include './Product_list.html';
	}
	function DetailAction(){
		echo "bb位置";
	}
	function DelAction(){
		echo "c位置";
	}
}

$ctrl = new ProductController();  //在实例化对象的同时自动调用父类的构造方法
$act = !empty($_GET['a']) ? $_GET['a'] : "Index";
$action = $act . "Action";
$ctrl->$action(); //可变函数---->>可变方法