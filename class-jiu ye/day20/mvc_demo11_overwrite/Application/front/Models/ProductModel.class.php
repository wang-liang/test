<?php
class ProductModel extends BaseModel{
	function showAllProduct(){  //显示所有商品列表
		$sql = "select product.*,protype_name from product inner join product_type as t on product.protype_id = t.protype_id";
		$data = $this->db->GetRows($sql);
		return $data;
	}
	function DelProductById($id){  //删除指定ID的商品
		$sql = "delete from product where pro_id=$id";
		return $this->db->exec($sql);
	}
}