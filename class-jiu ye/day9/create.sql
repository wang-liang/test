<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<?php
#定义表结构
create table tab_shuxing(
	id int auto_increment primary key,
	user_name varchar(20) not null unique key,
	password varchar(48) not null,
	age tinyint default 18,
	email varchar(50) comment '电子邮箱'
);
#创建索引
create table tab_index(
	id int auto_increment,
	user_name varchar(20),
	email varchar(50),
	age int,                /*没有索引*/
	key (email),            /*这就是普通索引*/
	unique key(user_name),  /*这就是唯一索引*/
	primary key(id),        /*这就是主键索引*/
);

#演示外键索引：
create banji(
	id int auto_increment primary key,
	banjihao varchar(10) unique key comment '班级号',
	banzhuren varchar(10) comment '班主任',
	open_data  data comment '开班日期'
);

create table xuesheng (
	stu_id int auto_increment primary key,
	name varchar(10),
	age tinyint,
	banji_id int  comment '班级id',
	foreign key (banji_id) referrnces banji(id)
);



?>