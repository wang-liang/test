<?php
/*
function readDirs($path){
	$handle = opendir($path);
	while(FALSE !== ($filename = readdir($handle))){
		if($filename='.' || $filename='..'){
			continue;
		}
		$arr=explode(".",$filename);//获取扩展名
		$hzm = $arr[count($arr)-1];
        if($hzm=="jpg") { //文件过滤
			echo $filename;
			if(is_dir($path . '/' . $filename)){
				readDirs($path . '/' . $filename);
			}
		}
	}
}

array(
	pid =>0;
	id=>1;
	childlist=>array(
		pid=>1;
		id=>2;
		childlist=>array(
			pid=>2;
			id=>3;
			city=>array(
				pid=>3;
				id=>4;
			)
		)
	)
)

function f1($a,$pid=0){
	foreach($a as $k=>$v){
		foreach($v['zidai'] as $k1 => $v1){
			if($v1['id']==$nodeid){
				return $v['id'];
				else{
					f1($a,$pid=$v['id']);
				}
			}
		}
	}
}

create table user(

  `id` int(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `birth` varchar(32) NOT NULL COMMENT '生日',
  `gender` enum('男','女') default '男' COMMENT '性别',
  `email` varchar(32) not null COMMENT '电子邮箱',
  PRIMARY KEY (`id`),
  unique key name(name),
)engine=InnoDB default charset=utf8 comment '用户表';

select count(*) as user from user where 'birth'>'1985-1-1' and 'Gender'='男';
*/

/*
if (isset($_POST['submit'])){
			$num = $_POST['num'];
			if( $_POST['tt']=="t1"){
			$result = decbin($num);
			}
			else if($_POST['tt']=="t2"){
				$result =decoct($num);
			}else{
				$result =dechex($num);
			}
}else{
		$result ='';
	}
	?>
	<form method="post" action="">
			请输入一个数：<input type="text" name="num">
			<select name="tt" >
				<option value="t1" id="t1" >十转二</option>
				<option value="t2" id="t2">十转八</option>
				<option value="t3" id="t3" >十转十六</option>
			</select>
			<input type="submit" name="submit" value="点击计算"></input>
			转后的结果是：<input type="text" name="num3" value="<?php echo $result ?>">
		</form>
		*/
		//$a = "0.0";
		//var_dump((bool)$a);


