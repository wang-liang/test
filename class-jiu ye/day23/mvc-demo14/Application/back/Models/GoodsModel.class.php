<?php
class GoodsModel extends BaseModel{
	//插入商品
	public function insertGoods($data){
		$sql = "insert into `goods` values (null,'{$data['goods_name']}','{$data['shop_price']}','{$data['goods_desc']}','{$data['goods_number']}','{$data['is_best']}','{$data['is_new']}','{$data['is_hot']}','{$data['is_on_sale']}','{$data['image_ori']}','{$data['admin_id']}','{$data['create_time']}')";
		return $this->db->exec($sql);
	}
}