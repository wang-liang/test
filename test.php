<?php
function digui($str){
	$str = $str-3;
	if($str<5){
		echo $str;
	}else{
		digui($str);
	}
}
digui(10);



select 用户名 form 记录表 where DATEDIFF(now(),'访问时间')<3 group by ('用户名') order by count(*) desc;

function api(){
	$str = file_get_contents('http://php');	
	$arr = json_decode($str,true);
	if($arr['username']!== null && $arr['password']!== null && $arr['phone']!== null){
		
	}

}