<?php
//商品相关功能控制类
class GoodsController extends PlatformController{
	//展示添加表单页面功能
	public function addAction(){
		require VIEW_PATH . 'goods_add.html';
	}
	
	//处理商品添加提交的数据
	public function InsertAction(){
		//收集表单数据，存储到$data中
		$data['goods_name'] = $_POST['goods_name'];
		$data['shop_price'] = $_POST['shop_price'];
		$data['goods_desc'] = $_POST['goods_desc'];
		$data['goods_number'] = $_POST['goods_number'];
		//0非，1是
		$data['is_best'] = isset($_POST['is_best']) ? '1' : '0';
		$data['is_new'] = isset($_POST['is_new']) ? '1' : '0';
		$data['is_hot'] = isset($_POST['is_hot']) ? '1' : '0';
		$data['is_on_sale'] = isset($_POST['is_on_sale']) ? '1' : '0';
		//处理上传的图片
		//实例化上传工具类
		$t_upload = new Upload();
		// 调用方法，重新设定图片上传的目录，ROOT为站点根目录(index.php所在目录)
		$t_upload->setUploadPath(ROOT . 'Framework/tool/goods/'); 
		$t_upload->setPrefix('goods_ori_'); //调用修改前缀方法，重新设定上传之后的图片前缀名
		//调用上传函数实现图片上传，返回上传之后的路径地址（包含文件名）
		if($result = $t_upload->uploadFile($_FILES['goods_image_ori'])){   //goods_image_ori是文件上传之后提交的name值
			$data['image_ori'] = $result;  //image_ori该字段用来存储上传之后的商品图片地址
		}
		else{
			$this->GotoUrl('文件上传失败，原因是：' . $t_upload->getError(),'index.php?p=back&c=Goods&a=Add',10);
			die;
		}
		//获取的数据
		$data['admin_id'] = $_SESSION['admin_info']['id'];  //获取管理员的id信息
		$data['create_time'] = time();  //商品添加时间
		//实例化goods模型
		$m_goods = ModelFactory::M('GoodsModel');  
		//将添加的商品信息插入(写入)到数据库中
		$result = $m_goods->insertGoods($data); //$data中包含了添加新商品的所有信息
		//跳转
		if($result){
			//插入成功，跳转到商品列表
			header('Location:index.php?p=back&c=Goods&a=list');
			die;
		}
		else{
			//失败，跳转到添加新商品页面
			$this->GotoUrl('失败，失败原因','index.php?p=back&c=Goods&a=add',10);
			die;
		}
	}

	public function ListAction(){  //商品添加成功后，跳转到该动作，提示商品列表
		echo 'Goods:list!';
	}
	
}