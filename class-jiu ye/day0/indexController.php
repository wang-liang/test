<?php

	header("Content-Type: text/html;charset=utf-8");
	header("Cache-Control: no-cache");
	
	//获取本地时间添加到数据库
	$kaishi= 0;
	$jieshu= 0;
	$chkaishi= 0;
	$chjieshu= 0;
	$today= date('d');
	$conn=mysql_connect("127.0.0.1","root","root");
	mysql_select_db("test");
	
	$order= $_POST['order'];
	//命令为1 执行获取天数，和起始值结束值的数组元素
	if($order==1){
				
		    $daysql="update test set name=$today";
			mysql_query($daysql);
			
			$sql="select * from test where flag=1";
			$res=mysql_query($sql);
			//接收结果
			while($row=mysql_fetch_assoc($res)){
			echo "$row[id],$row[name],";
		}		
	
			mysql_free_result($res);			
		
		}
	
	if($order==2){
				//取出以前时间
			
			$sql="select * from day";		
			$res=mysql_query($sql);
			//接收结果
			while($row=mysql_fetch_assoc($res)){
			echo $row['day'];
			mysql_free_result($res);
			exit();
		    }
			
	
		}
	if($order==3){
		$kaishi= $_POST['kaishi'];
		$jieshu= $_POST['jieshu'];
		
		
		$chkaishi= $kaishi+6;
		$chjieshu= $jieshu+6;			
		if($kaishi<=96 && $kaishi>=92){		
			$chkaishi= $kaishi-90;
			$chjieshu= $chkaishi+5;
			
			
			}	
							
			
		//更新新的
		$sql1="update test set flag=1 where id>=$chkaishi and id<=$chjieshu";
			
		$res= mysql_query($sql1);
		//在把以前的标识清了
		$sql3="update test set flag=0 where id>=$kaishi and id<=$jieshu";
				
		$res= mysql_query($sql3);
		//在更新一下天数
		
		$sql5= "update day set day=$today";
		
		$res= mysql_query($sql5);
		
		mysql_free_result($res);	
		
			
	
	
		
		}
		
		
		
		//程序功能 解释
		//第一个命令1 
		//更新当前最新的数据库时间 并且把flag=1 的数据 给js页面处理
		
		//命令2 取得数据库的以前时间 放到静态页面
		
		
		//命令3 开始和结束位置的处理
		

	


?>