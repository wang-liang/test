<?php
//上面四行代码，都加载到index.php请求分发器中
class ProductController extends BaseController{  //子类自动继承父类的构造方法
	function showAllProductAction(){
		//echo "aa";
		$obj = ModelFactory::M('productModel');
		$data = $obj->GetAllProduct(); //是一个二维数组
		include VIEW_PATH . 'Product_list.html';
	}
	function DetailAction(){
		echo "bb位置";
	}
	function DelAction(){
		$id = $_GET['id'];
		$obj = ModelFactory::M('productModel');
		$data = $obj->DelProductById($id);
		$this->GotoUrl("删除成功！",'?p=front&c=Product&a=showAllProduct',1);
	}
}

