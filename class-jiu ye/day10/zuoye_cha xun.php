<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>网页标题</title>
<meta name="keywords" content="关键字列表" />
<meta name="description" content="网页描述" />
<link rel="stylesheet" type="text/css" href="" />
<style type="text/css"></style>
<script type="text/javascript">



</script>
</head>

<body>
<?php
//查出最贵的一件商品的商品信息。
"select * from product order by price desc limit 0,1";
//查出最大(最新)的商品的编号（ID）。 
"select pro_id from product order by pro_id desc limit 0,1";
//查出最便宜商品的价格。
"select price from product order by price asc limit 0,1";
//取出最小(最旧)的商品编号。
"select pro_id from product order by pro_id asc limit 0,1";
//查出所有商品的总数量。
"select count(*) as 数量 from product";
//查出所有商品的平均价格。
"select *,avg(price) as 平均价 from product";
//查出联想品牌的所有商品的平均价格。
"select *,avg(price) as 平均价 from product where pinpai='联想'";
//按价格由高到低排序。
"select * from product order by price desc";
//按商品类型由低到高排序，类型内部按价格由高到低排序。
"select * from product order by protype_id asc, price desc";
//取出价格最高的前三个商品。
"select * from product order by price desc limit 0,3";
//查出每个产地各有多少数量的商品
"select chandi,count(*) as 数量 from product group by chandi";
//查出每个品种各有多少个商品
"select protype_id,count(*) as 数量 from product group by protype_id";




//查询出每个城市最高薪资的学生信息
select * from student a where not exists (select * from student where city=a.city and salary>a.salary)
select * from student a  inner join (select city,max(salary)as 最高薪资 from student group by city) b where a.salary=b.salary

 
?>
</body>
</html>
