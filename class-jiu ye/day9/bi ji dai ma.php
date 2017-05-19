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
create table tab_char_varchar(
	postcode char(6), /*中国邮政编码*/
	name varchar(10)  /*姓名*/
);

#演示enum, set的使用：
create table enum_set(
	id int auto_increment primary key,
	sex enum('男','女'),
	fav set('篮球','排球','足球','中国足球','台球')
);
insert into enum_set (id,sex,fav) values(null,'男','篮球');
insert into enum_set (id,sex,fav) values(null,'女','篮球,排球,台球');
insert into enum_set (id,sex,fav) values(null,'女',19);

#演示时间日期型字段
create table tab_time(
	dt datetime,
	d2 date,
	t2 time,
	y year,
	ts timestamp /*这个字段通常不用插入数据*/
);
insert into tab_time(dt,d2,t2,y)values(now(),now(),now(),'2015');
insert into tab_time(dt,d2,t2,y)values('2015-7-8 10:12:30','2015/7/8','13:14:15','2015');
create table tab_shuxing(
	id int auto_increment primary key,
	user_name varchar(20) not null unique key,
	password varchar(48) not null,
	age tinyint default 18,
	email varchar(50) comment '电子邮箱'
);

insert into tab_shuxing (id,user_name,password,age,email)values(1,'user1','1234',20,'admin@qq.com');
insert into tab_shuxing (id,user_name,password,age,email)values(null,'user2',md5('1234'),20,'admin@qq.com');

#演示索引创建语法：
create table tab_suoyin(
	id int auto_increment,
	user_name varchar(20),
	email varchar(50),
	age int,          /*没有索引*/
	key (email),      /*普通索引*/
	primary key (id), /*主键索引*/
	unique key (user_name)/*唯一索引*/
);

#演示外键索引：
create table banji(
	id int auto_increment primary key,
	banjihao varchar(10) unique key comment '班级号',
	banzhuren varchar(10) comment '班主任',
	open_date date comment '开班日期'
);

create table xuesheng(
	stu_id int auto_increment primary key,
	name varchar(10),
	age tinyint,
	banji_id int comment '班级id',
	foreign key (banji_id) references banji(id)
);
?>
</body>
</html>
